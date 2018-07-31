<?php
include('../db_login.php');
$post=$_POST['type'];
$name=$_POST['name'];
$phone=$_POST['phone'];
$address=$_POST['address'];
$busId=$_POST['busId'];

$update=mysqli_query($connection,"INSERT INTO employee (post, name, phone, address,bus_id)
VALUES
('$post','$name','$phone','$address','$busId')");
header("location: employee.php");
?>
