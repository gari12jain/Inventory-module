<?php
include('conn.php');
if(isset($_GET['del']))
{
	$vender=$_GET['del'];
	
	$query = "delete from vender where vender_name = '$vender'";

	$res = mysqli_query($con, $query);
	$c = mysqli_affected_rows($con);
	
		header("location:viewvender.php?res=$c");

}
?>