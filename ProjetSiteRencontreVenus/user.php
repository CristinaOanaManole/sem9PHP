<body>
  <h2>Voici le profil de <?= $afficher_profil['nom'] . $afficher_profil['prenom']; ?></h2>
 <div>Quelques informations sur vous : </div>
    <ul>
     <li>Votre id est : <?= $afficher_profil['id'] ?></li>
      <li>Votre mail est : <?= $afficher_profil['mail'] ?></li>
      <li>Votre compte a été crée le : <?= $afficher_profil['date_creation_compte'] ?></li>
    </ul>
  </body>