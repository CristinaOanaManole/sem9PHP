<?php
if (!isset($_GET["page"])) {
  header("Location: accueil");
}

$data = "source.xml";
    $xml = simplexml_load_file($data);
    $accueil = $xml->page[0]->content;
    $accueilTitle = $xml->page[0]->title;

    $aboutUs = $xml->page[1]->content;
    $aboutUsTitle = $xml->page[1]->title;

    $opinion = $xml->page[2]->content;
    $opinionTitle = $xml->page[2]->title;

    $contact = $xml->page[3]->content;
    $contactTitle = $xml->page[3]->title;    

?> 

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title><?php
if (!isset($_GET["menu"])){
    echo $accueilTitle;
}

if (isset($_GET["menu"]) && $_GET["menu"] == "accueil"){
echo $accueilTitle;
} else if (isset($_GET["menu"]) && $_GET["menu"] == "aboutUs"){
echo $aboutUsTitle;
} else if (isset($_GET["menu"]) && $_GET["menu"] == "opinion"){
    echo $opinionTitle;
} else if (isset($_GET["menu"]) && $_GET["menu"] == "contact"){
    echo $contactTitle;
}

?></title>
<link rel="stylesheet" href="assets/style.css">
</head>
<body>  

<nav class="navbar navbar-expand-lg navbar-light menu">
  <a class="navbar-brand " href="http://exo-xml/accueil.html">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="http://exo-xml/accueil.html">Accueil</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://exo-xml/aboutUs.html">Qui sommes nous ?</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://exo-xml/opinion.html">Nos clients témoignent</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://exo-xml/contact.html">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<?php
if (!isset($_GET["menu"])){
    echo $accueil;
}

if (isset($_GET["menu"]) && $_GET["menu"] == "accueil"){
echo $accueil;
} else if (isset($_GET["menu"]) && $_GET["menu"] == "aboutUs"){
echo $aboutUs;
} else if (isset($_GET["menu"]) && $_GET["menu"] == "opinion"){
    echo $opinion;
} else if (isset($_GET["menu"]) && $_GET["menu"] == "contact"){
    echo $contact;
}

?>

<footer class="bg-light text-center align-items-center justify-content-center p-4">
        <p class="text-center">Maçonnerie Ocordo © 2021 Tous les droits réserves </p>
    </footer>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>  
</body>
</html>