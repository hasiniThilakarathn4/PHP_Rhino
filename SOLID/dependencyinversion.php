<?php

//abstraction
interface DB {
    public function connect();
}

//lower level
//lower level class do the functionality in connect function
//while higher level function use that functionality
class MysqlConnection implements DB {
    public function connect(){
        echo 'connected';
    }
}

//higher level--> accepts abstraction and does something with it
class File {
    public $mysql;

    public function __construct(DB $db){
        $this->mysql = $db; 
    }
}