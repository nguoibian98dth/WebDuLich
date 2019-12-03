<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Untitled Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/angular-material.min.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/cart.css" />
	<script src="js/modernizr.custom.js"></script>
</head>

<?php
	//session_destroy();
	include("connection.php");

	error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);

	if(isset($_GET['id']) && !empty($_GET['id']))
	{
			// Thêm vào session
		$id=$_GET['id'];
		$_SESSION['cart_'.$id]+=1;

	}
	
	// xóa các session chon_
	if(isset($_GET['test']))		
	{
		foreach($_SESSION as $khoa=>$value)
		{
			$key= substr($khoa,0,5);
			if($key=='chon_' || $key=='cmnd_')
			{
				unset($_SESSION[$khoa]);
				header("location:cart.php");
			}
		}
	}
	
?>
<body>
	<div class="container menu">	
		<div class="main">
			<nav id="ttw-hrmenu" class="ttw-hrmenu">
				<ul>
					<li>
						<a href="#">Trang Chủ</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner"> 
								<a href="index.php">Trang chủ</a>
							</div><!-- /ttw-hrsub-inner -->
						</div><!-- /ttw-hrsub -->
					</li>
					<li>
						<a href="#">Tour Trong Nước</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner">
								<div>
									<h4>Miền Bắc &amp; Bắc Trung Bộ</h4>
									<ul>
										<li><a href="#">Hà Nội</a></li>
										<li><a href="#">Sapa</a></li>
										<li><a href="#">Lạng Sơn</a></li>
									</ul>
									<h4>Trung Trung Bộ</h4>
									<ul>
										<li><a href="#">Đà Nắng</a></li>
										<li><a href="#">Huế</a></li>
										<li><a href="#">Quảng Nam</a></li>
									</ul>
								</div>
								<div>
									<h4>Nam Trung Bộ</h4>
									<ul>
										<li><a href="#">Quy Nhơn</a></li>
										<li><a href="#">Phú Yên</a></li>
										<li><a href="#">Nha Trang</a></li>
										<li><a href="#">Phan Thiết</a></li>
									</ul>
								</div>
								<div>
									<h4>Miền Nam &amp; Miền Tây</h4>
									<ul>
										<li><a href="#">Vũng Tàu</a></li>
										<li><a href="#">Long An</a></li>
										<li><a href="#">Cần Thơ</a></li>
										<li><a href="#">Hồ Chí Minh</a></li>
									</ul>
								</div>
							</div><!-- /ttw-hrsub-inner -->
						</div><!-- /ttw-hrsub -->
					</li>
					<li>
						<a href="#">Tour Ngoài Nước</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner"> 
								<div>
									<h4>Châu Âu</h4>
									<ul>
										<li><a href="#">Thụy Sỹ</a></li>
										<li><a href="#">Phần Lan</a></li>
										<li><a href="#">Pháp</a></li>
									</ul>
								</div>
								<div>
									<h4>Châu Á</h4>
									<ul>
										<li><a href="#">Thượng Hải</a></li>
										<li><a href="#">Hồng Kông</a></li>
										<li><a href="#">Nhật Bản</a></li>
										<li><a href="#">Singapore</a></li>
										<li><a href="#">Úc</a></li>
									</ul>
								</div>
							</div><!-- /ttw-hrsub-inner -->
						</div><!-- /ttw-hrsub -->
					</li>
					<li>
						<a href="#">Blog</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner"> 
								<div>
									<h4>Tin tức &amp; Điểm đến hot</h4>
									<ul>
										<li><a href="#">Điểm đến cho ngày hè nóng nực</a></li>
										<li><a href="#">Leo núi ban đêm. Tại sao không?</a></li>
										<li><a href="#">Check in nhanh các địa điểm này!</a></li>
									</ul>
									<h4>Review</h4>
									<ul>
										<li><a href="#">Các khách sạn có view đẹp nhất Vũng Tàu!</a></li>
										<li><a href="#">Ăn gì mặc gì khi đi Đà Lạt</a></li>
									</ul>
								</div><!-- /ttw-hrsub-inner -->
							</div><!-- /ttw-hrsub -->
						</li>
						<li>
							<a href="#">Liên Hệ</a>
							<div class="ttw-hrsub">
								<div class="ttw-hrsub-inner"> 
									<div>
										<h4>Utilities</h4>
										<ul>
											<li><a href="#">Green Tree Pro</a></li>
											<li><a href="#">Wobbler 3.0</a></li>
											<li><a href="#">Coolkid</a></li>
										</ul>
										<h4>Education</h4>
										<ul>
											<li><a href="#">Learn Thai</a></li>
											<li><a href="#">Math Genius</a></li>
											<li><a href="#">Chemokid</a></li>
										</ul>
									</div>
								</div><!-- /ttw-hrsub-inner -->
							</div><!-- /ttw-hrsub -->
						</li>
						<li>
							<a href="#">Quản lý</a>
							<div class="ttw-hrsub">
								<div class="ttw-hrsub-inner">
									<h4><a href="quantri/index.php" target="blank">Đăng nhập</a></h4>
								</div>
							</div><!-- /ttw-hrsub -->
						</li>
					</ul>
				</nav>
			</div>
		</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
		<script src="js/ttwHorizontalMenu.min.js"></script>
		<script>
			$(function() {
				ttwHorizontalMenu.init();
			});
		</script>

		<br><br><br>
		<div class="container" align="center">
			<form method="post" action="cart.php">
				<?php
					$dem=0;
					foreach($_SESSION as $ma => $gt)
					{	
						$kt= substr($ma,0,5);
						if($kt=='cart_' && $gt > 0)								
							$dem+=1;
					}
					if($dem==0)
					{
				?>
					<img src="images/giohang.png" style="width: 400px; height: 350px">
					<p align="center">Giỏ Hàng Trống !</p>
				<?php
					}
				else
				{
				?>
				<table align="center" width="900px"  border="2px">
					<tbody>
						<tr>							
							<td width="300px" align="center">Hình Ảnh</td>
							<td width="350px" align="center">Thông Tin</td> 
							<td  align="center">Xóa</td>
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
					<?php					
					$gt=$dong['ID'];

					$_SESSION['chon_ck'.$gt]=$gt;					
					//cập nhật lại session 										
					?>					
				<td height="200px" align="center">
					<img src="images/<?php echo $dong['IMAGE'] ?>" style="width: 300px; height: 150px">
				</td>
				<td>
					<?php echo $dong['NAME'].'</br>';
					echo $dong['KIND_TOUR'].'</br>';
					echo $dong['MAX_PEOPLE'].'</br>';?>
				</td>
				<td width="150px" align="center">
					<?php $keydelete ='cart_'.$dong['ID'];
					$ptchon ='chon_ck'.$dong['ID']?>
					<button class="btn btn-info">
						<a style="color: black" href="cartdelete.php?id=<?php echo $keydelete; ?>&ptxoa=<?php echo $ptchon; ?>">Xóa khỏi giỏ hàng</a>
					</button>
				</td>
			</tr>
			<?php 
		}
		$cohang='';
	}
						} 
						?>
					</tr>
				</tbody>
			</table>
			</br>
			</br>
			<?php
				//print_r($_SESSION);
	
			?>												
			<button name="buoctiep" class="btn btn-danger">
				<a href="dangkitour.php?">Bước Tiếp Theo</a>
			</button>
			<?php
				}
			?>

		</form>



	</div>

	<script type="text/javascript" src="vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="js/1.js"></script>
</body>
<script src="https://uhchat.net/code.php?f=7a60c3"></script>
</html>