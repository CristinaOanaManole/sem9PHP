<?php

$regexName = "/^[a-zA-Z]+$/";

if (isset($_POST["firstname"]) && isset($_POST["lastname"])) {

    // Sécurisation des données, regex pour verifier prénom et nom
    if (preg_match($regexName, $_POST["firstname"])) {
        $securedFirstname = htmlspecialchars($_POST["firstname"]);
    } else {
        $securedFirstname = "<i>Mauvais format</i>";
    }

    if (preg_match($regexName, $_POST["lastname"])) {
        $securedLastname = htmlspecialchars($_POST["lastname"]);
    } else {
        $securedLastname = "<i>Mauvais format</i>";
    }

}
?>

<?php
$firstName = '';
$lastName = '';
$civilite = '';

if (isset($_POST['civilite']) && isset($_POST['firstName']) && isset($_POST['lastName'])) {
    $civilite = $_POST['civilite'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    
} else {
    $display = 'display: ';
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie7 exo6</title>
</head>
<!--<p>
## Exercice 6
Avec le formulaire de l'exercice 5, Si des données sont passées en **POST** ou en **GET**, le formulaire ne doit pas être affiché. Par contre les données transmises doivent l'être. Dans le cas contraire, c'est l'inverse.  
Utiliser qu'une seule page..

    </p>-->

<body>
<div class="container text-center mt-5">
        <form class="form-groupe" action="index.php" method="$_POST">
            <select name="civilite" size="1">
                <option name="madame">Mme
                <option name="monsieur">Mr
            </select>

            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
            <input type="submit" name="button" value="Envoyer">
        </form>

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