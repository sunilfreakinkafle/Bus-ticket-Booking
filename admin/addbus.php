
<script type="text/javascript">
function validateForm()
{

var a=document.forms["addroom"]["busNo"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the BusNO");
  return false;
  }
  var b=document.forms["addroom"]["type"].value;
if (b==null || b=="")
  {
  alert("Pls. Enter the Route");
  return false;
  }
  var c=document.forms["addroom"]["cost"].value;

var d=document.forms["addroom"]["seatno"].value;
if (d==null || d=="")
  {
  alert("Pls Enter the seatno");
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

<form action="addbusexec.php" method="post">
	
	BUS no:<br><input type="text" name="busNo" class="ed"><br>
	Type:<br><input type="text" name="type" class="ed"><br>
	Seat no:<br><input type="text" name="seatno" class="ed"><br>
	
	<input type="submit" value="Save" id="button1">
</form>
