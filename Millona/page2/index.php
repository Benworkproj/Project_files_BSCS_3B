<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/config/assets_path.php';
require_once '../app/core/Redirect.php';
require_once '../app/libs/Image.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_cashiers_customers();

require_once '../app/src/employee/EmployeeController.class.php';

$title = 'Page 2 | Payroll System';

$errors = [];
$data = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // save the data in the session
    // initialize the employee controller
    $employeeController = new EmployeeController();

    $data = $_POST;
    $data_img = $_FILES['employee_img'];

    
    // $errors = new ImageUpload($data_img);

    if (isset($_POST['calculate'])) {
        $errors = $employeeController->validateData($data);

        if (empty($errors)) {

            echo "<pre>";
            echo $data_img['name'];
            echo "</pre>";

            $data['pag-ibig'] = 100;
            // ===================== CALCULATIONS =====================

            // total basic pay
            $data['basicPay_income_per_cutOff'] = $data['basicPay_rate_per_hr'] * $data['basicPay_num_of_hrs_per_cutOff'];

            // total honorarium
            $data['total_hono_pay'] = $data['hono_rate_per_hr'] * $data['hono_num_of_hrs_per_cutOff'];

            // total other income
            $data['total_other_income_pay'] = $data['other_income_rate_per_hr'] * $data['other_income_num_of_hrs_per_cutOff'];


            // calculate phil health contirbutaion for 2023
            $data['phil_health'] = $data['basicPay_income_per_cutOff'] * 0.0275;

            // calculate sss contribution for 2023
            if ($data['basicPay_income_per_cutOff'] <= 10000) {
                $data['sss'] = $data['basicPay_income_per_cutOff'] * 0.11;
            } else {
                $data['sss'] = 10000 * 0.11;
            }

            // calculate income tax contribution for 2023
            if ($data['basicPay_income_per_cutOff'] <= 250000) {
                $data['tax_value'] = 0;
            } else if ($data['basicPay_income_per_cutOff'] <= 400000) {
                $data['tax_value'] = ($data['basicPay_income_per_cutOff'] - 250000) * 0.2;
            } else if ($data['basicPay_income_per_cutOff'] <= 800000) {
                $data['tax_value'] = ($data['basicPay_income_per_cutOff'] - 400000) * 0.25 + 30000;
            } else if ($data['basicPay_income_per_cutOff'] <= 2000000) {
                $data['tax_value'] = ($data['basicPay_income_per_cutOff'] - 800000) * 0.3 + 130000;
            } else if ($data['basicPay_income_per_cutOff'] <= 8000000) {
                $data['tax_value'] = ($data['basicPay_income_per_cutOff'] - 2000000) * 0.32 + 490000;
            } else {
                $data['tax_value'] = ($data['basicPay_income_per_cutOff'] - 8000000) * 0.35 + 2410000;
            }

            // total regular deductions
            $total_regular_deductions = $data['sss'] + $data['phil_health'] + $data['pag-ibig'] + $data['tax_value'];

            // total other deductions
            $total_other_deductions = $data['sss_loan'] + $data['pag-ibig_loan'] + $data['fac_savings_deposit'] + $data['fac_savings_loan'] + $data['salary_loan'] + $data['others'];

            // total income
            $total_income = $data['basicPay_num_of_hrs_per_cutOff'] + $data['total_hono_pay'] + $data['total_other_income_pay'];

            // total deductions
            $data['total_deduction'] = $total_regular_deductions  + $total_other_deductions;

            // gross income
            $data['gross_income'] = $data['basicPay_income_per_cutOff'] + $data['total_hono_pay'] + $data['total_other_income_pay'];

            // net income
            $data['net_income'] = $data['gross_income'] - $data['total_deduction'];

            // ===================== END CALCULATIONS =====================

        }
    }

    if (isset($_POST['new'])) {
        // empty data
        $errors = $employeeController->validateData($data);

    
        if (empty($errors)) {

            $image = new ImageUpload($data_img);

            $errors = $image->validateImage();

            if (empty($errors)) {

                $fileDestination = '../public/uploads/emp_img/';
                $new_img = $image->uploadImage($fileDestination);

                $data['employee_id'] = Helpers::generateRandomNumber();
                $data['employee_img'] = $new_img;

                echo "<pre>";
                print_r($data);
                echo "</pre>";

                $insertEmployee = $employeeController->addEmployee($data);

                if ($insertEmployee) {
                    $data = [];
                    redirect_to_self('?new=true');
                } else {
                    $errors['error_name'] = 'Something went wrong';
                }
            }
        }
    }

    if (isset($_POST['cancel'])) {
        // unset employee data in session
        $data = [];
        redirect_to_self('?cancel=true');
    }
}

echo "<pre>";
print_r($data);
echo "</pre>";


?>


<?php require_once '../app/src/includes/header.inc.php'; ?>

<div class="container bg-body rounded shadow justify-content-center align-items-center font-monospace">
    <div class="display-4 text-center">
        Employee Payroll System
    </div>

    <!-- display errors in the most good way -->
    <?php if (isset($errors['error_name'])) : ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul class="list-unstyled">
                <li><?= $errors['error_name']; ?></li>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>

        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="bg-very-light-gray" method="POST" enctype="multipart/form-data">

            <div class="accordion-body">

                <hr>
                <!--  First Row  -->
                <?php require_once '../app/src/includes/page2-form/1st_row.php' ?>

                <hr>
                <!-- Second Row -->
                <?php require_once '../app/src/includes/page2-form/2nd_row.php' ?>

                <hr>
                <!-- Third ROw -->
                <?php require_once '../app/src/includes/page2-form/3rd_row.php' ?>

                <hr>
                <!-- 4th Row -->
                <?php require_once '../app/src/includes/page2-form/4th_row.php' ?>

                <hr>
                <!-- 5th Row -->
                <?php require_once '../app/src/includes/page2-form/5th_row.php' ?>

            </div>

            <div class="btn-group gap-3 m-4 translate-middle-y" role="group" aria-label="Basic outlined example">

                <button name="calculate" type="submit" class="btn btn-outline-success">CALCULATE</button>

                <button name="new" type="submit" class="btn btn-outline-info">
                    New
                </button>

                <button name="cancel" type="submit" class="btn btn-outline-danger">CANCEL</button>

                <a href="<?= LOGOUT ?>" name="exit" class="btn btn-outline-danger">EXIT</a>
            </div>

        </form>
</div>


<script>
    const fileInput = document.querySelector('#file-js-example input[type=file]');
    fileInput.onchange = () => {
        if (fileInput.files.length > 0) {
            const fileName = document.querySelector('#file-js-example .file-name');
            fileName.textContent = fileInput.files[0].name;
        }
    }
</script>
<?php require_once '../app/src/includes/footer.inc.php'; ?>