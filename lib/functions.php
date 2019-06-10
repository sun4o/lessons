<?php

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

function db ($sql=null)
{

    if($connection = mysqli_connect("localhost", 'sergey', 12345, "sergey"))
    {

    }

    mysqli_query($connection,"SET NAMES UTF8");

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

// Таблица Пифагора
function piffagor ($tr,$td)
{
    echo  "<table>\n";
    for ($i=1; $i<=$tr; $i++)
    {
        echo "\t<tr>\n";
        for ($d=1; $d<=$td; $d++)
        {
            echo "\t\t<td>";
                echo $i*$d;
            echo "</td>\n";
        }

        echo "\t</tr>\n";
    }

    echo  "</table>";
}