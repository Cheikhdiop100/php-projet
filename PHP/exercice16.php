<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 16 - Transformation des Éléments</title>
    <style>
        /* Style global */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h2 {
            color: #6a1b9a;
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

        p {
            font-size: 1.2rem;
            color: #333;
        }
    </style>
</head>

<body>
    <h2>Exercice 16 : Transformer les éléments d’un tableau</h2>
    <form method="post">
        <label for="tableau">Entrez des mots séparés par des virgules :</label>
        <input type="text" id="tableau" name="tableau" placeholder="exemple : chat, chien, lapin">
        <button type="submit">Transformer</button>
    </form>

    <?php
    // Fonction pour transformer les éléments
    function transformerTableau(&$tableau)
    {
        foreach ($tableau as &$element) {
            $element = ucfirst(strtolower(trim($element))); // Met la 1re lettre en majuscule et supprime les espaces inutiles
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST['tableau'])) {
        // Récupérer et traiter l'entrée utilisateur
        $tableau = explode(',', $_POST['tableau']); // Divise les mots en tableau
        transformerTableau($tableau); // Applique la transformation

        // Afficher le résultat
        echo "<p>Tableau transformé : " . implode(', ', $tableau) . "</p>";
    } elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
        echo "<p style='color: red;'>Veuillez entrer une liste de mots valide.</p>";
    }
    ?>
</body>

</html>