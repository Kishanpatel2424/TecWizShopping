<?php
	session_start();
	$code=$_GET['code2'];
	if(!isset($_SESSION['email']) ||(!isset($_SESSION['pwd'])))
	{
	}
	 $email=$_SESSION['email'];
	$pwd=$_SESSION['pwd'];
 ?>
<?php
	include_once 'dbconnection.php';
	$query="delete from shopping_cart where ser_no='".$code."'";
	$rs=$conn->query($query);
	if($rs)
	{
		header('location:cartdetails.php' );
	}
?>