-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost:3306
-- Thời gian đã tạo: Th9 19, 2020 lúc 06:03 PM
-- Phiên bản máy phục vụ: 10.3.16-MariaDB
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `id14885923_atw`
--
CREATE DATABASE IF NOT EXISTS `id14885923_atw` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `id14885923_atw`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_danhmuc`
--

CREATE TABLE `tb_danhmuc` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(4) DEFAULT 0,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_danhmuc`
--

INSERT INTO `tb_danhmuc` (`id`, `name`, `active`, `create_at`, `update_at`) VALUES
(32, 'Iphone', 0, '2020-09-06 18:31:42', '2020-09-06 18:31:42'),
(40, 'Samsung', 1, '2020-09-11 08:45:10', '2020-09-11 08:45:10'),
(45, 'test thêm cho chắc', 1, '2020-09-19 11:49:50', '2020-09-19 11:49:50'),
(46, 'thề, lần cuối thật', 0, '2020-09-19 12:02:21', '2020-09-19 12:02:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_sanpham`
--

CREATE TABLE `tb_sanpham` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `soluong` int(11) NOT NULL,
  `noibat` tinyint(4) NOT NULL,
  `mota` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `danhmuc_id` tinyint(4) NOT NULL,
  `create_at` timestamp NULL DEFAULT current_timestamp(),
  `update_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_sanpham`
--

INSERT INTO `tb_sanpham` (`id`, `name`, `image`, `price`, `soluong`, `noibat`, `mota`, `danhmuc_id`, `create_at`, `update_at`) VALUES
(5, 'Điện thoại Samsung Galaxy A21s (6GB/64GB)', 'samsung-galaxy-a21s-055620-045627-400x460.png', 4990000, 1, 1, 'Màn hình:	TFT LCD, 6.5\", HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước:	13 MP\r\nCPU:	Exynos 850 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nThẻ SIM:\r\n2 Nano SIM, Hỗ trợ 4G\r\nHOTSIM VNMB Siêu sim (5GB/ngày)\r\nDung lượng pin:	5000 mAh, có sạc nhanh', 40, '2020-09-11 07:31:00', '2020-09-11 07:31:00'),
(7, 'Điện thoại iPhone 11 Pro Max 64GB', '16003209121.jpg', 33990000, 2, 0, 'Màn hình:	OLED, 6.5\", Super Retina XDR\r\nHệ điều hành:	iOS 13\r\nCamera sau:	3 camera 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB', 32, '2020-09-17 05:29:08', '2020-09-17 05:29:08'),
(8, '1', '16003208462.png', 1, 1, 1, '11111111111', 40, '2020-09-17 05:33:56', '2020-09-17 05:33:56'),
(9, 'Điện thoại iPhone 11 64GB', '16005354551.jpg', 21990000, 1, 1, 'Màn hình:	IPS LCD, 6.1\", Liquid Retina\r\nHệ điều hành:	iOS 13\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nDung lượng pin:	3110 mAh, có sạc nhanh', 32, '2020-09-19 07:54:56', '2020-09-19 07:54:56'),
(10, 'Điện thoại iPhone 11 Pro Max 512GB', '1600535502tải xuống (1).jfif', 41990000, 1, 1, 'Màn hình:	OLED, 6.5\", Super Retina XDR\r\nHệ điều hành:	iOS 13\r\nCamera sau:	3 camera 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	512 GB\r\nDung lượng pin:	3969 mAh, có sạc nhanh', 32, '2020-09-19 08:01:09', '2020-09-19 08:01:09'),
(11, 'Điện thoại Samsung Galaxy Note 20 Ultra 5G', '1600535523tải xuống.jfif', 32990000, 1, 1, 'Màn hình:	Dynamic AMOLED 2X, 6.9\", Quad HD+ (2K+)\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 108 MP & Phụ 12 MP, 12 MP, cảm biến Laser AF\r\nCamera trước:	10 MP\r\nCPU:	Exynos 990 8 nhân\r\nRAM:	12 GB\r\nBộ nhớ trong:	256 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 1 TB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 40, '2020-09-19 08:02:28', '2020-09-19 08:02:28'),
(12, 'Điện thoại Samsung Galaxy Note 20', '1600535562tải xuống (3).jfif', 21990000, 1, 1, 'Màn hình:	Super AMOLED Plus, 6.7\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 12 MP & Phụ 64 MP, 12 MP\r\nCamera trước:	10 MP\r\nCPU:	Exynos 990 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	256 GB\r\nDung lượng pin:	4300 mAh, có sạc nhanh', 40, '2020-09-19 08:06:01', '2020-09-19 08:06:01'),
(13, 'Điện thoại iPhone 11 256GB', '1600535577tải xuống (4).jfif', 25990000, 1, 1, 'Màn hình:	IPS LCD, 6.1\", Liquid Retina\r\nHệ điều hành:	iOS 13\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	12 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	256 GB\r\nDung lượng pin:	3110 mAh, có sạc nhanh', 32, '2020-09-19 08:06:57', '2020-09-19 08:06:57'),
(14, 'Điện thoại Samsung Galaxy S20+', '1600535586tải xuống (5).jfif', 16990000, 1, 1, 'Màn hình:	Dynamic AMOLED 2X, 6.7\", Quad HD+ (2K+)\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 12 MP & Phụ 64 MP, 12 MP, TOF 3D\r\nCamera trước:	10 MP\r\nCPU:	Exynos 990 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 1 TB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 40, '2020-09-19 08:08:48', '2020-09-19 08:08:48'),
(15, 'Điện thoại Samsung Galaxy S20', '1600535594tải xuống (6).jfif', 19490000, 1, 1, 'Màn hình:	Dynamic AMOLED 2X, 6.2\", Quad HD+ (2K+)\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 12 MP & Phụ 64 MP, 12 MP\r\nCamera trước:	10 MP\r\nCPU:	Exynos 990 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 1 TB\r\nDung lượng pin:	4000 mAh, có sạc nhanh', 40, '2020-09-19 08:15:54', '2020-09-19 08:15:54'),
(16, 'Điện thoại iPhone Xs 64GB', '1600535602tải xuống (7).jfif', 199900000, 1, 1, 'Màn hình:	OLED, 5.8\", Super Retina\r\nHệ điều hành:	iOS 12\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A12 Bionic 6 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nDung lượng pin:2658 mAh, có sạc nhanh', 32, '2020-09-19 08:17:07', '2020-09-19 08:17:07'),
(17, 'Điện thoại iPhone SE 256GB (2020)', '1600535611tải xuống (8).jfif', 17990000, 1, 1, 'Màn hình:	IPS LCD, 4.7\", Retina\r\nHệ điều hành:	iOS 13\r\nCamera sau:	12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A13 Bionic 6 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	256 GB\r\nDung lượng pin:	1821 mAh, có sạc nhanh', 32, '2020-09-19 08:18:16', '2020-09-19 08:18:16'),
(18, 'Điện thoại Samsung Galaxy S10 Lite', '1600535629tải xuống (9).jfif', 12990000, 1, 1, 'Màn hình:	Super AMOLED, 6.7\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 12 MP, 5 MP\r\nCamera trước:	32 MP\r\nCPU:	Snapdragon 855 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 1 TB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 40, '2020-09-19 08:19:44', '2020-09-19 08:19:44'),
(19, 'Điện thoại iPhone 7 Plus 128GB', '1600535639tải xuống.jfif', 12490000, 1, 1, 'Màn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 12\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A10 Fusion 4 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	128 GB\r\nDung lượng pin:	2900 mAh', 32, '2020-09-19 08:21:55', '2020-09-19 08:21:55'),
(20, 'Điện thoại iPhone 7 Plus 32GB', '1600535696tải xuống (10).jfif', 11490000, 1, 1, 'Màn hình:	LED-backlit IPS LCD, 5.5\", Retina HD\r\nHệ điều hành:	iOS 13\r\nCamera sau:	Chính 12 MP & Phụ 12 MP\r\nCamera trước:	7 MP\r\nCPU:	Apple A10 Fusion 4 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nDung lượng pin:	2900 mAh', 32, '2020-09-19 08:23:11', '2020-09-19 08:23:11'),
(21, 'Điện thoại Samsung Galaxy Note 10 Lite', '1600535706tải xuống (11).jfif', 11490000, 1, 1, 'Màn hình:	Super AMOLED, 6.7\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	3 camera 12 MP\r\nCamera trước:	32 MP\r\nCPU:	Exynos 9810 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 40, '2020-09-19 08:25:53', '2020-09-19 08:25:53'),
(22, 'Điện thoại Samsung Galaxy A71', '1600535715tải xuống (12).jfif', 10490000, 1, 1, 'Màn hình:	Super AMOLED, 6.7\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 64 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước:	32 MP\r\nCPU:	Snapdragon 730 8 nhân\r\nRAM:	8 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nDung lượng pin:	4500 mAh, có sạc nhanh', 40, '2020-09-19 08:26:40', '2020-09-19 08:26:40'),
(23, 'Điện thoại Samsung Galaxy A51 (6GB/128GB)', '1600535723tải xuống (13).jfif', 6490000, 1, 1, 'Màn hình:	Super AMOLED, 6.5\", Full HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 12 MP, 5 MP, 5 MP\r\nCamera trước:	32 MP\r\nCPU:	Exynos 9611 8 nhân\r\nRAM:	6 GB\r\nBộ nhớ trong:	128 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nDung lượng pin:	4000 mAh, có sạc nhanh', 40, '2020-09-19 08:31:10', '2020-09-19 08:31:10'),
(24, 'Điện thoại Samsung Galaxy A50s', '1600535737tải xuống (14).jfif', 6990000, 1, 1, 'Màn hình:	Super AMOLED, 6.4\", Full HD+\r\nHệ điều hành:	Android 9.0 (Pie)\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 5 MP\r\nCamera trước:	32 MP\r\nCPU:	Exynos 9610 8 nhân\r\nRAM:	4 GB\r\nBộ nhớ trong:	64 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nDung lượng pin:	4000 mAh, có sạc nhanh', 40, '2020-09-19 08:32:22', '2020-09-19 08:32:22'),
(25, 'Điện thoại Samsung Galaxy A21s (3GB/32GB)', '1600535744tải xuống (15).jfif', 4290000, 1, 1, 'Màn hình:	TFT LCD, 6.5\", HD+\r\nHệ điều hành:	Android 10\r\nCamera sau:	Chính 48 MP & Phụ 8 MP, 2 MP, 2 MP\r\nCamera trước:	13 MP\r\nCPU:	Exynos 850 8 nhân\r\nRAM:	3 GB\r\nBộ nhớ trong:	32 GB\r\nThẻ nhớ:	MicroSD, hỗ trợ tối đa 512 GB\r\nDung lượng pin:	5000 mAh, có sạc nhanh', 40, '2020-09-19 08:33:22', '2020-09-19 08:33:22'),
(26, 'test lại lần nữa', '1600535754tải xuống (15).jfif', 1, 1, 1, 'đay là test', 45, '2020-09-19 11:51:28', '2020-09-19 11:51:28'),
(27, 'tên lần cuối ', '1600535763tải xuống (16).jfif', 1, 1, 1, 'test lần cuối thôi nha', 32, '2020-09-19 11:53:02', '2020-09-19 11:53:02'),
(28, 'tên lần cuối ', '1600535778tải xuống (17).jfif', 1, 1, 1, 'test lần cuối thôi nha', 32, '2020-09-19 11:53:56', '2020-09-19 11:53:56'),
(30, 'test lần cuối thật này', '1600535788tải xuống (18).jfif', 21, 21, 1, 'test lần cuối thật này', 32, '2020-09-19 12:01:41', '2020-09-19 12:01:41'),
(31, 'Huỳnh', '160051895968815008_1110137769178279_4686171913960030208_n.jpg', 1, 1, 1, 'dsljgk', 46, '2020-09-19 12:35:59', '2020-09-19 12:35:59'),
(32, 'Oanh', '1600519140Hạ Long 2019.jpg', 10, 1, 1, 'cxc', 32, '2020-09-19 12:36:45', '2020-09-19 12:36:45');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_danhmuc`
--
ALTER TABLE `tb_danhmuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT cho bảng `tb_sanpham`
--
ALTER TABLE `tb_sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
