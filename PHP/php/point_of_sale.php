<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SALES SUMMARY OF POS A LIST</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.15752-9/327340943_1162145364438497_3914334475659818867_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGYlvd5gUbIW_6NKKq2sB7Cubl4fiZQV4i5uXh-JlBXiDDwaHK81-swwNf3T0OZeBBW6CXBfL8UvjSmFsmOMI89&_nc_ohc=fnX7Hj_nL4YAX-gzMc5&_nc_ht=scontent.fmnl3-2.fna&oh=03_AdS4rgnRnjGMtxec46JedInzNATp8gjLPetkbBuB0dDXuA&oe=63FBC446) no-repeat center center fixed;
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
      width: 70px;

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

      <table class="table table-bordered table-hover" id="tble" style=" width: 80%; height: 500px;"  style="overflow-x:auto;">
        <thead  style="overflow-x:auto;">
          <tr>
            <th style="height: 100px; width:0.5px;">Sales Number</th>
            <th style="height: 30px; width:0.5px;">Item Name</th>
            <th style="height: 30px; width:1px;">Price</th>
            <th style="height: 30px; width:1px;">Quantity</th>
            <th style="height: 30px; width:1px;">Discount Amount</th>
            <th style="height: 30px; width:1px;">Discounted Amount</th>
            <th style="height: 30px; width:1px;">Total Quantity </th>
            <th style="height: 30px; width:1px;">Total Discount Given</th>
            <th style="height: 30px; width:1px;">Total Discounted Amount</th>
            <th style="height: 30px; width:1px;">Cash from Customer</th>
            <th style="height: 30px; width:1px;">Charge to the Customer</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include 'db-connection-employee.php';

          $conn = Openconn();

          $sql = "SELECT pos1_id, order_summary, price, quantity, discount_amount, discounted_amount, total_quantity, total_dicount_given, total_discounted_amount, cash_given, customer_change FROM pos2_tbl";
          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
            // output data for each row
            while ($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["pos1_id"] . "</td>
          <td>" . $row["order_summary"] . "</td>
          <td>" . $row["price"] . "</td>
          <td>" . $row["quantity"] . "</td>
          <td>" . $row["discount_amount"] . "</td>
          <td>" . $row["discounted_amount"] . "</td>
          <td>" . $row["total_quantity"] . "</td>
          <td>" . $row["total_dicount_given"] . "</td>
          <td>" . $row["total_discounted_amount"] . "</td>
          <td>". $row["cash_given"] . "</td>
          <td>". $row["customer_change"] . "</td>
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
