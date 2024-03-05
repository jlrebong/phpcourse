<?php

class HouseView {

    public function __construct(private $model) {}

    public function render($houses) {
        include "./view/pages/house.php";
    }
}