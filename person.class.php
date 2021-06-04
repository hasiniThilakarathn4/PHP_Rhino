<?php

class Person {
   //properties
   public $name;
   private $salary;
   protected $income; 

   //function __contructor($salary){
   //    $this->salary = $salary
   //}

   //methods
   //setter and getter method for accessing private salary property
   public function setSalary($salary){
       return $this->salary = $salary;
   }
   public function getSalary(){
     return $this->salary;
   }


 }


 $person = new Person();
 $person->setSalary(1000);
 $salary = $person->getSalary();

 echo $salary;