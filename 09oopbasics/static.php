<?php

class Cars {
    static $door_count = 4;
}

$bmw = new Cars();

// its not accesable via the object
// $bmw->door_count = 10; 

// But accessible via the double dot notation
echo $bmw::$door_count;
$bmw::$door_count=20;

// Use the double dot.
echo Cars::$door_count;  

// The value will be the same even if its accessed from another object
$car2 = new Cars();
echo $car2::$door_count;