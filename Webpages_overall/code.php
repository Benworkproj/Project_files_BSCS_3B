<?php
  session_start();
  require_once "db_connect.php";

  $message = "Invalid Username or Password";
  $role = "";
if (isset($_POST["btnLogin"])){
  $username = $_POST["username"];
  $password = $_POST["password"];
  
  $query = "SELECT * FROM login_form WHERE username='$username' AND password='$password'";
  $result = mysqli_query($conn,$query);
  
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($row['role'] == "admin") {
        $_SESSION["user"] = $row["username"];
        $_SESSION["role"] = $row["role"];
        header("Location: /Webpages_overall/loginwebapages/login_admin/adminpage.php");
      }else if ($row['role'] == "hr") {
        $_SESSION["user"] = $row["username"];
        $_SESSION["role"] = $row["role"];
        header("Location: /Webpages_overall/loginwebapages/login_hr/hrpage.php");
      }else if ($row['role'] == "cashier1") {
        $_SESSION["user"] = $row["username"];
        $_SESSION["role"] = $row["role"];
        header("Location:  /Webpages_overall/loginwebapages/login_cashier1/cashier1page.php");
      }else if ($row['role'] == "cashier2") {
        $_SESSION["user"] = $row["username"];
        $_SESSION["role"] = $row["role"];
        header("Location: /Webpages_overall/loginwebapages/login_cashier2/cashier2page.php");
      }else {
        header("Location: /login_form.php");
      }
    }
  }else {
    header("Location: /Webpages_overall/login_form.php");
  }
}
?>