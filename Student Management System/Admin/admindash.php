<?php

session_start();

   if(isset($_SESSION['uid'])){
     echo "";  
   }else{
   	  header('location: ../login.php');
   }
  
?>

<?php
  include_once "header.php";
?>

  <div class="admintitle">
  	
  	 <h4><a href="logout.php" style="float:right;margin-right:30px;color:#fff;font-size:20px;">Logout</a></h4>
  	  <h1>Welcome to Admin Dashboard</h1>
  </div>

  <div class="dashboard">
  	<table width="50%" align="center">
  		<tr>
  			<td>1.</td><td><a href="addStudent.php">Insert Student Details</a></td>
  		</tr>
  		<tr>
  			<td>2.</td><td><a href="updateStudent.php">Update Student Details</a></td>
  		</tr>
  		<tr>
  			<td>3.</td><td><a href="deleteStudent.php">Delete Student Details</a></td>
  		</tr>

  	</table>
  </div>
  

<?php
  include_once "footer.php";
?>