<?php

class PointA {
    public float $x;
    public float $y;
    public float $z;
  
    public function __construct(
      float $x = 0.0,
      float $y = 0.0,
      float $z = 0.0
    ) {
      $this->x = $x;
      $this->y = $y;
      $this->z = $z;
    }
}

class PointB {
    public function __construct(
        public float $x = 0.0,
        public float $y = 0.0,
        public float $z = 0.0,
    ) {
    // Nothing else to do here.
    }
}