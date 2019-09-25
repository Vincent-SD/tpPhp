<?php

include 'utils.inc.php';

start_page('formulaire');

$action = $_POST['action'];
$email  = $_POST['mail'];
$password = $_POST['mdp'];
;

if($action == 'mailer')
{

    $message = 'Voici vos identifiants d\'inscription :' . PHP_EOL;
    $message .= 'Email : ' . $email . PHP_EOL;
    $message .= 'Mot de passe : ' . PHP_EOL . $password;
    sleep(5);
    mail($email,'inscription' , $message);
    echo '<br/><strong>Mail envoyé !</strong><br/>';


}
else
    echo '<br/><strong>Bouton non géré !</strong><br/>';


?>



<?php
end_page();

?>