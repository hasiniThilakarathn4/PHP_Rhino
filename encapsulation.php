<?php

class EncapsulationTest {
    private $age;

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        return $this->age = $age;
    }
}

class Test {
    public $encapsulation_test;

    public function age(EncapsulationTest $encapsulation_test){
        $this->encapsulation_test = $encapsulation_test;
        $this->encapsulation_test->setAge(24);
        echo $this->encapsulation_test->getAge();

    }
}

$en = new EncapsulationTest();
$obj = new Test();
$obj->age($en);