<?php
session_start();

  if (isset($_SESSION["role"])) {
    if ($_SESSION["role"] != "admin"){
      header("Location: /Webpages_overall/loginwebapages/login_hr/hrpage.php");
    }
  }else {
    header("Location: /Webpages_overall/login_form.php");
  }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
		

	<!---BootstrapCDN HTML--->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

	<!---CSS link--->
	<link rel="stylesheet" href="/Webpages_overall/main_panel.css">
</head>

<body>
		<div class="menu-bar">
    <ul>
      <li class="active"><i class='bx bx-home-smile'></i><a href="/Webpages_overall/loginwebapages/login_admin/adminpage.php">Home</a></li>
      <li><i class='bx bx-list-check'></i><a href="#">Employee</a>
        <div class="sub-menu-1">
          <ul>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_hr/employee_listview.php">Employee List</a></li>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_hr/employee-register_pages.php">Employee Form</a></li>
          </ul>
        </div>  
      </li>
      <li><i class='bx bx-money-withdraw'></i><a href="#">Payroll</a>
        <div class="sub-menu-2">
          <ul>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_hr/employee-payroll_listview.php">Payroll Report</a></li>
          </ul>
        </div>
      </li>
      <li><i class='bx bx-calculator'></i><a href="#">POS-A</a>
        <div class="sub-menu-3">
          <ul>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_cashier1/POS-A_pages.php">Cashier 1</a></li>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_cashier1/POS-A_listview.php">Sales of POS-A</a></li>
          </ul>
        </div>
      </li>
      <li><i class='bx bx-calculator'></i><a href="#">POS-B</a>
        <div class="sub-menu-4">
          <ul>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_cashier2/POS-B_pages.php">Cashier 2</a></li>
            <li><a href="/Webpages_overall/loginwebapages/login_admin/login_cashier2/POS-B_listview.php">Sales of POS-B</a></li>
          </ul>
        </div>
      </li>
      <li class="active"><i class='bx bx-log-out'></i><a href="/Webpages_overall/logout.php">Log Out</a></li>
    </ul>
  </div>
  <div class="container">
			<center><h1>Welcome, Admin!</h1></center><br>
			<center><h3>You are successfully access to website</h3></center>
	</div>
</body>
</html>
		