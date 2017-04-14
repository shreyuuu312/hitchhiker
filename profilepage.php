<?php
session_start();
?>

<html>

        <head><title>HitchHiker - Profile</title>
<script src="validate_signup.js"></script>
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
 <li><a href="account_hp.php">Home</a></li>
  <li><a class="active" href="profilepage.php">Profile</a></li>
  <li><a href="search.php">Search</a></li>
  <li><a href="about_us.php">About us</a></li>
</ul>
</div>
<div id="page1" align="center">
<h1 style="color:white">Update Profile</h1><hr>
           <div id="signup" class="testbox" style="position:static;float:center;top:10px;bottom:5px;height:315px;width:75%;overflow:scroll">
<center>
<h1>

Skip the fields which you do not wish to update</h1>
  
              <form name="profile" action="http://localhost/profile.php" method="post">
            

<hr></hr><input id="name" type="text" placeholder="First Name" name="fname"></input>
					
		 <input id="name" type="text"  placeholder="Last Name" name="lname"></input><br>
         
		 <input id="name" type="text"  placeholder="Contact no." name="contact_no" pattern="[0-9]{10}" maxlength="10" title="10 digit number"></input> 
		
		 <input id="name" type="email"  placeholder="Email" name="email_id" title="e.g. abc@gmail.com"></input><br>
         
		<input id="name" type="password"  placeholder="Current Password" name="oldpwd" maxlength="10" minlength="3"></input>	 
   
        <input id="name" type="password"  placeholder="New Password" name="newpwd" maxlength="10" minlength="3"></input><br>
		<input id="name" type="text"  placeholder="Start location" title="where do you start your vehicle?" name="start_loc"></input>
		<input id="name" type="text"  placeholder="Destination location" title="where does your journey end?" name="dest_loc"></input><br>
        <input id="name" type="number"  placeholder="Vehicle Capacity" title="if you have a vehicle for pooling, specify its passenger capacity" name="vehicle_cap" min="0" max="7"></input>
		<input id="name" type="number"  placeholder="Proposed Fee/passenger" title="Specify the fee per passenger" name="fee"></input><br>
		Start Time: <input id="name" type="time"  title="Specify the start time of journey" name="start_time"></input>
		Return Time: <input id="name" type="time"  title="Specify the start time of return trip" name="return_time"></input><br>
        <input class="button" type="submit" value="Update">
		</form>
</div>
      </body>

    </html>