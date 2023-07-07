<?php
  include('model/Db.php');
  include('model/Teacher.php');

  $obj = new Teacher();
  $Data = $obj->getAll();


?>
<main id="main" class="main">

<div class="pagetitle">
  <h1>View Teacher</h1>
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
    <div class="col-lg-12">
    <div class="card">
            <div class="card-body">
              <h5 class="card-title">Teacher Table</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Teacher Name</th>
                    <th scope="col">Number</th>
                    <th scope="col">Education</th>
                    <th scope="col">Subject</th>
                    <th scope="col">Address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($Data as $Teacher){ ?>
                    <tr>
                    <td><?php echo $Teacher['id']; ?></td>
                    <td><?php echo $Teacher['name']; ?></td>
                    <td><?php echo $Teacher['number']; ?></td>
                    <td><?php echo $Teacher['education']; ?></td>
                    <td><?php echo $Teacher['subject']; ?></td>
                    <td><?php echo $Teacher['address']; ?></td>
                    <td>
                      <form action="index.php?page=teacher_edit" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $Teacher['id']; ?>">
                        <button type="submit" name="submit" value="Edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                      </form>
                    </td>
                    <td>
                      <form action="controller/teacher_controller.php" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?php echo $Teacher['id']; ?>">
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
