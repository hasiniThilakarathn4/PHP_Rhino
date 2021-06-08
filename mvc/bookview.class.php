<?php

require_once ('books.class.php');

class BookView extends Books{

    
    private $book_controller;

    function __construct(BookController $book_controller ){
        
        $this->book_controller = $book_controller;
    }

    public function showBook($book){

        if ($book) {
            echo $this->book_controller->passBook();
        } else {
            echo  'Invalid book name';
               
        }
    } 

   

}

