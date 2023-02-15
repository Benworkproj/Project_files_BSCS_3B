<?php include 'conn.php'; ?>
<?php include 'style.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
    <title>Inventory</title>
</head>
<body>

<div class="sidenav">
  <a href="home.php">Home</a>
  <button class="dropdown-btn">User Management
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="groups.php">Manage Groups</a>
    <a href="users.php">Manage Users</a>
  </div>
  <button class="dropdown-btn">Products
    <i class="fa fa-caret-down"></i>
  </button>
  <div class="dropdown-container">
    <a href="products.php">Manage Products</a>
    <a href="add_product.php">Add Products</a>
  </div>
  <a href="categories.php">Category </a>
  <a href="sales.php">Sales </a>
  <a href="#contact"></a>
  <a href="#contact"></a>
  <a href="#contact"></a>
  <!-- still no session -->
</div> 
</div>
</form>


<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>

  </body>
</html>