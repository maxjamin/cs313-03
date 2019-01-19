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

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
	Email:<input type="text" name="email" >
	<span class="error"><?php echo $emailErr;?></span><br>
	Adress:<input type="text" name="Address">
	<span class="error"><?php echo $addressErr;?></span><br>
	State:<select name="state">
    	<option value="Alabama">Alabama</option>
    	<option value="Alaska">Alaska</option>
    	<option value="Arizona">Arizona</option>
    	<option value="Arkansas">Arkansas</option>
    	<option value="California">California</option>
    	<option value="Colorado">Colorado </option>
    	<option value="Connecticut">Connecticut</option>
    	<option value="Delaware">Delaware</option>
    	<option value="Florida">Florida</option>
    	<option value="Georgia">Georgia</option>
    	<option value="Hawaii">Hawaii</option>
    	<option value="Idaho">Idaho</option>
    	<option value="Illinois">Illinois</option>
    	<option value="Indiana">Indiana</option>
    	<option value="Iowa">Iowa</option>
    	<option value="Kansas">Kansas</option>
    	<option value="Kentucky">Kentucky</option>
    	<option value="Louisiana">Louisiana</option>
    	<option value="Maine">Maine</option>
    	<option value="Massachusetts">Massachusetts</option>
    	<option value="Michigan">Michigan</option>
    	<option value="Mississippi">Mississippi</option>
    	<option value="Missouri">Missouri</option>
    	<option value="Montana">Montana</option>
    	<option value="Nebraska">Nebraska</option>
    	<option value="Nevada">Nevada</option>
    	<option value="New Hampshire">New Hampshire</option>
    	<option value="New Jersey">New Jersey</option>
    	<option value="New Mexico ">New Mexico </option>
    	<option value="New York">New York</option>
    	<option value="North Carolina">North Carolina</option>
    	<option value="North Dakota">North Dakota</option>
    	<option value="Ohio">Ohio</option>
    	<option value="Oklahoma">Oklahoma</option>
    	<option value="Oregon">Oregon</option>
    	<option value="Pennsylvania">Pennsylvania</option>
    	<option value="Rhode Island">Rhode Island</option>
    	<option value="South Carolina">South Carolina</option>
    	<option value="South Dakota">South Dakota</option>
    	<option value="Tennessee">Tennessee</option>
    	<option value="Texas">Texas</option>
    	<option value="Utah">Utah</option>
    	<option value="Vermont">Vermont</option>
    	<option value="Virginia">Virginia</option>
    	<option value="Washington">Washington</option>
    	<option value="West Virginia">West Virginia</option>
    	<option value="Wisconsin">Wisconsin</option>
    	<option value="Wyoming">Wyoming</option>
  	</select><br>
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