<?php
//require_once("F_RL_DB_conn.php");
session_start();
$db = mysqli_connect('localhost', 'root', '', 'nahid');
if(isset($_POST["submit"])){
	 // receive all input values from the form
	 $user_name = mysqli_real_escape_string($db, $_POST['user_name']);
	 $password_1 = mysqli_real_escape_string($db, $_POST['user_password']);

	//$user_name= $_POST['user_name'];
	//$user_password=$_POST['user_password'];
	
	//$q='SELECT * FROM user_register where user_name ="'.$user_name.'" and user_password ="'.$user_password.'"';
	
	$q = "SELECT * FROM user_register WHERE user_name='$user_name' and user_password='$password_1'";
	
	$r=mysqli_query($db,$q);
	if(mysqli_num_rows($r)>0){
		//echo "you are now logged in";
	   /// header("location:index.php");

		 $user_name=$_POST['user_name'];
		 $data=['val1'=>$password_1 ];
		 $query=http_build_query($data);
		 header("location:index.php");
		 $_SESSION['user_name']=$user_name;
		 $_SESSION['user_email']=$user_password;
		 $_SESSION['login_type']="user";
		 
		// header('location:disply.php'.(FALSE===empty($query)? '?'.$query:''));
		// exit;
	}
	else{
		//header("location:login.html");
		echo "<script type='text/javascript'>alert('Wrong username or password');window.location.href='login.php';
    </script>";
	}
}
?>