<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-6">Mon Profil</h2>

                    @if (session('success'))
                        <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                            {{ session('success') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Image de profil actuelle -->
                            @if(auth()->user()->image)
                                <div class="col-span-2">
                                    <img src="{{ Storage::url(auth()->user()->image) }}"
                                         alt="Photo de profil"
                                         class="w-32 h-32 rounded-full object-cover">
                                </div>
                            @endif

                            <!-- Nom -->
                            <div>
                                <x-label for="nom" value="Nom" />
                                <x-input id="nom" name="nom" type="text" class="mt-1 block w-full"
                                        :value="old('nom', auth()->user()->nom)" required />
                            </div>

                            <!-- Prénom -->
                            <div>
                                <x-label for="prenom" value="Prénom" />
                                <x-input id="prenom" name="prenom" type="text" class="mt-1 block w-full"
                                        :value="old('prenom', auth()->user()->prenom)" required />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-label for="email" value="Email" />
                                <x-input id="email" name="email" type="email" class="mt-1 block w-full"
                                        :value="old('email', auth()->user()->email)" required />
                            </div>

                            <!-- Téléphone -->
                            <div>
                                <x-label for="telephone" value="Téléphone" />
                                <x-input id="telephone" name="telephone" type="tel" class="mt-1 block w-full"
                                        :value="old('telephone', auth()->user()->telephone)" required />
                            </div>

                            <!-- Date de naissance -->
                            <div>
                                <x-label for="date_naissance" value="Date de naissance" />
                                <x-input id="date_naissance" name="date_naissance" type="date" class="mt-1 block w-full"
                                        :value="old('date_naissance', auth()->user()->date_naissance->format('Y-m-d'))" required />
                            </div>

                            <!-- Nouvelle image -->
                            <div>
                                <x-label for="image" value="Nouvelle photo de profil" />
                                <input id="image" name="image" type="file" class="mt-1 block w-full" />
                            </div>

                            <!-- Statut du compte -->
                            <div class="col-span-2">
                                <x-label for="status" value="Statut du compte" />
                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" name="status" value="active"
                                               {{ auth()->user()->status === 'enregistre' ? 'checked' : '' }}
                                               class="form-radio h-4 w-4 text-indigo-600">
                                        <span class="ml-2">Actif</span>
                                    </label>
                                    <label class="inline-flex items-center ml-6">
                                        <input type="radio" name="status" value="inactive"
                                               {{ auth()->user()->status === 'supprime' ? 'checked' : '' }}
                                               class="form-radio h-4 w-4 text-red-600">
                                        <span class="ml-2">Désactivé</span>
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end mt-6 space-x-4">
                            <x-button type="button" onclick="history.back()" class="bg-gray-300">
                                Annuler
                            </x-button>
                            <x-button>
                                Enregistrer les modifications
                            </x-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
