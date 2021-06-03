<?php


session_start();
$link=mysqli_connect('localhost','root','','food_recipe_site') or die("ERROR");
if(isset($_POST['login']))
{
	if(empty($_POST["Username"]) || empty($_POST["Password"]))
	{
    header("location:login.php");
	}
	else
  {
     $sql="SELECT * from user WHERE Username= '".$_POST["Username"]."' and Password = '".$_POST["Password"]."'";
     //$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysqli_error($mysqli));
     $result=mysqli_query($link,$sql);
     $row=mysqli_fetch_array($result);

     
   if($row['Username'] == $_POST['Username'] && $row['Password'] == $_POST['Password'] )
   {
    if($row['user_type'] == 'user')
    {
        
        $_SESSION['User']= $row["Username"];
        $_SESSION['Email']=$row["Email"];


        

      
        header("location:Home.php");
        exit();
    }
    else
    {
        
        $_SESSION['User'] = $row["Username"];
        header("location:admin.php");
        exit();
    }
   }
   else
   {
    echo "Enter correct credentials";
    $link ->close();
    header("location:login.php");
   }
}
}
   ?>