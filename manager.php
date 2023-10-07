<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="description" content="manager" />
  <meta name="keywords" content="php, html etc" />
  <meta name="author" content="syedomair"  />
  <link href="style/style.css" rel="stylesheet"/>
  <title>Manager page</title>

</head>
<body>
	<h2> Manage the order list </h2>
<form id="query" method="post">

		<fieldset>
		<p>
			<label for="qs">Query :</label>
			<select name="qs" id="qs">
				<option value="">...</option>
				<option value="all">All Orders</option>
				<option value="cub">Orders for a customer based on their name</option>			
				<option value="prod">Orders for a particular product</option>
				<option value="pend">Orders that are pending</option>
				<option value="tcost">Orders sorted by total cost</option>
			</select>
			<input type="submit" value="search" />
		</p>
		</fieldset>
<h3><a href="index.php">Click here to go back to the Homepage.</a></h3>
</form>

<?php

	require_once ("settings.php");
	error_reporting(0);
	$conn = @mysqli_connect($host,$user,$pwd,$sql_db);
	
	$sql_table="orders";
	$update = "";
	$select = $_POST[qs];
	
//	$result = mysqli_query($conn,$query);

	switch($select)
	{
		case "all":
				$query = "SELECT * FROM `$sql_table` Order by order_id";
				$result = mysqli_query($conn,$query);
			break;
		case "cub":
				$query = "SELECT * FROM `$sql_table` Order by First_Name,Last_Name";
				$result = mysqli_query($conn,$query);
			break;
		case "prod":
				$query = "SELECT * FROM `$sql_table` Order by Iphone11promax,IphoneX,Oneplus,Samsung";
				$result = mysqli_query($conn,$query);
			break;
		case "pend":
				$query = "SELECT * FROM `$sql_table` order by order_status = 'PENDING'";
				$result = mysqli_query($conn,$query);
			break;
		case "tcost":
				$query = "SELECT * FROM `$sql_table` Order by order_cost ";
				$result = mysqli_query($conn,$query);
			break;
	}
	
	
	if(!$conn){
		echo "<p>Database connection failure</p>";
	} else {
		
		if(!$result){
			echo "<p>", $query, "</p>";
		} else {
			echo "<table border=\"1\">\n";
			echo "<tr>\n"
			."<th scope=\"col\">ID</th>\n"
				."<th scope=\"col\">First Name</th>\n"
				."<th scope=\"col\">Last Name</th>\n"
				."<th scope=\"col\">Iphone 11 pro max</th>\n"
				."<th scope=\"col\">Iphone X</th>\n"
				."<th scope=\"col\">One plus 7t</th>\n"
				."<th scope=\"col\">Samsung galaxy</th>\n"
				."<th scope=\"col\">Total</th>\n"
				."<th scope=\"col\">Order Date</th>\n"
				."<th scope=\"col\">Order Status</th>\n"
				."<th scope=\"col\">Update</th>\n"
				."<th scope=\"col\">Drop</th>\n"
				."<tr>\n";
				
			
					while ($row=mysqli_fetch_assoc($result)){
				echo "<tr>\n";
				echo "<td>",$row["order_id"],"</td>\n";
				echo "<td>",$row["First_Name"],"</td>\n";
				echo "<td>",$row["Last_Name"],"</td>\n";
				echo "<td>",$row["Iphone11promax"],"</td>\n";
				echo "<td>",$row["IphoneX"],"</td>\n";
				echo "<td>",$row["Oneplus"],"</td>\n";
				echo "<td>",$row["Samsung"],"</td>\n";
				echo "<td>",$row["order_cost"],"</td>\n";
				echo "<td>",$row["order_time"],"</td>\n";
				echo "<td>",$row["order_status"],"</td>\n";
				echo "<td><form method='post'><select name='update'>
				<option value='PENDING'>",'<p>PENDING</p>',"</option>
				<option value='FULLFILLED'>",'<p>FULLFILLED</p>',"</option>
				<option value='PAID'>",'<p>PAID</p>',"</option>
				<option value='ARCHIVED'>",'<p>ARCHIVED</p>',"</option></select><input type='submit' value='Update' /></form></td>\n";
				
			
				
				if($row["order_status"]=="PENDING")
				{
					echo "<td><form><input type='submit' value='Delete'/></form></td>\n";
				}

				echo "<tr>\n";
			}
			echo "</table>\n";
			
			mysqli_free_result($result);
		}
		mysqli_close($conn);
	}
?>
</body>
</html>
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			