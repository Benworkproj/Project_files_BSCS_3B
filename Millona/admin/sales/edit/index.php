<?php
session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';
require_once '../../../app/core/Redirect.php';
require_once '../../../app/libs/Image.php';


redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_cashiers_customers();

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_cashiers_customers();

require_once '../../../app/src/employee/EmployeeController.class.php';

$title = 'Sales Edit';

// fetch the url params
$sales_id = $_GET['id'];

// get the connection
$conn = DBConnection();

// get the Id and create a form to edit the product
$sql = "SELECT * FROM sales WHERE sales_id = ?";
// prepare the statement
$stmt = $conn->prepare($sql);
// bind the string parameters
$stmt->bind_param('i', $sales_id);
// execute the statement
$stmt->execute();
// get the result
$result = $stmt->get_result();
// fetch the data
$sales = $result->fetch_assoc();

$errors = [];


