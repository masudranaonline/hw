<?php
    // echo "<pre>";
    // for ($i = 1; $i < 8; $i++) {
    //     for ($j = $i; $j < 8; $j++)
    //         echo "&nbsp;&nbsp;";
    //     for ($j = 2 * $i - 1; $j > 0; $j--)
    //         echo ("&nbsp;*");
    //     echo "<br>";
    // }

    for($i = 0; $i <= 6; $i++){  
        for($k = 5; $k >= $i; $k--){  
            echo "&nbsp;&nbsp;";  
        }  
        for($j = 1;$j <= $i; $j++){  
            echo "&nbsp;* ";  
        }  
        echo "<br>";  
        }	  

 
    