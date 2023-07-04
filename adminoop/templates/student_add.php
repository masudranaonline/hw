<?php
// error_reporting(0);

?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Add new Student</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Student</li>
        <li class="breadcrumb-item active">Add</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <div class="row">
      <div class="col-lg-8 offset-lg-2">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">
              <?php
              if (isset($_REQUEST['status'])) {
                if ($_REQUEST['status'] == 1) {
              ?>
                  <script>
                    Swal.fire(
                      'success!',
                      'Student Data Entry successfull!',
                      'success'
                    )
                  </script>
                  <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    Student Entry successfully!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                <?php
                }
                if ($_REQUEST['status'] == 0) {
                ?>
                   <script>
                    Swal.fire(
                      'error!',
                      'Something wrong!',
                      'error'
                    )
                  </script>

                  <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    something wrong!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
              <?php
                }
              }
              ?>
            </h5>
            <form action="controller/student_controller.php" method="post" enctype="multipart/form-data">
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Student Name</label>
                <div class="col-sm-9">
                  <input type="text" name="name" class="form-control" id="inputText">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-3 col-form-label">Roll</label>
                <div class="col-sm-9">
                  <input type="number" name="roll" class="form-control" id="inputEmail">
                </div>
              </div>

              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Number</label>
                <div class="col-sm-9">
                  <input type="number" name="number" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Subject</label>
                <div class="col-sm-9">
                  <input type="text" name="subject" class="form-control" id="inputPassword">
                </div>
              </div>
              <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-3 col-form-label">Address</label>
                <div class="col-sm-9">
                  <textarea name="address" name="address" class="form-control" id="" cols="50" rows="5"></textarea>
                </div>
              </div>

              <div class="text-center">
                <button type="submit" name="submit" value="Submit_Data" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->