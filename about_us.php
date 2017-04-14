<?php
session_start();
?>


<html>

        <head><title>HitchHiker - About us</title>

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
</input></a></div>
<div>
<ul>
 <li><a href="account_hp.php">Home</a></li>
  <li><a  href="profilepage.php">Profile</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a class="active" href="about_us.php">About us</a></li>
</ul>
</div>
<div id="page1" align="center">
<h1 style="color:white">About Us</h1><hr>
     Developers:<br><br>
<table>
  <tr>
    <th>Name</th>
    <th>Roll No.</th>
    <th>Class</th>
  </tr>
  <tr>
    <td>Rushabh Mishra</td>
    <td>14102A0070</td>
    <td>TE CMPN 1</td>
  </tr>
  <tr>
    <td>Vedant Mahabaleshwarkar</td>
    <td>14101A0062</td>
    <td>TE CMPN 1</td>
  </tr>
  <tr>
    <td>Abhishek Singh</td>
    <td>14102A0075</td>
    <td>TE CMPN 1</td>
  </tr>
  </table>
</div></body>

    </html>


