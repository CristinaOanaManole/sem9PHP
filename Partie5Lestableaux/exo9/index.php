<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie5 exo9</title>
</head>

<body>

    <p>
        ## Exercice 9
        Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.
    </p>

    <?php
    $departementsHautsdeFrance = [
        "02" => "Aisne",//02=la clé, Aisne=valeur
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    foreach ($departementsHautsdeFrance as $value) {
        echo "Valeur = $value";
        echo "<br>";
    }
    ?>


</body>

</html>