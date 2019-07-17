<?php  
  session_start();

  $username="";
  $email="";
  $errors=array();
   
 

   $dbServername="localhost";
   $dbusername="root";
   $dbpassword="";
   $dbName="registration";
//Connect to the database
   $conn=mysqli_connect($dbServername,$dbusername,$dbpassword,$dbName);

   //if the register button is clicked!!
   if(isset($_POST['register'])){
   	$username=mysqli_real_escape_string($conn,$_POST['username']);
   	$email=mysqli_real_escape_string($conn,$_POST['email']);
   	$password_1=mysqli_real_escape_string($conn,$_POST['password_1']);
   	$password_2=mysqli_real_escape_string($conn,$_POST['password_2']);

   	//ensure that form fields are filled properly
   	if(empty($username)){
   		array_push($errors,"Username is required!"); 
   	}
   	if(empty($email)){
   		array_push($errors,"Email is required!!");
   	}
   	if(empty($password_1)){
   		array_push($errors,"Password is required!!");
   	}
   	if($password_1 != $password_2){
   		 array_push($errors,"The two passwords are requird!!");
   	}
   	//If there is no error then save the user to database!!
   	  if(count($errors)==0){
   	  	$password = md5($password_1);  //encrypt password before storing in database (Security)	

   	  	$sql="INSERT INTO users(username,email,password) 
   	  	VALUES('$username','$email','$password');";

   	  	mysqli_query($conn,$sql);

   	  	$_SESSION['username']=$username;
   	  	$_SESSION['success']="You are now logged in!!";
   	  	header("location:index.php");
   	  }
   }

   //log user in from login page
   if(isset($_POST['login'])){
   	$username=mysqli_real_escape_string($conn,$_POST['username']);
   	$password=mysqli_real_escape_string($conn,$_POST['password']);

   	//ensure that form fields are filled properly
   	if(empty($username)){
   		array_push($errors,"Username is required!"); 
   	}
   	if(empty($password)){
   		array_push($errors,"Password is required!!");
   	}
   	if(count($errors)==0){
   		$password=md5($password);// encrypt password before comparing with that from database!!
   		$query="SELECT * FROM users where username='$username' AND password='$password'";
   		$result=mysqli_query($conn,$query);
   		if(mysqli_num_rows($result)==1){
   			//log user in!!
   			$_SESSION['username']=$username;
   			$_SESSION['success']="You are now logged in!!";
   			header("location:index.php");  //redirect to homepage
   		}else{
   			array_push($errors, "wrong username/password combination!!");

   		}
   	}
   }

   //logout
   if(isset($_GET['logout'])){
   	session_destroy();
   	unset($_SESSION['username']);
   	header('location:login.php');
   }

?>