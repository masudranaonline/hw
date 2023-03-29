<?php
    $number = 25418;

    $last_number = $number % 10;

    while($number >= 10){
         $number = (int)( $number / 10);
    }

    echo $number + $last_number;
