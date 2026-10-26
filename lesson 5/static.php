<?php 


$x = 10;
function counter    ()
{
    static  $x = 0;
    $x++;
    echo $x;   
}
counter();
counter();











?>