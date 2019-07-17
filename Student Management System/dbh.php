<?php


 $dbServername="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbName="sms";


  $conn=mysqli_connect($dbServername,$dbusername,$dbpassword,$dbName);

   if(!$conn){
   	 die("Connection not established!!");
   }