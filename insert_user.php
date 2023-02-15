<?php
// Retrieve form data
$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$cash_given = $_POST['cash_given'];
$conn = mysqli_connect("localhost", "root", "", "echok");

// Insert data into the database
$sql = "INSERT INTO sales (name, quantity, price, cash_given)
VALUES ('$name', '$quantity', '$price', '$cash_given')";

mysqli_query($conn, $sql);
header("Location: user.php");
?>