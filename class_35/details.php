<?php
    include('connection.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'details'){
            $id = $_REQUEST['id'];

            $Query ="SELECT * FROM students WHERE id = $id LIMIT 1";
            $Result = mysqli_query($connection, $Query);
            $Data = mysqli_fetch_assoc($Result);
        }
    }
    if(isset($Data)){

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details</title>
</head>
<body>

    <table>
        <thead>
            <tr>
                <th>Attribute</th>
                <th>Values</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id : </td>
                <td><?php echo $Data['id']; ?></td>
            </tr>
            <tr>
                <td>Name : </td>
                <td><?php echo $Data['name']; ?></td>
            </tr>
            <tr>
                <td>Roll : </td>
                <td><?php echo $Data['roll']; ?></td>
            </tr>
            <tr>
                <td>Number : </td>
                <td><?php echo $Data['num']; ?></td>
            </tr>
            <tr>
                <td>Address : </td>
                <td><?php echo $Data['address']; ?></td>
            </tr>
        </tbody>
    </table>
    
</body>
</html>

<?php } ?>