<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie4 exo7</title>
</head>

<body>

    <p>
        ## Exercice 7
        Faire une fonction qui prend deux paramètres : **l'âge et le genre d'une personne**. Le genre peut être :
        - Homme
        - Femme
        La fonction doit renvoyer en fonction des paramètres :
        - **Vous êtes un homme et vous êtes majeur**
        - **Vous êtes un homme et vous êtes mineur**
        - **Vous êtes une femme et vous êtes majeur**
        - **Vous êtes une femme et vous êtes mineur**

    </p>

    <?php
    function sentense($gender, $age)
    {
        if ($gender == 'Homme' && $age >= 18) {
            return 'Vous êtes un homme et vous êtes majeur';
        } else if ($gender == 'Homme' && $age < 18) {
            return 'Vous êtes un homme et vous êtes mineur';
        } else if ($gender == 'Femme' && $age >= 18) {
            return 'Vous êtes une femme et vous êtes majeur';
        } else {
            return 'Vous êtes une femme et vous êtes mineur';
        }
    }
    
    echo sentense('Femme', 30);
    var_dump(sentense('Femme', 30));
    ?>


</body>

</html>