-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2015 at 09:44 PM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `enwebstore_beta1`
--

-- --------------------------------------------------------

--
-- Table structure for table `apis`
--

CREATE TABLE IF NOT EXISTS `apis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bands`
--

CREATE TABLE IF NOT EXISTS `bands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE IF NOT EXISTS `carts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `ensyslogs`
--

CREATE TABLE IF NOT EXISTS `ensyslogs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `thumblocation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=29 ;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `name`, `location`, `thumblocation`, `created_at`, `updated_at`) VALUES
(1, 3, '3_rd8l9.jpg', '3_rd8l9.jpg', '', '2015-02-16 08:30:56', '2015-02-16 08:30:56'),
(2, 1, '1_jo5lo.jpg', '1_jo5lo.jpg', '', '2015-02-16 09:01:17', '2015-02-16 09:01:17'),
(3, 1, '1_3179s.jpg', '1_3179s.jpg', '', '2015-02-16 09:01:50', '2015-02-16 09:01:50'),
(4, 2, '2_aXhQt.jpg', '2_aXhQt.jpg', '', '2015-02-16 09:03:45', '2015-02-16 09:03:45'),
(5, 2, '2_j7gG3.jpg', '2_j7gG3.jpg', '', '2015-02-16 09:04:25', '2015-02-16 09:04:25'),
(6, 2, '2_bqbiJ.jpg', '2_bqbiJ.jpg', '', '2015-02-16 09:05:19', '2015-02-16 09:05:19'),
(7, 2, '2_B1AAt.jpg', '2_B1AAt.jpg', '', '2015-02-16 09:08:49', '2015-02-16 09:08:49'),
(8, 3, '3_0gErj.JPG', '3_0gErj.JPG', '', '2015-02-16 09:10:24', '2015-02-16 09:10:24'),
(9, 3, '3_FiWIj.jpg', '3_FiWIj.jpg', '', '2015-02-16 09:11:18', '2015-02-16 09:11:18'),
(10, 3, '3_gmmaX.jpg', '3_gmmaX.jpg', '', '2015-02-16 09:12:00', '2015-02-16 09:12:00'),
(11, 4, '4_chxM5.jpg', '4_chxM5.jpg', '', '2015-02-16 09:14:22', '2015-02-16 09:14:22'),
(12, 4, '4_W7E9M.jpg', '4_W7E9M.jpg', '', '2015-02-16 09:14:44', '2015-02-16 09:14:44'),
(13, 5, '5_n2N4W.jpg', '5_n2N4W.jpg', '', '2015-02-16 09:17:31', '2015-02-16 09:17:31'),
(14, 5, '5_lKAAR.jpg', '5_lKAAR.jpg', '', '2015-02-16 09:17:58', '2015-02-16 09:17:58'),
(15, 6, '6_roN45.jpg', '6_roN45.jpg', '', '2015-02-16 09:19:36', '2015-02-16 09:19:36'),
(16, 6, '6_jHrYp.jpg', '6_jHrYp.jpg', '', '2015-02-16 09:20:29', '2015-02-16 09:20:29'),
(17, 7, '7_WN5jf.jpg', '7_WN5jf.jpg', '', '2015-02-16 09:21:26', '2015-02-16 09:21:26'),
(18, 7, '7_5Ka3u.jpg', '7_5Ka3u.jpg', '', '2015-02-16 09:21:42', '2015-02-16 09:21:42'),
(19, 7, '7_7754c.jpg', '7_7754c.jpg', '', '2015-02-16 09:22:11', '2015-02-16 09:22:11'),
(20, 7, '7_lUQ2t.jpg', '7_lUQ2t.jpg', '', '2015-02-16 09:22:40', '2015-02-16 09:22:40'),
(21, 7, '7_qIP4E.jpg', '7_qIP4E.jpg', '', '2015-02-16 09:23:35', '2015-02-16 09:23:35'),
(22, 8, '8_BGKSK.jpg', '8_BGKSK.jpg', '', '2015-02-16 09:24:47', '2015-02-16 09:24:47'),
(23, 8, '8_aIzkt.jpg', '8_aIzkt.jpg', '', '2015-02-16 09:25:43', '2015-02-16 09:25:43'),
(24, 8, '8_1F90u.jpg', '8_1F90u.jpg', '', '2015-02-16 09:26:07', '2015-02-16 09:26:07'),
(25, 11, '11_IMXAE.jpg', '11_IMXAE.jpg', '', '2015-02-16 09:26:54', '2015-02-16 09:26:54'),
(26, 13, '13_4Q1HX.jpg', '13_4Q1HX.jpg', '', '2015-02-16 09:30:18', '2015-02-16 09:30:18'),
(27, 13, '13_3njJI.jpg', '13_3njJI.jpg', '', '2015-02-16 09:30:43', '2015-02-16 09:30:43'),
(28, 13, '13_s62TB.jpg', '13_s62TB.jpg', '', '2015-02-16 09:31:34', '2015-02-16 09:31:34');

-- --------------------------------------------------------

--
-- Table structure for table `inventories`
--

CREATE TABLE IF NOT EXISTS `inventories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_id` int(11) DEFAULT NULL,
  `xsmall` int(11) DEFAULT NULL,
  `small` int(11) DEFAULT NULL,
  `medium` int(11) DEFAULT NULL,
  `large` int(11) DEFAULT NULL,
  `xlarge` int(11) DEFAULT NULL,
  `xxlarge` int(11) DEFAULT NULL,
  `xxxlarge` int(11) DEFAULT NULL,
  `onesize` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `product_id`, `xsmall`, `small`, `medium`, `large`, `xlarge`, `xxlarge`, `xxxlarge`, `onesize`, `created_at`, `updated_at`) VALUES
(1, 1, 123, 0, 0, 0, 0, 0, 0, 12, '0000-00-00 00:00:00', '2015-04-04 22:10:12'),
(2, 2, 0, 0, 0, 0, 0, 0, 0, 23, '0000-00-00 00:00:00', '2015-04-04 22:11:39'),
(3, 3, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 4, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 5, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 6, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 7, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 8, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 9, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 10, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 11, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 12, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 13, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 14, 0, 0, 0, 0, 0, 0, 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2015_03_29_155453_create_products_table', 1),
('2015_03_29_155522_create_inventories_table', 1),
('2015_03_29_155820_create_images_table', 1),
('2015_03_29_160026_create_bands_table', 1),
('2015_03_29_160121_create_shows_table', 1),
('2015_03_29_160418_create_sales_table', 1),
('2015_03_29_160445_create_carts_table', 1),
('2015_03_29_160543_create_apis_table', 1),
('2015_03_29_161150_create_ensyslogs_table', 1),
('2015_03_29_161234_create_revenues_table', 1),
('2015_03_29_182632_create_sizes_table', 1),
('2015_03_29_182759_create_product_categ', 1),
('2015_04_02_000242_create_urls_table', 1),
('2015_04_02_000727_create_users', 1),
('2015_04_04_142656_create_contacts_table', 1),
('2015_04_04_184147_create_productsadmins_table', 1),
('2015_03_29_155453_create_products_table', 1),
('2015_03_29_155522_create_inventories_table', 1),
('2015_03_29_155820_create_images_table', 1),
('2015_03_29_160026_create_bands_table', 1),
('2015_03_29_160121_create_shows_table', 1),
('2015_03_29_160418_create_sales_table', 1),
('2015_03_29_160445_create_carts_table', 1),
('2015_03_29_160543_create_apis_table', 1),
('2015_03_29_161150_create_ensyslogs_table', 1),
('2015_03_29_161234_create_revenues_table', 1),
('2015_03_29_182632_create_sizes_table', 1),
('2015_03_29_182759_create_product_categ', 1),
('2015_04_02_000242_create_urls_table', 1),
('2015_04_02_000727_create_users', 1),
('2015_04_04_142656_create_contacts_table', 1),
('2015_03_29_155453_create_products_table', 1),
('2015_03_29_155522_create_inventories_table', 1),
('2015_03_29_155820_create_images_table', 1),
('2015_03_29_160026_create_bands_table', 1),
('2015_03_29_160121_create_shows_table', 1),
('2015_03_29_160418_create_sales_table', 1),
('2015_03_29_160445_create_carts_table', 1),
('2015_03_29_160543_create_apis_table', 1),
('2015_03_29_161150_create_ensyslogs_table', 1),
('2015_03_29_161234_create_revenues_table', 1),
('2015_03_29_182632_create_sizes_table', 1),
('2015_03_29_182759_create_product_categ', 1),
('2015_04_04_184147_create_productsadmins_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `producers`
--

CREATE TABLE IF NOT EXISTS `producers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paypal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) NOT NULL,
  `onsale` int(11) NOT NULL,
  `upcomming` int(11) NOT NULL,
  `preorder` int(11) NOT NULL,
  `xsmall` int(11) NOT NULL,
  `small` int(11) NOT NULL,
  `medium` int(11) NOT NULL,
  `large` int(11) NOT NULL,
  `xlarge` int(11) NOT NULL,
  `xxlarge` int(11) NOT NULL,
  `xxxlarge` int(11) NOT NULL,
  `onesize` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `producers`
--

INSERT INTO `producers` (`id`, `name`, `description`, `category`, `price`, `paypal`, `active`, `onsale`, `upcomming`, `preorder`, `xsmall`, `small`, `medium`, `large`, `xlarge`, `xxlarge`, `xxxlarge`, `onesize`, `created_at`, `updated_at`) VALUES
(1, 'Putnams Halloween 14 Tee', '', 'Tees', '12.99', 'CW2VPMRBTPLCJ', 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '2015-02-16 07:07:40', '2015-02-16 07:07:40'),
(2, 'Dapper Bat Zip Up', '', 'Hoodies', '29.99', 'TT65B8LYJP38S', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '2015-02-16 07:16:37', '2015-02-16 07:16:37'),
(3, 'Never Sleep Hockey Mask', '', '¾ Tees', '24.99', '6WATDDRKGNFK4', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '2015-02-16 07:19:32', '2015-02-16 07:19:32'),
(4, 'Aspire to Inspire Dapper Bat Tank', '', 'Tanks', '19.99', '9B5MS753D9TE6', 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '2015-02-16 07:22:05', '2015-02-16 07:22:05'),
(5, 'Poe Tank', '', 'Tanks', '19.99', '9MQJMLBGPXYZS', 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, '2015-02-16 07:25:11', '2015-02-16 07:25:11'),
(6, 'Stay Awake to Create Baseball Tee', '', 'Tees', '19.99', 'RSKAYBF68JQKJ', 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, '2015-02-16 07:27:20', '2015-02-16 07:27:20'),
(7, 'Zombie Invasion Tee', '', 'Tees', '19.99 - $21.99', 'TVZWRJYKLXL46', 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, '2015-02-16 07:29:19', '2015-02-16 07:29:19'),
(8, 'Eternally Detroit Hoodie', '', 'Hoodies', '34.99 - $37.99', 'HAKJUSQFNHBXS', 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, '2015-02-16 07:30:49', '2015-02-16 07:30:49'),
(9, 'Side Logo (Mens)', '', 'Tees', '17.99', 'DTA8K6BVW8WNY', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '2015-02-16 07:32:03', '2015-02-16 07:32:03'),
(10, 'Side Logo (Womens)', '', 'Tees', '17.99', 'SHCDEPJJWRGMA', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '2015-02-16 07:33:33', '2015-02-16 07:33:33'),
(11, 'Eternally Nocturnal Slouch Beanie', '', 'Accessories', '15.99', 'BN2QHMU92VZ4C', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-02-16 07:38:09', '2015-02-16 07:38:09'),
(12, 'Embroidered Logo Beanie - Red', '', 'Accessories', '15.99', '8DZVC5QLKKXZ4', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-02-16 07:42:49', '2015-02-16 07:42:49'),
(13, 'Embroidered Logo Beanie - White', '', 'Accessories', '15.99', '5EMBAPASHMSR2', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, '2015-02-16 07:45:47', '2015-02-16 07:45:47'),
(14, 'Eternally Nocturnal Panties', '', 'Accessories', '11.99', '96GF35M3SYD94', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, '2015-02-16 07:47:27', '2015-02-16 07:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `paypal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` int(11) DEFAULT NULL,
  `onsale` int(11) DEFAULT NULL,
  `upcomming` int(11) DEFAULT NULL,
  `preorder` int(11) DEFAULT NULL,
  `xsmall` int(11) DEFAULT NULL,
  `small` int(11) DEFAULT NULL,
  `medium` int(11) DEFAULT NULL,
  `large` int(11) DEFAULT NULL,
  `xlarge` int(11) DEFAULT NULL,
  `xxlarge` int(11) DEFAULT NULL,
  `xxxlarge` int(11) DEFAULT NULL,
  `onesize` int(11) DEFAULT NULL,
  `main_image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=15 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `description`, `category`, `price`, `paypal`, `active`, `onsale`, `upcomming`, `preorder`, `xsmall`, `small`, `medium`, `large`, `xlarge`, `xxlarge`, `xxxlarge`, `onesize`, `main_image`, `created_at`, `updated_at`) VALUES
(1, 'Putnams Halloween 14 Tee', '', 'Tees', '12.99', 'CW2VPMRBTPLCJ', 1, 1, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 'Putnams Halloween 14 Tee.jpg', '2015-02-16 07:07:40', '2015-04-04 22:01:03'),
(2, 'Dapper Bat Zip Up', '', 'Hoodies', '29.99', 'TT65B8LYJP38S', 0, 1, 0, 0, 1, 1, 1, 1, 1, 0, 0, 0, 'Dapper Bat Zip Up.jpg', '2015-02-16 07:16:37', '2015-04-04 22:00:53'),
(3, 'Never Sleep Hockey Mask', '', '¾ Tees', '24.99', '6WATDDRKGNFK4', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 'Never Sleep Hockey Mask.jpg', '2015-02-16 07:19:32', '2015-02-16 07:19:32'),
(4, 'Aspire to Inspire Dapper Bat Tank', '', 'Tanks', '19.99', '9B5MS753D9TE6', 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 'Aspire to Inspire Dapper Bat Tank.jpg', '2015-02-16 07:22:05', '2015-02-16 07:22:05'),
(5, 'Poe Tank', '', 'Tanks', '19.99', '9MQJMLBGPXYZS', 1, 0, 0, 0, 0, 1, 1, 1, 1, 0, 0, 0, 'Poe Tank.jpg', '2015-02-16 07:25:11', '2015-02-16 07:25:11'),
(6, 'Stay Awake to Create Baseball Tee', '', 'Tees', '19.99', 'RSKAYBF68JQKJ', 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 'Stay Awake to Create Baseball Tee.jpg', '2015-02-16 07:27:20', '2015-02-16 07:27:20'),
(7, 'Zombie Invasion Tee', '', 'Tees', '19.99 - $21.99', 'TVZWRJYKLXL46', 1, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 'Zombie Invasion Tee.jpg', '2015-02-16 07:29:19', '2015-02-16 07:29:19'),
(8, 'Eternally Detroit Hoodie', '', 'Hoodies', '34.99 - $37.99', 'HAKJUSQFNHBXS', 0, 0, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, 'Eternally Detroit Hoodie.jpg', '2015-02-16 07:30:49', '2015-02-16 07:30:49'),
(9, 'Side Logo (Mens)', '', 'Tees', '17.99', 'DTA8K6BVW8WNY', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 'Side Logo (Mens).jpg', '2015-02-16 07:32:03', '2015-02-16 07:32:03'),
(10, 'Side Logo (Womens)', '', 'Tees', '17.99', 'SHCDEPJJWRGMA', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 'Side Logo (Womens).jpg', '2015-02-16 07:33:33', '2015-02-16 07:33:33'),
(11, 'Eternally Nocturnal Slouch Beanie', '', 'Accessories', '15.99', 'BN2QHMU92VZ4C', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Eternally Nocturnal Slouch Beanie.jpg', '2015-02-16 07:38:09', '2015-02-16 07:38:09'),
(12, 'Embroidered Logo Beanie - Red', '', 'Accessories', '15.99', '8DZVC5QLKKXZ4', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Embroidered Logo Beanie - Red.jpg', '2015-02-16 07:42:49', '2015-02-16 07:42:49'),
(13, 'Embroidered Logo Beanie - White', '', 'Accessories', '15.99', '5EMBAPASHMSR2', 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 'Embroidered Logo Beanie - White.jpg', '2015-02-16 07:45:47', '2015-02-16 07:45:47'),
(14, 'Eternally Nocturnal Panties', '', 'Accessories', '11.99', '96GF35M3SYD94', 1, 0, 0, 0, 0, 1, 1, 1, 0, 0, 0, 0, 'Eternally Nocturnal Panties.jpg', '2015-02-16 07:47:27', '2015-02-16 07:47:27');

-- --------------------------------------------------------

--
-- Table structure for table `productsadmins`
--

CREATE TABLE IF NOT EXISTS `productsadmins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `product_categ`
--

CREATE TABLE IF NOT EXISTS `product_categ` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `product_categ`
--

INSERT INTO `product_categ` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Tanks', '2015-02-16 07:00:53', '2015-02-16 07:00:53'),
(2, 'Tees', '2015-02-16 07:00:59', '2015-02-16 07:00:59'),
(3, 'Accessories', '2015-02-16 07:01:08', '2015-02-16 07:01:08'),
(4, '¾ Tees', '2015-02-16 07:01:16', '2015-02-16 07:01:16'),
(5, 'Hoodies', '2015-02-16 07:01:21', '2015-02-16 07:01:21');

-- --------------------------------------------------------

--
-- Table structure for table `revenues`
--

CREATE TABLE IF NOT EXISTS `revenues` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE IF NOT EXISTS `sales` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `shows`
--

CREATE TABLE IF NOT EXISTS `shows` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

CREATE TABLE IF NOT EXISTS `sizes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`id`, `size`, `created_at`, `updated_at`) VALUES
(1, 'xsmall', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 'small', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 'medium', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 'large', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'xlarge', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'xxlarge', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'xxxlarge', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `urls`
--

CREATE TABLE IF NOT EXISTS `urls` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `created_at`, `updated_at`) VALUES
(1, 'zdkama', '$2y$10$AlwT7lqXRjbeTQXrlk.DFeC8O2rASslsYRDGik5PZARUdRjMk07jy', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
