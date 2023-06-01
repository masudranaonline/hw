<?php
    session_start();
    
    if (isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == TRUE){
        echo "You are Logged In";
    }else{
        echo "You are not Logged In!";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="logout.php">
        <input type="submit" value="Logout">
    </form>
    
</body>
</html>