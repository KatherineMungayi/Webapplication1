<?php

session_start();
if(!isset($_SESSION['User']))
{
  header("location:login.php?action=login");
}
?>





<!DOCTYPE html>
<html lang="en">
<head>
  <title>RECIPE PAGE</title>
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <style>
  .img {
    height: 200px;
  
  }
  </style>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <img src="logo.png">
  <a class="navbar-brand" href="#">Soul Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="Home.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>  
</nav>

<div class="container" style="margin-top:30px">
  <div class="row">
    <div class="col-sm-4">
      <ul class="nav nav-pills flex-column">
        <li class="nav-item">
           <h1>
    <?php
    echo '<h1>Welcome - '.$_SESSION['User'].'</h1>';
    ?>
        </h1>
          <a class="nav-link active" href="Home.php">Back</a>
        
        </li>
      </ul>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-7">
      <h2>RECIPES</h2>
      <br>
      <h3>Vanilla Cake</h3>
      
      <div class="img">
        <img src="cake.jpg">
        <img src="cakepink.jpg">
      
      </div>
      <br>
      <br>
      <br>
      
      <p>Cake is almost becoming a staple food in the whole world.</p>
      <br>
      <h2>Ingredients</h2>
      <ul>
        <li>Eggs</li>
        <li>Butter</li>
        <li>Margarine</li>
        <li>Milk</li>
        <li>Yeast</li>
        <li>Vanilla</li>
        <li>Baking Flour</li>
        <li>Whipping cream</li>
      </ul>

      <h3>Procedure</h3>
      <ul>
        <li>Put baking flour in a large bowl</li>
        <li>Add two cups of milk</li>
        <li>Mix the mixuture of the two</li>
        <li>Beat two eggs and mix it in a cup,pour the contents of the cup into the bowl</li>
        <li>Preheat the oven to 400 degrees</li>
        <li>Put the mixture in a metal container and place in the oven</li>

        <br>
        <br>

        <h3>Noodles</h3>
        <div class="col-sm-7">
      
      
      <div class="img">
        <img src="noodles.jpg" style="height: auto;">
        
      
      </div>
      <br>
      <br>
      <br>
      
      <p>Noodles was originally made in the Asian countries and has become a widesoread avorite throughput the  world.</p>
      <br>
      <h2>Ingredients</h2>
      <ul>
        <li>Baking flour</li>
        <li>Chilli</li>
        <li>Yeast</li>
        <li>Milk</li>
        <li>Green beans</li>
      </ul>

      <h3>Procedure</h3>
      <ul>
        <li>Put baking flour in a large bowl</li>
        <li>Add two cups of milk</li>
        <li>Mix the mixuture of the two</li>
        <li>Roll the mixture using a rolling pin</li>
        <li>Preheat the oven to 400 degrees</li>
        <li>Put the mixture in a metal container and place in the oven</li>

  </div>
</div>

<div class="jumbotron text-center" style="margin-bottom:0">
  <p>Soul Food 2020</p>
</div>

</body>
</html>
