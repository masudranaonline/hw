<?php
    include('model/Db.php');
    include('model/Student.php');

    $obj = new Student();
    $Data = $obj->getAll();
    var_dump($Data);

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
                        <h5 class="card-title">Default Table</h5>

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