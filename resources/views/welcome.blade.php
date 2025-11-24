<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProjetBois - Connexion</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-br from-blue-50 to-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-4xl w-full mx-4">
        <div class="text-center mb-8">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">🚀 ProjetBois</h1>
            <p class="text-xl text-gray-600">Système de gestion e-commerce avec hotspots interactifs</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Carte Connexion -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Connexion</h2>
                
                @if($errors->any())
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                        {{ $errors->first() }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">
                            Email
                        </label>
                        <input type="email" id="email" name="email" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                               value="{{ old('email') }}" required autofocus
                               placeholder="votre@email.com">
                    </div>

                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                            Mot de passe
                        </label>
                        <input type="password" id="password" name="password" 
                               class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:border-blue-500 focus:ring-2 focus:ring-blue-200"
                               required
                               placeholder="Votre mot de passe">
                    </div>

                    <button type="submit" 
                            class="w-full bg-blue-600 text-white py-3 px-4 rounded-lg hover:bg-blue-700 focus:outline-none focus:ring-4 focus:ring-blue-200 font-semibold transition duration-200">
                        Se connecter
                    </button>
                </form>
            </div>

            <!-- Carte Informations -->
            <div class="bg-white rounded-2xl shadow-lg p-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Accès de test</h2>
                
                <div class="space-y-4">
                    <!-- Admin -->
                    <div class="border-2 border-red-200 bg-red-50 rounded-lg p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-red-600 text-white px-2 py-1 rounded text-sm font-bold mr-2">ADMIN</span>
                            <span class="font-semibold text-red-800">Accès complet</span>
                        </div>
                        <p class="text-sm text-gray-700 mb-1">
                            <strong>Email:</strong> admin@test.com
                        </p>
                        <p class="text-sm text-gray-700">
                            <strong>Mot de passe:</strong> password
                        </p>
                    </div>

                    <!-- Utilisateur -->
                    <div class="border-2 border-blue-200 bg-blue-50 rounded-lg p-4">
                        <div class="flex items-center mb-2">
                            <span class="bg-blue-600 text-white px-2 py-1 rounded text-sm font-bold mr-2">USER</span>
                            <span class="font-semibold text-blue-800">Accès standard</span>
                        </div>
                        <p class="text-sm text-gray-700 mb-1">
                            <strong>Email:</strong> user@test.com
                        </p>
                        <p class="text-sm text-gray-700">
                            <strong>Mot de passe:</strong> password
                        </p>
                    </div>

                    <!-- Features -->
                    <div class="mt-6">
                        <h3 class="font-semibold text-gray-800 mb-3">Fonctionnalités :</h3>
                        <ul class="text-sm text-gray-600 space-y-2">
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                Tableaux de bord selon le rôle
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                Gestion des produits avec hotspots
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                Demandes de devis
                            </li>
                            <li class="flex items-center">
                                <span class="text-green-500 mr-2">✓</span>
                                Interface administrateur
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Footer -->
        <div class="text-center mt-8 text-gray-500">
            <p>Laravel {{ app()->version() }} | PHP {{ PHP_VERSION }} | Développement en cours</p>
        </div>
    </div>
</body>
</html>