<?php

//while-loop

$a = 1;
while($a <6){
    echo $a;
    $a++;
}

echo "<br>";

//break statement
$b = 1;
while ($b< 10){
    if($b == 7) break;
    echo $b;
    $b++;
}

echo "<br>";

//continue statement
$c = 2;
while ($c <8){
    $c++;
    if($c == 5) continue;
    echo $c;
}

echo "<br>";

//while loop

$d = 0;
while ($d < 100){
    $d += 10;
    echo $d ."<br>";
}
?>