<?php

    echo "Write a program to compute the roots of a quadratic equation ax
    2
    +bx+c=0 use 
    following conditions.";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    $a = 11;
    $b = 25;
    $c = 3;

    $d = $b * $b - (4 * $a * $c);


    if($d == 0){
        $x1 = -$b / (2.0 * $a);
        $x2 = -$b / (2.0 * $a);

        echo "First, root are : ".$x1;
        echo "<br>";
        echo "Second root are : ".$x2;
    }elseif($d > 0){
        $x1 = (-$b + sqrt($d)) / (2 * $a);
        $x2 = (-$b - sqrt($d)) / (2 * $a);
        echo "First,,, root are : ".$x1;
        echo "<br>";
        echo "Second root are : ".$x2;
    }else{
        echo "Root are not real!";
    }