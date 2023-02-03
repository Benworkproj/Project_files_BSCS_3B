<?php
$servername="localhost";
$username="root";
$password="";
$database="webpages_database";
						
//create connection
$connection = new mysqli($servername, $username, $password, $database);

$item_name="";
$price="";
$quantity="";
$discount_amount="";
$discounted_amount="";
$cash_given="";
$cash_change="";

$errorMessage="";
$successMessage="";

if($_SERVER['REQUEST_METHOD']=='POST'){
	$item_name=$_POST['item_name'];
	$price=$_POST['price'];
	$quantity=$_POST['quantity'];
	$discount_amount=($quantity*$price)*0.25;
	$discounted_amount=($quantity*$price)-$discount_amount;
	$cash_given=$_POST['cash_given'];
	$cash_change=$cash_given-$discounted_amount;

	do{
		
		if( empty($item_name) || empty($price) || empty($quantity) || empty($discount_amount) || empty($discounted_amount) || empty($cash_given) || empty($cash_change) ){
			$errorMessage="All the fields are required";
			break;
		}
	
		//add new registered to database
		$sql="INSERT INTO pointofsale_A(item_name,price,quantity,discount_amount,discounted_amount,cash_given,cash_change)".
			"VALUES('$item_name','$price','$quantity','$discount_amount','$discounted_amount','$cash_given','$cash_change')";
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
		$cash_given="";
		$cash_change="";
	
		$successMessage="Check the POS-A Listview";
	
		header("location:/Webpages_overall/Webpages_view/POS-A_pages.php");
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
	<title>Mr. Jave Mc Clothing</title>
	
	<!---CSS: Bootstrap link CDN--->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
	<!---JS: Bootstrap link CDN--->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
	<!--- CSS --->
	<link rel="stylesheet" href="/Webpages_overall/panel.css">
	<link rel="stylesheet" href="/Webpages_overall/Assets/CSS/POS-A_style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
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
  
  <br><br>
	
		<center>
		<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/Logo.png">
		<p class="font-logo">Mr. Jave Mc Clothing</p>
		
		<hr color="black" width="400px">
		</center>
		
		<form action="POS-A_pages.php" method="POST">
		
		<!---Images Display--->
			<div class="display_img">
			
<!------------------------------------------------T-SHIRT PART------------------------------------------------>			
			<div class="t-shirt">
				<div class="line-1">
					<div class="img-control">
						<div class="img_1">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-Shirt_1.jpg">
							<p class="namebox">1. T-Shirt</p>
						</div>
					</div>
			
					<div class="img-control">
						<div class="img_2">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-Shirt_2.jpg">
							<p class="namebox">3. T-Shirt</p>
						</div>
					</div>

					<div class="img-control">
						<div class="img_3">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-Shirt_3.jpg">
							<p class="namebox">5. T-Shirt</p>
						</div>
					</div>
				</div>
				
				<div class="line-2">
					<div class="img-control">
						<div class="img_4">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-Shirt_4.jpg">
							<p class="namebox">2. T-Shirt</p>
						</div>
					</div>
				
					<div class="img-control">
						<div class="img_5">
							<img class="img_display"src="/Webpages_overall/Assets/Images/POS_A/T-Shirt_5.jpg">
							<p class="namebox">4. T-Shirt</p>
						</div>
					</div>
				
					<div class="img-control">
						<div class="img_6">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-Shirt_6.jpg">
							<p class="namebox">6. T-Shirt</p>
						</div>
					</div>
				</div>
			</div>
			
<!----------------------------------------------HOODY PART----------------------------------------------------->			
			<div class="hoody">
				<div class="line-3">
					<div class="img-control">
						<div class="img_7">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-hoodie-1.jpg">
							<p class="namebox">1. Hoody</p>
						</div>
					</div>
				
					<div class="img-control">
						<div class="img_8">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-hoodie-2.jpg">
							<p class="namebox">3. Hoody</p>
						</div>
					</div>
				
					<div class="img-control">
						<div class="img_9">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-hoodie-3.jpg">
							<p class="namebox">5. Hoody</p>
						</div>
					</div>
				</div>
			
				<div class="line-4">
					<div class="img-control">
						<div class="img_10">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-hoodie-4.jpg">
							<p class="namebox">2. Hoody</p>
						</div>
					</div>
				
					<div class="img-control">
						<div class="img_11">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-hoodie-5.jpg">
							<p class="namebox">4. Hoody</p>
						</div>
					</div>
				
					<div class="img-control">
						<div class="img_12">
							<img class="img_display" src="/Webpages_overall/Assets/Images/POS_A/T-hoodie-6.jpg">
							<p class="namebox">6. Hoody</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-----------------------LISTVIEW------------------------------------->
    <br>
			<table class="table table-bordered table-hover">
				<thead>
					<tr>
						<th>Item Name</th>
						<th>Price</th>
						<th>Quantity</th>
						<th>Discount Amount</th>
						<th>Discounted Amount</th>
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
						$sql="SELECT * FROM pointofsale_A";
						$result = $connection->query($sql);
						
						if(!$result){
							die("Invalid query: " . $connection->error);
						}
						
						//read data of each row
						while($row = $result->fetch_assoc()){
							echo "
								<td>$row[item_name]</td>
								<td>$row[price]</td>
								<td>$row[quantity]</td>
								<td>$row[discount_amount]</td>
								<td>$row[discounted_amount]</td>
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
					<label class="col-sm-6 col-form-label">Product Name:</label>
					<div class="col-sm-6">
            <select type="text" id="item_name" name="item_name" class="form-control" required>
						  <option value="">--------Select One--------</option>
						  <option value="" disabled>T-Shirt - Color Variant</option>
              <option value="1. T-Shirt(Orange)">1. T-Shirt(Orange)</option>
              <option value="2. T-Shirt(Purple)">2. T-Shirt(Purple)</option>
              <option value="3. T-Shirt(Green)">3. T-Shirt(Green)</option>
              <option value="4. T-Shirt(Red/Orange)">4. T-Shirt(Red/Orange)</option>
              <option value="5. T-Shirt(Army Green)">5. T-Shirt(Army Green)</option>
              <option value="6. T-Shirt(Black)">6. T-Shirt(Black)</option></option>
              <option value="" disabled>Jacket - Color Variant</option>
              <option value="1. Hoody(Pink)">1. Hoody(Pink)</option>
              <option value="2. Hoody(Purple)">2. Hoody(Purple)</option>
              <option value="3. Hoody(Green)">3. Hoody(Green)</option>
              <option value="4. Hoody(Orange)">4. Hoody(Orange)</option></option>
              <option value="5. Hoody(Yellow)">5. Hoody(Yellow)</option>
              <option value="6. Hoody(Brown)">6. Hoody(Brown)</option>
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
					<label class="col-sm-6 col-form-label">Cash Given:</label>
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