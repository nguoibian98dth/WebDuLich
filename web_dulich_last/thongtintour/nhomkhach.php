<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<?php
	include("connection.php");
	$cmnd=$_GET['cmnd'];
	$sql="SELECT * FROM `customers` WHERE IDCARD='$cmnd'";
	$id=$connect->query($sql);
	foreach ($id as $id1) 
	{
		 $flag=$id1['ID']; 
	}
?>
<?php
	if(isset($_POST['btnok']))
	{
			$cmnd=$_POST['txtcmnd1'];
			$ten=$_POST['txttenkh1'];
			$tuoi=$_POST['txttuoi1'];
			echo $flag.'<br>';
			echo $cmnd.'<br>';
			echo $ten.'<br>';
			echo $tuoi.'<br>';
			//thêm vào nhóm khách
			$sql1="INSERT INTO customer_groups(REPRESENT_ID, IDCARD, CUSTOMERNAME, AGE) 
					VALUES ('$flag','$cmnd','$ten','$tuoi')";	
			$connect->exec($sql1);


	}
 ?>

<body>
	<form method="post">
			<?php
				for($i=1;$i <=$_GET['mod1'];$i++)
				{
			?>
			<TABLE>
				<tr align="center"><td colspan="2" >THẺ ĐĂNG KÍ KHÁCH HÀNG <?php echo"$i"?>(Người lớn)</td></tr>
				<tr>
				<tr>
					<td>Tên khách hàng</td>
					<td><input type="text" name="txttenkh1"size="70px"></td>
				</tr>
				<tr>
					<td>CM nhân dân</td>
					<td><input type="text" name="txtcmnd1"size="70px"></td>
				</tr>
				<tr>
					<td>Tuổi</td>
					<td><input type="text" name="txttuoi1"size="70px"></td>
				</tr>
			</TABLE>
			<?php
				}
			?>

			<?php
				for($j=1;$j <= $_GET['mod2'];$j++)
				{
			?>
			<TABLE>
				<tr align="center"><td colspan="2" >THẺ ĐĂNG KÍ KHÁCH HÀNG <?php echo"$j"?>(Trẻ em)</td></tr>
				<tr>
				<tr>
					<td>Tên khách hàng</td>
					<td><input type="text" name="txttenkh1"size="70px"></td>
				</tr>
				<tr>
					<td>Tuổi</td>
					<td><input type="text" name="txttuoi1"size="70px"></td>
				</tr>
			</TABLE>
				<?php
				}
			?>
			<p align="center"><input type="submit" name="btnok" value="Hoàn tất" ></p>
			</form>
</body>
</html>