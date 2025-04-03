<?php
// Database connection settings
$servername = "localhost";
$username = "root";
$password = "";
$database = "assignments";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
}

// SQL query to fetch data from the table
$sql = "SELECT * FROM Studentinfo";
$result = $conn->query($sql);

?>
