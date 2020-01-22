<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

	$select = "SELECT admin_image FROM admin WHERE admin_id={$_GET['admin_id']}";
	$result = mysqli_query($conn,$select);
	$row    = mysqli_fetch_assoc($result);
	unlink("upload/{$row['admin_image']}");

	$query  = "DELETE FROM admin WHERE admin_id = {$_GET['admin_id']}";
	mysqli_query($conn,$query);
		echo "<script> window.top.location='manage_admin.php' </script>";

?>