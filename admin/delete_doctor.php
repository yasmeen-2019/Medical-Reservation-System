<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

	$select = "SELECT doctor_image FROM doctors WHERE doctor_id={$_GET['doctor_id']}";
	$result = mysqli_query($conn,$select);
	$row    = mysqli_fetch_assoc($result);
	unlink("upload/{$row['doctor_image']}");

	$query  = "DELETE FROM doctors WHERE doctor_id = {$_GET['doctor_id']}";
	mysqli_query($conn,$query);
	echo "<script> window.top.location='manage_doctors.php' </script>";

?>