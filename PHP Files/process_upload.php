<?php
require_once("connecter.php");

if(isset($_POST["submitImage"])) {

   $food_name=$_POST["fooditem"];
   $food_type=$_POST["food-type"];
   $prep_method=$_POST["preparation_method"];
   $food_image=$_FILES["food-image"];
   $price=$_POST["Price"];
   
   $original_file_name=$_FILES["food-image"]["name"];
   $file_type_location=$_FILES["food-image"]["tmp_name"];

   $file_type=substr($original_file_name, strpos($original_file_name, '.'),strlen($original_file_name));

   //create a folder called assets folder
   $file_path="assets/";

   $new_file_name=time().$file_type;

  if(move_uploaded_file($file_type_location,$file_path.$new_file_name)) {

  	$sql="INSERT INTO food(Name,Type,preparation_method,Image,Price)VALUES('$food_name','$food_type','$prep_method','$new_file_name','$price')";
  	

  	if(setData($sql))
  	{
  		header("location:adminview.php");

  	}
  }
}

?>