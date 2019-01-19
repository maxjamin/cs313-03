<?php
	//starting the session 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
</head>


<body>
<h2>Prove 03</h2>

<div class="navbar">
  <a href="main.php">Home</a>
  <a href="cart.html">Cart</a>
  <a href="checkout.html">Checkout</a> 
</div>
<br>

 <div class="row">
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 1</h3>
  	<form action="htmlspecialchars($_SERVER["PHP_SELF"])" method="post">
		Quantity<input type="text" name="name"><br>
		<input type="submit" value="one" name="Add to Cart">
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 2</h3>
  	<form action="welcome_get.php" method="post">
		Quantity<input type="text" name="name"><br>
		<input type="submit" value="two" name="Add to Cart">
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 3</h3>
  	<form action="welcome_get.php" method="post">
		Quantity<input type="text" name="name"><br>
		<input type="submit" value="three" name="Add to Cart">
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 4</h3>
  	<form action="welcome_get.php" method="post">
		Quantity<input type="text" name="name"><br>
		<input type="submit" value="four" name="Add to Cart">
	</form>
  </div>
</div> 



</body>
</html>