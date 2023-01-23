<?php
// --------------------- DB CREDENTIALS --------------------------------------
const DB_HOST = 'localhost';
const DB_NAME = 'foodhouse';
const DB_USER = 'root';
const DB_PASSWORD = '';

// --------------------- PATHS --------------------------------------

const ROOT_PATH = "/Millona";

const LOGOUT = ROOT_PATH . "/auth/logout.php";
const LOGIN = ROOT_PATH . "/auth/login.php";
const MAINFOODPAGE = ROOT_PATH . "/foods";
const MAINFOODPAGE_ALT = ROOT_PATH . "/foods/main-foods.php";


const CARTPAGE = "../../carts/index.php";
const PAGE3 = ROOT_PATH . "/page3";
const PAGE2 = ROOT_PATH . "/page2";
const LOGO = ROOT_PATH."/public/assets/img/Restaurant Food.png";

const ADMIN = ROOT_PATH . "/admin";

const PRODUCT_PATH = [
    'index' => ROOT_PATH . "/admin/product/index.php",
    'create' => ROOT_PATH . "/admin/product/add",
    'edit' => ROOT_PATH . "/admin/product/edit",
    'delete' => ROOT_PATH . "/admin/product/delete",
    'list' => ROOT_PATH . "/admin/product/list",
];

const SALES_PATH = [
    'index' => ROOT_PATH . "/admin/sales/",
    'edit' => ROOT_PATH . "/admin/sales/edit",
    'delete' => ROOT_PATH . "/admin/sales/delete",
    'list' => ROOT_PATH . "/admin/sales/list",
];

const EMPLOYEE_PATH = [
    'index' => ROOT_PATH . "/admin/employee/",
    'edit' => ROOT_PATH . "/admin/employee/edit",
    'delete' => ROOT_PATH . "/admin/employee/delete",
    'list' => ROOT_PATH . "/admin/employee/list",
];


// --------------------- FORM CREDENTIALS --------------------------------------
const USERNAME = ['username', 'Username'];
const PASSWORD = ['password', 'Password'];


// --------------------- EMPLOYEE CREDENTIALS --------------------------------

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