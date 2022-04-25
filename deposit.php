<?php

session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}

include '../connection.php';
$a_id = $_POST['acno'];
$dep_amo = $_POST['deposit'];



$sql = " UPDATE account set balance=balance+$dep_amo where a_id=$a_id";
$update = mysqli_query($conn, $sql);
if($update){
  echo "<script>alert('Deposit Successful')</script>";
  echo "<script>window.open('./Transaction.php','_self')</script>";
}else{
  echo 'try again';
}

?>
