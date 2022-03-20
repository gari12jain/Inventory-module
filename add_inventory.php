<?php
session_start();
error_reporting(0);
include('conn.php');




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

		 <section id="content">
  <div class="main">
    <div class="wrapper">
         	
         	<h3 class="p1"></h3>
        <form id="contact-form"  method="post">
          <fieldset>
          	
		   <label><span class="text-form" >Name:</span>
              <input name="name" type="text" required /></label>
            
            
			  <label><span class="text-form">Category:</span>
            <select name="to_user" class="form-control">
              
              <option value="pick">select the category</option>
            <?php $sql=mysqli_query($con,"select cat_name from category");
            $row=mysqli_num_rows($sql);
            while($row=mysqli_fetch_array($sql))
            {
              echo "<option value=".$row['cat_name'].">".$row['cat_name']."</option>";
            } ?>
            </select></label>
                    
            

             <label><span class="text-form">Item:</span>
               <select name="to_user1" class="form-control">
              
              <option value="pick">select the item</option>
            <?php $query=mysqli_query($con,"select item_name from category");
            $row1=mysqli_num_rows($sql);
            while($row1=mysqli_fetch_array($query))
            {
              echo "<option value=".$row1['item_name'].">".$row1['item_name']."</option>";
            } ?>
            </select>
            </label>

             <label><span class="text-form">Quantity:</span>
              <input name="quantity" type="text" required />
            </label>

             <label><span class="text-form">Desk Number:</span>
              <input name="desk_no" type="text" required />
            </label>

             <label><span class="text-form">Item code:</span>
              <input name="item_code" type="text" required />
            </label>

             <label><span class="text-form">Purchase date:</span>
              <input name="date" type="date" required />
            </label>

             <label><span class="text-form">Vender:</span>
              <select name="to_user2" class="form-control">
              
              <option value="pick">select the vender</option>
            <?php $qu=mysqli_query($con,"select vender_name from vender");
            $row2=mysqli_num_rows($sql);
            while($row2=mysqli_fetch_array($qu))
            {
              echo "<option value=".$row2['vender_name'].">".$row2['vender_name']."</option>";
            } ?>
            </select>
            </label>

             <label><span class="text-form">Bill number:</span>
              <input name="bill_no" type="text" required />
            </label>
             

         	 <a href="#"><input type="submit" name="login" value="login"></a>
         	  <input type="reset" name="reset" value="reset"></a>

              </div>
         </div>

        
         
        
      
	</body>
	</html>

<?php
if(isset($_POST['login']))
{
  $name=$_POST['name'];
     
  $cat_name=$_POST['to_user'];
  $item_name=$_POST['to_user1'];

$quantity=$_POST['quantity'];
$desk_no=$_POST['desk_no'];
$item_code=$_POST['item_code'];
$date=$_POST['date'];
$vender=$_POST['to_user2'];
$bill_no=$_POST['bill_no'];


$sql="insert into product(name,cat_name,item_name,quantity,desk_no,item_code,purchase_date,vender_name,bill_no) values('$name','$cat_name','$item_name','$quantity','$desk_no','$item_code','$date','$vender','$bill_no')";

$da=mysqli_query($con,$sql);

$num=mysqli_affected_rows($con);

if($num==1)
{
  
  echo"add the Inventory successfully";
  header("location:view_inventory.php?a=$num");
  
}
else 
{
  
    echo"filled password";
    header("location:add_inventory.php?r=$num");
  
}
}
?>