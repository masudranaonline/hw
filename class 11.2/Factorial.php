<?php

    $num = 5;

    $factorial = 1;

    

    for($counter = $num; $counter >= 1; $counter--){
        $factorial = $factorial * $counter;
        
    }
    echo "Factorial of ".$num." is ".$factorial;


    // 5*4*3*2*1