<?php

//Syntax
// define(name, value, case-insensitive); 

define ("Greeting","Welcome to W3 schhols.com!");
echo Greeting; //Case Sensitive
echo "<br>";

/* 
case Insensitive
echo greeting;
//Output
Fatal error: Uncaught Error: Undefined constant "greeting" in 
C:\xampp\htdocs\PHP\09.Constant.php:8 Stack trace: #0 {main} thrown in C:\xampp\htdocs\PHP\09.Constant.php on line 8
*/

//Create constant keyword
const Mycar = "BMW";
echo Mycar;
echo "<br>";

//Create constant array
define ("cars",[
    "BMW",
    "Toyota",
    "Volvo"
]);
echo cars[2];
echo "<br>";

//Constants are global
// Constants are automatically global and can be used across the entire script.

define("Greeting", "Welcome to W3Schools.com!!");

function myTest(){
    echo Greeting;
}
myTest();
?>