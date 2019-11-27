-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: localhost
-- Thời gian đã tạo: Th10 27, 2019 lúc 05:14 AM
-- Phiên bản máy phục vụ: 10.4.8-MariaDB
-- Phiên bản PHP: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cay-da-la-tien`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `articles`
--

CREATE TABLE `articles` (
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cat_articles_id` int(11) DEFAULT NULL,
  `file` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `author` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `is_hot_new` int(11) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `is_del` int(1) DEFAULT NULL,
  `tags` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '1- Du lịch , 2- tin tức, 3-đặc sản quê hương'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `articles`
--

INSERT INTO `articles` (`title`, `slug`, `description`, `content`, `avatar`, `cat_articles_id`, `file`, `author`, `status`, `is_hot_new`, `views`, `created_at`, `updated_at`, `is_del`, `tags`, `id`, `type`) VALUES
('7 lợi ích của bảo hiểm du lịch quốc tế bạn nhất định phải biết', '7-loi-ich-cua-bao-hiem-du-lich-quoc-te-ban-nhat-dinh-phai-biet', '7 lợi ích của bảo hiểm du lịch quốc tế bạn nhất định phải biết', '<p>7 lợi &iacute;ch của bảo hiểm du lịch quốc tế bạn nhất định phải biếtsadsad&nbsp;</p>\r\n', '72226062_2429586057157163_911093224976678912_o1574414439.png', 2, NULL, 1, 2, 1, 1, 1574414439, NULL, 0, 'tags', 2, 3),
('Đại Hưng - tham vọng mở cửa ngõ mới với thế giới của Bắc Kinhádasd', 'dai-hung-tham-vong-mo-cua-ngo-moi-voi-the-gioi-cua-bac-kinhadasd', 'sadsa', '<p>Đại Hưng - tham vọng mở cửa ng&otilde; mới với thế giới của Bắc Kinh&aacute;dasd &aacute;d</p>\r\n', '72226062_2429586057157163_911093224976678912_o1574414659.png', 2, NULL, 1, 2, 0, 1, 1574414659, NULL, 0, 'tag', 3, 3),
(' 7 lợi ích của bảo hiểm du lịch quốc tế bạn nhất định phải biếtádasdas', '7-loi-ich-cua-bao-hiem-du-lich-quoc-te-ban-nhat-dinh-phai-bietadasdas', '7-loi-ich-cua-bao-hiem-du-lich-quoc-te-ban-nhat-dinh-phai-bietadasdasad', '<p>7-loi-ich-cua-bao-hiem-du-lich-quoc-te-ban-nhat-dinh-phai-bietadasdasad&nbsp;</p>\r\n', 'a2_black1574414924.png', 2, NULL, 1, 0, 1, 1, 1574414924, NULL, 0, 'atg', 4, 1),
('sdrfsdf ', 'sdrfsdf', 'sdfsd ', '<p>sdfsdf dsfsdf</p>\r\n', 'a2_black1574415214.png', NULL, NULL, 1, 2, 1, 1, 1574415214, NULL, 0, 'fsdf', 5, 3),
('sdrfsdf ', 'sdrfsdf', 'sdfsd ', '<p>sdfsdf dsfsdf</p>\r\n', 'a2_black1574415270.png', NULL, NULL, 1, 2, 1, 1, 1574415270, NULL, 0, 'fsdf', 6, 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_assignment`
--

CREATE TABLE `auth_assignment` (
  `item_name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `auth_assignment`
--

INSERT INTO `auth_assignment` (`item_name`, `user_id`, `created_at`) VALUES
('Admin', '1', 1567591654);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_item`
--

CREATE TABLE `auth_item` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` smallint(6) NOT NULL,
  `description` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `rule_name` varchar(64) COLLATE utf8_unicode_ci DEFAULT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `auth_item`
--

INSERT INTO `auth_item` (`name`, `type`, `description`, `rule_name`, `data`, `created_at`, `updated_at`) VALUES
('/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/about-us/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/about-us/create', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/about-us/delete', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/about-us/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/about-us/update', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/about-us/view', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/active', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/create', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/del', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/disable', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/duyet-tin', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/is-delete', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/khong-duyet-tin', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/list-articles-cat', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/update', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/articles/view', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/cat-articles/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/cat-articles/create', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/cat-articles/delete', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/cat-articles/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/cat-articles/update', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/cat-articles/view', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/debug/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/default/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/default/db-explain', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/default/download-mail', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/default/index', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/default/toolbar', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/default/view', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/user/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/user/reset-identity', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/debug/user/set-identity', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/default/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/default/action', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/default/diff', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/default/index', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/default/preview', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/gii/default/view', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/huong-ve-que-huong/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/huong-ve-que-huong/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/info-profile/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/info-profile/update', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/info-profile/uploadPhoto', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/log-system/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/log-system/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/rbac/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/rbac/assignment/*', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/assignment/assign', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/assignment/index', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/assignment/remove', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/assignment/view', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/permission/*', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/permission/assign', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/permission/create', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/permission/delete', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/permission/index', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/permission/remove', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/permission/update', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/permission/view', 2, NULL, NULL, NULL, 1567591577, 1567591577),
('/rbac/role/*', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/assign', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/create', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/delete', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/index', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/remove', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/update', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/role/view', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/route/*', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/route/assign', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/route/index', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/route/refresh', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/route/remove', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/rule/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/rbac/rule/create', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/rule/delete', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/rbac/rule/index', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/rbac/rule/update', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/rbac/rule/view', 2, NULL, NULL, NULL, 1567591583, 1567591583),
('/site/*', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/site/error', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/site/index', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/site/login', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/site/logout', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/site/request-password-reset', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/site/resend-verification-email', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/site/reset-password', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/site/signup', 2, NULL, NULL, NULL, 1567591584, 1567591584),
('/site/verify-email', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-hinh/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-hinh/create', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-hinh/delete', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-hinh/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-hinh/update', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-hinh/view', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-video/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-video/create', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-video/delete', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-video/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/thu-vien-video/update', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/user/*', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/user/create', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/user/doi-mat-khau', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/user/index', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/user/khoa-tai-khoan', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('/user/reset-password', 2, NULL, NULL, NULL, 1572233118, 1572233118),
('Admin', 2, NULL, NULL, NULL, 1567591633, 1567591633);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_item_child`
--

CREATE TABLE `auth_item_child` (
  `parent` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `child` varchar(64) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `auth_item_child`
--

INSERT INTO `auth_item_child` (`parent`, `child`) VALUES
('Admin', '/*'),
('Admin', '/debug/*'),
('Admin', '/debug/default/*'),
('Admin', '/debug/default/db-explain'),
('Admin', '/debug/default/download-mail'),
('Admin', '/debug/default/index'),
('Admin', '/debug/default/toolbar'),
('Admin', '/debug/default/view'),
('Admin', '/debug/user/*'),
('Admin', '/debug/user/reset-identity'),
('Admin', '/debug/user/set-identity'),
('Admin', '/gii/*'),
('Admin', '/gii/default/*'),
('Admin', '/gii/default/action'),
('Admin', '/gii/default/diff'),
('Admin', '/gii/default/index'),
('Admin', '/gii/default/preview'),
('Admin', '/gii/default/view'),
('Admin', '/info-profile/*'),
('Admin', '/info-profile/update'),
('Admin', '/rbac/*'),
('Admin', '/rbac/assignment/*'),
('Admin', '/rbac/assignment/assign'),
('Admin', '/rbac/assignment/index'),
('Admin', '/rbac/assignment/remove'),
('Admin', '/rbac/assignment/view'),
('Admin', '/rbac/permission/*'),
('Admin', '/rbac/permission/assign'),
('Admin', '/rbac/permission/create'),
('Admin', '/rbac/permission/delete'),
('Admin', '/rbac/permission/index'),
('Admin', '/rbac/permission/remove'),
('Admin', '/rbac/permission/update'),
('Admin', '/rbac/permission/view'),
('Admin', '/rbac/role/*'),
('Admin', '/rbac/role/assign'),
('Admin', '/rbac/role/create'),
('Admin', '/rbac/role/delete'),
('Admin', '/rbac/role/index'),
('Admin', '/rbac/role/remove'),
('Admin', '/rbac/role/update'),
('Admin', '/rbac/role/view'),
('Admin', '/rbac/route/*'),
('Admin', '/rbac/route/assign'),
('Admin', '/rbac/route/index'),
('Admin', '/rbac/route/refresh'),
('Admin', '/rbac/route/remove'),
('Admin', '/rbac/rule/*'),
('Admin', '/rbac/rule/create'),
('Admin', '/rbac/rule/delete'),
('Admin', '/rbac/rule/index'),
('Admin', '/rbac/rule/update'),
('Admin', '/rbac/rule/view'),
('Admin', '/site/*'),
('Admin', '/site/error'),
('Admin', '/site/index'),
('Admin', '/site/login'),
('Admin', '/site/logout'),
('Admin', '/site/signup');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `auth_rule`
--

CREATE TABLE `auth_rule` (
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `data` blob DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `updated_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `banner`
--

CREATE TABLE `banner` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `banner`
--

INSERT INTO `banner` (`id`, `title`, `img`, `status`) VALUES
(1, 'Tiêu đề 1', '1574398038-Makita2.png', 1),
(2, 'Tiêu đề 2', '1574398147-banner.jpg', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `cat_articles`
--

CREATE TABLE `cat_articles` (
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `level` int(11) DEFAULT NULL,
  `code` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `cat_articles`
--

INSERT INTO `cat_articles` (`name`, `parent_id`, `level`, `code`, `status`, `id`) VALUES
('TIN TỨC', NULL, NULL, 'tin-tuc', 1, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `huong_ve_que_huong`
--

CREATE TABLE `huong_ve_que_huong` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cell_phone` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `huong_ve_que_huong`
--

INSERT INTO `huong_ve_que_huong` (`id`, `full_name`, `cell_phone`, `address`, `created_at`) VALUES
(1, 'Ngô Văn Điệp', '0987001396', 'thai thinh, thai binh', 1574394648),
(2, 'Ngô Văn Thoát', '0987001396', 'Thái bình', 1574395519);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `info_profile`
--

CREATE TABLE `info_profile` (
  `id` int(11) NOT NULL,
  `full_name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `birth_day` int(11) DEFAULT NULL,
  `cell_phone` int(10) DEFAULT NULL,
  `city` int(11) DEFAULT NULL,
  `district` int(11) DEFAULT NULL,
  `ward` int(11) DEFAULT NULL,
  `avatar` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `info_profile`
--

INSERT INTO `info_profile` (`id`, `full_name`, `birth_day`, `cell_phone`, `city`, `district`, `ward`, `avatar`, `gender`, `user_id`) VALUES
(1, 'Ngô Văn Điệp', 0, 987001396, 0, 0, 0, '', 1, 1),
(5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6),
(8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 9);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1567562899),
('m130524_201442_init', 1567562901),
('m140506_102106_rbac_init', 1567585375),
('m170907_052038_rbac_add_index_on_auth_assignment_user_id', 1567585375),
('m180523_151638_rbac_updates_indexes_without_prefix', 1567585376),
('m190124_110200_add_verification_token_column_to_user_table', 1567562901);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `articles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `articles_id`) VALUES
(1, 'tags', 2),
(2, 'tag', 3),
(3, 'atg', 4),
(4, 'fsdf', 5),
(5, 'fsdf', 6);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu_vien_hinh`
--

CREATE TABLE `thu_vien_hinh` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL,
  `file` text COLLATE utf8_unicode_ci NOT NULL,
  `sub_avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `img1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img6` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thu_vien_video`
--

CREATE TABLE `thu_vien_video` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `link` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thu_vien_video`
--

INSERT INTO `thu_vien_video` (`id`, `title`, `link`, `created_at`) VALUES
(1, 'Cây đa la tiến', 'https://www.youtube.com/embed/Tw3A6mUChAk', 1572232753),
(2, 'Video thăm qua di tích lịch sử cây đa la tiến', 'https://www.youtube.com/embed/GQ4F9k4USfA', 1574390971),
(3, 'Video thăm qua di tích lịch sử Cây Đa La Tiến', 'https://www.youtube.com/embed/Tw3A6mUChAk', 1574391003),
(4, 'Video thăm qua di tích lịch sử Cây Đa La Tiến', 'https://www.youtube.com/embed/GQ4F9k4USfA', 1574391019);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=DYNAMIC;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(1, 'admin', '9BKHkCgvYu9wTe7CYOWggCm3cIhr_zqu', '$2y$13$yBHyh9Q3wMNy1I3NZA6MVOuENbawQyvsMrmSZf7YWibEygVbkXODy', NULL, 'nvdiepse@gmail.com', 10, 1567563706, 1572321158, 'Efw9XlaSpN0hRZ-NQIeiYoP0yiW18H3b_1567563706'),
(6, 'admin2', 'IFkS3WD2hnuZcv7WUsvJoBdwl-deuHli', '$2y$13$TLpZwhuF5a1em/3QkoQ/GO0c0SkmpHp6yzhytypE7JIaik.Eml726', NULL, 'admin2@gmail.com', 10, 1567580150, 1567580150, 'wDmfMXLOasbDTWZqGzxr9b1uBSWr69iU_1567580150'),
(9, 'test2', 'cl1yScLT2w0ACW6s2EOzH0HsLA75KCqY', '$2y$13$TrC1h/I1l6D/QqD9F7ehx.2ZZM9k6AsdheqcCtust/VRM2jMGZjQW', NULL, 'testname2@gmail.com', 10, 1567580747, 1567580747, 'QShnbQGKHzXCm-YaOoDX0p7ywL-Alik2_1567580747');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD PRIMARY KEY (`item_name`,`user_id`) USING BTREE,
  ADD KEY `idx-auth_assignment-user_id` (`user_id`) USING BTREE;

--
-- Chỉ mục cho bảng `auth_item`
--
ALTER TABLE `auth_item`
  ADD PRIMARY KEY (`name`) USING BTREE,
  ADD KEY `rule_name` (`rule_name`) USING BTREE,
  ADD KEY `idx-auth_item-type` (`type`) USING BTREE;

--
-- Chỉ mục cho bảng `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD PRIMARY KEY (`parent`,`child`) USING BTREE,
  ADD KEY `child` (`child`) USING BTREE;

--
-- Chỉ mục cho bảng `auth_rule`
--
ALTER TABLE `auth_rule`
  ADD PRIMARY KEY (`name`) USING BTREE;

--
-- Chỉ mục cho bảng `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `cat_articles`
--
ALTER TABLE `cat_articles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `huong_ve_que_huong`
--
ALTER TABLE `huong_ve_que_huong`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `info_profile`
--
ALTER TABLE `info_profile`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Chỉ mục cho bảng `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`) USING BTREE;

--
-- Chỉ mục cho bảng `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu_vien_hinh`
--
ALTER TABLE `thu_vien_hinh`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `thu_vien_video`
--
ALTER TABLE `thu_vien_video`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD UNIQUE KEY `username` (`username`) USING BTREE,
  ADD UNIQUE KEY `email` (`email`) USING BTREE,
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`) USING BTREE;

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `cat_articles`
--
ALTER TABLE `cat_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `huong_ve_que_huong`
--
ALTER TABLE `huong_ve_que_huong`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `info_profile`
--
ALTER TABLE `info_profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `thu_vien_hinh`
--
ALTER TABLE `thu_vien_hinh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `thu_vien_video`
--
ALTER TABLE `thu_vien_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `auth_assignment`
--
ALTER TABLE `auth_assignment`
  ADD CONSTRAINT `auth_assignment_ibfk_1` FOREIGN KEY (`item_name`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `auth_item`
--
ALTER TABLE `auth_item`
  ADD CONSTRAINT `auth_item_ibfk_1` FOREIGN KEY (`rule_name`) REFERENCES `auth_rule` (`name`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Các ràng buộc cho bảng `auth_item_child`
--
ALTER TABLE `auth_item_child`
  ADD CONSTRAINT `auth_item_child_ibfk_1` FOREIGN KEY (`parent`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `auth_item_child_ibfk_2` FOREIGN KEY (`child`) REFERENCES `auth_item` (`name`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
