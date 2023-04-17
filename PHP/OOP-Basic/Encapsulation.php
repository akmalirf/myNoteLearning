<?php

// <!-- Encapsulation 
//   The wrapping up of data and methods into a single unit (called class) is known as encapsulation. 
//   Encapsulation is a protection mechanism for the data members and methods present inside the class. 
//   In the encapsulation technique, we are restricting the data members from access to outside world end-user.

//   In PHP, encapsulation utilized to make the code more secure and robust. 
//   Using encapsulation, we are hiding the real implementation of data from the user and also does not 
//   allow anyone to manipulate data members except by calling the desired operation.
// -->

// <!-- Encapsulation Implementation -->

class Vehicle {
  // This is a Field/Property/Attributes
  private $name;
  private $color;

  // Private mean property cant be accces from outside class, only use method to manipulate 

  // This is a Method/Function/Behavior
  function set_name($name){
    return $this->name = $name;
  }
  function get_name(){
    return $this->name;
  }
  function set_color($color){
    return $this->color = $color;
  }
  function get_color(){
    return $this->color;
  }
  function introduce(){
    return $this->name . " " . $this->color;
  }
};

// How to make object
$sedan = new Vehicle("honda","merah",20000);

// use method to manipulate property
$sedan->set_name("honda");
$sedan->set_color("hitam");

// Result 
echo $sedan->introduce();
// Honda Hitam

?>