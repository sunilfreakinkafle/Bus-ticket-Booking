<?php
include('../db_login.php');

$route=$_POST['route'];

$update=mysqli_query($connection,"INSERT INTO route (route)
VALUES
('$route')");
header("location: route.php");
?>
