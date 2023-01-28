<?php
// Connect to the database
$servername = "sql307.epizy.com";
$username = "epiz_33462742";
$password = "fKNpb0UTfGHShBS";
$dbname = "epiz_33462742_test_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if (isset($_POST['submit'])) {
    $pos1_id = $_POST['pos1_id'];
    $order_summary = $_POST['order_summary'];
    $price = $_POST['price'];
    $quantity = $_POST['quantity'];
    $discount_amount = $_POST['discount_amount'];
    $discounted_amount = $_POST['discounted_amount'];
    $cash_given = $_POST['cash_given'];
    $customer_change = $_POST['customer_change'];

    // Insert the data into the database
    $sql = "INSERT INTO pos1_tbl (pos1_id, order_summary, price, quantity, discount_amount, discounted_amount, cash_given, customer_change)
    VALUES ('$pos1_id', '$order_summary', '$price', '$quantity', '$discount_amount', '$discounted_amount', '$cash_given', '$customer_change')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
        header("Location: cashier.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the connection
$conn->close();
?>
