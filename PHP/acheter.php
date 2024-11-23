<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Acheter un Bien - Agence Immobilière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: #333;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            padding: 30px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        /* Navigation à gauche */
        nav {
            width: 20%;
            background: #ff7043;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        nav a {
            display: block;
            padding: 15px;
            margin-bottom: 15px;
            text-decoration: none;
            color: white;
            font-weight: bold;
            border-radius: 5px;
            text-align: center;
            background: #bf360c;
            transition: background 0.3s ease;
        }

        nav a:hover {
            background: #9c2608;
        }

        /* Formulaire et texte */
        .content {
            width: 75%;
            padding: 30px;
        }

        h1 {
            color: #bf360c;
            font-size: 2rem;
        }

        p {
            font-size: 1.1rem;
            margin-bottom: 30px;
            color: #666;
        }

        form {
            margin-top: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        input[type="text"], input[type="email"], input[type="number"], textarea {
            padding: 10px;
            font-size: 1rem;
            border: 1px solid #ccc;
            border-radius: 5px;
            width: 100%;
        }

        button {
            padding: 15px;
            background: #bf360c;
            color: white;
            font-size: 1.1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background: #9c2608;
        }

        button:active {
            background: #7b1f07;
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navigation -->
        <nav>
            <a href="exercice15.php">Retour à l'accueil</a>
            <a href="vendre.php">Vendre un bien</a>
            <a href="louer.php">Louer un bien</a>
        </nav>

        <!-- Contenu principal -->
        <div class="content">
            <h1>Acheter un Bien Immobilier</h1>
            <p>
                Remplissez le formulaire ci-dessous pour acheter un bien immobilier. Nous vous aiderons à trouver
                le bien qui correspond à vos critères et à finaliser votre achat dans les meilleures conditions.
            </p>

            <form action="" method="POST">
                <input type="text" name="nom" placeholder="Nom" required>
                <input type="text" name="prenom" placeholder="Prénom" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="text" name="telephone" placeholder="Téléphone" required>
                <input type="text" name="type_bien" placeholder="Type de bien recherché" required>
                <input type="number" name="budget" placeholder="Budget maximum" required>
                <textarea name="preferences" placeholder="Vos préférences et critères" required></textarea>
                <button type="submit">Soumettre</button>
            </form>
        </div>
    </div>
</body>

</html>