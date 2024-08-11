<?php

//Assign value to variable 
$x = 5;
echo $x ;
echo "<br>";

//Assigne tex value to variable
//when we assign value of string data type must use quotes.
$name = "Aniket";
echo $name . " is boy <br>";

$a = 3;
$b = 4;
echo $a + $b;
echo "<br>";

/*for getting data type we use 
var_dump();*/ 

var_dump($a);
echo "<br>";

//Assign String to variable 
$p = "John";
echo $p;
echo "<br>";


//Assign Multiple values 

$e = $y = "Fruit";
echo $e;

//Global variable

$d = 9;

function myTest(){
    echo "<p>the d varible inside the function: $d </p>"; //the d varible inside the function: output and not print varible bcz gloable variable

}
    myTest();

        echo "<p>the d varible outside the function: $d </p>";

//Local variable 
function myTest2(){
    $j = 8;
    echo "<p>the j varible outside the function: $j </p>";
}
    myTest2();
    echo "<p>the j varible outside the function: $j </p>";//local variable can only accessed inside the function


?>