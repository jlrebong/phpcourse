<?php

$x=11;
$y=10;

if ($x < $y) {
    echo "$x is less than $y";
} elseif ($x == $y) {
    echo "$x is equal to $y";
}else {
    echo "greater";
}

$role = 'visitor';
switch($role) {
    case "visitor":
        echo "you are a visitor";
        break;
    case "admin":
        echo "you are an admin";
        break;
    default:
        echo "not ten";
        break;
}