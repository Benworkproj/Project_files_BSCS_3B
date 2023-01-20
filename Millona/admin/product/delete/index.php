<?php

session_start();

require_once '../../../app/config/env.php';
require_once '../../../app/config/assets_path.php';
require_once '../../../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

if (isset($_SESSION['user'])) {
    if ($_SESSION['user']['user_level'] === '0') {
        header('Location:' . PAGE3);
    } else if ($_SESSION['user']['user_level'] === '2') {
        header('Location:' . PAGE2);
    }
}


// get the id from the url
$id = $_GET['id'];
// validate the id
if (!is_numeric($id)) {
    header('location: '. PRODUCT_PATH['list']);
}


require_once '../../../app/config/Connection.php';


// get the connection
$conn = DBConnection();

$img = "SELECT img FROM main_foods_tbl WHERE id = $id";

$result = $conn->query($img);

$row = $result->fetch_assoc();

unlink( UPLOADS_PATH . '/' . $row['img']);

// sql query
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
header('location: '. PRODUCT_PATH['list']);
