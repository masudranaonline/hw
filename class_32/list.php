<?php
    include('connection.php');

    $Query ="SELECT * FROM students";
    $Result = mysqli_query($connection,$Query);
    $Result = mysqli_fetch_array($Result);

    var_dump($Result);
?>