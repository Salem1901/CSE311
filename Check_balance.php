<?php
session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
 body {font-family: Arial, Helvetica, sans-serif;
   background-color: lightyellow;
 }
 form {border: 3px solid #f1f1f1;}

 input[type=text], input[type=password] {
   width: 100%;
   padding: 12px 20px;
   margin: 8px 0;
   display: inline-block;
   border: 1px solid #ccc;
   box-sizing: border-box;
 }

 button {
   background-color: #04AA6D;
   color: white;
   padding: 14px 20px;
   margin: 8px 0;
   border: none;
   cursor: pointer;
   width: 100%;
 }

 button:hover {
   opacity: 0.8;
 }

 .container {
 padding: 16px;
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
<body>

<h2>Check Balance</h2>

<form action="Check_balance.html" method="post">
 <div >
   <label for="acno"><b>Account Number</b></label>
   <input type="text" placeholder="Enter Account Number:" name="acno"  >
   <button type="submit" name="Check" value="Check">Check</button>

 </div>

</form>

<div class="navbar">
  <a href="./welcome.php">Back</a>
</div>

</body>
</html>
