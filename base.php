
<?php


start_page('bd');

include 'utils.inc.php';
$dbLink = mysqli_connect(localhost, vsd, EricZemour)
or die('Erreur de connexion au serveur : ' . mysqli_connect_error());



mysqli_select_db($dbLink , user)
or die('Erreur dans la sélection de la base : ' . mysqli_error($dbLink)
);



end_page();
?>