<?php

//databse connection
$host = "localhost";
$userName = "root";
$password = "abc@123abc";
$dbName = "shelter";
// Create database connection
$link = new mysqli($host, $userName, $password, $dbName);
// Check connection
if ($link->connect_error) {
die("Connection failed: " . $link->connect_error);
}
?>
