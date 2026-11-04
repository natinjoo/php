<?php


$my_file = fopen("txt.txt", "r");
echo fgets($my_file);
fclose($my_file);


?>
