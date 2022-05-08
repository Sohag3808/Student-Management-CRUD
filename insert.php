<!DOCTYPE html>
<html lang="en">

<head>
    <title>crud-project</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="" href="css/style.css">
    <link rel="stylesheet" type="" href="css/bootstrap.min.css">
</head>

<body>

<?php
  $conn= mysqli_connect('localhost', 'root', '', 'student-list');
  $sql= "SELECT * FROM `student-info`";
  $result= mysqli_query($conn, $sql);
?>


    <div class="all-item">
        <div class="container">

            <h1 class="text-info text-center pt-3"> Student Manage</h1>
            <div class="row mt-5">
                <div class="col-md-3">
                    <a href="#" class="btn btn-primary " type="submit">View Student List</a>
                </div>
                <div class="col-md-9">


                 <form action="stor.php" method="POST">
                    <div>
                        <label class="form-label">Name</label>
                        <input class="form-control " name="name" >
                    </div>
                    <div>
                        <label class="form-label">Roll</label>
                        <input class="form-control " name="roll">
                    </div>
                    <div>
                        <label class="form-label">Phone</label>
                        <input class="form-control " name="phone" >
                    </div>
                    <div>
                        <label class="form-label">Email</label>
                        <input class="form-control " name="email" >
                    </div>
                    <div>
                        <label class="form-label">Address</label>
                        
                        <input  class="form-control" name="address" >
                    </div>

                    <div class=" mt-3">
                        <button type="submit" class="btn btn-primary ">Submit</button>
                    </div>
                    </form>

                </div>
            </div>



        </div>
    </div>






    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>