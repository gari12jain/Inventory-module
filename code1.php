<?php
 session_start();
 include("conn.php");

  $searchq=$_GET['search'];
  $sql="select * from product where item_name LIKE '%$searchq%'";
   $query=mysqli_query($con,$sql);
  ?>
  <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
    
<body>
	<div class="header">
			<div class="site-name">
			<h1>INVENTORY MANAGMENT SOFTWARE</h1>
			<br><br>
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
             <br><br><br><br>
           <table border="4" cellspacing="10" cellpadding="10";>
         <thead>
         	<th>Name</th>
            <th>Category</th>
            <th>Item Name</th>
             <th>Quantity</th>
            <th>Desk Number</th>
            <th>Item Code</th>
            <th>Purchase Date</th>
            <th>Vender</th>
            <th>Bill number</th>
             </thead>
         <?php

       $count=mysqli_affected_rows($con);
    if($count==0)
       {
                echo $count;
        }
        else
        {
      
                while($arr=mysqli_fetch_assoc($query))
                {
                	  $name=$arr['name'];
                      $category = $arr['cat_name'];
                      $item= $arr['item_name'];
                      $quantity=$arr['quantity'];
                      $desk_no=$arr['desk_no'];
                      $item_code=$arr['item_code'];
                      $date=$arr['purchase_date'];
                      $vender=$arr['vender_name'];
                      $bill=$arr['bill_no'];
                      
               ?>
         
                <tr> 
                    <td><?php echo $name;?></td>
                   <td><?php echo $category;?></td>
                   <td><?php echo $item;?></td>
                    <td><?php echo $quantity;?></td>
                     <td><?php echo $desk_no;?></td>
                      <td><?php echo $item_code;?></td>
                       <td><?php echo $date;?></td>
                        <td><?php echo $vender?></td>
                         <td><?php echo $bill;?></td>

                   
               </tr>
          <?php
                }
            }
                ?>
     </table>
         

 
</body>
</html>