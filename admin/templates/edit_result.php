<?php
    include('../admin/db.php');

    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'edit'){
            $id = $_REQUEST['id'];

            $Query = "SELECT * FROM result WHERE id = $id";
            $Result = mysqli_query($Connection, $Query);
            $Data = mysqli_fetch_assoc($Result);
        }

        if($_REQUEST['action'] == 'update'){
            $id = $_REQUEST['id'];

            $name      = $_POST['name'];
            $roll      = $_POST['roll'];
            $subject   = $_POST['subject'];
            $cgpa      = $_POST['cgpa'];

            $Query = "UPDATE result SET name = '$name', roll = '$roll', subject = '$subject', cgpa = '$cgpa' WHERE id = $id";
            $Result = mysqli_query($Connection, $Query);
            if($Result){
                echo "Data Updated successfully!";
            }else{
                echo "something went rong";
            }
            $Query = "SELECT * FROM result WHERE id = $id";
            $Result = mysqli_query($Connection, $Query);
            $Data = mysqli_fetch_assoc($Result);
           
        }
    }


?>


<main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <!-- <img src="assets/img/logo.png" alt=""> -->
                  <span class="d-none d-lg-block"></span>
                </a>
              </div>

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Insert Students Result Data</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="index.php?page=edit_result&action=update&id=<?php echo $Data['id']; ?>" enctype="multipart/form-data" novalidate>
                    <div class="col-12">
                      <label for="yourName" class="form-label">Student Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="<?php echo $Data['name']; ?>" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourRoll" class="form-label">Student Roll</label>
                      <input type="number" name="roll" class="form-control" id="yourName" value="<?php echo $Data['roll']; ?>" required>
                      <div class="invalid-feedback">Please, enter your Roll</div>
                    </div>

                    

                    <div class="col-12">
                      <label for="yourNumber" class="form-label">Subject</label>
                      <input type="text" name="subject" class="form-control" id="yourSubject" value="<?php echo $Data['subject']; ?>" required>
                      <div class="invalid-feedback">Please enter a valid subject</div>
                    </div>

                    <div class="col-12">
                      <label for="yourCGPA" class="form-label">CGPA</label>
                      <input type="double" name="cgpa" class="form-control" id="yourCGPA" value="<?php echo $Data['cgpa']; ?>" required>
                      <div class="invalid-feedback">Please enter a valid Number</div>
                    </div>

                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" value="Data" type="submit">Submit Data</button>
                    </div>
                    <!-- <div class="col-12">
                      <p class="small mb-0">Already have an account? <a href="login.php">Log in</a></p>
                    </div> -->
                  </form>

                </div>
              </div>

              <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
    
