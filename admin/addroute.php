
<script type="text/javascript">
function validateForm()
{

var a=document.forms["addroom"]["route"].value;
if (a==null || a=="")
  {
  alert("Pls. Enter the Route");
  return false;
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

<form action="addexec.php" method="post">
	
	Route:<br><input type="text" name="route" class="ed"><br>
	

	<input type="submit" value="Save" id="button1">
</form>
