<!DOCTYPE html>

<html>
<head>
	<title>HTML table</title>
	<link rel="stylesheet" type="text/css" href="tables.css">
  <<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<?php
	$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysql_error($mysqli));

	$result=$link->query("SELECT First_Name,Second_name,Username,ID_number,Email,Phone_Number FROM user WHERE user_type='user'") or die($link->error);
	?>
  
  <div class="tables">
  <table class="table">
  	<thead>
  		<tr>
  			<th>First Name</th>
          <th>Second Name</th>
          <th>Username</th>
          <th>ID_number</th>
          <th>Email</th>
          <th>Phone number</th>
          <th colspan="2">Action</th>
  		</tr>
  	</thead>
  	<?php
  	while ($row=$result->fetch_assoc()):?> 
  	<tr>
  		<td><?php echo $row['First_Name'];?></td>
  		<td><?php echo $row['Second_name'];?></td>
  		<td><?php echo $row['Username'];?></td>
  		<td><?php echo $row['ID_number'];?></td>
  		<td><?php echo $row['Email'];?></td>
  		<td><?php echo $row['Phone_Number'];?></td>
  		
        
        <td>
  		<a href="edit_user.php?edit=<?php echo $row['ID_number'];?>" class="btn btn-info">Edit</a>
  		<a href="delete_user.php?delete=<?php echo $row['ID_number'];?>" class="btn btn-danger">Delete</a>

  	</td>
  	</tr>
  	<?php endwhile ?>
  </table>
</div>
      <div class="redirect">
      <a href="admin.php" style="font-size: 30px;">BACK</a>
</div>
</body>
</html>