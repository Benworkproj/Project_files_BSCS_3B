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
	<link rel="stylesheet" href="/Webpages_overall/Assets/CSS/style.css">
	
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
	
		<center>
		<h2><img src="/Webpages_overall/Assets/Images/POS_B/logo.png" style="width:60px; border-radius:50%;">Yellow Pizza!</h2>
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
		
		<?php
		if( !empty($successMessage) ){
		echo"
		<div class='row mb-3'>
			<div class='offset-sm-3 col-sm-6'>
				<div class='alert alert-success alert-dismissible fade show' role='alert'>
					<strong>$successMessage</strong>
					<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
				</div>
			</div>
		</div>
		";
		}
		?>
			
		<br>
			<!---input diplay--->
		<div class="box">
			<div class="display_input">
			<h5>Order Details: </h5>
			<br>
			
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Product Name:</label>
					<div class="col-sm-6">
						<input type="text" name="product_name" class="form-control" value="<?php echo $product_name; ?>"required>
					</div>
				</div>
					
					
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Price:</label>
					<div class="col-sm-6">
						<input type="number" name="price" class="form-control" value="<?php echo $price; ?>"reguired>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Quantity:</label>
					<div class="col-sm-6">
						<input type="number" name="quantity" class="form-control" value="<?php echo $quantity; ?>"required>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Discount Amount:</label>
					<div class="col-sm-6">
						<input type="number" name="discount_amount" class="form-control" value="<?php echo $discount_amount; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Discounted Amount:</label>
					<div class="col-sm-6">
						<input type="number" name="discounted_amount" class="form-control" value="<?php echo $discounted_amount; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Quantity:</label>
					<div class="col-sm-6">
						<input type="number" name="total_quantity" class="form-control" value="<?php echo $total_quantity; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Discount Given:</label>
					<div class="col-sm-6">
						<input type="number" name="total_disc_given" class="form-control" value="<?php echo $total_disc_given; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Discounted Amount :</label>
					<div class="col-sm-6">
						<input type="number" name="total_disc_amount" class="form-control" value="<?php echo $total_disc_amount; ?>"  disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Cash Given::</label>
					<div class="col-sm-6">
						<input type="number" name="cash_given" class="form-control" value="<?php echo $cash_given; ?>"required>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Change:</label>
					<div class="col-sm-6">
						<input type="number" name="cash_change" class="form-control" value="<?php echo $cash_change; ?>" disabled>
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
					<td><input class="btn btn-outline-primary" type="submit" name="submit" value="Calculate"></button></td>
				</div>
				
				<br>

				<div class="col-sm-12 d-grid">
					<a class="btn btn-outline-primary" href="/Webpages_overall/Webpages_view/POS-B_pages.php" role="button">New</a>
				</div>
				
				<br>

				<div class="col-sm-12 d-grid">
					<a class="btn btn-outline-primary" href="/Webpages_overall/Webpages_listview/POS-B_listview.php" role="button">Cancel</a>
				</div>
				
				<br>

				<div class="col-sm-12 d-grid">
					<a class="btn btn-outline-primary" href="/Webpages_overall/Webpages_listview/POS-B_listview.php" role="button">POS-B Summary Listview</a>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>