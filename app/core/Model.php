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