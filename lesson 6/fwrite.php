<?php


$my_file = fopen("txt.txt", "w");
fwrite($my_file, "Hello, World!");
fclose($my_file);


?>
