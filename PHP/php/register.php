<?php
$DATABASE_HOST =   'sql307.epizy.com';
$DATABASE_USER = 'epiz_33462742';
$DATABASE_PASS = 'fKNpb0UTfGHShBS';
$DATABASE_NAME = 'epiz_33462742_test_db';

$con = mysqli_connect($DATABASE_HOST,$DATABASE_USER,$DATABASE_PASS,$DATABASE_NAME);

if(mysqli_connect_error()) {
    exit('Error Connecting to the database'. mwysqli_connect_error());
}

if(!isset($_POST['username'], $_POST['password'])) {
    exit('Empty Field(s)');
}
if($stmt = $con -> prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();

    if($stmt->num_rows>0) {
      //echo 'Username Already Exists. Try Again';
      header("Location: index2.php?error= Username Already Exists. Try Again");
    }
    else {
      if($stmt = $con->prepare('INSERT INTO users (username, password) VALUES (?, ?)')) {
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $stmt->bind_param('ss', $_POST['username'], $password);
        $stmt->execute();
        //echo 'Successfully Registered';
        header("Location: index2.php?error= Successfully Registered");
      }
      else {
          echo 'Error Occured';
      }
    }
    $stmt->close();
  }else {
    echo 'Error Occurred';
  }



$con->close();
}
 ?>
