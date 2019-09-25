<?php

include 'utils.inc.php';

start_page('calculator');
$operateurs = '*+-/';
?>

<form action="calcul.php" method="post">
    <input type="text" name="op1"/> <br/>
    <input type="text" name="op2"/> <br/>
<?php
//    for($cpt = 0 ; $cpt <= 3 ; ++$cpt)
//    {
//    echo '<input ';
//    if($cpt == 0)
//    {
//    echo 'checked="checked" ';
//    }
//    echo 'type="radio" name="op" value="' . $operateurs[$cpt] . '"/>' . $operateurs[$cpt] . ' <br/>' . "\n";
//    }
//?>
    <input type="submit" name="action" value="*"/>
    <input type="submit" name="action" value="+"/>
    <input type="submit" name="action" value="/"/>
    <input type="submit" name="action" value="-"/>
    <input type="reset" value="reset"> <br/>
</form>


<?php
end_page();
?>

