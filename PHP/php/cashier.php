<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CASHIER</title>
  </head>
  <style media="screen">
    body {
        background: rgba(0,0,0,0.8)url(https://scontent.fmnl4-1.fna.fbcdn.net/v/t1.15752-9/326977041_1530440807467216_1269972232061394137_n.jpg?_nc_cat=104&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeGY3STdhrj4bbxT_ACqxp7eR-GgIWlwh0hH4aAhaXCHSLZUiXtZyKNn6-NTd8f2sZOtKpzi2-hy5V5mFPfcnDwr&_nc_ohc=FVs44jKPRRUAX9ilfvc&_nc_ht=scontent.fmnl4-1.fna&oh=03_AdSqd-pL9mbvui0rKODqEAKC_Y0a3iHb8vLSD_GnDsDViA&oe=63FB9C7E
) no-repeat center center fixed;
      background-size: cover;
    }
    
    @media only screen and (max-width:900px) {
    body {
        background-size: contain;
    }
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
      <a href="home0.php">Home</a>
      <a href="employeelist.php">Employee</a>
      <a href="payroll.php">Payroll</a>
      <a href="cashier.php">Cashier</a>
      <a href="pos.php">POS</a>
      <a href="point_of_saleA.php">Point of Sale A</a>

      <a href="point_of_sale.php">Point of Sale B</a>

      <a href="employee_application.php">Employee Form</a>
      <a href="logout.php">Log out</a>
    </div>
    <section class="container">

      <div class="form1">
        <br>
        <h2>Cashier</h2>
        <form class="float" action="cashier_data.php" method="post">

          <p>
            <label for="b">Sales Number:</label>
            <input id="b" type="text" name="pos1_id">
          </p>
          <p>
            <label for="b">Item Name:</label>
            <input id="b" type="text" name="order_summary">
          </p>
          <p>
            <label for="b">Price:</label>
            <input id="b" type="text" name="price">
          </p>
          <p>
            <label for="b">Quantity:</label>
            <input id="b" type="text" name="quantity">
          </p>
          <p>
            <label for="b">Discount Amount:</label>
            <input id="b" type="text" name="discount_amount">
          </p>
          <p>
            <label for="b">Discounted Amount:</label>
            <input id="b" type="text" name="discounted_amount">
          </p>
          <p>
            <label for="b">Cash from Customer:</label>
            <input id="b" type="text" name="cash_given">
          </p>
          <p>
            <label for="b">Charge to the Customer:</label>
            <input id="b" type="text" name="customer_change">
          </p>

          <button value="submit" type="submit" name="submit" class="button">Compute</button>
          <br>
        </div>
      </section>
  </body>
</html>
