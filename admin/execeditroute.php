<?php
	include('../db_login.php');
	$roomid = $_POST['roomid'];
	
	$route=$_POST['route'];

	mysqli_query($connection,"UPDATE route SET , route='$route',  WHERE id='$roomid'");
	header("location: route.php");
?>