<?php

session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}

include '../connection.php';
$actitle = $_POST['actitle'];
$actype = $_POST['actype'];
$c_date = $_POST['c_date'];
$user_id = $_GET['id'];

if ($actitle == '') {
  echo "<script>alert('Please enter the account Title')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}
if ($actype == '') {
  echo "<script>alert('Please enter the account type')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

if ($c_date == '') {
  echo "<script>alert('Please enter the close date')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

$sql = " UPDATE account set a_name='$actitle',a_type='$actype',close_date='$c_date' where a_id='$user_id'";
$update = mysqli_query($conn, $sql);
if($update){
  header("Location: ./account_details.php");
}else{
  echo 'try again';
}

?>
