
<?php

require_once ('books.class.php');


class BookController extends Books{

    private $book;
    public $clicked;

    function __construct($book, $clicked){
        $this->book = $book;
        $this->clicked = $clicked;
    }


    public function passBook(){

        if($this->clicked){
            $result = $this->getBook($this->book);
            return $result;
        }else{
            return $result = 'click again';
        }
        
    }

    
}