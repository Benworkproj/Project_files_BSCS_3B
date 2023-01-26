<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/config/assets_path.php';
require_once '../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_hr_accoutant();


require_once '../app/src/sales/SalesController.class.php';

$title = 'Page 3 Form';
$error = [];
$data = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
    $data = $_POST;

    if (isset($_POST['new'])) {

        $salesController = new SalesController($data);

        $error = $salesController->validateSalesData();


        if (empty($error)) {
            $salesController->addSales();

            $data = [];
            $error = [];

            redirect_with_params(SALES_PATH['list'], ['message' => 'Sales added successfully']);
        }

        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }
}


?>

<?php require_once '../app/src/includes/header.inc.php' ?>

<div class="container is-fluid m-3 is-family-monospace">
    <!-- Navbar -->
    <?php require_once '../app/src/includes/page3-form/navbarForPage3.inc.php' ?>

    <!-- header -->
    <?php require_once '../app/src/includes/page3-form/form-header.inc.php' ?>

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
                    <?php require_once '../app/src/includes/page3-form/form-body.inc.php' ?>

                    <!-- the new button is the submit button -->
                </form>
            </div>
        </div>
    </div>
</div>

<?php require_once '../app/src/includes/footer.inc.php' ?>