<?php

class ClassA {

    function __construct() {
        echo 'A';
    }
}

class ClassB extends ClassA {

    function __construct() {
        parent::__construct();
        echo 'B';
    }
}

class ClassC extends ClassB {

    function __construct(){
        parent::__construct();
    }
}

$ob = new ClassC();
