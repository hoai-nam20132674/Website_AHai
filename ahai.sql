-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 31, 2021 lúc 11:46 AM
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
-- Cơ sở dữ liệu: `ahai`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ads`
--

CREATE TABLE `ads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` tinyint(1) NOT NULL,
  `href` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `stt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ads`
--

INSERT INTO `ads` (`id`, `type`, `href`, `url`, `target`, `display`, `stt`, `created_at`, `updated_at`) VALUES
(1, 2, NULL, 'GyPhS3LugjsSHkgT1tjb.png', '_self', 1, NULL, '2021-03-31 01:10:35', '2021-03-31 01:53:08'),
(2, 1, '#', 'U6xnR9eyr69B0zhU3Jxg.png', '_self', 1, NULL, '2021-03-31 01:35:33', '2021-03-31 01:35:33'),
(3, 2, NULL, 'gWx8HOQuCnC2sPkxeLHk.png', '_self', 1, NULL, '2021-03-31 02:31:04', '2021-03-31 02:31:04'),
(4, 2, NULL, '163bd81bc1a24b94de0b6a6dc89deb3a_xxhdpi.jpg', '_self', 1, NULL, '2021-03-31 02:32:48', '2021-03-31 02:32:48'),
(5, 2, NULL, '4b6ae48487e2f4f87cbe8f9ddfaad6d0_xxhdpi.jpg', '_self', 1, NULL, '2021-03-31 02:33:03', '2021-03-31 02:33:03'),
(6, 1, NULL, '6GmTeZHHWeRDQzPKwnBT.png', '_self', 1, NULL, '2021-03-31 02:33:59', '2021-03-31 02:33:59');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bcids`
--

CREATE TABLE `bcids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog_cates`
--

CREATE TABLE `blog_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `rate` tinyint(1) DEFAULT NULL,
  `messages` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `menus`
--

CREATE TABLE `menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_id` int(11) DEFAULT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `menus`
--

INSERT INTO `menus` (`id`, `title`, `url`, `icon`, `target`, `type`, `type_id`, `parent_id`, `stt`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', NULL, NULL, '_self', 'custom-link', 0, NULL, 0, '2021-03-23 11:34:46', '2021-03-23 11:34:46'),
(2, 'Thời trang nam', 'thoi-trang-nam-pc1', 'undefined', '_self', 'productCategory', 1, NULL, 1, '2021-03-23 11:34:46', '2021-03-23 11:34:46'),
(3, 'Thời trang nữ', 'thoi-trang-nu-pc2', 'undefined', '_self', 'productCategory', 2, NULL, 2, '2021-03-23 11:34:47', '2021-03-23 11:34:47'),
(4, 'Thiết bị điện tử', 'thiet-bi-dien-tu-pc3', 'undefined', '_self', 'productCategory', 3, NULL, 3, '2021-03-23 11:34:47', '2021-03-23 11:34:47'),
(5, 'Phụ kiện thời trang', 'phu-kien-thoi-trang-pc10', 'undefined', '_self', 'productCategory', 10, NULL, 4, '2021-03-23 11:34:47', '2021-03-23 11:34:47'),
(6, 'Thể thao du lịch', 'the-thao-du-lich-pc12', 'undefined', '_self', 'productCategory', 12, NULL, 5, '2021-03-23 11:34:48', '2021-03-23 11:34:48'),
(7, 'Nhà sách online', 'nha-sach-online-pc16', 'undefined', '_self', 'productCategory', 16, NULL, 6, '2021-03-23 11:34:48', '2021-03-23 11:34:48');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_06_095610_create_product_cates_table', 1),
(5, '2020_07_06_095616_create_products_table', 1),
(6, '2020_07_06_095747_create_blog_cates_table', 1),
(7, '2020_07_06_095800_create_blogs_table', 1),
(8, '2020_07_06_095845_create_pages_table', 1),
(9, '2020_07_06_095913_create_menus_table', 1),
(10, '2020_07_06_101633_create_product_images_table', 1),
(11, '2020_07_11_114458_create_b_c_i_d_s_table', 1),
(12, '2020_07_11_124311_create_p_c_i_d_s_table', 1),
(13, '2020_07_15_101004_create_systems_table', 1),
(14, '2020_07_19_180327_create_contacts_table', 1),
(15, '2021_03_11_035924_create_orders_table', 1),
(16, '2021_03_11_040514_create_order_details_table', 1),
(17, '2021_03_15_021114_create_sliders_table', 1),
(18, '2021_03_31_065751_create_feedback_table', 2),
(19, '2021_03_31_070545_create_ads_table', 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messages` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `messages`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn hoài nam', '+84848384333', 'Lê thanh thị', NULL, 0, '2021-03-28 19:48:11', '2021-03-28 19:48:11'),
(9, 'Nguyễn Hoài Nam 5', '0848384335', 'Hà Nội', NULL, 0, '2021-03-29 05:42:56', '2021-03-29 05:42:56'),
(10, 'Nguyễn Hoài Nam', '0842829222', 'Hồ Chí Minh quận 1', 'Giao hàng ngay', 0, '2021-03-30 03:03:06', '2021-03-30 03:03:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orders_id` bigint(20) UNSIGNED NOT NULL,
  `products_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `amount` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `order_details`
--

INSERT INTO `order_details` (`id`, `orders_id`, `products_id`, `comment`, `status`, `amount`, `qty`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 1, 200000, 1, '2021-03-28 19:48:11', '2021-03-28 19:48:11'),
(2, 1, 8, NULL, 0, 1, 1, '2021-03-28 19:48:11', '2021-03-28 19:48:11'),
(14, 9, 1, NULL, 0, 200000, 1, '2021-03-29 05:42:56', '2021-03-29 05:42:56'),
(15, 10, 7, NULL, 0, 3, 3, '2021-03-30 03:03:06', '2021-03-30 03:03:06');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Cấu trúc bảng cho bảng `pcids`
--

CREATE TABLE `pcids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `pcids`
--

INSERT INTO `pcids` (`id`, `product_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2021-03-23 12:46:45', '2021-03-23 12:46:45'),
(3, 2, 2, '2021-03-24 21:43:43', '2021-03-24 21:43:43'),
(4, 3, 2, '2021-03-25 21:13:45', '2021-03-25 21:13:45'),
(5, 4, 2, '2021-03-25 21:19:47', '2021-03-25 21:19:47'),
(6, 5, 2, '2021-03-25 21:20:40', '2021-03-25 21:20:40'),
(7, 6, 2, '2021-03-25 21:21:11', '2021-03-25 21:21:11'),
(8, 7, 2, '2021-03-25 21:21:36', '2021-03-25 21:21:36'),
(9, 8, 2, '2021-03-25 21:22:08', '2021-03-25 21:22:08'),
(10, 9, 2, '2021-03-25 21:23:02', '2021-03-25 21:23:02'),
(11, 10, 2, '2021-03-25 21:23:27', '2021-03-25 21:23:27'),
(13, 11, 2, '2021-03-26 19:54:51', '2021-03-26 19:54:51'),
(14, 1, 10, '2021-03-27 00:47:30', '2021-03-27 00:47:30'),
(15, 12, 2, '2021-03-27 00:49:26', '2021-03-27 00:49:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `hot` tinyint(1) NOT NULL,
  `best_sale` tinyint(1) NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `title`, `content`, `short_description`, `seo_description`, `seo_keyword`, `url`, `display`, `hot`, `best_sale`, `avata`, `price`, `sale`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 69', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí', '<p><img alt=\"\" src=\"http://localhost:8000/uploads/images/products/avatars/7fc7c76d-1144-46cb-8660-da82c7cda379.jpg\" style=\"width:100%\" /></p>', '<p><img alt=\"heart\" src=\"http://localhost:8000/auth/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />&nbsp;V&agrave;i lụa mềm mịn</p>\r\n\r\n<p><img alt=\"heart\" src=\"http://localhost:8000/auth/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />&nbsp;Tho&aacute;ng m&aacute;t sexy</p>\r\n\r\n<p><img alt=\"heart\" src=\"http://localhost:8000/auth/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />&nbsp;Miễn ph&iacute; giao h&agrave;ng với đơn &gt;500.000đ</p>\r\n\r\n<p><img alt=\"heart\" src=\"http://localhost:8000/auth/ckeditor/plugins/smiley/images/heart.png\" style=\"height:23px; width:23px\" title=\"heart\" />&nbsp;Giao h&agrave;ng trong 2-3 ng&agrave;y</p>\r\n\r\n<p><img alt=\"\" src=\"http://localhost:8000/uploads/images/products/avatars/untitled-1_825a75672b664bbca445cfd0f097c38e_master.jpg\" style=\"width:100%\" /></p>', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí', 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-pi1', 1, 1, 1, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 250000, 200000, 1, '2021-03-23 12:46:45', '2021-03-27 01:17:09'),
(2, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 2', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 2', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 2</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 2</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-2-pi2', 1, 0, 0, '3.jpg', 150000, 50000, 1, '2021-03-24 21:43:43', '2021-03-24 21:43:43'),
(3, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bív3', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bív3', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 3</p>', '<h1>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 3</h1>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-biv3-pi3', 1, 0, 0, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 200000, 100000, 1, '2021-03-25 21:13:45', '2021-03-25 21:13:45'),
(4, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 4', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 4', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 4</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 4</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-4-pi4', 1, 0, 0, '5.jpg', 1, 1, 1, '2021-03-25 21:19:47', '2021-03-25 21:19:47'),
(5, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 5', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 5', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 4</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 4</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-5-pi5', 1, 0, 0, '2.jpg', 1, 1, 1, '2021-03-25 21:20:40', '2021-03-25 21:20:40'),
(6, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 6', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 6', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 6</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 6</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-6-pi6', 1, 0, 0, '1.jpg', 2, 2, 1, '2021-03-25 21:21:11', '2021-03-25 21:21:11'),
(7, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 7', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 7', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 7</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 7</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-7-pi7', 1, 1, 1, '2.jpg', 1, 1, 1, '2021-03-25 21:21:36', '2021-03-26 19:52:53'),
(8, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 8', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 8', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 8</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 8</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-8-pi8', 1, 0, 0, '3.jpg', 1, 1, 1, '2021-03-25 21:22:08', '2021-03-25 21:22:08'),
(9, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 9', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 9', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 9</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 9</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-9-pi9', 1, 1, 1, '10325361457_2032220550.jpg', 12, 11, 1, '2021-03-25 21:23:02', '2021-03-26 19:52:34'),
(10, 2, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 10', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 10', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 10</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 10</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-10-pi10', 1, 1, 1, '10325364309_2032220550.jpg', 11, 1, 1, '2021-03-25 21:23:27', '2021-03-26 19:52:18'),
(11, 3, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 11', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 11', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 11</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 11</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-11-pi11', 1, 1, 1, '10649895812_2032220550.jpg', 1, 1, 1, '2021-03-25 21:23:54', '2021-03-26 19:52:02'),
(12, 3, 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 12', 'Đồ Ngủ Sexy 2 Dây Gợi Cảm Đen Huyền Bí 12', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 12</p>', '<p>Đồ Ngủ Sexy 2 D&acirc;y Gợi Cảm Đen Huyền B&iacute; 12</p>', NULL, NULL, 'do-ngu-sexy-2-day-goi-cam-den-huyen-bi-12-pi12', 1, 0, 0, '12330025416_2032220550.jpg', 100000, 15000, 1, '2021-03-27 00:49:26', '2021-03-27 00:49:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_cates`
--

CREATE TABLE `product_cates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_cates`
--

INSERT INTO `product_cates` (`id`, `parent_id`, `name`, `url`, `title`, `seo_description`, `seo_keyword`, `avata`, `display`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Thời trang nam', 'thoi-trang-nam-pc1', 'Thời trang nam', 'Thời trang nam', 'Thời trang nam', 'thời trang nam.png', 1, '2021-03-23 11:10:38', '2021-03-23 11:10:38'),
(2, NULL, 'Thời trang nữ', 'thoi-trang-nu-pc2', 'Thời trang nữ', 'Thời trang nữ', 'Thời trang nữ', 'thời trang nữ.png', 1, '2021-03-23 11:11:23', '2021-03-23 11:11:23'),
(3, NULL, 'Thiết bị điện tử', 'thiet-bi-dien-tu-pc3', 'Thiết bị điện tử', 'Thiết bị điện tử', 'Thiết bị điện tử', 'thiết bị điện tử.png', 1, '2021-03-23 11:12:19', '2021-03-23 11:12:20'),
(4, NULL, 'Điện thoại phụ kiện', 'dien-thoai-phu-kien-pc4', 'Điện thoại phụ kiện', 'Điện thoại phụ kiện', 'Điện thoại phụ kiện', 'điện thoại phụ kiên.png', 1, '2021-03-23 11:14:09', '2021-03-23 11:14:10'),
(5, NULL, 'Máy tính laptop', 'may-tinh-laptop-pc5', 'Máy tính laptop', 'Máy tính laptop', 'Máy tính laptop', 'máy tính laptop.png', 1, '2021-03-23 11:15:02', '2021-03-23 11:15:02'),
(6, NULL, 'Máy ảnh máy quay', 'may-anh-may-quay-pc6', 'Máy ảnh máy quay', 'Máy ảnh máy quay', 'Máy ảnh máy quay', 'máy ảnh máy quay phim.png', 1, '2021-03-23 11:18:01', '2021-03-23 11:18:01'),
(7, NULL, 'Giầy dép nam', 'giay-dep-nam-pc7', 'Giầy dép nam', 'Giầy dép nam', 'Giầy dép nam', 'giầy dép nam.png', 1, '2021-03-23 11:19:20', '2021-03-23 11:19:20'),
(8, NULL, 'Giầy dép nữ', 'giay-dep-nu-pc8', 'Giầy dép nữ', 'Giầy dép nữ', 'Giầy dép nữ', 'giầy dép nữ.png', 1, '2021-03-23 11:19:53', '2021-03-23 11:19:53'),
(9, NULL, 'Đồng hồ', 'dong-ho-pc9', 'Đồng hồ', 'Đồng hồ', 'Đồng hồ', 'đồng hồ.png', 1, '2021-03-23 11:20:16', '2021-03-23 11:20:16'),
(10, NULL, 'Phụ kiện thời trang', 'phu-kien-thoi-trang-pc10', 'Phụ kiện thời trang', 'Phụ kiện thời trang', 'Phụ kiện thời trang', 'phụ kiện thời trang.png', 1, '2021-03-23 11:20:53', '2021-03-23 11:20:54'),
(11, NULL, 'Sức khỏe sắc đẹp', 'suc-khoe-sac-dep-pc11', 'Sức khỏe sắc đẹp', 'Sức khỏe sắc đẹp', 'Sức khỏe sắc đẹp', 'sức khỏe sắc đẹp.png', 1, '2021-03-23 11:21:35', '2021-03-23 11:21:35'),
(12, NULL, 'Thể thao du lịch', 'the-thao-du-lich-pc12', 'Thể thao du lịch', 'Thể thao du lịch', 'Thể thao du lịch', 'thể thao du lich.png', 1, '2021-03-23 11:22:58', '2021-03-23 11:22:58'),
(13, NULL, 'Mẹ và bé', 'me-va-be-pc13', 'Mẹ và bé', 'Mẹ và bé', 'Mẹ và bé', 'mẹ và bé.png', 1, '2021-03-23 11:23:28', '2021-03-23 11:23:28'),
(14, NULL, 'Thời trang trẻ em', 'thoi-trang-tre-em-pc14', 'Thời trang trẻ em', 'Thời trang trẻ em', 'Thời trang trẻ em', 'thời trang trẻ em.png', 1, '2021-03-23 11:23:55', '2021-03-23 11:23:55'),
(15, 3, 'Tivi', 'tivi-pc15', 'Đồng hồ', 'Đồng hồ', 'Đồng hồ', 'thiết bị điện tử.png', 1, '2021-03-23 11:24:53', '2021-03-26 22:17:31'),
(16, NULL, 'Nhà sách online', 'nha-sach-online-pc16', 'Nhà sách online', 'Nhà sách online', 'Nhà sách online', 'nhà sách online.png', 1, '2021-03-23 11:25:35', '2021-03-23 11:25:35'),
(17, NULL, 'Đồ chơi', 'do-choi-pc17', 'Đồ chơi', 'Đồ chơi', 'Đồ chơi', 'đồ chơi.png', 1, '2021-03-23 11:26:22', '2021-03-23 11:26:22'),
(18, NULL, 'Chăm sóc thú cưng', 'cham-soc-thu-cung-pc18', 'Chăm sóc thú cưng', 'Chăm sóc thú cưng', 'Chăm sóc thú cưng', 'Chăm sóc thú cưng.png', 1, '2021-03-23 11:26:45', '2021-03-23 11:26:45');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` tinyint(1) NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_images`
--

INSERT INTO `product_images` (`id`, `url`, `role`, `product_id`, `created_at`, `updated_at`) VALUES
(1, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 1, 1, '2021-03-23 12:46:45', '2021-03-23 12:46:45'),
(2, '3.jpg', 0, 1, '2021-03-23 12:46:45', '2021-03-23 12:46:45'),
(3, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 0, 1, '2021-03-23 22:57:35', '2021-03-23 22:57:35'),
(4, '3.jpg', 1, 2, '2021-03-24 21:43:43', '2021-03-24 21:43:43'),
(5, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 1, 3, '2021-03-25 21:13:45', '2021-03-25 21:13:45'),
(6, '5.jpg', 1, 4, '2021-03-25 21:19:47', '2021-03-25 21:19:47'),
(7, '2.jpg', 1, 5, '2021-03-25 21:20:40', '2021-03-25 21:20:40'),
(8, '1.jpg', 1, 6, '2021-03-25 21:21:11', '2021-03-25 21:21:11'),
(9, '2.jpg', 1, 7, '2021-03-25 21:21:36', '2021-03-25 21:21:36'),
(10, '3.jpg', 1, 8, '2021-03-25 21:22:08', '2021-03-25 21:22:08'),
(11, '10325361457_2032220550.jpg', 1, 9, '2021-03-25 21:23:02', '2021-03-25 21:23:02'),
(12, '10325364309_2032220550.jpg', 1, 10, '2021-03-25 21:23:27', '2021-03-25 21:23:27'),
(13, '10649895812_2032220550.jpg', 1, 11, '2021-03-25 21:23:54', '2021-03-25 21:23:54'),
(14, '12330025416_2032220550.jpg', 1, 12, '2021-03-27 00:49:26', '2021-03-27 00:49:26');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `href` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `stt` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sliders`
--

INSERT INTO `sliders` (`id`, `href`, `url`, `target`, `display`, `stt`, `created_at`, `updated_at`) VALUES
(1, 'https://shopee.vn/', 'GyPhS3LugjsSHkgT1tjb.png', '_blank', 1, NULL, '2021-03-23 11:30:39', '2021-03-25 01:37:21'),
(2, NULL, 'gWx8HOQuCnC2sPkxeLHk.png', '_self', 1, NULL, '2021-03-23 11:31:16', '2021-03-23 11:31:16');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `systems`
--

CREATE TABLE `systems` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shortcut_logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_keyword` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seo_description` longtext COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `zalo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `css` longtext COLLATE utf8mb4_unicode_ci,
  `script` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `systems`
--

INSERT INTO `systems` (`id`, `name`, `logo`, `shortcut_logo`, `title`, `seo_keyword`, `seo_description`, `facebook`, `instagram`, `zalo`, `youtube`, `website`, `address`, `phone`, `email`, `css`, `script`, `created_at`, `updated_at`) VALUES
(1, 'Website thương mại điện tử', 'logo.png', 'lg-u.png', 'WEBSITE THƯƠNG MẠI ĐIỆN TỬ', 'WEBSITE THƯƠNG MẠI ĐIỆN TỬ', 'WEBSITE THƯƠNG MẠI ĐIỆN TỬ', NULL, NULL, NULL, NULL, 'http://localhost:8000', 'Hà Nội', '0971459999', 'hotro@gmail.com', NULL, NULL, NULL, '2021-03-26 20:14:29');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name_s` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `name_s`, `email`, `email_verified_at`, `password`, `phone`, `address`, `role`, `status`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nam Nguyễn', NULL, 'namnguyen20132674@gmail.com', NULL, '$2y$10$9stR5A1aWLY4Jk1hzEt8FuouOvgwS/zGE00mtlCA7g4Ww.0lqBGuO', '0848384333', NULL, 1, 1, NULL, NULL, NULL, NULL),
(2, 'Nguyễn Hoài Nam', 'ĐỒ NGỦ SEXY CZADI', 'gianhang1@gmail.com', NULL, '$2y$10$/7yEawHG3Bc609JRbR.f5.Y81sUNIZiPPx/X/W0HpDTF4/MuGkeKi', '0842829222', 'Hồ Chí Minh quận 1', 4, 1, '9E148CC1-12DC-49B3-BACB-FB0B6BDDE51C.jpeg', NULL, '2021-03-23 12:00:26', '2021-03-27 01:20:18'),
(3, 'Nguyễn Hoài Nam 5', 'Nguyễn Hoài Nam 5', 'gianhang2@gmail.com', NULL, '$2y$10$zIwzeu9/GIYFXl0MOPpnJuwKqbKpVeTniPNwOySK.kPDKmYVIv0j2', '0848384335', NULL, 4, 1, '9E148CC1-12DC-49B3-BACB-FB0B6BDDE51C.jpeg', NULL, '2021-03-28 19:52:20', '2021-03-28 20:12:22'),
(4, 'Hoài Nam', NULL, 'Namnguyen@gmail.com', NULL, '$2y$10$Fl.Qxr0jphUKisBcvIhAnue8xvWsWENmJJOO698d.6Q3z8dZoOuG.', '0848384555', NULL, 4, 1, NULL, NULL, '2021-03-29 02:50:39', '2021-03-29 02:50:39');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `bcids`
--
ALTER TABLE `bcids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bcids_blog_id_foreign` (`blog_id`),
  ADD KEY `bcids_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `blog_cates`
--
ALTER TABLE `blog_cates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_product_id_foreign` (`product_id`),
  ADD KEY `feedback_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `menus`
--
ALTER TABLE `menus`
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
-- Chỉ mục cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_details_orders_id_foreign` (`orders_id`),
  ADD KEY `order_details_products_id_foreign` (`products_id`);

--
-- Chỉ mục cho bảng `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `pcids`
--
ALTER TABLE `pcids`
  ADD PRIMARY KEY (`id`),
  ADD KEY `pcids_product_id_foreign` (`product_id`),
  ADD KEY `pcids_cate_id_foreign` (`cate_id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Chỉ mục cho bảng `product_cates`
--
ALTER TABLE `product_cates`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Chỉ mục cho bảng `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `systems`
--
ALTER TABLE `systems`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `ads`
--
ALTER TABLE `ads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `bcids`
--
ALTER TABLE `bcids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `blog_cates`
--
ALTER TABLE `blog_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pcids`
--
ALTER TABLE `pcids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT cho bảng `product_cates`
--
ALTER TABLE `product_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT cho bảng `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `systems`
--
ALTER TABLE `systems`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bcids`
--
ALTER TABLE `bcids`
  ADD CONSTRAINT `bcids_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bcids_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `blog_cates` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_details_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `pcids`
--
ALTER TABLE `pcids`
  ADD CONSTRAINT `pcids_cate_id_foreign` FOREIGN KEY (`cate_id`) REFERENCES `product_cates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `pcids_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Các ràng buộc cho bảng `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
