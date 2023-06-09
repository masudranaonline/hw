<?php
    include('../admin/db.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Delete'){
            $id = $_POST['id'];
            $Query = "DELETE FROM teachers WHERE id = $id";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
                echo "Data Deleted successfullt";
            }else{
                echo "something went rong";
            }
        }
    }


    $Query = "SELECT * FROM teachers";
    $Result = mysqli_query($Connection, $Query);



?>


    <main id="main" class="main">
        <div class="container ">
            <table class="table">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Education</th>
                        <th>Subjcer</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while($Rows = mysqli_fetch_assoc($Result)){ ?>
                        <tr>
                            <td><?php echo $Rows['id']; ?></td>
                            <td><?php echo $Rows['name']; ?></td>
                            <td><?php echo $Rows['number']; ?></td>
                            <td><?php echo $Rows['education']; ?></td>
                            <td><?php echo $Rows['subject']; ?></td>
                            <td><?php echo $Rows['address']; ?></td>
                            <td><a href="index.php?page=edit_teacher&action=edit&id=<?php echo $Rows['id']; ?>">Edit</a></td>
                            <td>
                                <form action="index.php?page=view_teacher" enctype="multipart/form-data" method="post">
                                    <input type="hidden" name="id" value="<?php echo $Rows['id']; ?>">
                                    <input type="submit" name="submit" value="Delete">
                                </form>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </main>
                

    

