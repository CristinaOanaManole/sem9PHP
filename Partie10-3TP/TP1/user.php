<?php
$firstName = "";//on initialize notre variable nom
$lastName = "";//on initialize notre variable prénom
$lastNameError ="";//on initialize notre message erreur
$firstNameError ="";//on initialize notre message erreur
$regexText ="";

//fonction pour sécuriser les données 
function test_input($data) {
    $data = trim($data); // skip les autres characters comme: espace, tab, newline.
    $data = stripslashes($data); // retourne une chaîne dont les anti-slash on été supprimés. \' devient ' , etc. Les doubles anti-slash sont réduits à un seul anti-slash. stripslashes est la fonction inverse de addslashes .
    $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML.
    return $data;
 }



$email = $_GET['email'];
$point = strpos($email,".");
$arobas = strpos($email,"@");
$url = $_GET['url'];

if($point =='')
{
echo "Votre email doit comporter un <b>point</b>";
}
elseif($arobas =='')
{
echo "Votre email doit comporter un <b>'@'</b>";
}
else
{
echo "Votre email est: '<a href=\"mailto:"."$email"."\"><b>$email</b></a>'";
}
?>

<?php
// vérification du début de l'url
$verif_url = strtolower($url);
$verif_url = substr("$verif_url", 0, 7);
// on verifie les 7 premiers caractères
if ($verif_url!="http://")
{
print("L'URL doit commencer par <b>http://</b>");
exit();
}
else
{
print("$titre : <a href=\"$url\">$url</a>");
}
?>


