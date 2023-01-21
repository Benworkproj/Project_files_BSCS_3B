<?php 
session_start();
require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';
require_once '../app/config/assets_path.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_auth_user_level($_SESSION['user']['user_level'], 2, PAGE2);

?>

<?php $title = 'Carted Items'; ?>

<?php require_once '../app/src/includes/header.inc.php' ?>

<?php require_once '../app/src/includes/footer.inc.php' ?>