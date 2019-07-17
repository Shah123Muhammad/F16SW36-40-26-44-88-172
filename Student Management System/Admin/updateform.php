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
  include_once "../dbh.php";


   $sid=$_GET['sid'];

   	$sql="SELECT * FROM student where id='$sid'";
   $result=mysqli_query($conn,$sql);

   $row=mysqli_fetch_assoc($result);

?>

<form method="post" action="updatedata.php" enctype="multipart/form-data">
	<table align="center"   border="1" style="width:70%;text-align:center;margin-top:40px">
      <tr>
      	<th>Roll No</th>
      	<th><input type="text" name="rollno" value="<?php  echo $row['rollno']; ?>" required></th>
      </tr>
       <tr>
      	<th>Full Name</th>
      	<th><input type="text" name="name" value="<?php  echo $row['name']; ?>" required></th>
      </tr>
       <tr>
      	<th>City</th>
      	<th><input type="text" name="city" value="<?php  echo $row['city']; ?>" required></th>
      </tr>
       <tr>
      	<th>Parents Contact No:</th>
      	<th><input type="text" name="pcon" value="<?php  echo $row['pcont']; ?>"></th>
      </tr>
       <tr>
      	<th>Standerd</th>
      	<th><input type="number" name="std" value="<?php  echo $row['standerd']; ?>" required></th>
      </tr>
       <tr>
      	<th>Image</th>
      	<td><input type="file" name="simg" required></td>
      </tr>
      <tr>
       
      	<td colspan="2" align="center">

             <input type="hidden" name="sid"  value="<?php echo $row['id']; ?>">
      		<input type="submit" name="submit" value="Submit"></td>
      </tr>
	</table>
</form>
