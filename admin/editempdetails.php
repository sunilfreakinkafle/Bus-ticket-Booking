<style type="text/css">
<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}
#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}
-->
</style>
<?php
	include('../db_login.php');
	$id=$_GET['id'];
	$result = mysqli_query($connection,"SELECT * FROM employee where id='$id'");
		while($row = mysqli_fetch_array($result))
			{
			$post=$row['post'];
			$name=$row['name'];
			$phone=$row['phone'];
			$address=$row['address'];
			}
?>
<form action="execeditemp.php" method="post">
	<input type="hidden" name="roomid" value="<?php echo $id=$_GET['id'] ?>">
	Employee Type:<br><input type="text" name="post" value="<?php echo $post ?>" class="ed"><br>
	Name:<br><input type="text" name="name" value="<?php echo $name ?>" class="ed"><br>
	Phone:<br><textarea name="phone" class="ed"><?php echo $phone ?></textarea><br>
	address:<br><input type="text" name="address" value="<?php echo $address ?>" class="ed"><br>
	
	<input type="submit" value="Edit" id="button1">
</form>