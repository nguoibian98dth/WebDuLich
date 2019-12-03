<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/angular-material.min.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<script src="js/modernizr.custom.js"></script>
</head>

<body ng-app="myApp" ng-controller="MyController">
	
	<?php 
	include("connection.php"); 
	?>

	<div class="container menu">	
		<div class="main">
			<nav id="ttw-hrmenu" class="ttw-hrmenu">
				<ul>
					<li>
						<a href="#">Trang Chủ</a>
						<div class="ttw-hrsub">
							<div class="ttw-hrsub-inner"> 
								
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
								<h4><a href="quantri/index.php">Đăng nhập</a></h4>
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

	

	<div class="container  text-xs-center">
		<h2 class="display-4">Chào mừng đến với Du lịch cuộc sống!</h1>
			<p class="lead">Nơi mang đến trải nghiệm tốt nhất cho mọi người.</p>
		</div>

		<section class="banner">
			<div class="inner">
				<div class="slogan">
					<h1>Đặt chỗ ngay!</h1>
					<h2>Khám phá ngay những ưu đãi tốt nhất!</h2>
				</div>

				<div class="image-block">
					<img class="photo-1" alt="" width="250px" height="250px" alt="" src="images/dulich.jpg">
					<img class="photo-2" alt="" src="images/">
					<img class="photo-3" alt="" >
					<img class="photo-4" >
				</div>
			</div>
		</section>

	</div>
	<br>

	<div class="container" align="right">
		<div class="searchform cf">
			<input type="text" placeholder="Nhập tên thành phố bạn muốn tới?">
			<button type="submit">Tìm kiếm</button>
		</div>

	</div>
	<br>

	<div class="container cot">
		<button type="submit" class="btn btn-info trongnuoc" ng-click="show();" >Trong nước</button>
		<button type="submit" class="btn btn-info ngoainuoc" ng-click="show();" >Ngoài nước</button>
		<div class="row" ng-hide="display">
			<?php
			$sql="select*from tours  where KIND_TOUR ='Trong Nước'";
			$tours=$connect->query($sql);
			foreach ($tours as $tour) {
				?>
				<div class="mottin">

					<a href="chitiettour.php?id=<?php echo $tour['ID']?>" class="hrefHCM">
						<div class="vien">
							<img src="images/<?php echo $tour['IMAGE']?>" alt="" class="float-xs-left" width="250px" height="170px">
							<b><?php echo $tour['NAME']?></b><br>							
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
		<div class="row" ng-show="display">
			<?php
			$sql1="select*from tours  where KIND_TOUR ='Nước Ngoài'";
			$tours1=$connect->query($sql1);
			foreach ($tours1 as $tour) {
				?>
				<div class="mottin">

					<a href="chitiettour/thongtintour.php?id=<?php echo $tour['ID']?>" class="hrefHCM">
						<div class="vien">
							<img src="images/<?php echo $tour['IMAGE']?>" alt="" class="float-xs-left" width="250px" height="170px">
							<b><?php echo $tour['NAME']?></b><br>							
						</div>
					</a>
				</div>
				<?php
			}
			?>
		</div>
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










	<script type="text/javascript" src="vendor/bootstrap.js"></script>  
	<script type="text/javascript" src="vendor/angular-1.5.min.js"></script>  
	<script type="text/javascript" src="vendor/angular-animate.min.js"></script>
	<script type="text/javascript" src="vendor/angular-aria.min.js"></script>
	<script type="text/javascript" src="vendor/angular-messages.min.js"></script>
	<script type="text/javascript" src="vendor/angular-material.min.js"></script>  
	<script type="text/javascript" src="js/1.js"></script>

</body>
</html>