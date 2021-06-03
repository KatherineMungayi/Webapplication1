<?php

session_start();

include("connecter.php");


if(isset($_POST['Checkout']))
{
	$Username=$_SESSION['User'];
	$Quantity=$_SESSION['amount'];
	$ItemName=$_SESSION['ItemName'];
	$Total=$_SESSION['Cost'];


	$sql="INSERT INTO orderdetails(Username,Quantity,ItemName,Total)VALUES ('$Username','$Quantity','$ItemName','$Total')";

	setData($sql);

	$_SESSION['message']="You have successfully placed an order";

	header("location:orders.php");


}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Order page</title>
	<link rel="stylesheet" type="text/css" href="orders.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<div class="box-area">

	<div class="background">
		<div class="textbox">
		<?php
		echo '<h1>Thank you - '.@$_SESSION['User'].'</h1>';
		?>
  <p>we hope to see you soon again.Thank you for odering with us</p>
</div>
</div>
</body>
</html>