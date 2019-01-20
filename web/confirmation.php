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

    $productTwo = $_SESSION["ProductTwo"];
    $productTwoQuantity = $_SESSION["ProductTwoQuantity"];

    $productThree = $_SESSION["ProductThree"];
    $productThreeQuantity = $_SESSION["ProductThreeQuantity"];

    echo "User information: " . $userInfo . "<br>" .$address . "<br>" . $state . "<br>" . $zip . "<br>" . $email . "<br><br>";

    if($productOneQuantity > 0)
    {
        echo "Product One:" . "<br>" . $productOne . "<br>" . "With " . $productOneQuantity . " number of items.";
    }
    if($productTwoQuantity > 0)
    {
        echo "Product Two:" . "<br>" . $productTwo . "<br>" . "With " . $productTwoQuantity . " number of items.";
    }
    if($productThreeQuantity > 0)
    {
        echo "Product Three:" . "<br>" . $productThree . "<br>" . "With " . $productThreeQuantity . " number of items.";
    }


?>

</body>
</html>