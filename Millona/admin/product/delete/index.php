<?php

session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], $LOGIN);

// redirect to the page3\form\index.php or page3\form\
redirect_authenticated_user($_SESSION['user']['user_level'] === 0, $PAGE3);
redirect_authenticated_user($_SESSION['user']['user_level'] === 2, $PAGE2);


// get the id from the url
$id = $_GET['id'];
// validate the id
if (!is_numeric($id)) {
    header('location: /foodhouse/admin/product/list');
}


require_once '../../../app/config/Connection.php';


// get the connection
$conn = DBConnection();

// get the food items
$sql = "DELETE FROM main_foods_tbl WHERE id = ?";

// prepare the statement
$stmt = $conn->prepare($sql);

// bind the parameters

$stmt->bind_param('i', $id);

// execute the statement
$stmt->execute();

// close the connection
CloseConnection($conn);

// redirect to the list page
header('location: /foodhouse/admin/product/list');
