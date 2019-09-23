<?php

include 'functions.php';

start_page('calculator');
?>

<form action="calcul.php" method="post">
    <input checked="checked" type="radio" name="op" value="*" /> * <br/>
    <input type="text" name="op"/> <br/>
    <input type="text" name="op"/> <br/>
    <input type="radio" name="op" value="+" /> + <br/>
    <input type="radio" name="op" value="-" /> - <br/>
    <input type="radio" name="op" value="/" /> / <br/>

    <a  value="submit"> <br/>
    <a  value="reset"> <br/>
</form>


<?php
end_page();
?>

