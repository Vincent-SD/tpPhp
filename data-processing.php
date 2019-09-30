<?php

include 'utils.inc.php';

start_page('formulaire');

$action = $_POST['action'];
$email  = $_POST['mail'];
$password = $_POST['mdp'];
$identifiant = $_POST['identifiant'];
$sexe = $_POST['genre'];
$telephone = $_POST['telephone'];
$pays = $_POST['pays'];
$conditions = $_POST['pays'];
;

if($action == 'mailer')
{

    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'identifiant : ' . $identifiant . PHP_EOL;
    $message .= 'MAIS YA PAS EU DE MAIL YA PAS EU DE MAIL !!!!: ' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;
    mail($email,'inscription' , $message);
    echo '<br/><strong>Mail envoyé !</strong><br/>';


}
else
    echo '<br/><strong>Bouton non géré !</strong><br/>';



$today = date('Y-m-d');


$query = 'INSERT INTO user (mail, identifiant, id, pass, telephone, pays, date, genre, conditions) 
        VALUES ( \'' . $email . '\' ,
         \'' . $identifiant . '\',
         ,
         \'' . $password. '\' ,
         \'' . $telephone . '\' ,
         \'' . $pays . '\' ,
         \'' . $today . '\' ,
         \'' . $sexe . '\' ,
         \'' . $conditions . '\' ,
         )';


if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur dans requête<br />';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}
else {
    echo '<br/><strong>bonsoir, votre inscription a bien été enregistrée.</strong><br/>';
}


end_page();

?>