<?php

if (empty($_POST)) {
    $showForm = true;
} else {
    $showForm = false;
}

$regexName = '/^[a-zA-Z]+$/';

if (isset($_GET['firstname'],$_POST['lastname'], $_POST['gender'])) {
    if (preg_match($regexName, $_POST['firstname'])) {
        $securedFirstName = htmlspecialchars($_POST['firstname']);
    } else {
        $securedFirstName = '';
    }

    if (preg_match($regexName, $_POST['lastname'])) {
        $securedLastName = htmlspecialchars($_GET['lastname']);
    } else {
        $securedFirstName = '<i>Mauvais format</i>';
    }

    if ($_POST['gender'] == 'Monsieur') {
        $gender = ($_POST['gender']);
        echo 'vous avez choisi l\'option Mrs';
    } else {
        $gender = ($_POST['gender']);
        echo 'vous avez choisi l\'option Mme';
    }
}
var_dump($_POST);?>
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie7 exo5</title>
</head>
<!--<p>
## Exercice 5
Créer un formulaire sur la page **index.php** avec :  
- Une liste déroulante pour la civilité (Mr ou Mme)
- Un champ texte pour le nom
- Un champ texte pour le prénom  

Ce formulaire doit rediriger vers la page **index.php**.  
Vous avez le choix de la méthode.

    </p>-->

<body>
    <div class="container text-center mt-5">
        
    <?php if ($showForm) {?>

        <form class="form-groupe" action="index.php" method="$_POST">
            <select name="gender" size="1">
                <option name="madame">Mme
                <option name="monsieur">Mr
            </select>

            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
            <input type="submit" name="button" value="Envoyer">
        </form>
        <?php } else { ?>
        <p>Bonjour je m'appelle, <?= $gender . ' ' . $securedFirstName . ' ' . $securedLastName; ?>
        </p>
        <?php } ?>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>