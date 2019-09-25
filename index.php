

<?php
include 'utils.inc.php';

start_page('date');
?>



<form  method="post">
 <input type="text" placeholder="identifiant" /> <br>
 <input type="radio" value="sexe"/> <br>
 <input type="text" value="mail"/>   <br>
 <input type="password" value="mot de passe"/> <br>
 <input type="password" value="confirmer mot de passe" /> <br>
 <input type="text" value="telephone" /> <br>
 <select value="pays">
   <option> france </option>
   <option> espagne </option>
   <option> nigeria</option>
   <option> afgranistan </option>
   <option> le bendo  </option>
 </select> <br>
 <input type="checkbox" value="conditions générales"/> <br>
 <input type="submit" value="soumettre"/> <br>


</form>
<?php
end_page();
?>
<?php
