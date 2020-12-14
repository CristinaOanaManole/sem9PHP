<?php
$number1 = 45;
$number2 = 30;
$number3 = 65;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie4 exo8</title>
</head>

<body>

    <p>
        ## Exercice 8
        Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
        Tous les paramètres doivent avoir une valeur par défaut.
    </p>

    <?php
    function numbers($nb1, $nb2, $nb3)
    {
        return $nb1 + $nb2 + $nb3;
    }

    echo numbers($number1, $number2, $number3);
    var_dump(numbers($number1, $number2, $number3));
    ?>


</body>

</html>