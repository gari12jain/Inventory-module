<?php
session_start();
include('conn.php');
 $qu = "select * from vender";              
 $rs = mysqli_query($con,$qu);
?>
<!DOCTYPE html>
<html>
<head>
	<title>INVENTORY MANAGMENT SOFTWARE</title>
	<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div class="header">
			<div class="site-name">
			<h1>INVENTORY MANAGMENT SOFTWARE</h1>
			
		</div>
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
		<br><br>
		<form id="contact-form"   method="post" enctype="multipart/form-data">
         <div class="m">
		 <table border="4" cellspacing="10" cellpadding="10";>
         <thead>
         	
            <th>Vender name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Operation</th>
             </thead>
         <?php
                while($arr=mysqli_fetch_assoc($rs))
                {
                      $vendername = $arr['vender_name'];
                      $email= $arr['email'];
                      $address=$arr['address'];
                      $phone=$arr['phone'];
                      
               ?>
         
                <tr> 

                   <td><?php echo $vendername;?></td>
                   <td><?php echo $email;?></td>
                   <td><?php echo $address;?></td>
                   <td><?php echo $phone;?></td>
                   <td><a href="deletevender.php?del=<?php echo $arr['vender_name'];?>">delete</a></td>
               </tr>
          <?php
                }
                ?>
     </table>
	 </div>
	</body>
	</html>
