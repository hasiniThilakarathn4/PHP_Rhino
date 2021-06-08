<?php
require_once ('bookcontroller.class.php');
require_once ('bookview.class.php');
require_once ('model.class.php');
require_once ('controller.class.php');
require_once ('view.class.php');


$model = new Model();
$controller = new Controller($model);
$view = new View($controller, $model);  
echo $view->output();

$clicked =  true;
$book = 'Harry Potter';

$book_controller  = new BookController($book, $clicked);
$book_view = new BookView($book_controller);

$passed_book = $book_controller->passBook($clicked);
echo $book_view->showBook($passed_book);


