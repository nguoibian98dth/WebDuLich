<?php 
session_start();

if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$_SESSION["$id"]=0;
	
	header("location:cart.php");
}

if(isset($_GET['ptxoa']))
{
	$xoa=$_GET['ptxoa'];	
		
	foreach($_SESSION as $khoa=>$value)
	{
		if($khoa==$xoa)
		{
			unset($_SESSION[$khoa]);
			header("location:cart.php");
		}
	}
}

?>