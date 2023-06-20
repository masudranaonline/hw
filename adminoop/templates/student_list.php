<?php
    include('../model/Db.php');
    include('./model/Student.php');

    $Student = new Student();
    $Student->getAll();

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
    <table>
        <thead>
            <th>Id</th>
            <th>Name</th>
            <th>Roll</th>
            <th>Number</th>
            <th>Subject</th>
            <th>Address</th>
        </thead>
        <tbody>
            <?php while($Data = mysqli_fetch_assoc($Result )){ ?>
                <tr>
                    <td><?php $Data['id']; ?></td>
                    <td><?php $Data['name']; ?></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</section>

</main><!-- End #main -->
