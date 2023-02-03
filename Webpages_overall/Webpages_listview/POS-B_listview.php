<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Sales Summary of POS B List</title>
		
		<!---Bootstrap link CDN--->
		<script src="httpx://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
		<link rel="stylesheet" href="/Webpages_overall/list_panel.css">
	</head>
	
	<style>
		body{
	    	background:#fff;
	    	padding:2px;
	    	display:flex;
	    	justify-content: center;
	    	align-items: center;	
		}	
		.container{
			justify-content: center;
			align-items: center;
		}
		table tr:hover{
			cursor: pointer;
		}
		table thead{
			background:#feffeeff;
			text-align:center;
		}
		table thead tr th{
			color:solid black;
			text-align:center;
			align-items:center;
			padding:50px;
			justify-content: center;
		}
		table{
    border: 2PX solid black;
    border-radius: 2px ;
    background-color: white;
    }
	</style>
	<script>
   $(document).ready(function(){
    $('#search').click(function(e){
      var product_id = $('#product_id').val();
      window.open("https://localhost:8080/Webpages_overall/Webpages_listview/POS-A_listview.php?id="+id);
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
		  
			<br><br><h3>Sales Summary of POS B List</h3><br>
			<form id="POS-A_listview" action="POS-A_listview.php" method="POST">
		    <div style="float:right;">
		    <span style="margin-top:5px">Employee Id:</span>
		    <input type="text" style="margin-top:5px;" id="register_id" name="register_id">
		    <button id="search" type="submit" name="search_btn" class="btn btn-danger" style="padding:5px; margin-bottom:5px;">Search</button>
		</div>
			
			
			<a class="btn btn-primary" href="/Webpages_overall/Webpages_view/POS-B_pages.php" role="button">Point Of Sale B System </a>
			<br><br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Action</th>
						<th>Product No.</th>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Discount Amount</th>
						<th>Discounted Amount</th>
						<th>Total Quantity</th>
						<th>Total Discount Given</th>
						<th>Total Discounted Amount</th>
						<th>Cash Given</th>
						<th>Cash Change</th>
						<th>Date Bought</th>
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
						$sql="SELECT * FROM pointofsale_B";
						$result = $connection->query($sql);
						if(isset($_GET['search'])){
  					  $register_id = trim($_GET['search']);
  					  $sql ="WHERE register_id = $register_id";
  				}
					if($result->num_rows >  0){
						while($row = $result->fetch_assoc()){
							echo "
							<tr>
								<td>
									<a class='btn btn-danger btn-sm' href='/Webpages_overall/Controller/Buttons/POS_B/delete.php?product_id=$row[product_id]'>Delete</a>
								</td>
								<td>$row[product_id]</td>
								<td>$row[product_name]</td>
								<td>$row[price]</td>
								<td>$row[quantity]</td>
								<td>$row[discount_amount]</td>
								<td>$row[discounted_amount]</td>
								<td>$row[total_quantity]</td>
								<td>$row[total_disc_given]</td>
								<td>$row[total_disc_amount]</td>
								<td>$row[cash_given]</td>
								<td>$row[cash_change]</td>
								<td>$row[date_bought]</td>
							</tr>
							";
						}
						echo "</table>";
					}
					?>
				</tbody>
			</table>
		</form>
		</div>
	</body>
</html>