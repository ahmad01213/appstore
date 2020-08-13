-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2020 at 12:23 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u727371641_appdream`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(155) NOT NULL,
  `name` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Quii velit nam.', '0562504352', 'aebrahima830@gmail.com', 'Quii velit nam.', '2020-07-08', '2020-07-08'),
(2, 'Quii velit nam.', '0562504352', 'ritalwater.com@gmail.com', 'dflkdgh', '2020-07-08', '2020-07-08'),
(3, 'Quii velit nam.', '0562504352', 'ritalwater.com@gmail.com', 'scfdsdsfdsfsd', '2020-07-08', '2020-07-08'),
(4, 'Quii velit nam.', '0562504352', 'aaa@aa', 'dfcds', '2020-07-08', '2020-07-08'),
(5, 'Quii velit nam.', '0562504352', 'aaa@aa', 'xdsdcs', '2020-07-08', '2020-07-08'),
(6, 'cdsfcds', 'dds', 'admin@webmall.com', 'dsads', '2020-07-08', '2020-07-08'),
(7, 'Quii velit nam.', '0562504352', 'sassa', 'sddsa', '2020-07-08', '2020-07-08'),
(8, 'Quii velit nam.', '32', 'aaa@aa', 'dgfgdf', '2020-07-08', '2020-07-08'),
(9, 'Quii velit nam.', '0562504352', 'aaa@aa', 'ؤسيؤس', '2020-07-08', '2020-07-08'),
(10, 'Quii velit nam.', '0562504352', 'sdsd', 'ddsd', '2020-07-08', '2020-07-08'),
(11, 'cdsfcds', '0562504352', 'aaa@aa', 'dsdsa', '2020-07-08', '2020-07-08');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `replay` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '---',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(12, '2020_07_03_044014_create_table_products', 1),
(25, '2014_10_12_000000_create_users_table', 2),
(26, '2014_10_12_100000_create_password_resets_table', 2),
(27, '2019_08_19_000000_create_failed_jobs_table', 2),
(28, '2020_05_11_124234_create_messages_table', 2),
(29, '2020_07_03_051513_create_products_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `text`, `type`, `created_at`, `updated_at`) VALUES
(1, 'نحن في مياه ريتال نراعي تطبيق المعايير الصحية ونهتم بالجودة ونسعى دائما للوصول الى تحقيق التوازان المثالي للمعادن والاملاح في مياهنا كي تكون الافضل ..\r\nحيث ان توازن الاملاح والمعادن مهم جدا لصحة الجسم ولارتواء الخلايا ولتوازن الجسم وتحقيق اعلى مستوى للصحة والنشاط والحيوية طوال اليوم..\r\nخصوصا في منطقتنا حيث يسود الجو الحار وارتفاع درجة الحراره وبذلك يفقد الجسم الكثير من كميات المياه و تتنوع منتجات مياه ريتال لتلبي مختلف الاحتياجات اليومية لكل افراد العائلة ولتناسب الاماكن من حولكم\r\nفهناك العبوات الصغير بحجم 200 ملم للاطفال والتي تناسب مع شنط المدرسة ,\r\nوعبوة 330 ملم مناسبة تماما لمكتبك او سيارتك وتكون انيقة في العمل او الولائم والعزائم\r\nكما تناسب عبوة 600 مل الرياضيين والأشخاص الذين يرغبون بشرب كميات وفيره من الماء بشكل دوري وتتناسب مع ارفف أبواب الثلاجات بشكل مثالي بتصميمها الانسيابي الذي لا يحجز حيزا كبيرا ,\r\nكما أن اسطولنا يصل اليكم في اي مكان داخل مدينة الأحساء ليؤمن لكم الكمية التي ترغبون بها والخدمة التي ترضيكم.\r\n\r\nللطلب والاستفسار يسعدنا استقبال اتصالاتكم وطلباتكم على:\r\nواتساب: 0544006268\r\nالرقم الموحد: 920009731', 'about', NULL, NULL),
(2, '0562594352', 'اتصل بنا', NULL, NULL),
(3, '232', 'points_per_rial', '2020-05-24 11:15:20', '2020-05-24 11:15:20'),
(4, '0503841961', 'whats', '2020-06-01 23:52:14', '2020-06-01 23:52:14'),
(5, '0503841961', 'phone', '2020-06-01 23:52:14', '2020-06-01 23:52:14');

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `desc`, `image`, `file`, `created_at`, `updated_at`) VALUES
(80, 'لعبة بابجي الشهيرة', 'لعبة بابجي الشهيرة', 'http://localhost/appstore/public/images/1594112537.png', 'http://localhost/appstore/public/files/لعبة بابجي الشهيرة1594112537.zip', '2020-07-07 16:02:17', '2020-07-07 16:02:17'),
(82, 'Quii velit nam.', 'Quii velit nam.', 'http://localhost/appstore/public/images/1594113167.png', 'http://localhost/appstore/public/files/Quii velit nam.1594113166.pdf', '2020-07-07 16:12:47', '2020-07-07 16:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '0562594352', 'admin', '$2y$10$b7ah8JsTcQzBGp/UlfDm4ulL/mTvdKqyKOv65uJ3hDLC78ZIfTLJm', NULL, NULL, '2020-07-07 12:41:34'),
(2, 'ahmed', 'aebrahima830@gmail.com', '0562504352', 'user', '$2y$10$8ZUP.WxCyOXHHLdPI7oA7.4LX8VpwfFN6U9qFYvBJA6t1rN2MjeBK', NULL, '2020-07-08 13:07:38', '2020-07-08 13:07:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_phone_unique` (`phone`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(155) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
