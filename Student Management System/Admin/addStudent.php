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
  include_once "titlehead.php";
?>

<form method="post" action="addStudent.php" enctype="multipart/form-data">
	<table align="center"   border="1" style="width:70%;text-align:center;margin-top:40px">
      <tr>
      	<th>Roll No</th>
      	<th><input type="text" name="rollno" placeholder="Enter Rollno" required></th>
      </tr>
       <tr>
      	<th>Full Name</th>
      	<th><input type="text" name="name" placeholder="Enter Full Name" required></th>
      </tr>
       <tr>
      	<th>City</th>
      	<th><input type="text" name="city" placeholder="Enter City" required></th>
      </tr>
       <tr>
      	<th>Parents Contact No:</th>
      	<th><input type="text" name="pcon" placeholder="Enter the Contact no of Parents"></th>
      </tr>
       <tr>
      	<th>Standerd</th>
      	<th><input type="number" name="std" placeholder="Enter Standerd" required></th>
      </tr>
       <tr>
      	<th>Image</th>
      	<td><input type="file" name="simg" required></td>
      </tr>
      <tr>
      	<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"></td>
      </tr>
	</table>
</form>

<?php
 include_once "../dbh.php";
?>

<?php

  if(isset($_POST['submit'])){
  	 include_once '../dbh.php';
      $rollno=$_POST['rollno'];
      $name=$_POST['name'];
      $city=$_POST['city'];
      $pcon=$_POST['pcon'];
      $std=$_POST['std'];
      $imagename=$_FILES['simg']['name'];
      $tempname=$_FILES['simg']['tmp_name'];

      move_uploaded_file($tempname,"../dataimg/$imagename");

  	 $sql="INSERT INTO `student`(`rollno`, `name`, `city`, `pcont`, `standerd`,`image`) 
  	      VALUES ('$rollno','$name','$city','$pcon','$std', '$imagename')";

  	 $result=mysqli_query($conn,$sql);

  	  if($result==true){
  	  	  ?>
         <script>
         	alert("Data Inserted Successfully!!");
         </script>

  	  	  <?php
  	  }
  }
?>