<?php
session_start();
$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysql_error($mysqli));

	

if(isset($_GET['delete'])) {
	$id=$_GET["delete"];
	$link->query("DELETE FROM user WHERE ID_number=$id") or die($link->error());

	echo "Successfully deleted record";

	header('Location:tables.php');
	

}
?>