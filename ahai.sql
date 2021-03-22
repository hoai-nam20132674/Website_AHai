-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th3 22, 2021 lúc 03:14 PM
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
-- Cấu trúc bảng cho bảng `bcids`
--

CREATE TABLE `bcids` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `cate_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `bcids`
--

INSERT INTO `bcids` (`id`, `blog_id`, `cate_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-03-18 21:02:37', '2021-03-18 21:02:37');

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
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blogs`
--

INSERT INTO `blogs` (`id`, `name`, `user_id`, `title`, `content`, `seo_description`, `seo_keyword`, `url`, `display`, `avata`, `created_at`, `updated_at`) VALUES
(1, 'tin tức', 1, 'tin tức', '<p>tin tức</p>', 'tin tức', 'tin tức', 'tin-tuc-1-bi1', 1, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', '2021-03-18 21:02:37', '2021-03-18 23:49:32');

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
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog_cates`
--

INSERT INTO `blog_cates` (`id`, `parent_id`, `name`, `title`, `seo_description`, `seo_keyword`, `url`, `avata`, `display`, `created_at`, `updated_at`) VALUES
(1, NULL, 'TIN TỨC', 'TIN TỨC', 'TIN TỨC', 'TIN TỨC', 'tin-tuc-bc1', '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 1, '2021-03-18 20:46:04', '2021-03-18 21:01:28');

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
(1, 'Thiết bị điện tử', 'thiet-bi-dien-pc1', 'undefined', '_self', 'productCategory', 1, NULL, 1, '2021-03-21 22:40:38', '2021-03-21 22:50:18'),
(2, 'Sức khỏe làm đẹp', 'suc-khoe-lam-dep-pc6', 'undefined', '_self', 'productCategory', 6, NULL, 6, '2021-03-21 22:40:38', '2021-03-21 22:50:19'),
(3, 'Mẹ và bé', 'me-va-pc2', 'undefined', '_self', 'productCategory', 2, NULL, 3, '2021-03-21 22:40:38', '2021-03-21 22:50:18'),
(4, 'Tivi', 'tivi-pc3', 'undefined', '_self', 'productCategory', 3, NULL, 2, '2021-03-21 22:40:39', '2021-03-21 22:50:18'),
(5, 'Thời trang', 'thoi-trang-pc4', 'undefined', '_self', 'productCategory', 4, NULL, 4, '2021-03-21 22:40:39', '2021-03-21 22:50:18'),
(6, 'Điện dân dụng', 'dien-dan-dung-pc5', 'undefined', '_self', 'productCategory', 5, NULL, 5, '2021-03-21 22:40:39', '2021-03-21 22:50:18'),
(7, 'Trang chủ', '/', NULL, '_self', 'custom-link', 0, NULL, 0, '2021-03-21 22:50:17', '2021-03-21 22:50:17');

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
(17, '2021_03_15_021114_create_sliders_table', 1);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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
(4, 1, 4, '2021-03-18 02:54:36', '2021-03-18 02:54:36'),
(5, 2, 1, '2021-03-18 20:21:06', '2021-03-18 20:21:06'),
(6, 3, 1, '2021-03-20 04:25:31', '2021-03-20 04:25:31'),
(7, 3, 3, '2021-03-20 04:25:31', '2021-03-20 04:25:31'),
(8, 4, 1, '2021-03-20 04:35:05', '2021-03-20 04:35:05'),
(9, 4, 3, '2021-03-20 04:35:05', '2021-03-20 04:35:05'),
(10, 5, 2, '2021-03-20 04:38:39', '2021-03-20 04:38:39'),
(11, 6, 1, '2021-03-20 22:14:21', '2021-03-20 22:14:21'),
(12, 7, 1, '2021-03-20 22:15:09', '2021-03-20 22:15:09'),
(13, 3, 2, '2021-03-21 00:01:09', '2021-03-21 00:01:09'),
(14, 8, 1, '2021-03-22 05:06:53', '2021-03-22 05:06:53'),
(15, 9, 1, '2021-03-22 05:07:21', '2021-03-22 05:07:21'),
(16, 10, 2, '2021-03-22 05:08:01', '2021-03-22 05:08:01'),
(17, 11, 1, '2021-03-22 05:10:24', '2021-03-22 05:10:24'),
(18, 12, 1, '2021-03-22 05:11:05', '2021-03-22 05:11:05'),
(19, 13, 1, '2021-03-22 05:23:05', '2021-03-22 05:23:05');

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
  `display` tinyint(1) DEFAULT '1',
  `hot` tinyint(1) NOT NULL,
  `best_sale` tinyint(1) NOT NULL,
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `sale` int(11) DEFAULT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `user_id`, `name`, `title`, `content`, `short_description`, `seo_description`, `seo_keyword`, `url`, `display`, `hot`, `best_sale`, `avata`, `price`, `sale`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'sản phẩm 12', 'sản phẩm 1', NULL, NULL, NULL, NULL, 'san-pham-1-pi1', 1, 0, 0, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 2, 2, 1, '2021-03-18 01:12:55', '2021-03-22 05:58:18'),
(2, 3, 'Sản phẩm 2', 'Sản phẩm 2', '<p>Sản phẩm 2</p>', NULL, 'Sản phẩm 2', 'Sản phẩm 2', 'san-pham-2-3-4-5-p2', 1, 0, 1, 'felix-uresti-F5uQIJRoyb0-unsplash.jpg', 1, 1, 1, '2021-03-18 20:21:06', '2021-03-18 20:41:03'),
(3, 2, 'Sản phẩm test sửa', 'Sản phẩm test', '<p>Sản phẩm test</p>', NULL, NULL, NULL, 'san-pham-test-pi3', 1, 1, 1, 'felix-uresti-F5uQIJRoyb0-unsplash.jpg', 100000, 50000, 1, '2021-03-20 04:25:31', '2021-03-22 02:10:53'),
(4, 2, 'Sản phẩm test 2', 'Sản phẩm test 2', '<p>Sản phẩm test 2</p>', NULL, NULL, NULL, 'san-pham-test-2-pi4', 1, 1, 1, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 100000, 50000, 1, '2021-03-20 04:35:05', '2021-03-22 00:47:30'),
(5, 2, 'Sản phẩm test 3', 'Sản phẩm test 3', '<p>Sản phẩm test 3</p>', NULL, NULL, NULL, 'san-pham-test-3-pi5', 1, 1, 1, '5.jpg', 250000, 200000, 1, '2021-03-20 04:38:39', '2021-03-22 00:47:04'),
(6, 2, 'Sản phẩm test 4', 'Sản phẩm test 4', '<p><img alt=\"\" src=\"http://localhost:8000/uploads/images/products/avatars/felix-uresti-F5uQIJRoyb0-unsplash.jpg\" style=\"width:100%\" /></p>', NULL, NULL, NULL, 'san-pham-test-4-pi6', 1, 1, 1, 'felix-uresti-F5uQIJRoyb0-unsplash.jpg', 150000, 100000, 1, '2021-03-20 22:14:21', '2021-03-22 00:46:30'),
(7, 2, 'Sản phẩm test 5', 'Sản phẩm test 5', '<p>Sản phẩm test 5</p>', NULL, NULL, NULL, 'san-pham-test-5-pi7', 1, 1, 1, '[removal.ai]_tmp-600d3bb9ebe64.png', 200000, 150000, 1, '2021-03-20 22:15:09', '2021-03-22 00:46:07'),
(8, 2, 'Sản phẩm 15', 'Sản phẩm 15', NULL, NULL, NULL, NULL, 'san-pham-15-pi8', 1, 1, 1, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 100000, NULL, 1, '2021-03-22 05:06:53', '2021-03-22 05:19:20'),
(9, 2, 'sản phẩm 16', 'sản phẩm 16', NULL, NULL, NULL, NULL, 'san-pham-16-pi9', 1, 1, 1, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 200000, NULL, 1, '2021-03-22 05:07:21', '2021-03-22 05:23:58'),
(10, 2, 'sản phẩm 17', 'sản phẩm 17', NULL, NULL, NULL, NULL, 'san-pham-17-pi10', 1, 1, 1, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 50000, 10000, 1, '2021-03-22 05:08:01', '2021-03-22 05:30:46'),
(11, 2, 'sản phẩm 18', 'sản phẩm 18', NULL, NULL, NULL, NULL, 'san-pham-18-pi11', 1, 1, 1, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 200000, 100000, 1, '2021-03-22 05:10:24', '2021-03-22 05:10:24'),
(12, 2, 'sản phẩm 19', 'sản phẩm 19', NULL, NULL, NULL, NULL, 'san-pham-19-pi12', 1, 1, 1, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 300000, 200000, 1, '2021-03-22 05:11:05', '2021-03-22 05:11:05'),
(13, 2, 'sản phẩm test 20', 'sản phẩm test 20', NULL, NULL, NULL, NULL, 'san-pham-test-20-pi13', 1, 0, 0, '[removal.ai]_tmp-600d3bb9ebe64.png', 100000, 20000, 1, '2021-03-22 05:23:05', '2021-03-22 05:23:05');

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
  `avata` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product_cates`
--

INSERT INTO `product_cates` (`id`, `parent_id`, `name`, `url`, `title`, `seo_description`, `seo_keyword`, `avata`, `display`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Thiết bị điện tử', 'thiet-bi-dien-pc1', 'Thiết bị điện tử', 'Thiết bị điện tử', 'Thiết bị điện tử', 'Item_li_list_list_item_ul-512.png', 1, '2021-03-16 02:19:22', '2021-03-21 20:12:47'),
(2, NULL, 'Mẹ và bé', 'me-va-pc2', 'Mẹ và bé', 'Mẹ và bé', 'Mẹ và bé', 'Item_li_list_list_item_ul-512.png', 1, '2021-03-17 01:05:26', '2021-03-21 20:13:09'),
(3, 1, 'Tivi', 'tivi-pc3', 'tivi', 'tivi', 'tivi', 'Item_li_list_list_item_ul-512.png', 1, '2021-03-17 01:05:55', '2021-03-21 22:39:20'),
(4, NULL, 'Thời trang', 'thoi-trang-pc4', 'Thời trang', 'Thời trang', 'Thời trang', 'Item_li_list_list_item_ul-512.png', 1, '2021-03-17 01:07:23', '2021-03-21 22:38:37'),
(5, NULL, 'Điện dân dụng', 'dien-dan-dung-pc5', 'Điện dân dụng', 'Điện dân dụng', 'Điện dân dụng', 'Item_li_list_list_item_ul-512.png', 1, '2021-03-17 01:07:54', '2021-03-18 20:55:09'),
(6, NULL, 'Sức khỏe làm đẹp', 'suc-khoe-lam-dep-pc6', 'Sức khỏe làm đẹp', 'Sức khỏe làm đẹp', 'Sức khỏe làm đẹp', 'Item_li_list_list_item_ul-512.png', 1, '2021-03-18 20:53:47', '2021-03-18 20:53:47');

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
(1, '4785348324_c24197d5-8f42-40ec-82e3-a9de4704e67c.png', 1, 1, '2021-03-18 01:12:55', '2021-03-18 01:12:55'),
(3, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 0, 1, '2021-03-18 03:00:25', '2021-03-18 03:00:25'),
(4, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 0, 1, '2021-03-18 20:02:45', '2021-03-18 20:02:45'),
(5, 'felix-uresti-F5uQIJRoyb0-unsplash.jpg', 1, 2, '2021-03-18 20:21:06', '2021-03-18 20:21:06'),
(6, 'heart-icon.png', 1, 3, '2021-03-20 04:25:31', '2021-03-20 04:25:31'),
(7, 'e8fe51eb1db4cb8ae0dd5b29a37a8e59.jpg', 0, 3, '2021-03-20 04:25:31', '2021-03-20 04:25:31'),
(8, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 1, 4, '2021-03-20 04:35:05', '2021-03-20 04:35:05'),
(9, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 0, 4, '2021-03-20 04:35:05', '2021-03-20 04:35:05'),
(10, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 0, 4, '2021-03-20 04:35:05', '2021-03-20 04:35:05'),
(11, 'heart-icon.png', 1, 5, '2021-03-20 04:38:39', '2021-03-20 04:38:39'),
(12, 'e8fe51eb1db4cb8ae0dd5b29a37a8e59.jpg', 0, 5, '2021-03-20 04:38:39', '2021-03-20 04:38:39'),
(13, 'felix-uresti-F5uQIJRoyb0-unsplash.jpg', 1, 6, '2021-03-20 22:14:21', '2021-03-20 22:14:21'),
(14, '[removal.ai]_tmp-600d3bb9ebe64.png', 1, 7, '2021-03-20 22:15:09', '2021-03-20 22:15:09'),
(15, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 0, 3, '2021-03-21 00:01:34', '2021-03-21 00:01:34'),
(16, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 1, 8, '2021-03-22 05:06:53', '2021-03-22 05:06:53'),
(17, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 1, 9, '2021-03-22 05:07:21', '2021-03-22 05:07:21'),
(18, '334299aa-aa3b-4a7b-9b15-e6a79ce60bba.jpg', 1, 10, '2021-03-22 05:08:01', '2021-03-22 05:08:01'),
(19, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 1, 11, '2021-03-22 05:10:24', '2021-03-22 05:10:24'),
(20, '7fc7c76d-1144-46cb-8660-da82c7cda379.jpg', 1, 12, '2021-03-22 05:11:05', '2021-03-22 05:11:05'),
(21, '[removal.ai]_tmp-600d3bb9ebe64.png', 1, 13, '2021-03-22 05:23:05', '2021-03-22 05:23:05');

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
(1, NULL, 'GyPhS3LugjsSHkgT1tjb.png', '_self', 1, NULL, '2021-03-21 06:42:33', '2021-03-21 06:42:33'),
(2, NULL, 'gWx8HOQuCnC2sPkxeLHk.png', '_self', 1, NULL, '2021-03-21 06:42:43', '2021-03-21 06:42:43');

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
(1, 'Website thương mại điện tử', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `phone`, `role`, `status`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nam Nguyễn', 'namnguyen20132674@gmail.com', NULL, '$2y$10$AIqZq1.p5xDnTvisMrefyOXdYfTkaSUHAYKOu.ll18C6BZiycytny', '0848384333', 1, 1, NULL, NULL, NULL, NULL),
(2, 'Gian hàng 1', 'gianhang1@gmail.com', NULL, '$2y$10$yu/yWHK6B8OUlpDU1zvyaepnRdVv2ZqRHyJT.khTHjGo9.VNlVlEm', '0342911168', 4, 1, NULL, NULL, '2021-03-16 01:46:13', '2021-03-16 01:46:14'),
(3, 'Nam Nguyễn', 'gianhang2@gmail.com', NULL, '$2y$10$0oqee37lKy5PGwxa1F97iOFDH2tT8y/LPnwqAU9Mfv9W/Q.RUJMi.', '0848384332', 4, 1, NULL, NULL, '2021-03-17 21:49:23', '2021-03-17 21:49:24'),
(4, 'Mến Bùi', 'gianhang4@gmail.com', NULL, '$2y$10$.t5wV6fDH34BWVSYlhT/EOGWIZ23wtSJQKq2hj7TdLoF.JDasH3xm', '0848384334', 4, 1, NULL, NULL, '2021-03-17 21:50:07', '2021-03-17 21:50:07'),
(5, 'gian hàng 10', 'gianhang10@gmail.com', NULL, '$2y$10$plx43wdvUT86RqtHrHm0bur0BxUlZnUBPYTtxZyVQHY5qJYSbl8gi', '10', 4, 1, NULL, NULL, '2021-03-21 06:16:26', '2021-03-21 06:16:26');

--
-- Chỉ mục cho các bảng đã đổ
--

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
-- AUTO_INCREMENT cho bảng `bcids`
--
ALTER TABLE `bcids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `blog_cates`
--
ALTER TABLE `blog_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
-- AUTO_INCREMENT cho bảng `menus`
--
ALTER TABLE `menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `pcids`
--
ALTER TABLE `pcids`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `product_cates`
--
ALTER TABLE `product_cates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
