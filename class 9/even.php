<?php

    $num1 = 0;
    $num2 = 100;
    $step = 1;

    for($counter = $num1; $counter <= $num2; $counter += $step)
    {
        if($counter % 2 == 0){
            echo $counter."<br>";
        }
    }