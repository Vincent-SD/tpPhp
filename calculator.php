<?php

include 'functions.php';

start_page('calculator');
?>

<form action="calcul.php" method="post">
    <input type="text" name="op"/> <br/>
    <input type="text" name="op"/> <br/>
    <input checked="checked" type="radio" name="op" value="*" /> * <br/>
    <input type="radio" name="op" value="+" /> + <br/>
    <input type="radio" name="op" value="-" /> - <br/>
    <input type="radio" name="op" value="/" /> / <br/>

    <input type="submit" value="submit"> <br/>
    <input type="submit" value="reset"> <br/>
</form>


<?php
end_page();
?>
