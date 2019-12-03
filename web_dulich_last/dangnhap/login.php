<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>
<?php
	include("thuvien.php");
	
	$tk= $_POST['taikhoan'];
	$mk= $_POST['matkhau'];
	
	if(isset($_POST['dangnhap']))
	{
		$sql="select * from login where ID='$tk' and PASSWORD='$mk'";
		$query= $conn->query($sql);
		$num_row = $query->rowcount();
		if($num_row!=0)
			echo "Đăng nhập thành công";
		else
			echo"Tài Khoản hoặc mật khẩu không chính xác";
		}
?>
	
	
<body>
	<form action="login.php" method="post">
		<lable> Tài Khoản </lable>
		<input type="text" name="taikhoan"/>
		<br/>
		<br/>
		<lable> Mật Khẩu </lable>
		<input type="password" name="matkhau" />
		<br/>
		<input type="submit" name="dangnhap" values="Đăng Nhập"/>
	</form>
	
</body>
</html>