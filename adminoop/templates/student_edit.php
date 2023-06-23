<?php
include('model/Db.php');
include('model/Student.php');



if (isset($_POST['submit'])) {
    if ($_POST['submit'] == 'Edit') {
        $id = $_POST['id'];

        $obj = new Student();
        $Data = $obj->getByPk($id);
        var_dump($Data);
    }
}


?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Blank Page</h1>
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
                        <h5 class="card-title">Student Edit</h5>
                        <form action="controller/student_controller.php" method="post" enctype="multipart/form-data">
                            <div class="row mb-3">
                                <input type="hidden" name="id" value="<?php echo $Data[0]['id']; ?>">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Student Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" value="<?php echo $Data[0]['name']; ?>" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Roll</label>
                                <div class="col-sm-9">
                                    <input type="number" value="<?php echo $Data[0]['roll']; ?>" name="roll" class="form-control" id="inputEmail">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Number</label>
                                <div class="col-sm-9">
                                    <input type="number" value="<?php echo $Data[0]['number']; ?>" name="number" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Subject</label>
                                <div class="col-sm-9">
                                    <input type="text" value="<?php echo $Data[0]['subject']; ?>" name="subject" class="form-control" id="inputPassword">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-3 col-form-label">Address</label>
                                <div class="col-sm-9">
                                    <textarea name="address" name="address" class="form-control" id="" cols="50" rows="5">
                                        <?php echo $Data[0]['subject']; ?>
                                    </textarea>
                                </div>
                            </div>

                            <div class="text-center">
                                <button type="submit" name="submit" value="Update_Data" class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->