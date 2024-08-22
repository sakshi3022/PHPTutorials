<?php

$day = "sunday";

switch($day){

    case "monday":
        echo "Today is monday";
        break;
    
    case "tuesday":
        echo "Today is tuesday";
        break;

    case "wednesday":
        echo "Today is wednesday";
        break;

    case "thursday":
        echo "Today is thursday";
        break;

    case "friday":
        echo "Today is friday";
        break;

    case "saturday":
        echo "today is saturday";
        break;

    case "sunday":
        echo "today is sunday";
        break;

    default:  //If no cases get a match, the default block is executed
       echo "Day is no found your entry is wrong";

}


?>