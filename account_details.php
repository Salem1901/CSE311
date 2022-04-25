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

<h2>Account Details: </h2>

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
      <th>a_id</th>
      <th>a_name</th>
      <th>balance</th>
      <th>a_type</th>
      <th>open_date</th>
      <th>close_date</th>
    </tr>
  </thead>
  <tbody id="tmp">
  <?php
  include '../connection.php';
  $view_users_query = " SELECT * FROM account;";
  $run = mysqli_query( $conn, $view_users_query);
  while ($row = mysqli_fetch_array($run)) {
      $user_a_id   =  $row[0];
      $user_a_name  =  $row[1];
      $user_balance =  $row[2];
      $user_a_type  =  $row[3];
      $user_open_date  =  $row[4];
      $user_close_date =  $row[5];


  ?>


  <tr>
    <td><?=$user_a_id;?></td>
    <td><?=$user_a_name;?></td>
    <td><?=$user_balance;?></td>
    <td><?=$user_a_type;?></td>
    <td><?=$user_open_date;?></td>
    <td><?=$user_close_date;?></td>

    <td><a href="./edit_acc.php?id=<?=$user_a_id;?>"><button onclick="return confirm('Are you sure?');"> Edit </button></a></td>
    <td>
      <a href="./delete_acc.php?id=<?=$user_a_id;?>"><button onclick="return confirm('Are you sure?');"> Delete </button></a>
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
