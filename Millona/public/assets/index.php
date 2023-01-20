<?php

session_start();

require_once '../../app/core/Redirect.php';
require_once '../../app/config/env.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);


if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '1') {
        header('Location:' . ADMIN);
    } else if ($_SESSION['user']['user_level'] === '0') {
        header('Location:' . PAGE3);
    } else if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    }
}