<?php 
	$hostName = 'localhost';
	// khai báo biến username
	$userName = 'root';
	//khai báo biến password
	$passWord = '';
	// khai báo biến databaseName
	$databaseName = 'ql_tourdulich';
	// khởi tạo kết nối
	try {
	    $connect = new PDO('mysql:host=' . $hostName . ';dbname=' . $databaseName, $userName, $passWord); 
	    $connect->query("set names utf-8");
	    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	catch (PDOException $e)
		{
		    //thất bại
		    die($e->getMessage());
		}
?>