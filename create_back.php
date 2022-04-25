<?php
include '../connection.php';
if (isset($_POST['Create'])) {

  $user_fname  =  $_POST['fname'];
  $user_lname  =  $_POST['lname'];
  $user_acno =  $_POST['acno'];
  $user_actitle =  $_POST['actitle'];
  $user_actype =  $_POST['actype'];
  $user_DOB =  $_POST['dob'];
  $user_gender =  $_POST['gender'];
  $user_nation =  $_POST['nation'];
  $user_paddress =  $_POST['paddress'];
  $user_peaddress =  $_POST['peaddress'];
  $user_nid =  $_POST['nid'];
  $user_phnumber =  $_POST['phnumber'];
  $user_email =  $_POST['email'];
  $user_occ  = $_POST['occ'];
  $user_b_id = $_POST['b_id'];
  $user_nom = $_POST['nom'];
  $user_bal = $_POST['bal'];
  $user_o_date = $_POST['o_date'];

  if ($user_fname == '') {
    echo "<script>alert('Please enter the first name')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_lname == '') {
    echo "<script>alert('Please enter the last name')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_acno == '') {
    echo "<script>alert('Please enter the account no')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_actitle == '') {
    echo "<script>alert('Please enter the account Title')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_actype == '') {
    echo "<script>alert('Please enter the account type')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_DOB == '') {
    echo "<script>alert('Please enter the Date of Birth')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_gender == '') {
    echo "<script>alert('Please enter the gender')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_nation == '') {
    echo "<script>alert('Please enter the Nationality')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_paddress == '') {
    echo "<script>alert('Please enter the present address')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_peaddress == '') {
    echo "<script>alert('Please enter the permanent address')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_nid == '') {
    echo "<script>alert('Please enter the NID')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_phnumber == '') {
    echo "<script>alert('Please enter the phone number')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }

  if ($user_email == '') {
    echo "<script>alert('Please enter the email')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_occ == '') {
    echo "<script>alert('Please enter the occupation')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_b_id == '') {
    echo "<script>alert('Please enter the branch ID')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_nom == '') {
    echo "<script>alert('Please enter the Nominee')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_bal == '') {
    echo "<script>alert('Please enter the Balance')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  if ($user_o_date == '') {
    echo "<script>alert('Please enter the open date')</script>";
    echo "<script>window.open('./Create.php','_self')</script>";
    exit();
  }
  $check_email_query = " SELECT * from customer where email='$user_email'";
  $run_query =  mysqli_query($conn, $check_email_query);
  if (mysqli_num_rows($run_query) > 0) {
    echo "<script>alert('Email $user_email already exist in our database, please try another one!')</script>";
    echo "<script>window.open('./registration.php','_self')</script>";
    exit();
  }

  $insert_account = " INSERT into account(a_id, a_name, balance, a_type, open_date, close_date)
  VALUES ('$user_acno', '$user_actitle', '$user_bal', '$user_actype', '$user_o_date', '$user_c_date')";

  $insert_customer = " INSERT into customer(NID, Fname, lname, b_id, DOB, nationality, email, occupation, nominee, Gender, a_id, balance)
  VALUES ('$user_nid ', '$user_fname', '$user_lname', '$user_b_id', '$user_DOB','$user_nation', '$user_email', '$user_occ', '$user_nom', '$user_gender','$user_acno', '$user_bal' )";

  $insert_account_branch = " INSERT into account_branch(a_id, b_id)
  VALUES ('$user_acno', '$user_b_id')";

  $insert_customer_address = " INSERT into customer_address(NID,permanent_address,present_address)
  VALUES ('$user_nid', '$user_peaddress' , '$user_paddress')";

  $insert_customer_phone = " INSERT into customer_phone(NID,phone_number)
  VALUES ('$user_nid', '$user_phnumber')";

   if(mysqli_query($conn, $insert_account) && mysqli_query($conn, $insert_customer) && mysqli_query($conn, $insert_account_branch) && mysqli_query($conn, $insert_customer_address) && mysqli_query($conn, $insert_customer_phone)){
     echo "<script>alert('Account Created Successfully')</script>";
     echo "<script>window.open('./Create.php','_self')</script>";
   }

}else {
  echo "<script>window.open('./Create.php','_self')</script>";
}

?>
