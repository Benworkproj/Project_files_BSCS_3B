<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>EMPLOYEE FORM</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl4-2.fna.fbcdn.net/v/t1.15752-9/327177348_2014730672211806_7782578498990485481_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFmmAfYmCXiyIgn3tL0pqXnFdZwjC42XroV1nCMLjZeuiLMxKA59fu-mUr9y8bRyl3dk0N4n992la4YmVCkojZn&_nc_ohc=yM6G0BtscS8AX9F4w4J&_nc_ht=scontent.fmnl4-2.fna&oh=03_AdSjayyvN6v3e-4NHf8dPwc6NKA4-Z1oCKAlyMrUZ_ndOA&oe=63FBA294) no-repeat center center fixed;
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
    p {
      margin-left: 20px;
    }
    label {
      margin-left: 30px;
    }
    .float {
      margin: 50px;
      padding-bottom: 30px;
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
      <a href="home0.html">Home</a>
      <a href="employeelist.php">Employee</a>
      <a href="payroll.php">Payroll</a>
      <a href="cashier.php">Cashier</a>
      <a href="pos.php">POS</a>
      <a href="point_of_saleA.html">Point of Sale A</a>

      <a href="point_of_sale.php">Point of Sale B</a>

      <a href="employee_application.php">Employee Form</a>
      <a href="logout0.php">Log out</a>
    </div>
    <section class="container">

      <div class="form1">
        <br>
        <h2>Employee Application Form</h2>
        <form class="float" action="addemployee_save.php" method="post">
          <p>
            <label for="a">Employee Number:</label>
            <input id="b" type="text" name="employee_no">
          </p>
          <p>
            <label for="a">Employee Name:</label>
            <input id="b" type="text" name="employee_name">
          </p>
          <p>
            <label for="b">Gender:</label>
            <input id="b" type="text" name="gender">
          </p>
          <p>
            <label for="b">Date of Birth:</label>
            <input type="date" id="b" name="birthdate"
              value="2022-12-12"
              min="1990-01-01" max="2025-12-31">
          </p>
          <p>
            <label for="b">Nationality:</label>
            <input id="b" type="text" name="nationality">
          </p>
          <p>
            <label for="b">Civil Status:</label>
            <input id="b" type="text" name="civil_status">
          </p>
          <p>
            <label for="b">Department:</label>
            <input id="b" type="text" name="department">
          </p>
          <p>
            <label for="b">Designation:</label>
            <input id="b" type="text" name="designation">
          </p>
          <p>
            <label for="b">Employee Status:</label>
            <input id="b" type="text" name="employee_status">
          </p>

          <button type="submit" class="button">Add Employee</button>
          <a href="employeelist.php"><button type="button" class="button">View Employee List</button></a>
          <br>
        </div>
      </section>
  </body>
</html>
