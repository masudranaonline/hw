<?php

    $num1 = 120;
    $num2 = 15;
    $num3 = 15;

    if($num1 <= $num2 && $num1 <= $num3){
        echo "The lowest number is : ".$num1;
    }elseif($num2 <= $num1 && $num2 <= $num3){
        echo "The lowest number is : ".$num2;
    }else
         echo "The lowest number is : ".$num3;
        