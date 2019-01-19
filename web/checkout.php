<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel = "stylesheet" type = "text/css" href = "myStyle.css" />
</head>


<body>
<h2>Checkout</h2>

<div class="navbar">
  <a href="main.php">Home</a>
  <a href="cart.php">Cart</a>
  <a href="checkout.php">Checkout</a> 
</div>
<br>

<h3>Please enter your personal information: </h3>

<?php

	$emailErr = "";
	$email = "";

	if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      		$emailErr = "Invalid email format";
      		echo "Error";
    	}
    	else
    	{ $email = test_input($_POST["email"]); }
  }


?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	Email:<input type="text" name="email" ><br>
	<span class="error"><?php echo $emailErr;?></span>
	Adress:<input type="text" name="Adress"><br>
	State<input type="text" name="quantityOne"><br>
	Zip:<input type="text" name="quantityOne"><br>
	<input type="submit" name="one" name="Add to Cart"><br>
</form>


</body>
</html>