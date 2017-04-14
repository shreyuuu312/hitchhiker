<?php
session_start();
?>
<html>

        <head><title>HitchHiker - Profile</title>
<script src="validate_signup.js"></script>
        <link rel="stylesheet" href="hitchhiker/homepage_css.css" sheet="css/text"></link>
        	<link rel="icon" href="hitchhiker_logo.png"></link>

        
	</head>

        <body class="homepage-back">

<div class="title-img" id="homepage-title">Welcome
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
$a = $_SESSION['id'];

if(!isset($a)){
	die("Login to continue");
	return;
}
$usr_name = "SELECT fname FROM accinfo where id = $a";
$result = $conn->query($usr_name); 
$row = $result->fetch_assoc();
	echo $row['fname'];
?>
<br>
<a href="http://localhost/logout.php"><input class="button" type="button" id="icon" style="background-color: #ff4000;padding:0px;width:60px" value="logout">
</input></a>
</div>
<div>

<ul>
 <li><a href="hitchhiker/account_hp.php">Home</a></li>
  <li><a href="hitchhiker/profilepage.php">Profile</a></li>
  <li><a  class="active" href="hitchhiker/search.php">Search</a></li>
  <li><a href="hitchhiker/about_us.php">About us</a></li>
</ul>
</div>
<div id="page1" align="center">
<h1 style="color:white">Update Profile</h1><hr>
           <div id="signup" class="testbox" style="position:static;float:center;top:10px;bottom:5px;height:315px;width:75%;overflow:scroll">
<center>
<h1>Search Result</h1>
<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "accdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$start_loc = $_POST["start_loc"];
$dest_loc = $_POST["dest_loc"];
$time = $_POST["time"];
$cap = $_POST["cap"];

$sql = "SELECT * FROM accinfo WHERE ((start_loc = '$start_loc' AND dest_loc = '$dest_loc') AND vehicle_cap >= $cap)";
$db = $conn->query($sql);

if($db->num_rows == 0){
	echo "<h1>We're sorry, there's no car pool option available for your mentioned preference at the moment :(</h1>";
}
else{
while($row = $db->fetch_assoc()){
	echo "Owner Name:"." ".$row['fname']." ".$row['lname']."<br>Owner car capacity:"." ".$row['vehicle_cap']."<br>Owner's preferred start time for journey:"." ".$row['start_time']."<br>Owner's preferred start time for return trip:"." ".$row['return_time']."<br>Contact no. of owner:"." ".$row['contact_no']."<br>Fee per passenger:"." ".$row['fee']."<hr>";
}
}
$conn->close();
?>
</div>
</body>
</html>
