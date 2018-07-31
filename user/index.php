
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<?php
					// check for a successful form post
					if (isset($_GET['e'])) echo "<div class=\"alert alert-error\">".$_GET['e']."</div>";
			?> 

<div class="container">
<div class="jumbotron" style="background-color: grey; margin-top:20px; ">
	<h1>User Panel</h1>
<form action="user_login.php" method="POST">
  <div class="form-group">
    <label for="email">User ID:</label>
    <input type="text" class="form-control" id="email" name="username" name="userid" pattern="[A-z ]{3,}" title="Please enter a valid username." placeholder="Enter userId" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd"  name="password" placeholder="Enter Password " required>
  </div>
  <input type="hidden" name="save" value="signin">
  <button type="submit" id="submit" value="Login" class="btn btn-success">Submit</button>
</form>
</div>
</div>
</html>