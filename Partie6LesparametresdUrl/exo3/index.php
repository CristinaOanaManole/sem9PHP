<?php
$startDate = '';
$endDate = '';

if ((isset($_GET['startDate'])) && (isset($_GET['endDate']))){
    $startDate = $_GET['startDate'];
    $endDate = $_GET['endDate'];
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie6 exo3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>

<body>

    <!--<p>
    Voici l'URL à étudier :

index.php?startDate=01/09/2019&endDate=17/03/2020

Faire une page index.php.
Sur cette page faire 2 boutons :

Le premier "bouton" doit contenir un href qui pointe vers l'URL. Il faut ensuite tester sur cette même page que tous les paramètres existent :
S'ils sont présents, les afficher.
Dans le cas contraire ne rien afficher.
Le deuxieme "bouton" doit permettre de revenir à la page index.php.
    </p>-->
    <div class="container">
        <div class="text-center mt-5 justify-content-center">
            <a name="submitParam" id="submitParam" class="btn btn-primary" href="index.php?startDate=01/09/2019&amp;endDate=17/03/2020" role="button">Envoi des paramètres</a>
            <a name="submitParam" id="submitParam" class="btn btn-secondary" href="index.php" role="button">Retour INDEX</a>
        </div>
        <p class="text-center"><?= $startDate ?></p>
        <p class="text-center"><?= $endDate ?></p>
    </div>
    
</body>

</html>