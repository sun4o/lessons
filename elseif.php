<form method="post">
    Введите число<input type="text" name="a">
   <input type="submit" value="Что">
</form>






<?php

$a = $_POST["a"] ;

if ($a == 5)
{
    echo " Пять ";
}
elseif ($a == 4)
{
    echo " Четыре ";
}
elseif ($a == 1)
{
    echo " Один кот ";
}
else
{
    echo "каво";
}

