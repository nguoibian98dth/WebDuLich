<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>


<body>
	<form action="dangkitour.php" method="post" name="thongtintour">
	<div id="banner">BANNER</div>
	<div id="navbar">
			<ul>
            	<li><a href="#">Trang chủ</a></li>
                <li><a href="#">Tour trong nước</a></li>
                <li><a href="#">Tour nước ngoài</a></li>
                <li><a href="#">Tour tiết kiệm</a></li>
                <li><a href="#">Tour Châu Âu</a></li>
                <li><a href="#">Tour Châu Á</a></li>
            </ul>
	</div>
	</div>
	<?php 

	?>
	<div id="main">
		<div id="gioithieu"></div>
		
	
		<div id="left"><img src="images/<?php echo $tour['IMAGE'] ?>" alt="da lat "></div>
		<div id="right"><p>Mã tour:<br>
			Ngày đi:<br>
			Ngày về:<br>
			Loại tour:<br>
			Số người tối đa:<br>
		
		
			<h2>GIÁ TỪ: VNĐ</h2>
			<input  type="button" name="btndatcho" value="ĐẶT CHỖ" onClick = "alert('Bạn đã click vào textbox')">				
		</p></div>
	</div>
	

	<div id="main2">
		<div id="danhmuc">danh muc</div>
		<div id="left">CHƯƠNG TRÌNH TOUR<br>
						Đà Lạt  mộng mơ khiến bao  người  ngơ ngẩn bởi nơi đây ăm ắp nắng vàng, bầu trời xanh ngắt, khí trời se lạnh thả hồn cho bao chuyện tình lãng mạn, nơi chốn hẹn hò của những trái tim khát khao. Không chỉ dừng nơi ấy, Quý khách sẽ không khỏi ngỡ ngàng khi được tận mắt thấy được sự mênh mông của núi đồi, sự hùng vĩ của thác nước, sự êm ả của mặt hồ, sự đắm thắm của những bông hoa đang hé nụ,… những tuyệt tác mà  thiên nhiên ưu ái  dành cho xứ sở sương mù.<BR>

						Chi tiết tour<br>
						THÔNG TIN PHƯƠNG TIỆN

						<table border="1px solid black">
							<tr>
								<td></td>								
							</tr>
						</table><br>
						THÔNG TIN KHÁCH SẠN
						<table border="1px solid black">
							<tr>
								<td>Tên khách sạn</td>
								<td>Địa chỉ</td>	
								<td>Điện thoại</td>						
							</tr>
							<tr>
								<td></td>
								<td>A1-A2 Hải Thượng, P1, Đà Lạt - Cách Chợ Đà Lạt Khoảng 850m</td>
								<td>063.3511162</td>
							</tr>
						</table><br>
						 THÔNG TIN HƯỚNG DẪN VIÊN
						<table border="1px solid black">
							<tr>
								<td>Đang cập nhật</td>								
							</tr>
						</table><br>
						GIÁ TOUR & PHỤ THU PHÒNG ĐƠN
						<table border="1px solid black">
							<tr>
								<td>Người lón</td>
								<td>Trẻ em</td>									
							</tr>
							<tr>
								<td></td>
								<td></td>									
							</tr>
						</table>

						<br>
						<pre id="pre_format">
Giá tour bao gồm: 
- Xe tham quan (4, 7, 16, 29, 35, 45 chỗ tùy theo số lượng khách) theo chương trình
- Khách sạn theo tiêu chuẩn 2 khách/phòng hoặc 3 khách/phòng 
Ø Khách sạn tương đương 2 sao : La Pensee, Thắng Lợi, PX …
Ø Khách sạn tương đương 3 sao : Mai Vàng, Rum Vàng, Rum Vàng …
Ø Khách sạn 3 sao cao cấp : Ngọc Phát, River Prince, Dalat Plaza …
Ø Khách sạn tương đương 4 sao : Bavico, Ngọc Lan, SG ĐL, Kings, Sammy, Mường Thanh …
- Vé tham quan theo chương trình  
- Ăn theo chương trình.
- Hướng dẫn viên tiếng Việt nối tuyến
- Bảo hiểm du lịch với mức bồi thường cao nhất 120.000.000đ/vụ
- Nón Vietravel + Nước suối + Khăn lạnh 
- Thuế VAT 
 

 
					</pre>




		</div>
		<div id="right">dddddd</div>
	</div>

	
	<!-- ket thuc vòng lặp foreach  -->

		</form>	
</body>
</html>