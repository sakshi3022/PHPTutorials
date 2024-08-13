<?php
$a = 89;  //Integer
$b = 4.56;  //Float
$c = "23";  //Number String
echo ($a . "<br>" . $b ."<br>". $c);
echo "<br>";
var_dump($a);
var_dump($b);
var_dump($c);
echo "<br>";
var_dump($a . $b. $c);

// PHP has the following predefined constants for integers:

//     PHP_INT_MAX - The largest integer supported
//     PHP_INT_MIN - The smallest integer supported
//     PHP_INT_SIZE -  The size of an integer in bytes
//     PHP has the following functions to check if the type of a variable is integer:
    
//     is_int()
//     is_integer() - alias of is_int()
//     is_long() - alias of is_int()

$x = 589;
var_dump(is_int($x)); //True
echo "<br>";
$y = 68.888888890;
var_dump (is_int($y)); //False
echo "<br>";
var_dump (is_float($y)); //true
echo "<br>";

/* 
PHP Infinity
 A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
 PHP has the following functions to check if a numeric value is finite or infinite:

   is_finite()
   is_infinite() 
*/
$s = 1.5e345;
var_dump($s); //Float inf
echo "<br>";

/* 
PHP NaN
NaN stands for Not a Number.

NaN is used for impossible mathematical operations.

PHP has the following functions to check if a value is not a number:

is_nan()
*/

$h = acos(8);
var_dump($h);
echo "<br>";

//Numeric string
$p = 456;
var_dump(is_numeric($p)); //true
echo "<br>";
$q = "786";
var_dump(is_numeric($q)); //true
echo "<br>";
$r = "56.89" + 100;
var_dump(is_numeric($r));  //true
echo "<br>";
$t = "Hello";
var_dump(is_numeric($t));  //false
echo "<br>";

//PHP castong string , float into integer

//cast float to int
$o = 2345.355;
$int_cast = (int)$o;
echo $int_cast;
echo "<br>";

//cast string to int
$l= "67485485.99";
$int_cast = (int)$l;;
echo $int_cast;
?>