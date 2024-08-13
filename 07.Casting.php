<?php

//cast to string

$a = 5;
$b = 45.7;
$c = "Hello";
$d = true;
$e = NULL;


$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

var_dump($a . "<br>" .$b ."<br>". $c. "<br>" .$d ."<br>".$e);
/* 

Output 
string(27) "5
45.7
Hello
1
"
 */

echo "<br>";
echo "<br>";
echo "<br>";

//casting to int

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;

var_dump($a . "<br>" .$b ."<br>". $c. "<br>" .$d ."<br>".$e);

/*output

string(22) "5
45
0
1
0
*/
echo "<br>";
echo "<br>";
echo "<br>";

//casting to float

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
var_dump($a . "<br>" .$b ."<br>". $c. "<br>" .$d ."<br>".$e);
/*output
string(24) "5
45.7
0
1
0
*/
echo "<br>";
echo "<br>";
echo "<br>";


//Casting to boolean
$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
var_dump($a . "<br>" .$b ."<br>". $c. "<br>" .$d ."<br>".$e);

/*
output

string(19) "1
1

1
"
*/
echo "<br>";
echo "<br>";
echo "<br>";
//Casting to Array
$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);

echo "<br>";
echo "<br>";
echo "<br>";

// array(1) { [0]=> bool(true) } array(1) { [0]=> bool(true) } array(1) { [0]=> bool(false) } array(1) { [0]=> bool(true) } array(1) { [0]=> bool(false) }

//Casting to object
$a = (object) $a;
$b = (object) $b;
$c = (object) $c;
$d = (object) $d;
$e = (object) $e;
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);

/*
output
object(stdClass)#1 (1) { ["0"]=> bool(true) }
object(stdClass)#2 (1) { ["0"]=> bool(true) }
object(stdClass)#3 (1) { ["0"]=> bool(false) }
object(stdClass)#4 (1) { ["0"]=> bool(true) }
object(stdClass)#5 (1) { ["0"]=> bool(false) }
*/



?>