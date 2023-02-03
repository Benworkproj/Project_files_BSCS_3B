<?php
if( isset($_GET["register_id"]) ) {
	$register_id = $_GET["register_id"];
	
	$servername = "localhost";
	$username  = "root";
	$password = "";
	$database = "webpages_database";
	
	//create connection
	$connection = new mysqli($servername, $username, $password, $database);
	
	$sql="DELETE FROM newemployee_register WHERE register_id=$register_id";
	$connection->query($sql);
	}
	
	header("location:/Webpages_overall/Webpages_listview/employee_listview.php");
	exit;

?>