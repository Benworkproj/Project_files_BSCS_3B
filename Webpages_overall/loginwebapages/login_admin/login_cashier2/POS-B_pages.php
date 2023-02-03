<?php
$servername="localhost";
$username="root";
$password="";
$database="webpages_database";
						
//create connection
$connection = new mysqli($servername, $username, $password, $database);

$product_name="";
$price="";
$quantity="";
$discount_amount="";
$discounted_amount="";
$total_quantity="";
$total_disc_given="";
$total_disc_amount="";
$cash_given="";
$cash_change="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='POST'){
	$product_name=$_POST['product_name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$discount_amount=($quantity*$price)*0.25;
	$discounted_amount=($quantity*$price)-$discount_amount;
	$total_quantity=$quantity;
	$total_disc_given=$discount_amount;
	$total_disc_amount=$discounted_amount;
	$cash_given=$_POST['cash_given'];
	$cash_change=$cash_given-$discounted_amount;

	do{
		
		if( empty($product_name) || empty($price) || empty($quantity) || empty($discount_amount) || empty($discounted_amount) || empty($total_quantity) || empty($total_disc_given) || empty($total_disc_amount) || empty($cash_given) || empty($cash_change) ){
			$errorMessage="All the fields are required";
			break;
		}
	
		//add new registered to database
		$sql="INSERT INTO pointofsale_B(product_name,price,quantity,discount_amount,discounted_amount,total_quantity,total_disc_given,total_disc_amount,cash_given,cash_change)".
			"VALUES('$product_name','$price','$quantity','$discount_amount','$discounted_amount','$total_quantity','$total_disc_given','$total_disc_amount','$cash_given','$cash_change')";
			$result=$connection->query($sql);
	
		if(!$result){
			$errorMessage="Invalid Query: ".$connection->error;
			break;
		}
	
		$product_name="";
		$price="";
		$quantity="";
		$discount_amount="";
		$discounted_amount="";
		$total_quantity="";
		$total_disc_given="";
		$total_disc_amount="";
		$cash_given="";
		$cash_change="";
	
		$successMessage="Check the POS-B Listview";
	
		header("location:/Webpages_overall/Webpages_view/POS-B_pages.php");
		exit;
	
		} while (false);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Yello Pizza!</title>
	
	<!---CSS: Bootstrap link CDN--->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
	<!---JS: Bootstrap link CDN--->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!--- CSS --->
	<link rel="stylesheet" href="/Webpages_overall/panel.css">
	<link rel="stylesheet" href="/Webpages_overall/Assets/CSS/POS-B_style.css">
	
</head>
<style type="text/css">

</style>

<body>
	<div class="container">
	<?php
	if( !empty($errorMessage) ){
	echo"
	<div class='alert alert-warning alert-dismissible fade show' role='alert'>
		<strong>$errorMessage</strong>
		<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
	</div>
	";
	}
	?>
	
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
	
		<center>
		<img src="/Webpages_overall/Assets/Images/POS_B/logo.png" style="width:100px; border-radius:50%;">
		<h2>Yellow Pizza!</h2>
		<hr color="black" width="400px">
		</center>
		
		<form action="POS-B_pages.php" method="POST">
		
		<!---Images Display--->
		<h5>Best Seller Pizza:</h5>
			<div class="display_img">
			<div class="line-1">
				<div class="img-control">
					<div class="img_1">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/Veggie pizza.jpeg">
						<p class="namebox">Veggie P1</p>
					</div>
				</div>
			
				<div class="img-control">
					<div class="img_2">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/peperoni pizza.jpeg">
						<p class="namebox">Pepperoni P5</p>
					</div>
				</div>
			</div>
				
			<div class="line-2">	
				<div class="img-control">
					<div class="img_3">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/meaty pizza.jpeg">
						<p class="namebox">Meaty P2</p>
					</div>
				</div>
					
				<div class="img-control">
					<div class="img_4">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/margherita pizza.jpeg">
						<p class="namebox">Margherita P6</p>
					</div>
				</div>
			</div>
			
			<div class="line-3">	
				<div class="img-control">
					<div class="img_5">
						<img class="img_display"src="/Webpages_overall/Assets/Images/POS_B/Hawaiian_pizza.jpeg">
						<p class="namebox">Hawaiian P3</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_6">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/cheesy pizza.jpeg">
						<p class="namebox">Cheesy P7</p>
					</div>
				</div>
			</div>
			
			<div class="line-4">
				<div class="img-control">
					<div class="img_7">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/buffalo chicken pizza.jpeg">
						<p class="namebox">Buffalo P4</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_8">
						<img class="img_display" src="/Webpages_overall/Assets/Images/POS_B/BBQ sausage pizza.jpeg">
						<p class="namebox">BBQ Sausage P8</p>
					</div>
				</div>
			</div>
		</div>
		
		<br>
		<!----------------------DISPLAY LISTVIEW------------------>
	<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Product Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Total Quantity</th>
						<th>Total Discount Given</th>
						<th>Total Discounted Amount</th>
						<th>Cash Given</th>
						<th>Cash Change</th>
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
						
						if(!$result){
							die("Invalid query: " . $connection->error);
						}
						
						//read data of each row
						while($row = $result->fetch_assoc()){
							echo "
							<tr>
								<td>$row[product_name]</td>
								<td>$row[price]</td>
								<td>$row[quantity]</td>
								<td>$row[total_quantity]</td>
								<td>$row[total_disc_given]</td>
								<td>$row[total_disc_amount]</td>
								<td>$row[cash_given]</td>
								<td>$row[cash_change]</td>
							</tr>
							";
						}
					?>
				</tbody>
			</table>
			
		<br>
			<!---input diplay--->
		<div class="box">
			<div class="display_input">
			<h5>Order Details: </h5>
			<br>
				<div class="row mb-3">
					<label for="product_name" class="col-sm-6 col-form-label">Product Name:</label>
					<div class="col-sm-6">
						<select type="text" id="product_name" name="product_name" class="form-control" required>
						  <option value="">--------Select One--------</option>
              <option value="P1-Veggie Pizza">Veggie Pizza</option>
              <option value="P2-Meaty Pizza">Meaty Pizza</option>
              <option value="P3-Hawaiian Pizza">Hawaiian Pizza</option>
              <option value="P4-Buffalo Pizza">Buffalo Pizza</option>
              <option value="P5-Pepperoni Pizza">Pepperoni Pizza</option>
              <option value="P6-Margherita Pizza">Margherita Pizza</option></option>
              <option value="P7-Cheesy Overloaded Pizza">Cheesy Overloaded Pizza</option>
              <option value="P8-BBQ Sausage Pizza">BBQ Sausage Pizza</option>
						</select>
					</div>
				</div>
					
					
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Price:</label>
					<div class="col-sm-6">
						<input type="number" placeholder="0" name="price" class="form-control" value="<?php echo $price; ?>"reguired>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Quantity:</label>
					<div class="col-sm-6">
						<input type="number" placeholder="0" name="quantity" class="form-control" value="<?php echo $quantity; ?>"required>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Discount Amount:</label>
					<div class="col-sm-6">
						<input type="text" placeholder="0" name="discount_amount" class="form-control" value="<?php echo $discount_amount; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Discounted Amount:</label>
					<div class="col-sm-6">
						<input type="text" placeholder="0" name="discounted_amount" class="form-control" value="<?php echo $discounted_amount; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Quantity:</label>
					<div class="col-sm-6">
						<input type="text" placeholder="0" name="total_quantity" class="form-control" value="<?php echo $total_quantity; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Discount Given:</label>
					<div class="col-sm-6">
						<input type="text" placeholder="0" name="total_disc_given" class="form-control" value="<?php echo $total_disc_given; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Discounted Amount :</label>
					<div class="col-sm-6">
						<input type="text" placeholder="0" name="total_disc_amount" class="form-control" value="<?php echo $total_disc_amount; ?>"  disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Cash Given::</label>
					<div class="col-sm-6">
						<input type="number" placeholder="0" name="cash_given" class="form-control" value="<?php echo $cash_given; ?>"required>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Change:</label>
					<div class="col-sm-6">
						<input type="text" placeholder="0" name="cash_change" class="form-control" value="<?php echo $cash_change; ?>" disabled>
					</div>
				</div>
			</div>
			
			<!---Button Display--->
			
			<div class="display_button">
			<h5>Order Discount Option: </h5>
			<br>
			
			<div class="checkbox">
				<input type="checkbox">	Senior Citizen	<input type="checkbox">	PWD Card	<input type="checkbox">	With DIs Card<br><br>	
				<input type="checkbox">	Employee Disc	<input type="checkbox">	No Discount
			</div>
			
			<div class="offset-sm-1 col-sm-9 d-grid">
				<div class="col-sm-12 d-grid">
					<td><input class="btn btn-outline-primary" type="submit" name="submit" value="Calculate"></td>
				</div>
				
				<br>

				<div class="col-sm-12 d-grid">
					<button type="reset" class="btn btn-outline-secondary" name="cancelBtn">Cancel</button>
				</div>
				
				<br>

				<div class="col-sm-12 d-grid">
					<a class="btn btn-primary" href="/Webpages_overall/Webpages_view/POS-B_pages.php" role="button">New</a>
				</div>
			</div>
			</div>
		</div>
		</form>
	</div>
</body>
</html>