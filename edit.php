<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/form-style.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
    <title>Student List</title>
</head>

<body>


<?php
$id = $_GET['id'];
  $conn= mysqli_connect('localhost', 'root', '', 'student_menegment');
  $sql = "SELECT * FROM student_information WHERE id= $id";
  $result= mysqli_query($conn, $sql);
  $stu_info = mysqli_fetch_assoc($result);
?>


<form  action="update.php?id=<?= $id; ?>" method="POST">

        <div class="container">
            <div class="add-student-form">
              <h2 class="text-center text-info">Edit Student Informetion</h2>
                <div class="mb-3">
                  <label class=" mb-2" for="">Enter Your Name</label>
                  <input type="text" name="name" class="form-control" value="<?php  echo  $stu_info['name']; ?>" method="POST" placeholder="Enter Your Name" aria-label="First name">
                </div>
                <div class="mb-3">
                  <label class=" mb-2" for="">Enter Your Roll</label>
                  <input type="text" name="roll" class="form-control" value="<?php  echo  $stu_info['roll']; ?>" method="POST" placeholder="Enter Your Roll" aria-label="Enter Your Roll">
                </div>
                <div class="mb-3">
                  <label class=" mb-2" for="">Enter Your Rage</label>
                  <input type="text" name="rage" class="form-control" value="<?php  echo  $stu_info['rage']; ?>" method="POST" placeholder="Enter Your Rage" aria-label="Enter Your Rage">
                </div>
                <div class="mb-3">
                  <label class=" mb-2" for="">Enter Your Department</label>
                  <input type="text" name="department" class="form-control" value="<?php  echo  $stu_info['department']; ?>" method="POST" placeholder="Enter Your Department" aria-label="Enter Your Department">
                </div>
                <div class="mb-3">
                  <label class=" mb-2" for="">Enter Your Contect</label>
                  <input type="text" name="phone" class="form-control" value="<?php  echo  $stu_info['phone']; ?>" method="POST" placeholder="Enter Your Contect" aria-label="Enter Your Contect">
                </div>
                <div class="sub-button">
                <button type="submit" class="btn btn-primary">Submit-Now</button>
              </div>
            </div>
        </div>
    </form>





    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.6.0.min.js"></script>
</body>

</html>