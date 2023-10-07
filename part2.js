/**
*Author: Syed Omair (102863768)
*Target: register.html
*Purpose: This file is for scripting register.html
*Created: 28-04-2020
*last Updated: 28-04-2020
*/
/* write header comments here 

functions in this file
- validateEnquire: validate the form on the enquire page
- validatePayment: validate the form on the payment page
- getInfo: get information from storage
- saveInfo: save information to storage
*/
"use strict";

//*************************  validate enquire form   ***************
function testQuantity(quantity, mobileType){
	var err="";
	if (isNaN(quantity)) {
		err += mobileType + " quantity is not a number. \n";
	}
	else if  (quantity <0)  {
		err +=  mobileType + " quantity cannot be negative. \n";
	}
	else if (parseInt(quantity, 10) !== Number(quantity)) { 
		err +=  mobileType + " quantity is not an integer. \n";
	}
	return err;
}	
function validateEnquire() {
	var errMsg="";
	var result=true;
	var temp="";
	
	var firstname=document.getElementById("firstname").value.trim();
	var lastname=document.getElementById("lastname").value.trim();
	var email=document.getElementById("email").value.trim();
	var streetaddress=document.getElementById("streetaddress").value.trim();
	var suburb=document.getElementById("suburb").value.trim();
	var state=document.getElementById("state").value.trim();
	var postcode=document.getElementById("postcode").value.trim();
	var phonenumber=document.getElementById("phonenumber").value.trim();
	var contact=document.getElementById("contact").value.trim();
	var iphone11promax=document.getElementById("iphone11promax").value.trim();
	var iphonex=document.getElementById("iphonex").value.trim();
	var oneplus=document.getElementById("oneplus").value.trim();
	var samsung=document.getElementById("samsung").value.trim();
	// validate first and last name and other requirements. 
	

	if (errMsg!="") { // with errors
		alert (errMsg);
		result=false;
	}
	else {    // no error, save info to storage
		saveInfo(firstname, lastname, email, streetaddress, suburb, state, postcode, phonenumber, contact, iphone11promax, iphonex, oneplus, samsung);
	}
	return result;	
}
//*************************  validate payment form   ***************
function validatePayment() {
	var errMsg="";
	var result=true;
	
	var cardType=document.getElementById("cardType").value;
	var cardName=document.getElementById("cardName").value.trim();
	var cardNumber=document.getElementById("cardNumber").value.trim();
	var cardValue=document.getElementById("cardValue").value.trim();
	var cardExpiry=document.getElementById("cardExpiry").value.trim();
 
	if (errMsg!="") {
		alert (errMsg);
		result=false;
	}

	return result;	
}
//*******************  save and get information from storate  ***************
function saveInfo (firstname, lastname, email, streetaddress, suburb, state, postcode, phonenumber, contact, iphone11promax, iphonex, oneplus, samsung){  // save information to storage
	if(typeof(Storage)!=="undefined"){  // the browser support web storage
		localStorage.setItem("firstname", firstname);
		localStorage.setItem("lastname", lastname);
		localStorage.setItem("email", email);
		localStorage.setItem("streetaddress", streetaddress);
		localStorage.setItem("suburb", suburb);
		localStorage.setItem("state", state);
		localStorage.setItem("postcode", postcode);
		localStorage.setItem("phonenumber", phonenumber);
		localStorage.setItem("contact", contact);
		localStorage.setItem("iphone11promax", iphone11promax);
		localStorage.setItem("iphonex", iphonex);
		localStorage.setItem("oneplus", oneplus);
		localStorage.setItem("samsung", samsung);
		
	}
}

function getInfo(){ 
	if (typeof(Storage)!=="undefined"){// the browser support web storage
		if (localStorage.getItem("firstname") !== null){// there are some saved info in storage  
			// name
			document.getElementById("fullname").textContent = localStorage.getItem("firstname") + " " + localStorage.getItem("lastname");
			
			document.getElementById("firstname").value = localStorage.getItem("firstname");	 
			document.getElementById("lastname").value = localStorage.getItem("lastname");
			document.getElementById("email").value = localStorage.getItem("email");
			document.getElementById("streetaddress").value = localStorage.getItem("streetaddress");
			document.getElementById("suburb").value = localStorage.getItem("suburb");
			document.getElementById("state").value = localStorage.getItem("state");
			document.getElementById("postcode").value = localStorage.getItem("postcode");
			document.getElementById("phonenumber").value = localStorage.getItem("phonenumber");
			document.getElementById("contact").value = localStorage.getItem("contact");
			// quantity     apple 0.99 each, banana 0.36 each, choc bar 1, chewing gum 1.85
			var cost=0;
			if (localStorage.getItem("iphone11promax")!=null){
				var iphone11promax=Number(localStorage.getItem("iphone11promax"));
				document.getElementById("iphone11promax").value = iphone11promax;
				cost=cost+2340.00*iphone11promax;
			}
			if (localStorage.getItem("iphonex")!=null){				
				var iphonex=Number(localStorage.getItem("iphonex"));
				document.getElementById("iphonex").value = iphonex;
				cost=cost+599.99*iphonex;
			}
			if (localStorage.getItem("oneplus")!=null){				
				var oneplus=Number(localStorage.getItem("oneplus"));
				document.getElementById("oneplus").value = oneplus;
				cost=cost+888.00*oneplus;
			}
			if (localStorage.getItem("samsung")!=null){				
				var samsung=Number(localStorage.getItem("samsung"));
				document.getElementById("samsung").value = samsung;
				cost=cost+2100.00*samsung;
			}
			
			document.getElementById("totalcost").value = cost.toFixed(2);
		}

	}
}
function clearStorage(){  // for cancel order button
	localStorage.clear();
	location.href="index.html";
}

//*************************  init ***************
// if you want to use one javascript for two pages, you can use if else to seperate the init
function init() {
	if (document.getElementById("enquireForm")!=null) {  // it is enquire page  
		document.getElementById("enquireForm").onsubmit = validateEnquire;
	}
	else if (document.getElementById("paymentForm")!=null) { // it is payment page  
		getInfo();     // fill up the page with information passed from enquire page
		document.getElementById("paymentForm").onsubmit = validatePayment;
		document.getElementById("cancelOrder").onclick = clearStorage;
		
	}
}
// if you link to 2 javascript files in the same html and they both have init, you can use addEventListener and give the two init function different names
window.addEventListener("load",init);
//window.onload = init;  
