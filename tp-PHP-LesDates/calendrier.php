<?php

setlocale(LC_TIME, 'fr_FR.utf8', 'fra');


$weeks = array(
    "Lundi",
    "Mardi",
    "Mercredi",
    "Jeudi",
    "Vendredi",
    "Samedi",
    "Dimanche",
);

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

if (isset($_GET["months"]) && isset($_GET["years"])) {
    $month = array_search($_GET["months"], $months) + 1;
    $years = $_GET["years"];

    // Retourne le nombre de jours dans un mois, pour une année et un calendrier donné
    $nbDays = cal_days_in_month(CAL_GREGORIAN, $month, $years);
    // La date locale
    $firstDayInMonth = strftime("%u", strtotime($month . "/01/" . $years));
    var_dump($nbDays);
    var_dump($firstDayInMonth);
}


?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>TP Calendrier PHP</title>
</head>


<body class="bg-light">
    <div class="container bg-white">

        <?php
        if (isset($_GET["months"]) && isset($_GET["years"])) {
        ?>
            <h1 class="text-center"><?= $_GET["months"] . " " . $_GET["years"] ?></h1>
        <?php
        }
        ?>

        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <?php
                    foreach ($weeks as $week) {
                    ?>
                        <th><?= $week ?></th>
                    <?php
                    }
                    ?>

                </tr>
            </thead>
            <tbody>
                <tr class="case">
                    <?php
                    for ($case = 1; $case <= ($nbDays + ($firstDayInMonth - 1)); $case++) {
                    ?>
                        <td><?= $case ?></td>

                        <?php
                        if (($nbDays + $case) % 7 == 0) echo "</tr><tr>";
                        ?>

                    <?php
                    }
                    ?>
                </tr>
            </tbody>
        </table>
        <div class="text-center mt-5">
            <a href="index.php" class="btn btn-primary">Retour</a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>