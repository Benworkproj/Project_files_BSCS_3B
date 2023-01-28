<?php

session_start();

include "register.php";

if (isset($_POST['username']) && isset($_POST['password'])) {

    function validate($data){

       $data = trim($data);

       $data = stripslashes($data);

       $data = htmlspecialchars($data);

       return $data;

    }

    $uname = validate($_POST['username']);
    $pass = validate($_POST['password']);

    if (empty($uname)) {

        header("Location: index2.php?error=Username is required");

        exit();

    }else if(empty($pass)){

        header("Location: index2.php?error=Password is required");

        exit();

    }

}else{

    header("Location: index2.php");

    exit();

}
?>
