<?php

require_once "index_controller.php";

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Site de rencontre VENUS</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form class="form" action="index.php" method="post">
                    <h1 class="text-center text-info">Formulaire d'inscription</h1>
                    <div class="mt-5">
                        <label for="lastname">Nom :</label>
                        <input type="text" name="lastname" id="lastname" class="form-control" placeholder="Votre nom" value="<?= isset($securedLastname) ? $securedLastname : "" ?>">
                        <span style="color:red;"><?= isset($error["Lastname"]) ? $error["Lastname"] : "" ?></span>
                    </div>
                    <div class="mt-3">
                        <label for="firstname">Prénom :</label>
                        <input type="text" name="firstname" id="firstname" class="form-control" placeholder="Votre prénom" value="<?= isset($securedFirstname) ? $securedFirstname : "" ?>">
                        <span style="color:red;"><?= isset($error["Firstname"]) ? $error["Firstname"] : "" ?></span>
                    </div>
                    <div class="mt-3">
                        <label for="age">Age</label>
                        <input type="text" name="age" id="age" class="form-control" placeholder="Votre âge" value="<?= isset($securedAge) ? $securedAge : "" ?>">
                        <span style="color:red;"><?= isset($error["Age"]) ? $error["Age"] : "" ?></span>
                    </div>
                    <div class="mt-3">
                        <label for="gender">Genre :</label>
                        <select name="gender">
                            <option value="" <?= isset($_POST["gender"]) && ($_POST["gender"] == "Veuillez choisir") ? "selected" : "" ?>>Veuillez choisir</option>
                            <option value="Homme" <?= isset($_POST["gender"]) && ($_POST["gender"] == "Homme") ? "selected" : "" ?>>Homme</option>
                            <option value="Femme" <?= isset($_POST["gender"]) && ($_POST["gender"] == "Femme") ? "selected" : "" ?>>Femme</option>
                        </select>
                        <span style="color:red;"><?= isset($error["Gender"]) ? $error["Gender"] : "" ?></span>
                    </div>
                    <div class="mt-3">
                        <label for="postalCode">Code postal :</label>
                        <input type="text" name="postalCode" id="postalCode" class="form-control" placeholder="75000" value="<?= isset($securedPostalCode) ? $securedPostalCode : "" ?>">
                        <span style="color:red;"><?= isset($error["PostalCode"]) ? $error["PostalCode"] : "" ?></span>
                    </div>
                    <div class="mt-3">
                        <label for="email">Adresse email :</label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="dupont@gmail.com" value="<?= isset($securedEmail) ? $securedEmail : "" ?>">
                        <span style="color:red;"><?= isset($error["Mail"]) ? $error["Mail"] : "" ?></span>
                    </div>
                    <div class="mt-3">
                        <p>Type de recherche :</p>
                        <div>
                            <input type="radio" id="male" name="type" value="Homme" <?= isset($_POST["type"]) && ($_POST["type"] == "Homme") ? "checked" : "" ?>>
                            <label for="male">Homme</label>
                        </div>
                        <div>
                            <input type="radio" id="female" name="type" value="Femme" <?= isset($_POST["type"]) && ($_POST["type"] == "Femme") ? "checked" : "" ?>>
                            <label for="female">Femme</label>
                        </div>
                        <div>
                            <input type="radio" id="mixed" name="type" value="Homme & Femme" <?= isset($_POST["type"]) && ($_POST["type"] == "Homme & Femme") ? "checked" : "" ?>>
                            <label for="mixed">Homme & Femme</label>
                        </div>
                        <span style="color:red;"><?= isset($error["Type"]) ? $error["Type"] : "" ?></span>
                    </div>

                    <div class="mt-4 mb-5 d-flex justify-content-between">
                        <input type="submit" name="submitButton" class="btn btn-info btn-md" value="Rencontrer nos célibataires">
                    </div>
                </form>
            </div>
        </div>
    </div>






    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
</body>
</html>