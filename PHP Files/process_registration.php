<?php


//require_once("connecter.php");

$link=mysqli_connect('localhost','root','','food_recipe_site') or die("ERROR");

if(isset($_POST["register"])){

$First_Name=$_POST["FirstName"];
$Second_Name= $_POST["SecondName"];
$Username=$_POST["Username"];
$ID_number=$_POST["IDnumber"];
$Email=$_POST["Email"];
$Phone_Number=$_POST["PhoneNumber"];
$Password=$_POST["Password"];
$user_type=$_POST["UserType"];





$sql="INSERT INTO user(First_Name,Second_Name,Username,ID_number,Email,Phone_Number,Password,user_type)VALUES('$First_Name','$Second_Name','$Username','$ID_number','$Email','$Phone_Number','$Password','$user_type')";

 $result=mysqli_query($link,$sql);
 $row=mysqli_fetch_array($result);

 header("Location:fixedhead.html");




}

	


?>








  if(mysqli_fetch_assoc($result))
     {
       $_SESSION['User']=$_POST["Username"];
       header("location:work.html");
     }
     else
     {
     	header("location:login.php?Invalid= Please enter correct username and password");
     }
	}
}



 
?>