<?php
    include('model/Db.php');
    include('model/Result.php');

    if(isset($_POST['submit'])){
        if($_POST['submit'] == 'Edit'){
            $id = $_POST['id'];

            $obj = new Result();
            $Data = $obj->getByPk($id);
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
    <div class="col-lg-8 offset-sm-2">

      <div class="card">
      <div class="card-body">
              <h5 class="card-title">Vertical Form</h5>

              <!-- Vertical Form -->
              <form action="controller/result_controller.php" method="post" enctype="multipart/form-data"  class="row g-3">
                <div class="col-12">
                    <input type="hidden" name="id" value="<?php echo $Data[0]['id']; ?>">
                  <label for="inputNanme4" class="form-label">Your Name</label>
                  <input type="text" name="name" value="<?php echo $Data[0]['name']; ?>" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Roll</label>
                  <input type="number" value="<?php echo $Data[0]['roll']; ?>" name="roll" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Subject</label>
                  <input type="text" name="subject" value="<?php echo $Data[0]['subject']; ?>" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">CGPA</label>
                  <input type="number" name="cgpa" value="<?php echo $Data[0]['cgpa']; ?>" class="form-control" id="inputAddress">
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Update_Result" class="btn btn-primary">Update</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
      </div>

    </div>

  </div>
</section>

</main><!-- End #main -->
