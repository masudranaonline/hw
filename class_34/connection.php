<?php

    $Host = 'localhost';
    $Name = 'root';
    $Pass = '';
    $DB   = 'wd2';

    $connection = mysqli_connect($Host, $Name, $Pass, $DB);

    if(!$connection)
        echo "Connection Failed";


?>