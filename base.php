
<?php


include 'utils.inc.php';

start_page('bd');

$dbLink = mysqli_connect('mysql-vsd.alwaysdata.net', 'vsd', 'EricZemour')
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());



mysqli_select_db($dbLink , 'vsd_bd')
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);



end_page();

?>