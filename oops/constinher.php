<?php

class BaseClass {

  function __construct() {

      echo "Calling parent class constructor \n";
      echo "<br>";

  }

}

class SubClass extends BaseClass {

  function __construct() {

      parent::__construct();

      echo "Calling child class constructor \n";
      echo "<br>";


  }

}

$obj = new BaseClass();

$obj = new SubClass();

?>
