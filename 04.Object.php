<?php

//a class is a blueprint for creating objects. It defines a set of properties and methods to be used by the objects 
//created from the class

class Car{

    public $color ;
    public $model;

    public function __construct($color, $model){
        $this -> color= $color;
        $this -> model = $model;
    }
    
    public function message(){
        return "My car color is " .$this->color . "". $this -> model . "!";
    }
}
$myCar = new Car("Red", "Volvo");
var_dump($myCar);
?>