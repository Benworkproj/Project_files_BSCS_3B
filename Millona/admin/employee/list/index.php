<?php
session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';

require_once '../../../app/core/Redirect.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);
redirect_cashiers_customers();

$title = 'Employee List';

?>


<?php require_once '../../../app/src/includes/admin/header.php' ?>

<?php if ($_SESSION['user']['user_level'] === '1') : ?>

    <?php require_once '../../../app/src/includes/admin/panel.php' ?>

<?php endif; ?>

<section class="intro">
    <!-- add a add button -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <h1 class="h3 mb-0">Employee List</h1>
                    <a href="<?= PAGE2 ?>" class="btn btn-primary btn-sm">Add Employee</a>
                </div>
            </div>
        </div>
    </div>

    <div class="bg-image h-100 tbl-bg-image">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.35);">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true" style="position: relative; width:auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">EMPLOYEES</th>
                                        <th scope="col">POSITION</th>
                                        <th scope="col">START DATE</th>
                                        <th scope="col">LAST ACTIVITY</th>
                                        <th scope="col">CONTACTS</th>
                                        <th scope="col">AGE</th>
                                        <th scope="col">ADDRESS</th>
                                        <th scope="col">SALARY</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
                                                <div class="ms-3">
                                                    <p class="fw-bold mb-1">John Doe</p>
                                                    <p class="text-muted mb-0">john.doe@gmail.com</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <p class="fw-normal mb-1">Software engineer</p>
                                            <p class="text-muted mb-0">IT department</p>
                                        </td>
                                        <td>
                                            <span class="badge badge-success rounded-pill d-inline">Active</span>
                                        </td>
                                        <td>Senior</td>
                                        <td>
                                            <button type="button" class="btn btn-link btn-sm btn-rounded">
                                                Edit
                                            </button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 
<div class="card inner_card px-4 py-2">

    <div class="div2 row py-1 px-2">

        <div class="col-7 mt-2">
            <p class="font-weight-bold mb-5 darkWhite heading"> Enjoy smart assistant around the home. </p>
            <p class="mt-3"> June 26 - August 26 </p>
        </div>

        <div class="col-5 d-flex align-items-center">

            <div class="rounded-circle d-flex align-items-center justify-content-center w-100" id="circl2">
                <img src="https://i.imgur.com/yT8K4xZ.png" height="85%" width="40%" alt="">
            </div>

        </div>
    </div>


    <div class="py-2">
        <p class="desc">
            Choose stylish gadgets from Google at great prices. Buy goods at KTC!
        </p>

        <div class="">

            <h6>
                <a href="#"> Learn more
                    <span class="rounded-circle sp1 px-2 py-0 ml-1">
                        <i class="fa fa-angle-right" aria-hidden="true"></i>
                    </span>
                </a>
            </h6>

        </div>

    </div>

</div> -->

<?php require_once '../../../app/src/includes/admin/footer.php'; ?>