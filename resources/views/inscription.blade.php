<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 350px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-top: 10px;
            font-weight: bold;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            width: 100%;
            margin-top: 20px;
            padding: 10px;
            background-color: #3498db;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-weight: bold;
        }

        button:hover {
            background-color: #2980b9;
        }

        .success-message {
            color: green;
            text-align: center;
            margin-bottom: 15px;
        }

        .error-message {
            color: red;
            margin-bottom: 10px;
        }

        .green-button {
            background-color: #2ecc71;
        }

        .green-button:hover {
            background-color: #27ae60;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h1>Veuillez vous inscrire</h1>

    <!-- Message de succès -->
    @if(session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <!-- Erreurs de validation -->
    @if ($errors->any())
        <div class="error-message">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Formulaire d'inscription -->
    <form action="{{ url('/inscription') }}" method="POST">
        @csrf

        <label for="adresse">Adresse</label>
        <input type="text" id="adresse" name="adresse" value="{{ old('adresse') }}" required>

        <label for="nom">Nom</label>
        <input type="text" id="nom" name="nom" value="{{ old('nom') }}" required>

        <label for="prenom">Prénom</label>
        <input type="text" id="prenom" name="prenom" value="{{ old('prenom') }}" required>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" name="password" required>

        <label for="password_confirmation">Confirmer le mot de passe</label>
        <input type="password" id="password_confirmation" name="password_confirmation" required>

        <button type="submit">Soumettre</button>
    </form>

    <!-- Deuxième formulaire pour la redirection -->
    <form action="{{ route('inscrits') }}" method="GET">
        <button type="submit" class="green-button">Voir la liste des inscrits</button>
    </form>
</div>

</body>
</html>
