<?php
$servername = "localhost";
$username = "root";
$password = "Sid@222324";
$database="manndi";
// Create connection
$conn = new mysqli($servername, $username, $password,$database);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

?>