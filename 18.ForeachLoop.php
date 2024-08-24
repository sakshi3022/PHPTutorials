<?php

//The foreach loop - Loops through a block of code for each element in an array or each property in an object.
$color = array ("red", "green", "pink", "blue");

foreach ($color as $x){
    echo "$x <br>";
}

echo "<br>";

$members = array ("peter"=>"35", "ben" => "37" , "joe" => "43");

foreach ($members as $p => $q){
    echo "$p : $q <br> ";
}

echo "<br>";

//break 

$colour = array("red", "green", "blue", "pink");

foreach ($colour as $u){
    if ($u == "green") break;
    echo "$u <br>";
}

echo "<br>";

//continue

$name = array ("john", "Ben", "bheem", "Herry");

foreach ($name as $t){
    if ($t == "bheem") continue;
    echo "$t <br>";
}

echo "<br>";

//foreach byref
$book = array ("Hindi", "Math", "Histroy", "Marathi");

foreach ($book as $k) {
    if($k == "Math") $k = "english";
    echo "$k <br>";
}
var_dump ($book);

echo "<br>";

?>