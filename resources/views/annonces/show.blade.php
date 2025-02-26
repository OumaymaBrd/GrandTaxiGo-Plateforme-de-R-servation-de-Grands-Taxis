{{-- <x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Détails de l\'annonce') }}
            </h2>
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50">
                <i class="fas fa-arrow-left mr-2"></i>
                Retour
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <!-- Image de l'annonce -->
                        <div class="md:col-span-2">
                            <img src="{{ $annonce->image_url }}"
                                 alt="Image de l'annonce"
                                 class="w-full h-64 object-cover rounded-lg shadow-md">
                        </div>

                        <!-- Informations de l'annonceur -->
                        <div class="md:col-span-2 flex items-center space-x-4 p-4 bg-gray-50 rounded-lg">
                            <img src="{{ $annonce->user->profile_photo_url }}"
                                 alt="{{ $annonce->user->name }}"
                                 class="h-16 w-16 rounded-full object-cover border-2 border-indigo-500">
                            <div>
                                <h3 class="text-lg font-semibold">{{ $annonce->user->name }} {{ $annonce->user->surname }}</h3>
                                <p class="text-gray-600">{{ $annonce->user->role }}</p>
                                <p class="text-sm text-gray-500">Membre depuis {{ $annonce->user->created_at->format('M Y') }}</p>
                            </div>
                        </div>

                        <!-- Détails du trajet -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold border-b pb-2">Détails du trajet</h3>

                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Point de départ</p>
                                    <p class="font-medium">{{ $annonce->point_depart }}</p>
                                </div>

                                <div>
                                    <p class="text-sm text-gray-600">Destination</p>
                                    <p class="font-medium">{{ $annonce->point_destination }}</p>
                                </div>

                                <div class="flex space-x-4">
                                    <div>
                                        <p class="text-sm text-gray-600">Date de départ</p>
                                        <p class="font-medium">{{ $annonce->heure_depart->format('d/m/Y H:i') }}</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600">Date d'arrivée</p>
                                        <p class="font-medium">{{ $annonce->heure_arrive->format('d/m/Y H:i') }}</p>
                                    </div>
                                </div>

                                <div class="flex space-x-4">
                                    <div>
                                        <p class="text-sm text-gray-600">Prix chauffeur</p>
                                        <p class="font-medium">{{ $annonce->prix_chauffeur }} DH</p>
                                    </div>
                                    <div>
                                        <p class="text-sm text-gray-600">Prix passager</p>
                                        <p class="font-medium">{{ $annonce->prix_passager }} DH</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Détails du véhicule et localisation -->
                        <div class="space-y-4">
                            <h3 class="text-lg font-semibold border-b pb-2">Détails du véhicule</h3>

                            <div class="grid grid-cols-1 gap-4">
                                <div>
                                    <p class="text-sm text-gray-600">Type de véhicule</p>
                                    <p class="font-medium">{{ $annonce->type_vehicule }}</p>
                                </div>

                                <div>
                                    <p class="text-sm text-gray-600">Couleur</p>
                                    <p class="font-medium">{{ $annonce->couleur_vehicule }}</p>
                                </div>

                                <div>
                                    <p class="text-sm text-gray-600">Matricule</p>
                                    <p class="font-medium">{{ $annonce->matricule_vehicule }}</p>
                                </div>

                                @if($annonce->boulevard || $annonce->rue || $annonce->quartier)
                                    <div class="pt-4 border-t">
                                        <h4 class="text-md font-semibold mb-2">Détails de localisation</h4>
                                        @if($annonce->boulevard)
                                            <p class="text-sm text-gray-600">Boulevard : {{ $annonce->boulevard }}</p>
                                        @endif
                                        @if($annonce->rue)
                                            <p class="text-sm text-gray-600">Rue : {{ $annonce->rue }}</p>
                                        @endif
                                        @if($annonce->quartier)
                                            <p class="text-sm text-gray-600">Quartier : {{ $annonce->quartier }}</p>
                                        @endif
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
