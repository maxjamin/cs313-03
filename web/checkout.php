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
<h2>Checkout</h2>

<div class="navbar">
  <a href="main.php">Home</a>
  <a href="cart.php">Cart</a>
  <a href="checkout.php">Checkout</a> 
</div>
<br>

<h3>Please enter your personal information: </h3>

<?php
	echo "test01";
	$emailErr = $zipErr = $addressErr = "";
	$email = $zip = $address = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		//check email for address
		if (empty($_POST["email"])) {
	    	$emailErr = "Please enter your email";
	    	$email = "";
	  	}else {
		    $email = test_input($_POST["email"]);
		    echo "test03";

		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email";
		      echo "test04";
		    }
	  	}

	  	//check address for value
	  	if(empty($_POST["address"])){
	  		$addressErr = "Please enter an adress";
	  		$address = "";
	  	}
	  	else{
	  		$address = test_input($_POST["address"]);
	  	}


	  	//check zip for value
	  	if(empty($_POST["zip"])) {
			$zipErr = "Please enter a zip";
			$zip = "";
		} else {
			if(!filter_var($_POST["zip"], FILTER_VALIDATE_INT) === false){
				//collect values of inputs from form
				$zip = $_POST["zip"];
			}
		}
		
	}

	
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	
	<input type="submit" name="one" name="Add to Cart"><br>
</form>

</body>
</html>