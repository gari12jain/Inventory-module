<?php
     $con  = mysqli_connect("localhost","root","root","inventory") or die("<h1>Connection Problem </h1>"); 
 

function addProduct($arr)
     {
         global $con;
                     
        $category=$_POST['category'];
    $item=$_POST['item'];



$que="insert into category(cat_name , item_name) values('$category','$item')";

$data=mysqli_query($con,$que);

$number=mysqli_affected_rows($con);

       
        return $number;
     }


function addvender($arr)
{
	global $con;
	$name=$_POST['name'];
     
	$email=$_POST['email'];
	$address=$_POST['address'];

$phone=$_POST['phone'];

$sql="insert into vender(vender_name,email,address,phone) values('$name','$email','$address','$phone')";

$da=mysqli_query($con,$sql);

$num=mysqli_affected_rows($con);
return $num;
}


     ?>