<?php
    include('../admin/db.php');
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action'] == 'edit'){
             $id = $_REQUEST['id'];

             $Query = "SELECT * FROM students WHERE id = $id";
             $Result = mysqli_query($Connection, $Query);
             $Data = mysqli_fetch_assoc($Result);
        }
        
            if($_REQUEST['action'] == 'update'){
                $id = $_REQUEST['id'];

                $name = $_POST['name'];
                $roll = $_POST['roll'];
                $number = $_POST['number'];
                $subject = $_POST['subject'];
                $address = $_POST['address'];

                $Query = "UPDATE students SET name = '$name', roll = '$roll', number = '$number', subject = '$subject', address = '$address' WHERE id = $id";
                $Result = mysqli_query($Connection, $Query);
                if($Result){
                    echo "Data updated successfully";
                }else{
                    echo "something went rong";
                }
                $Query = "SELECT * FROM students WHERE id = $id";
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
                    <h5 class="card-title text-center pb-0 fs-4">Update Students Data</h5>
                    <p class="text-center small">Enter your personal details to create account</p>
                  </div>

                  <form class="row g-3 needs-validation" method="post" action="index.php?page=std_edit&action=update&id=<?php echo $Data['id']; ?>" enctype="multipart/form-data" novalidate>
                  
                  <div class="col-12">
                      <label for="yourName" class="form-label">Your Name</label>
                      <input type="text" name="name" class="form-control" id="yourName" value="<?php echo $Data['name']; ?>" required>
                      <div class="invalid-feedback">Please, enter your name!</div>
                    </div>
                    <div class="col-12">
                      <label for="yourRoll" class="form-label">Your Roll</label>
                      <input type="number" name="roll" class="form-control" value="<?php echo $Data['roll']; ?>" id="yourName" required>
                      <div class="invalid-feedback">Please, enter your Roll</div>
                    </div>

                    <div class="col-12">
                      <label for="yourNumber" class="form-label">Your Number</label>
                      <input type="number" name="number" class="form-control" value="<?php echo $Data['number']; ?>" id="yourEmail" required>
                      <div class="invalid-feedback">Please enter a valid Number</div>
                    </div>

                    <div class="col-12">
                      <label for="yourNumber" class="form-label">Subject</label>
                      <input type="text" name="subject" class="form-control" value="<?php echo $Data['subject'] ?>" id="yourSubject" required>
                      <div class="invalid-feedback">Please enter a valid subject</div>
                    </div>

                    <div class="col-12">
                      <label for="yourNumber" class="form-label">Your Address</label>
                      <textarea class="form-control" name="address" id="" cols="" rows="" required>
                        <?php echo $Data['address']; ?>
                      </textarea>
                      <div class="invalid-feedback">Please enter a valid Address</div>
                    </div>

                    
                    <div class="col-12">
                      <button class="btn btn-primary w-100" name="submit" value="Update data" type="submit">Update Students</button>
                    </div>
                    <div class="col-12">
                      <p class="small mb-0"> <a href="index.php?page=viewstudents">view students</a></p>
                    </div>
                  </form>

                </div>
              </div>

         
              
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->
    
