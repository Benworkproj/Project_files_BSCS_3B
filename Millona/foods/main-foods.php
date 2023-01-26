<?php

session_start();
require_once '../app/core/Redirect.php';
require_once '../app/config/env.php';
require_once '../app/config/assets_path.php';

$title = 'Foods | Mains';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_auth_user_level($_SESSION['user']['user_level'], 2, PAGE2);

require_once '../app/config/Connection.php';

// get the connection
$conn = DBConnection();

// get the food items
$sql = "SELECT * FROM main_foods_tbl";


$stmt = $conn->query($sql);

// fetch the data and return it using mysqli
$products = $stmt->fetch_all(MYSQLI_ASSOC);

// close the connection
CloseConnection($conn);

?>

<?php require_once '../app/src/includes/header.inc.php' ?>

<div class="container is-family-monospace">
    <!-- NavBar -->
    <nav id="nav" class="navbar is-transparent
        is-spaced" role="navigation" aria-label="main
        navigation">
    </nav>

    <?php require_once '../app/src/includes/foods/navbar.inc.php' ?>

    <div class='grid-container'>
        
        <?php foreach ($products as $product) { ?>
            <?php $id = $product['id'];
            $product_name = $product['food_name'];
            $price = $product['price'];
            $img = $product['img'];
            ?>

            <?php require '../app/src/includes/foods/food-content.inc.php'; ?>
        <?php } ?>

    </div>
</div>

<?php require_once '../app/src/includes/footer.inc.php' ?>
