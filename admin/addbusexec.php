<?php
include('../db_login.php');
$bus_no=$_POST['busNo'];
$type=$_POST['type'];
$seat_no=$_POST['seatno'];


$update=mysqli_query($connection,"INSERT INTO bus (bus_no, type, seat_no)
VALUES
('$bus_no','$type','$seat_no')");
header("location: setinventory.php");
?>
