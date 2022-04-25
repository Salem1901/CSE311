<?php
session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  bottom: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background: #f1f1f1;
  color: black;
}

.main {
  padding: 16px;
  margin-bottom: 30px;
}
</style>
</head>
<body style="background-color: lightyellow;">

<div class="navbar">
  <a href="./Create.php" >Create</a>
  <a href="./Check_balance.php" >Check Balance</a>
  <a href="./Transaction.php" >Transaction</a>
  <a href="./Transaction_History.php" >Transaction History</a>
  <a href="./Customer_List.php" >Customer List</a>
  <a href="./account_details.php" >Account Details</a>
  <a href="./logout.php" >Logout</a>
</div>

<div class="main">
  <h1>Bank Account Management System</h1>
</div>

</body>
</html>
