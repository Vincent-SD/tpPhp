<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
<body>

<h1>Test</h1>

<?php
echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
echo 'C\'est pas mal non ? <br/>';
?>

<?php
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
?>

<?php echo "$var1 + $var2"; ?>
<?php echo $var1 + $var2; ?>
<br>

<?php echo $var1 + $var3; ?>


</body>
</html>