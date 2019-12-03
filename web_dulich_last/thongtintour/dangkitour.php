S<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php 
	include("connection.php");
	//Khai báo giá trị ban đầu, nếu không có thì khi chưa submit câu lệnh insert sẽ báo lỗi
	$tenkh = "";
	$cmnd = "";
	$dchi = "";
	$ns = "";
	$sdt = "";
	$email = "";


//Lấy giá trị POST từ form vừa submit
if (isset($_POST['btndattour'])) {
    if(isset($_POST["txttenkh"])) { $tenkh = $_POST['txttenkh']; }
    if(isset($_POST["txtcmnd"])) { $cmnd = $_POST['txtcmnd']; }
    if(isset($_POST["txtdiachi"])) { $dchi = $_POST['txtdiachi']; }
    if(isset($_POST["txtns"])) { $ns = $_POST['txtns']; }
    if(isset($_POST["txtsdt"])) { $sdt = $_POST['txtsdt']; }
    if(isset($_POST["txtemail"])) { $email = $_POST['txtemail']; }
    if(isset($_POST["txtslnguoilon"])) { $nglon = $_POST['txtslnguoilon']; }
    if(isset($_POST["txtsltreem"])) { $treem = $_POST['txtsltreem']; }

    //Code xử lý, insert dữ liệu vào table
    $sql = "INSERT INTO `customers`(`NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `BIRTHDAY`, `EMAIL`,`CHILDS_AMOUNT`,`ADULTS_AMOUNT`) 
    		VALUES ('$tenkh','$cmnd','$dchi','$sdt','$ns','$email','$nglon','$treem')";
    if ($connect->query($sql) === TRUE) 
    {
        echo "Thêm dữ liệu thành công";
    }
     else {
        echo "Error";
    }
}
//Đóng database
$connect=null;
?>
<body>
	<form name="dangki" action="dangkitour.php" method="post">
	<div id="banner">BANNER</div>
	<div id="navbar">
			<ul>
            	<li><a href="#">Trang chủ</a></li>
                <li><a href="#">Tour trong nước</a></li>
                <li><a href="#">Tour nước ngoài</a></li>
                <li><a href="#">Tour giả rẻ</a></li>
                <li><a href="#">Tour Châu Âu</a></li>
                <li><a href="#">Tour Châu Á</a></li>
            </ul>
	</div>
	</div>
	<div id="main_dangkitour">
		<div id="khung">THÔNG TIN LIÊN LẠC</div>
		<div id="khung_dienthongtin">
			<table>
				<tr>
					<td>Mã khách hàng</td>
					<td><input type="text" name="txtmakh" size="70px"></td>
				</tr>
				<tr>
					<td>Tên khách hàng</td>
					<td><input type="text" name="txttenkh" size="70px"></td>
				</tr>
				<tr>
					<td>Chứng minh nhân dân</td>
					<td><input type="text" name="txtcmnd" size="70px"></td>
				</tr>
				<tr>
					<td>Địa chỉ:</td>
					<td><input type="text" name="txtdiachi" size="70px"></td>
				</tr>
				<tr>
					<td>Số điện thoại</td>
					<td><input type="text" name="txtsdt" size="70px"></td>
				</tr>
				<tr>
					<td>Ngày sinh:</td>
					<td><input type="text" name="txtns" size="70px"></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="text" name="txtemail" size="70px"></td>
				</tr>
			</table>
			<table border="1px solid blue">
				<tr align="center">
					<td colspan="2">Số người tham gia</td>
				</tr>
				<tr>
					<td>Số người lớn</td>
					<td><input type="number" name="txtslnguoilon" min="1" max="20" ></td>
					<!-- <td><input type="submit" name="btnthemdk" value="Thêm khung đăng kí"></td> -->
				</tr>
				<tr>
					<td>Số trẻ em</td>
					<td><input type="number" name="txtsltreem" min="0"></td>
				</tr>
				
			</table>

			<div align="center">DANH SÁCH KHÁCH HÀNG ĐI TOUR</div>
			<!--  -->
			<?php
				if(isset($_POST['btnthemdk']))
				{	
					try {
						$cmnd=$_POST['txtcmnd'];
					    // khởi tạo kết nối
					    $connect = new PDO('mysql:host=localhost;dbname=ql_tourdulich', 'root', '');
					    $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					    //Câu truy vấn
					    $sql = "SELECT * FROM customers where IDCARD='$cmnd'";
					    //set truy vấn với prepare
					    $query = $connect->prepare($sql);
					    // thực hiện truy vấn
					    $query->execute();
					    //gán dữ liệu trả về
					    $result = $query;
					    // Lặp kết quả trả về
					    foreach ($result as $item) {
					    	// GAN VAO INSERT CUSTOMER_GROUPS
					        echo $item['ID'];
					    }
					} catch (PDOException $e) {
					    //thất bại
					    die($e->getMessage());
					}
				}
			?>
			<p align="center"><input type="submit" name="btndattour" value="Tiếp theo" size="20px"></p>
			<a href="nhomkhach.php?mod1=<?php echo $_POST['txtslnguoilon']?>&mod2=<?php echo $_POST['txtsltreem']?>&cmnd=<?php echo $cmnd ?>">Bước tiếp theo</a>
		</div>		
	</div>
	</form>
</body>
</html>