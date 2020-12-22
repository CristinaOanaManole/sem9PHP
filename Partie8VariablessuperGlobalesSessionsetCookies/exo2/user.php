<?php
   session_start();
//    var_dump($_SESSION);
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie8 exo2</title>
</head>
<!--<p>
## Exercice 2
Sur la page index, faire un liens vers une autre page. Passer d'une page à l'autre le contenu des variables **lastname**, **firstname** et **age** grâce aux sessions. Ces variables auront été définies directement dans le code.  
Il faudra afficher le contenu de ces variables sur la deuxième page.
    </p>-->

<body>
<div class="container mt-5">
    <button type="submit" name="envoyer" action="user.php">Envoyer<a href="user.php"></a></button>
        <div class="firstName bg-primary border text-center">Votre nom : <?= isset($_SESSION["lastname"]) ? $_SESSION["lastname"] : "" ?></div>
        <div class="lastName bg-light border text-center">Votre prénom : <?= isset($_SESSION["firstname"]) ? $_SESSION["firstname"] : "" ?></div>
        <div class="age bg-success border text-center">Votre age : <?= isset($_SESSION["age"]) ? $_SESSION["age"] : "" ?></div>
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