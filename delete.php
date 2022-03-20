<?php
include('conn.php');
if(isset($_GET['del']))
{
	$category=$_GET['del'];
	
	$query = "delete from category where cat_name = '$category'";

	$res = mysqli_query($con, $query);
	$c = mysqli_affected_rows($con);
	
		header("location:viewcategory.php?res=$c");

}
?>