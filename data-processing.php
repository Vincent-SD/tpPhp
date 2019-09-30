<?php

include 'utils.inc.php';

start_page('formulaire');

$action = $_POST['action'];
$email  = $_POST['mail'];
$password = $_POST['mdp'];
$identifiant = $_POST['identifiant'];
$sexe = $_POST['genre'];
$telephone = $_POST['phone'];
$pays = $_POST['pays'];
$conditions = $_POST['conditions'];
;


$dbLink = mysqli_connect('mysql-vsd.alwaysdata.net', 'vsd', 'EricZemour')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());



mysqli_select_db($dbLink , 'vsd_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);


if($action == 'mailer')
{
    $today = date('Y-m-d');

    $query = 'INSERT INTO user (mail, identifiant, pass, telephone, pays, date, genre, conditions) 
        VALUES ( \'' . $email . '\' ,
         \'' . $identifiant . '\',
         \'' . $password. '\' ,
         \'' . $telephone . '\' ,
         \'' . $pays . '\' ,
         NOW(),
         \'' . $sexe . '\' ,
         \'' . $conditions . '\'
         )';
//oui
    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'identifiant : ' . $identifiant . PHP_EOL;
    $message .= 'MAIS YA PAS EU DE MAIL YA PAS EU DE MAIL !!!!: ' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;


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
        mail($email,'inscription' , $message);
        echo '<br/><strong>Mail envoyé !</strong><br/>';

    }





}
else
    echo '<br/><strong>Bouton non géré !</strong><br/>';








end_page();

?>