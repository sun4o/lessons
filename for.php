<form method="post">
    Введите число<input value="10" type="text" name="privet">
    <input type="submit" value="Погнали">
</form>
<?php
for ($i=1;$i<=$_POST['privet'];$i++)
{
    echo "Привет<br>";
}