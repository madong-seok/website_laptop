-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th8 24, 2022 lúc 10:50 AM
-- Phiên bản máy phục vụ: 5.7.33
-- Phiên bản PHP: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `web_laptop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `chitiet_hoadon`
--

CREATE TABLE `chitiet_hoadon` (
  `ID_CTHD` int(8) NOT NULL,
  `ID_HD` int(8) NOT NULL,
  `MASP` int(8) NOT NULL,
  `TENSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SOLUONG` int(8) NOT NULL,
  `GIASP` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `chitiet_hoadon`
--

INSERT INTO `chitiet_hoadon` (`ID_CTHD`, `ID_HD`, `MASP`, `TENSP`, `SOLUONG`, `GIASP`) VALUES
(17, 10, 30002, 'Asus ROG Strix G15 G513IM', 3, 32000000),
(18, 10, 60003, 'Lenovo Legion 7', 2, 65999000),
(19, 11, 30007, 'ASUS ROG Zephyrus M15', 1, 34500000),
(20, 11, 40003, 'Dell Inspiron 5620', 2, 27099000),
(21, 11, 70002, 'MSI Gaming Bravo 15', 1, 17500000),
(22, 12, 30007, 'ASUS ROG Zephyrus M15', 1, 34500000),
(23, 12, 40001, 'Dell Gaming M15 R6', 2, 59349000),
(24, 12, 40003, 'Dell Inspiron 5620', 2, 27099000),
(34, 22, 10002, ' Acer Gaming Aspire 7 A715 42G R4XX', 2, 16299000),
(35, 23, 60001, 'Lenovo IdeaPad 3 ', 1, 14299000),
(36, 24, 60002, 'Lenovo Legion 5 ', 1, 29299000),
(37, 25, 60002, 'Lenovo Legion 5 ', 1, 29299000),
(38, 26, 60002, 'Lenovo Legion 5 ', 1, 29299000),
(39, 27, 60002, 'Lenovo Legion 5 ', 1, 29299000),
(40, 28, 60002, 'Lenovo Legion 5 ', 1, 29299000),
(41, 29, 60002, 'Lenovo Legion 5 ', 3, 29299000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `ID_HD` int(8) NOT NULL,
  `ID_KH` int(8) NOT NULL,
  `TENKH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `DIACHI` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GHICHU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TONGTIEN` int(12) NOT NULL,
  `TRANGTHAI` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYLAP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HTVANCHUYEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HTTHANHTOAN` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`ID_HD`, `ID_KH`, `TENKH`, `SDT`, `DIACHI`, `GHICHU`, `TONGTIEN`, `TRANGTHAI`, `NGAYLAP`, `HTVANCHUYEN`, `HTTHANHTOAN`) VALUES
(10, 3, 'Tráº§n VÄƒn CÃ´ng', 123456789, 'HÃ  Ná»™i', '', 227998000, 'Äang giao hÃ ng', '19/8/2022', 'Giao HÃ ng Nhanh', 'Thanh toÃ¡n báº±ng ZaloPay'),
(11, 3, 'Tráº§n VÄƒn CÃ´ng', 123456789, 'HÃ  Ná»™i', 'KhÃ´ng', 106198000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Nhanh', 'VÃ­ ZaloPay'),
(12, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', 'KhÃ´ng', 207396000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'VÃ­ MOMO'),
(22, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 32598000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(23, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 14299000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(24, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 29299000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(25, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 29299000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(26, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 29299000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(27, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 29299000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(28, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 29299000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng'),
(29, 2, 'Nguyá»…n Tháº¿ Äá»©c', 387403613, 'Ha Noi1', '', 87897000, 'ChÆ°a xá»­ lÃ½', '21/8/2022', 'Giao HÃ ng Táº­n NÆ¡i', 'TT khi giao hÃ ng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `ID_KH` int(8) NOT NULL,
  `HOVATEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` int(10) NOT NULL,
  `GIOITINH` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYSINH` date NOT NULL,
  `DIACHI` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`ID_KH`, `HOVATEN`, `EMAIL`, `MATKHAU`, `SDT`, `GIOITINH`, `NGAYSINH`, `DIACHI`) VALUES
(2, 'Nguyá»…n Tháº¿ Äá»©c', 'duc@gmail.com', '123456', 387403613, 'Nam', '1998-09-20', 'Ha Noi1'),
(3, 'Tráº§n VÄƒn CÃ´ng', 'cong@gmail.com', '123', 123456789, 'Nam', '2022-08-13', 'HÃ  Ná»™i');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `lienhe`
--

CREATE TABLE `lienhe` (
  `ID_LH` int(8) NOT NULL,
  `HOTEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `TIEUDE` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NOIDUNG` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `lienhe`
--

INSERT INTO `lienhe` (`ID_LH`, `HOTEN`, `EMAIL`, `TIEUDE`, `NOIDUNG`) VALUES
(1, 'duc', 'duc@gmail.com', 'test', 'kiem tra du lieu'),
(2, 'cong', 'cong@gmail.com', 'test2', 'kiem tra bien num'),
(4, 'duc', 'duc@gmail.com', 'test', 'test');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `quantrivien`
--

CREATE TABLE `quantrivien` (
  `ID_QTV` int(8) NOT NULL,
  `TENQTV` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `MATKHAU` varchar(12) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `quantrivien`
--

INSERT INTO `quantrivien` (`ID_QTV`, `TENQTV`, `MATKHAU`) VALUES
(1, 'admin', '123456');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `MASP` int(8) NOT NULL,
  `TENSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `HINHANH` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `CPU` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `RAM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ROM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `SCREEN` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `VGA` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `GIASP` int(11) NOT NULL,
  `HANGSX` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `THELOAI` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `NGAYNHAP` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`MASP`, `TENSP`, `HINHANH`, `CPU`, `RAM`, `ROM`, `SCREEN`, `VGA`, `GIASP`, `HANGSX`, `THELOAI`, `NGAYNHAP`) VALUES
(10001, 'Acer Aspire 5 A515 56G 51YL', 'acer-aspire-5-a515-56.png', 'Intel Core i5 1135G7', '8 GB', '512GB SSD', '15.6 inch FHD', 'Nvidia MX350 2G', 19179000, 'ACER', 'Laptop VÄƒn phÃ²ng', '2022-08-04'),
(10002, ' Acer Gaming Aspire 7 A715 42G R4XX', 'acer-aspire-7.jpg', 'AMD R5 5500U', '8 GB', '256GB SSD', '15.6 inch FHD', 'NVIDIA GTX1650 4G', 16299000, 'ACER', 'Laptop Gaming', '2022-08-04'),
(10003, 'Acer Gaming Nitro 5 AN515 57', 'acer-nitro-5-gaming-an515-57.png', 'Intel core i7 11800H', '16 GB', '512GB SSD', '15.6 inch FHD', 'NVIDIA RTX3060 6G', 33349000, 'ACER', 'Laptop Gaming', '2022-08-04'),
(10004, 'Acer Gaming Predator Helios 300 PH315', 'acer-predator-helios-ph315-55.png', 'Intel Core i7 12700H', '16 GB', '512GB SSD', '15.6 inch QHD 165hz', 'Nvidia RTX3060 6G', 43849000, 'ACER', 'Laptop Äá»“ há»a', '2022-08-04'),
(10005, 'Acer Gaming Predator Triton 500 SE PT516 52s', 'acer-gaming-predator-triton-500-se.png', 'Intel core i9 12900H', '32 GB', '2TB SSD', '16 inch WQXGA 240Hz', 'Nvidia RTX 3080Ti 16G', 108999000, 'ACER', 'Laptop Gaming', '2022-08-04'),
(10006, 'Laptop Acer Swift 3 SF314 511 55QE ', 'acer-swift-3-sf314-511-56g.png', 'Intel Core i5-1135G7', '16 GB', '512GB SSD', '14.0 inch FHD IPS 100% sRGB', 'Onboard', 20299000, 'ACER', 'Laptop Sinh viÃªn', '2022-08-04'),
(10007, 'Acer Swift X SFX16 51G 516Q', 'acer-swift-x-sfx16.jpg', 'Intel Core i5 11320H', '16 GB', '512GB SSD', '16.1 inch FHD IPS', 'NVIDIA RTX3050 4G', 25899000, 'ACER', 'Laptop Äá»“ há»a', '2022-08-04'),
(10008, 'Acer TravelMate P4 TMP414 51 50HX', 'laptop-acer-travelmate-p4.png', 'Intel Core i5 1135G7', '8 GB', '512GB SSD', '14 FHD IPS', 'Onboard', 22789000, 'ACER', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-04'),
(20001, 'Macbook Air 13 VÃ ng', 'Apple Macbook Air 13 VÃ ng.png', 'Apple M1', '16 GB', '512GB SSD', '13.3 inch Retina IPS', 'Onboard', 37359000, 'MACBOOK', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(20002, 'Macbook Pro 13 Touchbar', 'Apple Macbook Pro 13 Touchbar.png', 'Apple M2', '8 GB', '256GB SSD', '13.3 inch Retina IPS', 'Onboard', 31990000, 'MACBOOK', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(20003, 'Macbook Pro 13 XÃ¡m', 'Apple Macbook Pro 13 XÃ¡m.png', 'Apple M1', '16 GB', '512GB SSD', '13.3 inch Retina IPS', 'Onboard', 429990000, 'MACBOOK', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(20004, 'Macbook Pro 16 Báº¡c', 'Apple Macbook Pro 16 Báº¡c.jpg', 'Apple M1 Max', '32 GB', '1TB SSD', '16.2 inch Retina', 'M1', 87699000, 'MACBOOK', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(20005, 'Macbook Pro 16 XÃ¡m', 'Apple Macbook Pro 16 XÃ¡m.jpg', 'Apple M1 Pro', '16 GB', '1TB SSD', '16.2 inch Retina', 'M1', 67199000, 'MACBOOK', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(20006, 'MacBook Air 2019 13', 'MacBook Air 2019 13 inch.jpg', 'Core i5 1.6GHz', '8 GB', 'SSD 128GB', '13.3 inch Retina', 'Intel UHD Graphics 617 graphics', 19800000, 'MACBOOK', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(20007, 'Macbook Pro 13 Touchbar', 'Macbook Pro 13 Touchbar.png', 'Apple M1', '8 GB', '512GB SSD', '13.3 inch Retina IPS', 'Onboard', 35900000, 'MACBOOK', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(20008, 'MacBook Pro 14 M1 Max ', 'MacBook Pro 14 M1 Max 2021.jpg', 'Apple M1 Max400GB', '32 GB', '512 GB SSD', '14.2\"Liquid Retina XDR 120Hz', 'Card tÃ­ch há»£p 24 nhÃ¢n GPU', 72400000, 'MACBOOK', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(20009, 'MacBook Pro 2018 13', 'MacBook Pro 2018 13 inch.jpeg', 'Quad-core i5-2.3GHz', '8 GB', 'SSD 256GB', '13.3 inch Retina with True Tone', 'Intel Iris Plus 655', 24400000, 'MACBOOK', 'Laptop Sinh viÃªn', '2022-08-09'),
(30001, 'Asus ROG Strix G15 G513IC', 'Asus ROG Strix G15 G513IC-HN002T .png', 'AMD Ryzen R7-4800H', '8 GB', '512GB M.2 NVMe', '15.6 inch FHD', 'NVIDIAÂ® GeForceÂ® GTX 3050 4GB GDDR6', 26500000, 'ASUS', 'Laptop Äá»“ há»a', '2022-08-08'),
(30002, 'Asus ROG Strix G15 G513IM', 'Asus ROG Strix G15 G513IM-HN057T .png', 'AMD Ryzen R7-4800H', '16 GB', 'SSD 512GB', '15.6 inch FHD', ' NVIDIAÂ® GeForceÂ® GTX 3060 6GB GDDR6', 32000000, 'ASUS', 'Laptop Äá»“ há»a', '2022-08-08'),
(30003, 'ASUS ROG Strix G15 G513QM', 'ASUS ROG Strix G15 G513QM-HQ283T.jpeg', 'AMD Ryzenâ„¢ 9 5900HX', '16 GB', '512GB SSD', '15.6â€³ WQHD', 'NVIDIAÂ® GeForce RTXâ„¢ 3060 6GB GDDR6', 40200000, 'ASUS', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-08'),
(30004, 'Asus ROG Strix Scar II GL504GM ', 'Asus ROG Strix Scar II GL504GM.jpeg', 'IntelÂ® Coreâ„¢ i7-8750H', '16 GB', 'SSD 128GB + HDD 1TB', '15.6 inch FHD 144Hz', 'NVIDIA GTX 1060 6GB', 27400000, 'ASUS', 'Laptop Sinh viÃªn', '2022-08-08'),
(30005, 'ASUS ROG Zephyrus G14', 'ASUS ROG Zephyrus G14 GA401QM.jpeg', 'Ryzen 9-5900HS', '16 GB', 'SSD 1TB NVMe', '14 inch FHD IPS 144Hz', 'NVIDIA RTX 3060 6GB', 43400000, 'ASUS', 'Laptop Äá»“ há»a', '2022-08-08'),
(30006, 'Asus ROG Zephyrus G15', 'Asus ROG Zephyrus G15 GA503QR.jpeg', 'AMD Ryzen 9-5900HS', '16 GB', '1TB M.2 NVMeâ„¢', '15.6 inch WQHD ', 'NVIDIAÂ®  RTXâ„¢ 3070 8GB GDDR6', 48400000, 'ASUS', 'Laptop Äá»“ há»a', '2022-08-08'),
(30007, 'ASUS ROG Zephyrus M15', 'ASUS ROG Zephyrus M15 GU502LW.jpeg', 'IntelÂ® Coreâ„¢ i7-10750H', '16 GB', 'SSD 512 GB', '15.6 inch FHD IPS 240Hz', 'NVIDIAÂ® RTX 2070 Max-Q 8GB', 34500000, 'ASUS', 'Laptop Äá»“ há»a', '2022-08-08'),
(30008, 'Asus TUF Dash F15 2022', 'Asus TUF Dash F15 2022 FX517Z.jpg', 'Intel Core i5-12450H', '8 GB', 'SSD 512 GB', '15.6 inch FHD', 'NVIDIA RTX 3050 4GB GDDR6', 26300000, 'ASUS', 'Laptop Sinh viÃªn', '2022-08-08'),
(30009, 'Asus Gaming A15', 'Asus TUF Gaming A15 FA506QM.jpg', 'Ryzen 7-5800H', '16 GB', 'SSD 512GB NVMe', '15.6 inch FHD IPS 144Hz', 'NVIDIA RTX 3060 6GB', 31900000, 'ASUS', 'Laptop Gaming', '2022-08-08'),
(30010, 'Asus TUF Gaming A17', 'Asus TUF Gaming A17 FA706IU.jpg', 'Ryzen 7-4800H', '8 GB', 'SSD 512GB', '17.3 inch FHD IPS 120Hz', 'NVIDIA GTX 1660Ti', 26400000, 'ASUS', 'Laptop Sinh viÃªn', '2022-08-08'),
(30011, 'Asus TUF Gaming F15', 'Asus TUF Gaming F15 FX506LH.jpeg', 'Core i5â€“10300H', '8 GB', 'SSD 512GB', '15.6 inch FHD IPS 144Hz', 'NVIDIA GTX 1650', 18300000, 'ASUS', 'Laptop Sinh viÃªn', '2022-08-08'),
(40001, 'Dell Gaming M15 R6', 'Laptop Dell Alienware Gaming M15 R6.jpg', 'Intel Core i7 11800H', '32 GB', '1TB SSD', '15.6 inch QHD 240Hz', 'NVIDIA RTX3060 6G', 59349000, 'DELL', 'Laptop Gaming', '2022-08-08'),
(40002, 'Dell Gaming G15 5511 ', 'Laptop Dell Gaming G15 5511.jpg', 'Intel core i7 11800H', '16 GB', '512GB SSD', '15.6 inch FHD 120Hz', 'NVIDIA RTX3050Ti 4G', 33649000, 'DELL', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(40003, 'Dell Inspiron 5620', 'Laptop Dell Inspiron 5620.png', 'Intel Core i5 - 1240P', '16 GB', '512GB NVMe SSD', '16inch FHD', 'NVIDIA MX570 2GB DDR6', 27099000, 'DELL', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(40004, 'Dell Latitude 7320', 'Laptop Dell Latitude 7320.jpg', 'Intel Core i5 1145G7 vPro', '8 GB', '256GB SSD', '13.3 inch FHD', 'Onboard', 23300000, 'DELL', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(40005, 'Dell Vostro 3400', 'Laptop Dell Vostro 3400.jpg', 'Intel Core i7 1165G7', '8 GB', '512GB SSD', '14.0 inch FHD', 'MX330 2G', 22849000, 'DELL', 'Laptop Sinh viÃªn', '2022-08-09'),
(40006, ' Dell Vostro 3510', 'Laptop Dell Vostro 3510.png', 'Intel Core i3 1115G4', '8 GB', '256GB SSD', '15.6 inch FHD', 'Onboard', 12690000, 'DELL', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(40007, 'Dell Vostro 5410', 'Laptop Dell Vostro 5410.png', 'Intel Core i5 11320H', '8 GB', '512GB SSD', '14 inch FHD', 'Onboard', 20290000, 'DELL', 'Laptop Sinh viÃªn', '2022-08-09'),
(40008, 'Dell Workstation 5560', 'Laptop Dell Workstation Mobile Precision 5560 .jpg', 'Intel Core i7 11850H', '16 GB', '256GB SSD', '15.6 inch FHD 100%RGB', 'Nvidia RTX A2000', 64349000, 'DELL', 'Laptop Äá»“ há»a', '2022-08-09'),
(40009, 'Dell Workstation 7560 vPro', 'Laptop Dell Workstation Mobile Precision 7560 vPro .jpg', 'Intel Core i7 11800H', '16 GB', '512GB SSD', '15.6 inch FHD', 'Nvidia RTX A4000 8G', 78349000, 'DELL', 'Laptop Äá»“ há»a', '2022-08-09'),
(40010, 'Dell XPS 13 9310', 'Laptop Dell XPS 13 9310 .png', 'Intel Core i7 1195G7', '16 GB', '512GB SSD', '13.4 inch UHD Touch', 'Onboard', 57849000, 'DELL', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(50001, 'HP EliteBook X360 1030 G8', 'Laptop HP EliteBook X360 1030 G8.png', 'Intel Core i7 1165G7', '16 GB', '512GB SSD', '13.3 FHD Touch', 'Onboard', 48349000, 'HP', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(50002, 'HP EliteBook X360 1040 G8', 'Laptop HP EliteBook X360 1040 G8.png', 'Intel Core i7 1165G7', '16 GB', '512GB SSD', '14 inch FHD Touch', 'Onboard', 48349000, 'HP', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(50003, 'HP Envy 13-ba1536TU', 'Laptop HP Envy 13-ba1536TU .png', 'Intel Core i5 1135G7', '8 GB', '512GB SSD', '13.3 inch FHD', 'Onboard', 19299000, 'HP', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(50004, 'HP Gaming Omen 16', 'Laptop HP Gaming Omen 16-b0176TX.jpeg', 'Intel Core i7 11800H', '16 GB', '1TB SSD', '16.1 FHD', 'RTX 3060 6GB', 45349000, 'HP', 'Laptop Gaming', '2022-08-09'),
(50005, 'HP Gaming VICTUS 16', 'Laptop HP Gaming VICTUS 16-e0175AX.jpeg', 'AMD R5 5600H', '8 GB', '512GB SSD', '16.1 FHD 144Hz', 'NVIDIA RTX 3050 4Gb', 21299000, 'HP', 'Laptop Sinh viÃªn', '2022-08-09'),
(50007, 'HP ProBook 450 G8', 'Laptop HP ProBook 450 G8.png', 'Intel Core i7 1165G7', '8 GB', '512GB SSD', '15.6 inch FHD', 'Onboard', 24849000, 'HP', 'Laptop Sinh viÃªn', '2022-08-09'),
(50008, 'HP Spectre X360 13', 'Laptop HP Spectre X360 13.png', 'Intel Core i7-8550U', '8 GB', '256GB SSD', '13.3 diogonal FHD UWVA', 'Intel UHD Graphics 620', 41339000, 'HP', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(50009, 'HP Spectre x360 Convertible 13', 'Laptop HP Spectre x360 Convertible 13.png', 'Intel Core i7 1165G7', '16 GB', '1 TB SSD', '13.3 inch 4k', 'Onboard', 49349000, 'HP', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(50010, 'HP Zbook Firefly 14 G8 ', 'Laptop HP Zbook Firefly 14 G8.jpg', 'Intel Core i7 1165G7', '16 GB', '512GB SSD', '15.6 inch FHD', 'Nvidia T500 4GB', 35349000, 'HP', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(60001, 'Lenovo IdeaPad 3 ', 'Laptop Lenovo IdeaPad 3 14ITL6.jpg', 'Intel Core i5 1135G7', ' 8 GB', '512GB SSD', '14 inch FHD', 'Onboard', 14299000, 'LENOVO', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(60002, 'Lenovo Legion 5 ', 'Laptop Lenovo Legion 5 15ACH6H.jpeg', 'AMD R5 5600H', '8 GB', '512GB SSD', '15.6 FHD 165hz', 'Nvidia RTX3060 6GB', 29299000, 'LENOVO', 'Laptop Äá»“ há»a', '2022-08-09'),
(60003, 'Lenovo Legion 7', 'Laptop Lenovo Legion 7 16ACHG6.jpeg', 'AMD R9 5900HX', '32 GB', '1TB SSD', '16 WQXGA 165hz', 'Nvidia RTX3080 16GB', 65999000, 'LENOVO', 'Laptop Gaming', '2022-08-09'),
(60004, 'Lenovo ThinkBook 14', 'Laptop Lenovo ThinkBook 14 G2 ITL.jpg', 'Intel Core i5 1135G7', '8 GB', '256GB SSD', '14 FHD', 'Onboard 4GB', 16299000, 'LENOVO', 'Laptop Sinh viÃªn', '2022-08-09'),
(60005, 'Lenovo ThinkBook 15', 'Laptop Lenovo ThinkBook 15 G2 ITL.jpeg', 'Intel Core i5 1135G7', '8 GB', '512GB SSD', '15.6 FHD', 'MX450 2GB', 21299000, 'LENOVO', 'Laptop Sinh viÃªn', '2022-08-09'),
(60006, 'Lenovo Thinkpad E15', 'Laptop Lenovo Thinkpad E15 Gen 2 .jpg', 'Intel core i5 1135G7', '8 GB', '256GB SSD', '15.6 FHD', 'Onboard 4GB', 18999000, 'LENOVO', 'Laptop VÄƒn phÃ²ng', '2022-08-09'),
(60007, 'Lenovo Yoga Slim 7', 'Laptop Lenovo Yoga Slim 7 Carbon.png', 'AMD R7 5800U', '16 GB', '1TB SSD', '14 inch', 'Nvidia MX450', 31349000, 'LENOVO', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(60008, 'Lenovo ThinkPad P14s', 'Lenovo ThinkPad P14s.jpg', 'Intel Core i7-10510U', '16 GB', 'SSD 256GB', '14. inch FHD', 'NVIDIA Quadro P520 2GB', 28900000, 'LENOVO', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(60009, 'Lenovo ThinkPad T15G', 'Lenovo-ThinkPad-T15g-laptopvang-5.jpg', 'Intel Xeon W-10885M', '32  GB', '1TB PCIe SSD', '15.6â€³ UHD IPS, HDR 400, 600 nits', 'NVIDIA RTX 2080 Super with Max-Q', 68900000, 'LENOVO', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(60010, 'Lenovo Yoga Slim 7 ', 'Lenovo Yoga Slim 7 14ITL05.png', 'Intel Core i7-1165G7', '8 GB', 'SSD 512GB', '14.0â€³ FHD IPS', 'Intel Iris Xe Graphics', 24000000, 'LENOVO', 'Laptop Äá»“ há»a', '2022-08-09'),
(70001, 'MSI Creator Z17', 'Laptop MSI Creator Z17.png', 'Intel Core i9 12900H', '32 GB', '2TB SSD', '17 inch QHD 165Hz Touch', 'NVIDIA RTX3070Ti Q 8G', 79999000, 'MSI', 'Laptop Äá»“ há»a', '2022-08-09'),
(70002, 'MSI Gaming Bravo 15', 'Laptop MSI Gaming Bravo .png', 'AMD Ryzen R7-5800H', '8 GB', '512GB SSD', '15.6 inch FHD', 'Radeon RX5500M 4GB', 17500000, 'MSI', 'Laptop Sinh viÃªn', '2022-08-09'),
(70003, 'MSI Gaming Cross 17', 'Laptop MSI Gaming Crosshair.jpg', 'Intel Core i7 12700H', '16 GB', '1TB SSD', '17.3 inch FHD 300Hz', 'Nvidia RTX3060 6G', 43349000, 'MSI', 'Laptop Gaming', '2022-08-09'),
(70004, 'MSI Gaming Delta 15', 'Laptop MSI Gaming Delta 15.jpg', 'AMD R7 5800H', '16 GB', '512GB SSD', '15.6 inch FHD 240Hz', 'AMD RX6700M 10GB', 45349000, 'MSI', 'Laptop Gaming', '2022-08-09'),
(70005, 'MSI Gaming GE76 Raider', 'Laptop MSI Gaming GE76 Raider.png', 'Intel Core I9 12900HK', '64 GB', '2TB SSD', '17.3 inch UHD 120Hz', 'NVIDIA RTX3080Ti 16G', 115999000, 'MSI', 'Laptop Gaming', '2022-08-09'),
(70006, 'MSI Gaming GF63', 'Laptop MSI Gaming GF63 Thin.png', 'Intel Core i7-11800H', '8 GB', '512GB SSD', '15.6 inch FHD 72% NTSC', 'NVIDIA RTX3050 4GB', 20849000, 'MSI', 'Laptop Gaming', '2022-08-09'),
(70007, 'MSI Gaming GS77 Stealth', 'Laptop MSI Gaming GS77 Stealth.png', 'Intel Core i9 12900H', '32 GB', '2TB SSD', '17.3 inch QHD 240Hz', 'NVIDIA RTX3080 Q 8G', 87599000, 'MSI', 'Laptop Gaming', '2022-08-09'),
(70008, 'MSI Gaming Katana GF76', 'Laptop MSI Gaming Katana GF76 .jpeg', 'Intel Core i7 11800H', '16 GB', '512GB SSD', '17.3 inch FHD 144Hz', 'NVIDIA RTX3060 6G', 32349000, 'MSI', 'Laptop Gaming', '2022-08-09'),
(70009, 'Laptop MSI Modern 15 ', 'Laptop MSI Modern 15 (A5M-235VN).png', 'Ryzen AMD R7 5700U', '8 GB', '512GB SSD', '15.6 inch FHD 144 Hz', 'Onboard', 17349000, 'MSI', 'Laptop Láº­p trÃ¬nh viÃªn', '2022-08-09'),
(70010, ' MSI Summit E13 Flip Evo', 'Laptop MSI Summit E13 Flip Evo.png', 'Intel Core i7 1185G7', '16 GB', '1TB SSD', '13.4 inch FHD cáº£m á»©ng + bÃºt MSI', 'Onboard', 38849000, 'MSI', 'Laptop Äá»“ há»a', '2022-08-09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD PRIMARY KEY (`ID_CTHD`),
  ADD KEY `ID_HD` (`ID_HD`),
  ADD KEY `chitiet_hoadon_ibfk_2` (`MASP`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`ID_HD`),
  ADD KEY `ID_KH` (`ID_KH`);

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`ID_KH`);

--
-- Chỉ mục cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  ADD PRIMARY KEY (`ID_LH`);

--
-- Chỉ mục cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  ADD PRIMARY KEY (`ID_QTV`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`MASP`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  MODIFY `ID_CTHD` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `ID_HD` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  MODIFY `ID_KH` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `lienhe`
--
ALTER TABLE `lienhe`
  MODIFY `ID_LH` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `quantrivien`
--
ALTER TABLE `quantrivien`
  MODIFY `ID_QTV` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `chitiet_hoadon`
--
ALTER TABLE `chitiet_hoadon`
  ADD CONSTRAINT `chitiet_hoadon_ibfk_1` FOREIGN KEY (`ID_HD`) REFERENCES `hoadon` (`ID_HD`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `chitiet_hoadon_ibfk_2` FOREIGN KEY (`MASP`) REFERENCES `sanpham` (`MASP`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`ID_KH`) REFERENCES `khachhang` (`ID_KH`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
