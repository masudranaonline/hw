<?php


    for($counter = 1; $counter <= 100; $counter++)
    {
    $number = $counter;
    $palindrome = 0;

    while($number > 0)
    {
        $r = $number % 10;
        $palindrome = ($palindrome * 10) + $r;

        $number = (int)($number / 10);

        
    }



    echo $palindrome." is Palinreome number <br>";


}