<?php

session_start();

$link=mysqli_connect('localhost','root','','food_recipe_site') or die(mysqli_error($mysqli));

if(isset($_POST["add_to_cart"]))
{
	if (isset($_SESSION["shopping_cart"])) 
	{
		$item_array_id=array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array(@$_GET["ID"],$item_array_id))
		{
         $count=count($_SESSION["shopping_cart"]);
         $item_array = array(
        'item_id' =>@ $_GET["ID"],
     	'item_name' => $_POST["hidden_name"],
     	'item_price' => $_POST["hidden_price"],
     	'item_quantity' =>$_POST["quantity"] 
          );
         $_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
        echo '<script>alert("Item already added")</script>';
        echo '<script>window.location="indexer.php"</script>';
		}
	}
	else
	{
     $item_array=array(
     	'item_id' =>@ $_GET["ID"],
     	'item_name' => $_POST["hidden_name"],
     	'item_price' => $_POST["hidden_price"],
     	'item_quantity' =>$_POST["quantity"] 
     	 );
     $_SESSION["shopping_cart"][0]=$item_array;
	}
}
if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach ($_SESSION["shopping_cart"] as $key => $value) 
		{
			if($value["item_id"] == $_GET["ID"])
			{

	       echo "Successfully deleted record";
            unset($_SESSION["shopping_cart"][$key]);
            echo '<script>alert("Item removed from cart")</script>';
            echo '<script>window.location="indexer.php"</script>';

		    }
		}
	}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopping cart</title> 
           
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
</head>
<body style="background-image:linear-gradient(rgba(255,255,255,0.75),rgba(255,255,255,0.75)), url('doughnut.jpeg'); background-repeat: no-repeat; background-size: cover; background-position: center center; ">">

    <br />
	<div class="container" style="width:700px">
		<h3 align="center">ON SALE</h3><br />
        <?php
          $result=$link->query("SELECT * from food") or die ($link->error);
        if(mysqli_num_rows($result) > 0)
        {
           while($row=mysqli_fetch_array($result))
           {
           ?>
           <div class="col-md-4">
           	<form method="post" action="indexer.php?action=add&ID<?php echo $row["ID"]; ?>" >
           		<div style="border:1px solid #333;background-color: #f1f1f1; border-radius:5px padding:16px;" align="center">


           			<br>
           			<img src="assets/<?php echo $row["Image"];?>" width="50" height="50" />
           			<h4 class="text-info"><?php echo $row["Name"]; ?></h4>
           			<h4 class="text-info"><?php echo $row["Price"]; ?></h4>
           			<<input type="text" name="quantity" class="form-control" value="1"  />
                    <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                   <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                   <input type="submit" name="add_to_cart" style="margin-top: 5px;" class="btn btn-success" value="Add to Cart" />

                   <br>
           		</div>
           		
           	</form>

           </div>
           <?php

           }
        }

        ?>
        <div style="clear:both"></div>
        <br>
        <h3>Orders</h3>
        <div class="table-responsive">
        	<table class="table-bordered">
        		<tr>
        			<th>Item Name</th>
        			<th>Quantity</th>
        			<th>Price</th>
        			<th>Total</th>
        			<th>Action</th>

        		</tr>
        		<?php
        		if(!empty($_SESSION["shopping_cart"]))
        		{
        			$total=0;
        			foreach ($_SESSION["shopping_cart"] as $key => $value) 
        			{
        				?>
        				<tr>
        					<form action="orders.php" method="POST">
        					
        					<td><?php echo $value["item_name"]; ?></td>
        					
        					<?php 
        					$_SESSION["ItemName"]=$row["Name"];
        					?>

        					<td><?php echo $value["item_quantity"]; ?></td>
        					<?php
        					$_SESSION["amount"]=$row["quantity"];
        					?>


        					<td>$ <?php echo $value["item_price"]; ?></td>


        					<td>$ <?php echo number_format($value["item_quantity"] * $value["item_price"], 2); ?></td>
        					<?php
        					$_SESSION["Cost"] = $row["Price"] * $row["quantity"];
        					?>


        					<td><a href="indexer.php?action=delete&ID=<?php echo $value["item_id"]; ?>"><span class ="text-danger">Delete</span></a></td>
        				</tr>
        				
        				<?php 
        				 $total=$total +($value["item_quantity"]*$value["item_price"]);
        			
        			}
        			?>
        			<tr>
        				<td colspan="3" align="right">Total</td>
        				<td align="right">$ <?php echo number_format($total, 2);?></td>
        				<td></td>
        			</tr>
        			<?php
        		}
        		?>
            <input type="submit" name="Checkout" value="Checkout">


          </form>
        	</table>
        </div>

	</div>
  <a href="Home.php" style="font-size: 40px;">BACK</a>
    <br />
</body>
</html>
