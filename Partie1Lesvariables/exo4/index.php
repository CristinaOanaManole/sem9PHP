<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - exo4</title>
</head>

<body>
    <p>Créer une variable de type string, une variable de type int, une variable de type float, une variable de type booléan et les initialiser avec une valeur de votre choix.
        Les afficher.
    </p>
    <?php
    $cours = "5cours"; // chaîne
    $name = true;   // booléen
    $integer = 39;
    $float = 39.9;
    echo $cours, $name, $integer, $float;
    echo gettype($name);
    ?>
</body>

</html>