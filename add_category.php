<?php include 'menubar.php'; ?>

<?php include 'style.php'; ?>

<link rel="stylesheet" href="css/styles.css">

<br/>

<form action="insert_category.php" method="post">
  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>

  <label for="date">Date:</label><br>
  <input type="date" id="date" name="date"><br><br>

  <input type="submit" value="Submit">
</form>


