-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 29, 2025 lúc 04:32 PM
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
-- Cơ sở dữ liệu: `toan_lop_1`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ket_qua_thi`
--

CREATE TABLE `ket_qua_thi` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `ten_bai_thi` varchar(255) NOT NULL,
  `diem_so` int(11) NOT NULL,
  `thoi_gian_lam` varchar(50) DEFAULT NULL,
  `ngay_thi` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ket_qua_thi`
--

INSERT INTO `ket_qua_thi` (`id`, `username`, `ten_bai_thi`, `diem_so`, `thoi_gian_lam`, `ngay_thi`) VALUES
(1, 'phong', 'Bài 2: Ôn tập phép cộng, phép trừ trong phạm vi 1 000', 30, '00:12', '2025-12-29 10:14:19'),
(2, 'phong', 'Bài 2: Nhiều hơn , ít hơn, bằng nhau', 20, '00:09', '2025-12-29 15:08:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(20) DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`) VALUES
(1, 'admin', '$2y$10$YourHashedPasswordHere...', 'teacher'),
(2, 'phong', '$2y$10$9jL0230SP9UzFqlmQTL5Xep/0Fjg3vCLfm67.t6w9J34sjaPri4K.', 'student'),
(3, 'nam', '$2y$10$aDLQ0mcI3Pg2OpeM4WQK7OsXj800yHptBi1dYEgLzQ19csuOSEuhe', 'teacher');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ket_qua_thi`
--
ALTER TABLE `ket_qua_thi`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ket_qua_thi`
--
ALTER TABLE `ket_qua_thi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
