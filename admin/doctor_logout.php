<?php
	session_start();
	unset($_SESSION['doctor_id']);
	
	header("location:doctor_login.php");

?>