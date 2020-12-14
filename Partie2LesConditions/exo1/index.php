<?php
$age = 33;
$sentence = "";

if ($age >=18) {
    $sentence = "Vous êtes majeur";
} else {
    $sentence = "Vous êtes mineur";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie 2 - exo1</title>
</head>
<body>

<p>
## Exercice 1
Créer une variable **age** et l'initialiser avec une valeur.  
Si l'âge est supérieur ou égale à 18, afficher **Vous êtes majeur**. Dans le cas contraire, afficher **Vous êtes mineur**.
</p>

<?php
echo $sentence;
?>
    
</body>
</html>