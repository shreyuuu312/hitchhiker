<?php
session_start();

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

$name = $_POST["fname"];
$last = $_POST["lname"];
$email = $_POST["email_id"];
$cont = $_POST["contact_no"];
$old_pass = $_POST["oldpwd"];
$pass = $_POST["newpwd"];
$id = $_SESSION['id'];
$start_loc = $_POST["start_loc"];
$dest_loc = $_POST["dest_loc"];
$start_time = $_POST["start_time"];
$return_time = $_POST["return_time"];
$vehicle_cap = $_POST["vehicle_cap"];
$fee = $_POST["fee"];

if($name != ""){
	$sql = "UPDATE accinfo SET fname = '$name' WHERE id = $id";
	$conn->query($sql);
}

if($last != ""){
	$sql = "UPDATE accinfo SET lname = '$last' WHERE id = $id";
	$conn->query($sql);
}

if($email != ""){
	$sql = "UPDATE accinfo SET email_id = '$email' WHERE id = $id";
	$conn->query($sql);
}

if($cont != ""){
	$sql = "UPDATE accinfo SET contact_no = '$cont' WHERE id = $id";
	$conn->query($sql);
}

if($pass != "" && $old_pass != "" && $pass != $old_pass){
	$sql = "UPDATE accinfo SET pwd = '$pass' WHERE id = $id";
	$conn->query($sql);
}

if($start_loc != ""){
	$sql = "UPDATE accinfo SET start_loc = '$start_loc' WHERE id = $id";
	$conn->query($sql);
}

if($dest_loc != ""){
	$sql = "UPDATE accinfo SET dest_loc = '$dest_loc' WHERE id = $id";
	$conn->query($sql);
}

if($vehicle_cap != ""){
	$sql = "UPDATE accinfo SET vehicle_cap = '$vehicle_cap' WHERE id = $id";
	$conn->query($sql);
}

if($start_time != ""){
	$sql = "UPDATE accinfo SET start_time = '$start_time' WHERE id = $id";
	$conn->query($sql);
}

if($return_time != ""){
	$sql = "UPDATE accinfo SET return_time = '$return_time' WHERE id = $id";
	$conn->query($sql);
}

if($return_time != ""){
	$sql = "UPDATE accinfo SET fee = $fee WHERE id = $id";
	$conn->query($sql);
}



header("location:hitchhiker/account_hp.php");


$conn->close();
?>