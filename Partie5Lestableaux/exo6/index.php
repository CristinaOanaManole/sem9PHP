<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie5 exo6</title>
</head>

<body>

    <p>
        ## Exercice 6
        Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.
    </p>

    <?php
    $departementsHautsdeFrance = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    echo $departementsHautsdeFrance['59'];
    print_r($departementsHautsdeFrance);//afficher le tableau
    ?>


</body>

</html>