<?php


    $a = 5;
    $b = 55;
    $c = 8;

    $d = ($b *$b) - (4 * $a * $c);

    if($d < 0){
        echo "Roors are imaginary!";
    }elseif( $d == 0 ){
        $x = (-$b + sqrt($d)) / 2 * $a;
        echo "First root ".$x;
    }else {
        $x1 = (-$b + sqrt($d)) / 2 * $a;
        $x2 = (-$b - sqrt($d)) / 2 * $a;

        echo "First root ".$x1;
         echo "<br>";

        echo "First root ".$x2;


    }