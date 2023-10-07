<!DOCTYPE html>
<html lang="en">
  <!-- head of the page-->
<head>
  <!-- other meta stuff-->
  <link href="style/style.css" rel="stylesheet"/>
  <meta charset="utf-8" />
  <meta name="description" content="about page of Assignment" />
  <meta name="keywords" content="HTML5, tags" />
  <meta name="author" content="syed omair"  />
  <title>Assignment-3</title>
  </head>
  <body>
  <!-- header -->
   <?php
	include_once "includes/header.inc";
	include_once "includes/menu.inc";
?>
      <hr />
   <!-- Details about the author -->
   <h2>Details About Author</h2>
	  <dl>
		<dt>Name :</dt>
			<dd>Syed Maqdoom Mohiuddin Mohiuddin</dd>
		<dt>Student ID :</dt>
			<dd>102863768</dd>
	    <dt>Course :</dt>
		    <dd>Bachelor Of Computer Science</dd>
		<dt>Email :</dt>
		    <dd><a href="mailto:102863768@student.swinedu.au" >Syed Omair</a></dd>
      </dl> 
   
   <!-- image of the author -->
   <figure class="fig"><figcaption>Author's photo </figcaption>
			<a href="images/about2.jpg">  <img src="images/about.jpg" alt="author's photo"/></a></figure>
   <!--Time table of author -->
   <table class="timetable">
         <caption>My Swinburne Time Table</caption>
         <thead>
            <tr>
              <th rowspan="2" scope="col">Time</th>
              <th colspan="5" scope="col">Day</th>
            </tr>
            <tr>
              <th scope="col">Monday</th>
              <th scope="col">Tuesday</th>
              <th scope="col">Wednesday</th>
			  <th scope="col">Thursday</th>
			  <th scope="col">Friday</th>
            </tr>
        </thead>
        <tbody>
         <tr>
           <th scope="row" class="time">08:30 to 10:30</th>
           <td></td>
           <td></td>
           <td></td>
		   <td></td>
		   <td>TNE10006 - Lecture</td>
         </tr>
         <tr>
           <th scope="row" class="time">10:30 to 12:30</th>
           <td></td>
           <td></td>
           <td>COS10011 - Lab</td>
		   <td></td>
		   <td></td>
         </tr>
		 <tr>
           <th scope="row" class="time">12:30 to  02:30</th>
           <td>TNE10006 - lab</td>
           <td>COS10009 - Lecture</td>
           <td>COS10003 - Lecture</td>
		   <td></td>
		   <td></td>
         </tr>
		 <tr>
           <th scope="row" class="time">02:30 to 04:30</th>
           <td>COS10011 - Lecture</td>
           <td>COS10009 - Lab</td>
           <td>COS10003 - Tutorial</td>
		   <td></td>
		   <td></td>
         </tr>
		 <tr>
           <th scope="row" class="time">04:30 to 06:30</th>
           <td></td>
           <td></td>
           <td></td>
		   <td></td>
		   <td>COS10009 - Workshop</td>
         </tr>
        </tbody>
       
		</table>
	
  
   


     <hr/>
	 
  <?php
	include_once "includes/footer.inc";
?>

  </body>
  
  </html>