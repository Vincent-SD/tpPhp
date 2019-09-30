
<?php


include 'utils.inc.php';

start_page('bd');

$dbLink = mysqli_connect('mysql-vsd.alwaysdata.net', 'vsd', 'EricZemour')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());



mysqli_select_db($dbLink , 'vsd_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);


$query='SELECT id, identifiant, mail,date FROM user';


if (!($dbResult = mysqli_query($dbLink, $query))) {
    echo 'Erreur de requête<br/>';
// Affiche le type d'erreur.
    echo 'Erreur : ' . mysqli_error($dbLink) . '<br/>';
// Affiche la requête envoyée.
    echo 'Requête : ' . $query . '<br/>';
    exit();
}


while($dbRow = mysqli_fetch_assoc($dbResult))
{
    echo $dbRow['identifiant'] . '<br/>';
    echo $dbRow['id'] . '<br/>';
    echo $dbRow['email'] . '<br/>';
    echo date('d.m.Y', strtotime($dbRow['date'])) . '<br/>';
    echo '<br/><br/>';
}


end_page();

?>