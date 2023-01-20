<?php 

require_once 'web3/db.php';
require_once 'web3/functions.php';

$result = dispaly_data();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Fatech Data From Database in Php</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<bodyclass="bg-dark">
    <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2>ADMIN</h2>
        <ul>
            <li><a href="index.php">  Home</a></li>
            <li><a href="web1.php">  Aling Lupe</a></li>
            <li><a href="web2.php">  Income</a></li>
            <li><a href="web3.php">  Milk Tea</a></li>
            <li><a href="contact.php">  Contact</a></li>
            <li><a href="https://localhost/Website/">  Logout</a></li>
        </ul> 
        <div class="social_media">
          <a href="#"><i class="fab fa-facebook-f"></i></a>
          <a href="#"><i class="fab fa-twitter"></i></a>
          <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    <div class="main_content">
        <div class="header"><h1> MILK TEA</h1></div>  
        <div class="info">
          
      </div>
    </div>
</div>
<div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Sales</h2>
        </a>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> ID </td>
                  <td> Name </td>
                  <td> Quantity </td>
                  <td> Total Amount </td>
                  <td> Cash Rendered  </td>
                  <td> Change </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['ID']; ?></td>
                  <td><?php echo $row['Name']; ?></td>
                  <td><?php echo $row['Quantity']; ?></td>
                  <td><?php echo $row['Total_Amount']; ?></td>
                  <td><?php echo $row['Cash_Rendered']; ?></td>
                  <td><?php echo $row['Change']; ?></td>
                </tr>
                <?php    
                  }
                
                ?>
                
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>
