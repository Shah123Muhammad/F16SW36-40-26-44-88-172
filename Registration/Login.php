<?php include_once "server.php"  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="header">
   	  <h2>Login</h2>
   </div> 

   <form method="post" action="Login.php">
      <?php include "errors.php"  ?>
   	<div class="input_group">
   		<label>Username</label>
   		<input type="text" name="username" placeholder="Username">
   	</div>
   	<div class="input_group">
   		<label>Password</label>
   		<input type="password" name="password" placeholder="Password">
   	</div>  	
   	<div class="input_group">
   		 <button type="submit" name="login" class="btn">Login</button>
   	</div>
   	<p>
   		Not yet a member?<a href="register.php">Sign up</a>
   	</p>
   </form>
</body>
</html>