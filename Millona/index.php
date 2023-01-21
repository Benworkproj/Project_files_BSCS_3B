<?php

session_start();

require_once './app/config/env.php';
require_once './app/core/Redirect.php';


if (isset($_SESSION['user'])) {

    switch ($_SESSION['user']['user_level']) {
        case '0':
            header('Location: '. PAGE3);
            break;
        case '1':
            header('Location: '. ADMIN);
            break;
        case '2':
            header('Location: .' .PAGE2);
            break;
    }

} else{
    redirect_not_authenticated_user($_SESSION['user'], LOGIN);
}