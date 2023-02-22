<?php

    $start = 100;
    $limit = 1;
    $step = 1;
    $line = 0;

    for($counter = $start; $counter >= $limit; $counter -= $step ){
        if($line % 5 == 0){
            echo "<br>";
        }
        $line++;
        echo $counter . " ";
    }