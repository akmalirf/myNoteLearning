<?php

// how to make a class

class Car {
  // This is a Field/Property/Attributes
  public $name;
  public $color;

  // This is a Method/Function/Behavior
  // Constructor implementation
  Function __construct($name,$color,$price){
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
  }

  function introduce(){
    return $this->name . " " . $this->color . " Harganya " . $this->price;
  }
}

// How to make object
$sedan = new Car("Honda","Merah",5000);

// Result
echo $sedan->introduce();
// Honda Merah Harganya 5000

?>
