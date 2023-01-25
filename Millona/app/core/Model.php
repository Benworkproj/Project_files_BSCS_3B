<?php
require_once __DIR__ . '../../config/env.php';
require_once __DIR__ . '../../config/Connection.php';
require_once __DIR__ . '../../config/DBCmd.php';

function insertUser($username, $user_password)
{
    $sql = "INSERT INTO accounts (username, user_password) VALUES ('$username', '$user_password')";
    $conn = DBConnection();

    $stmt = $conn->query($sql);

    if ($stmt) {
        return true;
    } else {
        return false;
    }
}


// this is the function that will be used to get the user from the database and return it as an array to access its data or fields
function getUser($username)
{
    $sql = "SELECT * FROM accounts WHERE username = '$username'";
    $conn = DBConnection();
    $stmt = $conn->query($sql);

    // use mysqli to fetch the data
    $user = $stmt->fetch_assoc();

    if ($user){
        return $user;
    }
    else{
        return false;
    }
}


class BaseProductModel{

    private $conn;
    private $cmd;

    public function __construct()
    {
        $this->conn = DBConnection();
        $this->cmd = new DBCmd();
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function getAllProducts()
    {
        $sql = $this->cmd->selectAllCmd('main_foods_tbl');
        $stmt = $this->conn->query($sql);

        $main_foods = $stmt->fetch_all(MYSQLI_ASSOC);

        return $main_foods;
    }

    public function getProduct($key, $value)
    {
        
        $sql = $this->cmd->selectCmd('main_foods_tbl', $key, $value);

        $stmt = $this->conn->query($sql);

        $product = $stmt->fetch_assoc();

        return $product;
    }

    public function addProduct($product)
    {

        $productName = $product['name'];
        $productPrice = $product['price'];
        $productImage = $product['img'];

        $sql = "INSERT INTO main_foods_tbl (food_name, price, img) VALUES ('$productName', '$productPrice', '$productImage')";

        $stmt = $this->conn->query($sql);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function updateProduct($product)
    {
        
        $id = $product['id'];
        $productName = $product['name'];
        $productPrice = $product['price'];
        $productImage = $product['img'];

        $sql = "UPDATE main_foods_tbl SET food_name = '$productName', price = '$productPrice', img = '$productImage' WHERE id = '$id'";

        $stmt = $this->conn->query($sql);
        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

    public function deleteProduct($id)
    {
        $sql = "DELETE FROM main_foods_tbl WHERE id = '$id'";
        $stmt = $this->conn->query($sql);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }
}

class BaseSales{


    private $conn;
    private $cmd;
    private $productmodel;

    public function __construct()
    {
        $this->productmodel = new BaseProductModel();
        $this->cmd = new DBCmd();
        $this->conn = $this->productmodel->getConnection();
    }

    // get the connection
    public function getConnection()
    {
        return $this->conn;
    }

    public function addSales($data)
    {

        $item_name = $data['foodName'];
        $item_price = $data['foodPrice'];
        $quantity = $data['quantityOfOrder'];
        $discount_amount = $data['discountAmount'];
        $discounted_amount = $data['discountedAmount'];
        $cash_value = $data['cashValue'];
        $change_value = $data['changeValue'];
        
        
        $sql = "INSERT INTO 
        sales (
            item_name, 
            item_price,
            quantity,
            discount_amount,
            discounted_amount,
            cash_value,
            change_value
        ) 
            
        VALUES (
            '$item_name',
            '$item_price',
            '$quantity',
            '$discount_amount',
            '$discounted_amount',
            '$cash_value',
            '$change_value'
        )";

        $stmt = $this->conn->query($sql);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

}

class EmployeeBaseModel
{
    private $cmd;
    private $conn;
    private $productmodel;

    public function __construct()
    {

        $this->productmodel = new BaseProductModel();
        $this->cmd = new DBCmd();
        $this->conn = $this->productmodel->getConnection();
    }

    public function addEmployee($emp)
    {
        $empID = $emp['employee_id'] ;
        $user_lvl = $_SESSION['user']['user_level'];
        $emp_dependents = $emp['num_dependent'];
        $emp_payDate = $emp['pay_date'];
        $emp_fname = $emp['f_name'];
        $emp_lname = $emp['l_name'];
        $emp_civilStatus = $emp['civil_status'];
        $emp_empStatus = $emp['emp_status'];
        $emp_designation = $emp['designation'];
        $emp_department = $emp['department'];
        $emp_img = $emp['employee_img'];

        $emp_basicPayPerHr = $emp['basicPay_rate_per_hr'];
        $emp_basicPayPerCutOff = $emp['basicPay_num_of_hrs_per_cutOff'];
        $emp_total_basicPay = $emp['basicPay_income_per_cutOff'];

        $emp_sss_contrib = $emp['sss'];
        $emp_philhealth_contrib = $emp['phil_health'];
        $emp_pagibig_contrib = $emp['pag-ibig'];
        $emp_tax = $emp['tax_value'];

        $emp_honoPerHr = $emp['hono_rate_per_hr'];
        $emp_honoPerCutOff = $emp['hono_num_of_hrs_per_cutOff'];
        $emp_totalHono = $emp['total_hono_pay'];

        $emp_sssLoan = $emp['sss_loan'];
        $emp_pagibig_loan = $emp['pag-ibig_loan'];
        $emp_fac_savings_deposit = $emp['fac_savings_deposit'];
        $emp_fac_savings_loan = $emp['fac_savings_loan'];
        $emp_salarayLoan = $emp['salary_loan'];
        $emp_others = $emp['others'];

        $emp_incomePerHr = $emp['other_income_rate_per_hr'];
        $emp_incomePerCutOff = $emp['other_income_num_of_hrs_per_cutOff'];

        $emp_totalOtherIncome = $emp['total_other_income_pay'];

        $emp_grossIncome = $emp['gross_income'];
        $emp_netIncome = $emp['net_income'];
        $emp_totalDeduction = $emp['total_deduction'];

        // insert data into the database using looping into an array of keys
        $sql = "INSERT INTO employee_tbl (
            emp_id ,
            added_by_user_level,
            emp_pay_date,
            f_name,
            l_name,
            num_dependent,
            emp_civil_status,
            emp_status,
            designation,
            department,
            emp_img,
            basicPay_rate_per_hr,
            basicPay_hrs_per_cutOff,
            total_basicpay,
            sss_contrib,
            phil_health_contrib,
            pag_ibig_contrib,
            tax_val,
            hono_rate_per_hr,
            hono_hrs_per_cutOff,
            total_hono_pay,
            sss_loan,
            pag_ibig_loan,
            fac_savings_deposit,
            fac_savings_loan,
            salary_loan,
            others,
            other_income_rate_per_hr,
            other_income_num_of_hrs_per_cutOff,
            total_other_income_pay,
            gross_income,
            net_income,
            total_deduction
        ) VALUES (
            '$empID',
            ' $user_lvl',
            '$emp_payDate',
            '$emp_fname',
            '$emp_lname',
            '$emp_dependents',
            '$emp_civilStatus',
            '$emp_empStatus',
            '$emp_designation',
            '$emp_department',
            '$emp_img',
            '$emp_basicPayPerHr',
            '$emp_basicPayPerCutOff',
            '$emp_total_basicPay',
            '$emp_sss_contrib',
            '$emp_philhealth_contrib',
            '$emp_pagibig_contrib',
            '$emp_tax',
            '$emp_honoPerHr',
            '$emp_honoPerCutOff',
            '$emp_totalHono',
            '$emp_sssLoan',
            '$emp_pagibig_loan',
            '$emp_fac_savings_deposit',
            '$emp_fac_savings_loan',
            '$emp_salarayLoan',
            '$emp_others',
            '$emp_incomePerHr',
            '$emp_incomePerCutOff',
            '$emp_totalOtherIncome',
            '$emp_grossIncome',
            '$emp_netIncome',
            '$emp_totalDeduction'
        )";

        $stmt = $this->conn->query($sql);

        if ($stmt) {
            return true;
        } else {
            return false;
        }

    }

    public function deleteEmployee($id)
    {
        $sql = "DELETE FROM employees_tbl WHERE id = '$id'";
        $stmt = $this->conn->query($sql);

        if ($stmt) {
            return true;
        } else {
            return false;
        }
    }

}