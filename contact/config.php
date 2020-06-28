<?php

// Create database connection
$con = mysqli_connect ("localhost","root","","nahid");
// Check connection
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
}
?>