<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie5 exo7</title>
</head>

<body>

    <p>
        ## Exercice 7
        Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.

    </p>

    <?php
    $departementsHautsdeFrance = [
        "02" => "Aisne",
        "59" => "Nord",
        "60" => "Oise",
        "62" => "Pas-de-Calais",
        "80" => "Somme"
    ];
    $departementsHautsdeFrance["51"] = "Reims";
    var_dump($departementsHautsdeFrance);
    ?>


</body>

</html>