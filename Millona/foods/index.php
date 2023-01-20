<?php

session_start();

require_once '../app/core/Redirect.php';

// check if the USER NOT logged in
redirect_not_authenticated_user($_SESSION['user'], $LOGIN);

redirect_authenticated_user($_SESSION['user']['user_level'] === 2, $PAGE2);
