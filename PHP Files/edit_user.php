<?php

$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysql_error($mysqli));



if(isset($_GET['edit'])){
	$id=$_GET["edit"];
	$process=true;
	$result=mysqli_query($link,"SELECT * FROM user WHERE ID_number=$id");

	if(count($result)==1){
		$row=mysqli_fetch_array($result);
		$FirstName=$row['First_Name'];
		$SecondName=$row['Second_name'];
		$Username=$row['Username'];
		$Email=$row['Email'];
		$PhoneNumber=$row['Phone_Number'];

	}


}
?>

	































?>