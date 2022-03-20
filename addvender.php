<?php
session_start();
error_reporting(0);
include('dbconn.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>MEDICAL STORE MANAGMENT SYSTEM</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
</head>
	<body>
		<div class="header">
			<div class="site-name">
			<h1>INVENTORY MANAGMENT SOFTWARE</h1>
			
		</div>
		
		<ul class="main-navigation">
  <li><a href="#">Home</a></li>
  <li><a href="#">Master data</a>
    <ul>
      <li><a href="master.php" class="active">Add category and item</a></li>
      <li><a href="addvender.php">Add vender</a></li>
      <li><a href="viewcategory.php">View category and item</a></li>
      <li><a href="viewvender.php">View vender</a></li>
    </ul>
  </li>
  <li><a href="add_inventory.php">Add Inventory</a></li>
  <li><a href="view_inventory.php">View Inventory</a></li>
  <li><a href="#">Report</a>
   <ul>
   	<li><a href="search.php">Search</a></li>
   	<li><a href="filter.php">filter</a></li>
   </ul>
  </li>
  <li><a href="logout.php">Logout</a></li>
</ul>

		
		 <section id="content">
  <div class="main">
    <div class="wrapper">
         	
         	<h3 class="p1">ADD VENDER</h3>
        <form id="contact-form" action="save1.php" method="post">
          <fieldset>
          	
		   <label><span class="text-form" >Name:</span>
              <input name="name" type="text" required /></label>
              <label><span class="text-form">Email:</span>
              <input name="email" type="email" required /></label>
            <label><span class="text-form">Address:</span>
              <input name="address" type="text" required />
            </label>
             <label><span class="text-form">Phone_no:</span>
              <input name="phone" type="number" required />
            </label>

         	 <input type="submit" name="add" value="add">
              </div>
         </div>

        
         
        
      
	</body>
	</html>

	