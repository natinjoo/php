<?php

$my_file = fopen("ds.txt", "r");

echo fread($my_file,filesize("ds.txt"));
fclose($my_file);

?>