<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 14 - Calcul TVA</title>
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
            text-align: center;
            color: #6a1b9a;
            margin-bottom: 20px;
        }

        form label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }

        form input[type="number"] {
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
        <h2>Calcul TVA et Prix TTC</h2>
        <form method="post">
            <label for="prix_ht">Prix HT :</label>
            <input type="number" id="prix_ht" name="prix_ht" step="0.01" placeholder="Ex: 100" required>

            <label for="taux_tva">Taux TVA (%) :</label>
            <input type="number" id="taux_tva" name="taux_tva" step="0.01" placeholder="Ex: 20" required>

            <button type="submit">Calculer</button>
        </form>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $prix_ht = htmlspecialchars($_POST['prix_ht']);
            $taux_tva = htmlspecialchars($_POST['taux_tva']);

            if (is_numeric($prix_ht) && is_numeric($taux_tva) && $prix_ht >= 0 && $taux_tva >= 0) {
                $montant_tva = $prix_ht * $taux_tva / 100;
                $prix_ttc = $prix_ht + $montant_tva;

                echo "<div class='result'>";
                echo "<p><strong>Montant TVA :</strong> " . number_format($montant_tva, 2, ',', ' ') . " €</p>";
                echo "<p><strong>Prix TTC :</strong> " . number_format($prix_ttc, 2, ',', ' ') . " €</p>";
                echo "</div>";
            } else {
                echo "<p class='error'>Veuillez saisir des valeurs valides.</p>";
            }
        }
        ?>
    </div>
</body>

</html>