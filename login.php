<?php

include '../connection.php';
if (isset($_POST['login'])) {

  $emp_id =  $_POST['e_id'];
  $emp_pass  = $_POST['pass'];

  if ($emp_id  == '') {
    echo "<script>alert('Please enter the ID')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
    exit();
  }
  if ($emp_pass == '') {
    echo "<script>alert('Please enter the password')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
    exit();
  }

  $check_user = "SELECT * from employee where emp_id ='$emp_id' AND emp_pass='$emp_pass'";
  $query = mysqli_query($conn,$check_user );
  if(mysqli_num_rows($query)){

    session_start();
    $_SESSION['e_id'] = $emp_id;
    echo "<script>window.open('./welcome.php','_self')</script>";
  }
  else{
    echo "<script>alert('Employee ID or password is incorrect!')</script>";
    echo "<script>window.open('../index.php','_self')</script>";
  }
}else {
  echo "<script>window.open('../index.php','_self')</script>";
}

?>
