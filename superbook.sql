-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 13, 2020 at 08:08 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `superbook`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_publication` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `editon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `author`, `place_of_publication`, `editon`, `description`, `created_at`, `updated_at`, `user_id`, `deleted_at`) VALUES
(1, 'The Naughty man', 'Victor Nwakwue', 'Lagos', '2', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-12 13:15:45', '2020-11-13 12:03:03', 0, NULL),
(3, 'Business development', 'Abdul Mohammed', 'Kano', '8', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-12 19:55:36', '2020-11-12 19:55:36', 3, NULL),
(5, 'The Jonsing Man', 'James Honigstein', 'London', '7', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-13 12:06:03', '2020-11-13 12:06:03', 3, NULL),
(6, 'Final Progress', 'Sarah Fisher', 'USA', '1', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-13 12:06:45', '2020-11-13 12:06:45', 3, NULL),
(7, 'Reveal the toolbar', 'Timothy Castagne', 'Viena', '9', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-13 12:08:31', '2020-11-13 12:08:31', 3, NULL),
(8, 'Jealous Father', 'Olufumi Adegbero', 'Ogun', '2', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-13 12:09:54', '2020-11-13 12:09:54', 3, NULL),
(9, 'Headline Makers', 'Jude Robinson', 'Wales', '4', 'In this book, Victor goes beyond the event, and dives into what it means to discover your truth and speak it, why people should do this, and then deeply explains exactly how this can be done. If you feel living more authentically could allow you to have a greater impact on others, or you can’t find the words to speak your truth as boldly as you know you need to, this is the book for you.', '2020-11-13 12:11:49', '2020-11-13 12:11:49', 3, NULL);

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
(3, '2020_11_12_112232_create_books_table', 1),
(4, '2020_11_12_142639_add_user_id_to_books', 2),
(5, '2020_11_13_104159_add_deleted_at_to_books', 3),
(6, '2020_11_13_150508_add_more_column_to_users', 4);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `highlight` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bio` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `age`, `address`, `city`, `country`, `highlight`, `profile_image`, `bio`) VALUES
(3, 'Ayofemi Babatunde', 'ayofemi@gnail.com', NULL, '$2y$10$VgN/ZgkV0xvs69bYNxCVb.WhvBnMbzEo6cPJtKlpNMNqZboRV7wJy', '2vVaIFVJSIxZWk2aJqmyZbMN3xJYfW0kMTwVDyZWApob6U1V0Pa6vpLHMvAX', '2020-11-12 15:17:57', '2020-11-13 17:52:45', '20', '12 Olayinka Kuteyi, Rock Stone Estate, Badore Ajah Road, Lekki Expressway, Lagos.', 'Lekki', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
