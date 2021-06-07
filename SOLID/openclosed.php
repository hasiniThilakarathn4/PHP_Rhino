<?php

interface Shape {
    public function area();
}

abstract class Square implements Shape {

}

abstract class Triangle implements Shape {

}

class SquareCalculations extends Square {
    public $height;
    public $width;

    function __construct($height, $width){
        $this->height = $height;
        $this->width = $width;
    }

    public function area(){
        return $this->height * $this->width;
    } 
}

class TriangleCalculations extends Triangle {
    public $base;
    public $height;

    function __construct($base, $height){
        $this->base = $base;
        $this->height = $height;
    }

    public function area(){
        return ($this->base * $this->height) / 2 ;
    }
}


class Calculations {
    
    public $area = [];

    public function sum_area(Shape $shapes){
        foreach ($shapes as $shape) {
            $area[$shape] = $shape->area();
        }
    echo array_sum($area);

    }

}




