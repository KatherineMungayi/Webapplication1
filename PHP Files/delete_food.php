<?php

$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysql_error($mysqli));

	

if(isset($_GET['delete'])) {
	$id=$_GET["delete"];
	$link->query("DELETE FROM food WHERE ID=$id") or die($link->error());

	echo "Successfully deleted record";

	header('Location:adminview.php');
	

}
?>