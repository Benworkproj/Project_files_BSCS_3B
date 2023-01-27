<?php

session_start();

require_once '../../app/config/env.php';
require_once '../../app/config/assets_path.php';
require_once '../../app/core/Redirect.php';

redirect_not_authenticated_user($_SESSION['user'], LOGIN);

redirect_not_admin();

// get the id from the url
$cart_id = $_GET['id'];
$user_id = $_SESSION['user']['user_id'];

require_once '../../app/config/Connection.php';

// get the connection
$conn = DBConnection();

// sql query
$sql = "DELETE FROM cart WHERE user_id = '$user_id' AND cart_id = '$cart_id'";

// prepare the statement
$stmt = $conn->prepare($sql);
// execute the statement
$stmt->execute();

// close the connection
CloseConnection($conn);

// redirect to the list page
if ($stmt) {
    $_SESSION['success'] = 'Cart item deleted successfully!';
    header('location: ' . CART_PATH['list']);
}
