<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	include("thuvien.php");		
	
	try{
		if(isset($_POST['dangky']))
		{
			$tk= $_POST['taikhoan'];
			$mk= $_POST['matkhau'];
			$sql="insert into customers(NAME) values ('$mk')";
			$query= $conn->exec($sql);		
			echo"Thêm thành công!";
		}
	}
	catch(PDOException $e)
	{
		echo $e->getMessage();
	}
?>
	
	
<body>
	<form action="signup.php" method="post">
		<lable> Tài Khoản </lable>
		<input type="text" name="taikhoan"/>
		<br/>
		<br/>
		<lable> Mật Khẩu </lable>
		<input type="password" name="matkhau" />
		<br/>
		<input type="submit" name="dangky" values="Đăng Ký"/>
	</form>
	
</body>
</html>