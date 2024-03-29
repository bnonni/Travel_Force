<?php include('./server/server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="css/index.css">
<style>
html {
	background:url('./images/travel-agent.jpg') no-repeat center center fixed;
	-webkit-background-size:cover;
	-moz-background-size:cover;
	-o-background-size:cover;
	background-size:cover;
}
</style>
</head>
<body>
  <div class="header">
  	<h2>Login</h2>
  </div>
  <form method="post" action="login.php">
  	<?php include('./aux/errors.php'); ?>
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>
  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
  	<p>
		  Not yet a member? <a href="register.php">Sign up</a>
		  
  	</p>
  </form>
</body>
</html>
