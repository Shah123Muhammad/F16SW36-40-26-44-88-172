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

<table align="center">
<form action="updateStudent.php" method="post">

  <tr>
  	<th>Enter Standerd</th>
   <td><input type="number" name="standerd" placeholder="Enter Standerd" required="required"/></td>

  <th>Enter Student Name</th>
  <td><input type="text" name="stname" placeholder="Enter Student Name" required="required"/></td>

  <td colspan="2"><input type="submit" name="submit" value="Search"></td>
 </tr>
 </form>
</table>


<table align="center" width="80%" border="1" style="margin-top:10px;">
	<tr style="background-color:#000; color:#fff;">
		<th>No</th>
		<th>Image</th>
		<th>Name</th>
		<th>Rollno</th>
		<th>Edit</th>
	</tr>

<?php
   if(isset($_POST['submit'])){
        
        include_once '../dbh.php';

        $name=$_POST['stname'];
        $standerd=$_POST['standerd'];


        $sql="SELECT * from student where standerd='$standerd' AND name LIKE '%$name%'";
        $result=mysqli_query($conn,$sql);

        if(mysqli_num_rows($result)<1){
        	echo "<tr><td colspan='5' align='center' style='font-weight:bold; font-size:20px'>No records found!!</tr></td>";
        }
        else{

        	$count=0;
        	while($row=mysqli_fetch_assoc($result)){

               $count++;
        		?>
      <tr align="center">
		<td><?php echo $count;?></td>
		<td><img src="../dataimg/<?php echo $row['image']; ?>" style="max-width=100px;"/></td>
		<td><?php  echo $row['name'] ?></td>
		<td><?php echo $row['rollno'] ?></td>
		<td><a href="updateform.php?sid=<?php echo $row['id'];?>">Edit</a></td>
	</tr>


        		<?php
        	}
        }
   }

?>

</table>

