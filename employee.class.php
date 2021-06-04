<?php


class Employee{

    public $fname;

    //when an object is created
    function __construct($fname){
        $this->fname = $fname;
    }

    function getFname(){
        return $this->fname;
    }

}

$emp = new Employee("Hasini");

echo  $emp->getFname();

