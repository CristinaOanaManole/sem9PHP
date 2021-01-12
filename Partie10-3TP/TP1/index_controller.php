<?php

$messageError = [];
$messageSuccess = [];

$regexName = '/^\D*$/';
$dateValid = '/^([0-2][0-9]|(3)[0-1])(\/)(((0)[0-9])|((1)[0-2]))(\/)\d{4}$/';
$poleEmploiValid = '/^([0-9]{7}+[A-Z])$/';
$addressValid = '/^[0-9a-z ,.\'-]+$/i';
$regexphone = '/^(0|\\+33|0033)[1-9][0-9]{8}$/';
$regexNumber = '/^[0-9]+$/';

$pickDiplomeArray = [
    1 => 'Sans diplôme',
    2 => 'Bac',
    3 => 'Bac +2',
    4 => 'Bac +3 ou supérieur'
];

var_dump($_POST);

if (isset($_POST['submit'])) {

    if (isset($_POST['lastName'])) {
        if (empty($_POST['lastName'])) {
            $messageError['lastName'] = 'Veuillez renseigner le champ';
        } else if (!preg_match($regexName, $_POST['lastName'])) {
            $messageError['lastName'] = 'Le nom n\'est pas valide';
        } 
        } else {
            $securelastName = htmlspecialchars($_POST['lastName']);
            $messageSuccess['lastName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['firstName'])) {
        if (empty($_POST['firstName'])) {
            $messageError['firstName'] = 'Veuillez renseigner le champ';
        } else if (!preg_match($regexName, $_POST['firstName'])) {
            $messageError['firstName'] = 'Le prénom n\'est pas valide';
        
        } else {
            $securefirstName = htmlspecialchars($_POST['firstName']);
            $messageSuccess['firstName'] = '<i class="fas fa-check formValid"></i>';
        }
    }

 
    if (isset($_POST['birthCountry'])) {
        if (empty($_POST['birthCountry'])) {
            $messageError['birthCountry'] = 'Veuillez renseigner le champ';
        } else if (!preg_match($regexName, $_POST['birthCountry'])) {
            $messageError['birthCountry'] = 'Le pays de naissance n\'est pas valide';
        } else if (strlen($_POST['birthCountry']) < 2 || strlen($_POST['birthCountry']) > 40) {
            $messageError['birthCountry'] = 'Le pays doit contenir de 2 à 40 caractères';
        } else {
            $secureBirthCountry = htmlspecialchars($_POST['birthCountry']);
            $messageError['birthCountry'] = '<i class="fas fa-check formValid"></i>';
        }
    }  


    if (isset($_POST['countryOrigin'])) {
        if (empty($_POST['countryOrigin'])) {
            $messageError['countryOrigin'] = 'Veuillez renseigner le champ';
        } else if (!preg_match($regexName, $_POST['countryOrigin'])) {
            $messageError['countryOrigin'] = 'Le format n\'est pas valide';
        } else if (strlen($_POST['countryOrigin']) < 2 || strlen($_POST['countryOrigin']) > 40) {
            $messageError['countryOrigin'] = 'Le format doit contenir de 2 à 40 caractères';
        } else {
            $securecountryOrigin = htmlspecialchars($_POST['countryOrigin']);
            $messageSuccess['countryOrigin'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    if (isset($_POST['dateofBirth'])) {

        // Le format renvoyé par défaut est yyyy-mm-dd
        // Je convertis le $_POST birthDate en timestamp pour ensuite pouvoir lui attribuer le bon format : dd/mm/yyyy
        $dateofBirth = strtotime($_POST['dateofBirth']);
        $dateCorrectFormat = date("d/m/Y", $dateofBirth);

        if (empty($_POST['dateofBirth'])) {
            $messageError['dateofBirth'] = 'Le champs est vide';
        } else if (!preg_match($dateValid, $dateCorrectFormat)) {
            $messageError['dateofBirth'] = 'Le format de date n\'est pas valide';
        } else {
            $securedateofBirth = htmlspecialchars($dateCorrectFormat);
            $messageSuccess['dateofBirth'] = '<i class="fas fa-check formValid"></i>';
        }
    }

    
        if (isset($_POST['address'])) {
            if (empty($_POST['address'])) {
                $messageError['address'] = 'Le champs est vide';
            } else if (!preg_match($addressValid, $_POST['address'])) {
                $messageError['address'] = 'L\'adresse n\'est pas valide';
            } else if (strlen($_POST['address']) < 2 || strlen($_POST['address']) > 50) {
                $messageError['address'] = 'L\'adresse doit contenir de 2 à 50 caractères';
            } else {
                $secureaddress = htmlspecialchars($_POST['address']);
                $messageSuccess['address'] = '<i class="fas fa-check formValid"></i>';
            }
        }
    
        if (isset($_POST['mail'])) {
            $email = $_POST['mail'];
            if (empty($_POST['mail'])) {
                $messageError['mail'] = 'Le champs est vide';
            } else if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $secureMail = $_POST['mail'];
                $messageError['mail'] = '<i class="fas fa-check formValid"></i>';
            } else {
                $messageSuccess['mail'] = 'L\'email n\'est pas valide';
            }
        }
    
        if (isset($_POST['phone'])) {
            if (empty($_POST['phone'])) {
                $messageError['phone'] = 'Le champs est vide';
            } else if (!preg_match($regexphone, $_POST['phone'])) {
                $messageError['phone'] = 'Le pays de naissance n\'est pas valide';
            } else {
                $securephone = htmlspecialchars($_POST['phone']);
                $messageSuccess['phone'] = '<i class="fas fa-check formValid"></i>';
            }
        }


        if (isset($_POST['pickDiplome'])) {
            if (empty($_POST['pickDiplome'])) {
                $messageError['pickDiplome'] = 'Le champs est vide';
            } else if (!in_array($_POST['pickDiplome'], $pickDiplomeArray)) {
                $messageError['pickDiplome'] = 'Veuillez sélectionner un choix';
            } else {
                $messageSuccess['pickDiplome'] = '<i class="fas fa-check formValid"></i>';
            }
        }
    
        if (isset($_POST['numberPE'])) {
            if (empty($_POST['numberPE'])) {
                $messageError['numberPE'] = 'Le champs est vide';
            } else if (!preg_match($regexnumberPE, $_POST['numberPE'])) {
                $messageError['numberPE'] = 'Le numéro n\'est pas valide';
            } else {
                $securenumberPE = htmlspecialchars($_POST['numberPE']);
                $messageError['numberPE'] = '<i class="fas fa-check formValid"></i>';
            }
        }
    
        if (isset($_POST['badges'])) {
            if (empty($_POST['badges'])) {
                $messageError['badges'] = 'Le champs est vide';
            } else if (!preg_match($regexNumber, $_POST['badges'])) {
                $messageError['badges'] = 'Le numéro n\'est pas valide';
            } else {
                $securebadges = htmlspecialchars($_POST['badges']);
                $messageError['badges'] = '<i class="fas fa-check formValid"></i>';
            }
        }
    
        if (isset($_POST['url'])) {
            $url = $_POST['url'];
            if (empty($_POST['url'])) {
                $messageError['url'] = 'Le champs est vide';
            } else if (filter_var($url, FILTER_VALIDATE_URL)) {
                $secureurl = $_POST['url'];
                $messageError['url'] = '<i class="fas fa-check formValid"></i>';
            } else {
                $messageError['url'] = 'Le lien n\'est pas valide';
            }
        }
    
        if (isset($_POST['comHero'])) {
            if (empty($_POST['comHero'])) {
                $messageError['comHero'] = 'Le champs est vide';
            } else {
                $securecomHero = htmlspecialchars($_POST['comHero']);
                $messageError['comHero'] = '<i class="fas fa-check formValid"></i>';
            }
        }
    
        if (isset($_POST['comHack'])) {
            if (empty($_POST['comHack'])) {
                $messageError['comHack'] = 'Le champs est vide';
            } else {
                $securecomHack = htmlspecialchars($_POST['comHack']);
                $messageError['comHack'] = '<i class="fas fa-check formValid"></i>';
            }
        }
    
        // Radio
        // Si l'index 'experience' n'existe pas dans le $_POST, c'est que l'user n'a pas coché le radio, donc on retourne le message d'erreur
    if (!array_key_exists('experience', $_POST)) {
        $messageError['experience'] = 'Veuillez faire un choix';
    } else {
        $messageSuccess['experience'] = '<i class="fas fa-check formValid"></i>';
    }
    
        if (count($messageError) == 0) {
    
            $securelastName = htmlspecialchars($_POST['lastName']);
            $securefirstName = htmlspecialchars($_POST['firstName']);
            $securedateofBirth = htmlspecialchars($_POST['dateofBirth']);
            $securebirthCountry = htmlspecialchars($_POST['birthCountry']);
            $securecountryOrigin = htmlspecialchars($_POST['countryOrigin']);
            $secureaddress = htmlspecialchars($_POST['address']);
            $secureemail = htmlspecialchars($_POST['email']);
            $securephone = htmlspecialchars($_POST['phone']);
            $securepickDiplome = htmlspecialchars($_POST['pickDiplome']);
            $securenumberPE = htmlspecialchars($_POST['numberPE']);
            $securebadges = htmlspecialchars($_POST['badges']);
            $secureurl = htmlspecialchars($_POST['url']);
            $securecomHero = htmlspecialchars($_POST['comHero']);
            $securecomHack = htmlspecialchars($_POST['comHack']);
            $secureexperience = htmlspecialchars($_POST['experience']);
        }
    