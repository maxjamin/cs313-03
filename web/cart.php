<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
</head>


<body>
<h2>Cart</h2>

<div class="navbar">
  <a href="main.php">Home</a>
  <a href="cart.php">Cart</a>
  <a href="checkout.php">Checkout</a> 
</div>
<br>

<?php
	print_r($_SESSION);

	//first product
	$numberOfProducts01 = $_SESSION["ProductOne"];
	$purchased01 = $_SESSION["ProductOneQuantity"];

?>


<div class="row">
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 1</h3>
  	<?php
  	if($numberOfProducts01 > 0)
  	{
  		echo $purchased01 . " " . $numberOfProducts01 . " of this product";
  	}

  	?>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 2</h3>
  </div>
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 3</h3>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 4</h3>
  </div>
</div> 


</body>
</html>