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

<h2>Customer List: </h2>

<?php
if(isset($_GET['del'])) {
  echo "<script>$('#notice')
        .show()
        .html('<div>Successfully! <strong> record deleted. </strong> </div>')
        .fadeOut(5000)</script>";
}
?>
</div>

<table>
  <thead>
    <tr>
      <th>NID</th>
      <th>Fname	</th>
      <th>lname</th>
      <th>b_id</th>
      <th>DOB</th>
      <th>nationality</th>
      <th>email</th>
      <th>occupation</th>
      <th>nominee</th>
      <th>Gender</th>
      <th>a_id</th>
      <th>balance</th>
    </tr>
  </thead>
  <tbody id="tmp">
  <?php
  include '../connection.php';
  $view_users_query = " SELECT * FROM customer;";
  $run = mysqli_query( $conn, $view_users_query);
  while ($row = mysqli_fetch_array($run)) {
      $user_NID   =  $row[0];
      $user_Fname  =  $row[1];
      $user_lname =  $row[2];
      $user_b_id  =  $row[3];
      $user_DOB  =  $row[4];
      $user_nationality  =  $row[5];
      $user_email  =  $row[6];
      $user_occupation =  $row[7];
      $user_nominee  =  $row[8];
      $user_Gender  =  $row[9];
      $user_a_id  =  $row[10];
      $user_balance  =  $row[11];

  ?>





  <tr>
    <td><?=$user_NID;?></td>
    <td><?=$user_Fname;?></td>
    <td><?=$user_lname;?></td>
    <td><?=$user_b_id;?></td>
    <td><?=$user_DOB;?></td>
    <td><?=$user_nationality;?></td>
    <td><?=$user_email;?></td>
    <td><?=$user_occupation;?></td>
    <td><?=$user_nominee;?></td>
    <td><?=$user_Gender;?></td>
    <td><?=$user_a_id;?></td>
    <td><?=$user_balance;?></td>

    <td><a href="./edit.php?id=<?=$user_NID;?>"><button onclick="return confirm('Are you sure?');"> Edit </button></a></td>
    <td>
      <a href="./delete.php?id=<?=$user_a_id;?>"><button onclick="return confirm('Are you sure?');"> Delete </button></a>
    </td>

  </tr>

  <?php
  }


  ?>

  </tbody>
  <tbody id="search_result"></tbody>
</table>

<div class="navbar">
  <a href="./welcome.php">Back</a>
</div>
</body>
</html>
