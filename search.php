<?php
session_start();
?>


<html>

        <head><title>HitchHiker - Search</title>

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
?><br>
<a href="http://localhost/logout.php"><input class="button" type="button" id="icon" style="background-color: #ff4000;padding:0px;width:60px" value="logout">
</input></a>
</div>
<div>
<ul>
 <li><a href="account_hp.php">Home</a></li>
  <li><a  href="profilepage.php">Profile</a></li>
  <li><a class="active" href="search.php">Search</a></li>
  <li><a href="about_us.php">About us</a></li>
</ul>
</div>
<div id="page1" align="center">
<h1 style="color:white">Search</h1><hr>
<div id="signup" class="testbox" style="position:relative;float:center;top:10px;color:black;width:60%">
<center>
<h1>Search Parameters</h1>

<form action="http://localhost/search_result.php" method="post">          
<hr></hr>
Pickup Loaction: <input type="text"  placeholder="e.g. Sector 17, Vashi" name="start_loc"></input><br>

Destination Loaction: <input type="text"  placeholder="e.g. VIT, Wadala" name="dest_loc"></input><br>

No. of passengers: <input type="text" placeholder="e.g. 2/3/4" name="cap"></input><br>
    
Preferred Pickup Time: <input type="time" placeholder="e.g. 8 - 9 a.m." name="time"></input><br>
<input type="submit" class="button"  value="Search"></input>
</form>
</div>
</div>
</body>

    </html>
