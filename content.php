<?php
$pages = db("SELECT content FROM pages WHERE id='{$_GET['page']}'");

echo $pages[0]['content'];