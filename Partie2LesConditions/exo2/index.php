<?php
$isEasy = true;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie 2  exo2</title>
    
</head>
<body>

<p>
## Exercice 2
Créer une variable **isEasy** de type booléan et l'initialiser avec une valeur.  
Afficher **C'est facile!!** si c'est vrai. Dans le cas contraire afficher **C'est difficile !!!**.  
**Bonus :** L'écrire de deux manières différentes.
</p>

<?php

if ($isEasy) {
    echo "C'est facile!!";
} else {
    echo "C'est difficile !!!";
}
?>

<?php
echo $isEasy ? "C'est facile!!" : "C'est difficile !!!";
?>   



</body>
</html>