<?php 
$hostName = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbName = "webpages_database";

$conn = mysqli_connect($hostName, $dbUser, $dbPassword, $dbName);

if (!$conn){
  echo "Unsuccessfully access to Database";
}

?>