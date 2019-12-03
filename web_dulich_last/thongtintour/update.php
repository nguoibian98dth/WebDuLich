<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php 
	try{
		$id=$_GET['id'];
		include("connection.php");
		if(isset($_POST['btnsua']))
		{

				if(isset($_POST["txttentour1"]))
				{
					$ten=$_POST["txttentour1"];
				}
				if(isset($_POST['txtsonguoi1']))
				{
					$songuoi=$_POST['txtsonguoi1'];
				}
				if(isset($_POST['txtfileanh1']))
				{
					$fileanh=$_POST['txtfileanh1'];
				}
				if(isset($_POST['txtngaybd']))
				{
					$bd=$_POST['txtngaybd'];
				}
				if(isset($_POST['txtngaykt']))
				{
					$kt=$_POST['txtngaykt'];
				}
				if(isset($_POST['txtks']))
				{
					$ks=$_POST['txtks'];
				}
				if(isset($_POST['txtptien']))
				{
					$pt=$_POST['txtptien'];
				}
				if(isset($_POST['txtgiatreem']))
				{
					$treem=$_POST['txtgiatreem'];
				}
				if(isset($_POST['txtgianguoilon']))
				{
					$nglon=$_POST['txtgianguoilon'];
				}
				if(isset($_POST['txtchuongtrinhtour']))
				{
					$cttour=$_POST['txtchuongtrinhtour'];
				}
				$loai=$_POST['loaitour1'];
		 		$sql="UPDATE tours
		 			 SET `NAME`='$ten',`KIND_TOUR`='$loai',`MAX_PEOPLE`='$songuoi',`IMAGE`='$fileanh' 
		 			 WHERE ID='$id'";
				$connect->exec($sql);
				echo 'CẬP NHẬT THÀNH CÔNG !!';

}
}
	catch(PDOException $e)
	{
		echo $sql."<br>".$e->getMessage();
		header("location:list_qltourdl.php");
	}
?>
</head>

<body>
	<form  method="POST">
	<table align="center" border="1px black solid">
		<tr align="center">
			<td colspan="2">CHỈNH SỬA TOURS</td>
		</tr>
		<tr>
			<td>Tên tour</td>
			<td><input type="text" name="txttentour1"></td>
		</tr>
		<tr>
			<td>Loại tour</td>
			<td>
				<select name="loaitour1">
					<option value='Trong Nước'>Trong Nước</option>
					<option value='Tiết kiệm'>Tiết kiệm</option>
					<option value='Nước Ngoài'>Nước Ngoài</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Số người tối đa</td>
			<td><input type="number" name="txtsonguoi1" value="20" min="1" max="20"></td>
		</tr>
		<tr>
			<td>Tên file ảnh</td>
			<td><input type="text" name="txtfileanh1"></td>
		</tr>	
		</tr>
		<tr>
			<td>Ngày bắt đầu</td>
			<td><input type="text" name="txtngaybd"></td>
		</tr>
		<tr>
			<td>Ngày kết thúc</td>
			<td><input type="text" name="txtngaykt"></td>
		</tr>
		<tr>
			<td>Tên khách sạn</td>
			<td><input type="text" name="txtks"></td>
		</tr>
		<tr>
			<td>Phương tiện di chuyển</td>
			<td><input type="text" name="txtptien"></td>
		</tr>
		<tr>
			<td>Giá trẻ em</td>
			<td><input type="text" name="txtgiatreem"></td>
		</tr>
		<tr>
			<td>Giá người lớn</td>
			<td><input type="text" name="txtgianguoilon"></td>
		</tr>
		<tr>
			<td>Chương trình tour</td>
			<td><input type="text" name="txtchuongtrinhtour"></td>
		</tr>
		<tr align="center">

			<td colspan="2">
				<input type="submit" name='btnsua' value="Chỉnh sửa">

		</td>
		</tr>	
	</table>
	</form>
</body>
</html>