@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <h2 class="text-2xl font-semibold text-gray-800 mb-6">
                        Bienvenue, {{ Auth::user()->prenom }} {{ Auth::user()->nom }}
                    </h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Informations du compte -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Informations du compte</h3>
                            <div class="space-y-3">
                                <p><span class="font-medium">Rôle :</span> {{ ucfirst(Auth::user()->role) }}</p>
                                <p><span class="font-medium">Email :</span> {{ Auth::user()->email }}</p>
                                <p><span class="font-medium">Téléphone :</span> {{ Auth::user()->telephone }}</p>
                                <p>
                                    <span class="font-medium">Statut :</span>
                                    <span class="{{ Auth::user()->status === 'active' ? 'text-green-600' : 'text-red-600' }}">
                                        {{ Auth::user()->status === 'active' ? 'Actif' : 'Inactif' }}
                                    </span>
                                </p>
                            </div>
                        </div>

                        <!-- Actions rapides -->
                        <div class="bg-gray-50 p-6 rounded-lg">
                            <h3 class="text-lg font-semibold text-gray-700 mb-4">Actions rapides</h3>
                            <div class="grid grid-cols-1 gap-4">
                                <a href="{{ route('profile.edit') }}"
                                   class="inline-flex items-center justify-center px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700">
                                    <i class="fas fa-user-edit mr-2"></i>
                                    Modifier mon profil
                                </a>
                                @if(Auth::user()->role === 'passager')
                                    <a href="{{ route('annonces.index') }}"
                                       class="inline-flex items-center justify-center px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">
                                        <i class="fas fa-taxi mr-2"></i>
                                        Rechercher un trajet
                                    </a>
                                @else
                                    <a href="{{ route('annonces.create') }}"
                                       class="inline-flex items-center justify-center px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">
                                        <i class="fas fa-plus mr-2"></i>
                                        Créer une annonce
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
