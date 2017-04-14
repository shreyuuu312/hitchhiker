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

$email = $_POST["email_id"];
$pass = $_POST["pwd"];

$sql = "SELECT id FROM accinfo where email_id = '$email'";
$sql = $conn->query($sql);
if ($sql->num_rows == 0){
	echo "The email address '" . $_POST['email_id'] ."' is not registered<br>Either register from another email or signup from a new account.";
	return;
}
$sql = "SELECT id FROM accinfo where (email_id = '$email' AND pwd = '$pass')";
$sql = $conn->query($sql);
if ($sql->num_rows == 1) {
	$temp_id = $sql->fetch_assoc();
    $_SESSION['id'] = $temp_id['id'];
	header("location:hitchhiker/account_hp.php");
} else {
	echo "Incorrect email id or password<br>Please go back and login from correct credentials :)";
}

$conn->close();
?>