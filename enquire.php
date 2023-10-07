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
  <!--The code below is for the body of the page -->
  <!-- header -->
 <?php
	include_once "includes/header.inc";
	include_once "includes/menu.inc";
?>
   
  
  
 <h1> Enquiry About The Product </h1>
 
  <p>  Enquire about the product which you prefer to have.</p>
  <p>  Go through the variety of the products and the availability of different features as you required. </p>
  <!-- The details entered in the form are transfered to the given below server--> 
<form id="enquireForm"  novalidate="novalidate" action="payment.php">

	<fieldset><!-- fieldset -->
	<!-- details about the customer -->
	<legend> Customer Details</legend>
	
	<p><label for="firstname">First Name</label> 
			<input type="text" name="firstname" id="firstname" maxlength="25"  pattern="^[a-zA-Z]+$" required="required"/>
			
			<label for="lastname">Last Name</label> 
			<input type="text" name="lastname" id="lastname" maxlength="25" pattern="^[a-zA-Z]+$" required="required"/>
	</p>
	<p><label for="email">Email address
	        <input type="text" name="email" id="email" placeholder="name@domain.com" required="required"/>
			</label>
	</P>
	</fieldset>
	
	<fieldset>
	<!-- living details about the customer -->
    <legend> Address</legend>
	
	<p><label for="streetaddress">Street address</label>
	   <input type="text" name="streetaddress" id="streetaddress" maxlength="40" required="required"/>
	   
	    <label for="suburb">Suburb/town</label>
		<input type="text" name="suburb" id="suburb" maxlength="20" required="required"/>
	</p>
		
	<p>
	<label for="state">State</label> 
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
    <label for="postcode">Postcode</label>
	       <input type="text" name="postcode" id="postcode" placeholder="####"  pattern="^[0-9]{4,4}" required="required"/>
	</p>
	</fieldset>
	
	<fieldset>
	<!-- contact information about the customer -->
	<legend>Contact Information</legend>
	 
	 <p> 
	 <label for="phonenumber">Phone number</label>
	    <input type="text" name="phonenumber" id="phonenumber"  placeholder="##########" pattern="^[0-9]{10,10}" required="required" />
	 </p>
	 
	 <p>Preferred Contact<br />
	     <label><input type="radio" id="contact" name="contact" value="email" required="required" /> Email</label>
		 
		 <label><input type="radio" name="contact" value="post"  /> Post</label>
		 
		 <label><input type="radio" name="contact" value="phone"  />Phone</label>
	 </p>
	</fieldset>
	<!-- Features about the mobile -->
	<fieldset>
	<legend>Mobile Description</legend>
	
	
    <p> Mobile Features<br />
	  <label><input type="checkbox" name="features[]" checked="checked"
	     value="touchscreen" />Touch Screen</label>
	   <label><input type="checkbox" name="features[]"
	     value="camera" />Camera</label>
	 <label><input type="checkbox" name="features[]"
	     value="ram" />RAM</label>
     <label><input type="checkbox" name="features[]"
	     value="storage" />Storage</label>
	 <label><input type="checkbox" name="features[]"
         value="processor" />Processor</label>
     <label><input type="checkbox" name="features[]"
         value="screen" />Screen</label>
     <label><input type="checkbox" name="features[]"
         value="resolution" />Resolution</label>
     <label><input type="checkbox" name="features[]"
         value="battery" />Battery</label>
    </p>		 
	

	
<!-- comment section-->
    <p>
	<label>Comment your specifications<br />
	     <textarea name="comments" rows="5" cols="30" placeholder="Enter comments here........"></textarea>
	</label>
	</p>
	</fieldset>
	<fieldset>
	<p>Please enter the quantity:</p>
		<p>
			<label for="iphone11promax">Iphone 11 pro max  (2340.00 each)</label>
			<input type="text" id="iphone11promax" name="iphone11promax"   >
		</p>
		<p>
			<label for="iphonex">Iphone X (599.00 each)</label>
			<input type="text" id="iphonex" name="iphonex"   >
		</p>
		<p>
			<label for="oneplus">One Plus 7T pro (888.00 each)</label>
			<input type="text" id="oneplus" name="oneplus"   >
		</p>
		<p>
			<label for="samsung">Samsung Galaxy s20 ultra 5g(2100.00 each)</label>
			<input type="text" id="samsung" name="samsung"   >
		</p>	
	</fieldset>
	<!--  submit and reset -->		
	    <p>
			<input type="Submit" value="Pay Now" >
			<input type="reset" value="Reset" >
		</p>
    
	
	</form>
 
 <?php include_once "includes/footer.inc"; ?>
	</body>
	
	</html>