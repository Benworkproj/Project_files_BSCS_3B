<?php include 'menubar.php'; ?>
<?php include 'conn.php'; ?>
<?php include 'style.php'; ?>

<link rel="stylesheet" href="layouts/styles.css">

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title></title>
</head>
<body>
  <div class="container mt-5">
    <table class="table table-bordered">
      <thead class="thead-light">
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Password</th>
          <th>User Level</th>
        </tr>
      </thead>
      <tbody>
        <?php
          $sql = "SELECT * FROM users";
          $result = mysqli_query($conn, $sql);
          if (mysqli_num_rows($result) > 0) {
              while($row = mysqli_fetch_assoc($result)) {
                  echo "<tr>";
                  echo "<td>" . $row['id'] . "</td>";
                  echo "<td>" . $row['username'] . "</td>";
                  echo "<td>" . $row['password'] . "</td>";
                  echo "<td>" . $row['level'] . "</td>";
                  echo "</tr>";
              }
          } else {
              echo "0 results";
          }
        ?>
      </tbody>
    </table>
  </div>
</body>
</html>



