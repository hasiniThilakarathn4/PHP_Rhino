<?php
require_once ('abstractcar.class.php');

class Audi extends Car {
    public function intro(){
      return "Choose German quality! I'm an $this->name!";
    }
  }

 
$audi = new audi("Audi");
echo $audi->intro();
echo "<br>";



