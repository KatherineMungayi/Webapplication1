<?php
function connect(){
$server="localhost";
$username="root";
$password="";
$database="food_recipe_site";

$link=mysqli_connect($server,$username,$password,$database) or die("Could not connect".mysqli_connect_error());
return($link);
}

function setData($sql)
{
	$link=connect();
	if (mysqli_query($link,$sql))
	 {
		echo "success operation";
	}
	else
	{
		echo "ERROR".mysqli_error($link);
	}
}
?>