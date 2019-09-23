<?php

include 'functions.php';

start_page(calculator);
?>
<input checked="checked" type="radio" name="op" value="*" /> * <br/>
<input type="radio" name="op" value="+" /> + <br/>
<input type="radio" name="op" value="-" /> - <br/>
<input type="radio" name="op" value="/" /> / <br/>

<form action="calcul.php" method="post">


<?php
end_page();
?>

