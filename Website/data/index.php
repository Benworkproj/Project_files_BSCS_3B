<?php 

require_once 'config/db.php';
require_once 'config/functions.php';

$result = dispaly_data();


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <title>Fatech Data From Database in Php</title>
</head>
<body class="bg-dark">
    <div class="container">
      <div class="row mt-5">
        <div class="col">
          <div class="card mt-5">
            <div class="card-header">
              <h2 class="display-6 text-center">Employee Details</h2>
              <a href="https://localhost/Website/web2/"><button class="button button6">Back</button><br>
        </a>
            </div>
            <div class="card-body">
              <table class="table table-bordered text-center">
                <tr class="bg-dark text-white">
                  <td> First Name </td>
                  <td> Middle Name </td>
                  <td> Surname </td>
                  <td> Civil Status </td>
                  <td> Desination  </td>
                  <td> Gross Income </td>
                  <td> Net Income </td>
                </tr>
                <tr>
                <?php 

                  while($row = mysqli_fetch_assoc($result))
                  {
                ?>
                  <td><?php echo $row['First_Name']; ?></td>
                  <td><?php echo $row['Middle']; ?></td>
                  <td><?php echo $row['Surname']; ?></td>
                  <td><?php echo $row['Civil_Status']; ?></td>
                  <td><?php echo $row['Designation']; ?></td>
                  <td><?php echo $row['Gross_Income']; ?></td>
                  <td><?php echo $row['Net_Income']; ?></td> 
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