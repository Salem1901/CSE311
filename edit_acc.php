<?php
session_start();
if(!isset($_SESSION['e_id'])){
  header("Location: ../index.php");
}

include '../connection.php';
$user_id = $_GET['id'];
$sql = " SELECT * from account where a_id='$user_id'";
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

<h2>Update Existing Account</h2>

<form action="./update_acc.php?id=<?=$row['a_id'];?>" method="post">
  <div >
    <label for="actitle"><b>Account Title</b></label>
    <input type="text" placeholder="Enter Account Title:" name="actitle" value="<?=$row['a_name'];?>">

    <label for="actype"><b>Account Type</b></label>
    <input type="text" placeholder="Enter Account Type:" name="actype" value="<?=$row['a_type'];?>">

    <label for="c_date"><b>Account Close Date</b></label>
    <input type="text" placeholder="Enter close date" name="c_date" value="<?=$row['close_date'];?>">

    <button type="submit" name="update" value="Update" >Update</button>
    <br></br>
    <br></br>
  </div>
</form>
<div class="navbar">
  <a href="./account_details.php">Back</a>
</div>
</body>
</html>
