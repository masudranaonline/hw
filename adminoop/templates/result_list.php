<?php
  include('model/Db.php');
  include('model/Result.php');

  $obj = new Result();
  $Data = $obj->getAll();


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
    <div class="col-lg-12">

      <div class="card">
      <div class="card-body">
              <h5 class="card-title">Table with stripped rows</h5>

              <!-- Table with stripped rows -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Roll</th>
                    <th scope="col">Subject</th>
                    <th scope="col">CGPA</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach($Data as $Result){ ?>
                    <tr>
                      <td scope="row"><?php echo $Result['id']; ?></td>
                      <td><?php echo $Result['name']; ?></td>
                      <td><?php echo $Result['roll']; ?></td>
                      <td><?php echo $Result['subject']; ?></td>
                      <td><?php echo $Result['cgpa']; ?></td>
                      <td>
                        <form action="index.php?page=result_edit" enctype="multipart/form-data" method="post">
                          <input type="hidden" name="id" value="<?php echo $Result['id']; ?>">
                          <button type="submit" name="submit" value="Edit" class="btn btn-warning"><i class="bi bi-pencil-square"></i></button>
                        </form>
                      </td>
                      <td>
                        <form action="controller/result_controller.php" enctype="multipart/form-data" method="post">
                          <input type="hidden" name="id" value="<?php echo $Result['id']; ?>">
                          <button type="submit" name="submit" value="Delete" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                        </form>
                      </td>
                  </tr>
                  <?php } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
      </div>
    </div>
  </div>
</section>

</main><!-- End #main -->
