<?php

require_once ('books.class.php');

class BookView extends Books{

    private $clicked;
    private $book_controller;

    function __construct($clicked, BookController $book_controller ){
        $this->clicked = $clicked;
        $this->book_controller = $book_controller;
    }

    public function showBook($book){

            if ($book) {
                echo $this->book_controller->passBook($this->clicked);
            } else {
                echo  'Invalid book name';
               
            }
    } 

   

}

