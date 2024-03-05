<?php


function setNum($x) {
    $x = $x * 3;
}

$y = 10;
setNum($y);
echo $y . "<br/>"; // will still be 10

function setNum2(&$x) {
    $x = $x * 3;
}

$y = 10;
// will actually change $y
setNum2($y);
echo $y . "<br/>"; 
