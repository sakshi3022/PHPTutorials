<?php

for($x = 1; $x <=10; $x++){
    echo   $x * 2;
    echo "<br>";
}

echo "<br>";

//Pattern Program
for ($i = 1; $i <= 5; $i++){
    for ($j = 1 ; $j<= 5; $j++){
        echo "*";
    }
    echo "<br>";

}
echo "<br>";

for($a = 0; $a <=5 ; $a++){
    for($b =0; $b < $a +1 ; $b++){
        echo "*";
    }
    echo "<br>";
}

echo "<br>";

for ($c = 0; $c <=5 ; $c++){
    for($d =0; $d < 5 - $c; $d++){
        echo "*";
    }
    
    echo "<br>";
}

echo "<br>";

//break

for($p = 0; $p <= 10; $p++){
    if($p == 3) break;
    echo "The number is : $p <br>";
}

echo "<br>";

//continue
for($q =0; $q <= 10 ; $q++){
    if($q == 4) continue;
    echo "The number is : $q <br>";
}
?>