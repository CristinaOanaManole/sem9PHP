<?php

$data = "source.xml";
$xml = simplexml_load_file($data); // Récupération et affichage des données du fichier donné XML 

$accueil = $xml->page[0]->content;
$accueilTitle = $xml->page[0]->title;

$aboutUs = $xml->page[1]->content;
$aboutUsTitle = $xml->page[1]->title;

$opinion = $xml->page[2]->content;
$opinionTitle = $xml->page[2]->title;

$contact = $xml->page[3]->title;
$contactTitle = $xml->page[3]->content;



?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/d89aa1e4ce.js" crossorigin="anonymous"></script>
    <link href="assets/css/style.css" rel="stylesheet">
    <title><?php
            if (isset($_GET["menu"])) {
                echo $accueilTitle;
            }

            if (isset($_GET['menu']) && $_GET['menu'] == "accueil") {
                echo $accueilTitle;
            } else if (isset($_GET['menu']) && $_GET['menu'] == "aboutUs") {
                echo $aboutUsTitle;
            } else if (isset($_GET['menu']) && $_GET['menu'] == "opinion") {
                echo $opinionTitle;
            } else if (isset($_GET['menu']) && $_GET['menu'] == "contact") {
                echo $contactTitle;
            }
            ?> </title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="http://sem9php/ProjetXML/?menu-accueil">Maçonnerie Ocordo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="http://sem9php/ProjetXML/?menu-accueil">Accueil</a>
                    <a class="nav-link" href="http://sem9php/ProjetXML/?menu-aboutUs">Qui sommes-nous ?</a>
                    <a class="nav-link" href="http://sem9php/ProjetXML/?menu-opinion">Nos clients temoignent</a>
                    <a class="nav-link" href="http://sem9php/ProjetXML/?menu-contact">Contact</a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    if (isset($_GET["menu"])) {
        echo $accueilTitle;
    }
    ?>

    <footer class="footerM d-flex bg-light text-center align-items-center justify-content-center p-5">
        <p class="text-center text-white">Maçonnerie Ocordo 2021 © Tous les droits réserves </p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>
    <script src="assets/js/script.js"></script>

</body>

</html>