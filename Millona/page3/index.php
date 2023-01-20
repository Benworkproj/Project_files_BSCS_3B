<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    }
}

require_once '../../app/src/sales/SalesController.class.php';


$title = 'Page 3 Form';


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
    $data = [
        'foodName' => $_POST['foodName'],
        'quantityOfOrder' => $_POST['quantityOfOrder'],
        'foodPrice' => $_POST['foodPrice'],

        'discountAmount' => $_POST['discountAmount'],
        'discountedAmount' => $_POST['discountedAmount'],

        'totalQuantity' => $_POST['totalQuantity'],
        'totalDiscountedGiven' => $_POST['totalDiscountedGiven'],
        'totalDiscountedAmount' => $_POST['totalDiscountedAmount'],

        'cashValue' => $_POST['cashValue'],
        'changeValue' => $_POST['changeValue'],
    ];


    $salesController = new SalesController($data);

    $error = $salesController->validateSalesData();

    if (empty($error)) {
        $salesController->addSales();

        // empty the foodname value and food price
        $_POST['foodName'] = '';
        $_POST['foodPrice'] = '';
    }

}

?>

<?php require_once '../../app/src/includes/header.inc.php' ?>

<div class="container is-fluid m-3 is-family-monospace">
    <!-- Navbar -->
    <?php require_once '../../app/src/includes/page3-form/navbarForPage3.inc.php' ?>

    <!-- header -->
    <?php require_once '../../app/src/includes/page3-form/form-header.inc.php' ?>

    <?php if (isset($error['error_name'])) : ?>
        <div class="notification is-danger">
            <button class="delete"></button>
            <?= $error['error_name']; ?>
        </div>
    <?php endif; ?>

    <div class="columns">
        <div class="column">
            <div class="content ">
                <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>"  id="form" class="mr-3" method='POST'>

                    <!-- form body -->
                    <?php require_once '../../app/src/includes/page3-form/form-body.inc.php' ?>

                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once '../../app/src/includes/footer.inc.php' ?>