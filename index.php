

<?php
include 'utils.inc.php';

start_page('formulaire');
?>



<form action="data-processing.php" method="post">
 <input type="text" placeholder="identifiant" name="identifiant" /> <br>
    <label> sexe </label> <br>
  <input type="radio" value="homme" name="genre" checked/> homme <br>
  <input type="radio" value="femme" name="genre" checked/> femme <br>
 <input type="text" placeholder="mail" name="mail"/>   <br>
 <input type="password" placeholder="mot de passe" name="mdp"/> <br>
 <input type="password" placeholder="confirmer mot de passe" name="cmdp"/> <br>
 <input type="text" placeholder="telephone" name="phone" /> <br>
 <select placeholder="pays" name="pays">
   <option> france </option>
   <option> espagne </option>
   <option> nigeria</option>
   <option> afgranistan </option>
   <option> le bendo  </option>
 </select> <br>
    <label> conditions générales </label>
 <input type="checkbox" name="conditions"/> <br>
 <input type="submit" name="action" value="mailer"/> <br>


</form>
<?php
end_page();
?>
<?php
