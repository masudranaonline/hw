<?php

echo "Write a program that will obtain the length and width of a rectangle from the user 
and compute its area and perimeter";

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";


function ractangle($length,$width){
    $area = $length * $width;
    echo "The area of the ractangle : ".$area;
    echo "<br>";
    echo "<br>";

    $perimeter = 2 * ($length + $width);
    echo "Perimeter of the ractangle : ".$perimeter;
}

ractangle(10,11);






