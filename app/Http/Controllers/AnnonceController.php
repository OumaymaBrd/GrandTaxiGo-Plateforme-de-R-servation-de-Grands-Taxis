<?php

namespace App\Http\Controllers;

use App\Models\Annonce;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AnnonceController extends Controller
{
    public function index()
    {
        $annonces = Annonce::with('user')
            ->where('disponibilite', true)
            ->latest()
            ->paginate(9);
        return view('annonces.index', compact('annonces'));
    }

    public function create()
    {
        return view('annonces.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'point_depart' => 'required|string|max:255',
            'point_destination' => 'required|string|max:255',
            'nombre_place_taxi' => 'required|integer|min:1',
            'heure_depart' => 'required|date',
            'heure_arrive' => 'required|date|after:heure_depart',
            'prix_chauffeur' => 'required|numeric|min:0',
            'prix_passager' => 'nullable|numeric|min:0',
            'deplacement_ville' => 'required|boolean',
            'boulevard' => 'nullable|string|max:255',
            'rue' => 'nullable|string|max:255',
            'quartier' => 'nullable|string|max:255',
            'type_vehicule' => 'required|string|max:255',
            'couleur_vehicule' => 'required|string|max:255',
            'matricule_vehicule' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('annonces', 'public');
            $validated['image'] = $path;
        }

        $validated['user_id'] = auth()->id();
        $validated['send_annonce'] = auth()->user()->role;

        Annonce::create($validated);

        return redirect()->route('annonces.mes-annonces')
            ->with('success', 'Annonce créée avec succès.');
    }

    public function mesAnnonces()
    {
        $annonces = Annonce::where('user_id', auth()->id())
            ->latest()
            ->paginate(9);
        return view('annonces.mes-annonces', compact('annonces'));
    }

    public function toggleDisponibilite(Annonce $annonce)
    {
        if ($annonce->user_id !== auth()->id()) {
            abort(403);
        }

        $annonce->update([
            'disponibilite' => !$annonce->disponibilite
        ]);

        return back()->with('success', 'Disponibilité mise à jour.');
    }

    public function show(Annonce $annonce)
    {
        return view('annonces.show', compact('annonce'));
    }
}
