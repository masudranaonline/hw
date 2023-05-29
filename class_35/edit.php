<?php 
    include('connection.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'edit'){
            $id = $_REQUEST['id'];

            $Query = "SELECT * FROM students WHERE id = $id LIMIT 1";
            $Result = mysqli_query($connection,$Query);
            $Data = mysqli_fetch_assoc($Result);
        }

        if($_REQUEST['action'] == 'update'){
            $id = $_REQUEST['id'];

            $name = $_POST['name'];
            $roll = $_POST['roll'];
            $num = $_POST['number'];
            $address = $_POST['address'];

             $Query = "UPDATE students SET name='$name', roll='$roll', num= '$num', address = '$address' WHERE id = $id ";

            $Result = mysqli_query($connection, $Query);
            if($Result){
                echo "Data updated successfully";
            }else{
                echo "something went rong";
            }
            $Query = "SELECT * FROM students WHERE id = $id LIMIT 1";
            $Result = mysqli_query($connection,$Query);
            $Data = mysqli_fetch_assoc($Result);
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>Edit students</title>
</head>
<body>

    <div class="mx-auto p-5 m-5 bg-info" style="width: 500px;">
        <form action="edit.php?action=update&id=<?php echo $Data['id']; ?>" method="post" enctype="multipart/form-data">
            <h3>Registration Form</h3>
            
            <label for="name">Name</label><br>
            <input type="text" name="name" class="form-control" value="<?php echo $Data['name']; ?>"><br>

            <label for="roll">Roll</label><br>
            <input type="number" name="roll" class="form-control " value="<?php echo $Data['roll']; ?>"><br>

            <label for="number">Number</label><br>
            <input type="number" name="number" class="form-control" value="<?php echo $Data['num']; ?>"><br>
 
            <label for="address">Address</label><br>
            <textarea name="address" id="" cols="50" rows="5">
                <?php echo $Data['address']; ?>
            </textarea><br>

            <input type="submit" name="submit" value="Update Student" class="btn btn-success btn-lg mb-1">
        </form>
    </div>
    
</body>
</html>