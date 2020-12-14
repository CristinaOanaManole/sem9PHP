<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie4 exo4</title>
</head>

<body>

    <p>
        ## Exercice 4
        Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
        - **Le premier nombre est plus grand** si le premier nombre est plus grand que le deuxième
        - **Le premier nombre est plus petit** si le premier nombre est plus petit que le deuxième
        - **Les deux nombres sont identiques** si les deux nombres sont égaux

    </p>

    <?php
    function nombre(int $a > int $b)
    {
        if ($a > $b) {
            return "$a plus petit que $b";
        }
        if ($a > $b) {
            return "$a plus grand que $b";
        }
        return "$a égal à $b";
    }
    ?>

</body>

</html>