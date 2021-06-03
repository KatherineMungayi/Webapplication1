
<!DOCTYPE html>
<html>
<head>
	<title>Register </title>
	<link rel="stylesheet" type="text/css" href="registration.css">
</head>
<body>
    <h1>Registration</h1>
	<form class="form-4" action="process_registration.php "  method="post">

		<div class="inputs">
		<label for="FirstName">First Name</label>
		<input type="text" name="FirstName" placeholder="FirstName">
	    

	    <label for="SecondName">Second Name</label>
		<input type="text" name="SecondName" placeholder="SecondName">
	
        <label for="ID number">ID number</label>
		<input type="number" name="IDnumber" placeholder="IDnumber">
        
        <label for="Email">Email</label>
        <input type="email" name="Email" placeholder="emailaddress">
        
        <label for="PhoneNumber">Phone Number</label>
		<input type="number" name="PhoneNumber" placeholder="PhoneNo">

        <label for="Password">Password</label>
        <input type="password" name="Password" placeholder="Create new password">

        <label for="ConfirmPassword">PasswordConfirmation</label>
        <input type="password" name="ConfirmPassword" placeholder="Confirm new password">

        <label for="Username">UserName</label>
        <input type="text" name="Username" placeholder="UserName">

        <label for="UserType">User Type</label>
        <input type="text" name="UserType" placeholder="userType">
        </div>
        <div class="button">
		<input type="submit" name="register" value="register">
        </div>
        
        
    


     
</form>

</body>
</html>