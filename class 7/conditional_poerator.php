<?php

    $n1 = 1015;
    $n2 = 550;
    $n3 = 55;
    $n4 = 251;

    //Using the conditional operator find out the maximum of three numbers.

    echo ($n1 > $n2) ? ($n1 > $n3 ? $n1:$n2) : ($n2 > $n3 ? $n2:$n3);
    echo "<br>";

    // Using the conditional operator find out the maximum of 4 numbers.


    echo ($n1 > $n2) ? ($n1 > $n3 ? ($n1 > $n4 ? $n1:$n4): ($n3 > $n2 ? ($n3 > $n4 ? $n3:$n4):$n2 )):($n2 > $n3 ? ($n2 > $n4 ? $n2:$n4):$n3);