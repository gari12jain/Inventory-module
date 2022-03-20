<?php
session_start();
include('conn.php');
 $qu = "select * from product";              
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
  <br><br>
		
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
         	   <th>Name</th>
            <th>Category</th>
            <th>Item Name</th>
            <th>quantity</th>
            <th>Desk Number</th>
            <th>Item code</th>
            <th>Purchase Date</th>
            <th>Vender Name</th>
            <th>Bill number</th>
             </thead>
         <?php
                while($arr=mysqli_fetch_assoc($rs))
                {
                      $name=$_POST['name'];
     
  $cat_name=$_POST['cat_name'];
  $item_name=$_POST['item_name'];

$quantity=$_POST['quantity'];
$desk_no=$_POST['desk_no'];
$item_code=$_POST['item_code'];
$date=$_POST['[purchase_date'];
$vender=$_POST['vender_name'];
$bill_no=$_POST['bill_no'];

                      
               ?>
         
                <tr> 
                    <td><?php echo $name;?></td>
                   <td><?php echo $cat_name;?></td>
                   <td><?php echo $item_name;?></td>
                   <td><?php echo $quantity;?></td>
                   <td><?php echo $desk_no;?></td>
                   <td><?php echo $item_code; ?></td>
                   <td><?php echo $date; ?></td>
                   <td><?php echo $vender;?></td>
                   <td><?php echo $bill_no;?></td>

               </tr>
          <?php
                }
                ?>
     </table>
	 </div>
	</body>
	</html>
