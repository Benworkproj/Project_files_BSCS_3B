<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';

// check if the USER NOT logged in

if (isset($_SESSION['user'])) {

    switch ($_SESSION['user']['user_level']) {
        case '0':
            header('Location: ' . MAINFOODPAGE_ALT);
            break;
        case '1':
            header('Location: ' . MAINFOODPAGE_ALT);
            break;
        case 2:
            header('Location: ' . PAGE2);
            break;
        case 3:
            header('Location: ' . MAINFOODPAGE_ALT);
            break;
    }
} else {
    redirect_not_authenticated_user($_SESSION['user'], LOGIN);
}