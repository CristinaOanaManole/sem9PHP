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

    $nbDays = cal_days_in_month(CAL_GREGORIAN, $month, $years);
    $firstDayInMonth = strftime("%u", strtotime($month . "/01/" . $years));

    if ((($nbDays + $firstDayInMonth - 1) % 7) != 0) {
        $extraCases = 7 - (($nbDays + $firstDayInMonth - 1) % 7);
    } else {
        $extraCases = 0;
    }
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
            <thead class="title">
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
            <tbody class="text-center font-weight-bold">
            <tr>
                <?php
                for ($case = 1; $case <= ($nbDays + ($firstDayInMonth - 1)); $case++) {
                ?>
                    <td class="case"><?= $case >= $firstDayInMonth ? $case - $firstDayInMonth + 1 : '' ?></td>
                <?php
                    if ($case % 7 == 0) { 
                ?>
                    </tr>
                    <tr>
                <?php
                    }
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