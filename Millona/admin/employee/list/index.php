<?php
session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';
require_once '../../../app/src/employee/EmployeeController.class.php';
require_once '../../../app/core/Redirect.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);
redirect_cashiers_customers();

$title = 'Employee List';

$employeeController = new EmployeeController();

$employees = $employeeController->getAllEmployee();


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
                </div>
            </div>

        </div>
    </div>

    <div class="bg-image h-100 tbl-bg-image">
        <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.35);">

            <div class="container">
                <?php if (isset($_GET['message'])) : ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong> <?= $message ?>!</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>

                <div class="d-flex justify-content-between align-items-center">
                    <a href="<?= PAGE2 ?>" class="btn btn-primary btn-sm">Add Employee</a>
                    <a href="<?= LOGOUT ?>" class="btn btn-light btn-sm">Sign out</a>
                </div>

                <div class="row justify-content-center">
                    <div class="col-12">
                        <div class="table-responsive bg-white" data-mdb-perfect-scrollbar="true" style="position: relative; width: auto;">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">EMPLOYEES</th>
                                        <th scope="col">STATUS</th>
                                        <th scope="col">DESIGNATION</th>
                                        <th scope="col">DEPARTMENT</th>
                                        <th scope="col">GROSS INCOME</th>
                                        <th scope="col">NET INCOME</th>
                                        <th scope="col">TOTAL DEDUCTION</th>
                                        <th scope="col">ACTIONs</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <?php if ($employees) : ?>
                                        <?php foreach ($employees as $employee) : ?>

                                            <tr>

                                                <!-- Emp basic info -->
                                                <td>
                                                    <div class="d-flex align-items-center">
                                                        <img src="<?= UPLOADS_PATH . '/emp_img' . '/' . $employee['emp_img'] ?>" alt="" style="width: 45px; height: 45px" class="rounded-circle" />

                                                        <div class="ms-3">
                                                            <p class="fw-bold mb-1">
                                                                <?= $employee['f_name'] ?>

                                                                <?= $employee['l_name'] ?>
                                                            </p>
                                                            <!-- <p class="text-muted mb-0">john.doe@gmail.com</p> -->
                                                        </div>
                                                    </div>
                                                </td>

                                                <!-- Emp statuses  -->
                                                <td>
                                                    <p class="fw-normal mb-1">
                                                        Civil Status:
                                                        <span class="text-danger"><?= strtoupper($employee['emp_civil_status']) ?>
                                                        </span>
                                                    </p>
                                                    <p class="fw-normal mb-1">
                                                        Employee Position:
                                                        <span class="text-dark">
                                                            <?= strtoupper($employee['emp_status']) ?>
                                                        </span>
                                                    </p>
                                                </td>

                                                <!-- Emp DESIGNATION -->
                                                <td>
                                                    <span class="badge badge-success rounded-pill d-inline">
                                                        <?= $employee['designation'] ?>
                                                    </span>
                                                </td>

                                                <td>
                                                    <p class="text-muted mb-0">
                                                        <?= $employee['department'] ?> Department
                                                    </p>
                                                </td>

                                                <!-- Emp GROSS INCOME -->
                                                <td>
                                                    <span class="badge badge-info rounded-pill d-inline">
                                                        <?= $employee['gross_income'] ?>
                                                    </span>
                                                </td>

                                                <!-- Net Income -->
                                                <td>
                                                    <span class="badge badge-info rounded-pill d-inline">
                                                        <?= $employee['net_income'] ?>
                                                    </span>
                                                </td>

                                                <!-- Total Deduction -->
                                                <td>
                                                    <span class="badge badge-danger rounded-pill d-inline">
                                                        <?= $employee['total_deduction'] ?>
                                                    </span>
                                                </td>

                                                <td>

                                                    <a href="<?= EMPLOYEE_PATH['edit'] ?>/index.php?emp_id=<?= $employee['emp_id'] ?>" class="btn btn-link btn-sm btn-rounded">
                                                        Edit or View
                                                    </a>

                                                    <a href="<?= EMPLOYEE_PATH['delete'] ?>/index.php?emp_id=<?= $employee['emp_id'] ?>" class="btn btn-link btn-sm btn-rounded">
                                                        Delete
                                                    </a>
                                                </td>
                                            </tr>


                                        <?php endforeach; ?>

                                    <?php else : ?>
                                        <tr>
                                            <td colspan="8" class="text-center">No Employee Found</td>
                                        </tr>

                                    <?php endif; ?>
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