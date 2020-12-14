<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie5  exo8</title>
</head>
<body>

<p>
## Exercice 8
Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau.

</p>

<?php
$months = ['janvier', 'fevrier', 'mars',
'avril', 'mai', 'juin',
'juillet', 'aout', 'septembre',
'octobre', 'novembre', 'decembre'];
foreach($months as $key => $value) {
    echo "Clé=" . $key . ", Valeur=" . $value;
    echo "<br>";
}
?>

</body>
</html>