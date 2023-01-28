<?php

$sname= "sql307.epizy.com";

$unmae= "epiz_33462742";

$password = "fKNpb0UTfGHShBS";

$db_name = "epiz_33462742_test_db";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {

    echo "Connection failed!";

}
?>