<?php
$articulos = simplexml_load_string(file_get_contents('https://community.mybb.com/syndication.php?limit=4'));
$num_noticia=1;
$max_noticias=4;
?>