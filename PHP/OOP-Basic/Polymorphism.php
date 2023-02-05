<?php

// how to make a class

class Vehicle {
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

// Inteheritance Implementation
class car extends vehicle {
  // Polymorphism Implementation
  function introduce(){
    return $this->name . " Warnanya " . $this->color . " Harganya " . $this->price;
  }
}

// How to make object
$sedan = new car("Honda","Merah",5000);

// Result (Polymorphism) 
echo $sedan->introduce();
// Honda Warnanya Merah Harganya 5000

?>