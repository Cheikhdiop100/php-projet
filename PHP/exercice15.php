<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercice 15 - Agence Immobilière</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f4f4f9;
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

        /* Logo à droite */
        .logo {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding-top: 10px;
        }

        .logo img {
            width: 150px;
            height: auto;
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
            <a href="vendre.php">Vendre un bien</a>
            <a href="acheter.php">Acheter un bien</a>
            <a href="louer.php">Louer un bien</a>
        </nav>

        <!-- Contenu principal -->
        <div class="content">
            <h1>Bienvenue dans notre Agence Immobilière</h1>
            <p>
                Nous vous offrons une plateforme complète pour gérer vos projets immobiliers. Que vous souhaitiez vendre,
                acheter ou louer un bien, notre équipe d'experts est là pour vous accompagner dans chaque étape du processus.
                Explorez les options ci-dessous pour commencer.
            </p>
            <p>
                Notre agence se distingue par son expertise, son professionnalisme et son service personnalisé. Nous
                mettons tout en œuvre pour vous aider à atteindre vos objectifs immobiliers, en vous offrant des
                conseils adaptés à vos besoins.
            </p>
            <p>
                Cliquez sur l'une des options ci-dessus pour commencer votre projet immobilier. Nous serons ravis de vous
                aider à trouver la solution qui vous convient.
            </p>
            <button onclick="window.location.href='vendre.php'">Vendre un bien</button>
            <button onclick="window.location.href='acheter.php'">Acheter un bien</button>
            <button onclick="window.location.href='louer.php'">Louer un bien</button>
        </div>

        <!-- Logo -->
        <div class="logo">

        </div>
    </div>
</body>

</html>