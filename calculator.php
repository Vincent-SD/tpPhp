<?php

include 'functions.php';

start_page(calculator);
?>

<form action="calcul.php" method="post">
    <input checked="checked" type="radio" name="op" value="*" /> * <br/>
    <input type="radio" name="op" value="+" /> + <br/>
    <input type="radio" name="op" value="-" /> - <br/>
    <input type="radio" name="op" value="/" /> / <br/>
    <input type="text" name="op"/> <br/>
    <input type="text" name="op"/> <br/>
    <a type="text" name="op" value="submit"> <br/>
    <a type="text" name="op" value="reset"> <br/>

</form>


<?php
end_page();
?>

