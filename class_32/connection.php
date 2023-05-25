<?php


    $Host   =  'localhost';
    $Name   =  'root';
    $pass   =  '';
    $DB     =  'wd2';

    $connection = mysqli_connect($Host,$Name,$pass,$DB);


    if(!$connection)
        echo "Connection Failed !";








?>