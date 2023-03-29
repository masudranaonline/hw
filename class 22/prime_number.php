<?php
    $num = 23;
    $status = 0;
   for($i = 2; $i < $num; $i++){
    if($num % $i == 0){
        $status++;  
        break;
    }
   }

   if($status == 0)
        echo $num. " is a prime number";
   else
        echo $num ." is not a prime number";