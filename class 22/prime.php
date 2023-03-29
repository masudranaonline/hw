<?php

    $number = 7;

    if($number <= 1){
        $prime = 0;
    }
    else{
        $prime = 0;
        for($i = 2; $i < $number; $i++){
            if($number % $i == 0){
                $prime = 0;
                break;
            }else{
                $prime = 1;
            }
        }
    }

    if($prime){
        echo "this number is prime number";
    }else
        echo "this number is not prime number";