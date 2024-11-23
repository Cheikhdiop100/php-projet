<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calcul du Sinus</title>
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
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        input[type="number"],
        select {
            padding: 8px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 250px;
        }

        button {
            padding: 10px 20px;
            background-color: #6a1b9a;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s ease;
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
    <h2>Calcul du Sinus d’un Angle</h2>
    <form method="post">
        <label for="angle">Saisissez l'angle :</label>
        <input type="number" id="angle" name="angle" step="0.01" required placeholder="Exemple : 45">

        <label for="unite">Choisissez l'unité :</label>
        <select id="unite" name="unite">
            <option value="rad">Radian</option>
            <option value="deg">Degré</option>
            <option value="grad">Grade</option>
        </select>

        <button type="submit">Calculer</button>
    </form>

    <?php
    function grad2rad($grad) {
        return $grad * (M_PI / 200);
    }

    function calculer_sinus($angle, $unite = 'rad') {
        switch ($unite) {
            case 'rad':
                return sin($angle);
            case 'deg':
                return sin(deg2rad($angle));
            case 'grad':
                return sin(grad2rad($angle));
            default:
                return null;
        }
    }

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $angle = (float) $_POST['angle'];
        $unite = $_POST['unite'];

        $sinus = calculer_sinus($angle, $unite);
        if ($sinus !== null) {
            echo "<div class='result'>Le sinus de $angle $unite est : " . number_format($sinus, 4) . "</div>";
        } else {
            echo "<div class='error'>Unité invalide. Veuillez choisir une unité correcte.</div>";
        }
    }
    ?>
</body>

</html>