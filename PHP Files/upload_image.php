<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
	<link rel="stylesheet" type="text/css" href="upload_image.css">
</head>
<body>
	<div class="UploadForm">
	<form action="process_upload.php" method="POST" enctype="multipart/form-data">
		<div class="inputs">
		<label for="fooditem">Food name: </label>
		<input type="text" name="fooditem" required="true" placeholder="fooditem"><br><br>

		<label for="foodtype">Food Type</label>
        <input type="text" name="food-type" id="foodtype" required="true"><br><br>

		<label for="foodimage">Food image</label>
		<input type="file" name="food-image" required="true" id="food-image"><br><br>

		<label for="preparation method">Preparation method</label>
		<input type="text" name="preparation_method" required="true"><br><br>

		<label for="Price">Price</label>
		<input type="text" name="Price" required="true"><br><br>
        </div>
		



      
       



        <div class="button">
		<input type="submit" name="submitImage" value="SAVE">
        </div>

        <br>
        <br>

        <a href="admin.php" style="border: 2px solid black;">Back</a>
        







</form>
</div>
</body>
</html>