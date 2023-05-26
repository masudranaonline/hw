<?php
    include('connection.php');

    $Query = "SELECT * FROM students";
    $result = mysqli_query($connection,$Query);

    // while($data = mysqli_fetch_assoc($result)){
    //     echo $data['name']. "<br>";
    // }
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Student List</title>
</head>
<body>

        <a href="index.php">Home</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Roll</th>
                    <th>Number</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while($Row = mysqli_fetch_assoc($result)){ ?>
                    <tr>
                        <td><?php echo $Row['id']; ?></td>
                        <td><?php echo $Row['name']; ?></td>
                        <td><?php echo $Row['roll']; ?></td>
                        <td><?php echo $Row['num']; ?></td>
                        <td><?php echo $Row['address']; ?></td>
                        <td><button>Edit</button></td>
                        <td><button>Delete</button></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    
</body>
</html>