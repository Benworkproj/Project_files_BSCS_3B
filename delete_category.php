<?php
$conn = mysqli_connect("localhost", "root", "", "echok");

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Delete the product with the given id
    $sql = "DELETE FROM categories WHERE id='$id'";
    mysqli_query($conn, $sql);
}

// Redirect back to the products page
header("Location: categories.php");
?>
