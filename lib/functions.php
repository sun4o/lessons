<?php
function Hello ($n)
{
    echo "Hello ".$n;
}

function sum ($a,$b)
{
    $s=$a+$b;
        echo "Сумма чисел ".$a." и ".$b." равна ".$s;
}

function dis($a,$b,$c)
{
    $d = $b**2 - 4*$a*$c;

    /*$d1=$b*$b;

    $d=$d1-4*$a*$b;*/

    echo"Дискрименант равен:  ".$d;
}

function irur ()
{
   echo sqrt(9);

}

function db ($sql)
{
    $connection = mysqli_connect("localhost", 'sergey', 12345, "sergey");
    mysqli_query($connection,"SET NAMES UTF-8");

   if($sql)
   {
       $result = mysqli_query($connection, $sql);
       while ($row = mysqli_fetch_assoc($result))
       {
           $rows[] = $row;
       }

       return $rows;
   }
}
