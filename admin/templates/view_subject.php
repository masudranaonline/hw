<?php
    include('./db.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Delete'){
            $id = $_POST['id'];

            $Query = "DELETE FROM subject WHERE id = $id";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
                echo "Data Deleted successfully";
            }else{
                echo "something went rong";
            }
        }
    }


    $Query = "SELECT * FROM subject";
    $Result = mysqli_query($Connection, $Query);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <main class="main" id="main">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Subject Name</th>
                <th>Subject Code</th>
                <th>Depertment</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php while($Rows = mysqli_fetch_assoc($Result)){ ?>
                <tr>
                    <td><?php echo $Rows['id'] ?></td>
                    <td><?php echo $Rows['sub_name']; ?></td>
                    <td><?php echo $Rows['sub_code']; ?></td>
                    <td><?php echo $Rows['depertment']; ?></td>
                    <td><a href="index.php?page=edit_subject&action=edit&id=<?php echo $Rows['id']; ?>">Edit</a></td>
                    <td>
                        <form action="index.php?page=view_subject" enctype="multipart/form-data" method="post">
                            <input type="hidden" name="id" value="<?php echo $Rows['id']; ?> ">
                            <input type="submit" value="Delete" name="submit">
                        </form>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

    </main>

    
</body>
</html>