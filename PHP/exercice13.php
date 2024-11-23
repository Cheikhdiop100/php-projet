<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul Moyenne, Minimum et Maximum</title>
    <style>
        /* Style global */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }

        h2 {
            color: #6a1b9a;
            margin-bottom: 20px;
        }

        form {
            margin-bottom: 20px;
        }

        input[type="text"] {
            padding: 8px;
            font-size: 1rem;
            width: 300px;
            margin-right: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 8px 15px;
            background-color: #6a1b9a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
        }

        button:hover {
            background-color: #5c1381;
        }

        .result {
            font-size: 1.2rem;
            color: #333;
            margin-top: 20px;
            text-align: center;
        }

        .error {
            color: red;
            font-size: 1rem;
        }
    </style>
</head>

<body>
    <h2>Calcul Moyenne, Minimum et Maximum</h2>
    <form method="post">
        <label for="nombres">Saisissez des nombres séparés par des espaces :</label>
        <input type="text" id="nombres" name="nombres" placeholder="Exemple : 10 20 30 40">
        <button type="submit">Calculer</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération et validation de l'entrée utilisateur
        $input = trim($_POST['nombres']);
        if (!empty($input)) {
            // Transformation en tableau et calculs
            $tableau = array_map('intval', explode(' ', $input));
            $moyenne = array_sum($tableau) / count($tableau);
            $minimum = min($tableau);
            $maximum = max($tableau);

            // Affichage des résultats
            echo "<div class='result'>
                    <p><strong>Moyenne :</strong> $moyenne</p>
                    <p><strong>Minimum :</strong> $minimum</p>
                    <p><strong>Maximum :</strong> $maximum</p>
                  </div>";
        } else {
            // Message d'erreur en cas de saisie vide
            echo "<p class='error'>Veuillez entrer une liste de nombres séparés par des espaces.</p>";
        }
    }
    ?>
</body>

</html>