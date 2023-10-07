



<?php
	function sanitise_input($data){
		$data = trim ($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}
	
	
	
	if (isset($_POST["firstname"])) {
		$err_msg="";
		
		$firstname = $_POST["firstname"];
		$lastname = $_POST["lastname"];
		$email = $_POST["email"];
		$streetaddress = $_POST["streetaddress"];
		$state = $_POST["state"];
		$suburb = $_POST["suburb"];
		$postcode = $_POST["postcode"];
		$phonenumber = $_POST["phonenumber"];
		$contact = $_POST["contact"];
		$iphone11promax = $_POST["iphone11promax"];
		$iphonex = $_POST["iphonex"];
		$oneplus = $_POST["oneplus"];
		$samsung = $_POST["samsung"];
		$cardType = $_POST["cardType"];
		$cardName = $_POST["cardName"];
		$cardNumber = $_POST["cardNumber"];
		$cardExpiry = $_POST["cardExpiry"];
		$cardValue = $_POST["cardValue"];
	}
	
	//firstname
		
		if (trim($firstname)=="")
			$err_msg .= "<p>Please enter your first name.</p>";
		else {
			$firstname = sanitise_input($firstname);
			if(!preg_match("/^[a-zA-Z]{2,20}$/",$firstname)){
				$err_msg .= "<p>Only alpha letters allowed in your first name and should be of 20 characters only.</p>";
		}
		}
		
		//lastname
		
		if (trim($lastname)=="")
			$err_msg .= "<p>Please enter your last name.</p>";
		else {
			$lastname = sanitise_input($lastname);
			if(!preg_match("/[a-zA-Z]{2,25}$/",$lastname)){
				$err_msg .= "<p>Only alpha letters allowed in your last name and should be of 25 characters only.</p>";
		}
		}
		
		//email
	
		if (($email) == "")
			$err_msg .= "<p>Please enter your email address.</p>";
		else {
			$email = sanitise_input($email);
			if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
				$err_msg .= "<p>This email is invalid.</p>";
			}
		}
		//state
		if (($state) == "")
			$err_msg .= "<p>Please enter your state.</p>";
		//streetaddress
		
		if (trim($streetaddress)=="")
			$err_msg .= "<p>Please enter your street address.</p>";	
		else  {
			$streetaddress = sanitise_input($streetaddress);
		  if (!strlen($streetaddress) > 21){
		$err_msg .= "<p>street address cannot be more than 40 characters.</p>";
	    }
		}
		//suburbtown
	
		if (trim($suburb)=="")
			$err_msg .= "<p>Please enter the suburb or town.</p>";
		else  {
			$suburb = sanitise_input($suburb);
			if (!strlen($suburb) > 21){
		$err_msg .= "<p>suburb cannot be more than 20 characters.</p>";
	    }
		}		
		//postcode
		
		if (trim($postcode)=="")
			$err_msg .= "<p>Please enter your postcode.</p>";
		else {
			$postcode = sanitise_input($postcode);
			if (!preg_match("/^[0-9]*$/", $postcode) || (strlen($postcode) != 4)){
				$err_msg .= "<p>The postcode is invalid.</p>";
			}
		}
	
		if($state)
		{
		switch($state){
			case "VIC":
				if(!preg_match("/^[3]|[8]/",$postcode)){
					$err_msg .= "<p>VIC post code should start with 3 or 8.</p>";
				}
			break;
			case "NSW":
				if(!preg_match("/^[1]|[2]/",$postcode)){
					$err_msg .= "<p>NSW post code should start with 1 or 2.</p>";
				}
			break;
			case "QLD":
				if(!preg_match("/^[4]|[9]/",$postcode)){
					$err_msg .= "<p>QLD post code should start with 4 or 9.</p>";
				}
			break;
			case "NT":
				if(!preg_match("/^[0]/",$postcode)){
					$err_msg .= "<p>NT post code should start with 0.</p>";
				}
			break;
			case "WA":
				if(!preg_match("/^[6]/",$postcode)){
					$err_msg .= "<p>WA post code should start with 6.</p>";
				}
			break;
			case "SA":
				if(!preg_match("/^[5]/",$postcode)){
					$err_msg .= "<p>SA post code should start with 5.</p>";
				}
			break;
			case "TAS":
				if(!preg_match("/^[7]/",$postcode)){
					$err_msg .= "<p>TAS post code should start with 7.</p>";
				}
			break;
			case "ACT":
				if(!preg_match("/^[0]/",$postcode)){
					$err_msg .= "<p>ACT post code should start with 0.</p>";
				}
			break;
		}
		
	}
		
		//phonenumber
		
		if (trim($phonenumber)=="")
			$err_msg .= "<p>Please enter your phone number.</p>";
		else {
			$phonenumber = sanitise_input($phonenumber);
			if(!preg_match("/^[0-9\-\(\)\/\+\s]*$/", $phonenumber)){ 
				$err_msg .= "<p>Your phone number must be in numbers and not more than 10 digits.</p>";
			}
		}
		if (strlen($phonenumber) != 10)
			$err_msg .= "<p>invalid phonenumber.</p>";
		
          //contact
		
		if (trim($contact)=="")
			$err_msg .= "<p>Please enter your preferred contact.</p>";
		
		
		//quantity
		//11promax
		if($iphone11promax == ""){
			$iphone11promax = sanitise_input($iphone11promax);
			$iphone11promax = 0;
		}
		else if (!is_numeric($iphone11promax)) {
			$err_msg .= "<p>iphone 11 pro max quantity is not numeric.</p>";
		}
		
		//iphonex qunatity
		if($iphonex == ""){
			$iphonex = sanitise_input($iphonex);
			$iphonex = 0;
		}
		else if (!is_numeric($iphonex)) {
			$err_msg .= "<p>iphone X quantity is not numeric.</p>";
		}
		
		//oneplus qunatity
		if($oneplus == ""){
			$oneplus = sanitise_input($oneplus);
			$oneplus = 0;
		}
		else if (!is_numeric($oneplus)) {
			$err_msg .= "<p>one plus quantity is not numeric.</p>";
		}
		
		//samsung qunatity
		if($samsung == ""){
			$samsung = sanitise_input($samsung);
			$samsung = 0;
		}
		else if (!is_numeric($samsung)) {
			$err_msg .= "<p>samsung quantity is not numeric.</p>";
		}
		if (trim($iphone11promax || $iphonex || $oneplus || $samsung)=="")
			$err_msg .="<p>Please enter the quantity to one of the Mobile.</p>";
		
		else if (!preg_match("/[0-9]/", $iphone11promax || $iphonex || $oneplus || $samsung)){
				$err_msg .= "<p>The quantity must be in number.</p>";
		}
		//validating paymentdetails
		
		//cardType
		if (trim($cardType)=="")
			$err_msg .= "<p>Please select your card type.</p>";	
		
		//cardName
		if (trim($cardName)=="")
			$err_msg .= "<p>Please enter your card name.</p>";	
				else {
					if(!preg_match("/^[a-zA-Z\s]{2,40}$/",$cardName)) {
						$cardName = sanitise_input($cardName);
			$err_msg .= "<p>Card name can only contain alphabetics with maximum of 40 characters.</p>";
				}
				}
		//cardNumber
		if (trim($cardNumber)=="")
			$err_msg .= "<p>Please enter your card number.</p>";	
		else {
			$cardNumber = sanitise_input($cardNumber);
			if(!preg_match("/^[0-9]*$/", $cardNumber)){ 
				$err_msg .= "<p>Please enter a valid card number.</p>";
			}
		}
		if ((strlen($cardNumber)) > 16 || (strlen($cardNumber)) < 15)
			$err_msg .= "<p>Card number cannot be greater than 16 characters and less than 15 characters.</p>";
		
		//card expiry
    	if ($cardExpiry=="") 
			$err_msg .= "<p>Please enter your card expiry.</p>";	
		else {
			$cardExpiry = sanitise_input($cardExpiry);
			if(!preg_match("/^(0[1-9]|1[0-2])\/?([0-9]{4}|[0-9]{2})$/", $cardExpiry)){ 
				$err_msg .= "<p>Please enter a valid expiry as on your card.</p>";
			}
		}
		//card verification value
		if ($cardValue=="") 
		$err_msg .= "<p>Please enter your card verification value (cvv).</p>";	
		else {
			$cardValue = sanitise_input($cardValue);
			if(!preg_match("/^[0-9]{3,4}$/", $cardValue)){ 
				$err_msg .= "<p>Please enter a valid card verification value(cvv).</p>";
			}
		}
		//type and number validation
		switch($cardType){
			case "master":
				if(!preg_match("/^[5][1-5]\d{14}/",$cardNumber)){   //mastercard
					$err_msg .= "<p>Master Card must start from 51 to 55 and contains 16 digits only.</p>";
				}
				if(!preg_match("/^\d{3}/",$cardValue)){
					$err_msg .= "<p>CVV must be 3 digits for Master Card.</p>";
				}
				
				break;
			case "visa":
				if(!preg_match("/^[4]\d{15}/",$cardNumber)){   //visacard
					$err_msg .= "<p>Visa Card must start with 4 and contains 16 digits only.</p>";
				}
				if(!preg_match("/^\d{3}/",$cardValue)){
					$err_msg .= "<p>CVV must be 3 digits for visa Card.</p>";
				}
			break;
			case "amex":
				if(!preg_match("/^(?:3[47][0-9]{13})$/",$cardNumber)){   //american express
					$err_msg .= "<p>Amex Card must be started with 34 or 37 and contains 15 digits.</p>";
				}
				
			break;
		}
		
		
		if ($err_msg!=""){
			
			session_start();
			$_SESSION['err_msg'] = $err_msg;
			$_SESSION['firstname'] = $firstname;
			$_SESSION['lastname'] = $lastname;
			$_SESSION['email'] = $email;
			$_SESSION['phonenumber'] = $phonenumber;
			$_SESSION['streetaddress'] = $streetaddress;
			$_SESSION['suburb'] = $suburb;
			$_SESSION['state'] = $state;
			$_SESSION['postcode'] = $postcode;
			$_SESSION['contact'] = $contact;
			$_SESSION['iphone11promax'] = $iphone11promax;
			$_SESSION['iphonex'] = $iphonex;
			$_SESSION['oneplus'] = $oneplus;
			$_SESSION['samsung'] = $samsung;
			header("location:fix_order.php?err_msg=$err_msg");
			exit();
		}
		
			//----------------------------------- insert to database, redirect to receipt.php
		$db_msg="";
	require_once "settings.php";
	$conn = mysqli_connect ($host,$user,$pwd,$sql_db);	

		if ($conn) {
		    
			$query = "CREATE TABLE IF NOT EXISTS orders (
					order_id INT(11) AUTO_INCREMENT PRIMARY KEY,
					First_Name VARCHAR(11),
					Last_Name VARCHAR(11),
					Email VARCHAR(11),
					Phone_Number BIGINT(11),
					Street_Address VARCHAR(11),
					Suburb_Town VARCHAR(11),
					State CHAR(11),
					Postcode INT(11),
					Contact VARCHAR(11),
					Iphone11promax INT(11),
					IphoneX INT(11),
					Oneplus INT(11),
					Samsung INT(11),
					Credit_Card_Type VARCHAR(11),
					Name_on_Card VARCHAR(11),
					Card_Number BIGINT(11),
					Card_Expiry INT(11),
					Card_CVV INT(11),
					order_cost INT(11),
					order_time DATETIME (6),
					order_status VARCHAR(3)
					)";
					
	            $result = mysqli_query ($conn, $query);
		if ($result) { //create table successful
		
		//calculate the cost
		$cost = 2340 * $iphone11promax + 599 * $iphonex + 888 * $oneplus + 2100 * $samsung;
		
		//date and time
		
		$datetime = date('Y-m-d H:i:s');
		
		//insert
		$query = "INSERT INTO orders (First_Name, Last_Name, Email, Phone_Number, Street_Address, Suburb_Town,
				  State, Postcode, Contact, Iphone11promax, IphoneX, Oneplus, Samsung, Credit_Card_Type, Name_on_Card,
				  Card_Number, Card_Expiry, Card_CVV, order_cost, order_time, order_status)
		          VALUES ('$firstname', '$lastname', '$email', '$phonenumber', '$streetaddress', '$suburb', '$state',
						  '$postcode', '$contact', '$iphone11promax', '$iphonex', '$oneplus', '$samsung', '$cardType', '$cardName', '$cardNumber',
						  '$cardExpiry', '$cardValue','$cost','$datetime', 'PENDING');";
		$insert_result = mysqli_query ($conn, $query);
		
		if ($insert_result) { 
			$db_msg="<p>Your order is now in our database.</p>"
					. "<table class='receiptTable' border=1><tr><th>Item</th><th>Value</th></tr>"
					. "<tr><th>Order ID</th><td>" . mysqli_insert_id($conn) . "</td></tr>"
					. "<tr><th>First name</th><td>$firstname</td></tr>"
					. "<tr><th>Last name</th><td>$lastname</td></tr>"
					. "<tr><th>Email</th><td>$email</td></tr>"
					. "<tr><th>Phone Number</th><td>$phonenumber</td></tr>"
					. "<tr><th>Street Address</th><td>$streetaddress</td></tr>"
					. "<tr><th>Suburb/Town</th><td>$suburb</td></tr>"
					. "<tr><th>State</th><td>$state</td></tr>"
					. "<tr><th>Postcode</th><td>$postcode</td></tr>"
					. "<tr><th>Preferred Contact</th><td>$contact</td></tr>"
					. "<tr><th>Credit Card Type</th><td>$cardType</td></tr>"
					. "<tr><th>Credit Card Name</th><td>$cardName</td></tr>"
					. "<tr><th>Credit Card Number</th><td>*******</td></tr>"
					. "<tr><th>Credit Card Expiry Date</th><td>$cardExpiry</td></tr>"
					. "<tr><th>Credit Card CVV</th><td>********</td></tr>"
					. "<tr><th>Iphone 11 pro max</th><td>$iphone11promax</td></tr>"
					. "<tr><th>Iphone X</th><td>$iphonex</td></tr>"
					. "<tr><th>One plus 7t</th><td>$oneplus</td></tr>"
					. "<tr><th>Samsung galaxy</th><td>$samsung</td></tr>"
					. "<tr><th>Total</th><td>$$cost</td></tr>"
					. "<tr><th>Date</th><td>$datetime</td></tr>"
					. "<tr><th>Status</th><td>PENDING</td></tr>"
					. "</table>"; 
					
									
			} else {
				$db_msg= "<p>Insert  unsuccessful.</p>";
			}
		} else {
			$db_msg= "<p>Create table operation unsuccessful.</p>";
		}
		mysqli_close ($conn);					// Close the database connect
	} else {
		$db_msg= "<p>Unable to connect to the database.</p>";
	}
	//  redirect to receipt.php
	echo $db_msg;
	header("location:receipt.php?db_msg=$db_msg");
		



?>
		