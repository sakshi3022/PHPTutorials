<?php

// Associative arrays are arrays that use named keys that you assign to them.
$cars = array ("brand" => "ford", "model" => "Mustane", "year"=> "2013");
var_dump($cars);
echo "<br>";

//Access array
echo $cars["model"];
echo "<br>";


//change value
$cars ["year"] = 2018;
var_dump($cars);
echo "<br>";

//loop through as associative array
foreach ($cars as $x){
    echo "$x <br>";
}
?>