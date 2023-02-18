<?php
    for($i = 1; $i <= 100; $i++)
    {
        $num = $i;
        $start = 2;
        $limit = $num - 1;
        $step = 1;
        $Status = 1;
        for($counter = $start; $counter <= $limit; $counter += $step)
        {
            if($num % $counter == 0)
            {
                $Status = 0;
                break;
            }
            
        }
        if($Status == 1)
            echo $num ." is prime number <br>" ;
    }
