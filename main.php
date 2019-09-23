<?php

start_page('date');
?>



<?php
$jour = date('F d, Y');
$heure = date('g : i , a ')
?>


<?php
$jour2 = date('d/m/Y', strtotime($jour));

echo $jour2;
?>
<br>
<?php
echo $jour;
echo '  ';
echo $heure;
?>

<?php
end_page();
?>
