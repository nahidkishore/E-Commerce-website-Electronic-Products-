<?php
//require_once("F_RL_DB_conn.php");
session_start();

if(isset($_SESSION['user_name'])){
	echo "<script>";
		echo "window.location.assign('checkout.php')";
	echo "</script>";
}else{
	echo "<script>";
		echo "window.location.assign('login.php')";
	echo "</script>";
}
?>