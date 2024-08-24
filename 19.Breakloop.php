<?php

//for loop
for($x =0 ; $x <=5 ; $x++){
    if($x ==2) break;
    echo "$x <br>";
}


echo "<br>";

//break in while loop

$y = 0;

while($y < 5){
    if ($y ==3){
        break;
    }
    echo "The number is: $y <br>";
    $y++;
}

echo "<br>";

//Do - while loop break
$i = 1;
do{
    if($i == 3) break;
        echo $i;
        $i++;
} while ($i <6);

echo "<br>";
echo "<br>";

//for each loop

$colors = array ("red", "green", "black");

foreach ($colors as $t){
    if($t == "green") break;
    echo "$t <br>";
}

?>