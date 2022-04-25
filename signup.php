<?php

include '../connection.php';
if (isset($_POST['register'])) {

  $user_id = $_POST['e_id'];
  $user_name  =  $_POST['e_name'];
  $user_pass  = $_POST['pass'];
  $user_b_id  = $_POST['b_id'];


  if ($user_id == '') {
    echo "<script>alert('Please enter the ID')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }
  if ($user_name == '') {
    echo "<script>alert('Please enter the name')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }
  if ($user_pass == '') {
    echo "<script>alert('Please enter the password')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }
  if ($user_b_id == '') {
    echo "<script>alert('Please enter the Branch ID')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }
  if ($user_b_id > 4) {
    echo "<script>alert('Please enter the correct Branch ID')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }

  $check_id_query = " SELECT * from employee where emp_id ='$user_id'";
  $run_query =  mysqli_query($conn, $check_id_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<script>alert('ID $user_id already exist in our database, please try another one!')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }

  $insert_user = " INSERT into employee (emp_id, emp_name, emp_pass,b_id)
  value ('$user_id', '$user_name', '$user_pass', '$user_b_id')";

   if(mysqli_query($conn, $insert_user)){
     echo "<script>window.open('../index.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./registration.php','_self')</script>";
}

?>
