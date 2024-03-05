<?php

$x = 3;

function printSomething() {
    $x = 4;
    echo $x, "<br/>";
}

echo $x, "<br/>";
printSomething();
echo $x, "<br/>";