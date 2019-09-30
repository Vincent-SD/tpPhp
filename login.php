<?php

include 'utils.inc.php';

start_page('login');

?>

<form action="test-pass.php" method="post">
    <input type="text" placeholder="identifiant" name="login" /> <br>
    <input type="password" placeholder="mot de passe" name ="pass" /> <br>
    <input type="submit" name="action" value="submit"/> <br>
</form>


<?php

    end_page();

?>