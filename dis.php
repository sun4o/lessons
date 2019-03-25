

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
$a=$_POST["a"];

$b=$_POST["b"];

$c=$_POST["c"];



$d1=$b*$b;

$d=$d1-4*$a*$b;

echo"D=".$d;

?>