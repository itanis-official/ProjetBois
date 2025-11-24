{{-- resources/views/user/dashboard.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord - ProjetBois</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-white shadow-sm">
        <div class="container mx-auto px-4 py-4">
            <div class="flex justify-between items-center">
                <div class="text-xl font-bold text-blue-600">
                    ProjetBois
                </div>
                <nav class="flex items-center space-x-4">
                    <span class="text-gray-700">Bonjour, {{ Auth::user()->name }}</span>
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">
                        {{ Auth::user()->role }}
                    </span>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-gray-600 hover:text-blue-600">
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
            <h1 class="text-2xl font-bold text-gray-800 mb-6">
                Tableau de bord Utilisateur
            </h1>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
                <div class="bg-blue-50 p-4 rounded border border-blue-200">
                    <h3 class="font-semibold text-blue-800">Produits</h3>
                    <p class="text-sm text-blue-600">Parcourir le catalogue</p>
                </div>
                <div class="bg-green-50 p-4 rounded border border-green-200">
                    <h3 class="font-semibold text-green-800">Demandes de devis</h3>
                    <p class="text-sm text-green-600">Soumettre une demande</p>
                </div>
                <div class="bg-purple-50 p-4 rounded border border-purple-200">
                    <h3 class="font-semibold text-purple-800">Mon profil</h3>
                    <p class="text-sm text-purple-600">Gérer mon compte</p>
                </div>
            </div>

            <div class="bg-gray-50 p-4 rounded">
                <h3 class="font-semibold mb-2">Informations du compte :</h3>
                <p><strong>Nom :</strong> {{ Auth::user()->name }}</p>
                <p><strong>Email :</strong> {{ Auth::user()->email }}</p>
                <p><strong>Rôle :</strong> 
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded text-sm">
                        {{ Auth::user()->role }}
                    </span>
                </p>
            </div>
        </div>
    </main>
</body>
</html>