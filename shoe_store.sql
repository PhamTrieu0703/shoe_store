

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";




--
-- Cơ sở dữ liệu: `shoe_store`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `idbanner` int(11) NOT NULL,
  `anh` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`idbanner`, `anh`) VALUES
(1, 'slider-3.jpg'),
(2, 'b3.png\r\n'),
(3, 'b4.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `color`
--

CREATE TABLE `color` (
  `idcolor` int(11) NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `color`
--

INSERT INTO `color` (`idcolor`, `color`) VALUES
(1, 'đỏ'),
(2, 'vàng'),
(3, 'đen'),
(4, 'xám'),
(5, 'xanh'),
(6, 'nâu'),
(7, 'cam'),
(8, 'trắng'),
(9, 'hồng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `gopy`
--

CREATE TABLE `gopy` (
  `idgopy` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `noidung` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `gopy`
--


INSERT INTO `gopy` (`idgopy`, `idSP`, `email`, `noidung`) VALUES
(1, 1, 'shopGoVap@gmail.com', 'Giày tây nam này mang rất thoải mái.'),
(2, 1, 'shopGoVap@gmail.com', 'Sản phẩm chất lượng, đúng mô tả.'),
(3, 9, 'userHCM@gmail.com', 'Mẫu giày này có thiết kế khá ổn, giá hợp lý.'),
(4, 9, 'HCMshop@gmail.com', 'Giày đẹp, nhưng cần cải thiện về độ bền.'),
(5, 2, 'studentSG@gmail.com', 'Giày này phù hợp với học sinh, chất lượng ổn.'),
(6, 5, 'shopGoVap@gmail.com', 'Thiết kế giày nam rất chắc chắn, đáng mua.'),
(7, 6, 'shopGoVap@gmail.com', 'Giày bền, đẹp, đáng tiền. Rất hài lòng.'),
(8, 4, 'userSG@gmail.com', 'Da bò thật, cảm giác rất cao cấp khi mang.'),
(9, 3, 'shopSG@gmail.com', 'Phong cách thời trang, dễ phối đồ.'),
(10, 7, 'shopGoVap@gmail.com', 'Giày thời trang này thật sự đẹp và tinh tế.'),
(11, 8, 'userHCM@gmail.com', 'Mẫu giày này rất hợp với phong cách của mình.'),
(12, 6, 'infoHCM@gmail.com', 'Giày học sinh đẹp, bền và giá cả phải chăng.'),
(13, 7, 'infoHCM@gmail.com', 'Thiết kế giày học sinh rất tiện lợi và hợp xu hướng.'),
(14, 1, 'shopGV@gmail.com', 'Sản phẩm tốt, mình rất hài lòng.');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `idhoadon` int(11) NOT NULL,
  `idUser` int(11) NOT NULL,
  `idSP` int(11) NOT NULL,
  `tongtien` int(11) NOT NULL,
  `trangthai` int(11) NOT NULL,
  `soluongmua` int(11) NOT NULL,
  `ngaymua` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`idhoadon`, `idUser`, `idSP`, `tongtien`, `trangthai`, `soluongmua`, `ngaymua`) VALUES
(26, 27, 1, 260, 1, 2, '2024-03-17'),
(27, 27, 1, 260, 1, 2, '2024-03-17'),
(29, 27, 1, 260, 1, 2, '2024-03-17'),
(30, 27, 1, 260, 1, 2, '2024-03-17'),
(31, 24, 2, 1600, 1, 8, '2024-03-18'),
(32, 24, 1, 130, 1, 1, '2024-03-18'),
(34, 27, 6, 650, 1, 1, '2024-03-19'),
(35, 27, 1, 390, 1, 3, '2024-03-19'),
(36, 27, 5, 2700, 1, 3, '2024-03-19'),
(37, 24, 1, 130, 1, 1, '2024-03-20'),
(38, 24, 1, 260, 0, 2, '2024-03-23'),
(39, 24, 1, 780, 1, 6, '2024-03-23');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khuyenmai`
--

CREATE TABLE `khuyenmai` (
  `idKM` int(11) NOT NULL,
  `loaiKM` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `giatriKM` float NOT NULL,
  `ngaybatdau` date NOT NULL,
  `ngayketthuc` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khuyenmai`
--

INSERT INTO `khuyenmai` (`idKM`, `loaiKM`, `giatriKM`, `ngaybatdau`, `ngayketthuc`) VALUES
(1, 'Không', 0, '2024-03-17', '2024-04-07'),
(2, 'Sản phẩm mới', 30, '0000-00-00', '0000-00-00'),
(3, 'Khuyến mãi đầu năm', 30, '0000-00-00', '0000-00-00'),
(4, 'Khuyến mãi cuối năm', 30, '0000-00-00', '0000-00-00'),
(5, 'Khuyến mãi theo dịch vu', 30, '0000-00-00', '0000-00-00'),
(6, 'Sale sau tết', 20, '2024-03-30', '2024-04-01'),
(7, 'Sale', 10, '2024-03-16', '2024-03-31'),
(8, 'Noel', 20, '2024-04-06', '2024-04-09');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `layout`
--

CREATE TABLE `layout` (
  `id` int(11) NOT NULL,
  `mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `layout`
--

INSERT INTO `layout` (`id`, `mail`, `diachi`, `phone`) VALUES
(1, 'trieuwjbu2k3@gmail.com', 'Gò Vấp, Hồ Chí Minh', 0907795988);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loaisanpham`
--

CREATE TABLE `loaisanpham` (
  `idLoaiSP` int(11) NOT NULL,
  `tenLSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loaisanpham`
--

INSERT INTO `loaisanpham` (`idLoaiSP`, `tenLSP`) VALUES
(1, 'Men'),
(2, 'Women'),
(3, 'Kid'),
(5, 'Man');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phanquyen`
--

CREATE TABLE `phanquyen` (
  `idQuyen` int(11) NOT NULL,
  `tenquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `chitietquyen` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phanquyen`
--

INSERT INTO `phanquyen` (`idQuyen`, `tenquyen`, `chitietquyen`) VALUES
(1, 'admin', 'quản lý trang web'),
(0, 'customer', 'khách hàng quen'),
(2, 'banhang', 'Nhân viên bán hàng');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idSP` int(11) NOT NULL,
  `idKM` int(11) NOT NULL,
  `idLoaiSP` int(11) NOT NULL,
  `idcolor` int(11) NOT NULL,
  `idsize` int(11) NOT NULL,
  `tenSP` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Dongia` int(11) NOT NULL,
  `anh1` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `anh3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ngaynhap` date NOT NULL,
  `mota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `soluong` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idSP`, `idKM`, `idLoaiSP`, `idcolor`, `idsize`, `tenSP`, `Dongia`, `anh1`, `anh2`, `anh3`, `ngaynhap`, `mota`, `soluong`) VALUES
(1, 1, 1, 1, 1, 'Giày Tây ', 130000, '20.png', '8.png', '17.png', '2024-2-15', '', 0),
(2, 1, 1, 1, 1, 'Giày hs nam-nữ', 200, '18.png', '10.png', '13.png', '2024-2-16', '', 32),
(4, 1, 3, 4, 8, 'Giày Lười Da Bò QS49', 790, '2.png', '22.png', '25.png', '2024-2-15', '<p>Gi&agrave;y Lười Da B&ograve; QS49</p>', 45),
(5, 1, 1, 1, 1, 'Giày học sinh', 900, '20.png', '25.png', '31.png', '2024-12-09', '', 17),
(6, 1, 1, 1, 1, 'Giày học sinh', 650, '2.png', '8.png', '13.png', '2024-2-23', '', 49),
(9, 2, 1, 8, 9, 'Giày công sở', 300, '1.png', '2.png', '3.png', '2024-2-15', '<p><strong>Gi&agrave;y c&ocirc;ng sở nam đẹp nhất</strong></p>', 50),
(21, 1, 3, 3, 11, 'Giày da bò nam đẹp', 500, '13.png', '14.png', '26.png', '2024-01-09', '<p><strong><em>Gi&agrave;y da b&ograve; nam đẹp, ph&ugrave; hợp với nam giới, gi&uacute;p bạn lịch l&atilde;m hơn</em></strong></p>', 498),
(73, 6, 3, 1, 1, 'Giày Nam', 160000000, '7.png', '10.png', '18.png', '2024-03-11', '<p>no ct</p>', 45),
(74, 5, 3, 5, 11, 'Giày Running', 2000099, '17.png', '29.png', '31.png', '2024-03-19', '<p>no</p>\r\n', 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `size`
--

CREATE TABLE `size` (
  `idsize` int(11) NOT NULL,
  `size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `size`
--

INSERT INTO `size` (`idsize`, `size`) VALUES
(1, 25),
(2, 26),
(3, 27),
(4, 28),
(5, 29),
(6, 30),
(7, 31),
(8, 32),
(9, 33),
(10, 34),
(11, 35),
(12, 36),
(13, 37),
(14, 38),
(15, 39),
(16, 40),
(17, 41),
(18, 42),
(19, 43),
(20, 44),
(21, 45);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `idUser` int(11) NOT NULL,
  `ho` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gioitinh` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `sodienthoai` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tendangnhap` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `matkhau` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `idQuyen` int(11) NOT NULL,
  `recovery_code` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Đang đổ dữ liệu cho bảng `user`
INSERT INTO `user` (`idUser`, `ho`, `ten`, `email`, `diachi`, `gioitinh`, `sodienthoai`, `tendangnhap`, `matkhau`, `idQuyen`, `recovery_code`) VALUES
(1, 'Pham', 'Trieu', 'trieuwjbu2k3@gmail.com', 'Gò Vấp', 'nam', '0123456789', 'admin', 'Trieu@123', 1, NULL),
(2, 'Nguyễn', 'Tài', 'hung.tran@gmail.com', 'TP HCM', 'nam', '0123456789', 'tai', '12345', 0, NULL),
(3, 'Lê', 'An', 'anle@gmail.com', 'HCM', 'nu', '0123456789', 'an', '12345', 2, NULL);



--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`idbanner`);

--
-- Chỉ mục cho bảng `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`idcolor`);

--
-- Chỉ mục cho bảng `gopy`
--
ALTER TABLE `gopy`
  ADD PRIMARY KEY (`idgopy`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`idhoadon`),
  ADD KEY `sanpham` (`idSP`),
  ADD KEY `idUser` (`idUser`);

--
-- Chỉ mục cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  ADD PRIMARY KEY (`idKM`);

--
-- Chỉ mục cho bảng `layout`
--
ALTER TABLE `layout`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  ADD PRIMARY KEY (`idLoaiSP`);

--
-- Chỉ mục cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  ADD PRIMARY KEY (`idQuyen`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`),
  ADD KEY `idLoaiSP` (`idLoaiSP`),
  ADD KEY `idKM` (`idKM`),
  ADD KEY `idcolor` (`idcolor`),
  ADD KEY `idsize` (`idsize`);

--
-- Chỉ mục cho bảng `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`idsize`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`idUser`),
  ADD KEY `idQuyen` (`idQuyen`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `idbanner` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `color`
--
ALTER TABLE `color`
  MODIFY `idcolor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `gopy`
--
ALTER TABLE `gopy`
  MODIFY `idgopy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `idhoadon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `khuyenmai`
--
ALTER TABLE `khuyenmai`
  MODIFY `idKM` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `layout`
--
ALTER TABLE `layout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `loaisanpham`
--
ALTER TABLE `loaisanpham`
  MODIFY `idLoaiSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `phanquyen`
--
ALTER TABLE `phanquyen`
  MODIFY `idQuyen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT cho bảng `size`
--
ALTER TABLE `size`
  MODIFY `idsize` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD CONSTRAINT `hoadon_ibfk_1` FOREIGN KEY (`idUser`) REFERENCES `user` (`idUser`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD CONSTRAINT `sanpham_ibfk_1` FOREIGN KEY (`idLoaiSP`) REFERENCES `loaisanpham` (`idLoaiSP`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `sanpham_ibfk_2` FOREIGN KEY (`idsize`) REFERENCES `size` (`idsize`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
