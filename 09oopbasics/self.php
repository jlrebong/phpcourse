<?php

class Cars {
    static $door_count = 4;

    public function getDoors() {
        // Static are not accessible via the this
        // return $this->door_count;

        //  We need to use the self operator
        echo self::$door_count;

        // Which is equal to the previous lessons
        echo Cars::$door_count;
    }
}

$car = new Cars;

$car->getDoors();