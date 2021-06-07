<?php
class Modifiers {
  public $fname = 'Hasini';
  protected $lname ='Thilakarathna';
  private $age = '25';

  protected function setFname($name) {
    $this->fname = $name;
  }
  private function setLname($name) { 
    $this->lname = $name;
  }
}
$test = new Modifiers();
echo $test->fname ;
echo $test->lname ; //Cannot access protected property
echo $test->age ;

$test->setFname('Hasini'); //cannot access

//protected can only be accessed by a child-->error
$test->setLname('Thilakarathna'); 



