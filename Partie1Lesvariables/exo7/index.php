<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 1 - exo7</title>
</head>
<body>
    <p>Créer trois variables **lastname** , **firstname** et **age** et les initialiser avec les valeurs de votre choix.  
**Attention** age est de type entier.  
Afficher : "Bonjour" + **lastname** + **firstname** + ",tu as" + **age** + "ans".

    </p>
<?php
$lastname = "Cristina";
$firstname = "Manole";
$age = 39;
echo "Bonjour $lastname $firstname tu as $age ans.";
echo = 'Bonjour ' . $lastname . ' ' . $firstname . ' tu as ' . $age . ' ans.';
?>
</body>
</html>