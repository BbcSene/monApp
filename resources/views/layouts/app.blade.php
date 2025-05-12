<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Académique Numérique</title>
    <style>
        :root {
            --primary: #1e3a8a;
            --secondary: #3b82f6;
            --accent: #ffd700;
            --bg: #f9fafb;
            --text: #1f2937;
            --white: #ffffff;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', sans-serif;
        }

        body {
            display: flex;
            min-height: 100vh;
            background: linear-gradient(135deg, var(--bg), #e3e3e3);
            color: var(--text);
            transition: background 0.3s ease-in-out;
        }

        /* Barre latérale */
        nav {
            width: 260px;
            background: linear-gradient(180deg, var(--primary), var(--secondary));
            padding: 2rem 1.5rem;
            color: white;
            display: flex;
            flex-direction: column;
            gap: 2rem;
            box-shadow: 2px 0 12px rgba(0,0,0,0.1);
            position: fixed;
            height: 100vh;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }

        nav h3 {
            font-size: 1.8rem;
            font-weight: bold;
            margin-bottom: 1rem;
            text-align: center;
            color: var(--accent);
            text-shadow: 2px 2px 4px rgba(0,0,0,0.2);
        }

        nav a {
            text-decoration: none;
            color: white;
            padding: 0.8rem 1rem;
            border-radius: 8px;
            transition: background 0.3s, transform 0.2s ease-in-out;
            font-weight: 500;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        nav a:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateX(5px);
        }

        /* Contenu principal */
        main {
            margin-left: 260px;
            padding: 3rem 2rem;
            flex: 1;
        }

        h1 {
            color: var(--primary);
            margin-bottom: 20px;
            font-size: 2.8rem;
            text-align: center;
            font-weight: bold;
            text-shadow: 2px 2px 8px rgba(0,0,0,0.2);
            animation: fadeIn 0.8s ease-in-out;
        }

        .notifications {
            background: #fff3cd;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
            text-align: center;
            font-size: 1.3rem;
            font-weight: bold;
            color: #856404;
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @media (max-width: 768px) {
            nav {
                width: 100%;
                height: auto;
                flex-direction: row;
                justify-content: space-around;
                position: static;
                padding: 1rem;
                border-radius: 0;
            }

            main {
                margin-left: 0;
                padding: 2rem 1rem;
            }
        }
    </style>
</head>
<body>
    <nav>
        <h3>📚 Espace Académique</h3>
        <a href="{{ route('accueil') }}">🏠 Accueil</a>
        <a href="{{ route('devweb') }}">💻 Développement Web</a>
        <a href="{{ route('fiscal') }}">💰 Fiscalité</a>
        <a href="{{ route('bd') }}">🗄️ Gestion des Bases de Données</a>
    </nav>

    <main>
        <h1>Votre Portail d’Apprentissage Interactif</h1>

        <!-- Notifications -->
        <div class="notifications">
            📢 **Dernière mise à jour :** Nouveaux contenus académiques disponibles !
        </div>

        @yield('content') <!-- Contenu dynamique injecté par Blade -->
    </main>
</body>
</html>
