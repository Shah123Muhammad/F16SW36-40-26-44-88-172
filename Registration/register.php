<?php 
    include('server.php');
  ?>
<!DOCTYPE html>
<html>
<head>
	<title>Registration System</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="header">
   	  <h2>Register</h2>
   </div> 

   <form method="post" action="register.php">

   	<!---Display validation Errors here!!  --->
    <?php include ("errors.php");?>

   	<div class="input_group">
   		<label>Username</label>
   		<input type="text" name="username" placeholder="Username" value="<?php echo $username;?>">
   	</div>
    <div class="input_group">
   		<label>Email</label>
   		<input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>"
   	</div>
   	<div class="input_group">
   		<label>Password</label>
   		<input type="password" name="password_1" placeholder="Password">
   	</div>
   	<div class="input_group">
   		<label>Confirm Password</label>
   		<input type="password" name="password_2" placeholder="Username">
   	</div>
   	<div class="input_group">
   		 <button type="submit" name="register" class="btn">Register</button>
   	</div>
   	<p>
   		Already a member?<a href="Login.php">Sign in</a>
   	</p>
   </form>
</body>
</html>