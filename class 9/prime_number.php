
<?php

    $num1 = 1;
    $num2 = 100;
    $num3 = 2;
    $step = 1;


    for($counter = $num1; $counter <= $num2; $counter += $step)
    {
        $prime = 0;
        for($coun = $num3; $coun <= $counter/$num3; $coun += $step){

            if($counter % $coun == 0){
                $prime++;
                break;
            }
        }
        if($prime == 0){
            echo $counter . " is prime number <br>";
        }
    }