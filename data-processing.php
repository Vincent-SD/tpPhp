<?php

include 'utils.inc.php';

start_page('formulaire');

$action = $_POST['action'];
$email  = $_POST['mail'];
$password = $_POST['mdp'];
$identifiant = $_POST['identifiant'];
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


?>



<?php
end_page();

?>