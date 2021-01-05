<?php

$months = array(
    "Janvier",
    "Février",
    "Mars",
    "Avril",
    "Mai",
    "Juin",
    "Juillet",
    "Août",
    "Septembre",
    "Octobre",
    "Novembre",
    "Décembre",
);

$startIntYear = 2015;
$endIntYear = 2025; 

$date = date('d/m/Y');

?>


<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>TP calendrier PHP</title>
</head>


<body>
<div class="container text-center m-5">
    <form action="calendrier.php" method="get">
        <div>
            <label>Veuillez choisir le mois</label>
            <select name="months">
                <?php
                foreach ($months as $month) {
                ?>
                    <option><?= $month ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <div>
        <label>Veuillez choisir l'année</label>
            <select name="years">
                <?php
                for ($y = $startIntYear; $y <= $endIntYear; $y++) {
                ?>
                    <option><?= $y ?></option>
                <?php
                }
                ?>
            </select>
        </div>
        <input type="submit" value="Valider">
    </form>
            </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>