<?php

$t = date ("H");

if ($t < "20"){
    echo "Have a good day";
}
else{
    echo "have a good night";
}

echo "<br>";


//if-elseif-else statement

$p = date ("H");

if($p < "10"){
    echo "have a good morning";
}
elseif($p < "20"){
    echo "have a good day";
}
else {
    echo "have a good night";
}

echo "<br>";


//shorthanded if

$a = 5;
if($a < 10) $b = "hello";

echo $b;

echo "<br>";


//Short hand if else

$c = 12;

$d = $c < 10 ? "hello" : "bye";

echo $d;
?>