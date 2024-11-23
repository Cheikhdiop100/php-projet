<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des Exercices en PHP-MySQL</title>
    <style>
        :root {
            --primary: #6c5ce7; /* Couleur principale */
            --secondary: #00cec9; /* Couleur secondaire */
            --bg: #f8f9fa; /* Couleur de fond */
            --text: #2d3436; /* Couleur du texte */
            --shadow: rgba(0, 0, 0, 0.15);
            --highlight: #ffeaa7; /* Couleur d'accent pour hover */
        }

        body {
            font-family: 'Arial', sans-serif;
            background: var(--bg);
            margin: 0;
            padding: 0;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            overflow-x: hidden;
        }

        header {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            width: 100%;
            position: relative;
            box-shadow: 0 4px 15px var(--shadow);
            border-radius: 0 0 25px 25px;
        }

        header h1 {
            font-size: 3rem;
            margin: 0;
        }

        header p {
            color: rgba(255, 255, 255, 0.8);
            margin-top: 1rem;
            font-size: 1.2rem;
        }

        .presenters {
            margin-top: 2rem;
            font-size: 2rem;
            font-weight: bold;
            color: rgba(255, 255, 255, 0.9);
        }

        .presenters p {
            margin: 0;
            line-height: 1.5; /* Espacement entre les noms */
        }

        section {
            background: white;
            padding: 2rem;
            margin: 2rem;
            box-shadow: 0 5px 20px var(--shadow);
            border-radius: 20px;
            width: 90%;
            max-width: 900px;
            transition: transform 0.3s ease, background-color 0.3s ease;
        }

        h2 {
            color: var(--primary);
            padding-bottom: 1rem;
            border-bottom: 3px solid var(--primary);
            margin-bottom: 1.5rem;
            font-size: 2rem;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin: 1rem 0;
            padding: 1.2rem;
            border-radius: 12px;
            transition: all 0.3s ease;
            border: 1px solid transparent;
            background: #f1f2f6;
        }

        li:hover {
            background: var(--primary);
            color: white;
            transform: scale(1.05);
            box-shadow: 0 8px 15px var(--shadow);
        }

        a {
            color: var(--text);
            text-decoration: none;
            font-weight: 600;
            display: block;
            position: relative;
        }

        a:hover {
            color: white;
        }

    </style>
</head>
<body>
    <!-- Header avec les noms des présentateurs en haut -->
    <header>
        <h1>Liste des Exercices en PHP-MySQL</h1>
        <p>Cette page contient une série d'exercices pour la pratique du développement en PHP et MySQL.</p>
        
        <!-- Noms des présentateurs dans une section distincte -->
        <div class="presenters">
           <H6> <p>Présenté par : CHEIKH AHMETH DIOP (221076)</p> </H6>
           <H5> <p> Matar Samb (221072)</p> </H5>
            <H5><p> Mohamed Ndoye(221199)</p></H5>
        </div>
    </header>

    <!-- Section des exercices -->
    <section>
        <h2>Exercices</h2>
        <ul>
            <li><a href="exercice1.php">Exercice 1 : Vérifier si un mot est un palindrome</a></li>
            <li><a href="exercice2.php">Exercice 2 : Tester si un nombre est multiple de 3 et 5</a></li>
            <li><a href="exercice3.php">Exercice 3 : Tirages aléatoires pour obtenir un nombre</a></li>
            <li><a href="exercice4.php">Exercice 4 : Calcul du PPCM de deux entiers</a></li>
            <li><a href="exercice5.php">Exercice 5 : Calcul du diamètre, périmètre et surface d'un cercle</a></li>
            <li><a href="exercice6.php">Exercice 6 : Affichage des diviseurs d'un nombre</a></li>
            <li><a href="exercice7.php">Exercice 7 : Vérifier si un nombre est parfait</a></li>
            <li><a href="exercice8.php">Exercice 8 : Moyenne, maximum et minimum d'un tableau</a></li>
            <li><a href="exercice9.php">Exercice 9 : Tableau multidimensionnel associatif</a></li>
            <li><a href="exercice10.php">Exercice 10 : Compter voyelles et consonnes dans une chaîne</a></li>
            <li><a href="exercice11.php">Exercice 11 : Calcul de jours restants jusqu'à la fin de l'année</a></li>
            <li><a href="exercice12.php">Exercice 12 : Formulaire d'adresse client</a></li>
            <li><a href="exercice13.php">Exercice 13 : Calcul de la moyenne, maximum et minimum d'un tableau</a></li>
            <li><a href="exercice14.php">Exercice 14 : Calcul du montant de la TVA et du prix TTC</a></li>
            <li><a href="exercice15.php">Exercice 15 : Formulaire pour Vendre, Acheter ou Louer</a></li>
            <li><a href="exercice16.php">Exercice 16 : Transformer les éléments d'un tableau en majuscule</a></li>
            <li><a href="exercice17.php">Exercice 17 : Calcul du sinus d'un angle</a></li>
        </ul>
    </section>
</body>
</html>