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

	$emailErr = $zipErr = $addressErr = "";
	$email= $zip = $address = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

		if (empty($_POST["email"])) {
			echo "test02";
	    $emailErr = "Email is required";
	  	}else {
		    $email = test_input($_POST["email"]);
		    echo "test03";

		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email";
		      echo "test04";
		    }
	  	}

	  	if(empty($_POST["address"])){
	  		$addressErr = "please enter an adress";
	  	}
	  	else{
	  		$address = test_input($_POST["address"]);
	  	}


	  	//check for only numbers or empty
	  	if(empty($_POST["zip"])) {
			$zipErr = "Please enter a zip";
		} else {
			if(!filter_var($_POST["zip"], FILTER_VALIDATE_INT) === false){
				//collect values of inputs from form
				$zip = $_POST["zip"];
			}
		}
	}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	Email:<input type="text" name="email" >
	<span class="error"><?php echo $emailErr;?></span><br>
	Adress:<input type="text" name="Address"><br>
	<span class="error"><?php echo $addressErr;?></span><br>
	State<input type="text" name="State"><br>
	Zip:<input type="text" name="zip"><br>
	<span class="error"><?php echo $zipErr;?></span>
	<input type="submit" name="one" name="Add to Cart"><br>
</form>


<?php
echo $email;
echo $zip;
echo $address;

?>

</body>
</html>