<?php
  include_once 'dbh.php';

   session_start();

   if(isset($_SESSION['uid'])){
   	  header("Location:Admin/admindash.php");
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
</head>
<body>

<h1 align="center">Admin Login</h1>

  <form action="login.php" method="post">

    <table align="center">
    	<tr>
    		<td>Username</td><td><input type="text" name="uname" required></td>
    	</tr>
    	<tr>
    		<td>Password</td><td><input type="password" name="pass" required></td>
    	</tr>
    	<tr>
    		<td colspan="2" align="center"><input type="submit" name="login"  value="Login"></td>
    	</tr>
    </table>

  </form>
</body>
</html>

<?php
  
   if(isset($_POST['login'])){

     $username=$_POST['uname'];
     $password=$_POST['pass'];

    $sql="SELECT * FROM admin where username='$username' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    $resultCheck=mysqli_num_rows($result);

    if($resultCheck<1){

    	?>
    	<script>
    	alert('Username or Password not match!!');
    	window.open('login.php','_self');
       </script>
       <?php

    }else{

         $row=mysqli_fetch_assoc($result);


         $id=$row['id'];


        $_SESSION['uid']=$id;
        header("Location:Admin/admindash.php");
    }
   }



?>