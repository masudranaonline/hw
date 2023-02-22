<?php
	
    $number = 20;

    for($counter = 1; $counter <= $number; $counter++){
        $divisitor = $number % $counter;

        if($divisitor == 0){
            echo $counter. "<br> ";
        }
    }