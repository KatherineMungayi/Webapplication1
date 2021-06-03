<?php
session_start();

$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysqli_error($mysqli));


?>



<!DOCTYPE html>
<html>
<head>
	<title>Edit User Form</title>
	<link rel="stylesheet" type="text/css" href="edituser.css">
</head>
<body>
	<header>
		<div class="wrapper">
		<div class="logo">
		<img src="logo.png" class="profile-img">
		<a>Soul food</a>
		</div>
		<nav>
		<a href="homepage.php">Home</a>
		<a href="">Shop</a>
		<a href="logout.php">Log Out</a>
		</nav>
	</div>
	</header>
<?php


if(isset($_GET['edit']))
{
$id=$_GET["edit"];
$process=true;
$result=mysqli_query($link,"SELECT * FROM user WHERE ID=$id");
         foreach (mysqli_query($link,$result) as $row){
	?>


	<center>
		<h1>EDIT FORM</h1>
	<form method="post" action="connecter.php">
		<div class="inputs">
			<label>First Name: </label>
			<input type="text" name="FirstName" value="<?php echo $FirstName; ?>">
			<label>Second Name: </label>
			<input type="text" name="SecondName" value="<?php echo $SecondName; ?>">
			<label>Username: </label>
			<input type="text" name="Username" value="<?php echo $Username; ?>">
			<label>Email Address: </label>
			<input type="email" name="Email" value="<?php echo $Email; ?>">
			<label>Phone No: </label>
			<input type="tel" name="PhoneNumber" value="<?php echo $Phone_Number; ?>">


			<input type="submit" name="edit" value="edit">
</div>
</form>
</center>
</body>
</html>
<?php   }
}
?>