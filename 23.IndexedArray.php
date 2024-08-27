<?php

//PHP Indexed Arrays

$cars = array("Volvo", "bmw", "toyota");
var_dump($cars);
echo "<br>";

//Access indexed arrays
echo $cars[0];   
echo "<br>";

//Change value
$cars[1] = "Ford";
var_dump($cars);
echo "<br>";

//Loop Through an indexed array
$color = array ("red", "pink", "yellow");
foreach ($color as $x){
    echo "$x <br>";
}

//push item to the array
array_push($color, "green");
var_dump($color);
?>