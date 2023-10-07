<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" >
	<meta name="description" content="fixing the errors from orders     " >
	<meta name="keywords" content="      " >
	<meta name="author" content=" syed omair"  >
	<title>And Company </title>
	<link href="styles/style.css" rel="stylesheet" >
</head>
<body>
<?php
	$page="payment_page"; // used by nav.inc to know which page is the current page
	include_once "includes/header.inc";
	include_once "includes/nav.inc";
?>

	<h2>Please Fix the Errors</h2>

<?php 
	// *******************  not from process_order.php, redirection
	if (!isset($_GET["err_msg"])) {
		header("location:enquire.php");
		exit();// terminiate 
	}
	// **********************   from process_order.php
	// display error message  
	echo "<div class='error'>";
	echo $_GET["err_msg"];
	echo "</div>";
	// get values
	session_start();
	if (isset($_SESSION["firstname"]))    // first name
		$firstname=$_SESSION["firstname"];
	else 
		$firstname="";
	 
	if (isset($_SESSION["lastname"]))    // last name
		$lastname=$_SESSION["lastname"];
	else 
		$lastname="";
	
	if (isset($_SESSION["email"]))    // emai/
		$email=$_SESSION["email"];
	else 
		$email="";
	
	if (isset($_SESSION["postcode"]))    // postcode
		$postcode=$_SESSION["postcode"];
	else 
		$postcode="";
	
	if (isset($_SESSION["streetaddress"]))  // streetaddress
		$streetaddress=$_SESSION["streetaddress"];
	else 
		$streetaddress="";
	
	if (isset($_SESSION["suburb"]))    // suburb
		$suburb=$_SESSION["suburb"];
	else 
		$suburb="";
	
	if (isset($_SESSION["state"]))    // state
		$state=$_SESSION["state"];
	else 
		$state="";
	
	
	if (isset($_SESSION["preferredcontact"]))    // preferredcontact
		$preferredcontact=$_SESSION["preferredcontact"];
	else 
		$preferredcontact="";
	
	
	if (isset($_SESSION["features"]))    // features
		$features=$_SESSION["features"];
	else 
		$features="";
	
	if (isset($_SESSION["iphone11promax"]))    // iphone11promax
		$iphone11promax=$_SESSION["iphone11promax"];
	else 
		$iphone11promax="0";

	if (isset($_SESSION["iphonex"]))   // iphonex
		$iphonex=$_SESSION["iphonex"];
	else 
		$iphonex=0;
	
	if (isset($_SESSION["oneplus"]))   // oneplus
		$oneplus=$_SESSION["oneplus"];
	else 
		$oneplus=0;
	
	if (isset($_SESSION["samsung"]))   // samsung
		$samsung=$_SESSION["samsung"];
	else 
		$samsung=0;
		
?>
	<!-- fill up values in form  -->
	<form method="post" novalidate="novalidate" action="process_order.php">
		<p>
			<label for="firstname">First Name</label>
			<input type="text" id="firstname" name="firstname" value="<?php echo $firstname; ?>" >
		</p>
		<p>
			<label for="lastname">Last Name</label>
			<input type="text" id="lastname" name="lastname" value="<?php echo $lastname; ?>" >
		</p>
		<p>
			<label for="email">Email</label>
			<input type="text" id="email" name="email" value="<?php echo $email; ?>" >
		</p>
		<p>
			<label for="streetaddress">Street Address</label>
			<input type="text" id="streetaddress" name="streetaddress" value="<?php echo $streetaddress; ?>" >
		</p>
		<p>
			<label for="suburb">Suburb</label>
			<input type="text" id="suburb" name="suburb" value="<?php echo $suburb; ?>" >
		</p>
		<p><label for="state">State</label> 
			<select name="state" id="state" required="required">
				<option value="">Please Select</option>			
				<option value="VIC">VIC</option>
				<option value="NSW">NSW</option>
				<option value="QLD">QLD</option>
				<option value="NT">NT</option>
				<option value="WA">WA</option>
			    <option value="WA">SA</option>
				<option value="TAS">TAS</option>
				<option value="ACT">ACT</option>
			</select>
			</p>
		<p>
			<label for="postcode">Postcode</label>
			<input type="text" id="postcode" name="postcode" value="<?php echo $postcode; ?>" >
		</p>
		<p>
			<label for="phonenumber">Phone Number</label>
			<input type="text" id="phonenumber" name="phonenumber" value="<?php echo $phonenumber; ?>" >
		</p>
		 <p>Preferred Contact<br />
	     <label><input type="radio" id="preferredcontact" name="preferredcontact" value="email" required="required" /> Email</label>
		 
		 <label><input type="radio" name="preferredcontact" value="post"  /> Post</label>
		 
		 <label><input type="radio" name="preferredcontact" value="phone"  />Phone</label>
	 </p>
		<p>
			<label for="features">Features</label>
			<input type="text" id="features" name="features" value="<?php echo $features; ?>" >
		</p>
		<p>Your Order</p>
		<p>
			<label for="iphone11promax">Iphone 11 pro max</label>
			<input type="text" id="iphone11promax" name="iphone11promax" value="<?php echo $iphone11promax; ?>" >
		</p>
		<p>
			<label for="iphonex">Iphone X</label>
			<input type="text" id="iphonex" name="iphonex" value="<?php echo $iphonex; ?>" >
		</p>
		<p>
			<label for="oneplus">One plus </label>
			<input type="text" id="oneplus" name="oneplus" value="<?php echo $oneplus; ?>" >
		</p>
		<p>
			<label for="samsung">Samsung</label>
			<input type="text" id="samsung" name="samsung" value="<?php echo $samsung; ?>" >
		</p>
		<!-- credit card information  -->
		<!-- credit card information  -->
	<fieldset id="card">
		<legend>Payment Details</legend>
		<p>
			<label for="cardType">Card Type:</label>
			<select name="cardType" id="cardType">
			    <option value="">Please Select</option>
				<option value="visa">Visa</option>			
				<option value="master">MasterCard</option>
				<option value="amex">American Express</option>
			</select>
		<p>	
		<p>
			<label for="cardName">Name on Card:</label> 
			<input type="text" name= "cardName" id="cardName" >
		</p>
		<p> <label for="cardNumber">Card Number:</label> 
			<input type="text" name= "cardNumber" id="cardNumber"  >
		</p>
		<p>
		        <label for="cardExpiry">Card Expiry Date:</label> 
			      <input type="text" name= "cardExpiry" id="cardExpiry" placeholder="mm-yy" >
		
		</p>
		
		<p>
		        <label for="cardValue">Card Verification Value(cvv):</label> 
			      <input type="text" name= "cardValue" id="cardValue" placeholder="cvv" >
		
		</p>
		</fieldset>
	
	<p>
			<input type= "submit" value="Check Out" >
			<input id="cancelOrder" type= "reset" value="Cancel Order" >
		</p>
	</form>
	
<?php
	include_once "includes/footer.inc";
?>
</body>
</html>