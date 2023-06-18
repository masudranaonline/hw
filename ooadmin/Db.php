<?php
    $Host = 'localhost';
    $Name = 'root';
    $Pass = '';
    $Db   = 'sms';

    $Connection = mysqli_connect($Host, $Name, $Pass, $Db);
    if(!$Connection){
        echo "DataBase connection error !";
    }

?>