<?php

require_once "user_controller.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <title>Site de rencontre VENUS</title>
</head>

<body class="wallpaperUser">
    <nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
        <div class="d-flex ml-auto">
            <a class="navbar-brand" href="lovers.php"><img src="assets/img/logo3.png" class="logo mx-auto"></a>
            <button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li>
                    <a class="link-color mt-1">Bonjour <?= $_COOKIE["firstname"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="link-color mt-1" href="lovers.php">Nos célibataires</a>
                </li>
                <li class="nav-item">
                    <a class="link-color mt-1" href="user.php">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-5">
        <div class="row">
            <div class="col">
                <div class="card col-lg-4 col-md-6 col-sm-12">
                    <div class="card-body h5">
                        <h3 class="card-title font-weight-bold text-center">Votre profil</h3>
                        <p>Nom : <?= isset($_COOKIE["lastname"]) ? $_COOKIE["lastname"] : "" ?></p>
                        <p>Prénom : <?= isset($_COOKIE["firstname"]) ? $_COOKIE["firstname"] : "" ?></p>
                        <p>Age : <?= isset($_COOKIE["age"]) ? $_COOKIE["age"] : "" ?></p>
                        <p>Genre : <?= isset($_COOKIE["gender"]) ? $_COOKIE["gender"] : "" ?></p>
                        <p>Code postal : <?= isset($_COOKIE["postalCode"]) ? $_COOKIE["postalCode"] : "" ?></p>
                        <p>Adresse email : <?= isset($_COOKIE["email"]) ? $_COOKIE["email"] : "" ?></p>
                        <p>Type de recherche : <?= isset($_COOKIE["type"]) ? $_COOKIE["type"] : "" ?></p>

                    </div>
                    <div class="card-footer">
                        <div class="text-center">
                            <div class="mb-3">
                                <form class="form" action="user.php" method="post">
                                    <button href="index.php" name="deleteCookies" class="btn btn-secondary">Supprimer mon compte</button>
                                </form>
                            </div>
                            <div>
                                <a href="https://www.meetic.fr/" class="btn color-meetic">Take my money</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-center bg-white d-flex align-items-center justify-content-center">
        <h5 class="bg-white ">Copyright© 2021 VENUS</h5>
    </footer>



    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>