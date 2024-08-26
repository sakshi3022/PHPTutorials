<?php

//In php over 1000 built-in function is present.

//Function calling
function myMessage(){
    echo "Hello world <br>";
}

myMessage();  //Function calling

//Function Arguments

function familyName($fname){
    echo "$fname Refsnse.<br>"; //one argument is passed.
}

familyName("jani");
familyName("borge");
familyName("john");

function familyNames($fname , $year){
    echo "$fname john.born in $year <br>";
}

familyNames("smith", "2003");
familyNames("jack", "2004");
familyNames("sam", "2005");


//Default Argument value

function setHeight($minheight = 50){
    echo "the heigth is : $minheight <br>";
}

setHeight(350);
setHeight();  //it use default value 50
setHeight(130);

//Returning value

function sum ($a, $b){
    $c = $a + $b;
    return $c;
}

echo "5 + 10 = ". sum (5,10). "<br>";
echo "6 + 10 = ". sum (6,10). "<br>";

//passing argument by ref

function add_five(&$value){  //To turn a function argument into a reference, the & operator is used:
    $value += 5;
}

$num = 2;
add_five($num);
echo $num;
echo "<br>";

//variable number of arguments

function sumNumbers (...$x){
    $n = 0;
    $len = count($x);
    for($i =0 ; $i < $len; $i++){
        $n += $x[$i];
    }
    return $n;
}

$a = sumNumbers(5 ,2, 3, 5 ,7, 6);
echo $a;
echo "<br>";


//Return type declaration
//declaration for function arguments, by enabling the strict requirement, it will throw a "Fatal Error" on a type mismatch.

//To declare a type for the function return, add a colon ( : ) and the type right before the opening curly ( { )bracket when declaring the function.


function addNumber(float $a , float $b) : float{
    return $a + $b;
}
echo addNumber(1.2 , 5.4);
?>