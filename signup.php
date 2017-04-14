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
$pass = $_POST["pwd"];

$sql = "SELECT * FROM accinfo where email_id = '$email'";

if (($conn->query($sql))->num_rows > 0)
	die("The email address '" . $_POST['email_id'] ."' is already registered");

$sql = "INSERT INTO accinfo (fname, lname, email_id, contact_no, pwd)
VALUES ('$name','$last','$email','$cont','$pass')";

if ($conn->query($sql) === TRUE) {
    $_SESSION['id'] = $conn->insert_id;
	header("location:hitchhiker/account_hp.php");
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>