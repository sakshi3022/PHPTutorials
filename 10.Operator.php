<?php

//Arithmetic Operators
echo "Arithmetic Operation";
echo "<br>";
$a = 34;
$b = 22;
$c = $a+$b;
$d = $a - $b;
$e = $a * $b;
$f = $a / $b;
$g = $a % $b;
echo ($c. "<br>".$d. "<br>".$e. "<br>".$f. "<br>".$g. "<br>");
echo "<br>";

//Assignment Operator
echo "Assignment Operation";
echo "<br>";
$x = 27;
$y = 30;
// echo $x = $y;
// echo "<br>";
echo $x  +=  $y;
echo "<br>";
echo $x  -=  $y;
echo "<br>";
echo $x  *=  $y;
echo "<br>";
echo $x  /=  $y;
echo "<br>";
echo $x  %=  $y;
echo "<br>";
echo "<br>";

//Comparison Operator
echo "Comparision Operation";
echo "<br>";
$p = 78;
$q = 45;
var_dump($p == $q);
echo "<br>";
var_dump($p === $q);
echo "<br>";
var_dump($p != $q);
echo "<br>";
var_dump($p > $q);
echo "<br>";
var_dump($p < $q);
echo "<br>";
var_dump($p !== $q);
echo "<br>";
var_dump($p >= $q);
echo "<br>";
var_dump($p <= $q);
echo "<br>";
var_dump($p <> $q);//	Returns true if $x is not equal to $y
echo "<br>";
var_dump($p <=> $q);//Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.
echo "<br>";
echo "<br>";

//Increment / Decrement Operator
echo "Increment & decrement Operation";
echo "<br>";

$u = 7;
echo $u++; //Post increment
echo "<br>";
echo ++$u; //pre increment
echo "<br>";

$v = 9;
echo $v--; //post decrement
echo "<br>";
echo --$v; //pre decrement
echo "<br>";
echo "<br>";


//Logical Operator
echo "Logical Operation";
echo "<br>";

$q = 4;
$r = 9;

if($q == 4 and $r == 9){  //True if both $x and $y are true
    echo "Hello world";
    echo "<br>";
}

if ($q == 4 or $r == 9){  //True if either $x or $y is true
    echo "Hii";
    echo "<br>";
}

if($q == 4 xor $r == 4){  //True if either $x or $y is true, but not both
    echo "hey";
    echo "<br>";
}

if ($q == 4 && $r ==4){  //True if both $x and $y are true
    echo "John";
    echo "<br>";
}

if($q == 4 || $r == 5){  //True if both $x and $y are true
    echo "smith";
    echo "<br>";
}

if (! ($q == 3)){
    echo "true";
}
?>