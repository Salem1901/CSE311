<?php

session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}

include '../connection.php';
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$nation = $_POST['nation'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$occ = $_POST['occ'];
$nom = $_POST['nom'];
$user_id = $_GET['id'];

if ($fname == '') {
  echo "<script>alert('Please enter the first name')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}
if ($lname == '') {
  echo "<script>alert('Please enter the last name')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

if ($DOB == '') {
  echo "<script>alert('Please enter the Date of Birth')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

if ($nation == '') {
  echo "<script>alert('Please enter the Nationality')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

if ($email == '') {
  echo "<script>alert('Please enter the email')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

if ($occ == '') {
  echo "<script>alert('Please enter the occupation')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

if ($nom == '') {
  echo "<script>alert('Please enter the Nominee')</script>";
  echo "<script>window.open('./Create.php','_self')</script>";
  exit();
}

$sql = " UPDATE customer set Fname='$fname',lname='$lname',DOB='$dob',nationality='$nation',email='$email',occupation='$occ',nominee='$nom' where NID='$user_id'";
$update = mysqli_query($conn, $sql);
if($update){
  header("Location: ./Customer_List.php");
}else{
  echo 'try again';
}

?>
