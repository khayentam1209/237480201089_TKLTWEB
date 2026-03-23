-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 23, 2026 lúc 09:20 AM
-- Phiên bản máy phục vụ: 10.4.32-MariaDB
-- Phiên bản PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlybanhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hanghoa`
--

CREATE TABLE `hanghoa` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) NOT NULL,
  `mansx` varchar(2) NOT NULL,
  `namsx` int(11) DEFAULT NULL,
  `gia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hanghoa`
--

INSERT INTO `hanghoa` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`) VALUES
('AS01', 'Asus TUF', 'AS', 2017, 520),
('AS02', 'Asus Vivobook', 'AS', 2017, 580),
('DE01', 'Dell Vostro', 'DE', 2015, 650),
('DE02', 'Del Inspiron', 'DE', 2015, 550),
('LE01', 'Lenovo Thinkpad', 'LE', 2019, 750),
('LE02', 'Lenovo Legion', 'TO', 2020, 540),
('LE03', 'Lenovo Yoga', 'LE', 2020, 600),
('TO01', 'Toshiba Satellite', 'TO', 2014, 630);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `mahd` varchar(3) NOT NULL,
  `makh` varchar(3) NOT NULL,
  `mahang` varchar(4) NOT NULL,
  `soluong` int(11) NOT NULL,
  `thanhtien` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`mahd`, `makh`, `mahang`, `soluong`, `thanhtien`) VALUES
('001', 'K00', 'DE01', 2, 0),
('001', 'K00', 'DE02', 1, 0),
('002', 'K00', 'LE01', 5, 0),
('002', 'K00', 'LE02', 3, 0),
('003', 'K00', 'TO01', 1, 0),
('004', 'K00', 'DE01', 2, 0),
('005', 'K00', 'AS01', 4, 0),
('005', 'K00', 'LE01', 6, 0),
('005', 'K00', 'LE02', 8, 0),
('006', 'K00', 'AS01', 5, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khachhang`
--

CREATE TABLE `khachhang` (
  `makh` varchar(4) NOT NULL,
  `tenkh` varchar(30) NOT NULL,
  `namsinh` int(11) NOT NULL,
  `dienthoai` varchar(10) NOT NULL,
  `diachi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khachhang`
--

INSERT INTO `khachhang` (`makh`, `tenkh`, `namsinh`, `dienthoai`, `diachi`) VALUES
('K001', 'Nguyễn Thị Lan', 1980, '0913123456', 'Bạc Liêu'),
('K002', 'Ngô Thanh Minh', 1985, '0913024357', 'Vĩnh Lợi'),
('K003', 'Lâm Văn Thanh', 1979, '0913123457', 'Giá Rai'),
('K004', 'Dương Thu Thuỷ', 1995, '0913024358', 'Hồng Dân'),
('K005', 'Nguyễn Thị Xuân', 1987, '0903223344', 'Phước Long'),
('K006', 'Huỳnh Mẫn Đạt', 1975, '0989122112', 'Bạc Liêu'),
('K007', 'Lâm Hoài Bảo', 1990, '0912131415', 'Bạc Liêu'),
('K008', 'Hồ Trung Tín', 2000, '0944119999', 'Phước Long'),
('K009', 'Trương Xuân Thi', 2001, '0909000111', 'Vĩnh Lợi');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `nhasanxuat`
--

CREATE TABLE `nhasanxuat` (
  `mansx` varchar(2) NOT NULL,
  `tennsx` varchar(40) NOT NULL,
  `quocgia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `nhasanxuat`
--

INSERT INTO `nhasanxuat` (`mansx`, `tennsx`, `quocgia`) VALUES
('', '', ''),
('AS', 'ASUS', 'Đài Loan'),
('DE', 'DELL', 'USA'),
('LE', 'LENOVO', 'Trung Quốc'),
('TO', 'TOSHIBA', 'Nhật Bản');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tonkho`
--

CREATE TABLE `tonkho` (
  `mahang` varchar(4) NOT NULL,
  `tenhang` varchar(40) DEFAULT NULL,
  `mansx` varchar(2) DEFAULT NULL,
  `namsx` int(11) DEFAULT NULL,
  `gia` int(11) DEFAULT NULL,
  `soluong` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tonkho`
--

INSERT INTO `tonkho` (`mahang`, `tenhang`, `mansx`, `namsx`, `gia`, `soluong`) VALUES
('DE01', 'Dell Vostro', 'DE', 2015, 650, 20),
('DE02', 'Dell Inspiron', 'DE', 2015, 550, 30);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `hanghoa`
--
ALTER TABLE `hanghoa`
  ADD PRIMARY KEY (`mahang`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`mahd`,`makh`,`mahang`) USING BTREE;

--
-- Chỉ mục cho bảng `khachhang`
--
ALTER TABLE `khachhang`
  ADD PRIMARY KEY (`makh`);

--
-- Chỉ mục cho bảng `nhasanxuat`
--
ALTER TABLE `nhasanxuat`
  ADD PRIMARY KEY (`mansx`);

--
-- Chỉ mục cho bảng `tonkho`
--
ALTER TABLE `tonkho`
  ADD PRIMARY KEY (`mahang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
