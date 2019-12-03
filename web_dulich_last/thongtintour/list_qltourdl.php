<!DOCTYPE html>
<html>
<head>
	<style type="text/css">
		.customer{
			border-color: black;
			float: center;
			border-style: collapse;
		}
	</style>

	<?php
		include("connection.php");
		$sql="SELECT * FROM `tours`";
		$tours=$connect->query($sql);
	?>

	<title></title>
</head>
<body>
	<div class="titleOfTable"><h1 align="center">DANH SÁCH TOUR</h1></div>
	<h3><a href="add_tour.php">Thêm mới tour du lịch</a></h3>
	<table class="customer" width="1000px" align="center" border="1" cellpadding="5">
		<tr bgcolor="lightblue" style="font-size: 20px">
			<td class="idCustomer" width="15%" align="left">
				ID tour
			</td>
			<td class="nametour" width="20%" align="left">
				Loại tour
			</td>
			<td class="addrtour" width="30%" align="left">
				Tên tour
			</td>
			<td class="phonetour" width="10%" align="left">
				Số người tối đa
			</td>
			<td class="mailtour" width="12%" align="left">
				Hình ảnh 
			</td>
			<td class="mailtour" width="30%" align="left">
				Chức năng
			</td>
		</tr>
		<?php
		foreach ($tours as $tuor) 
		{			
		?>
			<tr>
				<td><?php echo $tuor['ID'] ?></td>
				<td><?php echo $tuor['KIND_TOUR']?></td>
				<td><?php echo $tuor['NAME']?></td>
				<td><?php echo $tuor['MAX_PEOPLE'] ?></td>
				<td><?php echo $tuor['IMAGE'] ?></td>
				<td>
					<a href="show_tour_details.php?id=<?php echo $tuor['ID'] ?>">Chi tiết</a>
					<a href="delete_tour.php?id=<?php echo $tuor['ID'] ?>">Xóa</a>
					<!-- <a href="update.php?id=<?php echo $tuor['ID'] ?>">Sửa</a> -->
				</td>
			</tr>
		<?php 
		}
		?>
	</table>


</body>
</html>