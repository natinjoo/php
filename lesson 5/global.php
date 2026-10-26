<?php 


$x = 10;
function test()
{
    global $x, $y;
    $y = 5;  
    echo $x;
    echo $x + $y;
    
}
echo $y;

test();















?>