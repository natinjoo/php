<?php 


$x = 10;
function test()
{
    global $x;
    $y = 5;
    echo $x;
    echo $y;
}
test();















?>