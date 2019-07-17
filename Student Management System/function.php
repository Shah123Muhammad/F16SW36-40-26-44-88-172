<?php

 include_once 'dbh.php';	

function showdetails($standerd,$rollno){
	
   global $conn;
 
	$sql="Select * from student where Standerd like '$standerd' and rollno like '$rollno'";

	$result=mysqli_query($conn,$sql);

	if(mysqli_num_rows($result)>0){

        $row=mysqli_fetch_assoc($result);
          ?>
        
           <table align="center" width="50%" border="1" style="margin-top:4rem;">
           	 
           	  <tr>
           	  	<th colspan="3">Student Details</th>
           	  </tr>
           	  <tr>
                <td rowspan="5"><img src="dataimg/<?php echo $row['image']; ?>" style="max-height: 150px; max-width: 120px;"></td>
                <th>Roll No</th>
                <td><?php echo $row['rollno']; ?></td>
           	  </tr>
              <tr>
           	   <th>Name</th>
                <td><?php echo $row['name']; ?></td>
           	  </tr>
           	  <tr>
           	   <th>City</th>
                <td><?php echo $row['city']; ?></td>
           	  </tr>
           	     <tr>
           	   <th>Prents Content No</th>
                <td><?php echo $row['pcont']; ?></td>
           	  </tr>
              <tr>
           	   <th>Standerd</th>
                <td><?php echo $row['standerd']; ?></td>
           	  </tr>
           
           	  
           </table>
          <?php
         
	}
	else{
		echo "<script>alert('No Student Found!!');</script>";
	}
}

?>