<?php
	//Start session
	session_start();
	
	//Connect to mysql server
	require "../db_login.php";
	
	//Function to sanitize values received from the form. Prevents SQL injection
	
	
	//Sanitize the POST values
	$login = $_POST['username'];
	$password = $_POST['password'];
	
	//Create query
	$qry="SELECT * FROM register WHERE userid='$login' AND password='$password'";
	$result=mysqli_query($connection,$qry);
	//while($row = mysql_fetch_array($result))
//  {
//  $level=$row['position'];
//  }
	//Check whether the query was successful or not
	if($result) {
		if(mysqli_num_rows($result) > 0) {
			//Login Successful
			session_regenerate_id();
			$member = mysqli_fetch_assoc($result);
			$_SESSION['SESSID'] = $member['id'];
			$_SESSION['SESS_NAME']=$member['userid'];
			session_write_close();
			//if ($level="admin"){
			$_SESSION['id'] = $login;

			header("location: dashboard.php");
			exit();
		}else {
			//Login failed
			header("location: index.php");
			exit();
		}
	}else {
		die("Query failed");
	}
?>