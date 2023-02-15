<?php
require 'conn.php';

session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '$username' and password = '$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        if ($row['username'] == $username && $row['password'] == $password) {
            $_SESSION['username'] = $row['username'];
            $_SESSION['level'] = $row['level'];
            $_SESSION['user_id'] = $row['id'];
            header("Location: welcome.php");
        }
    }
} else {
    echo "Incorrect username or password.";
}

mysqli_close($conn);
?>
