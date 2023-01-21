<?php

session_start();

require_once './app/core/Redirect.php';

// check if the USER NOT logged in
redirect_authenticated_user($_SESSION['user'], '/foodhouse/foods/main-foods.php');
redirect_not_authenticated_user($_SESSION['user'], '/foodhouse/auth/login.php');
