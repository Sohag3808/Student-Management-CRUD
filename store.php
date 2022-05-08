<?php

$name = $_POST ['name'];
$roll = $_POST ['roll'];
$rage = $_POST ['rage'];
$department = $_POST ['department'];
$phone = $_POST ['phone'];

  $conn= mysqli_connect('localhost', 'root', '', 'student_menegment');
  $innesrt= "INSERT INTO student_information (`name`, `roll`, `rage`, `department`, `phone`) VALUES ('$name','$roll','$rage', '$department','$phone')";
  if (mysqli_query($conn, $innesrt)){

    header("location: index.php");

  }
  else{
      echo 'Error';
  }
?>