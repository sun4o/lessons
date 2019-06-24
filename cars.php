<?php
require_once "classes/Auto.php";

$mycar=new Auto();
$mycar->speed=200;
$mycar->color="Зеленый";
$mycar->year=1945;
$mycar->model="УАЗик";
$mycar->brand="LADA";
echo $mycar->speed;