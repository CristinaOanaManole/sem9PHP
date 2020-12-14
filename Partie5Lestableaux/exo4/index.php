<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie5 exo4</title>
</head>

<body>

    <p>
        ## Exercice 4
        Avec le tableau de l'exercice 1, modifier le mois de **aout** pour lui ajouter l'accent manquant.

    </p>

    <?php
    $months = [
        'janvier',
        'fevrier',
        'mars',
        'avril',
        'mai',
        'juin',
        'juillet',
        'aout',
        'septembre',
        'octobre',
        'novembre',
        'decembre'
    ];
    //array_splice($months, 7, 1, 'août');
    $months[7] = 'août';
    var_dump($months);
    echo $months[7];
    ?>


</body>

</html>