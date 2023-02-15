

<?php

    $num1 = 0;
    $num2 = 100;
    $step = 1;

    for($counter = $num1; $counter <= $num2; $counter += $step){
        $pali = strrev($counter);

        if($counter == $pali){
            echo $pali ." This number is Palindrome <br>";
        }


    }