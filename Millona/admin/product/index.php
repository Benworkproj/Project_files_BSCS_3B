<?php

session_start();

require_once '../../app/config/env.php';
require_once '../../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

// redirect to the page3\form\index.php or page3\form\
redirect_authenticated_user(
    $_SESSION['user']['user_level'] === 1, PRODUCT_PATH['list']
);

if (isset($_SESSION['user'])) {
   if ($_SESSION['user']['user_level'] === '0') {
        header('Location:' . PAGE3);
    } else if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    }
}
