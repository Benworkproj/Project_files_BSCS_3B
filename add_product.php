<?php include 'menubar.php'; ?>
<?php include 'style.php'; ?>

<link rel="stylesheet" href="css/styles.css">


<br/>
<?php
$conn1 = mysqli_connect("localhost", "root", "", "echok");

$sql = "SELECT name FROM categories";
$result = mysqli_query($conn1, $sql);
?>

<form action="insert_product.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="quantity">Quantity:</label><br>
  <input type="text" id="quantity" name="quantity"><br>

  <label for="buy_price">Buy Price:</label><br>
  <input type="text" id="buy_price" name="buy_price"><br>

  <label for="sale_price">Sale Price:</label><br>
  <input type="text" id="sale_price" name="sale_price"><br>

  <label for="date">Date:</label><br>
  <input type="date" id="date" name="date"><br><br>

  <select name="category">
    <?php
    while ($row = mysqli_fetch_array($result)) {
      echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
    }
    ?>
  </select>

  <input type="submit" value="Submit">
</form>


