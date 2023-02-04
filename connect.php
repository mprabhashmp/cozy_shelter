<?php

//databse connection
$host = "localhost";
$userName = "root";
$password = "1234";
$dbName = "cozyshelter";
// Create database connection
$conn = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>
