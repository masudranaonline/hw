<?php

    $age = array("Masud" => 20, "Rana" => 22, "Ariful"=> 25);

    echo "Masud is ".$age['Masud'] ." years old and Ariful ".$age['Ariful'];

    echo "<br>";
    echo "<br>";
    echo "<br>";


    foreach($age as $i => $i_value){
        echo "Key = ".$i . ", Value = ".$i_value;
        echo "<br>";
    }