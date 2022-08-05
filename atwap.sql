-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 05, 2022 at 10:22 AM
-- Server version: 5.7.33
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atwap`
--

-- --------------------------------------------------------

--
-- Table structure for table `crud`
--

CREATE TABLE `crud` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `favoritecolor` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `crud`
--

INSERT INTO `crud` (`id`, `name`, `favoritecolor`, `email`, `password`) VALUES
(5, 'Kike', 'blue', 'kokosheoladapo@gmail.com', ''),
(6, 'Oviani Irefu', 'Green', 'seaddoacademy@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `datetime` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `password`, `phone`, `status`, `datetime`) VALUES
(8, 'Oluwaseun Owookade', 'contact@milon.im', '$2y$10$EgyYfR2ZlbUK2snMuFtuvuuPOFrhQQKKJoZT3S2/rnbKaiM3qqsRa', '08036909804', 'activated', '2022-07-27 11:29:37'),
(9, 'Oluwaseun Owookade', 'ermsarrrpp@gmail.com', '$2y$10$owGs.39Q3CAq7CsE.NUc9uWBVU9wYyeWLKpDlJTUxqKljFyIMEZpy', '08036909804', 'activated', '2022-07-27 11:31:22');

-- --------------------------------------------------------

--
-- Table structure for table `dues`
--

CREATE TABLE `dues` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `month` varchar(50) DEFAULT NULL,
  `unit` varchar(50) DEFAULT NULL,
  `year` varchar(50) DEFAULT NULL,
  `datepaid` varchar(50) DEFAULT NULL,
  `remarks` varchar(100) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dues`
--

INSERT INTO `dues` (`id`, `name`, `email`, `amount`, `month`, `unit`, `year`, `datepaid`, `remarks`, `created_at`, `updated_at`) VALUES
(36, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'January', 'Unit 2', '2022', '2022-08-01', 'Paid for the whole of year 2022', '2022-08-04 10:18:55', '2022-08-04 10:18:55'),
(37, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'February', 'Unit 2', '2022', '2022-08-01', 'Paid for the whole of year 2022', '2022-08-04 10:18:55', '2022-08-04 10:18:55'),
(38, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'March', 'Unit 2', '2022', '2022-08-02', 'Paid for the whole of year 2022', '2022-08-04 10:18:55', '2022-08-04 10:18:55'),
(39, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'April', 'Unit 2', '2022', '2022-08-02', 'Paid for the whole of year 2022', '2022-08-04 10:18:55', '2022-08-04 10:18:55'),
(40, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'May', 'Unit 2', '2022', '2022-08-02', 'Paid for the whole of year 2022', '2022-08-04 10:18:55', '2022-08-04 10:18:55'),
(41, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'June', 'Unit 2', '2022', '2022-08-03', 'Paid for the whole of year 2022', '2022-08-04 10:18:55', '2022-08-04 10:18:55'),
(42, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'July', 'Unit 2', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:18:56', '2022-08-04 10:18:56'),
(43, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'August', 'Unit 2', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:18:56', '2022-08-04 10:18:56'),
(44, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'September', 'Unit 2', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:18:56', '2022-08-04 10:18:56'),
(45, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'October', 'Unit 2', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:18:56', '2022-08-04 10:18:56'),
(46, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'November', 'Unit 2', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:18:56', '2022-08-04 10:18:56'),
(47, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'December', 'Unit 2', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:18:56', '2022-08-04 10:18:56'),
(48, 'Oluwaseun Owookade', 'y2kemmaddo@yahoo.com', '1500', 'January', 'Unit 1', '2022', '2022-08-01', 'Paid for the whole of year 2022', '2022-08-04 10:19:37', '2022-08-04 10:19:37'),
(49, 'Oluwaseun Owookade', 'y2kemmaddo@yahoo.com', '1500', 'February', 'Unit 1', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:19:38', '2022-08-04 10:19:38'),
(50, 'Oluwaseun Owookade', 'y2kemmaddo@yahoo.com', '1500', 'March', 'Unit 1', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:19:38', '2022-08-04 10:19:38'),
(51, 'Oluwaseun Owookade', 'y2kemmaddo@yahoo.com', '1500', 'April', 'Unit 1', '2022', '2022-08-04', 'Paid for the whole of year 2022', '2022-08-04 10:19:38', '2022-08-04 10:19:38'),
(52, 'Oluwaseun Owookade', 'y2kemmaddo@yahoo.com', '1500', 'May', 'Unit 1', '2022', '2022-08-05', 'Paid for the whole of year 2022', '2022-08-04 10:19:38', '2022-08-04 10:19:38'),
(53, 'Ado Ibrahim', 'ermsapp@gmail.com', '1500', 'January', 'Unit 2', '2023', '2022-08-05', 'testing', '2022-08-05 05:41:39', '2022-08-05 05:41:39');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `amount` varchar(20) DEFAULT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`id`, `name`, `amount`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Nylon', '1800', 'Bought nylon for selling', '2022-08-05 09:47:39', '2022-08-05 09:47:39'),
(3, 'Software Renewal', '25000', 'Hosting, Domain and Security Renewal Made for year 2022', '2022-08-05 09:47:39', '2022-08-05 09:47:39'),
(4, 'Fuel for Gen', '3000', 'Fuel usef in the gen during excos electioin', '2022-08-05 10:21:04', '2022-08-05 10:21:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `memo`
--

CREATE TABLE `memo` (
  `id` int(11) NOT NULL,
  `topic` varchar(500) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `image_name` varchar(500) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memo`
--

INSERT INTO `memo` (`id`, `topic`, `content`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'First Memo Yes its first', 'Might not be attractive, but I don\'t see a good/better way around it for your criteria. If it was just a matter of looping over data if it existed and outputting a message if it didn\'t, that\'s simple. You have an extra requirement, which is to output a message (a form in this case) AND loop over the data if there is data to loop over, and output a message if there isn\'t. That\'s exactly what your succinct code does. I don\'t know how you\'d improve it really, except', 'playstation.jpg', '2022-08-01 12:07:27', '2022-08-01 12:08:51');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `minutes`
--

CREATE TABLE `minutes` (
  `id` int(11) NOT NULL,
  `topic` varchar(500) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `image_name` varchar(500) DEFAULT NULL,
  `created_at` varchar(100) DEFAULT NULL,
  `updated_at` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `minutes`
--

INSERT INTO `minutes` (`id`, `topic`, `content`, `image_name`, `created_at`, `updated_at`) VALUES
(1, 'First Monthly MInutes of August Special', 'Might not be attractive, but I don\'t see a good/better way around it for your criteria. If it was just a matter of looping over data if it existed and outputting a message if it didn\'t, that\'s simple. You have an extra requirement, which is to output a message (a form in this case) AND loop over the data if there is data to loop over, and output a message if there isn\'t. That\'s exactly what your succinct code does. I don\'t know how you\'d improve it really, except', 'phone.jpg', '2022-08-01 11:03:54', '2022-08-01 11:15:22');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `intro` varchar(500) DEFAULT NULL,
  `content` varchar(5000) DEFAULT NULL,
  `image_name` varchar(100) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `intro`, `content`, `image_name`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Titile', 'jkljkljkl', 'jkljkljklj', 'alexa.jpg', 'Activated', '2022-07-31 09:13:10', '2022-07-31 09:13:10'),
(5, 'New Exco Election of newly appointed members', 'you should add some details to your answer. Why do you insert the code inside the button instead of writing it in the head section or into an external file? ', 'I think you should add some details to your answer. Why do you insert the code inside the button instead of writing it in the head section or into an external file? This is a very generic function and the programmer may want to use it several times for several buttons, I wouldn\'t write it inside a single specific button... – \nfranz1\n Jun 22, 2020 at 17:04\n@franz1 You\'re missundertanding what is shown in the answer, this code is\'nt inside a button, this is code which can be executed inside a fuction and the function be called with anyone button at onclick=\"myFunctionT', 'camera.jpg', 'Activated', '2022-07-31 10:46:18', '2022-07-31 10:46:18'),
(6, 'Title', 'This is an intro', 'jlkjlk jlkjklj', 'nichcoin-presalepp.jpg', 'Activated', '2022-07-31 11:09:11', '2022-07-31 11:09:11');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(6) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `image_path` varchar(500) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `image_name` varchar(500) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `datetime` varchar(20) DEFAULT NULL,
  `updated_at` varchar(20) DEFAULT NULL,
  `created_at` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `image_path`, `price`, `image_name`, `description`, `status`, `datetime`, `updated_at`, `created_at`) VALUES
(73, 'Bag of Satchet Water', NULL, '180', 'bag of pure water.jpg', 'A pack of Maprolen Pure Water containing 20 pieces', NULL, NULL, '2022-07-27 16:14:11', '2022-07-26 11:21:44'),
(74, 'Pure Water Packing Nylon', NULL, '2700', 'pure water nylon.jpg', 'Qualitative Pure Water Packing Nylon', NULL, NULL, '2022-07-26 11:22:35', '2022-07-26 11:22:35'),
(75, 'Ice Bag', NULL, '1500', 'icebag.jpg', 'Our Qualitaive Ice Bag', NULL, NULL, '2022-07-26 12:39:34', '2022-07-26 12:39:34');

-- --------------------------------------------------------

--
-- Table structure for table `sales`
--

CREATE TABLE `sales` (
  `id` int(20) NOT NULL,
  `productname` varchar(50) NOT NULL,
  `buyername` varchar(50) NOT NULL,
  `buyeremail` varchar(50) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `datetime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sales`
--

INSERT INTO `sales` (`id`, `productname`, `buyername`, `buyeremail`, `amount`, `status`, `datetime`) VALUES
(1, 'Maprolen Bottle Water Pack', 'Owookade Oluwaseun', 'owowumi4all@gmail.com', '2800', 'pending', '2022-07-16'),
(2, 'Maprolen Nylon', 'Owookade Oluwaseun', 'owowumi4all@gmail.com', '4000', 'paid', '2022-07-16'),
(3, 'Maprolen Bottle Water Pack', 'Owookade Oluwaseun', 'owowumi4all@gmail.com', '2800', 'pending', '2022-07-16'),
(4, 'Maprolen Nylon', 'Owookade Oluwaseun', 'owowumi4all@gmail.com', '3000', 'paid', '2022-07-16');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `id` int(11) NOT NULL,
  `unitname` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `created_at` varchar(50) DEFAULT NULL,
  `updated_at` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `unitname`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Unit 1', 'Ondo Road', '2022-07-31 20:34:40', '2022-07-31 20:34:40'),
(2, 'Unit 2', 'Ijapo', '2022-07-31 20:36:05', '2022-07-31 20:36:05'),
(4, 'Oshofha', 'express road', '2022-08-01 00:18:25', '2022-08-01 00:18:25'),
(5, 'Adex Bright', 'Oba Adeshida Road Akure', '2022-08-01 00:18:48', '2022-08-01 00:18:48');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `usertype` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `position` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `unit` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `name`, `email`, `usertype`, `position`, `status`, `username`, `phone`, `gender`, `unit`, `email_verified_at`, `password`, `remember_token`, `image_name`, `created_at`, `updated_at`) VALUES
(2, NULL, 'Ado Ibrahim', 'ermsapp@gmail.com', 'Exco', NULL, 'Activated', NULL, '08036909804', 'Male', 'Unit 2', NULL, '$2y$10$01nhQc9dqWcZ7D5GVU/CuujLvBpe01RsOnc1W6v5aPMBRjAgvit9a', NULL, 'nichcoin-presale.jpg', NULL, '2022-07-29 22:45:41'),
(28, NULL, 'Oluwaseun Owookade', 'y2kemmaddo@yahoo.com', 'Exco', 'Treasurer', 'Activated', NULL, '08036909804', 'Female', 'Unit 1', NULL, '$2y$10$Xan.oN6Hac5Gzl/SGlWSZ.8uhkSl9kV2Lq5BGISMqLxE40OiokkmW', NULL, 'mouse.jpg', '2022-07-31 09:02:55', '2022-07-31 09:02:55'),
(32, NULL, 'Book Me Now', 'bookmenow.com.ng@gmail.com', 'Member', 'member', 'Activated', NULL, '08036909804', 'Male', 'Unit 1', NULL, '$2y$10$wSSgN2AyMzXZuQBQs0zo9eMYExnPKpFwVAwwTRem7K4SlaysQFQPa', NULL, 'abitrep.jpg', '2022-08-02 18:05:53', '2022-08-02 18:05:53'),
(33, NULL, 'Nwobodo Izu', 'nwobodoizu55@gmail.com', 'Member', 'member', 'Activated', NULL, '08036909804', 'Male', 'Unit 1', NULL, '$2y$10$r4pyywiPp7WTPxixN8Q1cOMUeLt6KipqmH8oySQw4g89Gg4uFbGhq', NULL, 'anambra_naira_background.png', '2022-08-02 18:09:08', '2022-08-02 18:09:08');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dues`
--
ALTER TABLE `dues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `memo`
--
ALTER TABLE `memo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `minutes`
--
ALTER TABLE `minutes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sales`
--
ALTER TABLE `sales`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `dues`
--
ALTER TABLE `dues`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memo`
--
ALTER TABLE `memo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `minutes`
--
ALTER TABLE `minutes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `sales`
--
ALTER TABLE `sales`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
