<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 7 - Nombre Parfait</title>
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

        /* Cercle décoratif */
        header::after {
            content: "";
            position: absolute;
            top: -50px;
            right: -50px;
            width: 200px;
            height: 200px;
            background: var(--primary);
            opacity: 0.2;
            border-radius: 50%;
            z-index: -1;
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

        section form input[type="number"] {
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
        <h1>Exercice 7</h1>
        <p>Vérifier si un nombre est parfait</p>
    </header>

    <section>
        <h2>Entrez un nombre pour vérifier</h2>
        <form method="post">
            <label for="nombre">Saisissez un nombre :</label>
            <input type="number" id="nombre" name="nombre" placeholder="Entrez un nombre positif" required>
            <button type="submit">Vérifier</button>
        </form>

        <?php
        function estParfait($nombre)
        {
            $somme = 0;
            for ($i = 1; $i < $nombre; $i++) {
                if ($nombre % $i == 0) {
                    $somme += $i;
                }
            }
            return $somme == $nombre;
        }

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = htmlspecialchars($_POST['nombre']); // Protection contre les injections
            if ($nombre > 0) {
                if (estParfait($nombre)) {
                    echo "<p>Le nombre $nombre est parfait.</p>";
                } else {
                    echo "<p>Le nombre $nombre n'est pas parfait.</p>";
                }
            } else {
                echo "<p>Veuillez saisir un nombre valide.</p>";
            }
        }
        ?>
    </section>

    <footer>
        <p>© 2024 - Tous droits réservés</p>
    </footer>
</body>

</html>