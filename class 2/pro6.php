<?php

    echo "Find out the maximum of two numbers using if structure.";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    function maximum($number1,$number2){
        if($number1 > $number2){
            echo "Largest number is : ".$number1;
        }else {
            echo "Largest number is : ". $number2;
        }
           

    }

    maximum(50,55);