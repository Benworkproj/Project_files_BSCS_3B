<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EMPLOYEE LIST</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.15752-9/327020097_730331695146805_7172073233920232905_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGJ_cp_-t7KQaF_WV0OMHYZ2EXHWSsVhkbYRcdZKxWGRkknFzFBGQqldLCKcm36qIWiRtXMqjabnWlpCnY6hPIl&_nc_ohc=c5d66wserHgAX9leMWc&_nc_oc=AQmLNOZ-CHSwlO2lu8ZrKZiFJEd7Bj9-osTmQUAH8Ya7B4xP3HERhrMrSykUQOuANlp51TkqeZUl9jN_JklhkIcX&_nc_ht=scontent.fmnl4-2.fna&oh=03_AdSPHazqZ3xBnc7VGfehU7gy__FQcGToG10WFVGveObrhQ&oe=63FB9961) no-repeat center center fixed;
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
      opacity: ;
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
      <h2>Employee List</h2>
      <br>
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th>Employee Number</th>
            <th>Employee Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Nationality</th>
            <th>Civil Status</th>
            <th>Department</th>
            <th>Designation</th>
            <th>Employee Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
include 'db-connection-employee.php';

$conn = Openconn();

$sql = "SELECT employee_number, employee_name, gender, date_of_birth, nationality, civil_status, department, designation, employee_status FROM employee";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data for each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr><td>" . $row["employee_number"] . "</td><td>" . $row["employee_name"] . "</td><td>" . $row["gender"] . "</td><td>" . $row["date_of_birth"] . "</td><td>" . $row["nationality"] . "</td><td>" . $row["civil_status"] . "</td><td>" . $row["department"] . "</td><td>" . $row["designation"] . "</td><td>" . $row["employee_status"] . "</td></tr>";
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
      <a href="employee_application.php"><button type="submit" class="button" o>Add Employee</button></a>

    </div>
  </body>
</html>
