<?php
session_start();
$servername = "localhost";
$database = "*********_dbms";
$username = "u*********_IIT2019239";
$password = "************";
$con = mysqli_connect($servername, $username, $password, $database);



if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


$email=$_SESSION["email"];
$password=$_SESSION["password"];

if(!isset($_SESSION["email"]))
{
  header('location:https://cn.redixolabs.in');
}

$sql = "SELECT * FROM cn WHERE email='$email'";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
        $row = $result->fetch_assoc();
       $name=$row['name'];
        $number=$row['rollnumber'];
        
    }
 

$ip4=1;
$ip6=$_SERVER['REMOTE_ADDR'];
$battery='100%';
$device=$_SERVER['HTTP_USER_AGENT'];
$currurl=$_SERVER['PHP_SELF'];;
$prevurl=$_SERVER['HTTP_REFERER'];;
$location="12.2.2.2";



// $sqld = "INSERT INTO loginfo (ip4,ip6,battery,device,currurl,prevurl,location,name,email,number) VALUES ( '$ip4', '$ip6', '$battery', '$device' , '$currurl' , '$prevurl' , '$location' , '$name', '$email' , '$number' )";

$JpRmBt="INSERT INTO `loginfo` (`ip4`, `ip6`, `battery`, `device`, `currurl`, `prevurl`, `location`, `name`, `email`, `number`) VALUES ('$ip4', '$ip6', '$battery', '$device','$currurl', '$prevurl', '$location', '$name', '$email', '$number')";

// insert in database 
// mysqli_query($con, $sqld);
mysqli_query($con, $JpRmBt);



?>





    
    <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />


    
    <title>Computer Network</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   
    <style>
        p, h1 {
            color: green;
        }
    </style>
    <script src=
"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    </script>
  
    <script>
       
  
        $.getJSON("https://api.ipify.org?format=json",
                                          function(data) {
  
            // Setting text of element P with id gfg
            $("#gfg").html(data.ip);
        })
    </script>
   <style>
   .edit {
  color: #4CAF50;
 
}

.delete {
  
  color: red;
  
}
</style>


 <style>
input[type=password], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;

  padding: 7px;
}
</style>


</head>

<body>
    
  

    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">
                            <li><a href="#" class="menu-top-active">MENU</a></li>

                             <li><a href="https://cn.redixolabs.in/">Without hashing</a></li>
                             <li><a href="https://cn.redixolabs.in/hash_login">Hash login</a></li>
                             <li><a href="https://cn.redixolabs.in/salted_login/">Salted login</a></li>


                            <li><a href="../logout.php" class="btn btn-danger pull-right">LOG ME OUT>></a></li>
                            
                             

                        </ul>
                        
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- MENU SECTION END-->
  
          <div class="content-wrapper">
        <div class="container">
            <div class="row pad-botm">
                <div class="col-md-12">
                    <h4 class="header-line">Welcome <?php echo $name ?> !!</h4>
 <marquee width = "100%" bgcolor="yellow">Implementation of password-based authentication️. </marquee>

                </div>

            </div>   
           


            
            
<hr>

         
                                <a class="delete"><h5>
  Hey dude, You are being monitered by security purpose:)</h5></a>
  


 <div class="row">

                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            Kuchh aapke baare me:
                        </div>

                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        
                                   


                                        <tr>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                         </thead>
                                    <tbody>
                                        
                                        <tr>
    <td>Your Public IP(IP4):</td>
    <td><p id="gfg">(You are being monitered for security purpose). </p>(You are being monitered for security purpose).</td>
    </tr>  
    
      <tr>
    <td>Private IP(IP6):</td>
    <td><button class="delete"><?php echo $ip6 ?> <br>
</button></td>
    </tr>
    
      <tr>
    <td>Battery Status:</td>
     <td><button class="delete"><h5 class="console">
  Detecting%...
</h5> <br>
</button></td>
  
    </tr>
    
      <tr>
    <td>Device info:</td>
    <td><button class="edit"><?php echo $device ?> <br></button></td>
    </tr>
    
       <tr>
    <td>Current URL::</td>
    <td><button class="edit"><?php echo $currurl ?> <br></button></td>
    </tr>
    
       <tr>
    <td>Referal/Previous URL:</td>
    <td><button class="edit"><?php echo $prevurl ?> <br></button></td>
    </tr>
    
       <tr>
    <td>Location:</td>
    <td><p id="demo">Your location is:</p>
</td>
    </tr>
    
       <tr>
    <td>Name:</td>
    <td><button class="edit"><?php echo $name ?> <br></button></td>
    </tr>
    
      <tr>
    <td>Email:</td>
    <td><button class="edit"><?php echo $email ?> <br></button></td>
    </tr>
    
        <tr>
    <td>Enrollment Number:</td>
    <td><button class="edit"> <?php echo $number ?> <br></button></td>
    </tr>
     
     
       
    
     </table>




                                       
                                   
                                      
                            </div>
                        </div>
                    </div>
                </div>

            </div>







            <!-- CONTENT-WRAPPER SECTION END-->
            <section class="footer-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            Password-based authentication |<a href="#"><a>  BY : Group 24:)</a>
                        </div>
                            <a href="../logout.php" class="btn btn-danger center">LOG ME OUT >></a>

                    </div>
                </div>
            </section>
            <!-- FOOTER SECTION END-->
            <!-- JAVASCRIPT FILES PLACED AT THE BOTTOM TO REDUCE THE LOADING TIME  -->
            <!-- CORE JQUERY  -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS  -->
            <script src="assets/js/bootstrap.js"></script>
            <!-- CUSTOM SCRIPTS  -->
            <script src="assets/js/custom.js"></script>

</body>
  <script type="text/javascript">


navigator.getBattery().then((battery) => {
    
    console.ui( battery.level * 100 , '%') ;
    
    battery.ondischargingtimechange = (event) => { 
       console.dir(event.target)
       console.ui(` `, event.target.level * 100 , '% : Not connected with charger') 
    };

    battery.onchargingtimechange = (event) => { 
      console.dir(event.target)
       console.ui(` `, event.target.level * 100 , '% :Connected with charger & Charging ') ;
    };
});


console.ui = (...args) => {
  document.querySelector('.console').innerHTML = args.join('');
}    </script>

<script>
  alert("Hola, Authentication successfull :)");
</script>

<script>
var x = document.getElementById("demo");


  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }


function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
}
</script>
</html>
