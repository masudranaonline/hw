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
                        <h5 class="card-title">Horizontal Form</h5>
                        <form method="post" action="controller/studentController.php">
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Student Name</label>
                                <div class="col-sm-9">
                                    <input type="text" name="name" class="form-control" id="inputText">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Student Roll</label>
                                <div class="col-sm-9">
                                    <input type="number" name="roll" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3"  class="col-sm-3 col-form-label">Student Number</label>
                                <div class="col-sm-9">
                                    <input type="number" name="number" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Student Subject</label>
                                <div class="col-sm-9">
                                    <input type="text" name="subject" class="form-control" id="inputEmail">
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputEmail3" class="col-sm-3 col-form-label">Student Address</label>
                                <div class="col-sm-9">
                                    <textarea name="address" id="" cols="0" rows="5" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" value="Insert_Data" class="btn btn-primary">Submit</button>
                            </div>
                        </form><!-- End Horizontal Form -->
                    </div>
                </div>
            </div>
        </div>
    </section>

</main><!-- End #main -->