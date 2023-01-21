<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/src/auth/UserController.class.php';
require_once '../app/config/assets_path.php';
require_once '../app/core/Redirect.php';

redirect_all();


$title = 'Auth | Login Account'; 

//handle login
if (isset($_POST['submit'])) {

    $username = $_POST[USERNAME[0]];
    $password = $_POST[PASSWORD[0]];

    // $user = $auth->login($username, $password); // this must only return boolean values in order to perform the condition below
    $user = new UserController($username, $password);
    $errors = $user->validateLoginForm();

    if(empty($errors)) {
        $user->login();
    } 
}

?>

<?php ?>


<?php require_once '../app/src/includes/auth/header.inc.php' ?>

<div class="center">
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <h1>Login</h1>
        <!-- output login fail error -->
        <?php if (isset($errors['login_fail'])): ?>
            <div class="error">
                <?= $errors['login_fail'] ?>
            </div>
        <?php endif ?>

        <div class="txt_field">
            <input type="text" name="<?= USERNAME[0] ?>" required autocomplete="off">
            <span></span>
            <label><?= USERNAME[1] ?></label>
        </div>

        <div class="txt_field">
            <input type="password" name="<?= PASSWORD[0] ?>" required>
            <span></span>
            <label><?= PASSWORD[1] ?></label>
        </div>

        <div class="pass">Forgot Password?</div>

        <input type="submit" name="submit" value="Login">

        <div class="signup_link">
            don't have an account? <a href="register.php">Signup</a>
        </div>
    </form>
</div>

<?php require_once '../app/src/includes/auth/footer.inc.php' ?>