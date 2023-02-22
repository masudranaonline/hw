<?php

    $number = 36;

    $start = 1;
    $limit = $number - 1;
    $step = 1;
    $status = 0;

    for($counter = $start; $counter <= $number; $counter += $step){
       
        if( $counter * $counter == $number){
            $status = 1;
        break;       
          }
       
      }

      if($status == 1){
        echo $number. " is a squart Number";
      }else
        echo $number. " is not a squart number ";
      
