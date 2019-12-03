<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php 
	
	include("connection.php");
	if(isset($_POST['btnthemcttour']))
	{
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

		$selectOption = $_POST["select_matour"];//lấy dữ liệu từ select
		 $sql="INSERT INTO `tour_details`(`ID`, `START`, `END`, `HOTEL_NAME`, `VEHICLE`, `CHILD_PRICE`, `ADULT_PRICE`, `TOUR_PROGRAM`)
			 VALUES ('$selectOption','$bd','$kt','$ks','$pt','$treem','$nglon','$cttour')";
		  $connect->query($sql);
}

?>
<body>
	<form action="add_tour_details.php" method="POST">
	<table align="center">
		<tr align="center">
			<td colspan="2">CHI TIẾT TOUR</td>
			
		</tr>
		<tr>
			<td>Chọn Mã tour</td>
			<td>
				<select name="select_matour">
				<?php
					$matours=$connect->query("SELECT * FROM tours");
				foreach ($matours as $ma) 
				{
					echo"<option value='".$ma['ID']."'>".$ma['NAME'].' - '.$ma['ID']."</option>";
				}	

				?>
				</select>
			</td>
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
			<td colspan="2"><input type="submit" name="btnthemcttour" value="Thêm"></td>
		</tr>
	</table>
	</form>
</body>
</html>