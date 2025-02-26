<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'point_depart',
        'point_destination',
        'nombre_place_taxi',
        'heure_depart',
        'heure_arrive',
        'prix_chauffeur',
        'prix_passager',
        'deplacement_ville',
        'boulevard',
        'rue',
        'quartier',
        'type_vehicule',
        'couleur_vehicule',
        'matricule_vehicule',
        'disponibilite',
        'send_annonce',
        'image'
    ];

    protected $casts = [
        'heure_depart' => 'datetime',
        'heure_arrive' => 'datetime',
        'deplacement_ville' => 'boolean',
        'disponibilite' => 'boolean',
        'prix_chauffeur' => 'decimal:2',
        'prix_passager' => 'decimal:2'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
