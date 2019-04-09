

<form method="POST">

    a:<br>

    <input type="text" name="a">

    <br>

    b:<br>

    <input type="text" name="b">

    <br>

    c:<br>

    <input type="text" name="c">
<br>
 <input type="submit" value="Посчитать">

</form>

<?php
require_once "lib/functions.php";

dis($_POST['a'],$_POST['b'],$_POST['c']);
irur(9);




?>