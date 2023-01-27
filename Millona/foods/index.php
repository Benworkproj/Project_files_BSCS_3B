<?php

session_start();
require_once '../app/core/Redirect.php';
require_once '../app/config/env.php';
require_once '../app/config/assets_path.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_auth_user_level($_SESSION['user']['user_level'], 2, PAGE2);

require_once '../app/core/Model.php';
require_once '../app/src/cart/CartController.php';

$title = 'Foods | Mains';

$base_product_model = new BaseProductModel();
$products = $base_product_model->getAllProducts();
$data = [];

$cart = new CartController();
$user_id = $_SESSION['user']['user_id'];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['addToCart'])) {
        $cart_model = new CartModel();

        $product_id = $_POST['product_id'];

        $errors = $cart->checkCartExist($user_id, $product_id);

        if (empty($errors)) {

            $addedToCart = $cart_model->addToCart($product_id, $user_id);

            if ($addedToCart) {
                $food_name = $_POST['food_name'];
                $errors['success'] = "$food_name has been added to cart";
            }
        }
    }

    // if (isset($_POST['selectBtn']))
    // {
    //     $data = $_POST;

    //     $_SESSION['item'] = $data;

    //     header('Location: ' . PAGE3);
        
    // }
}

?>


<?php require_once '../app/src/includes/header.inc.php' ?>

<div class="container is-family-monospace">
    <!-- NavBar -->
    <nav id="nav" class="navbar is-transparent
        is-spaced" role="navigation" aria-label="main
        navigation">
    </nav>

    <?php require_once '../app/src/includes/foods/navbar.inc.php' ?>

    <?php if (isset($errors['error_message'])) : ?>
        <div class="alert alert-info text-center">
            <?php echo $errors['error_message'];
            unset($errors['error_message']); ?>
        </div>
    <?php elseif (isset($errors['success'])) : ?>
        <div class="alert alert-success text-center">
            <?php echo $errors['success'];
            unset($errors['success']); ?>
        </div>
    <?php endif ?>

    <div class='grid-container'>
        <?php foreach ($products as $product) { ?>
            <?php
            $id = $product['id'];
            $food_name = $product['food_name'];
            $price = $product['price'];
            $img = $product['img'];
            ?>
            <?php require '../app/src/includes/foods/food-content.inc.php'; ?>

        <?php } ?>
    </div>
</div>

<?php require_once '../app/src/includes/footer.inc.php' ?>