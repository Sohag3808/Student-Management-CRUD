<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Crimson+Pro">
  <title>Student List</title>
</head>

<body>

<?php
  $conn= mysqli_connect('localhost', 'root', '', 'student_menegment');
  $sql= "SELECT * FROM student_information";
  $result= mysqli_query($conn, $sql);
?>

  <!---------------Header Section------------>
  <div class="header-section">
    <nav class="navbar head_nav navbar-dark bg-info  navbar-expand-sm">
      <div class="container">
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ul_padd ms-auto mt-2 mt-lg-0 navcss">
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Student List</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Portfolio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-----------Student List----------->
  <div class="student-section">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <div class="add-button-section">
            <a href="form.php"class="btn btn-info add-button"> Add New Student</a>
        </div>
        </div>
        <div class=" col-md-9">
              <h2 class="text-center text-info">Student Management</h2>
              <table class="table table-striped">
                <tr class="text-center bg-info table-heding">
                  <th>Count</th>
                  <th>Name</th>
                  <th>Roll</th>
                  <th>Rage</th>
                  <th>Department</th>
                  <th>Contact</th>
                  <th>Action</th>
                </tr>

                <?php while($row =mysqli_fetch_assoc($result)) { ?>
                  
                <tr class="text-center">
                  <td><?php echo $row ['id']?></td>
                  <td><?php echo $row ['name'];?></td>
                  <td><?php echo $row ['roll'];?></td>
                  <td><?php echo $row ['rage'];?></td>
                  <td><?php echo $row ['department'];?></td>
                  <td><?php echo $row ['phone'];?></td>
                  <td>
                    <a class="btn btn-primary action-button" href="view.php?id=<?php echo  $row["id"]; ?>">View</a>
                    <a class="btn btn-warning action-button" href="edit.php?id=<?php echo  $row["id"]; ?>">Edit</a>
                    <a class="btn btn-danger action-button" href="delete.php?id=<?php echo  $row["id"]; ?>">Delete</a>
                  </td>
                </tr>
                <?php } ?>

              </table>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>