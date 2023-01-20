<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

// redirect to the page3\form\index.php or page3\form\
redirect_authenticated_user($_SESSION['user']['user_level'] === 0, PAGE3);
redirect_authenticated_user($_SESSION['user']['user_level'] === 2, PAGE2);

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

<div class="main-panel">
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
        <div class="container-fluid">
            <div class="navbar-wrapper">
                <div class="navbar-toggle">
                    <button type="button" class="navbar-toggler">
                        <span class="navbar-toggler-bar bar1"></span>
                        <span class="navbar-toggler-bar bar2"></span>
                        <span class="navbar-toggler-bar bar3"></span>
                    </button>
                </div>
                <!-- style the header like the modern dat -->
                <a class="navbar-brand" href="javascript:;">Food House Admin</a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
                <span class="navbar-toggler-bar navbar-kebab"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navigation">

                <ul class="navbar-nav">

                    <li class="nav-item">
                        <a class="nav-link btn-rotate">

                            <img src="../public/assets/img/default-avatar.png" alt="Profile Picture" class="img-fluid rounded-circle" style="width: 30px; height: 30px;">
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->
    <div class="content">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa-solid fa-users"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="fs-6 text-success-emphasis">Total Users</p>
                                    <p class="fs-3">
                                        1,345
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <a class="btn rounded-5">
                            <i class="fa-solid fa-share"></i>
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-center icon-warning">
                                    <i class="fa-solid fa-chart-line text-danger-emphasis"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="fs-6 text-info-emphasis">Total Sales</p>
                                    <p class="fs-5">
                                        <span class="fs-6">PHP</span> 500
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <a class="btn rounded-5">
                            <i class="fa-solid fa-share"></i>
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-warning-emphasis">
                                    <i class="fa-solid fa-people-group"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="very-small-text">Total Employees</p>
                                    <p class="fs-5">23
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer ">
                        <hr>
                        <a class="btn rounded-5">
                            <i class="fa-solid fa-share"></i>
                            View
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                    <div class="card-body ">
                        <div class="row">
                            <div class="col-5 col-md-4">
                                <div class="icon-big text-dark-emphasis">
                                    <i class="fa-brands fa-product-hunt"></i>
                                </div>
                            </div>
                            <div class="col-7 col-md-8">
                                <div class="numbers">
                                    <p class="very-small-text">Total Products</p>
                                    <p class="fs-5">23
                                    <p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <hr>
                        <a href="/foodhouse/admin/product/index.php" class="btn rounded-5">
                            <i class="fa-solid fa-share"></i>
                            View
                        </a>
                        <a href="/foodhouse/admin/product/add/" class=" btn rounded-5">
                            <i class="fa-solid fa-share"></i>
                            Add +
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <!-- add a descriptive content in here  -->
        </div>

        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script> - <a href="#"> Food House</a>
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</div>




<?php require_once '../app/src/includes/admin/footer.php'; ?>