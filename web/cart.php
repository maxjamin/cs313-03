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

	//check if removed 
	if(!empty($_POST["one"])) {
		$value = $_SESSION["ProductOneQuantity"];

		if(!empty($_POST["oneAdd"]) || empty($_POST["oneSub"]))
		{
			$_SESSION["ProductOneQuantity"] = $value;
		}
	}
	if(!empty($_POST["two"])) {
		$_SESSION["ProductTwo"] = "notPurchased";
		$_SESSION["ProductTwoQuantity"]= 0;
	}
	if(!empty($_POST["three"])) {
		$_SESSION["ProductThree"] = "notPurchased";
		$_SESSION["ProductThreeQuantity"]= 0;
	}
	if(!empty($_POST["four"])) {
		$_SESSION["ProductFour"] = "notPurchased";
		$_SESSION["ProductFourQuantity"]= 0;
	}

	//first product
	$purchased01 = $_SESSION["ProductOne"];
	$numberOfProducts01 = $_SESSION["ProductOneQuantity"];
	//second product
	$purchased02 = $_SESSION["ProductTwo"];
	$numberOfProducts02 = $_SESSION["ProductTwoQuantity"];
	//third product
	$purchased03 = $_SESSION["ProductThree"];
	$numberOfProducts03 = $_SESSION["ProductThreeQuantity"];
	//fourth product
	$purchased04 = $_SESSION["ProductFour"];
	$numberOfProducts04 = $_SESSION["ProductFourQuantity"];
?>


<div class="row">
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 1</h3>
  	<?php
  		if($numberOfProducts01 > 0)
  		{echo $purchased01 . " " . $numberOfProducts01 . " of this product";}
  	?>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  		<input type="text" name="oneAdd" value="Add Amount">
  		<input type="text" name="oneSub" value="Sub Amount">
  		<input type="submit" name="one" value="Change"><br>
  	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 2</h3>
  		<?php
  		if($numberOfProducts02 > 0)
  		{echo $purchased02 . " " . $numberOfProducts02 . " of this product";}
  	?>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  		<input type="submit" name="two" value="Remove"><br>
  	</form>
  </div>
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 3</h3>
  		<?php
  		if($numberOfProducts03 > 0)
  		{echo $purchased03 . " " . $numberOfProducts03 . " of this product";}
  	?>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  		<input type="submit" name="three" value="Remove"><br>
  	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 4</h3>
  		<?php
  		if($numberOfProducts04 > 0)
  		{echo $purchased04 . " " . $numberOfProducts04 . " of this product";}
  	?>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  		<input type="submit" name="four" value="Remove"><br>
  	</form>
  </div>
</div> 


</body>
</html>