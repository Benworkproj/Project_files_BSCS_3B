<?php 

  require_once 'db.php';

  function dispaly_data(){
    global $conn;
    $query = "select * from sales";
    $result = mysqli_query($conn,$query);
    return $result;
  }

?>