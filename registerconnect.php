<?php
session_start();
// initializing variables
$first_name="";
$last_name="";
$user_name = "";
$user_email    = "";
$password_1="";
$password_2="";
$user_mobile="";
$user_addr="";

$errors = array(); 

// connect to the database
$db = mysqli_connect('localhost', 'root', '', 'nahid');

// REGISTER USER
if (isset($_POST['submit'])) {
  // receive all input values from the form
  $first_name = mysqli_real_escape_string($db, $_POST['first_name']);
  $last_name = mysqli_real_escape_string($db, $_POST['last_name']);
  $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
  $user_email = mysqli_real_escape_string($db, $_POST['user_email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['user_password']);
  $password_2 = mysqli_real_escape_string($db, $_POST['user_repassword']);
  $user_mobile= mysqli_real_escape_string($db, $_POST['user_mobile']);
  $user_addr = mysqli_real_escape_string($db, $_POST['user_addr']);

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $errors array
  if (empty($first_name)) { array_push($errors, "FirstName is required"); }
  if (empty($last_name)) { array_push($errors, "LastName is required"); }
  if (empty($user_name)) { array_push($errors, "UserName is required"); }
  if (empty($user_email)) { array_push($errors, "Email is required"); }
  if (empty($password_1)) { array_push($errors, "Password is required"); }
   //checking valid password
  
  if ($password_1 != $password_2) {
	array_push($errors, "The two passwords do not match");
  }
  if (empty($user_mobile)) { array_push($errors, "UserNumber is required"); }
  if (empty($user_addr)) { array_push($errors, "UserAddress is required"); }

  // first check the database to make sure 
  // a user does not already exist with the same username and/or email
  $user_check_query = "SELECT * FROM user_register WHERE user_name='$user_name' OR user_email='$user_email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);
  
  if ($user) { // if user exists
    if ($user['user_name'] === $user_name) {
      array_push($errors, "Username already exists");
    }

    if ($user['user_email'] === $user_email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
  	//$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO user_register (first_name,last_name,user_name,user_email, user_password,user_mobile,user_addr) 
  			  VALUES('$first_name', '$last_name', '$user_name','$user_email','$password_1','$user_mobile','$user_addr')";
  	mysqli_query($db, $query);
	header('location:login.php');
  	$_SESSION['user_name'] = $user_name;
  	$_SESSION['success'] = "You are now logged in";
  	
  }
}