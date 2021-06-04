<?php

require_once ('person.class.php');

 class Child extends Person{

    public function getIncome(){
        $this->income; //only child can access the protected properties of its parent
    }

}

$child = new Child();
echo $child->getIncome();
