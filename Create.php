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

  input[type=text] {
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

<h2>Create Account</h2>

<form action="./create_back.php" method="post">
  <div >
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname">

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname">

    <label for="acno"><b>Account Number</b></label>
    <input type="text" placeholder="Enter Account Number" name="acno">

    <label for="bal"><b>Balance</b></label>
    <input type="text" placeholder="Enter Balance" name="bal">

    <label for="o_date"><b>Account Open Date</b></label>
    <input type="text" placeholder="Enter open date" name="o_date" value="YYYY-MM-DD">

    <label for="actitle"><b>Account Title</b></label>
    <input type="text" placeholder="Enter Account Title:" name="actitle">

    <label for="actype"><b>Account Type</b></label>
    <input type="text" placeholder="Enter Account Type:" name="actype">

<br></br>
    <label for="dob"><b>Date of Birth</b></label>
    <input type="text" placeholder="Enter Date of Birth:" name="dob" value="YYYY-MM-DD">

    <label for="gender"><b>Gender</b></label>
    <input type="text" placeholder="Enter Gender" name="gender">

<br></br>
    <label for="nation"><b>Nationality</b></label>
    <input type="text" placeholder="Enter Nationality" name="nation">

    <label for="paddress"><b>Present Address</b></label>
    <input type="text" placeholder="Enter Present Address" name="paddress">

    <label for="peaddress"><b>Permanent Address</b></label>
    <input type="text" placeholder="Enter Permanent Address" name="peaddress">

    <label for="nid"><b>NID</b></label>
    <input type="text" placeholder="Enter NID" name="nid">

    <label for="phnumber"><b>Phone Number</b></label>
    <input type="text" placeholder="Enter Phone Number" name="phnumber">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email">

    <label for="occ"><b>Occupation</b></label>
    <input type="text" placeholder="Enter Occupation" name="occ">

    <label for="b_id"><b>Branch ID</b></label>
    <input type="text" placeholder="Enter Branch ID" name="b_id">

    <label for="nom"><b>Nominee</b></label>
    <input type="text" placeholder="Enter Nominee" name="nom">

    <button type="submit" name="Create" value="Create" >Create</button>
    <br></br>
    <br></br>
  </div>
</form>
<div class="navbar">
  <a href="./welcome.php">Back</a>
</div>
</body>
</html>
