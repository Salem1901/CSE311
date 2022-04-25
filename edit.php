<?php
session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}

include '../connection.php';
$user_id = $_GET['id'];
$sql = " SELECT * from customer where NID='$user_id'";
$get_user = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($get_user);

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

<h2>Update Existing Customer</h2>

<form action="./update.php?id=<?=$row['NID'];?>" method="post">
  <div >
    <label for="fname"><b>First Name</b></label>
    <input type="text" placeholder="Enter First Name" name="fname" value="<?=$row['Fname'];?>">

    <label for="lname"><b>Last Name</b></label>
    <input type="text" placeholder="Enter Last Name" name="lname" value="<?=$row['lname'];?>">

    <label for="nation"><b>Nationality</b></label>
    <input type="text" placeholder="Enter Nationality" name="nation" value="<?=$row['nationality'];?>">

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" value="<?=$row['email'];?>" >

    <label for="dob"><b>Date of Birth</b></label>
    <input type="text" placeholder="Enter Date of Birth:" name="dob" value="<?=$row['DOB'];?>">

    <label for="occ"><b>Occupation</b></label>
    <input type="text" placeholder="Enter Occupation" name="occ" value="<?=$row['occupation'];?>">

    <label for="nom"><b>Nominee</b></label>
    <input type="text" placeholder="Enter Branch ID" name="nom" value="<?=$row['nominee'];?>">

    <button type="submit" name="update" value="Update" >Update</button>
    <br></br>
    <br></br>
  </div>
</form>
<div class="navbar">
  <a href="./Customer_List.php">Back</a>
</div>
</body>
</html>
