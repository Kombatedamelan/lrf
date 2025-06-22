<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - FORELAB</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&family=Playfair+Display:wght@400;600;700&display=swap');
        :root {
            --primary: #2C5E1A;
            --secondary: #5A8F3D;
            --accent: #8CB369;
            --light: #F4F7F0;
            --dark: #1A2E0D;
        }
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: var(--light);
            color: var(--dark);
        }
        h1, h2 {
            font-family: 'Playfair Display', serif;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center bg-green-50">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <div class="text-center mb-6">
            <i class="fas fa-tree text-4xl text-green-700 mb-2"></i>
            <h1 class="text-2xl font-bold text-green-800">Connexion FORELAB</h1>
        </div>
        <form id="login-form" action="{{ route('login.authenticate') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="email" class="block text-gray-700 font-medium mb-2">Email</label>
                <input type="email" id="email" name="email" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 {{ $errors->has('email') ? 'border-red-500' : '' }}" placeholder="votre@email.com" required>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700 font-medium mb-2">Mot de passe</label>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-green-500 {{ $errors->has('password') ? 'border-red-500' : '' }}" placeholder="********" required>
                @error('password')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="w-full bg-green-700 hover:bg-green-800 text-white font-bold py-2 px-4 rounded-full transition duration-300">
                Se connecter
                <i class="fas fa-sign-in-alt ml-2"></i>
            </button>
        </form>
        <p class="text-center text-gray-600 mt-4">
            Pas de compte ? <a href="#" class="text-green-600 hover:text-green-800">Contactez l'administrateur</a>
        </p>
    </div>
    <!-- <script>
        document.getElementById('login-form').addEventListener('submit', (e) => {
            e.preventDefault();
            // Simuler une connexion réussie (remplacer par une vraie authentification)
            window.location.href = 'dashboard.html';
        });
    </script> -->
</body>
</html>