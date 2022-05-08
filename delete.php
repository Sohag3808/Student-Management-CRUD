<?php
$id = $_GET ['id'];
  $conn= mysqli_connect('localhost', 'root', '', 'student_menegment');
  $sql= "DELETE  FROM  student_information WHERE id ='$id'";
  $result= mysqli_query($conn, $sql);

  if ($result) {
    header('location: index.php');
}
else{
    echo "Error";
}
?>