<?php

include 'utils.inc.php';


$login = $_POST['login'];
$pass  = $_POST['pass'];
$action = $_POST['submit'];



$dbLink = mysqli_connect('mysql-vsd.alwaysdata.net', 'vsd', 'EricZemour')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());



mysqli_select_db($dbLink , 'vsd_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);




$query = "SELECT identifiant , pass FROM user where user.identifiant =  '$login'  'and user.pass = '$pass' ";


if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}


if($dbRow = mysqli_fetch_assoc($dbResult))
{
    header('Location: welcome.php');
}
else
{
    start_page('erreur');
}



?>