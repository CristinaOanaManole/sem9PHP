<?php
$n = 1;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie 3  exo4</title>
</head>
<body>

<p>
Créer une variable et l'initialiser à 1.  
**Tant que** cette variable n'atteint pas 10, il faut :
- l'afficher
- l'incrementer de la moitié de sa valeur
</p>

<?php
while ($n < 10) {
    echo "$n <br>";
    $n += ($n/2);
}

?>
    
</body>
</html>