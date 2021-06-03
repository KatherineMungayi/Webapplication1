<?php

session_start();
if(!isset($_SESSION['User']))
{
  header("location:login.php?action=login");
}
?>








<!DOCTYPE html>
<html>
<head>
  <title>HOME PAGE</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
   
  <img src="logo.png">
  <a class="navbar-brand" href="#">Soul Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="homepage.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contacts</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>   
    </ul>
  </div>  
</nav>
</header>
<div class="view" style="background-image:linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('doughnut.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center center; ">
<div class="mask rgba-gradient align-items-center">

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      
    
      <h3>
    <?php
    echo '<h2>Welcome - '.$_SESSION['User'].'</h2>';
    ?>
        </h3>
        <p>Go ahead and explore some pages on the links below</p>
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
          <a class="nav-link active" href="viewfood.php">View Foods</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="recipes.php">View Recipes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="indexer.php">Shop</a>
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <img src="burger.jpeg" class="rounded-circle" width="250" height="250">
      <h1>Join in on a foodie adventure today for an amazing experience</h1>
      <p>Order some of todays specials and learn new recipes with the click of a button</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
      tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
      quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
      consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
      cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
      proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>


      <br>
      <br>
      <br>
      <h3>Todays Featured items</h3>
      <img src="cake.jpg">
      <br>

      <img src="stew.jpg">
      <br>
      
      <br>
      <h2>CONTACTS</h2>
      <p>You can find us on the following platforms</p>
      <u>
        <li><a href="twitter.com">Twitter</a></li>
        <li><a href="Instagram.com">Instagram</li>

      </u>
      
    </div>
  </div>
</div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Soul Food 2020</p>
</div>

</body>
</html>
