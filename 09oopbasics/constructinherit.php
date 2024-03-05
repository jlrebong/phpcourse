<?php

class Cars{
    protected $type;
    public function __construct($type) {
        $this->type = $type;

        echo "Car construct <br/>";
    }
}

class Sedan extends Cars {
    // Notice that this class does not have a constructor
    public function showType() {
        echo $this->type;
    }

    // 3. A child can have its own constructor
    // In this case the parent constructor is no longer called.
    public function __construct() {
        echo 'child construct <br/>';

        // 4. Not unless we specifically call it
        parent::__construct('sedan');
    }
}

// 1. If you don't pass an argument you will get an error
// $sedan = new Sedan();

// 2. So we need to pass an argument
$sedan = new Sedan('sedan');

$sedan->showType();


 