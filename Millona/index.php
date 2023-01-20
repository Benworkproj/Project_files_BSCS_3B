<?php

session_start();

require_once './app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], $LOGIN);

// redirect to the page3\form\index.php or page3\form\
redirect_authenticated_user($_SESSION['user']['user_level'] === 0, $PAGE3);
redirect_authenticated_user($_SESSION['user']['user_level'] === 1, $ADMIN);
redirect_authenticated_user($_SESSION['user']['user_level'] === 2, $PAGE2);

