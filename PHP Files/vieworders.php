<!DOCTYPE html>
<html>
<head>
	<title>VIEW ORDERS</title>
	<link rel="stylesheet" type="text/css" href="vieworders.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body style="background-image:linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('doughnut.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center center; ">
	
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">

  <img src="logo.png">
  <a class="navbar-brand" href="#">Soul Food</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="admin.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>  
</nav>





<?php
 

 $link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysqli_error($mysqli));

 $result=$link->query("SELECT * FROM orderdetails") or die($link->error);

 ?>

 <div class="tables">
 	<table class="vieworders" style="position: center;" >
 		<thead>
 			<tr>
 				<th>Username</th>
 				<th>Quantity</th>
 				<th>ItemName</th>
 				<th>Total</th>
 				
 			</tr>
 		</thead>

<?php
while($row=$result->fetch_assoc()):?>
	<tr>
	<td><?php echo $row['Username'];?></td>
	<td><?php echo $row['Quantity'];?></td>
	<td><?php echo $row['ItemName'];?></td>
	<td><?php echo $row['Total'];?></td>
	


    </tr>


<?php endwhile ?>
</table>
</div>
</body>
</html>



































