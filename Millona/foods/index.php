<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';

// check if the USER NOT logged in
redirect_not_authenticated_user($_SESSION['user'], LOGIN);

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    }
}
