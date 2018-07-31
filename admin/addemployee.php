
<script type="text/javascript">
function validateForm()
{
var a=document.forms["employee"]["type"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the employee type");
  return false;
  }
var b=document.forms["employee"]["name"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the name");
  return false;
  }
 var c=document.forms["employee"]["phone"].value;
if (c==null || c=="")
  {
  alert("Pls. enter the phone Number");
  return false;
  }
var d=document.forms["employee"]["address"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the address");
  return false;
  }
  var d=document.forms["employee"]["busId"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the BUs Id");
  return false;
  }
}
</script>

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

<form action="addempprocess.php" method="post">
	Employee Type:<br><input type="text" name="type" class="ed"><br>
	Name:<br><input type="text" name="name" class="ed"><br>
	Address:<br><input type="text" name="address" class="ed"><br>
	Phone Number:<br><input type="text" name="phone" class="ed"><br>
	Bus ID:<br><input type="text" name="busId" class="ed"><br>

              <select name="route" />
              <option value="" selected>---------select----------</option>
            <?php
            include('../db_login.php');
              $result = mysqli_query($connection,"SELECT * FROM bus");
            while($row = mysqli_fetch_array($result))
              { 
                echo '<option value="'.$row['id'].'">';
                echo $row['id'];//.'  :'//.$row['type'];//.'  :'.$row['time'];
                echo '</option>';
              }
            ?>
            </select>
	<input type="submit" value="Save" id="button1">
</form>
