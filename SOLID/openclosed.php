<?php

interface Shape {
    public function area() : int;
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

    public function area() : int {
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

    public function area() : int{
        return ($this->base * $this->height) / 2 ;
    }
}


class Calculations {
    
    public $area_sum ;

    public function sum_area(Shape $shapes){
        
        $area_sum = $shapes->area();   

    return $area_sum;

    }
    

}





