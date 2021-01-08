<?php

if (empty($_POST)) {
    $show = true;
} else {
    $show = false;
}

$regexName = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexcountryOrigin = "/^[a-zA-ZàáâäãåąčćęèéêëėįìíîïłńòóôöõøùúûüųūÿýżźñçčšžÀÁÂÄÃÅĄĆČĖĘÈÉÊËÌÍÎÏĮŁŃÒÓÔÖÕØÙÚÛÜŲŪŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/";
$regexemail = "/^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/"; // Sécurisation des données, regex pour verifier prénom et nom
$regexdateofBirth = "/^(0[1-9]|[12][0-9]|3[01])[- \/.](0[1-9]|1[012])[- \/.]((?|19|20)\d\d)$/";
$regexphone = "/^(0|\+33)[1-9]([-. ]?[0-9]{2}){4}$/";
$regexnumberPE = "/^([0-9]{7}+[A-Z]{1})$/";
$regexnumberBadges = "/^([0-9]{1,3})$/";


// preg_match : permet de rechercher des motifs bien précis au sein d’une chaîne de caractères
// htmlspecialchars : Convertit les caractères spéciaux en entités HTML

$error = [];

if (!empty($_POST)) {

    if (isset($_POST["lastName"])) {
        if (preg_match($regexName, $_POST["lastName"])) {
            $securedlastName = htmlspecialchars($_POST["lastName"]);
        } else {
            $error["lastName"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["lastName"])) {
            $error["lastName"] = "<i>Veuillez renseigner le champ</i>";
        }
    }


    if (isset($_POST["firstName"])) {
        if (preg_match($regexName, $_POST["firstName"])) {
            $securedfirstName = htmlspecialchars($_POST["firstName"]);
        } else {
            $error["firstName"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["firstName"])) {
            $error["firstName"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["dateofBirth"])) {
        if (preg_match($regexdateofBirth, $_POST["dateofBirth"])) {
            $secureddateofBirth = htmlspecialchars($_POST["dateofBirth"]);
        } else {
            $error["dateofBirth"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["dateofBirth"])) {
            $error["dateofBirth"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["countryOrigin"])) {
        if (preg_match($regexcountryOrigin, $_POST["countryOrigin"])) {
            $securedcountryOrigin = htmlspecialchars($_POST["countryOrigin"]);
        } else {
            $error["countryOrigin"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["countryOrigin"])) {
            $error["countryOrigin"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["countryOrigin"])) {
        if (preg_match($regexcountryOrigin, $_POST["countryOrigin"])) {
            $securedcountryOrigin = htmlspecialchars($_POST["countryOrigin"]);
        } else {
            $error["countryOrigin"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["countryOrigin"])) {
            $error["countryOrigin"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["address"])) {
        $securedAddress = htmlspecialchars($_POST["address"]);

        if (empty($_POST["address"])) {
            $error["address"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["email"])) {
        if (filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $securedEmail = htmlspecialchars($_POST["email"]);
        } else {
            $error["email"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["email"])) {
            $error["email"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["phone"])) {
        if (preg_match($regexphone, $_POST["phone"])) {
            $securedphone = htmlspecialchars($_POST["phone"]);
        } else {
            $error["phone"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["phone"])) {
            $error["phone"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    // if (isset($_POST["diploma"])) {
    //     if ((($_POST["diploma"]) === "Aucun") || ($_POST["diploma"] === "BAC") || ($_POST["diploma"] === "BAC + 2") || ($_POST["diploma"] === "BAC + 3 ou supérieur")) {
    //         $securedDiploma = htmlspecialchars($_POST["diploma"]);
    //     } else {
    //         $error["Diploma"] = "<i>Mauvais format</i>";
    //     }

    //     if (empty($_POST["diploma"])) {
    //         $error["Diploma"] = "<i>Veuillez renseigner le champ</i>";
    //     }
    // }

    if (isset($_POST["numberPE"])) {
        if (preg_match($regexnumberPE, $_POST["numberPE"])) {
            $securednumberPE = htmlspecialchars($_POST["numberPE"]);
        } else {
            $error["numberPE"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["numberPE"])) {
            $error["numberPE"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["numberBadges"])) {
        if (preg_match($regexBadgeNumber, $_POST["numberBadges"])) {
            $securednumberBadges = htmlspecialchars($_POST["numberBadges"]);
        } else {
            $error["numberBadges"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["numberBadges"])) {
            $error["numberBadges"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["url"])) {
        if (filter_var($_POST["url"], FILTER_VALIDATE_URL)) {
            $securedurl = htmlspecialchars($_POST["url"]);
        } else {
            $error["url"] = "<i>Mauvais format</i>";
        }

        if (empty($_POST["url"])) {
            $error["url"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["comHero"])) {
        $securedcomHero = htmlspecialchars($_POST["comHero"]);

        if (empty($_POST["comHero"])) {
            $error["comHero"] = "<i>Veuillez renseigner le champ</i>";
        }
    }

    if (isset($_POST["comHack"])) {
        $securedcomHack = htmlspecialchars($_POST["comHack"]);

        if (empty($_POST["comHack"])) {
            $error["comHack"] = "<i>Veuillez renseigner le champ</i>";
        }
    }
}

function userForm($var)
{
    $var = trim($var);
    $var = stripslashes($var);
    $var = htmlspecialchars($var);
    return $var;
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
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/style.css" type="text/css">
    <title>Partie 10 TP1</title>
</head>

<body>

    <?php
    if ($show) {
    ?>

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
                                        <input type="text" name="lastName" class="caseName" id="lastName" placeholder="Indiquer votre nom" required="" minlength="4" maxlength="20" size="20" value="">
                                    </div>

                                    <div class="contact">
                                        <label for="firstName" class="p-2">Votre prénom :<em>*</em></label>
                                        <input type="text" name="firstName" class="case" id="firstName" placeholder="Indiquer votre prénom" required="" minlength="3" maxlength="20" size="20" value="">
                                    </div>

                                    <div class="contact">
                                        <label for="address" class="p-2">Votre adresse :<em>*</em></label>
                                        <input type="text" id="address" name="address" class="case" placeholder="1 rue Colbert 75000 Paris" required value="">
                                    </div>

                                    <div class="contact">
                                        <label for="phone" class="m-2">Votre téléphone :<em>*</em></label>
                                        <input type="text" id="phone" name="phone" class="phone" placeholder="0612345678" pattern="^((\+\d{1,3}(-| )?\(?\d\)?(-| )?\d{1,5})|(\(?\d{2,6}\)?))(-| )?(\d{3,4})(-| )?(\d{4})(( x| ext)\d{1,5}){0,1}$" required>
                                    </div>
                                </fieldset>

                                <fieldset>
                                    <legend class="text-center mb-3 mt-3">Informations personnelles</legend>


                                    <div class="info">
                                        <label for="dateofBirth" class="p-2">Votre date de naissance<em>*</em></label>
                                        <input type="date" class="mx-3" id="dateofBirth" name="dateofBirth" placeholder="12/12/2021" pattern="[0-9]{1-2}" required=""> <!--  -->
                                    </div>

                                    <div class="info">
                                        <label for="birthCountry" class="p-2">Pays de naissance :<em>*</em></label>
                                        <input type="text" class="mx-5" id="birthCountry" name="birthCountry">
                                    </div>

                                    <div class="info">
                                        <label for="countryOrigin" class="p-2">Nationalité :<em>*</em></label>
                                        <input type="text" class="origin" id="countryOrigin" name="countryOrigin">
                                    </div>

                                    <div class="info">
                                        <label for="email" class="p-2">Adresse mail :<em>*</em></label>
                                        <input type="text" class="mail" name="email" size="27" placeholder="john@mail.com">
                                    </div>

                                    <div class="info">
                                        <label for="graduate" class="p-2" id="">Diplôme :<em>*</em></label>
                                        <select class="choixDiplome">
                                            <option class="choix" value="" disabled>Votre choix</option>
                                            <option class="optInfo" name="optradio" value="1">sans BAC</option>
                                            <option class="optInfo" name="optradio" value="2">BAC</option>
                                            <option class="optInfo" name="optradio" value="3">BAC+2</option>
                                            <option class="optInfo" name="optradio" value="4">BAC+3 ou supérieur</option>
                                        </select>
                                    </div>

                                    <div class="info">
                                        <label for="numberPE" class="p-2" id="">Numéro Pôle Emploi :<em>*</em></label>
                                        <input type="text" class="numberPE" id="" name="numberPE" placeholder="1234567Y" value="94567Y">
                                    </div>

                                    <div class="info">
                                        <label for="lien" class="p-2">Lien codecademy :</label>
                                        <input type="text" class="url" name="url" size="12" value="http://">
                                    </div>

                                    <div class="info">
                                        <label for="numberBadges" class="p-2" id="">Nombres de badges :</label>
                                        <input type="text" id="" class="badges" name="badges" placeholder="Combien des badges avez-vous ?" value="2" min="1" max="30">
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
                                                <input type="radio" id="radioOui" class="" name="optionradio" value="Oui">Oui
                                                <input type="radio" id="radioNon" name="optionradio" value="Non">Non
                                        </div>
                                    </fieldset>

                                    <div class="text-center">
                                        <button class="btn bg-success mx-auto m-3" type="submit" name="submit" value="">Valider</button>

                                    </div>

                                </fieldset>



                            </div>
                        </form>
                    </div>
                </div>
            </div>
        <?php
    }
        ?>

        <?php
        if (count($error) == 0) {
        ?>

            <h1 class="red text-center text-info mt-5">Merci pour votre inscription</h1>

        <?php
        } else {
        ?>
        <?php
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>