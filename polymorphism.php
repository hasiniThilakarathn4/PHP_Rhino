<?php

interface Vehicle {

    function show();
}


class LVehicle implements Vehicle {
    function show(){
        echo 'light vehicle'.'<br>';
    }
}

class HVehicle implements Vehicle {
    function show(){
        echo 'heavy vehicle'.'<br>';
    }
}

$lv = new LVehicle();
$hv = new HVehicle();


$lv->show();