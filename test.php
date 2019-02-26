<form method="post">
    Как вас зовут<input type="text" name="name">
    колько вам лет<input type="text" name="age">
    <input type="submit" value="Вход">
</form>
<?php
if($_POST)
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    echo "Меня зовут ".$name." и мне ".$age." лет ";
}


