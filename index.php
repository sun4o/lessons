<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <<link href="style/style.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>

<?php
require_once "lib/functions.php";
$pages = db("SELECT menu_name,content FROM pages");

foreach ($pages as $page)
{
    echo "<a href='#' class='button'>".$page['menu_name']."</a>";
}

?>

</body>
</html>