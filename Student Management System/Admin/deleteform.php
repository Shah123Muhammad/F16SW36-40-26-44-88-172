<?php

  include_once '../dbh.php';
     
 $id=$_REQUEST['sid'];

 $sql="Delete from student where id='$id'";

 $result=mysqli_query($conn,$sql);
   
  	  if($result==true){
  	  	  ?>
         <script>
         	alert("Data Deleted Successfully!!");
         	window.open('deleteStudent.php','_self');
         </script>
         <?php

}

?>