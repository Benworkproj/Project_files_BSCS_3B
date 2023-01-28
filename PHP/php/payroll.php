<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PAYROLL</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl4-6.fna.fbcdn.net/v/t1.15752-9/327316047_731544478336307_352321156940514238_n.jpg?_nc_cat=107&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGdtdJ22gaYsCrtd50Gq0dgQ8H2NtAnfZhDwfY20Cd9mJ7kPpoTJ2kUzFPXxq1qxOt7XcQFx0T3Yo1kPvGhViwC&_nc_ohc=B8188ZpHXlEAX8id7KS&_nc_ht=scontent.fmnl4-6.fna&oh=03_AdTF2IFqnWZvQFBP5T80wbmNYHe6x6_kS63GxtsWf_UExQ&oe=63FB970D) no-repeat center center fixed;
      background-size: cover;
    }
    form  {
      display: table;
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
    table tr:hover {
      cursor: pointer;
    }
    table thead {
      background: #008ECC;
    }
    table thead tr th {
      color: #fff;
      width: 110px;
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
      height: 600px;;
      width: 90%;
      margin: auto;
      margin-top: 30px;
      border-radius: 10px;
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
      <h2>Employee Payroll</h2>
      <br>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Payroll ID</th>
            <th>Employee Number</th>
            <th>Employee Name</th>
            <th>Salary</th>

          </tr>
        </thead>
        <tbody>
          <?php
include 'db-connection-employee.php';

$conn = Openconn();

$sql = "SELECT payroll_id, employee_number, employee_name, salary FROM employee_payroll";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data for each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["payroll_id"] . "</td><td>" . $row["employee_number"] . "</td><td>" . $row["employee_name"] . "</td><td>" . $row["salary"] . "</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

$conn->close();
?>


        </tbody>
      </table>
      <br>


    </div>
  </body>
</html>
