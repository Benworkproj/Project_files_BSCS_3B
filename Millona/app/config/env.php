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