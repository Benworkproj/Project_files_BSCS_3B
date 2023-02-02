<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Employee Payroll Data</title>
		
	<!---Bootstrap link CDN--->
	<script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="/Webpages_overall/list_panel.css">
</head>
	
<style>
	body{
	   	background:#d9fff5;
	   	padding:2px;
	   	display:flex;
	   	justify-content: center;
    	align-items: center;
	}	
	table tr:hover{
		cursor: pointer;
	}
	table thead{
		background:#e1dfff;
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
  $(document).ready(function(){
    $('table tr').click(function(){
      var id = $(this).attr('row_id');
      window.open("http://localhost:8080/Webpages_overall/Controller/Buttons/Employee_payroll/view_payrol.php?id=" + id);
    });
    
    $('search').click(function(e){
      var employee_number = $('#employee_number').val();
      window.open("http://localhost:8080/Webpages_overall/Controller/Buttons/Employee_payroll/search.php?search=" + employee_number);
    });
  });
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
		
		<br><br><h3>Employee Payroll Listview</h3><br>
		<form id="employee-payroll_listview" action="employee-payroll_listview.php" method="POST">
		<div style="float:right;">
		  <span style="margin-top:5px">Employee Id:</span>
		  <input type="text" style="margin-top:5px;" id="employee_number" name="employee_number">
		  <button id="search" type="submit" name="search_btn" class="btn btn-danger" style="padding:5px; margin-bottom:5px;">Search</button>
		</div>
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
				  <th>Action</th>
					<th>Employee Number</th>
					<th>Employee Name</th>
					<th>Civil Status</th>
					<th>Department</th>
					<th>Designation</th>
					<th>Employee Status</th>
					<th>Qualified Dependent Status</th>
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
  					$sql="SELECT register_id,employee_number,first_name,middle_name,surname,civil_status,department,designation,employee_status,qual_dept_status FROM newemployee_register";
  					
  					if(isset($_GET['search'])){
  					  $employee_number = trim($_GET['search']);
  					  $sql .= "WHERE employee_number = $employee_number";
  					}
  					
  					$result=$connection->query($sql);
  					if($result->num_rows >  0){
  					  while($row = $result->fetch_assoc()){
  					      ?>
  					      <tr row_id=<?php echo $row['register_id']; ?>>
  					        <td>
  					          <div class='col-sm-2 d-grid'>
  					          <a class="btn btn-info btn-sm" href="/Webpages_overall/Controller/Buttons/Employee_payroll/view_payrol.php">View</a>
  					        </td>
  					        <td><?php echo $row['employee_number']; ?></td>
  					        <td><?php echo $row['first_name']. " " .$row['middle_name']. " " .$row['surname'];  ?></td>
  					        <td><?php echo $row['civil_status']; ?></td>
  					        <td><?php echo $row['department']; ?></td>
  					        <td><?php echo $row['designation']; ?></td>
                    <td><?php echo $row['employee_status']; ?></td>
                    <td><?php echo $row['qual_dept_status']; ?></td>
  					      </tr>
  					     <?php
  					   }
  					}
  					echo"</table>";
  				?>	      
			</tbody>
		</table>
	</form>
	</div>
</body>
</html>