<!-- logout -->
<?php
session_start();
require_once '../app/src/auth/UserController.class.php';

// redirect to login page if not logged in
redirect_not_authenticated_user($_SESSION['user'], LOGIN);


$user = UserController::logout();
redirect_not_authenticated_user($_SESSION['user'], LOGIN);