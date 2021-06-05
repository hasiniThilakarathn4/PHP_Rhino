<?php

//Model 
class Books{

    private $array = array('Harry Potter', 'Silent Patient', 'Bend in the road');

    protected function getBook($book){
        if(in_array($book,$this->array)){
            $result = $book;
        }else{
            $result = "";
        }

    return $result;

    } 

    
}