

<?php
include 'utils.inc.php';

start_page('date');
?>



<form  method="post">
 <input type="text" placeholder="identifiant" /> <br>
 <input type="radio" placeholder="sexe"/> <br>
 <input type="text" placeholder="mail"/>   <br>
 <input type="password" placeholder="mot de passe"/> <br>
 <input type="password" placeholder="confirmer mot de passe" /> <br>
 <input type="text" placeholder="telephone" /> <br>
 <select placeholder="pays">
   <option> france </option>
   <option> espagne </option>
   <option> nigeria</option>
   <option> afgranistan </option>
   <option> le bendo  </option>
 </select> <br>
 <input type="checkbox" placeholder="conditions générales"/> <br>
 <input type="submit" placeholder="soumettre"/> <br>


</form>
<?php
end_page();
?>
<?php
