<?php

class HouseModel {

    private $houses; 
    public function __construct() {
        $this->houses = [
            ['name'=>'Mansion', 'img'=>'house-1.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'mansions'],
            ['name'=>'Classic', 'img'=>'house-2.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'classic'],
            ['name'=>'Modern House', 'img'=>'house-3.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
            ['name'=>'Modern House', 'img'=>'house-4.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
            ['name'=>'Modern', 'img'=>'house-5.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
            ['name'=>'Apartments', 'img'=>'house-6.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'apartments'],
            ['name'=>'Apartments', 'img'=>'house-7.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'apartments'],
            ['name'=>'Modern House', 'img'=>'house-8.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'modern'],
            ['name'=>'Classic', 'img'=>'house-9.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'classic'],
            ['name'=>'Apartments', 'img'=>'house-10.jpg', 'price'=>'100,000', 'desc'=>'Lorem ipsum dolor sit amet consectetur', 'type'=>'apartments']
        ];
    }

    public function get() {
        return $this->houses;
    }

}