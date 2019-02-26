
<form method="post">
    Введите число<input type="text" name="a">
   <input type="submit" value="Что">
</form>


<?php

$a = $_POST["a"] ;

switch ($a)
{
    case 5:
        echo " Пять ";
        break;
    case  4:
        echo " Четыре ";
        break;
    case  1:
        echo " Один кот ";
        break;
    default:
        echo "каво";
}