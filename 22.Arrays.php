<?php

//declare array
$color = array ("red", "pink", "yellow");

var_dump($color);

echo "<br>";

//array items 
//we can add different data type in same array
$myArr = array ("volvo", 15 ,["apples", "bananas"]);
var_dump($myArr);

echo "<br>";

//array function (count())
$cars = array ("volvo", "bmw", "toyota");
echo count($cars);
?>