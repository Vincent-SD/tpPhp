

<?php
include 'utils.inc.php';

start_page('formulaire');
?>



<form  method="post">
 <input type="text" placeholder="identifiant" /> <br>
    <label> sexe </label>
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
    <label> conditions générales </label>
 <input type="checkbox" /> <br>
 <input type="submit" value="soumettre"/> <br>


</form>
<?php
end_page();
?>
<?php
