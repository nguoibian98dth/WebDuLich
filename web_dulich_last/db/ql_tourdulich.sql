-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 17, 2019 lúc 07:19 AM
-- Phiên bản máy phục vụ: 10.1.32-MariaDB
-- Phiên bản PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ql_tourdulich`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDCARD` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PHONENUMBER` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `BIRTHDAY` date NOT NULL,
  `EMAIL` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `CHILDS_AMOUNT` tinyint(4) NOT NULL,
  `ADULTS_AMOUNT` tinyint(4) NOT NULL,
  `NOTES` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`ID`, `NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `BIRTHDAY`, `EMAIL`, `CHILDS_AMOUNT`, `ADULTS_AMOUNT`, `NOTES`) VALUES
(1000000, 'Lê Tố Ngọc', '01235445', 'Lâm Đồng', '01243576879', '1994-06-01', 'ngoctb@gmail.com', 0, 0, NULL),
(1000070, 'Trần Nhất', '111111111', 'quận 3 tphcm', '34343434', '1990-01-01', 'nguyen@gmail.com', 5, 1, NULL),
(1000073, 'Trần Nhất', '99999999', '14 lê loi tphcm', '4321442344', '1990-01-01', 'sangmt321@yahoo.com', 1, 0, NULL),
(1000074, 'Nguyễn  Sang', '000000000', '6/4 Quang trung gò vấp tphcm', '312323', '1990-01-01', 'sangmt321@yahoo.com', 1, 0, NULL),
(1000075, 'Lê Nhất', '99999699', '14 trương định tphcm', '4321442344', '1997-01-08', 'sangmt321@yahoo.com', 2, 0, NULL),
(1000076, 'NGUYEN THE BAO', '123', '1 LE LOI Q1 TPHCM', '4343434', '1995-09-01', 'bao@gmail.com', 1, 0, NULL),
(1000079, 'Quang huu', '888888888', '14 trương định tphcm', '4321442344', '1990-01-01', 'nguyen@gmail.com', 3, 2, NULL),
(1000081, 'Trần Bảo', '33333333', '12 nguyen binh p12 q6 tphcm', '013277485', '1994-11-11', 'baobt@yahoo.vn', 0, 1, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customer_groups`
--

CREATE TABLE `customer_groups` (
  `REPRESENT_ID` int(10) NOT NULL,
  `IDCARD` varchar(12) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Không Có',
  `CUSTOMERNAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `AGE` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `customer_groups`
--

INSERT INTO `customer_groups` (`REPRESENT_ID`, `IDCARD`, `CUSTOMERNAME`, `AGE`) VALUES
(1000000, '05665344', 'Ngô Hữu Phúc', 22),
(1000000, '093274544', 'Trần Ngọc Thủy', 25);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `employees`
--

CREATE TABLE `employees` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `IDCARD` varchar(12) COLLATE utf8_unicode_ci NOT NULL,
  `ADDRESS` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `PHONENUMBER` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `POSITION` varchar(20) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `PART_DAY` date NOT NULL,
  `BIRTHDAY` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `employees`
--

INSERT INTO `employees` (`ID`, `NAME`, `IDCARD`, `ADDRESS`, `PHONENUMBER`, `POSITION`, `PART_DAY`, `BIRTHDAY`) VALUES
(1001000, 'Khâu Tấn Đạt', '05665344', 'TPHCM', '0987654321', 'Manager', '2018-11-08', '1998-10-15'),
(1001001, 'Trần Tố Nga', '05665344', 'Hà Nội', '0123456789', 'Employee', '2018-11-08', '1998-11-15');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `fullinfo_employees`
-- (See below for the actual view)
--
CREATE TABLE `fullinfo_employees` (
`ID` int(10)
,`NAME` varchar(50)
,`IDCARD` varchar(12)
,`ADDRESS` varchar(50)
,`PHONENUMBER` varchar(13)
,`POSITION` varchar(20)
,`PART_DAY` date
,`BIRTHDAY` date
,`POWER` varchar(10)
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `login`
--

CREATE TABLE `login` (
  `ID` int(10) NOT NULL,
  `PASSWORD` varchar(15) COLLATE utf8_unicode_ci NOT NULL DEFAULT '123456a',
  `POSITION` varchar(10) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'USER'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `login`
--

INSERT INTO `login` (`ID`, `PASSWORD`, `POSITION`) VALUES
(1001000, '111111', 'ADMIN'),
(1001001, '123456a', 'USER');

-- --------------------------------------------------------

--
-- Cấu trúc đóng vai cho view `thongtinchitiettour`
-- (See below for the actual view)
--
CREATE TABLE `thongtinchitiettour` (
`ID` int(10)
,`NAME` varchar(100)
,`KIND_TOUR` varchar(50)
,`MAX_PEOPLE` tinyint(4)
,`IMAGE` varchar(255)
,`START` date
,`END` date
,`HOTEL_NAME` varchar(100)
,`VEHICLE` varchar(30)
,`CHILD_PRICE` float
,`ADULT_PRICE` float
,`TOUR_PROGRAM` text
);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tours`
--

CREATE TABLE `tours` (
  `ID` int(10) NOT NULL,
  `NAME` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `KIND_TOUR` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `MAX_PEOPLE` tinyint(4) NOT NULL,
  `IMAGE` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tours`
--

INSERT INTO `tours` (`ID`, `NAME`, `KIND_TOUR`, `MAX_PEOPLE`, `IMAGE`) VALUES
(2000000001, 'Japan-Tokyo-Hiroshima-Fuji 6 ngày 5 đêm', 'Nước Ngoài', 20, '2.jpg'),
(2000000006, 'Paris-London-Monaco', 'Nước Ngoài', 20, 'paris.jpg'),
(2000000007, 'Đà Lạt- Nha Trang-Phan Thiết 4N3Đ', 'Trong Nước', 20, 'dalat.jpg'),
(2000000009, 'Tây Bắc -Thái Nguyên -Cao Bằng', 'Trong Nước', 17, 'taybac.jpg'),
(2000000010, 'Tây Bắc Thái Nguyên', 'Trong Nước', 14, 'thainguyen.jpg'),
(2000000011, 'Du Lịch Phan Thiết Thiên Đường Resort 2N2Đ', 'Trong Nước', 10, 'muine.jpg'),
(2000000012, 'Du lịch Đà Nẵng | Huế | Bà Nà Hills | Hội An 3N2Đ', 'Trong Nước', 15, 'hanoi.jpg'),
(2000000013, 'Du lịch Phú Quốc | Vinpearland | Tắm biển Bãi Sao 3N2Đ', 'Trong Nước', 20, 'phuquoc.jpg\r\n'),
(2000000014, 'Malaysia- Kular Lumpur 3N2Đ', 'Nước Ngoài', 15, 'malaysia.jpg'),
(2000000015, 'Du lịch Hạ Long ', 'Trong Nước', 10, 'halong.jpg'),
(2000000016, 'Bangkok - Pattaya (Khách sạn 5* & 3*, Tặng buffet Baiyoke Sky, Tour Tiêu Chuẩn)  ', 'Nước Ngoài', 20, 'pattaya.jpg'),
(2000000017, 'Genting - Kuala Lumpur (Tour Tiết Kiệm) ', 'Tiết kiệm', 10, 'genting.jpg'),
(2000000018, 'Bắc Kinh - Phượng Hoàng Cổ Trấn - Trương Gia Giới (Chiêm ngưỡng cây cầu kính dài nhất Thế Giới', 'Nước Ngoài', 20, 'backinh.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tour_details`
--

CREATE TABLE `tour_details` (
  `ID` int(10) NOT NULL,
  `START` date NOT NULL,
  `END` date NOT NULL,
  `HOTEL_NAME` varchar(100) COLLATE utf8_unicode_ci DEFAULT 'ĐANG CẬP NHẬT',
  `VEHICLE` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `CHILD_PRICE` float NOT NULL,
  `ADULT_PRICE` float NOT NULL,
  `TOUR_PROGRAM` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tour_details`
--

INSERT INTO `tour_details` (`ID`, `START`, `END`, `HOTEL_NAME`, `VEHICLE`, `CHILD_PRICE`, `ADULT_PRICE`, `TOUR_PROGRAM`) VALUES
(2000000001, '2019-06-01', '2019-06-11', '4*- Yamashira Hotel', 'Máy bay', 12990000, 13990000, 'Khởi hành từ TpHCM '),
(2000000006, '2019-06-01', '2019-06-10', '4*- Luxury Hotel', 'Máy bay', 15990000, 21900000, 'Khởi hành từ TpHCM '),
(2000000007, '2017-01-01', '2017-01-01', 'Home stay Kim Nhật Anh', 'bus', 1290000, 17990000, 'Khởi hành từ TpHCM '),
(2000000009, '2017-01-01', '2017-01-01', 'Home stay Kim  Hoàng', 'bus', 1190000, 1290000, ''),
(2000000010, '2017-01-01', '2017-01-01', '4*- danis Hotel', 'Máy bay', 15990000, 17990000, 'Khởi hành từ TpHCM '),
(2000000011, '2019-06-05', '2019-06-07', 'ĐANG CẬP NHẬT', 'Xe du lịch', 1990000, 2390000, 'Khởi hành từ tphcm các ngày trong tuần'),
(2000000012, '2019-05-31', '2019-06-03', 'ĐANG CẬP NHẬT', 'Máy bay', 4390000, 4890000, NULL),
(2000000013, '2019-07-07', '2019-07-10', 'ĐANG CẬP NHẬT', 'Máy bay', 4388000, 4580000, NULL),
(2000000014, '2019-06-01', '2019-06-04', 'Bangquaches Resort', 'Máy bay', 7990000, 8990000, 'Khởi hành từ TpHCM '),
(2000000015, '2019-06-01', '2019-06-05', 'Hotel Kim Long', 'Máy bay', 7490000, 8290000, 'Vịnh Hạ Long nơi rồng đáp xuống, là danh thắng quốc gia được xếp hạng từ năm 1962. Hạ Long có 1.969 hòn đảo, lô nhô trên mặt biển, nổi tiếng nhất là các hòn Lư Hương, Gà Chọi, Cánh Buồm, Mâm Xôi, đảo '),
(2000000016, '2019-08-01', '2019-08-06', '5*- Baiyoke Resort', 'Máy bay', 9891000, 10990000, 'Nằm trong khu vực Đông Nam Á, Thái Lan được du khách ưu ái dành tặng cho nhiều mỹ danh như: “Đất Nước Chùa Vàng”, “Thiên Đường Du Lịch”, “Thiên Đường Mua Sắm”, “Xứ Sở Của Những Nụ Cười Thân Thiện”. Th'),
(2000000017, '2019-08-26', '2019-09-01', '3*- Kumlampark Resort', 'Máy bay', 5490000, 6470000, 'Đất nước Malaysia xinh đẹp và quyến rũ được tạo hóa hào phóng ban tặng rất nhiều cảnh quan thiên nhiên đẹp mê lòng người. Không quá ồn ào, náo nhiệt, trời trong mát, những ngày du lịch tại Malaysia sẽ'),
(2000000018, '2019-10-01', '2019-10-07', '4*- Tân Triều Hotel', 'Máy bay', 19990000, 21990000, 'Vạn Lý Trường Thành - một trong những kỳ quan của thế giới, là công trình nhân tạo với mục đích phục vụ cho quân sự có một không hai trên thế giới, Thập Tam Lăng - nơi thờ phụng 13 ngôi mộ Thời nhà Mi');

-- --------------------------------------------------------

--
-- Cấu trúc cho view `fullinfo_employees`
--
DROP TABLE IF EXISTS `fullinfo_employees`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `fullinfo_employees`  AS  select `a`.`ID` AS `ID`,`a`.`NAME` AS `NAME`,`a`.`IDCARD` AS `IDCARD`,`a`.`ADDRESS` AS `ADDRESS`,`a`.`PHONENUMBER` AS `PHONENUMBER`,`a`.`POSITION` AS `POSITION`,`a`.`PART_DAY` AS `PART_DAY`,`a`.`BIRTHDAY` AS `BIRTHDAY`,`b`.`POSITION` AS `POWER` from (`employees` `a` join `login` `b`) where (`a`.`ID` = `b`.`ID`) ;

-- --------------------------------------------------------

--
-- Cấu trúc cho view `thongtinchitiettour`
--
DROP TABLE IF EXISTS `thongtinchitiettour`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `thongtinchitiettour`  AS  select `tours`.`ID` AS `ID`,`tours`.`NAME` AS `NAME`,`tours`.`KIND_TOUR` AS `KIND_TOUR`,`tours`.`MAX_PEOPLE` AS `MAX_PEOPLE`,`tours`.`IMAGE` AS `IMAGE`,`tour_details`.`START` AS `START`,`tour_details`.`END` AS `END`,`tour_details`.`HOTEL_NAME` AS `HOTEL_NAME`,`tour_details`.`VEHICLE` AS `VEHICLE`,`tour_details`.`CHILD_PRICE` AS `CHILD_PRICE`,`tour_details`.`ADULT_PRICE` AS `ADULT_PRICE`,`tour_details`.`TOUR_PROGRAM` AS `TOUR_PROGRAM` from (`tours` join `tour_details`) where (`tours`.`ID` = `tour_details`.`ID`) ;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD PRIMARY KEY (`REPRESENT_ID`,`IDCARD`,`CUSTOMERNAME`);

--
-- Chỉ mục cho bảng `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tours`
--
ALTER TABLE `tours`
  ADD PRIMARY KEY (`ID`);

--
-- Chỉ mục cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000084;

--
-- AUTO_INCREMENT cho bảng `customer_groups`
--
ALTER TABLE `customer_groups`
  MODIFY `REPRESENT_ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000001;

--
-- AUTO_INCREMENT cho bảng `employees`
--
ALTER TABLE `employees`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001012;

--
-- AUTO_INCREMENT cho bảng `login`
--
ALTER TABLE `login`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001011;

--
-- AUTO_INCREMENT cho bảng `tours`
--
ALTER TABLE `tours`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000000021;

--
-- AUTO_INCREMENT cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2000000021;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `customer_groups`
--
ALTER TABLE `customer_groups`
  ADD CONSTRAINT `customer_groups_ibfk_1` FOREIGN KEY (`REPRESENT_ID`) REFERENCES `customers` (`ID`),
  ADD CONSTRAINT `fk_cusgroup_cus` FOREIGN KEY (`REPRESENT_ID`) REFERENCES `customers` (`ID`);

--
-- Các ràng buộc cho bảng `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `FK_LOGIN_EMPLOYEE` FOREIGN KEY (`ID`) REFERENCES `employees` (`ID`);

--
-- Các ràng buộc cho bảng `tour_details`
--
ALTER TABLE `tour_details`
  ADD CONSTRAINT `tour_details_ibfk_1` FOREIGN KEY (`ID`) REFERENCES `tours` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
