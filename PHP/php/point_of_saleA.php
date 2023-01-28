<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>POINT OF SALE A</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl3-4.fna.fbcdn.net/v/t1.15752-9/327338139_1157708454948400_6262733853693355131_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGP3rsEpP0cFeNhFHPOmUVe_LuoY_fZ9u38u6hj99n27ea8iH5zCqRxhtGCutYcJUgSkT1Eg_RK6lDBqK2i87Kl&_nc_ohc=d64g4017iKAAX9-peGh&_nc_ht=scontent.fmnl3-4.fna&oh=03_AdQWTAFG4CA_rkz3_rq7e3SfM0aszLaIu1ol4ksPxHjN-g&oe=63FBCA1D) no-repeat center center fixed;
      background-size: cover;
    }
    form  {
      display: table;
      height: 50%;
    }
    .form1 {
    margin-top: 50px;
    }
    p     {
      display: table-row;
    }
    label {
      display: table-cell;
    }
    input {
      display: table-cell;
      margin: 5px;
    }
    table th {
      height: 30%;
      width: 90%;
    }
    table tr:hover {
      cursor: pointer;
    }
    table thead {
      background: #dc3545;
    }
    table thead tr th {
      color: #fff;
      width: 100px;

    }
    table {
      margin-left: 30px;
    }
    h2 {
      margin-top:30px;
      margin-bottom: 20px;
      margin-left: 30px;
    }
    .button {
      margin-top: 50px;
      background-color: #3b5998;
      border: none;
      color: white;
      padding: 8px 16px;
      text-align: center;
      font-size: 16px;
      text-decoration: none;
      border-radius: 5px;
      margin-left: 30px;
    }
    .button: hover {
      background-color: white;
      cursor: pointer;
    }
    .container {
      background-color: white;
      height: 600%;
      width: 90%;
      margin: auto;
      margin-top: 30px;
      border-radius: 10px;
    }
    table {
      height: 600%;
      width: 90%;
    }
    .tble {
      overflow-x: auto;
    }


    #nav {
       background-color: #333;
       overflow: hidden;
       margin-top: 30px;
       border-top-left-radius: 25px;
       border-top-right-radius: 25px;
       border-bottom-left-radius: 25px;
       border-bottom-right-radius: 25px;
     }
     #nav a {
       float: left;
       color: #f2f2f2;
       text-align: center;
       padding: 14px 16px;
       text-decoration: none;
       font-size: 10px;
       font-family: montserrat;
     }
     #nav a:hover {
       background-color: #ddd;
       color: black;
     }
     #nav {

       display: flex;
       justify-content: space-between;
       align-items: center;
       background-color: #1d1f23;
       color: white;
       padding: 10px 20px;
     }

     #nav a {
       color: white;
       text-decoration: none;
       margin-right: 10px;
     }

     /* Styles for the responsive table */
     .responsive-table {
       width: 100%;
       overflow-x: auto;
     }
     /*Button search */
     .sales-search {
    float: right;
    display: flex;
    align-items: center;
    }

    label {
      margin-right: 10px;
    }
    input[type="text"] {
      margin-right: 10px;
      padding: 8px;
      border-radius: 4px;
      border: 1px solid #ccc;
    }

    button[type="submit"] {
      padding: 8px 16px;
      border-radius: 4px;
      background-color: #dc3545;
      color: #fff;
      border: none;
    }
    #searchbtnn {
      margin-right: 30px;
      margin-bottom: 10px;
    }

  </style>

  <script>
    $(document).ready(function(){
      $('table tr').click(function(){
        var id = $(this).attc('cov_id');
        window.open(" " + id);
      });
    });
  </script>
  <body>
    <div id="nav">
      <a href="home0.php">Home</a>
      <a href="employeelist.php">Employee</a>
      <a href="payroll.php">Payroll</a>
      <a href="cashier.php">Cashier</a>
      <a href="pos.php">POS</a>
      <a href="point_of_saleA.php">Point of Sale A</a>

      <a href="point_of_sale.php">Point of Sale B</a>

      <a href="employee_application.php">Employee Form</a>
      <a href="logout0.php">Log out</a>
    </div>
    <div class="container">
      <br>
      <h2>Sales Summary of POS A List</h2>
      <br>
      <div id='searchbtnn'style="float:right;">
        <span style="margin-top:5px;">Sales Number:</span>
        <input type="text" style="margin-top:5px;" id="sales_no" name="sales_no">
        <button type="submit" id="search" name="search_btn" class="btn btn-danger" style="padding:5px; margin-bottom:5px;">SEARCH</button>
      </div>
      <table class="table table-bordered table-hover" id="tble" style="overflow-x: auto;">
        <thead>
          <tr>
            <th>Sales Number</th>
            <th>Item Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Discount Amount</th>
            <th>Discounted Amount</th>
            <th>Cash from Customer</th>
            <th>Charge to the Customer</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'db-connection-employee.php';

          $conn = Openconn();

          $sql = "SELECT pos1_id, order_summary, price, quantity, discount_amount, discounted_amount, cash_given, customer_change FROM pos1_tbl";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data for each row
            while ($row = $result->fetch_assoc()) {
          echo
          "<tr>
          <td>" . $row["pos1_id"] . "</td>
          <td>" . $row["order_summary"] . "</td>
          <td>" . $row["price"] . "</td>
          <td>" . $row["quantity"] . "</td>
          <td>" . $row["discount_amount"] . "</td>
          <td>" . $row["discounted_amount"] . "</td>
          <td>" . $row["cash_given"] . "</td>
          <td>" . $row["customer_change"] . "</td>
          </tr>";
          }
          echo "</table>";
            } else {
          echo "0 results";
          }

          $conn->close();
          ?>


          </tbody>
          </table>

    </div>
  </body>
</html>
