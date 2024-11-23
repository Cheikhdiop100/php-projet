<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 9 - Tableau Multidimensionnel Associatif</title>
    <style>
        /* Variables globales */
        :root {
            --primary: #6a1b9a; /* Violet intense */
            --secondary: #ff6f61; /* Orange */
            --bg-light: #f9f9f9; /* Fond clair */
            --text-dark: #212121; /* Texte sombre */
            --text-light: #ffffff; /* Texte clair */
            --box-shadow: rgba(0, 0, 0, 0.1);
        }

        /* Style global */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background: var(--bg-light);
            color: var(--text-dark);
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        /* En-tête */
        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: var(--text-light);
            text-align: center;
            padding: 2.5rem 1rem;
            box-shadow: 0px 4px 15px var(--box-shadow);
            position: relative;
        }

        header h1 {
            font-size: 2.5rem;
            margin: 0;
            font-weight: bold;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        header p {
            margin-top: 1rem;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        /* Section principale */
        section {
            width: 90%;
            max-width: 800px;
            margin: 2rem auto;
            background: var(--text-light);
            padding: 2rem;
            border-radius: 15px;
            box-shadow: 0px 4px 15px var(--box-shadow);
        }

        section h2 {
            text-align: center;
            color: var(--primary);
            margin-bottom: 1.5rem;
        }

        section table {
            width: 100%;
            margin-top: 1.5rem;
            border-collapse: collapse;
        }

        section th, td {
            padding: 10px;
            text-align: center;
            border: 1px solid var(--primary);
        }

        section th {
            background-color: var(--primary);
            color: var(--text-light);
        }

        section tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        section tr:hover {
            background-color: #f1f1f1;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background: var(--primary);
            color: var(--text-light);
            margin-top: auto;
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    <header>
        <h1>Exercice 9</h1>
        <p>Tableau Multidimensionnel Associatif</p>
    </header>

    <section>
        <h2>Informations des personnes</h2>

        <?php
        $personnes = [
            "Dupont" => ["prenom" => "Jean", "ville" => "Paris", "age" => 30],
            "Martin" => ["prenom" => "Marie", "ville" => "Lyon", "age" => 25],
            "Durand" => ["prenom" => "Pierre", "ville" => "Marseille", "age" => 35]
        ];

        echo "<table>
                <tr>
                    <th>Nom</th>
                    <th>Prénom</th>
                    <th>Ville</th>
                    <th>Âge</th>
                </tr>";

        foreach ($personnes as $nom => $infos) {
            echo "<tr>
                    <td>$nom</td>
                    <td>{$infos['prenom']}</td>
                    <td>{$infos['ville']}</td>
                    <td>{$infos['age']}</td>
                </tr>";
        }

        echo "</table>";
        ?>
    </section>

    <footer>
        <p>© 2024 - Tous droits réservés</p>
    </footer>
</body>

</html>