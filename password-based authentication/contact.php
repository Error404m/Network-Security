<?php
// database connection code
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
echo "Connected successfully";
mysqli_close($conn);

// get the post records
$name = $_POST['name'];
$email = $_POST['email'];
$rollnumber = $_POST['rollnumber'];
$password = $_POST['password'];
$cpassword = $_POST['cpassword'];
$city = $_POST['city'];
$college = $_POST['college'];
$gender = $_POST['gender'];


$_SESSION['name'] = $_POST['name']; 
  
$_SESSION['email'] 
        = $_POST['email']; 
  
$_SESSION['rollnumber'] 
        = $_POST['rollnumber']; 
        
// create a password hash
$hash_pass = password_hash($password,PASSWORD_DEFAULT);

//Creating own salt paasword and then hash
$salted ="networksecurity".$password."IIT2019239";
$salted_pass=password_hash($salted,PASSWORD_DEFAULT);
  


	//echo "$name! $email $rollnumber $password $cpassword $hash_pass $salted_pass $city $college  $gender  ";


if($password==$cpassword){

$sql = "INSERT INTO cn (name,email,password,hash_pass,salt_pass,rollnumber,city,college) VALUES ( '$name', '$email', '$password' ,'$hash_pass' ,'$salted_pass' ,'$rollnumber',  '$city' , '$college' )";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
header("Location: https://cn.redixolabs.in/log.php");
}
else
{
    echo "Something went wrong !";
}


}
else{
        echo "Password are confirm password are not same . Please try again !";

}


?>


