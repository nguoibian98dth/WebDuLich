<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<?php
	//session_destroy();
	include("connection.php");
	
	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if(isset($_GET['add_id']) && !empty($_GET['add_id']))
	{
		// Thêm vào session
		$id=$_GET['add_id'];
		$_SESSION['cart_'.$id]+=1;
		
	}
?>
<body>	
<form method="post">
<table align="center" width="500" border="1">
  <tbody>
    <tr>
	  <td></td>
      <td>Hình Ảnh</td>
      <td>Thông Tin</td> 
      <td>Xóa</td>
    </tr>	
		<?php
		//hiển thị	
		foreach($_SESSION as $key => $value)
		{		
			if($value > 0)
			{
				$cdai= strlen($key);				
				$lay_id = substr($key,5,$cdai-5);
				$sql = "SELECT * FROM `tours`,`tour_details` WHERE `tours`.`ID`=`tour_details`.`ID` and `tour_details`.`ID`='$lay_id'";
				$tours= $connect->query($sql);
				?>
	  			<tr>
				<?php					
					foreach($tours as $dong)
					{
					?>
					<td>
						<?php
							if(isset($_POST['xacnhan']))
							{										
								$ten= 'ck'.$dong['ID'];
								if(isset($_POST["$ten"]))
								{
									$gt=$dong['ID'];
									//thêm										
									$_SESSION['chon_'.$ten]=$gt;
									$thongbao='xác nhận thành công';
								}								
							}
						?>
						<input class="kt" type="checkbox" name="ck<?php echo $dong['ID']?>">
					</td>
					<td><img src="quantri/images/<?php echo $dong['IMAGE'] ?>" style="width: 150px; height: 150px"></td>
					  <td><?php echo $dong['NAME'].'</br>';
								echo $dong['KIND_TOUR'].'</br>';
								echo $dong['MAX_PEOPLE'].'</br>';?></td>
					  <td><?php $keydelete ='cart_'.$dong['ID'];
						  		$ptchon ='chon_ck'.$dong['ID']?>
						<a href="cartdelete.php?id=<?php echo $keydelete; ?>&ptxoa=<?php echo $ptchon; ?>">Xóa khỏi giỏ hàng</a></td>
				</tr>
		<?php 
				}
				$cohang='';
			}
		} ?>
    </tr>
  </tbody>
</table>

<?php
	//print_r($_SESSION);
	echo isset($cohang)? $cohang :'Giỏ hàng trống';
	if(isset($cohang))
		echo isset($thongbao)? $thongbao :'bạn chưa chọn tour muốn xác nhận';	
?>
	</br>
	<button name="xacnhan">Xác Nhận</button>
	</br>
	</br>
	<button name="xacnhan">
		<a href="dangkitour_hiep.php?">Đăng Ký</a>
	</button>
	
</form>
</body>
</html>