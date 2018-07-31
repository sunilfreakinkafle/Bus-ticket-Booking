<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db_login.php');
if($_GET['id'])
{
$id=$_GET['id'];
 $sql = "delete from register where userid='$id'";
 mysqli_query($connection,"delete from register where userid='$id'");
 mysqli_query($connection, $sql);
}

?>