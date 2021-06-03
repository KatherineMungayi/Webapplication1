<!DOCTYPE html>
<html>
<head>
	<title>VIEW FOOD</title>
	<link rel="stylesheet" type="text/css" href="adminview.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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

 $result=$link->query("SELECT * FROM food") or die($link->error);

 ?>

 <div class="tables">
 	<table class="viewfood" style="position: center">
 		<thead>
 			<tr>
 				<th>ID</th>
 				<th>Name</th>
 				<th>Type</th>
 				<th>Preparation method</th>
 				<th>Image</th>
 				<th colspan="2">Action</th>
 			</tr>
 		</thead>

<?php
while($row=$result->fetch_assoc()):?>
	<tr>
	<td><?php echo $row['ID'];?></td>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Type'];?></td>
	<td><?php echo $row['preparation_method'];?></td>
	<td><img src="assets/<?php echo $row['Image'];?>"></td>

	<td>
		<a href="edit_food.php?edit=<?php echo $row['ID'];?>" class="btn btn-info">Edit</a>
  		<a href="delete_food.php?delete=<?php echo $row['ID'];?>" class="btn btn-danger">Delete</a>
  	</td>
  	</tr>

    


<?php endwhile ?>
</table>
</div>

</body>
</html>



































