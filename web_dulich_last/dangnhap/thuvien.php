<?php 
	try
	{
		$conn= new PDO("mysql:host=localhost;dbname=ql_tourdulich",'root','');
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
		$conn->query("set names utf8");	
		//echo"kết nối thành công";
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>