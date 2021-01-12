<?php

require_once 'index_controller.php';

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <title>Partie 10 TP1</title>
</head>

<body>

    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="card login-content shadow-lg border-0">
                    <h1 class="text-center m-5">Formulaire d'inscription</h1>

                    <form class="form-register border-light bg-light" action="index.php" method="POST" enctype="multipart/form-data">
                        <p class="text-center"><span> Complétez le formulaire.
                                Les champs marqué par </span>
                            <em>*</em> sont <em> obligatoires </em>
                        </p>

                        <div class="mx-auto">

                            <fieldset>
                                <legend class="text-center mb-2 mt-2">Contact</legend>
                                <div class="contact">
                                    <label for="lastName" class="p-2">Votre nom : <em>*</em></label>
                                    <input type="text" name="lastName" class="caseName" id="lastName" placeholder="Indiquer votre nom" required="" minlength="4" maxlength="20" size="20" value="<?= isset($_POST['lastName']) ? $_POST['lastName'] : '' ?>">
                                </div>
                                <p class="displayMessageError text-center">
                                    <?= isset($messageError['lastName']) ? $messageError['lastName'] : '' ?><?= isset($messageSuccess['lastName']) ? $messageSuccess['lastName'] : '' ?>
                                </p>

                                <div class="contact">
                                    <label for="firstName" class="p-2">Votre prénom :<em>*</em></label>
                                    <input type="text" name="firstName" class="case" id="firstName" placeholder="Indiquer votre prénom" required="" minlength="3" maxlength="20" size="20" value="<?= (isset($_POST['firstName'])) ? $_POST['firstName'] : '' ?>">
                                </div>
                                <p class="displayMessageError text-center">
                                    <?= isset($messageError['firstName']) ? $messageError['firstName'] : '' ?><?= isset($messageSuccess['firstName']) ? $messageSuccess['firstName'] : '' ?>
                                </p>

                                <div class="contact">
                                    <label for="address" class="p-2">Votre adresse :<em>*</em></label>
                                    <input type="text" id="address" name="address" class="case" placeholder="1 rue Colbert 75000 Paris" required value="<?= (isset($_POST['address'])) ? $_POST['address'] : '' ?>">
                                </div>
                                <p class="displayMessageError text-center">
                                    <?= isset($messageError['address']) ? $messageError['address'] : '' ?><?= isset($messageSuccess['address']) ? $messageSuccess['address'] : '' ?>
                                </p>
                                <div class="contact">
                                    <label for="phone" class="m-2">Votre téléphone :<em>*</em></label>
                                    <input type="text" id="phone" name="phone" class="phone" placeholder="0612345678" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required value="<?= (isset($_POST['phone'])) ? $_POST['phone'] : '' ?>">
                                </div>
                                <p class="displayMessageError text-center">
                                    <?= isset($messageError['phone']) ? $messageError['phone'] : '' ?><?= isset($messageSuccess['phone']) ? $messageSuccess['phone'] : '' ?>
                                </p>
                            </fieldset>

                            <fieldset>
                                <legend class="text-center mb-3 mt-3">Informations personnelles</legend>


                                <div class="info">
                                    <label for="dateofBirth" class="p-2">Votre date de naissance<em>*</em></label>
                                    <input type="date" class="mx-3" id="dateofBirth" name="dateofBirth" placeholder="12/12/2021" pattern="[0-9]{1-2}" required value="<?= (isset($_POST['dateofBirth'])) ? $_POST['dateofBirth'] : '' ?>">
                                </div>
                                <p class="displayMessageError text-center">
                                    <?= isset($messageError['dateofBirth']) ? $messageError['dateofBirth'] : '' ?><?= isset($messageSuccess['dateofBirth']) ? $messageSuccess['dateofBirth'] : '' ?>
                                </p>
                                <div class="info">
                                    <label for="birthCountry" class="p-2">Pays de naissance :<em>*</em></label>
                                    <input type="text" class="mx-5" id="birthCountry" name="birthCountry" >
                                </div>

                                <div class="info">
                                    <label for="countryOrigin" class="p-2">Nationalité :<em>*</em></label>
                                    <input type="text" class="origin" id="countryOrigin" name="countryOrigin" value="<?= (isset($_POST['countryOrigin'])) ? $_POST['countryOrigin'] : '' ?>">
                                </div>
                                <p class="displayMessageError text-center"><?= isset($messageError['countryOrigin']) ? $messageError['countryOrigin'] : '' ?><?= isset($messageSuccess['countryOrigin']) ? $messageSuccess['countryOrigin'] : '' ?></p>

                                <div class="info">
                                    <label for="email" class="p-2">Adresse mail :<em>*</em></label>
                                    <input type="text" class="mail" name="email" size="27" placeholder="john@mail.com" value="<?= (isset($_POST['email'])) ? $_POST['email'] : '' ?>">
                                </div>
<p class="displayMessageError text-center"><?= isset($messageError['email']) ? $messageError['email'] : '' ?><?= isset($messageSuccess['email']) ? $messageSuccess['email'] : '' ?></p>

                                <div class="info">
                                    <label for="graduate" class="p-2" id="">Diplôme :<em>*</em></label>
                                    <select class="pickDiplome" name="pickDiplome" value="">
                                        <option class="choix" value="" disabled>Votre choix</option>
                                        <option class="optInfo" name="optradio" value="1">sans BAC</option>
                                        <option class="optInfo" name="optradio" value="2">BAC</option>
                                        <option class="optInfo" name="optradio" value="3">BAC+2</option>
                                        <option class="optInfo" name="optradio" value="4">BAC+3 ou supérieur</option>
                                    </select>
                                </div>

                                <div class="info">
                                    <label for="numberPE" class="p-2" id="">Numéro Pôle Emploi :<em>*</em></label>
                                    <input type="text" class="numberPE" id="" name="numberPE" placeholder="1234567Y" value="">
                                </div>

                                <div class="info">
                                    <label for="lien" class="p-2">Lien codecademy :</label>
                                    <input type="text" class="url" name="url" size="12" value="http://">
                                </div>

                                <div class="info">
                                    <label for="numberBadges" class="p-2" id="">Nombres de badges :</label>
                                    <input type="text" id="" class="badges" name="badges" placeholder="Combien des badges avez-vous ?" value="" min="1" max="30">
                                </div>

                                <fieldset>
                                    <legend class="text-center mb-3 mt-3">Questionnaire</legend>

                                    <div class="questionnaire col-lg-12 col-md-12 col-sm-12 col-12 mb-2 mt-2">
                                        <label for="comHero" class="px-1 mt-1">
                                            Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?<em>*</em>
                                            <textarea name="comHero" id=""></textarea>
                                    </div>


                                    <div class="questionnaire col-lg-12 col-md-12 col-sm-12 col-12 mb-2 mt-2">
                                        <label for="comHack" class="px-1 mt-1">
                                            Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)<em>*</em>
                                            <textarea name="comHack" id=""></textarea>
                                    </div>

                                    <div class="questionnaire col-lg-12 col-md-12 col-sm-12 col-12 mb-2 mt-2">
                                        <label for="comExp" class="px-1">
                                            Avez vous déjà eu une expérience avec la programmation et/ou l'informatique <br>
                                            avant de remplir ce formulaire ?
                                            <input type="radio" id="radioOui" class="" name="experience optionradio" value="Oui">Oui
                                            <input type="radio" id="radioNon" name="experience optionradio" value="Non">Non
                                    </div>
                                </fieldset>

                                <div class="text-center">
                                    <button class="btn bg-secondary mx-auto m-3" type="submit" name="submit" value="">Valider</button>

                                </div>

                            </fieldset>

                        </div>
                    </form>
                </div>
            </div>
        </div>




        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>