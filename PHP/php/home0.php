<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HOME</title>
  </head>
  <style media="screen">
    body {
      background: rgba(0,0,0,0.8)url(https://scontent.fmnl3-2.fna.fbcdn.net/v/t1.15752-9/327388465_699056011923021_2504795075715132280_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=ae9488&_nc_eui2=AeFjHmWF-3OCMT1GMRqUBmAyx1Luh50cVPjHUu6HnRxU-NaTDmxaq8Vzt0yeTwUMr0hVzM37Sds7F0qmo2tTbaC9&_nc_ohc=sqGHlsYn96oAX9HRadj&_nc_ht=scontent.fmnl3-2.fna&oh=03_AdSvSkSuwAwd9scdhcdgDOULTEXTmf3kV_XuqMXPkOJe_Q&oe=63FBBC33) no-repeat center center fixed;
      background-size: cover;
     
      
    }
    @media only screen and (max-width:900px) {
    body {
        background-size: contain;
    }
    }
    form  {
      display: table;
      height: 100%;
      width: 100vw; /* full screen width */
      height: 100vh; /* full screen height */
      position: absolute;darken;
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
      
      height: 70%;
      width: 70%;
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
    
    .cta {
      margin-left: 30px;
    }
    p {
      font-size: 50px;
      font-family: montserrat;
      margin-left: 30px;
      display: flex;
      align-items: center;
    }
    h4 {
      font-size: 50px;
      margin-left: 30px;
      display: flex;
      align-items: center;
    }
    h5 {
      font-family: montserrat;
      margin-left: 30px;
      margin-bottom: 120px;
      font-size: 15px;
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
      <h2>escafe</h2>
      <h4>Experience the warmth and comfort</h4>
      <h4>of our freshly brewed coffee.</h4>
      <h5>Order your invigorating coffee right now.</h5>
      <a class="cta">Learn more about our product.</a>
      <a href="#about" class="cta">Learn More</a>
      <br>
      
      <br><br><br>

    </div>
  </body>
</html>
