<?php
session_start();
?>

<html>

        <head><title>HitchHiker - Homepage</title>

        <link rel="stylesheet" href="homepage_css.css" sheet="css/text"></link>
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
 <li><a class="active" href="#home">Home</a></li>
  <li><a href="profilepage.php">Profile</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="about_us.php">About us</a></li>
</ul>
</div>
<div id="page1" align="center">
<h1 style="color:white">Welcome Home!</h1><hr>
<h1 style="color:white;">Left side of your window has the menu which you can use to explore various functionalities of HitchHiker
<hr>
<h1 align="left" style="float:left;color:white;width:70%">Click at Search to find available carpool options<br><br>
To Update your profile details, click on profile<br><br>
To know about the developers, click on the About us tab</h2><hr>
<img style="float:right" src="carpool.jpg" width="30%"></img>
</div>
      </body>

    </html>


