<!-- logout -->
<?php
session_start();
require_once '../app/src/auth/UserController.class.php';

// redirect to login page if not logged in
if (!isset($_SESSION['user'])) {
    header('location: /foodhouse/auth/login.php');
}

$user = UserController::logout();
header('location: /foodhouse/auth/login.php');