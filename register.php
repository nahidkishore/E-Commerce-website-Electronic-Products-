<?php include('registerconnect.php') ?>
<html>
    <head> 
      <link rel="stylesheet" href="styles/register.css">
    </head>
    <body>
		<h1>Register Form</h1>
	<div class="registation">
	    <form id="register-form" action="registerconnect.php" method="post">
		<?php include('error.php'); ?>
		<label>First Name :</label>
        <input type="text" name="first_name" id="fname" required="required" placeholder="Please Enter First Name"/><br /><br />
		<label>Last Name :</label>
        <input type="text" name="last_name" id="uname" required="required" placeholder="Please Enter First Name"/><br /><br />
        <label>User Name:</label>
        <input type="text" name="user_name" id="lname" required="required" placeholder="Please Enter User Name"/><br/><br/>
        <label>Email :</label>
		<input type="email" name="user_email" id="email" required="required" placeholder="nahidkishore99@gmail.com"/><br/><br/>
		<label>Password:</label>
        <input type="password" name="user_password" id="pass" required="required" placeholder="UpercasLowercase"/><br/><br/>
		<label>Re_password:</label>
        <input type="Password" name="user_repassword" id="rpass" required="required" placeholder="UpercasLowercase"/><br/><br/>
		<label>Mobile Number:</label>
        <input type="number" name="user_mobile" id="num" required="required" placeholder="e.g. +8801776180002"/><br /><br/>
		<label>Address:</label>
        <input type="text" name="user_addr" id="addr" required="required" placeholder="Address Please"/><br/><br/>
	    <input type="submit" value=" Submit " name="submit"/><br />
		<p>Already a member? <a href="login.php">Sign in</a></p>
		</form>
	</div> 
</form>
    </body>
</html>