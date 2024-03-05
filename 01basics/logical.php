<?php

//  Logical operators allows us to compare the equality
//  &&  -- both X and Y are true
//  And -- both X and Y are true

//  ||  -- Either X and Y are true
//  Or  -- Either X and Y are true

//  XOR -- Either X and Y are true, not BOTH
//  !   -- both X and Y are true

$x = 5;
$y = 10;
$z = 5;
if($x == 6 || $y == 10 && $z==6) {
//    false || true && false
//    false || false
//    false
    echo "true";
} else {
    echo "false";
}
