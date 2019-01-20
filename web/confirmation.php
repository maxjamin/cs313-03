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
</div>
<br>

<h3>Purchase: </h3>

<?php
    $address = $_SESSION["address"];
    $zip = $_SESSION["zip"];
    $email = $_SESSION["email"];
    $state = $_SESSION["state"];

    $productOne = $_SESSION["ProductOne"];
    $productOneQuantity = $_SESSION["ProductOneQuantity"];

    echo $userInfo . "<br>" .$address . "<br>" . $state . "<br>" . $zip . "<br>" . $email . "<br>";

    echo "Product One:" . <br> . $productOne . <br> . "With " $ProductOneQuantity . " number of items.";


?>

</body>
</html>