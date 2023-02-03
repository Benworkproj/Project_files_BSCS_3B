<?php
  include "code.php";
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="/Webpages_overall/style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <title>Log in form</title>
</head>
<body>
  <div class="container d-flex justify-content-center align-items-center" style="min-height: 100vh">
    <form action="code.php" method="POST" class="border shadow p-3 rounded" style="width: 450px;">
      <h2 class="text-center p-3">Log in</h2>
      
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password">
      </div>
    
      <center>
      <button type="submit" name="btnLogin" class="btn btn-primary" value="login">Log In</button>
      </center>
    </form>
  </div>
</body>
</html>