<?php

echo "Write a program that can say the name of weekdays by receiving 1 to 7.";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

function week($day_no){
    if($day_no == 1){
        echo "Saturday";
    }elseif($day_no == 2){
        echo "Sunday";
    }elseif($day_no == 3){
        echo "Monday";
    }elseif($day_no == 4){
        echo "Tuesday";
    }elseif($day_no == 5 ){
        echo "Wenesday";
    }elseif($day_no == 6 ){
        echo "Thursday";
    }elseif($day_no == 7){
        echo "Friday";
    }else
        echo "Days Error!";
}

week(5);

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


$day = 1;

switch($day){
    case($day == 1):
        echo "Saturday";
        break;
    case($day == 2):
        echo "Sunday";
        break;
    case ($day == 3):
        echo "Monday";
        break;
    case($day == 4):
        echo "Tuesday";
        break;
    case($day == 5):
        echo "Wenesday";
        break;
    case($day == 6):
        echo "Thursday";
        break;
    case($day == 7):
        echo "Friday";
        break;
    default:
        echo "Days Error!";
        break;
}








