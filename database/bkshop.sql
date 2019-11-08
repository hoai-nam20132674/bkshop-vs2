-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 08, 2019 lúc 07:10 AM
-- Phiên bản máy phục vụ: 10.1.38-MariaDB
-- Phiên bản PHP: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bkshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` int(11) NOT NULL,
  `systems_id` int(10) UNSIGNED NOT NULL,
  `display` tinyint(1) NOT NULL,
  `highlights` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `seo_description`, `seo_keyword`, `title`, `share_image`, `avatar`, `parent_id`, `systems_id`, `display`, `highlights`, `created_at`, `updated_at`) VALUES
(1, 'Kem dưỡng da', 'kem-duong-da-ana-nuty', 'Kem dưỡng da', 'Kem dưỡng da', 'Kem dưỡng da', 'ana-nuty.png', 'lipstick.png', 1, 2, 1, 1, '2019-06-09 23:51:24', '2019-06-10 00:24:00'),
(2, 'Nước hoa nam', 'nuoc-hoa-nam-ant-nuty', 'Nước hoa Yves Saint Laurent Black', 'Nước hoa Yves Saint Laurent Black', 'Nước hoa Yves Saint Laurent Black', 'ana-nuty.png', 'lipstick.png', 2, 2, 1, 1, '2019-06-10 00:38:04', '2019-06-10 00:38:04'),
(3, 'Giầy nam', 'giay-nam-delta', 'Giầy nam', 'Giầy nam', 'Giầy nam', 'logo-delta.png', 'groom-shoes.png', 3, 3, 1, 1, '2019-06-10 01:05:17', '2019-06-10 01:05:17'),
(4, 'Giầy nữ', 'giay-nu-delta', 'Giầy nữ', 'Giầy nữ', 'Giầy nữ', 'logo-delta.png', 'high-heels.png', 4, 3, 1, 1, '2019-06-10 01:06:22', '2019-06-10 01:06:22'),
(5, 'Giầy nike nam', 'giay-nike-nam-delta', 'Giầy nữ', 'Giầy nữ', 'Giầy nữ', 'logo-delta.png', 'groom-shoes.png', 3, 3, 1, 1, '2019-06-10 01:08:13', '2019-06-10 01:08:13'),
(6, 'Mỹ Phẩm - Làm Đẹp', 'my-pham-bkmart', 'Mỹ Phẩm - Làm Đẹp', 'Mỹ Phẩm - Làm Đẹp', 'Mỹ Phẩm - Làm Đẹp', 'bkmart.png', 'lipstick.png', 6, 1, 1, 1, '2019-06-10 01:21:29', '2019-06-10 01:21:29'),
(7, 'Giầy dép', 'giay-dep-bkmart', 'Mỹ Phẩm - Làm Đẹp', 'Mỹ Phẩm - Làm Đẹp', 'Mỹ Phẩm - Làm Đẹp', 'bkmart.png', 'high-heels.png', 7, 1, 1, 1, '2019-06-10 01:23:10', '2019-06-10 01:23:10'),
(8, 'Son môi', 'son-moi-cool-beauty', 'Son môi', 'Son môi', 'Son môi', 'logo-cool-beauty.png', 'lipstick.png', 8, 4, 1, 1, '2019-06-10 15:44:59', '2019-06-10 15:44:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedbacks`
--

CREATE TABLE `feedbacks` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `users_id` int(10) UNSIGNED NOT NULL,
  `rate` int(11) NOT NULL,
  `messages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `feedbacks`
--

INSERT INTO `feedbacks` (`id`, `products_id`, `users_id`, `rate`, `messages`, `created_at`, `updated_at`) VALUES
(1, 7, 1, 1, 'sản phẩm rất đẹp', '2019-06-10 22:21:27', '2019-06-10 22:21:27');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `follow_systems`
--

CREATE TABLE `follow_systems` (
  `id` int(10) UNSIGNED NOT NULL,
  `users_clients_id` int(10) UNSIGNED NOT NULL,
  `systems_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `follow_systems`
--

INSERT INTO `follow_systems` (`id`, `users_clients_id`, `systems_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2019-06-10 01:29:25', '2019-06-10 01:29:25');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `images_products`
--

CREATE TABLE `images_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `images_products`
--

INSERT INTO `images_products` (`id`, `url`, `role`, `products_id`, `created_at`, `updated_at`) VALUES
(2, 'baremineralsoriginalfoundation.jpg', 1, 2, '2019-06-10 00:03:32', '2019-06-10 00:03:32'),
(3, '863bac1b08b7740789672cdcceaae8.jpg', 0, 3, '2019-06-10 00:07:47', '2019-06-10 00:07:47'),
(4, '9.jpg', 1, 3, '2019-06-10 00:07:47', '2019-06-10 00:07:47'),
(5, '5c53bf862463a4743897afb22a6196.jpg', 1, 4, '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(6, '3.jpg', 0, 5, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(7, '2.jpg', 1, 5, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(8, 'product3.jpg', 1, 6, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(9, 'product7.jpg', 1, 7, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(10, 'cq2133-ultraboost-st-womens-adidas-g.jpg', 0, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(11, '1-1-52eb0aa4-1c91-4d10-bb43-ced54037074f.jpg', 0, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(12, 'adidas-ultra-boost-4-cp9250-inside.jpg', 0, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(13, 'adidas-prophere-b37182-7157ca7e-7f59-455b-ace5-5456249119f0.jpg', 0, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(14, 'side-99fc8805-c85d-4893-ac79-6de525cf3af6-75b7aa3b-1d00-4963-a3a5-b9f70d09de11.png', 1, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(15, 'lips7u3781d20161216t1118286216.jpg', 0, 9, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(16, 'lips5u3781d20161216t1118285468.jpg', 0, 9, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(17, 'lips9u3781d20161216t1118286778.jpg', 0, 9, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(18, 'maybellineor011u2409d20160928t.jpg', 1, 9, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(19, '1274ecabd26e54bcabcb0050da454e.jpg', 1, 10, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(20, 'dsc-0223-1024x1024.jpg', 0, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(21, 'dsc-0224-cb959051743a4f108f908e2e47c166b7-1024x1024.jpg', 0, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(22, 'dsc-0225-25de0793f4e5438e9f1eeaa5ed4a95c7-1024x1024.jpg', 0, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(23, 'dsc-0231-53011a424969432f9a22bd67160329e0-1024x1024.jpg', 0, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(24, 'dsc-0232-21042be130d3409a86ebe1e5e355d0c8-1024x1024.jpg', 0, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(25, 'dsm068333xnh-1-1024x1024.jpg', 1, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(26, 'dsmh00300reu-2-1024x1024.jpg', 0, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(27, 'dsmh00300reu-3-1024x1024.jpg', 0, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(28, 'dsmh00300xad-1-1024x1024.jpg', 0, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(29, 'dsmh00300xad-4-1024x1024.jpg', 0, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(30, 'dsmh00300reu-1-1024x1024.jpg', 1, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `image_shares`
--

CREATE TABLE `image_shares` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `image_shares`
--

INSERT INTO `image_shares` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'ana-nuty.png', '2019-06-09 23:51:24', '2019-06-09 23:51:24'),
(2, 'ana-nuty.png', '2019-06-09 23:58:33', '2019-06-09 23:58:33'),
(3, 'ana-nuty.png', '2019-06-10 00:03:32', '2019-06-10 00:03:32'),
(4, 'ana-nuty.png', '2019-06-10 00:07:47', '2019-06-10 00:07:47'),
(5, 'ana-nuty.png', '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(6, 'ana-nuty.png', '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(7, 'ana-nuty.png', '2019-06-10 00:38:04', '2019-06-10 00:38:04'),
(8, 'ana-nuty.png', '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(9, 'ana-nuty.png', '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(10, 'logo-delta.png', '2019-06-10 01:05:17', '2019-06-10 01:05:17'),
(11, 'logo-delta.png', '2019-06-10 01:06:22', '2019-06-10 01:06:22'),
(12, 'logo-delta.png', '2019-06-10 01:08:13', '2019-06-10 01:08:13'),
(13, 'logo-delta.png', '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(14, 'bkmart.png', '2019-06-10 01:21:29', '2019-06-10 01:21:29'),
(15, 'bkmart.png', '2019-06-10 01:23:10', '2019-06-10 01:23:10'),
(16, 'logo-cool-beauty.png', '2019-06-10 15:44:59', '2019-06-10 15:44:59'),
(17, 'logo-cool-beauty.png', '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(18, 'ana-nuty.png', '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(19, 'logo-delta.png', '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(20, 'dsc-0223-1024x1024.jpg', '2019-06-11 09:38:53', '2019-06-11 09:38:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_11_000000_create_systems_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_04_16_104212_create_slides_table', 1),
(5, '2019_04_16_104309_create_categories_table', 1),
(6, '2019_04_16_104333_create_products_table', 1),
(7, '2019_04_16_104442_create_properties_types_table', 1),
(8, '2019_04_16_104537_create_properties_table', 1),
(9, '2019_04_16_104613_create_products_details_table', 1),
(10, '2019_04_16_104747_create_products_properties_table', 1),
(11, '2019_04_16_104813_create_orders_table', 1),
(12, '2019_04_16_104833_create_orders_details_table', 1),
(13, '2019_04_16_105003_create_users_clients_table', 1),
(14, '2019_05_10_080733_create_image_shares_table', 1),
(15, '2019_05_10_081821_create_images_products_table', 1),
(16, '2019_05_22_175116_create_tag_categories_table', 1),
(17, '2019_05_22_211619_create_home_categories_table', 1),
(18, '2019_05_22_212031_create_follow_systems_table', 1),
(19, '2019_05_30_234334_create_menus_table', 1),
(20, '2019_05_30_234422_create_blogs_table', 1),
(21, '2019_06_09_135502_create_feedbacks_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `messages` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `email`, `address`, `messages`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoài Nam', '0848384333', 'namnguyen@gmail.com', 'Hà Nội', 'đặt hàng', 0, '2019-06-10 01:31:41', '2019-06-10 01:31:41'),
(2, 'Nguyễn Hoài Nam', '0848384333', 'namnguyen@gmail.com', 'Hà Nội', 'ádasd', 0, '2019-06-10 22:20:34', '2019-06-10 22:20:34'),
(3, 'Nguyễn Hoài Nam', '0848384333', 'nike@gmail.com', 'Lê thanh thị', 'giao hàng ngay', 0, '2019-06-11 09:16:37', '2019-06-11 09:16:37'),
(4, 'Nguyễn Hoài Nam', '0848384333', 'namnguyen@gmail.com', 'Hà Nội', 'giao ngay', 0, '2019-06-11 10:27:36', '2019-06-11 10:27:36'),
(5, 'nam nguyễn', '0848384333', 'namnguyen20132674@gmail.com', 'Phú Thọ', 'giao hàng càng sớm càng tốt', 0, '2019-06-11 10:59:06', '2019-06-11 10:59:06'),
(6, 'Nam Nguyễn Hoài', '0848384333', 'marketing@gmail.com', 'Hà Nội', 'giao hàng khẩn cấp', 0, '2019-06-11 11:00:50', '2019-06-11 11:00:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders_detail`
--

CREATE TABLE `orders_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `orders_id` int(10) UNSIGNED NOT NULL,
  `products_detail_id` int(10) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders_detail`
--

INSERT INTO `orders_detail` (`id`, `orders_id`, `products_detail_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 1, 18, 1, '2019-06-10 01:31:41', '2019-06-10 01:31:41'),
(2, 2, 25, 1, '2019-06-10 22:20:34', '2019-06-10 22:20:34'),
(3, 3, 12, 6, '2019-06-11 09:16:37', '2019-06-11 09:16:37'),
(4, 4, 34, 3, '2019-06-11 10:27:36', '2019-06-11 10:27:36'),
(5, 5, 37, 5, '2019-06-11 10:59:06', '2019-06-11 10:59:06'),
(6, 5, 27, 5, '2019-06-11 10:59:06', '2019-06-11 10:59:06'),
(7, 6, 35, 2, '2019-06-11 11:00:50', '2019-06-11 11:00:50'),
(8, 6, 30, 5, '2019-06-11 11:00:50', '2019-06-11 11:00:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categories_id` int(10) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` int(11) NOT NULL,
  `orders` int(11) NOT NULL,
  `highlights` tinyint(1) NOT NULL,
  `display` tinyint(1) NOT NULL,
  `views` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `categories_id`, `url`, `content`, `seo_description`, `seo_keyword`, `title`, `share_image`, `rate`, `orders`, `highlights`, `display`, `views`, `price`, `amount`, `created_at`, `updated_at`) VALUES
(2, 'Phấn nền bareMinerals Original', 1, 'phan-nen-bareminerals-original-foundation-broad-spectrum', '<p>bareMinerals Original Foundation Broad Spectrum l&agrave; d&ograve;ng found dạng bột b&aacute;n chạy nhất của h&atilde;ng MMU (minerals make up - mp kho&aacute;ng) Bare Escentuals.</p>\r\n\r\n<p>Sản phẩm bareMinerals Original Foundation Broad Spectrum nổi tiếng v&igrave; l&agrave;nh t&iacute;nh, hạt phấn si&ecirc;u nhỏ mịn v&agrave; bảng m&agrave;u trải d&agrave;i, thậm ch&iacute; c&oacute; thể mix m&agrave;u để hợp tone da bạn.</p>\r\n\r\n<p>Chỉ với 5 th&agrave;nh phần kho&aacute;ng v&agrave; kh&ocirc;ng c&oacute; parabens, chất kết d&iacute;nh, chất độn hoặc h&oacute;a chất tổng hợp, bareMinerals Original Foundation Broad Spectrum mang lại độ che phủ cao l&ecirc;n đến 8 giờ.</p>\r\n\r\n<p>&nbsp;</p>', 'Phấn nền bareMinerals Original', 'Phấn nền bareMinerals Original', 'Phấn nền bareMinerals Original', 'ana-nuty.png', 0, 0, 1, 1, 0, 100000, 40, '2019-06-10 00:03:32', '2019-06-10 00:03:32'),
(3, 'Sữa tắm dạng kem Victoria’s Secret', 1, 'sua-tam-dang-kem-victoria-s-secret', '<p>Sữa tắm Sparkling Citrus Luscious Crush &ndash; Victoria&rsquo;s Secret mang đến sức sống căng tr&agrave;n v&agrave; vẻ mịn m&agrave;ng tươi trẻ cho l&agrave;n da nhờ chiết xuất từ qu&yacute;t v&agrave; những lo&agrave;i hoa thơm m&ecirc; đắm. &nbsp;C&aacute;c hạt vitamin C nhẹ nh&agrave;ng l&agrave;m sạch v&agrave; nu&ocirc;i dưỡng l&agrave;n da gi&uacute;p cho l&agrave;n da mịn m&agrave;ng, mềm mại v&agrave; kh&ocirc;ng k&eacute;m phần quyến rũ. H&atilde;y đ&aacute;nh thức vẻ đẹp của l&agrave;n da bạn ngay từ b&acirc;y giờ!.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng :</strong></p>\r\n\r\n<p>- Sữa tắm dạng kem với c&ocirc;ng thức vượt trội về dưỡng mịn &amp; bổ sung độ ẩm gi&uacute;p da bạn hấp thụ hiệu quả đa dưỡng chất<br />\r\n- Sau khi tắm xong, bạn sẽ cảm nhận được tr&ecirc;n da m&igrave;nh được bao bọc v&agrave; bảo vệ bởi một lớp kem mỏng mịn v&agrave; m&ugrave;i hương cực kỳ quyến rũ v&agrave; nồng n&agrave;n lưu lại tr&ecirc;n cơ thể.<br />\r\n- Đặc biệt l&agrave; rất th&iacute;ch hợp sử dụng cho l&agrave;n da kh&ocirc; cần được hồi sinh.</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Lấy 1 lượng sản phẩm vừa đủ thoa đều l&ecirc;n cơ thể, massage nhẹ nh&agrave;ng</p>\r\n\r\n<p>Tắm sạch lại với nước</p>\r\n\r\n<p><strong>Th&ocirc;ng tin thương hiệu:</strong></p>\r\n\r\n<p>Victoria&rsquo;s Secret l&agrave; một nh&atilde;n hiệu nội y nổi tiếng với show thời trang thường ni&ecirc;n lu&ocirc;n thu h&uacute;t được sự quan t&acirc;m của h&agrave;ng chục triệu người tr&ecirc;n to&agrave;n thế giới. D&ograve;ng mỹ phẩm v&agrave; nước hoa mang t&ecirc;n Victoria&rsquo;s Secret cũng đầy gợi cảm như c&aacute;c thi&ecirc;n thần của họ tr&ecirc;n s&agrave;n catwalk.</p>', 'Sữa tắm dạng kem Victoria’s Secret', 'Sữa tắm dạng kem Victoria’s Secret', 'Sữa tắm dạng kem Victoria’s Secret', 'ana-nuty.png', 0, 0, 1, 1, 0, 200000, 3, '2019-06-10 00:07:47', '2019-06-11 05:18:56'),
(4, 'Sữa tắm Sparkling Citrus làm mượt da', 1, 'sua-tam-sparkling-citrus-lam-muot-da', '<p>Sữa tắm Sparkling Citrus Luscious Crush &ndash; Victoria&rsquo;s Secret mang đến sức sống căng tr&agrave;n v&agrave; vẻ mịn m&agrave;ng tươi trẻ cho l&agrave;n da nhờ chiết xuất từ qu&yacute;t v&agrave; những lo&agrave;i hoa thơm m&ecirc; đắm. &nbsp;C&aacute;c hạt vitamin C nhẹ nh&agrave;ng l&agrave;m sạch v&agrave; nu&ocirc;i dưỡng l&agrave;n da gi&uacute;p cho l&agrave;n da mịn m&agrave;ng, mềm mại v&agrave; kh&ocirc;ng k&eacute;m phần quyến rũ. H&atilde;y đ&aacute;nh thức vẻ đẹp của l&agrave;n da bạn ngay từ b&acirc;y giờ!.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng :</strong></p>\r\n\r\n<p>- Sữa tắm dạng kem với c&ocirc;ng thức vượt trội về dưỡng mịn &amp; bổ sung độ ẩm gi&uacute;p da bạn hấp thụ hiệu quả đa dưỡng chất<br />\r\n- Sau khi tắm xong, bạn sẽ cảm nhận được tr&ecirc;n da m&igrave;nh được bao bọc v&agrave; bảo vệ bởi một lớp kem mỏng mịn v&agrave; m&ugrave;i hương cực kỳ quyến rũ v&agrave; nồng n&agrave;n lưu lại tr&ecirc;n cơ thể.<br />\r\n- Đặc biệt l&agrave; rất th&iacute;ch hợp sử dụng cho l&agrave;n da kh&ocirc; cần được hồi sinh.</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Lấy 1 lượng sản phẩm vừa đủ thoa đều l&ecirc;n cơ thể, massage nhẹ nh&agrave;ng</p>\r\n\r\n<p>Tắm sạch lại với nước</p>\r\n\r\n<p><strong>Th&ocirc;ng tin thương hiệu:</strong></p>\r\n\r\n<p>Victoria&rsquo;s Secret l&agrave; một nh&atilde;n hiệu nội y nổi tiếng với show thời trang thường ni&ecirc;n lu&ocirc;n thu h&uacute;t được sự quan t&acirc;m của h&agrave;ng chục triệu người tr&ecirc;n to&agrave;n thế giới. D&ograve;ng mỹ phẩm v&agrave; nước hoa mang t&ecirc;n Victoria&rsquo;s Secret cũng đầy gợi cảm như c&aacute;c thi&ecirc;n thần của họ tr&ecirc;n s&agrave;n catwalk.</p>', 'Sữa tắm Sparkling Citrus làm mượt da', 'Sữa tắm Sparkling Citrus làm mượt da', 'Sữa tắm Sparkling Citrus làm mượt da', 'ana-nuty.png', 0, 0, 1, 1, 0, 50000, 30, '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(5, 'Sữa tắm Sparkling Citrus Luscious Crush', 1, 'sua-tam-sparkling-citrus-luscious-crush', '<p>Sữa tắm Sparkling Citrus Luscious Crush &ndash; Victoria&rsquo;s Secret mang đến sức sống căng tr&agrave;n v&agrave; vẻ mịn m&agrave;ng tươi trẻ cho l&agrave;n da nhờ chiết xuất từ qu&yacute;t v&agrave; những lo&agrave;i hoa thơm m&ecirc; đắm. &nbsp;C&aacute;c hạt vitamin C nhẹ nh&agrave;ng l&agrave;m sạch v&agrave; nu&ocirc;i dưỡng l&agrave;n da gi&uacute;p cho l&agrave;n da mịn m&agrave;ng, mềm mại v&agrave; kh&ocirc;ng k&eacute;m phần quyến rũ. H&atilde;y đ&aacute;nh thức vẻ đẹp của l&agrave;n da bạn ngay từ b&acirc;y giờ!.</p>\r\n\r\n<p><strong>C&ocirc;ng dụng :</strong></p>\r\n\r\n<p>- Sữa tắm dạng kem với c&ocirc;ng thức vượt trội về dưỡng mịn &amp; bổ sung độ ẩm gi&uacute;p da bạn hấp thụ hiệu quả đa dưỡng chất<br />\r\n- Sau khi tắm xong, bạn sẽ cảm nhận được tr&ecirc;n da m&igrave;nh được bao bọc v&agrave; bảo vệ bởi một lớp kem mỏng mịn v&agrave; m&ugrave;i hương cực kỳ quyến rũ v&agrave; nồng n&agrave;n lưu lại tr&ecirc;n cơ thể.<br />\r\n- Đặc biệt l&agrave; rất th&iacute;ch hợp sử dụng cho l&agrave;n da kh&ocirc; cần được hồi sinh.</p>\r\n\r\n<p><strong>Hướng dẫn sử dụng:</strong></p>\r\n\r\n<p>Lấy 1 lượng sản phẩm vừa đủ thoa đều l&ecirc;n cơ thể, massage nhẹ nh&agrave;ng</p>\r\n\r\n<p>Tắm sạch lại với nước</p>\r\n\r\n<p><strong>Th&ocirc;ng tin thương hiệu:</strong></p>\r\n\r\n<p>Victoria&rsquo;s Secret l&agrave; một nh&atilde;n hiệu nội y nổi tiếng với show thời trang thường ni&ecirc;n lu&ocirc;n thu h&uacute;t được sự quan t&acirc;m của h&agrave;ng chục triệu người tr&ecirc;n to&agrave;n thế giới. D&ograve;ng mỹ phẩm v&agrave; nước hoa mang t&ecirc;n Victoria&rsquo;s Secret cũng đầy gợi cảm như c&aacute;c thi&ecirc;n thần của họ tr&ecirc;n s&agrave;n catwalk</p>', 'Sữa tắm Sparkling Citrus Luscious Crush', 'Sữa tắm Sparkling Citrus Luscious Crush', 'Sữa tắm Sparkling Citrus Luscious Crush', 'ana-nuty.png', 0, 0, 1, 1, 0, 100000, 10, '2019-06-10 00:32:29', '2019-06-11 09:16:37'),
(6, 'Nước hoa Yves Saint Laurent Black', 2, 'nuoc-hoa-yves-saint-laurent-black-opium', '<p>Th&aacute;ng 9 năm 2014 Yves Saint Laurent đ&atilde; cho ra mắt Black Opium, d&ograve;ng nước hoa mới được c&ocirc;ng bố như một tiết mục biểu diễn rock&rsquo;n&rsquo;roll cổ điển nổi bật kh&iacute;a cạnh huyền ảo, b&iacute; ẩn của thương hiệu YSL. Chuy&ecirc;n gia s&aacute;ng tạo nước hoa Nathalie Lorson v&agrave; MarieSalamagne, đ&atilde; hợp t&aacute;c với Olivier Cresp v&agrave; Honorine Blanc để cho ra đời sản phẩm m&ugrave;i hương n&agrave;y.</p>\r\n\r\n<p>Black Opium, l&agrave; hương nước hoa mang phong vị của hoa cỏ c&agrave; ph&ecirc; đầu ti&ecirc;n của Yves Saint Laurent. Năng lượng của c&agrave; ph&ecirc; đen thống trị to&agrave;n bộ hương nước hoa của những b&ocirc;ng hoa trắng với sự nữ t&iacute;nh quyết đo&aacute;n bằng sự nổi bật của hồ ti&ecirc;u hồng v&agrave; tr&aacute;i l&ecirc; l&agrave;m nền ph&iacute;a sau. Trong lớp cuối, tất cả được c&acirc;n bằng với sự ngọt ng&agrave;o quyến rũ của vani v&agrave; gỗ tuyết t&ugrave;ng l&agrave;m m&ugrave;i hương trở n&ecirc;n năng động, gợi cảm v&agrave; ho&agrave;n to&agrave;n c&oacute; thể g&acirc;y nghiện đ&uacute;ng với t&ecirc;n gọi của n&oacute;.</p>\r\n\r\n<p>Mẫu m&atilde; chai nước hoa được thiết kế như một phi&ecirc;n bản cuối c&ugrave;ng của bộ sưu tập Opium. Chai m&agrave;u tối v&agrave; trang tr&iacute; với phong c&aacute;ch lấp l&aacute;nh mang lại vẻ ngo&agrave;i theo phong c&aacute;ch &acirc;m nhạc cổ điển Anh-Glam Rock. Sự sang trọng, huyền ảo l&agrave; mục ti&ecirc;u h&agrave;ng đầu của thiết kế n&agrave;y.</p>\r\n\r\n<p>Giới thiệu Black Opium, một biểu tượng mới của sự nữ t&iacute;nh. Black Opium l&agrave; hiện th&acirc;n của c&ocirc; g&aacute;i hiện đại theo phong c&aacute;ch c&aacute; t&iacute;nh &ldquo;Rock Chic&rdquo;. C&ocirc; g&aacute;i sống một cuộc sống với niềm đam m&ecirc; v&agrave; d&aacute;m thể hiện nhiều phong c&aacute;ch kh&aacute;c nhau. M&ugrave;i hương của c&ocirc; g&aacute;i ấy như liều thuốc adrenelin hay một loại thần dược gi&uacute;p c&ocirc; ấy c&oacute; đủ can đảm để giải ph&oacute;ng bản th&acirc;n v&agrave; t&igrave;m được sự tự tin để nắm bắt được sự &ldquo;nổi loạn&rdquo; của ch&iacute;nh m&igrave;nh.</p>', 'Nước hoa Yves Saint Laurent Black', 'Nước hoa Yves Saint Laurent Black', 'Nước hoa Yves Saint Laurent Black', 'ana-nuty.png', 0, 0, 1, 1, 0, 100000, 13, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(7, 'Nước hoa Chloé Eau de Parfum', 2, 'nuoc-hoa-chloe-eau-de-parfum', '<p>Sản phẩm c&ugrave;ng t&ecirc;n mới n&agrave;y của Chlo&eacute; dường như cũng c&oacute; một nền tảng từ phi&ecirc;n bản nổi tiếng đi trước với hương hoa hồng rất dễ thương. Một m&ugrave;i hương nhẹ nh&agrave;ng, tươi nhưng lại v&ocirc; c&ugrave;ng quyến rũ v&agrave; c&oacute; chiều s&acirc;u, phi&ecirc;n bản nước hoa mới n&agrave;y kh&ocirc;ng hề tỏ ra l&eacute;p vế trước phi&ecirc;n bản cũ rất đ&igrave;nh đ&aacute;m của Chlo&eacute;.</p>\r\n\r\n<p>Cũng giống như điểm nhấn tại c&aacute;c d&ograve;ng Chlo&eacute;, bằng t&iacute;nh nghệ thuật v&agrave; sự ph&oacute;ng kho&aacute;ng trong thiết kế, nước hoa Chlo&eacute; Eau De Parfum n&agrave;y tỏ ra nữ t&iacute;nh v&agrave; c&oacute; n&eacute;t ph&aacute; c&aacute;ch, nhưng kh&ocirc;ng theo kiểu &quot;D&agrave;nh cho tất cả c&aacute;c c&ocirc; g&aacute;i&quot;. C&aacute;c cung bậc hương kết hợp h&ograve;a quyện với nhau một c&aacute;ch rất ri&ecirc;ng v&agrave; n&oacute; quyến rũ người d&ugrave;ng bằng cả hai c&aacute;ch: sự sang trọng thanh lịch v&agrave; sự ph&aacute; c&aacute;ch, t&aacute;o bạo.</p>\r\n\r\n<p>Đ&acirc;y l&agrave; loại nước hoa rất linh hoạt để sử dụng, n&oacute; được chủ đ&iacute;ch sản xuất cho nhu cầu sử dụng h&agrave;ng ng&agrave;y hơn l&agrave; trở th&agrave;nh m&ugrave;i hương mang t&iacute;nh đại diện duy nhất của một ai đ&oacute;. Sản phẩm được đưa ra v&agrave;o năm 2008. Chlo&eacute; Eau De Parfum được tinh chế bởi 2 nh&agrave; nước hoa l&agrave; Amandine Marie v&agrave; Michel Almairac.</p>\r\n\r\n<p>Chlo&eacute; Eau De Parfum l&agrave; sản phẩm tương đối dễ sử dụng v&agrave; th&iacute;ch hợp nhất sử dụng ban ng&agrave;y trong c&ocirc;ng việc, v&agrave;o m&ugrave;a xu&acirc;n, h&egrave;, thu</p>\r\n\r\n<p>Độ b&aacute;m m&ugrave;i tuyệt vời, từ 7-12 tiếng</p>\r\n\r\n<p>Độ tỏa m&ugrave;i kh&aacute;, ngang hoặc tr&ecirc;n khoảng c&aacute;ch 1 sải tay.</p>', 'Nước hoa Chloé Eau de Parfum', 'Nước hoa Chloé Eau de Parfum', 'Nước hoa Chloé Eau de Parfum', 'ana-nuty.png', 0, 0, 1, 1, 0, 150000, 40, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(8, 'Giày thể thao kiểu dáng Ultra boots', 5, 'giay-the-thao-kieu-dang-ultra-boots', '<p>ướng đến đối tượng l&agrave; những bạn trẻ y&ecirc;u th&iacute;ch vẻ đẹp năng động, tươi tắn, thương hiệu ch&uacute;ng t&ocirc;i đ&atilde; cho ra mắt bộ sưu tập gi&agrave;y với những thiết kế vừa hiện đại, vừa hợp xu hướng. Gi&agrave;y thể thao nữ &nbsp;được l&agrave;m từ chất liệu vải kết hợp da tổng hợp cao cấp với phần đế cao su chắc chắn, đảm bảo an to&agrave;n cho từng bước đi. Sở hữu kiểu d&aacute;ng trẻ trung, gi&agrave;y th&iacute;ch hợp phối c&ugrave;ng nhiều trang phục kh&aacute;c nhau.&nbsp;</p>\r\n\r\n<p><br />\r\nĐẶC ĐIỂM NỔI BẬT<br />\r\n&nbsp;Thiết kế đơn giản tinh tế, ph&ugrave; hợp với c&aacute;c bạn g&aacute;i trẻ trung, hiện đại<br />\r\nTrẻ trung, năng động c&ugrave;ng m&agrave;u sắc đơn giản gi&uacute;p dễ d&agrave;ng phối hợp với mọi phong c&aacute;ch quần &aacute;o, từ c&aacute; t&iacute;nh đến năng động, trẻ trung khi bạn đi d&atilde; ngoại, dạo phố, đi l&agrave;m.<br />\r\nChất liệu cao cấp<br />\r\nGi&agrave;y sử dụng chất liệu vải kết hợp cao su cao cấp với đường may tỉ mỉ, chắc chắn c&ugrave;ng phần đế &ecirc;m &aacute;i gi&uacute;p đảm b&agrave;o v&agrave; tự tin tr&ecirc;n từng bước đi của bạn<br />\r\nPh&ugrave; hợp nhiều phong c&aacute;ch trang phục<br />\r\nC&ugrave;ng gi&agrave;y sneaker bạn c&oacute; thể thoải m&aacute;i phối hợp với những set trang phục kh&aacute;c nhau. Một ch&uacute;t nhấn nh&aacute; bằng c&aacute;c phụ kiện như t&uacute;i x&aacute;ch, v&ograve;ng tay, đồng hồ, hẳn bạn sẽ trở n&ecirc;n nổi bật v&agrave; thu h&uacute;t hơn trong mắt mọi người.<br />\r\nTh&ocirc;ng tin bảo h&agrave;ng: Bảo h&agrave;ng 3 th&aacute;ng bằng h&oacute;a đơn.<br />\r\nHướng dẫn bảo quản gi&agrave;y<br />\r\n&nbsp;- Bảo quản gi&agrave;y sau khi sử dụng<br />\r\nBạn lưu &yacute; khi mua h&agrave;ng về, bạn đừng vứt hộp đi. Chẳng hạn, đ&ocirc;i gi&agrave;y đ&oacute; bạn chỉ đi v&agrave;o m&ugrave;a lạnh, th&igrave; khi kh&ocirc;ng d&ugrave;ng nữa, h&atilde;y nh&eacute;t giấy vụn v&agrave;o trong gi&agrave;y để giữ cho gi&agrave;y kh&ocirc;ng bị biến dạng, rồi bỏ gi&agrave;y v&agrave;o hộp. Như vậy, đ&ocirc;i gi&agrave;y của bạn sẽ y&ecirc;n vị trong hộp nhiều th&aacute;ng trời m&agrave; kh&ocirc;ng ảnh hưởng tới chất lượng của da.<br />\r\n&nbsp;- L&agrave;m mềm gi&agrave;y da<br />\r\nĐ&ocirc;i gi&agrave;y da để trong x&oacute; tủ n&agrave;o đ&oacute;, bỗng một ng&agrave;y nọ bạn muốn d&ugrave;ng đến n&oacute; nhưng da đ&atilde; bị cứng, co lại, khi đi c&oacute; cảm gi&aacute;c đau ch&acirc;n. Để l&agrave;m mềm da, h&atilde;y thoa một lớp kem vaseline l&ecirc;n gi&agrave;y trước khi đ&aacute;nh xi, gi&agrave;y sẽ mềm trở lại.<br />\r\nHoặc sau khi lấy gi&agrave;y trong tủ ra, bạn d&ugrave;ng giẻ mềm thấm nước vắt kh&ocirc;, lau to&agrave;n bộ đ&ocirc;i gi&agrave;y rồi để sau một đ&ecirc;m, da gi&agrave;y sẽ mềm hơn. Để da gi&agrave;y bền l&acirc;u, bạn hạn chế l&agrave;m ướt gi&agrave;y. Khi gi&agrave;y bị ướt kh&ocirc;ng n&ecirc;n hơ trước ngọn lửa hoặc phơi nắng, n&oacute; sẽ l&agrave;m gi&agrave;y bị cứng v&agrave; co lại, chỉ n&ecirc;n phơi gi&agrave;y ướt ở nơi r&acirc;m m&aacute;t, sau khi gi&agrave;y kh&ocirc; th&igrave; đ&aacute;nh xi để l&agrave;m cho da mềm trở lại.<br />\r\n&nbsp;- Khử m&ugrave;i h&ocirc;i trong gi&agrave;y<br />\r\nGi&agrave;y d&ugrave;ng cả ng&agrave;y thường bị mồ h&ocirc;i l&agrave;m ẩm ướt, g&acirc;y m&ugrave;i h&ocirc;i. N&ecirc;n đặt t&uacute;i đựng vi&ecirc;n chống ẩm v&agrave;o trong gi&agrave;y để h&uacute;t ẩm v&agrave; rắc phấn r&ocirc;m để khử m&ugrave;i. Để hạn chế m&ugrave;i h&ocirc;i v&agrave; sự ẩm ướt, h&atilde;y chọn tất ch&acirc;n loại tốt, c&oacute; khả năng h&uacute;t ẩm cao. D&ugrave;ng l&oacute;t gi&agrave;y khử m&ugrave;i cũng l&agrave; một phương ph&aacute;p tốt.</p>', 'Giày thể thao kiểu dáng Ultra boots', 'Giày thể thao kiểu dáng Ultra boots', 'Giày thể thao kiểu dáng Ultra boots', 'logo-delta.png', 0, 0, 1, 1, 0, 450000, 18, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(9, 'Son Ba Màu Maybelline Bitten 3.9g', 8, 'son-ba-mau-maybelline-bitten-3-9g', '<p><strong>Son Ba M&agrave;u&nbsp;Maybelline&nbsp;Bitten 3.9g</strong>&nbsp;-&nbsp;Kết cấu ba m&agrave;u độc đ&aacute;o tạo hiệu ứng&nbsp; m&ocirc;i ombre&nbsp; 3D thời thượng, m&agrave;u sắc loang nước sống động cho đ&ocirc;i m&ocirc;i căng mọng đẹp tự nhi&ecirc;n. C&ocirc;ng thức Ultra creamy dưỡng ẩm m&ocirc;i suốt 12h liền.</p>\r\n\r\n<p><strong>T&iacute;nh năng sản phẩm</strong></p>\r\n\r\n<ul>\r\n	<li>Hiệu ứng loang m&agrave;u nước tạo n&ecirc;n m&agrave;u sắc sống động cho đ&ocirc;i m&ocirc;i đẹp tự nhi&ecirc;n.</li>\r\n	<li>C&ocirc;ng thức Ultra Creamy cho đ&ocirc;i m&ocirc;i căng mọng, dưỡng ẩm m&ocirc;i suốt 12h liền.</li>\r\n	<li>3 Shades m&agrave;u OMBRE từ đậm sang nhạt trong 1 c&acirc;y son tạo hiệu ứng ombre m&ocirc;i chỉ với 1 lần t&ocirc; son.</li>\r\n</ul>\r\n\r\n<p><strong>Loại da ph&ugrave; hợp</strong></p>\r\n\r\n<p>Th&iacute;ch hợp cho mọi l&agrave;n da.</p>\r\n\r\n<p><strong>M&agrave;u sắc</strong></p>\r\n\r\n<ul>\r\n	<li>Son Ba M&agrave;u Maybelline Bitten - OR01</li>\r\n	<li>Son Ba M&agrave;u Maybelline Bitten - RD01</li>\r\n	<li>Son Ba M&agrave;u Maybelline Bitten - PK01</li>\r\n	<li>Son Ba M&agrave;u Maybelline Bitten - RD03</li>\r\n</ul>', 'Son Ba Màu Maybelline Bitten 3.9g', 'Son Ba Màu Maybelline Bitten 3.9g', 'Son Ba Màu Maybelline Bitten 3.9g', 'logo-cool-beauty.png', 0, 0, 1, 1, 0, 200000, 25, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(10, 'Dầu dưỡng da Phytoceuticals Argan', 1, 'bo-cham-soc-mong-usa-store-salon-shaper-big', '<p>Kiara Phytoceuticals l&agrave; thương hiệu chuy&ecirc;n về c&aacute;c sản phẩm dạng dầu chăm s&oacute;c da của &Uacute;c, thương hiệu n&agrave;y cũng gắn liền với nhiều loại dầu được y&ecirc;u th&iacute;ch như Macadamia oil, camelia oil, maracuja oil,&hellip; được sản xuất từ thi&ecirc;n nhi&ecirc;n, đảm bảo chất lượng, độ tinh khiết, độ tươi mới an to&agrave;n cho người d&ugrave;ng. Về dầu Argan, th&igrave; đ&acirc;y l&agrave; loại dầu dưỡng da đắt đỏ bậc nhất thế giới v&agrave; được v&iacute; như &ldquo;v&agrave;ng lỏng&rdquo; trong giới skincare với nhiều t&iacute;nh năng đặc trưng như của em Kiara Phytoceuticals Argan Oil n&agrave;y:</p>\r\n\r\n<p>Gi&agrave;u vitamin E, acid b&eacute;o h&agrave;m lượng cao gi&uacute;p l&agrave;m ẩm v&agrave; dịu da hiệu quả.<br />\r\nChống l&atilde;o h&oacute;a, cải thiện nếp nhăn, phục hồi độ đ&agrave;n hồi v&agrave; tăng sinh collagen<br />\r\nC&acirc;n bằng da bằng c&aacute;ch cung cấp độ ẩm tự nhi&ecirc;n, chữa l&agrave;nh c&aacute;c tế b&agrave;o hư, giảm vi&ecirc;m<br />\r\nGiảm th&acirc;m mụn, sẹo v&agrave; ngăn ngừa mụn mới<br />\r\nNgo&agrave;i ra, em n&agrave;y c&ograve;n c&oacute; c&ocirc;ng dụng rất tốt trong việc phục hồi t&oacute;c b&oacute;ng khỏe; nu&ocirc;i dưỡng m&oacute;ng kh&ocirc;ng bị kh&ocirc;, gi&ograve;n, dễ g&atilde;y; chữa ẩm cho m&ocirc;i kh&ocirc; nứt nẻ.<br />\r\nSử dụng dầu Argan trước khi makeup hay trộn v&agrave;o kem nền sẽ gi&uacute;p lớp nền được b&oacute;ng khỏe, da mịn m&agrave;ng v&agrave; kiềm dầu được tốt hơn.<br />\r\nSản phẩm được giới thiệu ho&agrave;n to&agrave;n l&agrave;nh t&iacute;nh, c&oacute; thể sử dụng được cho trẻ em v&agrave; phụ nữ c&oacute; thai .<br />\r\nKh&ocirc;ng chứa h&oacute;a chất, kh&ocirc;ng chất bảo quản, kh&ocirc;ng hương liệu, ph&ugrave; hợp với mọi loại da.<br />\r\nN&ecirc;n bảo quản sản phẩm trong m&ocirc;i trường m&aacute;t mẻ, dưới 25 độ C, v&agrave; tr&aacute;nh &aacute;nh nắng.</p>', 'Dầu dưỡng da Phytoceuticals Argan', 'Dầu dưỡng da Phytoceuticals Argan', 'Dầu dưỡng da Phytoceuticals Argan', 'ana-nuty.png', 0, 0, 1, 1, 0, 100000, 12, '2019-06-10 16:10:20', '2019-06-11 10:59:06'),
(11, 'Giày Thể Thao Nam Bitis Hunter X', 5, 'giay-the-thao-nam-biti-s-hunter-x', '<ul>\r\n	<li><strong>Gi&agrave;y Thể Thao Nam Biti&#39;s Hunter X Liteflex&nbsp;</strong>với c&ocirc;ng nghệ đế LiteFlex độc quyền từ Biti&#39;s Hunter ứng dụng c&ocirc;ng ngh&ecirc; sản xuất IP tr&ecirc;n nền chất liệu Phylon kh&ocirc;ng chỉ gi&uacute;p đ&ocirc;i ch&acirc;n cảm gi&aacute;c &quot;Nhẹ nư bay&quot; m&agrave; c&ograve;n tăng vượt bậc độ đ&agrave;n hồi, tạo độ linh hoạt v&agrave; tự tin hơn khi chiều cao đế đạt tới 5cm.</li>\r\n	<li>B&ecirc;n cạnh đ&oacute;, d&ograve;ng cao cấp Biti&#39;s Hunter X LiteFlex tiếp x&uacute;c kế thừa những ưu điểm vượt trội về mặt c&ocirc;ng nghệ v&agrave; thiết kế từ c&aacute;c phi&ecirc;n bản tiền nhiệm:\r\n	<ul>\r\n		<li>Tem TPU định h&igrave;nh v&agrave; trợ lực g&oacute;t ch&acirc;n.</li>\r\n		<li>Mũ quai liteknit dệt c&oacute; độ co d&atilde;n, tho&aacute;ng kh&iacute; tối đa.</li>\r\n		<li>Đế l&oacute;t kh&aacute;ng khuẩn, c&ocirc;ng nghệ 6 điểm gi&uacute;p massage l&ograve;ng b&agrave;n ch&acirc;n.</li>\r\n		<li>Đế tiếp đất cao su cấu tr&uacute;c chia r&atilde;nh v&agrave; gồ ghề đảm bảo t&iacute;nh ma s&aacute;t tốt nhất tr&ecirc;n mọi địa h&igrave;nh.</li>\r\n	</ul>\r\n	</li>\r\n	<li>Bộ đế LitFlex:\r\n	<ul>\r\n		<li>Chất liệu Phylon ứng dụng c&ocirc;ng nghệ IP &quot;Nhẹ như bay&quot; chỉ từ 204g.</li>\r\n		<li>Chiều cao đế đạt tới 5cm.</li>\r\n		<li>Độ đ&agrave;n hồi &gt;40%.</li>\r\n	</ul>\r\n	</li>\r\n</ul>', 'Giày Thể Thao Nam Bitis Hunter X', 'Giày Thể Thao Nam Bitis Hunter X', 'Giày Thể Thao Nam Bitis Hunter X', 'logo-delta.png', 0, 0, 1, 1, 0, 500000, 27, '2019-06-11 09:32:56', '2019-06-11 11:00:50'),
(12, 'Giày Thể Thao Cao Cấp Nam Bitis Hunter Core', 5, 'giay-the-thao-cao-cap-nam-biti-s-hunter-core', '<p><strong>Biti&rsquo;s Hunter Core &ndash; 2K18 &ndash; MIST GREY</strong></p>\r\n\r\n<p>THẾ HỆ HO&Agrave;N TO&Agrave;N MỚI</p>\r\n\r\n<p>CAO HƠN X &Ecirc;M HƠN X COOL HƠN</p>\r\n\r\n<p>C&ocirc;ng nghệ đế LiteFoam độc quyền từ Biti&rsquo;s Hunter mang đến những cải tiến vượt bậc từ bộ đến &ldquo;Nhẹ Như Bay&rdquo; chất liệu Phylon quen thuộc nay th&ecirc;m phần &ecirc;m &aacute;i v&agrave; tăng chiều cao đế l&ecirc;n đến 4,3cm mang đến cảm gi&aacute;c đầy mới mẻ,&nbsp;<br />\r\n<br />\r\nD&ograve;ng sản phẩm cơ bản vẫn tiếp tục giữ những ưu điểm trong t&iacute;nh năng được ưa chuộng:</p>\r\n\r\n<p>- Mũ quai dệt Liteknit nhẹ v&agrave; tho&aacute;ng kh&iacute; tối đa.<br />\r\n- Miếng l&oacute;t EVA tăng trải nghiệm &ecirc;m &aacute;i ngay khi mang.</p>\r\n\r\n<p>- Đế tiếp phủ to&agrave;n bộ cao su đảm bảo t&iacute;nh ma s&aacute;t</p>\r\n\r\n<p>-&nbsp;<strong>Bộ</strong>&nbsp;<strong>đế</strong><strong>&nbsp;Lite-Foam</strong></p>\r\n\r\n<ul>\r\n	<li>Chất liệu Phylon &ldquo;nhẹ như bay&rdquo;</li>\r\n</ul>\r\n\r\n<p>Chiều cao đế đạt tới 4.3cm</p>', 'Giày Thể Thao Cao Cấp Nam Bitis Hunter Core', 'Giày Thể Thao Cao Cấp Nam Bitis Hunter Core', 'Giày Thể Thao Cao Cấp Nam Bitis Hunter Core', 'dsc-0223-1024x1024.jpg', 0, 0, 1, 1, 0, 200000, 71, '2019-06-11 09:38:53', '2019-06-11 11:00:50');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_detail`
--

CREATE TABLE `products_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `products_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_detail`
--

INSERT INTO `products_detail` (`id`, `price`, `amount`, `products_id`, `created_at`, `updated_at`) VALUES
(7, 100000, 20, 2, '2019-06-10 00:03:32', '2019-06-10 00:03:32'),
(9, 350000, 3, 3, '2019-06-10 00:07:47', '2019-06-10 00:07:47'),
(10, 50000, 10, 4, '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(11, 60000, 20, 4, '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(12, 100000, 4, 5, '2019-06-10 00:32:29', '2019-06-11 09:16:37'),
(13, 150000, 5, 5, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(14, 200000, 1, 5, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(15, 200000, 10, 6, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(16, 100000, 2, 6, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(17, 150000, 1, 6, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(18, 200000, 9, 7, '2019-06-10 00:44:24', '2019-06-10 01:31:41'),
(19, 150000, 25, 7, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(20, 300000, 5, 7, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(21, 500000, 10, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(22, 450000, 5, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(23, 600000, 2, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(24, 700000, 1, 8, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(25, 200000, 9, 9, '2019-06-10 15:50:21', '2019-06-10 22:20:34'),
(26, 300000, 15, 9, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(27, 200000, 5, 10, '2019-06-10 16:10:20', '2019-06-11 10:59:06'),
(28, 100000, 2, 10, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(29, 150000, 5, 10, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(30, 500000, 5, 11, '2019-06-11 09:32:56', '2019-06-11 11:00:50'),
(31, 550000, 15, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(32, 600000, 5, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(33, 650000, 2, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(34, 200000, 7, 12, '2019-06-11 09:38:53', '2019-06-11 10:27:36'),
(35, 300000, 8, 12, '2019-06-11 09:38:53', '2019-06-11 11:00:50'),
(36, 250000, 12, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(37, 200000, 11, 12, '2019-06-11 09:38:53', '2019-06-11 10:59:06'),
(38, 200000, 18, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(39, 600000, 15, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products_properties`
--

CREATE TABLE `products_properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_detail_id` int(10) UNSIGNED NOT NULL,
  `properties_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products_properties`
--

INSERT INTO `products_properties` (`id`, `products_detail_id`, `properties_id`, `created_at`, `updated_at`) VALUES
(9, 7, 1, '2019-06-10 00:03:32', '2019-06-10 00:03:32'),
(10, 7, 8, '2019-06-10 00:03:32', '2019-06-10 00:03:32'),
(13, 9, 2, '2019-06-10 00:07:47', '2019-06-10 00:07:47'),
(14, 9, 6, '2019-06-10 00:07:47', '2019-06-10 00:07:47'),
(15, 10, 5, '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(16, 11, 8, '2019-06-10 00:11:16', '2019-06-10 00:11:16'),
(17, 12, 1, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(18, 12, 6, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(19, 13, 2, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(20, 13, 5, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(21, 14, 3, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(22, 14, 7, '2019-06-10 00:32:29', '2019-06-10 00:32:29'),
(23, 15, 5, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(24, 16, 6, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(25, 17, 8, '2019-06-10 00:40:03', '2019-06-10 00:40:03'),
(26, 18, 5, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(27, 18, 1, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(28, 19, 6, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(29, 19, 3, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(30, 20, 7, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(31, 20, 1, '2019-06-10 00:44:24', '2019-06-10 00:44:24'),
(32, 21, 9, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(33, 22, 10, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(34, 23, 11, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(35, 24, 12, '2019-06-10 01:14:35', '2019-06-10 01:14:35'),
(36, 25, 13, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(37, 26, 13, '2019-06-10 15:50:21', '2019-06-10 15:50:21'),
(38, 27, 1, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(39, 27, 5, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(40, 28, 2, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(41, 28, 6, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(42, 29, 4, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(43, 29, 5, '2019-06-10 16:10:20', '2019-06-10 16:10:20'),
(44, 30, 9, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(45, 31, 10, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(46, 32, 11, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(47, 33, 12, '2019-06-11 09:32:56', '2019-06-11 09:32:56'),
(48, 34, 9, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(49, 34, 17, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(50, 35, 9, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(51, 35, 18, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(52, 36, 9, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(53, 36, 19, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(54, 37, 9, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(55, 37, 20, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(56, 38, 12, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(57, 38, 17, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(58, 39, 10, '2019-06-11 09:38:53', '2019-06-11 09:38:53'),
(59, 39, 19, '2019-06-11 09:38:53', '2019-06-11 09:38:53');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `properties`
--

CREATE TABLE `properties` (
  `id` int(10) UNSIGNED NOT NULL,
  `value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `properties_type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `properties`
--

INSERT INTO `properties` (`id`, `value`, `properties_type_id`, `created_at`, `updated_at`) VALUES
(1, 'Hồng', 1, '2019-06-09 23:53:05', '2019-06-09 23:53:05'),
(2, 'Cam', 1, '2019-06-09 23:53:05', '2019-06-09 23:53:05'),
(3, 'Tím', 1, '2019-06-09 23:53:05', '2019-06-09 23:53:05'),
(4, 'Đỏ', 1, '2019-06-09 23:53:05', '2019-06-09 23:53:05'),
(5, '100ML', 2, '2019-06-09 23:54:01', '2019-06-09 23:54:01'),
(6, '200Ml', 2, '2019-06-09 23:54:01', '2019-06-09 23:54:01'),
(7, '300ML', 2, '2019-06-09 23:54:01', '2019-06-09 23:54:01'),
(8, '500ML', 2, '2019-06-09 23:54:01', '2019-06-09 23:54:01'),
(9, '39', 3, '2019-06-10 01:12:22', '2019-06-10 01:12:22'),
(10, '40', 3, '2019-06-10 01:12:22', '2019-06-10 01:12:22'),
(11, '41', 3, '2019-06-10 01:12:22', '2019-06-10 01:12:22'),
(12, '42', 3, '2019-06-10 01:12:22', '2019-06-10 01:12:22'),
(13, 'đỏ', 4, '2019-06-10 15:45:49', '2019-06-10 15:45:49'),
(14, 'cam', 4, '2019-06-10 15:45:49', '2019-06-10 15:45:49'),
(15, 'hồng', 4, '2019-06-10 15:45:49', '2019-06-10 15:45:49'),
(16, 'tím', 4, '2019-06-10 15:45:49', '2019-06-10 15:45:49'),
(17, 'đen', 5, '2019-06-11 09:34:48', '2019-06-11 09:34:48'),
(18, 'trắng', 5, '2019-06-11 09:34:48', '2019-06-11 09:34:48'),
(19, 'cam', 5, '2019-06-11 09:34:48', '2019-06-11 09:34:48'),
(20, 'đỏ', 5, '2019-06-11 09:34:48', '2019-06-11 09:34:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `properties_type`
--

CREATE TABLE `properties_type` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `systems_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `properties_type`
--

INSERT INTO `properties_type` (`id`, `name`, `systems_id`, `created_at`, `updated_at`) VALUES
(1, 'Color', 2, '2019-06-09 23:53:05', '2019-06-09 23:53:05'),
(2, 'Dung tích', 2, '2019-06-09 23:54:01', '2019-06-09 23:54:01'),
(3, 'Size', 3, '2019-06-10 01:12:22', '2019-06-10 01:12:22'),
(4, 'Màu son', 4, '2019-06-10 15:45:49', '2019-06-10 15:45:49'),
(5, 'màu', 3, '2019-06-11 09:34:48', '2019-06-11 09:34:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `systems_id` int(10) UNSIGNED NOT NULL,
  `url_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `slides`
--

INSERT INTO `slides` (`id`, `systems_id`, `url_image`, `url`, `created_at`, `updated_at`) VALUES
(1, 2, 'slider_1ana-nuty.jpg', '#', '2019-06-10 00:12:28', '2019-06-10 00:12:28'),
(2, 2, 'slider_1ana-nuty.jpg', '#', '2019-06-10 00:12:45', '2019-06-10 00:12:45'),
(3, 3, 'slider_2.jpg', '#', '2019-06-10 00:55:59', '2019-06-10 00:55:59'),
(4, 3, 'slider_1.jpg', '#', '2019-06-10 00:56:15', '2019-06-10 00:56:15'),
(5, 1, 'slider_1 (1).png', '#', '2019-06-11 09:24:20', '2019-06-11 09:24:20'),
(6, 1, 'slideshow_1.jpg', '#', '2019-06-11 09:25:02', '2019-06-11 09:25:02'),
(7, 1, 'slideshow_3.jpg', '#', '2019-06-11 09:25:20', '2019-06-11 09:25:20');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `systems`
--

CREATE TABLE `systems` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortcut_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `share_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zalo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlights` tinyint(1) NOT NULL,
  `display` tinyint(1) NOT NULL,
  `script` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `systems`
--

INSERT INTO `systems` (`id`, `name`, `logo`, `shortcut_logo`, `share_image`, `title`, `seo_keyword`, `seo_description`, `facebook`, `instagram`, `zalo`, `youtube`, `website`, `address`, `phone`, `email`, `highlights`, `display`, `script`, `created_at`, `updated_at`) VALUES
(1, 'BKMART', 'bkmart.png', 'icon-short-cut.jpg', 'bkmart.png', 'BKMART', 'từ khóa', 'mô tả', 'https://', 'https://', 'https://', 'https://', '', 'địa chỉ', 'số điện thoại', 'namnguyen20132674@gmail.com', 0, 1, 'javascript', NULL, '2019-06-10 01:28:38'),
(2, 'Ana Nuty', 'ana-nuty.png', 'icon-short-cut.jpg', 'ana-nuty.png', 'Ana Nuty Chuyên Mỹ Phẩm Làm Đẹp', 'Ana Nuty Chuyên Mỹ Phẩm Làm Đẹp', 'Ana Nuty Chuyên Mỹ Phẩm Làm Đẹp', 'Facebook', 'i', 'Zalo', 'y', 'ant-nuty', 'Hà Nội', '0848384333', 'admin2@gmail.com', 1, 1, 'script', '2019-06-09 23:44:23', '2019-06-10 01:24:40'),
(3, 'Delta Shop', 'logo-delta.png', 'icon-short-cut.jpg', 'logo-delta.png', 'Delta Shop', 'Delta Shop', 'Delta Shop', 'Delta Shop', 'Delta Shop', 'Delta Shop', 'Delta Shop', 'delta-shop', 'Hà Nội', '0848384333', 'admin@gmail.com', 0, 1, 'mã nhúng', '2019-06-10 00:49:39', '2019-06-10 00:58:48'),
(4, 'Cool Beauty', 'logo-cool-beauty.png', 'icon-short-cut.jpg', 'logo-cool-beauty.png', 'Cool Beauty', 'Cool Beauty', 'Cool Beauty', 'Cool Beauty', 'Cool Beauty', 'Cool Beauty', 'Cool Beauty', '2-cool-beauty', 'Hà Nội', '0848384333', 'coolbeauty@gmail.com', 0, 1, 'script', '2019-06-10 15:37:04', '2019-06-10 15:41:10');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tag_categories`
--

CREATE TABLE `tag_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `root_categorie_id` int(10) UNSIGNED NOT NULL,
  `categorie_id` int(10) UNSIGNED NOT NULL,
  `highlights` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tag_categories`
--

INSERT INTO `tag_categories` (`id`, `root_categorie_id`, `categorie_id`, `highlights`, `created_at`, `updated_at`) VALUES
(3, 6, 1, 1, '2019-06-10 01:26:55', '2019-06-10 01:26:55'),
(4, 6, 2, 1, '2019-06-10 01:26:55', '2019-06-10 01:26:55');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `systems_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `systems_id`, `name`, `email`, `password`, `phone`, `role`, `parent_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'Nam Nguyễn', 'admin@gmail.com', '$2y$10$gJ0XKi4FHcTmXJawrCNG5uDB.bcNRvGH9hooYvh189/M3gJLX39EK', '0848384333', 1, 1, NULL, NULL, NULL),
(2, 2, 'Nguyễn Hoài Nam', 'admin2@gmail.com', '$2y$10$eY48xmYGfJVaP2VJHS5QmetQg1paNvAhyU5ywpUG70L7teURXfiLy', '0848384333', 1, 1, NULL, '2019-06-09 23:45:13', '2019-06-09 23:45:13'),
(5, 3, 'Nguyễn Hoài Nam', 'admin3@gmail.com', '$2y$10$GuNd.BkU5yxCkSxI3o6SdujKA0O3nX2qI.eSgaTNTSE23FKomJm3C', '0848384333', 1, 1, NULL, '2019-06-10 00:54:55', '2019-06-10 00:54:55'),
(6, 4, 'Cool Beauty', 'coolbeauty@gmail.com', '$2y$10$G9DZYZfN.44GmXfQ.YZBW.dZ6LmAW8cy3ohRMnjpBdVVy8HgHzDxG', '0848384333', 1, 1, NULL, '2019-06-10 15:38:19', '2019-06-10 15:38:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users_clients`
--

CREATE TABLE `users_clients` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users_clients`
--

INSERT INTO `users_clients` (`id`, `name`, `email`, `phone`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn Hoài Nam', 'namnguyen@gmail.com', '0848384333', '$2y$10$FbRvBBctCu/dfE5Su3My0ullOUWhoj.PC5v7tM3s8Vh5JndbMrOry', NULL, '2019-06-10 00:08:56', '2019-06-10 00:08:56'),
(2, 'Nguyễn Hoài Nam', 'admin@gmail.com', '0848384333', '$2y$10$EX/KMeCXJuJsuPKYU9icB./ZhUi.//630KxPtW7rAvRXqPac0X3Ve', NULL, '2019-06-10 01:32:09', '2019-06-10 01:32:09');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_systems_id_foreign` (`systems_id`);

--
-- Chỉ mục cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedbacks_products_id_foreign` (`products_id`),
  ADD KEY `feedbacks_users_id_foreign` (`users_id`);

--
-- Chỉ mục cho bảng `follow_systems`
--
ALTER TABLE `follow_systems`
  ADD PRIMARY KEY (`id`),
  ADD KEY `follow_systems_users_clients_id_foreign` (`users_clients_id`),
  ADD KEY `follow_systems_systems_id_foreign` (`systems_id`);

--
-- Chỉ mục cho bảng `images_products`
--
ALTER TABLE `images_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_products_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `image_shares`
--
ALTER TABLE `image_shares`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_detail_orders_id_foreign` (`orders_id`),
  ADD KEY `orders_detail_products_detail_id_foreign` (`products_detail_id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_categories_id_foreign` (`categories_id`);

--
-- Chỉ mục cho bảng `products_detail`
--
ALTER TABLE `products_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_detail_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `products_properties`
--
ALTER TABLE `products_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_properties_products_detail_id_foreign` (`products_detail_id`),
  ADD KEY `products_properties_properties_id_foreign` (`properties_id`);

--
-- Chỉ mục cho bảng `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_properties_type_id_foreign` (`properties_type_id`);

--
-- Chỉ mục cho bảng `properties_type`
--
ALTER TABLE `properties_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `properties_type_systems_id_foreign` (`systems_id`);

--
-- Chỉ mục cho bảng `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slides_systems_id_foreign` (`systems_id`);

--
-- Chỉ mục cho bảng `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tag_categories`
--
ALTER TABLE `tag_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tag_categories_root_categorie_id_foreign` (`root_categorie_id`),
  ADD KEY `tag_categories_categorie_id_foreign` (`categorie_id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_systems_id_foreign` (`systems_id`);

--
-- Chỉ mục cho bảng `users_clients`
--
ALTER TABLE `users_clients`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_clients_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `follow_systems`
--
ALTER TABLE `follow_systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `images_products`
--
ALTER TABLE `images_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT cho bảng `image_shares`
--
ALTER TABLE `image_shares`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `products_detail`
--
ALTER TABLE `products_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT cho bảng `products_properties`
--
ALTER TABLE `products_properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT cho bảng `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `properties_type`
--
ALTER TABLE `properties_type`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `systems`
--
ALTER TABLE `systems`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tag_categories`
--
ALTER TABLE `tag_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `users_clients`
--
ALTER TABLE `users_clients`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_systems_id_foreign` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `feedbacks`
--
ALTER TABLE `feedbacks`
  ADD CONSTRAINT `feedbacks_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedbacks_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users_clients` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `follow_systems`
--
ALTER TABLE `follow_systems`
  ADD CONSTRAINT `follow_systems_systems_id_foreign` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `follow_systems_users_clients_id_foreign` FOREIGN KEY (`users_clients_id`) REFERENCES `users_clients` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `images_products`
--
ALTER TABLE `images_products`
  ADD CONSTRAINT `images_products_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `orders_detail`
--
ALTER TABLE `orders_detail`
  ADD CONSTRAINT `orders_detail_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_detail_products_detail_id_foreign` FOREIGN KEY (`products_detail_id`) REFERENCES `products_detail` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_categories_id_foreign` FOREIGN KEY (`categories_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products_detail`
--
ALTER TABLE `products_detail`
  ADD CONSTRAINT `products_detail_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products_properties`
--
ALTER TABLE `products_properties`
  ADD CONSTRAINT `products_properties_products_detail_id_foreign` FOREIGN KEY (`products_detail_id`) REFERENCES `products_detail` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `products_properties_properties_id_foreign` FOREIGN KEY (`properties_id`) REFERENCES `properties` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `properties`
--
ALTER TABLE `properties`
  ADD CONSTRAINT `properties_properties_type_id_foreign` FOREIGN KEY (`properties_type_id`) REFERENCES `properties_type` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `properties_type`
--
ALTER TABLE `properties_type`
  ADD CONSTRAINT `properties_type_systems_id_foreign` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `slides`
--
ALTER TABLE `slides`
  ADD CONSTRAINT `slides_systems_id_foreign` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `tag_categories`
--
ALTER TABLE `tag_categories`
  ADD CONSTRAINT `tag_categories_categorie_id_foreign` FOREIGN KEY (`categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `tag_categories_root_categorie_id_foreign` FOREIGN KEY (`root_categorie_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_systems_id_foreign` FOREIGN KEY (`systems_id`) REFERENCES `systems` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
