-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2018 at 03:26 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mobile_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_Status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `category_name`, `publication_Status`, `created_at`, `updated_at`) VALUES
(2, 'Samsung', 1, NULL, NULL),
(3, 'Nokia', 1, NULL, NULL),
(4, 'Sony', 1, NULL, NULL),
(5, 'Huawei', 1, NULL, NULL),
(6, 'Lava', 1, NULL, NULL),
(7, 'Oppo', 1, NULL, NULL),
(8, 'Symphony', 1, NULL, NULL),
(9, 'Apple', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `color`
--

CREATE TABLE `color` (
  `id` int(10) UNSIGNED NOT NULL,
  `color_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `color`
--

INSERT INTO `color` (`id`, `color_name`, `created_at`, `updated_at`) VALUES
(1, 'Black', NULL, NULL),
(2, 'White', NULL, NULL),
(3, 'Blue', NULL, NULL),
(4, 'Red', NULL, NULL),
(5, 'Pink', NULL, NULL),
(6, 'Ash', NULL, NULL),
(7, 'Silver', NULL, NULL),
(10, 'Golden', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2018_09_04_075338_create_category_table', 1),
(2, '2018_09_04_155155_create_product_table', 2),
(3, '2018_09_04_160842_create_color_table', 2),
(4, '2018_09_05_212200_create_user_table', 3),
(5, '2018_09_05_233059_create_user_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_category` tinyint(4) NOT NULL,
  `product_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_color` tinyint(4) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_Status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_category`, `product_description`, `product_color`, `product_price`, `product_image`, `publication_Status`, `created_at`, `updated_at`) VALUES
(26, 'I Pad(2)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 2, 65, 'Product-Image/i-pad(2).jpg', 1, NULL, NULL),
(27, 'I Pad(5)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 5, 65, 'Product-Image/i-pad(5).jpg', 1, NULL, NULL),
(28, 'samsung Galaxy Tab S4(1)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 25, 'Product-Image/samsung-galaxy-tab-s4(1).jpg', 1, NULL, NULL),
(29, 'samsung Galaxy Note 9(10)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 10, 30, 'Product-Image/samsung-galaxy-note-9(10).jpg', 1, NULL, NULL),
(30, 'I Pad(7)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 7, 65, 'Product-Image/i-pad(7).jpg', 1, NULL, NULL),
(31, 'I Phone 6s(5)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 5, 70, 'Product-Image/i-phone-6s(5).jpg', 1, NULL, NULL),
(32, 'samsung Galaxy Note 9(3)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 3, 25, 'Product-Image/samsung-galaxy-note-9(3).jpg', 1, NULL, NULL),
(33, 'samsung Galaxy Note 9(1)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 25, 'Product-Image/samsung-galaxy-note-9(1).jpg', 1, NULL, NULL),
(34, 'I Phone 7 Plus(1)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 70, 'Product-Image/i-phone-7-plus(1).jpg', 1, NULL, NULL),
(35, 'I Phone 7 Plus(4)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 4, 65, 'Product-Image/i-phone-7-plus(4).jpg', 1, NULL, NULL),
(36, 'samsung Galaxy J7(1)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 35, 'Product-Image/samsung-galaxy-j7(1).jpg', 1, NULL, NULL),
(37, 'samsung Galaxy J3(7)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 7, 26, 'Product-Image/samsung-galaxy-j3(7).jpg', 1, NULL, NULL),
(38, 'I Phone 8 Plus(1)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 70, 'Product-Image/i-phone-8-plus(1).jpg', 1, NULL, NULL),
(39, 'I Phone 8 Plus(2)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 2, 65, 'Product-Image/i-phone-8-plus(2).jpg', 1, NULL, NULL),
(40, 'I Phone X(1)(1)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 75, 'Product-Image/i-phone-x(1).jpg', 1, NULL, NULL),
(41, 'I Phone X(2)', 9, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 2, 70, 'Product-Image/i-phone-x(2).jpg', 1, NULL, NULL),
(42, 'samsung Galaxy A8 A9(1)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 1, 35, 'Product-Image/samsung-galaxy-a8-a9(1).jpg', 1, NULL, NULL),
(43, 'samsung Galaxy A8 A9(2)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 2, 35, 'Product-Image/samsung-galaxy-a8-a9(2).jpg', 1, '0000-00-00 00:00:00', NULL),
(44, 'samsung Galaxy J2(6)', 2, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\nLorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, \r\nwhen an unknown printer took a galley of type and scrambled it to make a type \r\nspecimen book. It has survived not only five centuries, but also the leap into \r\nelectronic typesetting, remaining essentially unchanged.', 6, 26, 'Product-Image/samsung-galaxy-j2(6).jpg', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shoppingcart`
--

INSERT INTO `shoppingcart` (`identifier`, `instance`, `content`, `created_at`, `updated_at`) VALUES
('rakibul Islam', 'wishlist', 'O:29:\"Illuminate\\Support\\Collection\":1:{s:8:\"\0*\0items\";a:0:{}}', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'rakibul Islam', 'test@test.com', '1234', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `color`
--
ALTER TABLE `color`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `user_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `color`
--
ALTER TABLE `color`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
