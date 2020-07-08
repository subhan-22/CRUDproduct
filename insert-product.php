<?php include 'connection.php' ?>
<?php include 'header.php' ?>
<?php
$name = $_POST['prodName'];
$price = $_POST['prodPrice'];
$type = $_POST['prodType'];
$description = $_POST['prodDescription'];
$image = addslashes(file_get_contents($_FILES["prodImage"]["tmp_name"]));
$condition = $_POST['prodCondition'];

$insert = "INSERT INTO products (prod_name, prod_price, prod_type,  prod_description, prod_img, prod_condition)
VALUES ('$name', '$price', '$type', '$description', '$image', '$condition')";


if (mysqli_query($conn, $insert)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $insert . "<br>" . mysqli_error($conn);
}
?>
<?php include 'footer.php' ?>
