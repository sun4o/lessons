<?php
$fruits ['яблоки'] = 3;
$fruits ['апельсины'] = 6;
$fruits ['бананы'] = 9;
$fruits ['клубника'] = 8;

foreach ($fruits as $k=>$v)
{
    echo $k." - ".$v."кг.<br>";
}