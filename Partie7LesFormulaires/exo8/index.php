   <?php

   if (isset($_POST['lastname']) && isset($_POST['firstname']) && isset($_POST['gender'])) {
       $fileinfo = pathinfo($_FILES['filepdf']['name']);
       $extension_pdf = $fileinfo['extension'];
       if ($extension_pdf == 'pdf') {
           $displayExtension = 'Le fichier est bien un pdf';
       } else {
           $displayExtension = 'Le fichier n\'est pas un pdf';
       }
       echo 'Nom : ' . $_POST['lastname'] . ' <br> Prénom : ' . $_POST['firstname'] . ' <br> Genre : ' . $_POST['gender'] . ' <br> Fichier : '
           . $_FILES['filepdf']['name'] . '<br> Extension : ' . $displayExtension;
   } else {

   ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Partie7 exo8</title>
</head>
<!--<p>
## Exercice 8
Sur le formulaire de l'exercice 6, en plus de ce qui est demandé sur les exercices précédent, vérifier que le fichier transmis est bien un fichier **pdf**.
    </p>-->

<body>
<div class="container text-center mt-5">
        <form class="form-groupe" action="index.php" method="$_POST" enctype="multipart/form-data">
            <select name="nom" size="1">
                <option id="madame" name="civilite" value="madame">Mme
                <option id="monsieur" name="monsieur" value="monsieur">Mr
            </select>

            <label for="lastName">Nom</label>
            <input type="text" name="lastName" id="lastName" placeholder="Indiquer votre nom">
            <label for="firstName">Prénom</label>
            <input type="text" name="firstName" id="firstName" placeholder="Indiquer votre prénom">
            <input type="submit" value="Envoyer">
        </form>

    <?php 
}
    ?>

    </div>





    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>