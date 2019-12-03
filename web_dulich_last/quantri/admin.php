<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/angular-material.min.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" href="1.css">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>

<?php session_start(); ?>
<body ng-app="myApp" ng-controller="MyController">
	
	<form action="" method="post" class="index" >
		<div class="login" align="right">
			<h5>
				<?php 
			       if (isset($_SESSION['username']) && $_SESSION['username']){
			           echo 'Xin chào admin số: '.$_SESSION['username']."<br/>";
			           // echo 'Click vào đây để <a href="dangxuat.php">Đăng xuất</a>';
			       }
			       else{
			           echo "Bạn chưa đăng nhập";
			       }
       			?>
       			<!-- <a id="dangxuathethong" href="dangxuat.php">Đăng xuất</a> -->

			</h5>
			<button class="btn btn-primary"><a href="dangxuat.php">Đăng xuất</a></button>
		</div>


		<div class="container  text-xs-center">
			<h2 class="display-4">Chào mừng đến với Du lịch cuộc sống!</h1>
				<p class="lead">Trang quản lý dành cho Admin</p>
			</div>

			<section class="banner">
				<div class="inner">
					<div class="slogan">
						<h1>Đặt chỗ ngay!</h1>
						<h2>Khám phá ngay những ưu đãi tốt nhất!</h2>
					</div>

					<div class="image-block">
						<img class="photo-1" alt="" src="images/">
						<img class="photo-2" alt="" src="images/">
						<img class="photo-3" alt="" src="images/">
						<!-- <img class="photo-4" height="250px" alt="" src="images/dulich.jpg"> -->
					</div>
				</div>
			</section>

		</div>
		<br>

		<br>
		<?php 
			include("navbar.php");
		?>
		<div id="chucnang">
			<?php
				if(isset($_GET['quanly'])&&($_GET['quanly'])!=''){
					$tam= $_GET['quanly'];
				}
				else
				{
					$tam ='';
				}
				if($tam == 'admin')
				{
					include('admin.php');
				}
				if($tam == 'list_qltourdl')
				{
					include('list_qltourdl.php');
				}
				elseif($tam == 'dskhachdk')
				{
					include('dskhachdk.php');
				}
				elseif($tam == 'list_employees')
				{
					include('list_employees.php');
				}
				elseif($tam == 'show_employee')
				{
					include('show_employee.php');
				}
				
			?>
		</div>

		

		<br>
		<br>
		<br>
		<br>
		<p></p>

		<footer>
			<div class="splitter"></div>
			<ul>
				<!-- three footer columns are here -->
			</ul>

			<div class="bar">
				<div class="bar-wrap">



				</div>
			</div>

			<ul>
				<li>

					<div class="text">
						<h4>Thanh toán tiện lợi</h4>
						<div>Dễ dàng chọn phương thức thanh toán.
						Dễ dàng và linh hoạt với momo! Chỉ cần chọn phương thức thanh toán phù hợp với bạn!</a></div>
					</div>
				</li>
				<li>

					<div class="text">
						<h4>Dịch vụ</h4>
						<div>Đặt chỗ dễ dàng và nhanh chóng mọi lúc mọi nơi
						Được xác nhận đặt chỗ tức thì với Du lịch cuộc sống. Quên cảnh xếp hàng mệt mỏi để mua vé đi!</a></div>
					</div>
				</li>
				<li>

					<div class="text">
						<h4>Chăm sóc</h4>
						<div>Luôn thảnh thơi.
							Chúng tôi có bộ phận Hỗ trợ Khách hàng 24/7 luôn sẵn sàng giúp đỡ bạn. Không âu lo, chẳng muộn phiền!
						</a></div>
					</div>
				</li>
			</ul>
			<div class="bar">
				<div class="bar-wrap">
					<ul class="links"> <!-- footer menu -->
						<li><a href="#">Trang chủ</a></li>
						<li><a href="#">Giấy phép</a></li>
						<li><a href="#">Liên hệ với chúng tôi</a></li>
						<li><a href="#">Quảng cáo</a></li>
						<li><a href="#">Giới thiệu</a></li>
					</ul>
					<div class="clear"></div>
					<div class="copyright">&copy;  2019 Bản quyền</div>
					<div class="copyright">&copy;  Số điện thoại: 03.3305.9308</div>
					<div class="social">
						<a href="#" class="fb">
							<span data-icon="f" class="icon"></span>
							<span class="info">
								<a href=""><span class="follow">Facebook</span></a>
							</span>
						</a>

						<a href="#" class="tw">
							<span data-icon="T" class="icon"></span>
							<span class="info">
								<span class="follow">Twitter</span>
							</span>
						</a>

						<a href="#" class="rss">
							<span data-icon="Z" class="icon"></span>
							<span class="info">
								<span class="follow">Zalo</span>
							</span>
						</a>
					</div>
				</div>
			</div>
		</footer>
	</form>










	<script type="text/javascript" src="vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="1.js"></script>
</body>
</html>