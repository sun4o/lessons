<form method="post">
    Число 1<input type="text" name="chislo1">
    Число 2<input type="text" name="chislo2">
    Число 1<input type="submit" value="Посчитать">
</form>


<?php
if ($_POST)
{
    $a = $_POST['chislo1'];
    $b = $_POST['chislo2'];
    $sum = $a + $b;
    echo "Сумма чисел ".$a." и ".$b." равна ".$sum;
}