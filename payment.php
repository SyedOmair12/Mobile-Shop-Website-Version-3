<!DOCTYPE html>
<html lang="en">
  <!-- head of the page-->
<head>
  <!-- other meta stuff-->
  <script src="scripts/part2.js"></script>
  <link href="style/style.css" rel="stylesheet"/>
  <meta charset="utf-8" />
  <meta name="description" content="enquire page of Assignment" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="syed omair"  />
  <title>Assignment-3</title>
  
  </head>
  <body>
 <?php
	include_once "includes/header.inc";
	include_once "includes/menu.inc";
?>
  
   <h2>Please complete your payment information</h2>
   
<!-- display some summary information based on the basic information -->
	<p>Full Name: <span id="fullname"></span></p>
    
	<br>
  <form  id="paymentForm" method="post" novalidate="novalidate" action="process_order.php">
    

		<!-- these information need to be sent to the server and you also want to show them, then don't use hidden-->
		<input type="hidden" name= "firstname" id="firstname" > 
		<input type="hidden" name= "lastname" id="lastname" >
		<input type="hidden" name= "email" id="email" >
		<input type="hidden" name= "streetaddress" id="streetaddress" >
		<input type="hidden" name= "suburb" id="suburb" >
		<input type="hidden" name= "state" id="state" >
		<input type="hidden" name= "postcode" id="postcode" >
		<input type="hidden" name= "phonenumber" id="phonenumber" >
		<input type="hidden" name= "contact" id="contact" >
		<fieldset>
		<legend>You have ordered:</legend>
		<p>
			<label for="iphone11promax">Iphone 11 pro max (2340.00 each)</label>
			<input type="text" id="iphone11promax" name="iphone11promax" readonly >
		</p>
		<p>
			<label for="iphonex">Iphone X (599.00 each)</label>
			<input type="text" id="iphonex" name="iphonex" readonly>
		</p>
		<p>
			<label for="oneplus">One Plus 7t pro (888.00 each)</label>
			<input type="text" id="oneplus" name="oneplus" readonly>
		</p>
		<p>
			<label for="samsung">Samsung Galaxy s20 Ultra 5g (2100.00 each)</label>
			<input type="text" id="samsung" name="samsung" readonly>
		</p>

		
		<p>Total Cost: <input type="text" name= "totalcost" id="totalcost" readonly></p>
		</fieldset>
		
		<!-- credit card information  -->
	<fieldset>
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
			<input type="text" name="cardName" id="cardName" >
		</p>
		<p> <label for="cardNumber">Card Number:</label> 
			<input type="text" name="cardNumber" id="cardNumber"  >
		</p>
		<p>
		        <label for="cardExpiry">Card Expiry Date:</label> 
			      <input type="text" name="cardExpiry" id="cardExpiry" placeholder="mm-yy" >
		
		</p>
		
		<p>
		        <label for="cardValue">Card Verification Value(cvv):</label> 
			      <input type="text" name="cardValue" id="cardValue" placeholder="cvv" >
		
		</p>
		</fieldset>
	
	<p>
			<input type= "submit" name="submitbutton" value="Check Out" >
			<input id="cancelOrder" type= "reset" value="Cancel Order" >
		</p>
	</form>
<?php include_once "includes/footer.inc"; ?>
	</body>
	
	</html>