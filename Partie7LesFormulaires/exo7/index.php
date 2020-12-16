<?php
   if (isset($_GET["civilite"]) && isset($_GET["firstname"]) && isset($_GET["lastname"])) {
    if (preg_match("/^[a-zA-Z]+$/", $_GET["civilite"])) {
        $securedCivilite = htmlspecialchars($_GET["civilite"]);
    }
    if (preg_match("/^[a-zA-Z]+$/", $_GET["firstname"])) {
        $securedFirstName = htmlspecialchars($_GET["firstname"]);
    }
    if (preg_match("/^[a-zA-Z]+$/", $_GET["lastname"])) {
        $securedLastName = htmlspecialchars($_GET["lastname"]);
    }
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

    <title>Partie7 exo7</title>
</head>
<!--<p>
## Exercice 7
Au formulaire de l'exercice 5, ajouter un champ d'envoi de fichier. Afficher en plus de ce qui est demandé à l'exercice 6, le nom et l'extension du fichier.

    </p>-->

<body>
<div class="container text-center mt-5">
        <form class="form-groupe" action="index.php" method="$_POST">
            <select name="civilite" size="1">
                <option id="madame" name="civilite" value="madame">Mme
                <option id="monsieur" name="monsieur" value="monsieur">Mr
            </select>

            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
            <input type="file" name="file">
            <input type="submit" value="Envoyer">
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