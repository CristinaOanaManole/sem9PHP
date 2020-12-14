<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie4 exo5</title>
</head>

<body>

    <p>
        ## Exercice 5
        Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres.

    </p>

    <?php
    function str($number, $string)
    {
        return $number . $string;
    }

    var_dump(str(30, ' ans'));
    ?>


</body>

</html>