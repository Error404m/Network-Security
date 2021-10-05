<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$con = mysqli_connect('localhost', 'u886945712_jprmbtnbss ', 'Prince@123','u886945712_jprmbt');
session_start();
$servername = "localhost";
$database = "u886945712_dbms";
$username = "u886945712_IIT2019239";
$password = "Prince@123";
// Create connection
$con = mysqli_connect($servername, $username, $password, $database);


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


$email = $_POST['email'];
$password = $_POST['password'];

 $_SESSION['email'] = $_POST['email']; 
 $_SESSION["password"] = $_POST['password']; 
 
 $salted ="networksecurity".$password."IIT2019239";
 
//  $hash_password = password_hash($password,PASSWORD_DEFAULT);
  

if($_SERVER["REQUEST_METHOD"] == "POST") {
       
      //check 4 mail
      $sql = "SELECT id FROM cn WHERE email = '$email' ";
      $result = mysqli_query($con,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
       if($count == 1) {
          $sql2 = "SELECT * FROM cn WHERE email='$email'";
          $result2 = $con->query($sql2);

        if ($result2->num_rows > 0) {
        $row = $result2->fetch_assoc();
        $salt_pass=$row['salt_pass'];
        
        if (password_verify($salted, $salt_pass)) {
          header("location:https://cn.redixolabs.in/twostep");
            }
        else {
          echo "<script>alert('Wrong Password:(');</script>";
          }
      
      
           } 
       
     
         
      } //if mail found
      else {
          echo "<script>alert('You are not registered:(');</script>";
          }
      
   } //main
        
   
?>