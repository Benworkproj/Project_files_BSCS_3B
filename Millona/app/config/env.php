<?php
// --------------------- DB CREDENTIALS --------------------------------------
const DB_HOST = 'localhost';
const DB_NAME = 'foodhouse';
const DB_USER = 'root_PATH';
const DB_PASSWORD = '';

// --------------------- PATHS --------------------------------------

const ROOT_PATH = "/foodhouse";

const LOGOUT = ROOT_PATH . "/auth/logout.php";
const LOGIN = ROOT_PATH . "/auth/login.php";
const MAINFOODPAGE = ROOT_PATH . "/foodhouse/foods/";

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
    'create' => ROOT_PATH . "/admin/sales/add",
    'edit' => ROOT_PATH . "/admin/sales/edit",
    'delete' => ROOT_PATH . "/admin/sales/delete",
    'list' => ROOT_PATH . "/admin/sales/list",
];

const MAINFOODSPATH2_ALT = "/foodhouse/foods/main-foods.php";
const CARTPAGE = "../../carts/index.php";
const PAGE3 = ROOT_PATH."/page3/form/";
const PAGE2 = ROOT_PATH."/page2";
const LOGO = "/foodhouse/public/assets/img/Restaurant Food.png";


// --------------------- FORM CREDENTIALS --------------------------------------
const USERNAME = ['username', 'Username'];
const PASSWORD = ['password', 'Password'];