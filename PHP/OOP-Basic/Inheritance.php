<?php

// how to make a class

class Vehicle {
  // This is a Field/Property/Attributes
  public $name;
  public $color;
  public $price;

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

// Inteheritance Implementation
class car extends vehicle {

}

// How to make object
$sedan = new car("Honda","Merah",5000);

// Result
echo $sedan->introduce();
// Honda Merah Harganya 5000

?>