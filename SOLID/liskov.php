<?php

//child class and parent class should be substitutable
/*
In methods,
    arguments and return types should match
    child pre-conditions cannot be greater than parent pre conditions
    child post-conditions cannot be lesser than parent post conditions
    exceptions by child method must be same as of parent
*/
class Parent {

    public function add(int $number) : void {
        echo $number + 1;
    }
}

class Child extends Parent {
    public function add(int $number) : void {
        echo $number + 1;
    }
}