<?php

    $start = 1;
    $limit = 10;
    $step = 1;


    for($counter = $start; $counter <= $limit; $counter += $step){
        for($i = 1; $i <= $counter; $i++){
            echo "*";
        }
        echo "<br>";
    }