<?php

// This is a sample code in case you wish to check the username from a mysql db table
include('../db_login.php');
if($_GET['userid'])
{
$id=$_GET['userid'];
 $sql = "delete from register where userid='$id'";
 mysql_query("delete from register where userid='$id'");
 mysql_query( $sql);
}

?>