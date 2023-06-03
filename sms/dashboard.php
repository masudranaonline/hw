<?php
    session_start();
    if(isset($_SESSION['LoggedIn']) && $_SESSION['LoggedIn'] == TRUE){
        echo "You are Logged In";
    }else{
        header('Location:login.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Dashboard</title>
</head>
<body>
    <a href="create.php" class="p-5">Create student</a>
    <a href="view.php">view page</a>
    <form action="logout.php" method="post">
        <input type="submit" value="Logout">
    </form>    
</body>
</html>