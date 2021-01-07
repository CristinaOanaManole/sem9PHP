<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css">
    <title>Partie 10 TP1</title>
</head>

<body>
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="card login-content shadow-lg border-0">
                    <h1 class="text-center m-5">Formulaire d'inscription</h1>

                    <form class="form-register border-light" action="index.php" method="GET" enctype="multipart/form-data">
                        <p class="text-center"><span> Complétez le formulaire.
                                Les champs marqué par </span>
                            <em>*</em> sont <em> obligatoires </em>
                        </p>

                        <div class="mx-auto">
                            <fieldset>
                                <legend class="text-center mb-2 mt-2">Contact</legend>

                                <div class="px-4 m-1">

                                    <label for="lastName" class="px-2">Votre nom : <em>*</em></label>
                                    <input class="m-3" type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom" required="" minlength="4" maxlength="20" size="20" value="<?php echo !empty($lastName) ? $lastName : ''; ?>">
                                    <?php if (!empty($lastNameError)) : ?>>
                                    <!--on vérifie sil y a une erreur-->

                                    <p> <span class="red"><?php echo $lastNameError; ?></span></p>
                                    <!--dans ce cas on l'affiche-->

                                <?php endif; ?>

                                <label for="firstName" class="px-2">Votre prénom :<em>*</em></label>
                                <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom" required="" minlength="4" maxlength="20" size="20" value="<?php echo !empty($firstName) ? $firstName : ''; ?>">
                                <?php if (!empty($firstNameError)) : ?>
                                    <!--on vérifie sil y a une erreur-->>

                                    <p> <span class="red"><?php echo $firstNameError; ?></span></p>
                                    <!--dans ce cas on l'affiche-->

                                <?php endif; ?>
                                </div>

                                <div class="px-4 m-1">
                                    <label for="address" class="px-2">Votre adresse :<em>*</em></label>
                                    <input type="text" id="address" name="address" placeholder="1 rue Colbert 75000 Paris" required>


                                    <label for="phone" class="px-2">Votre téléphone :<em>*</em></label>
                                    <input type="text" id="phone" name="phone" placeholder="0612345678" required>
                                </div>
                            </fieldset>

                            <fieldset>
                                <legend class="text-center mb-2 mt-2">Informations personnelles</legend>
                                <div class="container">
                                    <div class="px-1">

                                    <div class="">
                                        <label for="dateofBirth" class="p-2">Votre date de naissance<em>*</em></label>
                                        <input id="dateofBirth" type="date" placeholder="jour/mois/année" pattern="[0-9]{1-2}" required=""><br> <!--  -->
                                    </div>

                                        <div class="">
                                            <label for="birthCountry" class="p-2">Pays de naissance :</label>
                                            <input type="text" id="birthCountry" name="birthCountry">
                                        </div>

                                        <div class="">
                                            <label for="countryOrigin" class="p-2">Nationalité :</label>
                                            <input type="text" id="countryOrigin" name="countryOrigin">
                                        </div>

                                        <div class="">
                                            <label for="email" class="p-2">Adresse mail :<em>*</em></label>
                                            <input name="email" type="text" size="22">
                                        </div>

                                        <div class="">
                                            <label for="graduate" class="p-2">Diplôme :</label>
                                            <input type="radio" name="optradio" value="sans BAC">sans BAC
                                            <input type="radio" name="optradio" value="BAC">BAC
                                            <input type="radio" name="optradio" value="BAC">BAC+2
                                            <input type="radio"A name="optradio" value="BAC">BAC+3 ou supérieur

                                        </div>

                                        <div class="">
                                            <label for="lien" class="p-2">Lien codecademy :</label>
                                            <input type="text" name="url" size="12" value="http://">
                                        </div>

                                        <div class="">
                                            <label for="com" class="p-2">
                                                Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
                                            <textarea id=""></textarea>
                                        </div>


                                        <div class="">
                                            <label for="comment" class="p-2">
                                                Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                                                <textarea id=""></textarea>
                                        </div>

                                        <div class="">
                                            <label for="commen">
                                                Avez vous déjà eu une expérience avec la programmation et/ou l'informatique <br> 
                                                avant de remplir ce formulaire ?
                                                <textarea id=""></textarea>
                                        </div>

                                        <input class="text-center" type="submit" name="submit" value="valider"></p>

                            </fieldset>


                        </div>
                </div>
                </form>

            </div>
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