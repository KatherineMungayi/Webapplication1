<!DOCTYPE html>
<html>
<head>
	<title>VIEW FOOD</title>
	<link rel="stylesheet" type="text/css" href="viewfood.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	





<?php
 

 $link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysqli_error($mysqli));

 $result=$link->query("SELECT * FROM food") or die($link->error);

 ?>

 <div class="tables">
 	<table class="viewfood" >
 		<thead>
 			<tr>
 				<th>Name</th>
 				<th>Type</th>
 				<th>Preparation method</th>
 				<th>Image</th>
 				
 			</tr>
 		</thead>

<?php
while($row=$result->fetch_assoc()):?>
	<tr>
	<td><?php echo $row['Name'];?></td>
	<td><?php echo $row['Type'];?></td>
	<td><?php echo $row['preparation_method'];?></td>
	<td><img src="assets/<?php echo $row['Image'];?>"></td>


    </tr>


<?php endwhile ?>
</table>
</div>
</body>
</html>



































