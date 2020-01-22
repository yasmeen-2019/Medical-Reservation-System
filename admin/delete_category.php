<?php
include("../includes/connection.php");
include("../includes/admin_header.php");

	$select = "SELECT cat_image FROM category WHERE cat_id={$_GET['cat_id']}";
	$result = mysqli_query($conn,$select);
	$row    = mysqli_fetch_assoc($result);
	unlink("upload/{$row['cat_image']}");

	$query  = "DELETE FROM category WHERE cat_id = {$_GET['cat_id']}";
	mysqli_query($conn,$query);
		echo "<script> window.top.location='manage_category.php' </script>";

?>