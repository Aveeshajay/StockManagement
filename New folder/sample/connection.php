<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sample";
$port = "3308";

// Create connection
$conn = sample mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>