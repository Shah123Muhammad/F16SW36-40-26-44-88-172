<?php 
	require 'dbh.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Student Management System</title>
  
</head>
<body>
<h3 align="right" style="margin-right:30px;"><a href="login.php">Admin Login</a></h3>
<h1 align="center">Welcome to Student Management System</h1>
<hr/>

 

<form  align="center"  action="index.php" method="post">
   <h2>Student Information</h2>

    Enter Standard:
 	<select name="std">
 		<option>Choose Standard</option>
 		<option value="1">1st</option>
 		<option value="2">2nd</option>
 		<option value="3">3rd</option>
 		<option value="4">4th</option>
 		<option value="5">5th</option>
 		<option value="6">6th</option>
 	</select><br><br>
 	Enter Roll no:
 	<input type="text" name="rollno">
 	<br><br>
 	 <input  type="submit" name="submit" value="Show Info">
 </form>
</body>
</html>


<?php

 if(isset($_POST['submit'])){
 	$standerd=$_POST['std'];
 	$rollno=$_POST['rollno'];

  
 	include_once 'dbh.php';
    include_once 'function.php';

 	showdetails($standerd,$rollno);

 }

 