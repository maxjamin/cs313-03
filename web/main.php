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


<?php
	$product1 = "";
	$product1Err = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if(empty($_POST['quantityOne'])) {
			$product1Err = "Please enter a number"
		} else {
			if(filter_var($_POST['quantityOne'], FILTER_VALIDATE_INT)){
				//collect values of inputs from form
				$product1 = $_REQUEST['quantityOne'];
			}
			else
				{ $product1Err = "Please enter a number" }
		
		}

	}

?>


 <div class="row">
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 1</h3>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		Quantity<input type="text" name="quantityOne"><br>
		<span class="error">* <?php echo $product1Err;?></span>
		<input type="submit" name="one" name="Add to Cart">
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 2</h3>
  	<form action="welcome_get.php" method="post">
		Quantity<input type="text" name="quantityTwo"><br>
		<input type="submit" name="two" name="Add to Cart">
	</form>
  </div>
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 3</h3>
  	<form action="welcome_get.php" method="post">
		Quantity<input type="text" name="quantityThree"><br>
		<input type="submit" name="three" name="Add to Cart">
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 4</h3>
  	<form action="welcome_get.php" method="post">
		Quantity<input type="text" name="quantityFour"><br>
		<input type="submit" name="four" name="Add to Cart">
	</form>
  </div>
</div> 




</body>
</html>