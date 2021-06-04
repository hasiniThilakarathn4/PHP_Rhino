<?php

interface Start {

    public function switch_on();
    public function switch_off();
}

interface Volume {

    public function volume_up();
    public function volume_down();
}

interface Pluggable {

    public function plug_in();
    public function plug_off();
}

abstract class Device implements Start, Volume, Pluggable {

    public function switch_on() { echo "Switching on\n"; }
    public function switch_off() { echo "Switching off\n"; }

    public function volume_up() { echo "Volume up\n"; }
    public function volume_down() { echo "Volume down\n"; }

    public function plug_in() { echo "Plugging in\n"; }
    public function plug_off() { echo "Plugging off\n"; }

    abstract function playGames();
}

class Samsung extends Device{

    function __construct(){
        $this->switch_on();
    }

    public function playGames(){
        echo 'use playstore';
    }
}

class Apple extends Device{

    function __construct(){
        $this->switch_on();
    }
    
    public function playGames(){
        echo 'use Applestore';
    }
}

$mobile = new Samsung();
$mobile->playGames();
$mobile->volume_up();
$mobile->plug_in();