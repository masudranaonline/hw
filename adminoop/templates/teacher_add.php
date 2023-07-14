
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
    <div class="col-lg-8 offset-lg-2">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <?php
                  if(isset($_REQUEST['status'])){
                    if($_REQUEST['status'] == 1){
                      ?>
                      <script>
                          Swal.fire(
                            'Success!',
                            'Teacher Data Add Successfully!',
                            'success'
                          )
                      </script>
                    <?php
                    }
                    if($_REQUEST['status'] == 0){
                      ?>
                      <script>
                          Swal.fire(
                            'Success!',
                            'Something went rong!',
                            'error'
                          )
                      </script>
                      <?php
                    }
                  }
                ?>
              </h5>

              <!-- Vertical Form -->
              <form action="controller/teacher_controller.php" method="post" enctype="multipart/form-data" class="row g-3">
                <div class="col-12">
                  <label for="inputNanme4" class="form-label">Teacher Name</label>
                  <input type="text" name="name" class="form-control" id="inputNanme4">
                </div>
                <div class="col-12">
                  <label for="inputEmail4" class="form-label">Number</label>
                  <input type="number" name="number" class="form-control" id="inputEmail4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Education</label>
                  <input type="text" name="education" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputPassword4" class="form-label">Subject</label>
                  <input type="text" name="subject" class="form-control" id="inputPassword4">
                </div>
                <div class="col-12">
                  <label for="inputAddress" class="form-label">Address</label>
                  <textarea name="address" id="" cols="30" rows="5" class="form-control"></textarea>
                </div>
                <div class="text-center">
                  <button type="submit" name="submit" value="Submit_Data" class="btn btn-primary">Submit</button>
                </div>
              </form><!-- Vertical Form -->

            </div>
          </div>
    </div>

  </div>
</section>

</main><!-- End #main -->
