<?php

session_start();

require_once '../../app/config/env.php';

$title = 'Page 3 Form';

// check if the USER NOT logged in
if (!isset($_SESSION['user'])) {
    header('location: /foodhouse/auth/login.php');
}

if (isset($_POST['submit'])) {

    /* 
    Form values: 
        foodName
        quantityOfOrder
        foodPrice

        discountAmount
        discountedAmount

        totalQuantity
        totalDiscountedGiven
        totalDiscountedAmount

        changeValue
    */

    $foodName = $_POST['foodName'];
    $quantityOfOrder = $_POST['quantityOfOrder'];
    $foodPrice = $_POST['foodPrice'];

    $discountAmount = $_POST['discountAmount'];
    $discountedAmount = $_POST['discountedAmount'];

    $totalQuantity = $_POST['totalQuantity'];
    $totalDiscountedGiven = $_POST['totalDiscountedGiven'];
    $totalDiscountedAmount = $_POST['totalDiscountedAmount'];

    $cashValue = $_POST['cashValue'];
    $changeValue = $_POST['changeValue'];

    // echo all the values
    echo $foodName . '<br>';
    echo $quantityOfOrder . '<br>';
    echo $foodPrice . '<br>';
    echo $discountAmount . '<br>';
    echo $discountedAmount . '<br>';
    echo $totalQuantity . '<br>';
    echo $totalDiscountedGiven . '<br>';
    echo $totalDiscountedAmount . '<br>';
    echo $cashValue . '<br>';
    echo $changeValue . '<br>';
}

?>

<?php require_once '../../app/src/includes/header.inc.php' ?>

<div class="container is-fluid m-3 is-family-monospace">
    <!-- Navbar -->
    <?php require_once '../../app/src/includes/page3-form/navbarForPage3.inc.php' ?>

    <!-- header -->
    <?php require_once '../../app/src/includes/page3-form/form-header.inc.php' ?>

    <div class="columns">
        <div class="column">
            <div class="content ">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="form" class="mr-3">

                    <!-- form body -->
                    <?php require_once '../../app/src/includes/page3-form/form-body.inc.php' ?>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../app/src/includes/footer.inc.php' ?>