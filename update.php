<?php
$id = $_GET['id'];
$name = $_POST ['name'];
$roll = $_POST ['roll'];
$rage = $_POST ['rage'];
$department = $_POST ['department'];
$phone = $_POST ['phone'];

  $conn= mysqli_connect('localhost', 'root', '', 'student_menegment');
  $upddate = "UPDATE `student_information` SET `name`='$name',`roll`='$roll',`rage`='$rage',`department`='$department',`phone`='$phone' WHERE id= '$id'";
   if (mysqli_query($conn, $upddate)){

    header("location: index.php");

  }
  else{
      echo 'Error';
  }
?>