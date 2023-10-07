<!DOCTYPE html>
<html lang="en">
<head>
<title> Receipt </title>
  <!--<meta charset="utf-8" > -->
  <meta name="description" content="receipt" />
  <meta name="keywords" content="HTML, CSS , php, mysql" />
  <meta name="author" content="syed omair"  />
  <link href="style/style.css" rel="stylesheet">
  <body>	
<?php
	include_once "includes/header.inc";
	include_once "includes/menu.inc";
?>
<h2>Receipt Page</h2>
<?php
	
	include_once "includes/header.inc";
	include_once "includes/menu.inc";	
		
	echo "<h2>Receipt</h2>";

	if (!isset($_GET["db_msg"])) {// not from process_order.php, redirection
		header("location:enquire.php");
		exit();
	}
	else { // from process_order.php, display receipt
		echo $_GET["db_msg"];
	}
	

?>

<br><br>
<br><br>	
<?php
	include_once "includes/footer.inc";
?>
</body>
</html>
	
   