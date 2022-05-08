-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 25, 2022 lúc 01:17 PM
-- Phiên bản máy phục vụ: 10.4.18-MariaDB
-- Phiên bản PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `shop_datn`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_category`
--

CREATE TABLE `tb_category` (
  `id_cat` int(10) NOT NULL,
  `name_cat` varchar(225) NOT NULL,
  `cat_image` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_category`
--

INSERT INTO `tb_category` (`id_cat`, `name_cat`, `cat_image`) VALUES
(1, 'Áo sơ mi', '1_ecb58e0dd65a48658fd65cbe1bc612cb_master.jpg'),
(2, 'Áo thun', '1_11e1ff21977a41d9a7d4b8817971e78c_master.jpg'),
(3, 'Quần dài ', '1_657227e4c77a4287b349e0bc48e0e1b0_master.jpg'),
(4, 'thêm danh mục', 'Logo-NOW-960x675.png'),
(5, 'Phụ kiện', 'received_2408519075925216.jpeg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_product`
--

CREATE TABLE `tb_product` (
  `id` int(10) NOT NULL,
  `product_name` varchar(225) NOT NULL,
  `product_price` float(9,3) NOT NULL,
  `product_image` varchar(225) NOT NULL,
  `id_category` int(10) NOT NULL,
  `product_content` varchar(1000) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tb_product`
--

INSERT INTO `tb_product` (`id`, `product_name`, `product_price`, `product_image`, `id_category`, `product_content`, `status`) VALUES
(27, 'Áo thun Wash Oversize ATN0129', 250000.000, '1_b49c42c3e1d9407ca9ea11995750d830_master.jpg', 2, '<h2>M&ocirc; tả</h2>\r\n\r\n<p>&Aacute;o thun tay lỡ form chuẩn Unisex rộng r&atilde;i v&agrave; thoải m&aacute;i, đứng form v&agrave; t&ocirc;n d&aacute;ng. Chất cotton 100% co gi&atilde;n v&agrave; thấm h&uacute;t cực tốt, định lượng vải 220gms. Th&iacute;ch hợp v&agrave; dễ mặc trong mọi dịp.</p>', '0'),
(28, 'Áo thun tay lỡ oversize ATN0128', 195000.000, '1_11e1ff21977a41d9a7d4b8817971e78c_master.jpg', 2, '<h2>M&ocirc; tả</h2>\r\n\r\n<p>&Aacute;o thun tay lỡ form chuẩn Unisex rộng r&atilde;i v&agrave; thoải m&aacute;i, đứng form v&agrave; t&ocirc;n d&aacute;ng. Chất cotton 100% co gi&atilde;n v&agrave; thấm h&uacute;t cực tốt, định lượng vải 220gms.&nbsp;<br />\r\n<br />\r\n<strong>Th&ocirc;ng số bảng size:&nbsp;</strong></p>\r\n\r\n<p>Size L: Ngang 50cm,&nbsp;D&agrave;i 61cm,&nbsp;Tay 24cm</p>\r\n\r\n<p>Số XL: Ngang 55cm, D&agrave;i 68cm, Tay 25cm</p>', '1'),
(29, 'Áo Thun Gấu ATN0121', 250000.000, '1_1d08d6711fa74d0dbd7125fb82dd8e3b_master.jpg', 2, '<h2>M&ocirc; tả</h2>\r\n\r\n<p>&Aacute;o Thun OverSize gấu,&nbsp;form lửng,&nbsp;dễ mix mọi trang phục. Thấm h&uacute;t mồ h&ocirc;i cực tốt, mặc si&ecirc;u tho&aacute;ng v&agrave; thoải m&aacute;i, độ bền cao.</p>\r\n\r\n<p>Hướng dẫn bảo quản:</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất tẩy.</p>\r\n\r\n<p>- Ủi ở nhiệt độ th&iacute;ch hợp, hạn chế d&ugrave;ng m&aacute;y sấy.</p>\r\n\r\n<p>- Giặt ở chế độ b&igrave;nh thường, với đồ c&oacute; m&agrave;u tương tự.</p>', '1'),
(30, 'Sơ Mi Họa Tiết SMD0014', 350000.000, 'so-mi-tay-dai-hoa-tiet-1_d11b2e2c03ee43ca878acd1c53649204_master.jpg', 1, '<h2>M&ocirc; tả</h2>\r\n\r\n<p>Sơ mi tay d&agrave;i lu&ocirc;n sang trọng, lịch l&atilde;m. Chất vải tho&aacute;ng m&aacute;t v&agrave; &iacute;t nhăn, thấm h&uacute;t cực tốt.</p>\r\n\r\n<p>Hướng dẫn bảo quản:</p>\r\n\r\n<p>- Kh&ocirc;ng d&ugrave;ng h&oacute;a chất tẩy.</p>\r\n\r\n<p>- Ủi ở nhiệt độ th&iacute;ch hợp, hạn chế d&ugrave;ng m&aacute;y sấy.</p>\r\n\r\n<p>- Giặt ở chế độ b&igrave;nh thường, với đồ c&oacute; m&agrave;u tương tự.</p>', '0'),
(31, 'Quần tây nam slimfit viền túi QTA0033', 250000.000, '1_dbdab9a8e3be46ba928222ca3c5e80c2_master.jpg', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<p>Quần T&acirc;y nam Kenta với form d&aacute;ng vừa vặn, sang trọng đầy lịch l&atilde;m, điểm nhấn viền ở t&uacute;i trước v&agrave; t&uacute;i sau. Th&iacute;ch hợp mặc đi l&agrave;m, đi chơi, l&oacute;t trong sắc n&eacute;t, tạo cảm gi&aacute;c thoải m&aacute;i khi di chuyển, l&agrave;m việc. Với ưu vải co gi&atilde;n nhẹ, l&oacute;t trong sắc n&eacute;t v&agrave; tinh tế, với mức gi&aacute; b&aacute;n cực k&igrave; hợp l&yacute;. Hiếu được nhu cầu của kh&aacute;ch h&agrave;ng, mặt trong của sản phẩm, c&aacute;c bạn c&oacute; thể&nbsp;chỉnh sửa lại cho ph&ugrave; hợp với mọi v&oacute;c d&aacute;ng.&nbsp;</p>\r\n\r\n<p><strong>Bảng size Quần t&acirc;y:</strong></p>', '0'),
(33, 'Quần Kaki Nam Xám Chuột QKK0004', 350000.000, '1_657227e4c77a4287b349e0bc48e0e1b0_master.jpg', 3, '<h2>M&ocirc; tả</h2>\r\n\r\n<p>Quần kaki nam Kenta với form d&aacute;ng Slim trẻ trung v&agrave; thời thượng. Chất kaki co gi&atilde;n, vải si&ecirc;u m&aacute;t, thoải m&aacute;i trong mọi chuyển động. Sản phẩm sẽ đem đến sự h&agrave;i l&ograve;ng nhất.</p>\r\n\r\n<p>Chất liệu: kaki cao cấp si&ecirc;u mịn, co gi&atilde;n.&nbsp;</p>\r\n\r\n<p>D&acirc;y k&eacute;o: YKK bền bỉ</p>\r\n\r\n<p>Hướng dẫn bảo quản:</p>', '1');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'Nguyễn Trường Vi', 'vintps14865@fpt.edu.vn', NULL, '$2y$10$7ubwH7mxBwgwK46.eSbxIehVBjqc56ApxCdQwWuknbonutmrgVARe', NULL, '2022-03-19 04:55:49', '2022-03-19 04:55:49');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Chỉ mục cho bảng `tb_category`
--
ALTER TABLE `tb_category`
  ADD PRIMARY KEY (`id_cat`);

--
-- Chỉ mục cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `tb_category`
--
ALTER TABLE `tb_category`
  MODIFY `id_cat` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `tb_product`
--
ALTER TABLE `tb_product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
