<?php

//String in php is decleared in single or double quotation.

$car = "hello";
$color = 'black';
echo($car ." ". $color);
echo "<br>";
//Double quoted strings perform action on special characters.

$x = "john";
echo "Hello $x";
echo "<br>";


//Single quoted strings does not perform such actions, it returns the string like it was written, with the variable name

$y = "world";
echo 'Hello $y'; //in single quatation not give the value of y it print $y
echo "<br>";

//String length
echo strlen ("hello world");
echo '<br>';

//word count
echo str_word_count("Hii I am sakshi");
echo"<br>";


//Search for text withinh a string
echo strpos("hello world" , "hi");
echo'<br>';

//uppercase
$a = "Hello world";
echo strtoupper($a);
echo'<br>';

//lowercase
$b = "HII SASKSHI!!";
echo strtolower($b);
echo'<br>';

//Replace string
$c = "Hello world!";
echo str_replace("world" , "John" , $c);
echo'<br>';

//Reverse String
$d = "Hello world";
echo strrev($d);
echo'<br>';

//Remove whitespace
$e = "Hello world ";
echo trim($e);
echo'<br>';

//Converting String to array
$f = "Hiii john how are you ??";
$g = explode(" ", $f);
print_r($g);
echo '<br>';
//output = Array ( [0] => Hiii [1] => john [2] => how [3] => are [4] => you [5] => ?? )

//String concatenation (Adding two string together)
$t = "Hello ";
$u = "World";
$v = $t . $u;
echo $v;
echo '<br>';

//Slicing
$txt = "Hello world";
echo substr($txt , 4,5);
echo '<br>';

//Slice to the end 
echo substr($txt , 6);
echo "<br>";

//Slice from the end 
echo substr($txt , -5, 3); //Note The last character has index -1.
echo "<br>";

//negative length
$word = "Hii , How are you";
echo substr($word , 5, -3);


//Escape Charecter
// To insert characters that are illegal in a string, use an escape character.
// $z = "We are the sp-called  "Vikings" from the north,"; //wrong method

$z = "We are the sp-called  \"Vikings\" from the north,"; //An escape character is a backslash \ followed by the character you want to insert.


echo ($z);

?>
