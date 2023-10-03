<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student section</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>


    <div class="student">
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 box shadow">
                  <h1 class="heading">Add Student Data</h1>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="classRoll">Classs Roll</label>
                        <input type="text" class="form-control" id="classRoll" placeholder="Enter your Class Roll">
                    </div>
                    <div class="form-group">
                        <label for="boardRoll">Board Roll</label>
                        <input type="text" class="form-control" id="boardRoll" placeholder="Enter your Board Roll">
                    </div>
                    <div class="form-group">
                        <label for="phoneNo">Phone</label>
                        <input type="text" class="form-control" id="phoneNo" placeholder="Enter your Phone No">
                    </div>
                    <div class="form-group">
                        <label for="name">Address</label><br>
                        <textarea name="" class="form-control" id="address" placeholder="Enter your Address" cols="75" rows="5"></textarea>
                    </div>
                   <div class="button">
                         <button onclick="addStudent()" class="btn btn-primary" id="btnAdd">Sbumit student Data</button>
                   </div>
                </div>
            </div>
        </div>
    </div>


   <div class="allStudent">
        <div class="container">
            <table id="studentList" class="table table-striped">
                <thead style="background-color: chartreuse;">
                    <tr>
                        <th>Serial No</th>
                        <th>Name</th>
                        <th>Class Roll</th>
                        <th>Board Roll</th>
                        <th>Phone No</th>
                        <th>Address</th>
                    </tr>
                </thead>

                <tbody id="studentList"></tbody>

            </table>
        </div>
   </div>


    
<script src="script.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js"></script>
</body>
</html>