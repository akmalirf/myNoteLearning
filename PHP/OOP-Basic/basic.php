<?php

// how to make a class

class Car {
  // This is a Field/Property/Attributes
  public $name;
  public $color;

  // This is a Method/Function/Behavior
  function introduce(){
    return $this->name . " " . $this->color;
  }
}

// How to make object
$sedan = new Car();
$sedan -> name = "honda";
$sedan -> color= "merah";

// Result
echo $sedan->introduce();
// honda merah

?>
