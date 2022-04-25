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

<h2>Accountant Login</h2>

<form action="./pages/login.php" method="post">
  <div >
    <label for="e_id"><b>Employee ID</b></label>
    <input type="text" placeholder="Enter ID" name="e_id">

    <label for="pass"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" >

    <button type="submit" name="login" value="login">Login</button>
  </div>

</form>
<br>Don't have any account yet?</br>
<br><a href="./pages/registration.php">Sign Up Here</a>

</body>
</html>
