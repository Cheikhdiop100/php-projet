<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 10 - Compter Voyelles et Consonnes</title>
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

        section form {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        section form label {
            font-size: 1.1rem;
            color: var(--text-dark);
        }

        section form input[type="text"] {
            padding: 0.5rem;
            border: 1px solid var(--primary);
            border-radius: 5px;
            font-size: 1rem;
        }

        section form button {
            background: var(--secondary);
            color: var(--text-light);
            padding: 0.7rem;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        section form button:hover {
            background: var(--primary);
        }

        section p {
            margin-top: 1.5rem;
            text-align: center;
            font-size: 1.2rem;
            font-weight: bold;
            color: var(--primary);
        }

        /* Pied de page */
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
        <h1>Exercice 10</h1>
        <p>Compter Voyelles et Consonnes dans une Chaîne</p>
    </header>

    <section>
        <h2>Entrez une chaîne de caractères pour compter les voyelles et consonnes</h2>
        <form method="post">
            <label for="chaine">Saisissez une chaîne de caractères :</label>
            <input type="text" id="chaine" name="chaine" required>
            <button type="submit">Compter</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $chaine = strtolower($_POST['chaine']);
            $voyelles = preg_match_all('/[aeiouy]/', $chaine);
            $consonnes = preg_match_all('/[bcdfghjklmnpqrstvwxz]/', $chaine);

            echo "<p>Nombre de voyelles : $voyelles</p>";
            echo "<p>Nombre de consonnes : $consonnes</p>";
        }
        ?>
    </section>

    <footer>
        <p>© 2024 - Tous droits réservés</p>
    </footer>
</body>

</html>