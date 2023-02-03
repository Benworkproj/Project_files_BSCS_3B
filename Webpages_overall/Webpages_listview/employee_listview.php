<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Listview Data</title>
		
	<!---Bootstrap link CDN--->
	<script src="httpx://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="/Webpages_overall/list_panel.css">
</head>
	
<style>
	body {
	   	background:#e6ffedff;
	   	padding:2px;
	   	display:flex;
	   	justify-content: center;
    	align-items: center;
	}	
	table tr:hover{
		cursor: pointer;
	}
	table thead{
		background:#bdffcfff;
		text-align:center;
	}
	table thead tr th{
		color:black;
		text-align:center;
		align-items:center;
	}
	table{
    border: 2PX solid black;
    border-radius: 2px ;
    background-color: white;
  }
</style>
<script>
  
</script>
<body>
	<div class="container">
	  
	  <div class="menu-bar">
    <ul>
      <li class="active"><i class='bx bx-home-smile'></i><a href="#">Home</a></li>
      <li><i class='bx bx-list-check'></i><a href="#">Employee</a>
        <div class="sub-menu-1">
          <ul>
            <li><a href="#">Employee Form</a></li>
            <li><a href="#">Employee List</a></li>
          </ul>
        </div>  
      </li>
      <li><i class='bx bx-money-withdraw'></i><a href="#">Payroll</a>
        <div class="sub-menu-2">
          <ul>
            <li><a href="#">Pay Report</a></li>
          </ul>
        </div>
      </li>
      <li><i class='bx bx-calculator'></i><a href="#">POS-A</a>
        <div class="sub-menu-3">
          <ul>
            <li><a href="#">Cashier 1</a></li>
            <li><a href="#">Sales of POS-A</a></li>
          </ul>
        </div>
      </li>
      <li><i class='bx bx-calculator'></i><a href="#">POS-B</a>
        <div class="sub-menu-4">
          <ul>
            <li><a href="#">Cashier 2</a></li>
            <li><a href="#">Sales of POS-B</a></li>
          </ul>
        </div>
      </li>
      <li class="active"><i class='bx bx-log-out'></i><a href="#">Log Out</a></li>
    </ul>
  </div>
		
		<br><br><h3>Employee Listview</h3><br>
		<a class="btn btn-primary" href="/Webpages_overall/Webpages_view/employee-register_pages.php" role="button">Register New Employee</a>
		<br><br>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Action</th>
					<th>Employee ID</th>
					<th>Surname</th>
					<th>First name</th>
					<th>Middle name</th>
					<th>Suffix</th>
					<th>Date of Birth</th>
					<th>Gender</th>
					<th>Nationality</th>
					<th>Civil Status</th>
					<th>Department</th>
					<th>Designation</th>
					<th>Qualified Dependent Status</th>
					<th>Employee Status</th>
					<th>Employee Number</th>
					<th>Date Registrated</th>
				</tr>
			</thead>
			<tbody>
			<?php
					$servername="localhost";
					$username="root";
					$password="";
					$database="webpages_database";
						
					//create connection
					$connection = new mysqli($servername, $username, $password, $database);
						
					//check connection
					if ($connection->connect_error){
						die("Connection failed: " . $connection->connect_error );
					}
						
					//read all row from database table
					$sql="SELECT * FROM newemployee_register";
					$result = $connection->query($sql);
						
					if(!$result){
						die("Invalid query: " . $connection->error);
					}
						
					//read data of each row
					while($row = $result->fetch_assoc()){
						echo "
						<tr>
						<td>
							<div class='col-sm-2 d-grid'>
								<a class='btn btn-danger btn-sm' href='/Webpages_overall/Controller/Buttons/Employee_listview/delete.php?register_id=$row[register_id]'>Delete</a>
								<a class='btn btn-warning btn-sm' href='/Webpages_overall/Controller/Buttons/Employee_listview/update.php?register_id=$row[register_id]'>Update</a>
							</div>
							</td>
							<td>$row[register_id]</td>
							<td>$row[surname]</td>
							<td>$row[first_name]</td>
							<td>$row[middle_name]</td>
							<td>$row[suffix]</td>
							<td>$row[date_birth]</td>
							<td>$row[gender]</td>
							<td>$row[nationality]</td>
							<td>$row[civil_status]</td>
							<td>$row[department]</td>
							<td>$row[designation]</td>
							<td>$row[qual_dept_status]</td>
							<td>$row[employee_status]</td>
							<td>$row[employee_number]</td>
							<td>$row[date_registered]</td>
						</tr>
						";
					}
					echo "</table>";
				?>
			</tbody>
		</table>
	</forM>
	</div>
</body>
</html>