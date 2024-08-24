<?php

//for loop continue
for($i = 0 ; $i <=5; $i++){
    if($i == 3) continue;
    echo "$i <br>";
}

echo "<br>";

//while loop continue
$x = 1;

while ($x < 8){
    if ($x == 3) {
        continue;
    }
    echo "$x <br>";
    $x++;
}

echo "<br>";

//Do-while loop continue
$y =1;
do {
    $y++;
    if ($y == 2)
        continue;
        echo "$y <br>";
} while($y < 10);


echo "<br>";

//foreach loop continue

$colour = array ("red", "blue", "pink", "green");

foreach ($colour as $a){
    if($a == "blue")
    continue;
    echo "$a <br>";
}

?>