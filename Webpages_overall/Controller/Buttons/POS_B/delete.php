<?php
if( isset($_GET["product_id"]) ) {
	$product_id = $_GET["product_id"];
	
	$servername = "localhost";
	$username  = "root";
	$password = "";
	$database = "webpages_database";
	
	//create connection
	$connection = new mysqli($servername, $username, $password, $database);
	
	$sql="DELETE FROM pointofsale_B WHERE product_id=$product_id";
	$connection->query($sql);
	}
	
	header("location:/Webpages_overall/Webpages_listview/POS-B_listview.php");
	exit;

?>