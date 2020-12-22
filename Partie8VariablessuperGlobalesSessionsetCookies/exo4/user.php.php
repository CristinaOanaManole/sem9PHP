<?php
if (isset($_POST["login"]) && isset($_POST["password"])) {
    setcookie("password", $_POST["password"], time()+36000, null, null, false, true);
    setcookie("login", $_POST["login"], time()+36000, null, null, false, true);
    header('Location: user.php'); // on retourne sur user.php (refresh)
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

    <title>Partie8 exo4</title>
</head>
<!--<p>
## Exercice 4
Faire une page qui va récupérer les informations du cookie créé à l'exercice 3 et qui les  affiches.

    </p>-->

<body>
    <div class="container">
        <div class="text-center mt-5 justify-content-center">
            <form name="user" action="index.php" metod="post">
                <label for="login">Identifiant </label><input name="login">
                <label for="password">Mot de passe </label><input name="password">
            </form>
            <a name="valider" class="btn btn-secondary" href="index.php" role="button">Valider</a>
        </div>
    </div>

    <p>Votre pseudo est <?= isset($_COOKIE['login']) ? $_COOKIE['login'] : "" ?></p>
    <p>Votre password est <?= isset($_COOKIE['password']) ? $_COOKIE['password'] : "" ?></p>

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