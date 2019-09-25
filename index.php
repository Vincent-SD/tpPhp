

<?php
include 'utils.inc.php';

start_page('date');
?>



<form  method="post">
 <input type="text" name="identifiant" /> <br>
 <input type="radio" name="sexe"/> <br>
 <input type="text" name="mail"/>   <br>
 <input type="password" name="mot de passe"/> <br>
 <input type="password" name="confirmer mot de passe" /> <br>
 <input type="text" name="telephone" /> <br>
 <select name="pays">
   <option> france </option>
   <option> espagne </option>
   <option> nigeria</option>
   <option> afgranistan </option>
   <option> le bendo  </option>
 </select> <br>
 <input type="checkbox" name="conditions générales"/> <br>
 <input type="submit" name="soumettre"/> <br>


</form>
<?php
end_page();
?>
<?php
