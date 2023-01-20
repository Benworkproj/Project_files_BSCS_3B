<?php

$sname= "localhost:3307";
$unmae= "root";
$password = "";

$db_name = "web2";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
    echo "Connection failed!";
}