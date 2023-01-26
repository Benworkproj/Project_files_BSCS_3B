<?php
session_start();
require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';
require_once '../app/config/assets_path.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_auth_user_level($_SESSION['user']['user_level'], 2, PAGE2);

require_once '../app/core/Model.php';

$title = 'Carted Items';

$cart_model = new CartModel();

$cart_items = $cart_model->getAllProductsInCart($_SESSION['user']['user_id']);

?>

<?php require_once '../app/src/includes/header.inc.php' ?>


<div class="container is-family-monospace">
    <!-- NavBar -->

    <nav id="nav" class="navbar is-transparent
        is-spaced" role="navigation" aria-label="main
        navigation">
    </nav>
    <?php require_once '../app/src/includes/foods/navbar.inc.php' ?>

    <section class="h-100" style="background-color: #eee;">
        <!-- add a message here -->
        <?php if (isset($_SESSION['success'])) : ?>
            <div class="alert alert-success text-center">
                <?php echo $_SESSION['success'];
                unset($_SESSION['success']); ?>
            </div>
        <?php endif ?>

        <div class="container h-100 py-5">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">My Cart</h3>
                </div>
                <div class="col-10">
                    <!-- use nested looping to loop over the cart_items -->
                    <?php foreach ($cart_items as $cart_item) { ?>

                        <?php require '../app/src/includes/cart/cart-body.php'; ?>

                    <?php } ?>

                </div>

            </div>
        </div>
    </section>

    <?php require_once '../app/src/includes/footer.inc.php' ?>