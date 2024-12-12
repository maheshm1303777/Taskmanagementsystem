<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "tms_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (mysqli_connect_errno()) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
?>
