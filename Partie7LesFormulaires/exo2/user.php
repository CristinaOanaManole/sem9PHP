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
echo "Nom: " . $_GET['firstName'] . "<br>";
echo "Prénom: " . $_GET['lastName'];
?>