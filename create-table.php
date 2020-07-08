<?php
include 'connection.php';
$product = "CREATE TABLE IF NOT EXISTS products(
  prod_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  prod_name VARCHAR(100) NOT NULL,
  prod_price INT UNSIGNED NOT NULL,
  prod_type VARCHAR(25) NOT NULL,
  prod_description TEXT NOT NULL,
  prod_img BLOB NOT NULL,
  prod_condition VARCHAR(5) NOT NULL
)";

if (mysqli_query($conn, $product)){
  echo "Products table created";
}
else{
  echo "Error in creating Product table";
}
?>
