<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/src/auth/UserController.class.php';

// redirect to the page3\form\index.php or page3\form\
redirect_authenticated_user($_SESSION['user']['user_level'] === 0, PAGE3);
redirect_authenticated_user($_SESSION['user']['user_level'] === 1, ADMIN);
redirect_authenticated_user($_SESSION['user']['user_level'] === 2, PAGE2);

$title = 'Auth | Register Account';

// check if the user has already logged in
if (isset($_SESSION['user'])) {
    header('location: /foodhouse/foods/main-foods.php');
}

// handle form submission
if (isset($_POST['submit'])) {

    $username = $_POST[USERNAME[0]];
    $user_password = $_POST[PASSWORD[0]];
    $confirm_password = $_POST['confirm-password'];

    $user = new UserController($username, $user_password);
    $user->set_confirm_password($confirm_password);

    $errors = $user->validateFormRegister();

    if (empty($errors)) {
        $user->register();
    }
}

?>

<?php require_once '../app/src/includes/auth/header.inc.php' ?>

<div class="center">
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

        <h1>Register</h1>
        <div class="txt_field">
            <input type="text" name="<?= USERNAME[0] ?>" required>
            <span></span>
            <label><?= USERNAME[1] ?></label>
        </div>
        <!-- output username error -->
        <?php if (isset($errors['username'])) : ?>
            <div class="error">
                <?= $errors['username'] ?>
            </div>
        <?php endif ?>

        <div class="txt_field">
            <input type="password" name="<?= PASSWORD[0] ?>" required>
            <span></span>
            <label><?= PASSWORD[1] ?></label>
        </div>
        <!-- output password error -->
        <?php if (isset($errors['user_password'])) : ?>
            <div class="error">
                <?= $errors['user_password'] ?>
            </div>
        <?php endif ?>

        <div class="txt_field">
            <input type="password" name="confirm-password" required>
            <span></span>
            <label>Confirm Password</label>
        </div>

        <!-- output confirm password error -->
        <?php if (isset($errors['confirm_password'])) : ?>
            <div class="error">
                <?= $errors['confirm_password'] ?>
            </div>
        <?php endif ?>


        <input type="submit" name="submit" value="Register">

        <div class="signup_link">
            already have an account? <a href="login.php">Login</a>
        </div>
    </form>
</div>


<?php require_once '../app/src/includes/auth/footer.inc.php' ?>