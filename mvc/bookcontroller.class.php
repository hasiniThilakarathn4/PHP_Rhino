
<?php

require_once ('books.class.php');


class BookController extends Books{

    private $book;

    function __construct($book){
        $this->book = $book;

    }


    public function passBook($clicked){

        if($clicked){
            $result = $this->getBook($this->book);
            return $result;
        }else{
            return $result = 'click again';
        }
        
    }

    
}