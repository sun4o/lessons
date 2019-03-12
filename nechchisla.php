<form method="post">
    Вывести числа от <input type="text" name="number1">
    до <input type="text" name="number2">
    <select name="type">
        <option value="2">чётные</option>
        <option value="1">нечётные</option>
        <option value="all">все</option>
    </select>
    <input type="submit" value="СМЭРТЬ">
</form>


<?php
$j=$_POST['number1'];

switch ($_POST['type'])
{
    case 1:
        do{
            if($j%2!=0)
            {
                echo $j."<br>";
            }

            $j++;
        }while ($j<=$_POST['number2']);
        break;
    case 2:
        do{
            if($j%2==0)
            {
                echo $j."<br>";
            }

            $j++;
        }while ($j<=$_POST['number2']);
        break;
    case 'all':
        do{

                echo $j."<br>";

            $j++;
        }while ($j<=$_POST['number2']);
        break;
}

