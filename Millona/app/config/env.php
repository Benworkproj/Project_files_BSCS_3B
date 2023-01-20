<?php
// --------------------- DB CREDENTIALS --------------------------------------
const DB_HOST = 'localhost';
const DB_NAME = 'foodhouse';
const DB_USER = 'root_PATH';
const DB_PASSWORD = '';

// --------------------- PATHS --------------------------------------

// get the root path of the project and use it to define the other paths

$ROOT_PATH = dirname(__DIR__, 2);

$LOGOUT = $ROOT_PATH . "/auth/logout.php";
$LOGIN = $ROOT_PATH . "/auth/login.php";
$MAINFOODPAGE = $ROOT_PATH . "/foodhouse/foods/";

$ADMIN = $ROOT_PATH . "/admin";

$PRODUCT_PATH = [
    'index' => $ROOT_PATH . "/admin/product/index.php",
    'create' => $ROOT_PATH . "/admin/product/add",
    'edit' => $ROOT_PATH . "/admin/product/edit",
    'delete' => $ROOT_PATH . "/admin/product/delete",
    'list' => $ROOT_PATH . "/admin/product/list",
];

$SALES_PATH = [
    'index' => $ROOT_PATH . "/admin/sales/",
    'create' => $ROOT_PATH . "/admin/sales/add",
    'edit' => $ROOT_PATH . "/admin/sales/edit",
    'delete' => $ROOT_PATH . "/admin/sales/delete",
    'list' => $ROOT_PATH . "/admin/sales/list",
];

$LOGOUT = $ROOT_PATH . "/auth/logout.php";
$LOGIN = $ROOT_PATH . "/auth/login.php";
$MAINFOODPAGE = $ROOT_PATH . "/foodhouse/foods";
$CARTPAGE = $ROOT_PATH . "/foodhouse/cart";

$ADMIN = $ROOT_PATH . "/admin";

$PAGE3 = $ROOT_PATH."/page3/form/";
$PAGE2 = $ROOT_PATH."/page2";
$LOGO = $ROOT_PATH."/public/assets/img/Restaurant Food.png";


// --------------------- FORM CREDENTIALS --------------------------------------
const USERNAME = ['username', 'Username'];
const PASSWORD = ['password', 'Password'];