<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TaxiGrandPro - Service de Transport</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body class="bg-gray-50">
    <!-- Navigation -->
    <nav class="bg-white shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <a href="/" class="flex items-center space-x-2">
                        <i class="fas fa-taxi text-yellow-500 text-2xl"></i>
                        <span class="text-xl font-bold text-gray-800">TaxiGrandPro</span>
                    </a>
                </div>
                <div class="flex items-center space-x-4">
                    @auth
                        <a href="{{ route('dashboard') }}" class="text-gray-700 hover:text-gray-900">
                            Tableau de bord
                        </a>
                        <a href="{{ route('profile.edit') }}" class="text-gray-700 hover:text-gray-900">
                            Mon Profil
                        </a>
                        <form method="POST" action="{{ route('logout') }}" class="inline">
                            @csrf
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
                                Déconnexion
                            </button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="text-gray-700 hover:text-gray-900">
                            Connexion
                        </a>
                        <a href="{{ route('register') }}" class="bg-yellow-500 hover:bg-yellow-600 text-white font-bold py-2 px-4 rounded">
                            S'inscrire
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="pt-24 pb-12 bg-gradient-to-r from-yellow-400 to-yellow-600">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl font-extrabold text-white sm:text-5xl md:text-6xl">
                    Votre Transport de Confiance
                </h1>
                <p class="mt-3 max-w-md mx-auto text-base text-white sm:text-lg md:mt-5 md:text-xl">
                    Voyagez en toute sécurité avec nos chauffeurs professionnels disponibles 24/7.
                </p>
                <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                    @guest
                        <div class="rounded-md shadow">
                            <a href="{{ route('register') }}" class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-yellow-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                Commencer
                            </a>
                        </div>
                    @endguest
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-12 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Nos Services
                </h2>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                    <!-- Service 1 -->
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                            <i class="fas fa-clock"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">24/7 Disponible</h3>
                        <p class="mt-2 text-base text-gray-500 text-center">
                            Nos services sont disponibles jour et nuit pour répondre à vos besoins.
                        </p>
                    </div>

                    <!-- Service 2 -->
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Sécurité Garantie</h3>
                        <p class="mt-2 text-base text-gray-500 text-center">
                            Chauffeurs vérifiés et véhicules régulièrement contrôlés.
                        </p>
                    </div>

                    <!-- Service 3 -->
                    <div class="flex flex-col items-center">
                        <div class="flex items-center justify-center h-12 w-12 rounded-md bg-yellow-500 text-white">
                            <i class="fas fa-money-bill-wave"></i>
                        </div>
                        <h3 class="mt-4 text-lg font-medium text-gray-900">Prix Compétitifs</h3>
                        <p class="mt-2 text-base text-gray-500 text-center">
                            Des tarifs transparents et abordables pour tous vos trajets.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Comment ça marche Section -->
    <section class="py-12 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-900">
                    Comment ça marche ?
                </h2>
            </div>
            <div class="mt-10">
                <div class="grid grid-cols-1 gap-10 sm:grid-cols-3">
                    <!-- Étape 1 -->
                    <div class="relative">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-yellow-500 text-white">
                                1
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">Inscrivez-vous</h3>
                            <p class="mt-2 text-base text-gray-500 text-center">
                                Créez votre compte en quelques clics.
                            </p>
                        </div>
                    </div>

                    <!-- Étape 2 -->
                    <div class="relative">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-yellow-500 text-white">
                                2
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">Réservez un taxi</h3>
                            <p class="mt-2 text-base text-gray-500 text-center">
                                Choisissez votre destination et réservez instantanément.
                            </p>
                        </div>
                    </div>

                    <!-- Étape 3 -->
                    <div class="relative">
                        <div class="flex flex-col items-center">
                            <div class="flex items-center justify-center h-12 w-12 rounded-full bg-yellow-500 text-white">
                                3
                            </div>
                            <h3 class="mt-4 text-lg font-medium text-gray-900">Profitez du trajet</h3>
                            <p class="mt-2 text-base text-gray-500 text-center">
                                Voyagez en toute tranquillité avec nos chauffeurs professionnels.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-800">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Contact -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Contact</h3>
                    <ul class="space-y-2 text-gray-300">
                        <li><i class="fas fa-phone mr-2"></i> +1 234 567 890</li>
                        <li><i class="fas fa-envelope mr-2"></i> contact@taxigrandpro.com</li>
                        <li><i class="fas fa-map-marker-alt mr-2"></i> 123 Rue Example, Ville</li>
                    </ul>
                </div>

                <!-- Liens Rapides -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Liens Rapides</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-300 hover:text-white">À propos</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Services</a></li>
                        <li><a href="#" class="text-gray-300 hover:text-white">Conditions d'utilisation</a></li>
                    </ul>
                </div>

                <!-- Réseaux Sociaux -->
                <div>
                    <h3 class="text-white text-lg font-semibold mb-4">Suivez-nous</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-facebook text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-twitter text-2xl"></i>
                        </a>
                        <a href="#" class="text-gray-300 hover:text-white">
                            <i class="fab fa-instagram text-2xl"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-700 pt-8 text-center">
                <p class="text-gray-300">&copy; 2024 TaxiGrandPro. Tous droits réservés.</p>
            </div>
        </div>
    </footer>
</body>
</html>
