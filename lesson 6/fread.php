<?php


$my_file = fopen("txt.txt", "r");
echo fread($my_file,filesize("txt.txt"));

fclose($my_file);
?>