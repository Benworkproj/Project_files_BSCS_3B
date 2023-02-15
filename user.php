<?php include 'conn.php'; ?>
<?php include 'header.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Ordering system</title>
	
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js">
	<link rel="stylesheet" href="css/style_0.css">
	<a href="webpage1.php">Webpage 1 </a>
</head>
<body>
	<div class="container">
	  <h3>BURGER TIME!</h3>
		<br>
		
		<form action="insert_user.php" method="post">
		
		<!---Images Display--->
			<div class="display_img">
			
			<div class="line-1">
				<div class="img-control">
					<div class="img_1">
						<img class="img_display" src="images/air fryer burgerhg.jpeg.jpeg">
						<p>Air Fryer Burger</p>
					</div>
				</div>
			
				<div class="img-control">
					<div class="img_2">
						<img class="img_display" src="images/Bacon Western Cheeseburger.jpeg">
						<p>Bacon Western Cheeseburger</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_3">
						<img class="img_display" src="images/Baked Turkey Burgers.jpeg">
						<p>Baked Turkey Burger</p>
					</div>
				</div>
			</div>
				
			<div class="line-2">	
				<div class="img-control">
					<div class="img_4">
						<img class="img_display" src="images/Chicken Burger.jpg">
						<p>Chicken Burger</p>
					</div>
				</div>
			
				<div class="img-control">
					<div class="img_5">
						<img class="img_display" src="images/chicken parm burger.jpeg">
						<p>Chickern Parm Burger</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_6">
						<img class="img_display" src="images/Classic Cheeseburger.jpeg">
						<p>Classic Cheeseburger</p>
					</div>
				</div>
			</div>
			
			<div class="line-3">
				<div class="img-control">
					<div class="img_7">
						<img class="img_display" src="images/crab cake burger.jpeg">
						<p>Crab Cake Burger</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_8">
						<img class="img_display" src="images/Greek-Inspired Salmon Burgers.jpg">
						<p>Greek Salmon Burger</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_9">
						<img class="img_display" src="images/lemon dill salmon burgers.jpeg">
						<p>Lemon Dill Salmon Burger</p>
					</div>
				</div>
			</div>
				
			<div class="line-4">
				<div class="img-control">
					<div class="img_10">
						<img class="img_display" src="images/Maui Burgers.jpeg" alt="avatar" width="80px" height="80px">
						<p>Maui Burger</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_11">
						<img class="img_display" src="images/quesadilla burger.jpeg" alt="avatar" width="80px" height="80px">
						<p>Quesadilla Burger</p>
					</div>
				</div>
				
				<div class="img-control">
					<div class="img_12">
						<img class="img_display" src="images/Turkey Burger.jpg" alt="avatar"  width="80px" height="80px">
						<p>Turkey Burger</p>
					</div>
				</div>
			</div>
		</div>
			
			<!---input diplay--->
			<div class="display_input">
			
			<?php
			$name="";
			$quantity="";
			$price="";
			$discount_amount="";
			$discounted_amount="";
			$total_quantity="";
			$total_discount_given="";
			$total_discounted_amount="";
			$cashgiven="";
			$change_total="";
			
			if(isset($_POST['submit'])) {
				$name= $_POST['name'];
				$quantity= $_POST['quantity'];
				$price= $_POST['price'];
				$cashgiven= $_POST['cashgiven'];
				$discount_amount= ($quantity*$price)*0.25;
				$discounted_amount= ($quantity*$price)-$discount_amount;
				$totalquantity= $quantity;
				$totaldiscount_given= $discount_amount;
				$totaldiscounted_amount= $discounted_amount;
				$change = ($cashgiven >= $discounted_amount) ? $cashgiven - $discounted_amount : "Error: Insufficient funds";
			}
			?>
			<h4>Order Details: </h4>
			<br>
			
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Item Name:</label>
					<div class="col-sm-6">
						<input type="text" name="name" class="form-control"value="<?php echo $name; ?>">
					</div>
				</div>
					
					
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Quantity:</label>
					<div class="col-sm-6">
						<input type="number" name="quantity" class="form-control"value="<?php echo $quantity; ?>">
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Price:</label>
					<div class="col-sm-6">
						<input type="text" name="price" class="form-control"value="<?php echo $price; ?>">
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Discount Amount:</label>
					<div class="col-sm-6">
						<input type="text" name="discount_amount" class="form-control" value="<?php echo $discount_amount; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Discounted Amount:</label>
					<div class="col-sm-6">
						<input type="text" name="discounted_amount" class="form-control" value="<?php echo $discounted_amount; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Quantity:</label>
					<div class="col-sm-6">
						<input type="text" name="total_quantity" class="form-control" value="<?php echo $total_quantity; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Discount Given:</label>
					<div class="col-sm-6">
						<input type="text" name="total_discount_given" class="form-control" value="<?php echo $total_discount_given; ?>" disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Total Discounted Amount :</label>
					<div class="col-sm-6">
						<input type="text" name="total_discounted_amount" class="form-control" value="<?php echo $total_discounted_amount; ?>"  disabled>
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Cash Given::</label>
					<div class="col-sm-6">
						<input type="text" name="cash_given" class="form-control" value="<?php echo $cashgiven; ?>">
					</div>
				</div>
				
				<div class="row mb-3">
					<label class="col-sm-6 col-form-label">Change:</label>
					<div class="col-sm-6">
						<input type="text" name="change_total" class="form-control" value="<?php echo $change_total; ?>" disabled>
					</div>
				</div>
			</div>
			
			<!---Button Display--->
			
			<div class="display_button">
			<h4>Order Discount Option: </h4>
			<br>
			
			<div class="checkbox">
				<input type="checkbox">	Senior Citizen	<input type="checkbox">	PWD Card	<input type="checkbox">	With DIs Card<br><br>	
				<input type="checkbox">	Employee Disc	<input type="checkbox">	No Discount
			</div>
				<table>
					<tr>
						<td><input class="press1" type="submit" name="submit" value="Calculate"></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td><input class="press2" type="submit" name="" value="New Order"></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td><input class="press3" type="submit" name="" value="Add Order"></td>
					</tr>
				</table>
				
				<table>
					<tr>
						<td><input class="press4" type="submit" name="" value="Delete Item"></td>
					</tr>
				</table>
                <br>
                <br>
                <br>
                <br>
                <table>
					<tr>
                    <form action="logout.php" method="post">
   
  </form>
					</tr>
				</table>
			</div>
	</div>
</body>
</html>