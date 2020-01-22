<?php
include("config.php");
//open connection
$conn = mysqli_connect(DBSERVER,DBUSER,DBPASS,DBNAME); 
//check the connection 
if (!$conn) {
	die("cannot connect to server");
}
?>