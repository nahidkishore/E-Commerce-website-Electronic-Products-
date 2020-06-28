<?php ?>
<html>
   <head>
        <title>Login Form Design</title>
	    <link rel="stylesheet" href="styles/login.css">
   </head>
   <body> 
    <div class="loginbox">
       <h1>User Login</h1>
	   <form action="loginconnect.php " method="post">
	        <label>User Name</label>
			<input type="text" name="user_name"placeholder="Enter Username">
			<label>User Password</label>
			<input type="password" name="user_password"placeholder="Enter Password">
			<input type="submit" name="submit" value="submit"></br>
			<a href="register.php">Don't have an account?</a><br>
			
	   </form>
   </body>
</html>
