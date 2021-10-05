<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$con = mysqli_connect('localhost', 'u886945712_jprmbtnbss ', 'Prince@123','u886945712_jprmbt');
session_start();
$servername = "localhost";
$database = "*********_dbms";
$username = "u*********_IIT2019239";
$password = "************";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}




$email = $_POST['email'];
$password = $_POST['password'];

 $_SESSION['email'] = $_POST['email']; 
 $_SESSION["password"] = $_POST['password']; 

if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
     
      
      $sql = "SELECT id FROM cn WHERE email = '$email' and password = '$password'";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      
		
      if($count == 1) {
         header("location:https://cn.redixolabs.in/twostep");
      }
      else {
          echo "<script>alert('Wrong Email or Password:(');</script>";
      }
   }
        
   
?>