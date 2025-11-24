{{-- resources/views/admin/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration - ProjetBois</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-red-600 text-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold">
                    Panel Administrateur
                </div>
                <nav class="flex items-center space-x-4">
                    <span class="bg-red-700 px-3 py-1 rounded">Admin: {{ Auth::user()->name }}</span>
                    <a href="{{ route('user.design') }}" class="bg-white text-red-600 px-3 py-1 rounded hover:bg-gray-100">
                        Vue User
                    </a>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="bg-red-700 px-3 py-1 rounded hover:bg-red-800">
                            Déconnexion
                        </button>
                    </form>
                </nav>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md p-6">
            <h1 class="text-3xl font-bold text-gray-800 mb-6">
                🛠️ Administration ProjetBois
            </h1>

            <!-- Stats -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
                <div class="bg-blue-50 p-4 rounded border border-blue-200">
                    <h3 class="font-semibold text-blue-800">Utilisateurs</h3>
                    <p class="text-2xl font-bold text-blue-600">25</p>
                </div>
                <div class="bg-green-50 p-4 rounded border border-green-200">
                    <h3 class="font-semibold text-green-800">Produits</h3>
                    <p class="text-2xl font-bold text-green-600">12</p>
                </div>
                <div class="bg-purple-50 p-4 rounded border border-purple-200">
                    <h3 class="font-semibold text-purple-800">Devis en attente</h3>
                    <p class="text-2xl font-bold text-purple-600">5</p>
                </div>
                <div class="bg-orange-50 p-4 rounded border border-orange-200">
                    <h3 class="font-semibold text-orange-800">Revenus</h3>
                    <p class="text-2xl font-bold text-orange-600">15K TND</p>
                </div>
            </div>

            <!-- Quick Actions -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold mb-4">Actions rapides</h2>
                <div class="flex space-x-4">
                    <a href="#" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
                        Gérer les utilisateurs
                    </a>
                    <a href="#" class="bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">
                        Ajouter un produit
                    </a>
                    <a href="#" class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">
                        Voir les demandes
                    </a>
                </div>
            </div>

            <!-- Admin Info -->
            <div class="bg-red-50 p-4 rounded border border-red-200">
                <h3 class="font-semibold text-red-800 mb-2">🔐 Accès Administrateur Complet</h3>
                <p><strong>Nom :</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
                <p><strong>Rôle :</strong> 
                    <span class="bg-red-600 text-white px-2 py-1 rounded text-sm">
                        {{ Auth::user()->role }} - Accès complet
                    </span>
                </p>
            </div>
        </div>
    </main>
</body>
</html>