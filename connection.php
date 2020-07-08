<?php
$servername = "localhost";
$username = "root";
$password = "";
$database_name = "crud_product_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database_name);

// Check connection
if ($conn->connect_error) {
  die("DB Connection failed: " . $conn->connect_error);
}
// echo "DB Connected successfully";
?>
