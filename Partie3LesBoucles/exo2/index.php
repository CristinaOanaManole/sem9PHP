<?php
$n = 0;
$m = 2;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie 3  exo2</title>
</head>
<body>

<p>
Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100.  
**Tant que** la première variable n'est pas supérieure à 20 :
- multiplier la première variable avec la deuxième
- afficher le résultat
- incrementer la première variable
</p>

<?php
while ($n < 20) {
    echo $n * $m;
    $n++;
}
?>
    
</body>
</html>