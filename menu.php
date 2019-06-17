<?php
$pages = db("SELECT id, menu_name FROM pages");

echo "<ul>";
foreach ($pages as $page)
{
    echo "<li><a href='index.php?page={$page['id']}' class='button'>".$page['menu_name']."</a></li>";
}
echo "</ul>";