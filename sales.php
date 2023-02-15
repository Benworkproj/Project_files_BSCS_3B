<?php include 'menubar.php'; ?>
<?php include 'conn.php'; ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
<link rel="stylesheet" href="css/styles.css">
<link href="https://fonts.googleapis.com/css2?family=Your+Font+Name&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="d-flex justify-content-center mb-3">
  <a href="add_product.php" class="btn btn-primary">Add New</a>
</div>
<table class="table table-bordered table-striped">
<?php
$sql = "SELECT * FROM sales";
$result = mysqli_query($conn, $sql);

echo "<table border='1'>
<tr>
<th>ID</th>
<th>Item Name</th>
<th>Quantity</th>
<th>Price</th>
<th>Cash Given</th>
<th>Tools</th>
</tr>";

// Populate the table with data from the database
if (mysqli_num_rows($result) > 0) {
    // Output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['cash_given'] . "</td>";
        echo "<td><a href='delete_sales.php?id=" . $row['id'] . "' onclick='return confirm(\"Are you sure you want to delete this product?\");'><i class='fa fa-trash'></i></a></td>";
        echo "</td>";
        echo "</tr>";
    }
} else {
    echo "0 results";
}

echo "</table>";
?>
