<?php

session_start();

require_once '../app/config/env.php';
require_once '../app/config/assets_path.php';
require_once '../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_cashiers_customers();

require_once '../app/src/employee/EmployeeController.class.php';

$title = 'Page 2 | Payroll System';
$errors = [];
$data = [
    // employee info
    'employee_id' => '',
    'employee_name' => '',
    'employee_department' => '',
    'employee_date_hired' => '',
    'employee_status' => '',
    'employee_civil_status' => '',
    'employee_pay_date' => '',
    'employee_img' => '',

    // basic pay
    'basicPay_rate_per_hr' => '',
    'basicPay_hrs_per_cutOff' => '',
    'basicPay_income_per_cutOff' => '',
    // total basic pay
    'total_basicpay' => '',

    // honorarium
    'hono_rate_per_hr' => '',
    'hono_hrs_per_cutOff' => '',
    'hono_income_per_cutOff' => '',
    // total honorarium
    'total_hono_pay' => '',

    // other income
    'other_income_rate_per_hr' => '',
    'other_income_num_of_hrs_per_cutOff' => '',
    'other_income_income_per_cutOff' => '',
    'total_other_income_pay' => '',

    // regular deductions
    'sss_contrib' => '0.00',
    'phil_health_contrib' => '0.00',
    'pag-ibig_contrib' =>  '100.00',
    'tax_val' => '0.00',

    // other deductions
    'sss_loan' => '',
    'pag_ibig_loan' => '',
    'fac_savings_deposit' => '',
    'fac_savings_loan' => '',
    'salary_loan' => '',
    'others' => '',

    // Summary
    'otherdeductions' => '',
    'total_deduction' => '',
    'gross_income' => '',
    'net_income' => '',

];


// if POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {


    // ===================== BASIC PAY =====================
    $data['basicPay_rate_per_hr'] = $_POST['basicPay_rate_per_hr'];
    $data['basicPay_hrs_per_cutOff'] = $_POST['basicPay_num_of_hrs_per_cutOff'];
    $data['basicPay_income_per_cutOff'] = $_POST['basicPay_income_per_cutOff'];

    // ===================== HONORARIUM =====================
    $data['hono_rate_per_hr'] = $_POST['hono_rate_per_hr'];
    $data['hono_hrs_per_cutOff'] = $_POST['hono_num_of_hrs_per_cutOff'];

    // ===================== OTHER INCOME =====================
    $data['other_income_rate_per_hr'] = $_POST['other_income_rate_per_hr'];
    $data['other_income_num_of_hrs_per_cutOff'] = $_POST['other_income_num_of_hrs_per_cutOff'];

    // ===================== REGULAR DEDUCTIONS =====================
    $data['sss_contrib'] = $_POST['sss'];
    $data['phil_health_contrib'] = $_POST['phil_health'];
    $data['pag-ibig_contrib'] = $_POST['pag-ibig'];
    $data['tax_val'] = $_POST['tax_value'];

    // ===================== OTHER DEDUCTIONS =====================
    $data['sss_loan'] = $_POST['sss_loan'];
    $data['pag_ibig_loan'] = $_POST['pag-ibig_loan'];
    $data['fac_savings_deposit'] = $_POST['fac_savings_deposit'];
    $data['fac_savings_loan'] = $_POST['fac_savings_loan'];
    $data['salary_loan'] = $_POST['salary_loan'];
    $data['others'] = $_POST['others'];

    // if generate id
    if (isset($_POST['generate_id'])) {
        $data['employee_id'] = EmployeeController::generateEmployeeId($_POST['employee_id']);
    }


     // initialize the employee controller
    $employeeController = new EmployeeController();

    if (isset($_POST['calculate'])) {


        $errors = $employeeController->validateData($data);

        if (empty($errors)) {

            // ===================== CALCULATIONS =====================

            // total basic pay
            $data['total_basicpay'] = $data['basicPay_rate_per_hr'] * $data['basicPay_hrs_per_cutOff'];

            // total honorarium
            $data['total_hono_pay'] = $data['hono_rate_per_hr'] *  $data['hono_hrs_per_cutOff'];

            // total other income
            $data['total_other_income_pay'] =
            $data['other_income_rate_per_hr'] *
            $data['other_income_num_of_hrs_per_cutOff'];

            $total_regular_deductions =
            $data['sss_contrib'] + $data['phil_health_contrib'] + $data['pag-ibig_contrib']  +  $data['tax_val'];

            $data['otherdeductions'] = $data['sss_loan'] +   $data['pag_ibig_loan'] + $data['fac_savings_deposit'] + $data['fac_savings_loan'] + $data['salary_loan'] + $data['others'];

            $data['gross_income'] =  $data['total_basicpay'];

            $data['total_deduction'] = $total_regular_deductions + $data['otherdeductions'];

            $data['net_income'] = $data['gross_income'] - $data['total_deduction'];
        }


        // echo '<pre>';
        // print_r($errors);
        // echo '</pre>';

    }
    if (isset($_POST['new'])) {
        
    }
}

?>


<?php require_once '../app/src/includes/header.inc.php'; ?>

<div class="container bg-body rounded shadow justify-content-center align-items-center font-monospace">
    <div class="display-4 text-center">
        Employee Payroll System
    </div>

    <!-- display errors in the most good way -->
    <?php if (count($errors) > 0) : ?>
        <div class="alert alert-danger">
            <?php foreach ($errors as $error) : ?>
                <li><?php echo $error; ?></li>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>

    <!-- employee id -->
    <form action=" <?= htmlspecialchars($_SERVER["PHP_SELF"]); ?> " method="post">

        <div class="form-group">
            <label for="employee_id">Employee ID</label>
            <input type="text" name="employee_id" id="employee_id" class="form-control" placeholder="Enter Employee ID" value="<?= $data['employee_id'] ?>" readonly>
        </div>

        <button type="submit" name="generate_id">Generate Your ID</button>

    </form>

    <form action="" class="bg-very-light-gray" method="POST" enctype="multipart/form-data">

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

            <button name="cancel" type="reset" class="btn btn-outline-danger">CANCEL</button>

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