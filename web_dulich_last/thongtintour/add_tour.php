<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	include("connection.php");
	
	 	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
		if(isset($_POST['btnok']))
		{
		if(isset($_POST["txttentour"]))
		{
		$ten=$_POST["txttentour"];
		}
		if(isset($_POST['txtsonguoi']))
		{
		$songuoi=$_POST['txtsonguoi'];
		}
		if(isset($_POST['txtfileanh']))
		{
		$fileanh=$_POST['txtfileanh'];
		}
		$loai=$_POST['loaitour'];

 		$sql="INSERT INTO `tours`(`NAME`, `KIND_TOUR`, `MAX_PEOPLE`, `IMAGE`) 
				VALUES ('$ten','$loai','$songuoi','$fileanh')";
		$connect->query($sql);
	}
?>
<body>
	<FORM action='add_tour.php' method='post'>
	<table align="center" border="1px black solid">
		<tr align="center">
			<td colspan="2">THÊM TOURS</td>
		</tr>
		<tr>
			<td>Tên tour</td>
			<td><input type="text" name="txttentour"></td>
		</tr>
		<tr>
			<td>Loại tour</td>
			<td>
				<select name="loaitour">
					<option value='Trong Nước'>Trong Nước</option>
					<option value='Tiết kiệm'>Tiết kiệm</option>
					<option value='Nước Ngoài'>Nước Ngoài</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Số người tối đa</td>
			<td><input type="number" name="txtsonguoi" value="20" min="1" max="20"></td>
		</tr>
		<tr>
			<td>Tên file ảnh</td>
			<td><input type="text" name="txtfileanh"></td>
		</tr>	
		<tr align="center">

			<td colspan="2">
				<a href="add_tour_details.php">Thêm chi tiết</a>
				<input type="submit" name="btnok" value="Thêm">
			</td>
		</tr>

	</table>
	<?php
	?>
	</FORM>
</body>
</html>