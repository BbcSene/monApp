<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste des inscrits</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #eef2f3;
            padding: 30px;
        }

        h1 {
            text-align: center;
            margin-bottom: 30px;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 20px;
            border: 1px solid #ccc;
            text-align: left;
        }

        th {
            background-color: #3498db;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        .back-link {
            display: block;
            text-align: center;
            margin-top: 20px;
        }

        .back-link a {
            color: #3498db;
            text-decoration: none;
        }

        .back-link a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <h1>Liste des inscrits</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Adresse</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>Date d’inscription</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($inscrits as $inscrit)
                <tr>
                    <td>{{ $inscrit->id }}</td>
                    <td>{{ $inscrit->adresse }}</td>
                    <td>{{ $inscrit->nom }}</td>
                    <td>{{ $inscrit->prenom }}</td>
                    <td>{{ $inscrit->created_at->format('d/m/Y H:i') }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Aucun inscrit pour le moment.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="back-link">
        <a href="/inscription">← Retour au formulaire</a>
    </div>

</body>
</html>
