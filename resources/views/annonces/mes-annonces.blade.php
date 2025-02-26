@extends('layouts.app')

@section('title', 'Mes Annonces')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-semibold text-gray-800">Mes Annonces</h2>
                <a href="{{ route('annonces.create') }}"
                   class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded inline-flex items-center">
                    <i class="fas fa-plus mr-2"></i>
                    Créer une annonce
                </a>
            </div>

            @if(session('success'))
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                    {{ session('success') }}
                </div>
            @endif

            @if($annonces->isEmpty())
                <div class="text-center py-8">
                    <i class="fas fa-clipboard-list text-gray-400 text-5xl mb-4"></i>
                    <p class="text-gray-500">Vous n'avez pas encore créé d'annonces.</p>
                </div>
            @else
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach($annonces as $annonce)
                        <div class="bg-white rounded-lg shadow-md overflow-hidden border border-gray-200">
                            <div class="p-4">
                                <div class="flex items-center justify-between mb-4">
                                    <span class="px-3 py-1 rounded-full text-sm font-semibold
                                        {{ $annonce->send_annonce === 'chauffeur' ? 'bg-green-100 text-green-800' : 'bg-blue-100 text-blue-800' }}">
                                        {{ ucfirst($annonce->send_annonce) }}
                                    </span>
                                    <span class="text-sm text-gray-500">
                                        {{ $annonce->created_at->format('d/m/Y H:i') }}
                                    </span>
                                </div>

                                <div class="space-y-3">
                                    <div class="flex items-start space-x-2">
                                        <i class="fas fa-map-marker-alt text-red-500 mt-1"></i>
                                        <div>
                                            <p class="text-sm text-gray-600">Départ</p>
                                            <p class="font-medium">{{ $annonce->point_depart }}</p>
                                        </div>
                                    </div>

                                    <div class="flex items-start space-x-2">
                                        <i class="fas fa-flag-checkered text-green-500 mt-1"></i>
                                        <div>
                                            <p class="text-sm text-gray-600">Destination</p>
                                            <p class="font-medium">{{ $annonce->point_destination }}</p>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-2 gap-4">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-clock text-blue-500"></i>
                                            <div>
                                                <p class="text-sm text-gray-600">Départ</p>
                                                <p class="font-medium">{{ \Carbon\Carbon::parse($annonce->heure_depart)->format('H:i') }}</p>
                                            </div>
                                        </div>

                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-users text-purple-500"></i>
                                            <div>
                                                <p class="text-sm text-gray-600">Places</p>
                                                <p class="font-medium">{{ $annonce->nombre_place_taxi }}</p>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="flex items-center justify-between pt-3 border-t">
                                        <div class="flex items-center space-x-2">
                                            <i class="fas fa-money-bill-wave text-green-500"></i>
                                            <span class="font-bold text-lg">
                                                {{ number_format($annonce->prix_chauffeur, 2) }} DH
                                            </span>
                                        </div>

                                        @if($annonce->deplacement_ville)
                                            <span class="px-3 py-1 rounded-full text-sm font-semibold bg-yellow-100 text-yellow-800">
                                                Inter-ville
                                            </span>
                                        @endif
                                    </div>

                                    @if($annonce->send_annonce === 'chauffeur')
                                        <div class="mt-3 pt-3 border-t">
                                            <div class="flex items-center space-x-2">
                                                <i class="fas fa-car text-gray-500"></i>
                                                <span class="text-sm">
                                                    {{ $annonce->type_vehicule }} -
                                                    {{ $annonce->couleur_vehicule }} -
                                                    {{ $annonce->matricule_vehicule }}
                                                </span>
                                            </div>
                                        </div>
                                    @endif

                                    <div class="mt-4 pt-3 border-t flex justify-between">
                                        <div class="flex items-center">
                                            <span class="px-3 py-1 rounded-full text-sm font-semibold
                                                {{ $annonce->disponible ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ $annonce->disponible ? 'Disponible' : 'Non disponible' }}
                                            </span>
                                        </div>
                                        <div class="flex space-x-2">
                                            <form method="POST" action="{{ route('annonces.toggle-disponibilite', $annonce) }}" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-blue-600 hover:text-blue-800">
                                                    <i class="fas fa-toggle-on"></i>
                                                </button>
                                            </form>
                                            <form method="POST" action="{{ route('annonces.terminer', $annonce) }}" class="inline">
                                                @csrf
                                                @method('PATCH')
                                                <button type="submit" class="text-red-600 hover:text-red-800"
                                                        onclick="return confirm('Êtes-vous sûr de vouloir terminer cette annonce ?')">
                                                    <i class="fas fa-times-circle"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="mt-6">
                    {{ $annonces->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
