<?php

if (empty($_POST)) {//afficher si le form est vide
   $show = true;
} else {
    $show = false;
}

$firstName = ""; //on initialize notre variable nom
$lastName = ""; //on initialize notre variable prénom
$address = ""; //on initialise notre variable adresse 
$phone = ""; //on initialise notre variable téléphone
$dateofBirth = ""; //on initialise notre variable date de naissance
$countryBirth = ""; //on initialise notre variable pays de naissance
$countryOrigin = ""; //on initialise notre variable nationalité
$email = ""; //on initialise notre variable email
$numberPE = ""; //on initialise notre variable numéro pôle emploi
$url = ""; //on initialise notre variable url 
$numberBadges = ""; //on initialise notre variable numéro badge
$comHero = ""; //on initialise notre variable textarea hero
$comHack = ""; //on initialise notre variable textarea hack
$comExp = ""; //on initialise notre variable textarea experiences

$sError = []; //on initialize notre message erreur

$email = $_POST['email'];
$point = strpos($email, ".");
$arobas = strpos($email, "@");
$url = $_POST['url'];
$regexText = "/^(http|https):\/\/([A-Z0-9][A-Z0-9_-]*(?:.[A-Z0-9][A-Z0-9_-]*)+):?(d+)?\/?/i";



//Vérifier si le formulaire est soumis 
if (isset($_POST['submit'])) {
    /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé  */
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $dateofBirth = $_POST['dateofBirth'];
    $countryBirth = $_POST['countryBirth'];
    $countryOrigin = $_POST['countryOrigin'];
    $email = $_POST['email'];
    $numberPE = $_POST['numberPE'];
    $url = $_POST['url'];
    $numberBadges = $_POST['numberBadges'];
    $comHero = $_POST['comHero'];
    $comHack = $_POST['comHack'];
    $comExp = $_POST['comExp'];
    exit;
}
?>

<?php
function validating($phone)
{
    if (preg_match('/((\+)33|0|0033)[1-9](\d{2}){4}/igm', $phone)) {
        echo "Votre numéro de téléphone est correct";
    } else {
        echo "Votre numéro n'est pas valable";
    }
    if (!filter_var($phone, FILTER_SANITIZE_NUMBER_INT)) {
        $phone  .= "Votre numéro de téléphone est correct";
    } else {
        $phone  .= "Votre numéro n'est pas valable";
    }

    if (empty($_POST["phone"])) {
        $sError = "Le numéro de téléphone est obligatoire\n";
    }

    if (strlen($phone) < 10 || strlen($phone) > 14) { //longeur du integer
        return false;
    } else {
        return true;
    }
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $sErrors  .= "L'adresse mail n'est pas correcte \n";
}

if (empty($_POST["email"])) {
    $sErrors  .= "L'adresse mail est obligatoire\n";
}

if (strlen($sErrors) > 0) {
    return $sErrors;
}

//fonction pour sécuriser les données 
function test_input($data)
{
    $data = trim($data); // skip les autres characters comme: espace, tab, newline.
    $data = stripslashes($data); // retourne une chaîne dont les anti-slash on été supprimés. \' devient ' , etc. Les doubles anti-slash sont réduits à un seul anti-slash. stripslashes est la fonction inverse de addslashes .
    $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML.
    return $data;
}


if ($point == '') {
    echo "Votre email doit comporter un <b>point</b>";
} else if ($arobas == '') {
    echo "Votre email doit comporter un <b>'@'</b>";
} else {
    echo "Votre email est: '<a href=\"mailto:" . "$email" . "\"><b>$email</b></a>'";
}
?>

<?php if (
    $firstName == "" || $lastName == "" ||
    $address == "" || $phone == "" ||
    $email == "" || $username == "" ||
    $password == "" || $role == ""
) {
    array_push($sError, "Les champs sont obligatoires.");
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    array_push($sError, "L'adresse mail n'est pas correcte \n");
}

?>

<?php
// vérification du début de l'url
$verif_url = strtolower($url);
$verif_url = substr("$verif_url", 0, 7);
// on verifie les 7 premiers caractères
if ($verif_url != "http://") {
    print("L'URL doit commencer par <b>http://</b>");
    exit();
} else {
    print("$titre : <a href=\"$url\">$url</a>");
}
?>
<?php
// Vérifier si le formulaire est soumis 
if (isset($_POST['submit'])) {
    /* récupérer les données du formulaire en utilisant 
        la valeur des attributs name comme clé  */
    $firstName = $_POST['nom'];
    $lastName = $_POST['prénom'];
    $address = $_POST['adresse'];
    $phone = $_POST['phone'];
    $dateofBirth = $_POST['dateofBirth'];
    $countryBirth = $_POST['countryBirth'];
    $countryOrigin = $_POST['countryOrigin'];
    $email = $_POST['email'];
    $numberPE = $_POST['numberPE'];
    $url = $_POST['url'];
    $numberBadges = $_POST['numberBadges'];
    $comHero = $_POST['comHero'];
    $comHack = $_POST['comHack'];
    $comExp = $_POST['comExp'];


    // afficher le résultat
    echo '<h1>Formulaire rempli</h1>';
    echo 'Nom : ' . $firstName . ' Age : ' . $lastName . ' Adresse : ' . $address;
    exit;
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
    <div class="container mt-4 mb-4">
        <div class="row">
            <div class="col-lg-8 col-md-10 col-sm-12 col-12 mx-auto">
                <div class="card login-content shadow-lg border-0">
                    <h1 class="text-center m-5">Formulaire d'inscription</h1>

                    <form class="form-register border-light" action="" method="POST" enctype="multipart/form-data">
                        <p class="text-center"><span></p>

                        <h1>Félicitation, vous avez rempli votre formulaire.</h1>
                        <p> Votre nom :<?php echo $_POST['lastName'] ?></p>
                        <p> Votre prénom :<?php echo $_POST['firstName'] ?></p>


                        <?php
                        $n = $_POST['lastName'];
                        $p = $_POST['firstName'];
                        ?>

                        <div class="mx-auto">
                            <fieldset>
                                <legend class="text-center mb-2 mt-2">Contact</legend>

                                <div class="px-4 m-1">

                                    <label for="lastName" class="px-2">Votre nom : <em>*</em></label>
                                    <input class="m-3" type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom" required="" minlength="4" maxlength="20" size="20" value="<?php echo !empty($lastName) ? $lastName : ''; ?> 
                                    <?php if (!empty($sError)) : ?>">
                                    <!--on vérifie sil y a une erreur-->

                                    <p> <span class="red"><?php echo $sError; ?></span></p>>
                                    <!--dans ce cas on l'affiche-->

                                <?php endif; ?>

                                <label for="firstName" class="px-2">Votre prénom :<em>*</em></label>
                                <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom" required="" minlength="4" maxlength="20" size="20" value="<?php echo !empty($firstName) ? $firstName : ''; ?>">

                                <?php if (!empty($sError)) : ?>
                                    <!--on vérifie sil y a une erreur-->

                                    <p> <span class="red"><?php echo $sError; ?></span></p>
                                    <!--dans ce cas on l'affiche-->

                                <?php endif; ?>
                                </div>

                                <div class="px-4 m-1">
                                    <label for="address" class="px-2">Votre adresse :<em>*</em></label>
                                    <input type="text" id="address" name="address" placeholder="1 rue Colbert 75000 Paris" required value="">


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
                                            <input type="date" class="mx-2" id="dateofBirth" placeholder="jour/mois/année" pattern="[0-9]{1-2}" required=""><br> <!--  -->
                                        </div>

                                        <div class="">
                                            <label for="birthCountry" class="p-2">Pays de naissance :</label>
                                            <input type="text" class="mx-5" id="birthCountry" name="birthCountry">
                                        </div>

                                        <div class="">
                                            <label for="countryOrigin" class="p-2">Nationalité :</label>
                                            <input type="text" class="mx-5" id="countryOrigin" name="countryOrigin">
                                        </div>

                                        <div class="">
                                            <label for="email" class="p-2">Adresse mail :<em>*</em></label>
                                            <input type="text" class="mx-4" name="email" size="22">
                                        </div>

                                        <div class="">
                                            <label for="graduate" class="p-2" id="">Diplôme :</label>
                                            <input type="radio" id="" name="optradio" value="sans BAC">sans BAC
                                            <input type="radio" id="" name="optradio" value="BAC">BAC
                                            <input type="radio" id="" name="optradio" value="BAC">BAC+2
                                            <input type="radio" id="" name="optradio" value="BAC">BAC+3 ou supérieur

                                        </div>

                                        <div class="">
                                            <label for="numberPE" class="p-2" id="">Numéro Pôle Emploi :</label>
                                            <input type="text" class="px-1" id="" name="numberPE" value="94567Y">
                                        </div>

                                        <div class="">
                                            <label for="lien" class="p-2">Lien codecademy :</label>
                                            <input type="text" class="mx-4" name="url" size="12" value="http://">

                                            <label for="numberBadges" class="p-2" id="">Nombres de badges :</label>
                                            <input type="number" id="" name="badges" value="2" min="1" max="30">

                                        </div>

                                        <div class="">
                                            <label for="comHero" class="p-2">
                                                Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?
                                                <textarea name="comHero" id=""></textarea>
                                        </div>


                                        <div class="">
                                            <label for="comHack" class="p-2">
                                                Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)
                                                <textarea name="comHack" id=""></textarea>
                                        </div>

                                        <div class="">
                                            <label for="comExp">
                                                Avez vous déjà eu une expérience avec la programmation et/ou l'informatique <br>
                                                avant de remplir ce formulaire ?
                                                <textarea name="comExp" id=""></textarea>
                                        </div>
                                        <div class="text-center">
                                            <input class="mx-auto m-3" type="submit" name="submit" value="valider "

                                            <?php echo '<h1>Formulaire rempli</h1>'; ?> <?php echo 'Nom : ' . $firstName . ' Age : ' . $lastName . ' Adresse : ' . $address; ?>>

                                        </div>

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