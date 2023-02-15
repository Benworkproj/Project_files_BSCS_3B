<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}

if ($_SESSION['level'] == 1) {
    header("Location: admin.php");
} elseif ($_SESSION['level'] == 2) {
    header("Location: superadmin.php");
} else {
    header("Location: user.php");
}
?>
