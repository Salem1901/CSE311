<?php
session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}

include '../connection.php';
$user_id = $_GET['id'];
$sql = " DELETE from account where a_id='$user_id'";
$delete = mysqli_query($conn, $sql);
if ($delete) {
  echo "<script>window.open('./account_details.php?del=id has been deleted','_self')</script>";
}

?>
