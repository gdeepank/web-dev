<?php
$servername = "localhost";
$username = "deepank";
$password = "deepank";
$dbname = "records";

// Create connection
$conn = new mysqli($webtech, $adhu, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$user = $_REQUEST['user'];
$pass = $_REQUEST['password'];

$sql = "INSERT INTO records (username, pass)
VALUES ($user, $pass)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();