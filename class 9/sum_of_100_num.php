<?php

    $num1 = 0;
    $num2 = 100;
    $step = 1;
    $sum = 0;

    for($counter = $num1; $counter <= $num2; $counter += $step)
    {
        $sum = $sum + $counter;    
    }
    echo "Sumation of 1 to 100 : ".$sum;