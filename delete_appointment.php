<?php
include("includes/public_header.php");

	$query  = "DELETE FROM reservation WHERE reservation_id = {$_GET['reservation_id']}";
	mysqli_query($conn,$query);
	 echo '<script>window.top.location="myappointment.php"</script>';

?>