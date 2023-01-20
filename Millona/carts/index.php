<?php 
session_start();
require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    } else if ($_SESSION['user']['user_level'] === '1') {
        header('Location:' . PAGE3);
    }
}

?>

<?php $title = 'Carted Items'; ?>

<?php require_once '../app/src/includes/header.inc.php' ?>

<?php require_once '../app/src/includes/footer.inc.php' ?>