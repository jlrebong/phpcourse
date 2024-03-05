<?php

// Comment uncomment to see the effect of this 
// on the code below
declare(strict_types=1);

function calculator (int $x=1, int $y=2) {
    echo $x + $y;
}

// If its not strict mode - its possible to convert
// string to numbers and numbers to string
// Declaring strict mode will make this not allowed
calculator("1", "2");
