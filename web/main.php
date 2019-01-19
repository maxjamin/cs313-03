<?php
	//starting session
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


<?php

	$product1= $product2 = $product3 = $product4 = "";
	$product1Err = $product2Err = $product3Err = $product4Err = "";


	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		/*******************************************************************/
		if(empty($_POST["quantityOne"])) {
			$product1Err = "Please enter a number";
		} else {
			if(!filter_var($_POST["quantityOne"], FILTER_VALIDATE_INT) === false){
				//collect values of inputs from form
				$product1 = $_POST["quantityOne"];

				/*Change amount of product add to remaining items if already in cart*/
				if(($_SESSION["ProductOneQuantity"]) == 0)
				{
					$_SESSION["ProductOne"] = "purchased";
					$_SESSION["ProductOneQuantity"] = $product1;
				}
				else
				{
					$product = $_SESSION["ProductOneQuantity"];
					print_r("Add more\n");

					$_SESSION["ProductOneQuantity"] = $product + $product1;
					$_SESSION["ProductOne"]= "purchased";
					
				}

			}
			else
				{ $product1Err = "Please enter a number"; }
		
		}

		/********************************************************************/
		if(empty($_POST["quantityTwo"])) {
			$product2Err = "Please enter a number";
		} else {
			if(!filter_var($_POST["quantityTwo"], FILTER_VALIDATE_INT) === false){
				//collect values of inputs from form
				$product2 = $_POST["quantityTwo"];

				/*Change amount of product add to remaining items if already in cart*/
				if(($_SESSION["ProductTwoQuantity"]) == 0)
				{
					$_SESSION["ProductTwo"] = "purchased";
					$_SESSION["ProductTwoQuantity"] = $product2;
				}
				else
				{
					$product = $_SESSION["ProductTwoQuantity"];
					print_r("Add more\n");

					$_SESSION["ProductTwoQuantity"] = $product + $product2;
					$_SESSION["ProductTwo"]= "purchased";
					
				}

			}
			else
				{ $product2Err = "Please enter a number"; }
		
		}

		/********************************************************************/
		if(empty($_POST["quantityThree"])) {
			$product3Err = "Please enter a number";
		} else {
			if(!filter_var($_POST["quantityThree"], FILTER_VALIDATE_INT) === false){
				//collect values of inputs from form
				$product3 = $_POST["quantityThree"];

				/*Change amount of product add to remaining items if already in cart*/
				if(($_SESSION["ProductThreeQuantity"]) == 0)
				{
					$_SESSION["ProductThree"] = "purchased";
					$_SESSION["ProductThreeQuantity"] = $product3;
				}
				else
				{
					$product = $_SESSION["ProductThreeQuantity"];
					print_r("Add more\n");

					$_SESSION["ProductThreeQuantity"] = $product + $product3;
					$_SESSION["ProductThree"]= "purchased";
					
				}

			}
			else
				{ $product3Err = "Please enter a number"; }
		
		}

		/********************************************************************/
		if(empty($_POST["quantityFour"])) {
			$product4Err = "Please enter a number";
		} else {
			if(!filter_var($_POST["quantityFour"], FILTER_VALIDATE_INT) === false){
				//collect values of inputs from form
				$product4 = $_POST["quantityFour"];

				/*Change amount of product add to remaining items if already in cart*/
				if(($_SESSION["ProductFourQuantity"]) == 0)
				{
					$_SESSION["ProductFour"] = "purchased";
					$_SESSION["ProductFourQuantity"] = $product4;
				}
				else
				{
					$product = $_SESSION["ProductFourQuantity"];
					print_r("Add more\n");

					$_SESSION["ProductFourQuantity"] = $product + $product4;
					$_SESSION["ProductFour"]= "purchased";
					
				}

			}
			else
				{ $product4Err = "Please enter a number"; }
		
		}


	}
	print_r($_SESSION);

?>


 <div class="row">
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 1</h3>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		Quantity<input type="text" name="quantityOne"><br>
		<input type="submit" name="one" name="Add to Cart"><br>
		<span class="error"><?php echo $product1Err;?></span>
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 2</h3>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		Quantity<input type="text" name="quantityTwo"><br>
		<input type="submit" name="two" name="Add to Cart">
		<span class="error"><?php echo $product2Err;?></span>
	</form>
  </div>
  <div class="column" style="background-color:#ccc;">
  	<h3>Product 3</h3>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		Quantity<input type="text" name="quantityThree"><br>
		<input type="submit" name="three" name="Add to Cart">
		<span class="error"><?php echo $product3Err;?></span>
	</form>
  </div>
  <div class="column" style="background-color:#ddd;">
  	<h3>Product 4</h3>
  	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
		Quantity<input type="text" name="quantityFour"><br>
		<input type="submit" name="four" name="Add to Cart">
		<span class="error"><?php echo $product4Err;?></span>
	</form>
  </div>
</div> 




</body>
</html>