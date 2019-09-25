<?php

$action = $_POST['action'];


if($action == 'mailer')
{
    echo '<br/><strong>oui !</strong><br/>';
}
else
    echo '<br/><strong>Bouton non géré !</strong><br/>';
