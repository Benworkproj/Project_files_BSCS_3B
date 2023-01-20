<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    } else if ($_SESSION['user']['user_level'] === '0') {
        header('Location:' . PAGE3);
    }
}

$title = 'Dashboard';

?>

<?php require_once '../app/src/includes/admin/header.php' ?>

<style>
    .very-small-text {
        font-size: 0.85rem;
    }

    /* cool admin background color */
    .admin-background {
        /* make admin background color more robust and unique */
        background-image: linear-gradient(315deg, #f5f5f5 0%, #e7e7e7 74%);
    }
</style>

<?php require_once '../app/src/includes/admin/panel.php' ?>

<div>
    <!-- add a descriptive content in here  -->
</div>


<?php require_once '../app/src/includes/admin/footer.php'; ?>