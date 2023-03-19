<?php

    $cars = array("Volvo"," BMW","Toyota");

    // sort($cars);
    rsort($cars);

    $carlength = count($cars);
    for($x = 0; $x < $carlength; $x++){
        echo $cars[$x];
        echo "<br>";
    }
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    $numbers = array(4,8,1,3,9,5,14);
    // sort($numbers);
    rsort($numbers);

    for($i = 0; $i <count($numbers); $i++){
        echo $numbers[$i];
        echo "<br>";

    }