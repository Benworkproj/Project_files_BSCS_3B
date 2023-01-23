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
$data = [];

// store the employee data in the session
// if (isset($_SESSION['employee_data'])) {
//     $data = $_SESSION['employee_data'];
// }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // save the data in the session
    // initialize the employee controller
    $data = $_POST;

    $employeeController = new EmployeeController();

    if (isset($_POST['calculate'])) {

        // get a;; the data from the form

        unset($data['calculate']);

        $errors = $employeeController->validateData($data);

        if (empty($errors)) {

            // ===================== CALCULATIONS =====================

            // total basic pay
            $data['total_basicpay'] = $data['basicPay_rate_per_hr'] * $data['basicPay_hrs_per_cutOff'];

            // total honorarium
            $data['total_honorarium'] = $data['hono_rate_per_hr'] * $data['hono_hrs_per_cutOff'];

            // total other income
            $data['total_other_income'] = $data['other_income_rate_per_hr'] * $data['other_income_num_of_hrs_per_cutOff'];

            // total regular deductions
            $data['total_regular_deductions'] = $data['sss_contrib'] + $data['phil_health_contrib'] + $data['pag-ibig_contrib'] + $data['tax_val'];

            // total other deductions
            $data['total_other_deductions'] = $data['sss_loan'] + $data['pag_ibig_loan'] + $data['fac_savings_deposit'] + $data['fac_savings_loan'] + $data['salary_loan'] + $data['others'];

            // total income
            $data['total_income'] = $data['total_basicpay'] + $data['total_honorarium'] + $data['total_other_income'];

            // total deductions
            $data['total_deductions'] = $data['total_regular_deductions'] + $data['total_other_deductions'];

            // net income
            $data['net_income'] = $data['total_income'] - $data['total_deductions'];

            // ===================== SAVE DATA TO SESSION =====================
            // $_SESSION['employee_data'] = $data;
        }
       

    } 

    if (isset($_POST['new']))
    {   
        // unset employee data in session
        // unset($_SESSION['employee_data']);
        // clear the data
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }

    if (isset($_POST['cancel'])) {
        // unset employee data in session
        // unset($_SESSION['employee_data']);
        $data = []; 
        redirect_to_self('?cancel=true');

    }

}

echo "<pre>";
print_r($data);
echo "</pre>";



// // if POST
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {


//     // ===================== BASIC PAY =====================
//     $data['basicPay_rate_per_hr'] = $_POST['basicPay_rate_per_hr'];
//     $data['basicPay_hrs_per_cutOff'] = $_POST['basicPay_num_of_hrs_per_cutOff'];
//     $data['basicPay_income_per_cutOff'] = $_POST['basicPay_income_per_cutOff'];

//     // ===================== HONORARIUM =====================
//     $data['hono_rate_per_hr'] = $_POST['hono_rate_per_hr'];
//     $data['hono_hrs_per_cutOff'] = $_POST['hono_num_of_hrs_per_cutOff'];

//     // ===================== OTHER INCOME =====================
//     $data['other_income_rate_per_hr'] = $_POST['other_income_rate_per_hr'];
//     $data['other_income_num_of_hrs_per_cutOff'] = $_POST['other_income_num_of_hrs_per_cutOff'];

//     // ===================== REGULAR DEDUCTIONS =====================
//     $data['sss_contrib'] = $_POST['sss'];
//     $data['phil_health_contrib'] = $_POST['phil_health'];
//     $data['pag-ibig_contrib'] = $_POST['pag-ibig'];
//     $data['tax_val'] = $_POST['tax_value'];

//     // ===================== OTHER DEDUCTIONS =====================
//     $data['sss_loan'] = $_POST['sss_loan'];
//     $data['pag_ibig_loan'] = $_POST['pag-ibig_loan'];
//     $data['fac_savings_deposit'] = $_POST['fac_savings_deposit'];
//     $data['fac_savings_loan'] = $_POST['fac_savings_loan'];
//     $data['salary_loan'] = $_POST['salary_loan'];
//     $data['others'] = $_POST['others'];

//     // if generate id
//     if (isset($_POST['generate_id'])) {
//         $data['employee_id'] = EmployeeController::generateEmployeeId($_POST['employee_id']);
//     }


//      // initialize the employee controller
//     $employeeController = new EmployeeController();

//     if (isset($_POST['calculate'])) {


//         $errors = $employeeController->validateData($data);

//         if (empty($errors)) {

//             // ===================== CALCULATIONS =====================

//             // total basic pay
//             $data['total_basicpay'] = $data['basicPay_rate_per_hr'] * $data['basicPay_hrs_per_cutOff'];

//             // total honorarium
//             $data['total_hono_pay'] = $data['hono_rate_per_hr'] *  $data['hono_hrs_per_cutOff'];

//             // total other income
//             $data['total_other_income_pay'] =
//             $data['other_income_rate_per_hr'] *
//             $data['other_income_num_of_hrs_per_cutOff'];

//             $total_regular_deductions =
//             $data['sss_contrib'] + $data['phil_health_contrib'] + $data['pag-ibig_contrib']  +  $data['tax_val'];

//             $data['otherdeductions'] = $data['sss_loan'] +   $data['pag_ibig_loan'] + $data['fac_savings_deposit'] + $data['fac_savings_loan'] + $data['salary_loan'] + $data['others'];

//             $data['gross_income'] =  $data['total_basicpay'];

//             $data['total_deduction'] = $total_regular_deductions + $data['otherdeductions'];

//             $data['net_income'] = $data['gross_income'] - $data['total_deduction'];
//         }


//         // echo '<pre>';
//         // print_r($errors);
//         // echo '</pre>';

//     }
//     if (isset($_POST['new'])) {


//         // unset the session
//         unset($_SESSION['employee_data']);

//         // redirect to the same page
//         header('Location: ' . $_SERVER['PHP_SELF']);

//     }
// }

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