<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>

</form>
<div class="container">
<div class="jumbotron" style="background-color: grey; margin-top:20px; ">
	<h1>Admin Panel</h1>
<form action="login.php" method="post">
  <div class="form-group">
    <label for="email">UserName:</label>
    <input type="text" class="form-control" id="email" name="username" placeholder="Enter username" required>
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" class="form-control" id="pwd"  name="password" placeholder="Enter Password " required>
  </div>
  
  <button type="submit" id="submit" value="Login" class="btn btn-success">Submit</button>
</form>
</div>
</div>
</html>