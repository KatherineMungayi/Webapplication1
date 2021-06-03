
<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="login.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</head>
<body>
	
<h1>LOGIN details</h1>
<div class="wrapper">
<form class="form-3" action="welcome.php" method="post">
	
	
	<div class="inputs">
		<label for="Username">Username</label>
		<input type="text" name="Username" placeholder="UserName">

		<label for="Password">Password</label>
		<input type="password" name="Password" placeholder="Password">
     </div>
		
		<div class="button">
			<input type="submit" name="login" value="login" class="btn btn-info">
			<br>
			<br>
			<br>

            <a href="Registration.php">Register a new account</a>
		</div>


	

</form>
</div>
</body>
</html>