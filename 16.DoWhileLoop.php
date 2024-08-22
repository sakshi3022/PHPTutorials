<?php

//Do-while loop
$a = 1;

do{
    echo $a;
    $a++;
} while($a < 6);

echo "<br>";
//break statement

$b =2;

do {
    if($b == 4) break;
    echo $b;
    $b++;
} while ($b < 10);

echo "<br>";

//continue statement

$c = 1;

do{
    if($c == 3) continue;
    echo $c;
    $c++;
} while ($c < 10);
?>