<?php

class Cars{
    private $type;
    public function __construct($type) {
        echo "<br/>This car is a " . $type;
        $this->type = $type;
    }

    function __destruct() {
        echo "<br/>Destroying ";
    }
 }
 $c1 = new Cars('sedan');
 $c2 = new Cars('hatchback');
 $c3 = new Cars('suv');


 