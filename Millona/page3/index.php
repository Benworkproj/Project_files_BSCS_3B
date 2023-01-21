<?php

session_start();

require_once '../app/core/Redirect.php';

// redirect to the page3\form\index.php or page3\form\
redirect_authenticated_user($_SESSION['user'], './form/');

redirect_not_authenticated_user($_SESSION['user'], '/foodhouse/auth/login.php');