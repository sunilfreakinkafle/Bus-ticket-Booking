<?php
	include('../db_login.php');
	$roomid = $_POST['roomid'];
	$post=$_POST['post'];
			$name=$_POST['name'];
			$phone=$_POST['phone'];
			$address=$_POST['address'];
	mysqli_query($connection,"UPDATE employee SET post='$post', name='$name', phone='$phone', address='$address' WHERE id='$roomid'");
	header("location: employee.php");
?>