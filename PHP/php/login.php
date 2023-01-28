<?php

session_start();

include "db_conn.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);
    $role = validate($_POST['role_id']);

    if (empty($uname)) {

        header("Location: index.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: index.php?error=Password is required");

        exit();

    }else{
      $sql = "SELECT role_id FROM users WHERE username='$uname' AND password='$pass'";
      $result = $conn->query($sql);
      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $role = $row["role_id"];
        }


        $_SESSION["username"] = $username; //set session variable
        $_SESSION["role_id"] = $role; //set session variable

        //redirect to appropriate page based on role
        if ($role == "01") {
          header("Location: home0.php");
        } elseif ($role == "10") {
          header("Location: employeelist_HR.php");
        } else {
          header("Location: pos_EMP.php");
        }
      } else {
        header ("Location: index.php?error=Incorect Username or password.");
      }
      $conn->close();


}
}
?>
