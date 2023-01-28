<?php
// Create connection
function Openconn() {
  // Variables for db connection
  $servername = "sql307.epizy.com";
  $dbname = "epiz_33462742_test_db";
  $username = "epiz_33462742";
  $password = "fKNpb0UTfGHShBS";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  return $conn;
}
?>
