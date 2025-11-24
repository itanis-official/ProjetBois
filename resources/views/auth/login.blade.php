{{-- resources/views/auth/login.blade.php --}}
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ProjetBois</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
    <div class="max-w-md w-full bg-white rounded-lg shadow-md p-6">
        <div class="text-center mb-6">
            <h1 class="text-2xl font-bold text-gray-800">Connexion</h1>
            <p class="text-gray-600">Accédez à votre compte</p>
        </div>

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
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                       value="{{ old('email') }}" required autofocus>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-gray-700 text-sm font-bold mb-2">
                    Mot de passe
                </label>
                <input type="password" id="password" name="password" 
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:border-blue-500"
                       required>
            </div>

            <button type="submit" 
                    class="w-full bg-blue-600 text-white py-2 px-4 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                Se connecter
            </button>
        </form>

        <div class="mt-6 text-center">
            <p class="text-gray-600">Comptes de test :</p>
            <div class="mt-2 space-y-2 text-sm">
                <div class="bg-red-50 p-2 rounded">
                    <strong>Admin:</strong> admin@test.com / password
                </div>
                <div class="bg-blue-50 p-2 rounded">
                    <strong>User:</strong> user@test.com / password
                </div>
            </div>
        </div>
    </div>
</body>
</html>