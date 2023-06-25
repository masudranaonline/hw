<?php
    include('model/Db.php');
    include('model/Student.php');

    $obj = new Student();
    $Data = $obj->getAll();

    


?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Student List</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Pages</li>
                <li class="breadcrumb-item active">Blank</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-13">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Student List
                        <?php
                                if(isset($_POST['edit_status'])){
                                    if($_REQUEST['edit_status'] == 1){
                            ?>
                            <script>
                                Swal.fire(
                                'success!',
                                'Student Data Entry successfull!',
                                'success'
                                )
                            </script>
                            <?php }} ?>
                        </h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Roll</th>
                                    <th scope="col">Number</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($Data as $Student){ ?>
                                <tr>
                                    <td scope="row"><?php echo $Student['id']; ?></td>
                                    <td><?php echo $Student['name']; ?></td>
                                    <td><?php echo $Student['roll']; ?></td>
                                    <td><?php echo $Student['number']; ?></td>
                                    <td><?php echo $Student['subject']; ?></td>
                                    <td><?php echo $Student['address']; ?></td>
                                    <td>
                                        <form action="index.php?page=student_edit" method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="id" value="<?php echo $Student['id']; ?>">
                                            <button type="submit" name="submit" value="Edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                                        </form>
                                    </td>
                                    <td>
                                          <form action="controller/student_controller.php" method="post" enctype="multipart/form-data">
                                          <input type="hidden" name="id" value="<?php echo $Student['id']; ?>">
                                            <button type="submit" name="submit" value="Delete" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                                          </form>
                                    </td>
                                </tr> 
                                <?php } ?>
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->