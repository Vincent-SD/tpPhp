<?php
$op1=$_GET['op1'];
$op2=$_GET['op2'];
$op=$_GET['op'];
$action=$_GET['action'];


?>


<?php


if('*'==$action)
{
    echo $op1 * $op2;

}
elseif('+'== $action)
{
    echo $op1 + $op2;
}
elseif ('-' == $action)
{
    echo $op1 - $op2;
}
elseif ('/' == $action)
{
    echo $op1 / $op2;
}
else
{
        echo'<br/><strong>opérateur '.$op.'non géré</strong>';
}
?>