<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 12 - Adresse Client</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        h2 {
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: #6a1b9a;
            text-align: center;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        form button {
            width: 100%;
            padding: 10px;
            background-color: #6a1b9a;
            color: #fff;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
        }

        form button:hover {
            background-color: #5c1381;
        }

        .result {
            margin-top: 20px;
            padding: 15px;
            background: #f9f9f9;
            border-radius: 5px;
            border: 1px solid #ddd;
        }

        .error {
            color: red;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Formulaire d'Adresse Client</h2>
        <form method="post">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" required>

            <label for="adresse">Adresse :</label>
            <input type="text" name="adresse" id="adresse" required>

            <label for="ville">Ville :</label>
            <input type="text" name="ville" id="ville" required>

            <label for="code_postal">Code Postal :</label>
            <input type="text" name="code_postal" id="code_postal" required>

            <button type="submit">Envoyer</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupérer et sécuriser les données
            $nom = htmlspecialchars($_POST['nom']);
            $prenom = htmlspecialchars($_POST['prenom']);
            $adresse = htmlspecialchars($_POST['adresse']);
            $ville = htmlspecialchars($_POST['ville']);
            $code_postal = htmlspecialchars($_POST['code_postal']);

            // Vérification des champs
            if (!empty($nom) && !empty($prenom) && !empty($adresse) && !empty($ville) && !empty($code_postal)) {
                echo "<div class='result'>
                        <p><strong>Nom :</strong> $nom</p>
                        <p><strong>Prénom :</strong> $prenom</p>
                        <p><strong>Adresse :</strong> $adresse</p>
                        <p><strong>Ville :</strong> $ville</p>
                        <p><strong>Code Postal :</strong> $code_postal</p>
                      </div>";
            } else {
                echo "<p class='error'>Tous les champs sont obligatoires !</p>";
            }
        }
        ?>
    </div>
</body>

</html>