<?php session_start();?>
<!DOCTYPE html>
<html lang="en"  >
<head>
	<title> Document  </title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1"> 	
	<link rel="stylesheet" href="vendor/bootstrap.css">
	<link rel="stylesheet" href="vendor/angular-material.min.css">
	<link rel="stylesheet" href="vendor/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/default.css" />
	<link rel="stylesheet" type="text/css" href="css/component.css" />
	<link rel="stylesheet" type="text/css" href="css/1.css">
	<link rel="stylesheet" type="text/css" href="css/cart.css">
	<script src="js/modernizr.custom.js"></script>
</head>
<body ng-app="myApp" ng-controller="MyController">
	
	<form method="post" name="chitiettour">
		<div class="container menu">	
			<div class="main">
				<nav id="ttw-hrmenu" class="ttw-hrmenu">
					<ul>
						<li>
							<a href="#">Trang Chủ</a>
							<div class="ttw-hrsub">
								<div class="ttw-hrsub-inner"> 
									<a href="index.php">Trang Chủ</a>
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
									</div>
									<div>
										<h4>Review</h4>
										<ul>
											<li><a href="#">Các khách sạn có view đẹp nhất Vũng Tàu!</a></li>
											<li><a href="#">Ăn gì mặc gì khi đi Đà Lạt</a></li>
										</ul>
										<!-- /ttw-hrsub-inner -->
									</div><!-- /ttw-hrsub -->
								</li>
								<li>
									<a href="#">Liên Hệ</a>
									<div class="ttw-hrsub">
										<div class="ttw-hrsub-inner"> 
											<div>
												<h4>Mạng xã hội</h4>
												<ul>
													<li><a href="#">Facebook</a></li>
													<li><a href="#">Instagram</a></li>
													<li><a href="#">Twitter</a></li>
												</ul>
												<h4>Gọi</h4>
												<ul>
													<li><a href="#">Zalo</a></li>
													<li><a href="#">Viber</a></li>
												</ul>
											</div>
										</div><!-- /ttw-hrsub-inner -->
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
				</script><br><br><br>
				<?php 
				include("connection.php");
				$id=$_GET['id'];
				$sql = "SELECT * FROM `thongtinchitiettour`where ID='$id'";
				$tours= $connect->query($sql);
				?>

				<?php

				foreach ($tours as $tour) 
				{
					?>
					<div class="container body1">
						<div class="infor" align="left">
							<table class="chitiettour" align="center" width="1100px" border="0px" cellpadding="2px" cellspacing="2px">
								<tr>	
									<td rowspan="3" width="60%"><div id="nametour"><h4><?php echo $tour['NAME'] ?></h4></div>
										<img src="images/<?php echo $tour['IMAGE'] ?>" alt="" width="95%" height="400px">
									</td>
									<td id="idtour" colspan="3" align="left" width="20%">

										Mã tour:<br><br>
										Ngày đi:<br><br>
										Ngày về:<br><br>
										Loại tour:<br>										

									</td>
									<td width="20%">
										<div id="idtour1">
											<?php echo $tour['ID'] ?><br><br>
											<?php echo $tour['START'] ?><br><br>
											<?php echo $tour['END'] ?><br><br>
											<?php echo $tour['KIND_TOUR']?><br>
										</div>
									</td>
								</tr>
								<tr>
									<td id="idtour2" colspan="3">
										<p>Số người tối đa:&nbsp;&nbsp;&nbsp;<?php  echo $tour['MAX_PEOPLE']?><br></p>
									</td>
									
								</tr>
								<tr>
									<td colspan="3" align="left" id="price">
										<div >
											<p>Người lớn: <?php echo $tour['ADULT_PRICE']?> VNĐ</p>
											<p>Trẻ em: <?php echo $tour['CHILD_PRICE']?> VNĐ</p>
										</div>
									</td>
									<td align="right">
										<p><button class="btn btn-danger" style="width: 200px"><a href="dangkitour.php?idtour=<?php echo $tour['ID']?>">Đặt ngay</button></p>
											<p><button class="btn btn-info" style="width: 200px"><a href="cart.php?id=<?php echo $tour['ID']?>">Thêm vào giỏ hàng</a></button></p>
										</td>
									</tr>
								</table>
							</div>
						</div>
						<br><br>

						<div class="container body2" align="float-xs-left">
							<table align="center" width="1100px" border="0px" cellpadding="2px" cellspacing="2px">
								<tr>	
									<td rowspan="3" width="70%"><div id="nametour">

										<div class="firstWord">
											<p><b>CHƯƠNG TRÌNH TOUR</b></p>
										</div>
										<div class="thongtin">
											<?php echo $tour['TOUR_PROGRAM'] ?>
										</div>
										<br><br><br>
										<div class="firstWord">
											<p><b>CHI TIẾT TOUR</b></p>
										</div>
										<div class="hotel">
											<p>Thông tin khách sạn:&nbsp; <?php echo $tour['HOTEL_NAME'] ?></p>
										</div>					

									</td>
									<td  rowspan="3"  align="left" width="20%">

									</td>
									<td width="20%">
										<div id=bannerBody2>
											<?php 
											/*----------banner-----------*/
											?>
										</div>
									</td>
								</tr>
							</table>
						</div>
						<br><br>
						<?php 
					} 
					?>
					<div class="container body2" align="float-xs-left">
						<div class="sortGoiytour" ng-hide="display">
							<?php
							include ("connection.php");
							$sql2="select*from tours  where KIND_TOUR ='Trong Nước' and ID <> '$id'";
							$tourGoiy=$connect->query($sql2);
							?>

						</div>

						<div class="firstWord">
							<p><b>TOUR GỢI Ý</b></p>
						</div>
						<div class="row">
							<?php
							$count = 0;
							foreach ($tourGoiy as $tour) 
							{
								$count++;
								if($count==5)
									break;

								?>

								<div class="mottin">
									<div class="vien">
										<a href="chitiettour.php?id=<?php echo $tour['ID']?>" class="hrefHCM">
											<img src="images/<?php echo $tour['IMAGE']?>" alt=""  width="250px" height="170px">
											<br>
											<b>	<?php echo $tour['NAME']?></b>
										</a>
									</div>
								</div>
								<?php 

							}
							?>

						</div>
					</div>
					<br><br><br>
					
				</form>


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

			</body>
			<script src="https://uhchat.net/code.php?f=7a60c3"></script>
			</html>