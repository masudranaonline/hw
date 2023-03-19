<?php
     $cars = array("Volvo","Toyota","BMW");

     echo "i like ".$cars[0].",".$cars[1]." and " .$cars[2];

     echo "<br>";
     echo "<br>";
     echo "<br>";

     $length = count($cars);

     for($i = 0; $i < $length; $i++){
        echo $cars[$i];
     echo "<br>";
     }