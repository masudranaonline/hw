<?php
    include('connection.php');

    if(isset($_REQUEST['action'])){
        $id = $_REQUEST['id'];

        $Query = "DELETE FROM students WHERE id = $id";
        $Result = mysqli_query($connection,$Query);

        if($Result){
            echo "Data Deleted successfully";
        }else{
            echo "something went rong";
        }
    }

    $Query = "SELECT * FROM students";
    $Result = mysqli_query($connection,$Query);

    


    // while($Data = mysqli_fetch_assoc($Result)){
    //     echo $Data['name']. "<br>";
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

        <div class="container">
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
                    <?php while($Data = mysqli_fetch_assoc($Result)){ ?>
                        <tr>
                            <td><?php echo $Data['id'] ?></td>
                            <td><?php echo $Data['name']; ?></td>
                            <td><?php echo $Data['roll']; ?></td>
                            <td><?php echo $Data['num']; ?></td>
                            <td><?php echo $Data['address']; ?></td>
                            <td><button>Edit</button></td>
                            <td><a href="list.php?action=delete&id=<?php echo $Data['id'] ?>">Delete</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    
</body>
</html>