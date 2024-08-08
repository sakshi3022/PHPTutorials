<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Tutorial</title>
</head>
<body>
    <div class = "container">
        This is my first php page
        <?php
              echo"Hello wrodl from PHP <br>";
              ECHO"Hello <br>";

              //variables are case sensitive
              $color = "red";
              echo " my car color is " . $color . "<br>";
              echo "my home color is " . $COLOR . "<br>"; //Undefined variable
              echo "my boat is " . $coLoR. "<br>"; //Undefined variable 
              
        ?>
    </div>
</body>
</html>