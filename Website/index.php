<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
</head>
<body>
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>
     	<label>User Name</label>
     	<input type="text" name="uname" placeholder="User Name"><br>

     	<label>Password</label>
     	<input type="password" name="password" placeholder="Password"><br>
     	<label>Select Website</label>
     	<select name="selection" class="form-control">
     		<option value="POS1">POS1</option>
     		<option value="Income">Income</option>
     		<option value="POS2">POS2</option>
     	</select>

     	<button type="submit" name="submit">Login</button>
     </form>
</body>
</html>