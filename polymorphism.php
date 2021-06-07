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

//$vh = new Vehicle();
$lv = new LVehicle();
$hv = new HVehicle();

//$lv->show();
//$hv->show();
//$vh->show();

//$vh = $lv;//referencing to the light vehicle
$lv->show();