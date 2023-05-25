<?php
    include('connection.php');

    if(isset($_POST['submit']))
    {
        $name    = $_POST['name'];
        $roll    = $_POST['roll'];
        $number  = $_POST['number'];
        $address = $_POST['address'];

        $Query = "INSERT INTO students(name, roll, num, address) VALUES('$name', '$roll', '$number', '$address')";

        $result = mysqli_query($connection, $Query);
        if($result)
            echo "Data Submit successfully";
        else
            echo "Something Error !";
        
        
    }

    





?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Registration Form</title>
</head>
<body>

    <a href="list.php">Student List</a>
    <div class="mx-auto p-5 m-5 bg-info" style="width: 500px;">
        <form action="index.php" method="post" enctype="multipart/form-data">
            <h3>Registration Form</h3>
            <label for="name">Name</label><br>
            <input type="text" name="name" class="form-control"><br>

            <label for="roll">Roll</label><br>
            <input type="number" name="roll" class="form-control"><br>

            <label for="number">Number</label><br>
            <input type="number" name="number" class="form-control"><br>
 
            <label for="address">Address</label><br>
            <textarea name="address" id="" cols="50" rows="5"></textarea><br>

            <input type="submit" name="submit" value="Register Now" class="btn btn-success btn-lg mb-1">
        </form>
    </div>
    
</body>
</html>