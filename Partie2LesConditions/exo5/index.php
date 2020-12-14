<?php
$gender = "Homme";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=e, initial-scale=1.0">
    <title>Partie 2  exo5</title>
</head>
<body>

<p>
## Exercice 5
Traduire ce code avec des if et des else :  


    < ?php
      echo ($gender != 'Homme') ? 'C\'est une développeuse !!!' : 'C\'est un développeur !!!';
    ?>
</p>

<?php
if ($gender != "Homme") {
    echo "C'est une développeuse !!!";
} else {
    echo "C'est un développeur !!!";
}

?>


</body>
</html>