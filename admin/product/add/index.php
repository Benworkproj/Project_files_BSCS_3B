<?php

session_start();

require_once '../../../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], '/foodhouse/auth/login.php');


require_once '../../../app/config/env.php';
require_once '../../../app/config/Connection.php';

$title = "Add Product";

// if form is submitted
if (isset($_POST['submit'])) {
    // get form data
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    $product_img = $_FILES['product_img'];

    $img_name = $_FILES['product_img']['name'];
    $img_tmp = $_FILES['product_img']['tmp_name'];
    $img_size = $_FILES['product_img']['size'];
    $img_error = $_FILES['product_img']['error'];
    $img_type = $_FILES['product_img']['type'];

    // validate form data
    $errors = [];

    // if (empty($product_name)) {
    //     $errors['error_name'] = 'Product name is required';
    // }

    // if (empty($product_price)) {
    //     $errors['error_name'] = 'Product price is required';
    // }

    // if (empty($product_img)) {
    //     $errors['error_name'] = 'Product image is required';
    // }

    $file_ext = explode('.', $img_name);
    $actualExt = strtolower(end($file_ext));

    // allowed file ext
    $allowed_ext = array('jpg', 'jpeg', 'png');

    if (in_array($actualExt, $allowed_ext)) {
        if ($img_error === 0) {
            if ($img_size < 1000000) {

                $new_img = time() . '_' . $actualExt;
                $fileDestination = '../../../public/uploads/' . $new_img;
                move_uploaded_file($img_tmp, $fileDestination);

                $conn = DBConnection();

                $sql = "INSERT INTO main_foods_tbl (food_name, price, img) VALUES ('$product_name', '$product_price', '$new_img')";

                $result = $conn->query($sql);

                if ($result) {
                    // $_SESSION['success'] = 'Product added successfully';
                    header('location: /foodhouse/admin/product');
                } else {
                    // $_SESSION['error'] = 'Something went wrong';
                    echo 'Something went wrong';
                    header('location: /foodhouse/admin/product/add');
                }
            } else {
                $errors['error_name'] = 'File size too large';
            }
        } else {
            $errors['error_name'] = 'There was an error uploading your file';
        }
    } else {
        $errors['error_name'] = 'You cannot upload files of this type';
    }
}
?>

<?php require_once '../../../app/src/includes/admin/header.php' ?>


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

<!-- add product form -->
<div class="container-fluid admin-background">

    <!-- back button -->
    <div class="row">
        <div class="col-md-12">
            <a href="/foodhouse/admin/product" class="btn btn-primary">Back</a>
        </div>
    </div>


    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Product</h4>
                </div>

                <div class="card-body">
                    <?php require_once '../../../app/src/includes/admin/product/form.php' ?>
                </div>
            </div>
        </div>
    </div>
</div>


<?php require_once '../../../app/src/includes/admin/footer.php' ?>