<?php session_start(); ?>
<?php
	include('dbconnection.php');
	 $code1=$_GET['x'];
	$query="delete from product where ser_no='".$code1."'";
	$rs=$conn->query($query);
	if($rs)
	{
		header('location:insert.php');
	}
?>