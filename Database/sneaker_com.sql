-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 30, 2020 at 08:25 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sneaker.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(11) NOT NULL,
  `date_order` datetime NOT NULL,
  `total` float NOT NULL,
  `note` varchar(500) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `id_customer`, `date_order`, `total`, `note`, `created_at`, `updated_at`) VALUES
(1, 1, '2020-08-17 00:00:00', 11714000, 'luv', '2020-08-17 03:47:21', '2020-08-17 10:47:21'),
(2, 2, '2020-08-19 00:00:00', 31590000, 'ụp ụp ụp', '2020-08-18 19:32:10', '2020-08-19 02:32:10'),
(3, 3, '2020-08-29 00:00:00', 3420000, 'b', '2020-08-29 00:29:42', '2020-08-29 07:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(11) NOT NULL,
  `id_bill` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `unit_price` float NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bill_detail`
--

INSERT INTO `bill_detail` (`id`, `id_bill`, `id_product`, `quantity`, `unit_price`, `created_at`, `update_at`) VALUES
(1, 1, 5, 1, 1710000, '2020-08-19 02:12:56', NULL),
(2, 1, 14, 1, 1305000, '2020-08-17 10:47:21', NULL),
(3, 1, 23, 1, 1350000, '2020-08-17 10:47:21', NULL),
(4, 1, 25, 1, 7349000, '2020-08-17 10:47:21', NULL),
(5, 2, 9, 1, 1900000, '2020-08-19 02:32:10', NULL),
(6, 2, 10, 1, 5000000, '2020-08-19 02:32:10', NULL),
(7, 2, 26, 1, 24690000, '2020-08-19 02:32:10', NULL),
(8, 3, 5, 2, 1710000, '2020-08-29 07:29:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `note` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `gender`, `email`, `address`, `phone_number`, `note`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Quốc Phong', 'male', 'doquocphong321@gmail.com', 'Hải Dương', '0368738942', 'I\'m a bad boy!!', '2020-08-17 03:47:21', '2020-08-17 10:47:21'),
(2, 'Nguyễn Minh Châm', 'female', 'legendcuagio2@gmail.com', 'Phú Thọ', '0368738942', 'ụp ụp ụp', '2020-08-18 19:32:10', '2020-08-19 02:32:10'),
(3, 'Đỗ Quốc Phong', 'male', 'doquocphong321@gmail.com', 'Hải Dương', '0368738942', 'a', '2020-08-29 00:29:42', '2020-08-29 07:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(255) NOT NULL,
  `id_product` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `id_product`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 5, 'Vans classic pig-suede sunflower', 0x425938485f56616e735f636c61737369635f7069675f73756564652e706e67, '2020-08-06 23:20:03', '2020-08-07 06:20:03'),
(2, 5, 'Vans classic pig-suede sunflower', 0x4f6e78745f56616e735f636c61737369635f7069675f7375656465332e706e67, '2020-08-06 23:20:03', '2020-08-07 06:20:03'),
(3, 5, 'Vans classic pig-suede sunflower', 0x594258465f56616e735f636c61737369635f7069675f7375656465342e706e67, '2020-08-06 23:20:03', '2020-08-07 06:20:03'),
(4, 5, 'Vans classic pig-suede sunflower', 0x4d3755385f56616e735f636c61737369635f7069675f7375656465352e706e67, '2020-08-06 23:20:03', '2020-08-07 06:20:03'),
(5, 6, 'Giày Vans Old Skool Pig Suedee', 0x4f7976565f56616e735f6f6c645f736b6f6f6c5f7069675f7375656465322e706e67, '2020-08-06 23:33:25', '2020-08-07 06:33:25'),
(6, 6, 'Giày Vans Old Skool Pig Suedee', 0x515751435f56616e735f6f6c645f736b6f6f6c5f7069675f7375656465332e706e67, '2020-08-06 23:33:25', '2020-08-07 06:33:25'),
(7, 6, 'Giày Vans Old Skool Pig Suedee', 0x344b6d515f56616e735f6f6c645f736b6f6f6c5f7069675f7375656465342e706e67, '2020-08-06 23:33:25', '2020-08-07 06:33:25'),
(8, 6, 'Giày Vans Old Skool Pig Suedee', 0x41434f5a5f56616e735f6f6c645f736b6f6f6c5f7069675f7375656465352e706e67, '2020-08-06 23:33:25', '2020-08-07 06:33:25'),
(17, 30, 'Giày Vans Era Comfycush Pink Checker', 0x7443714b5f70696e6b342e706e67, '2020-08-29 20:40:41', '2020-08-30 03:40:41'),
(18, 30, 'Giày Vans Era Comfycush Pink Checker', 0x536c46315f70696e6b352e706e67, '2020-08-29 20:40:41', '2020-08-30 03:40:41'),
(19, 30, 'Giày Vans Era Comfycush Pink Checker', 0x6778326e5f70696e6b362e706e67, '2020-08-29 20:40:41', '2020-08-30 03:40:41'),
(20, 12, 'a', 0x777a424b5f322e312e706e67, '2020-08-29 20:44:42', '2020-08-30 03:44:42'),
(21, 12, 'a', 0x416144615f322e322e706e67, '2020-08-29 20:44:42', '2020-08-30 03:44:42'),
(22, 12, 'a', 0x436a63615f322e332e706e67, '2020-08-29 20:44:42', '2020-08-30 03:44:42'),
(23, 12, 'a', 0x776854725f322e342e706e67, '2020-08-29 20:44:42', '2020-08-30 03:44:42'),
(24, 7, 'b', 0x6e4657755f332e312e706e67, '2020-08-29 20:47:22', '2020-08-30 03:47:22'),
(25, 7, 'b', 0x5133354c5f332e322e706e67, '2020-08-29 20:47:22', '2020-08-30 03:47:22'),
(26, 7, 'b', 0x75635a505f332e332e706e67, '2020-08-29 20:47:22', '2020-08-30 03:47:22'),
(27, 7, 'b', 0x483133395f332e342e706e67, '2020-08-29 20:47:22', '2020-08-30 03:47:22');

-- --------------------------------------------------------

--
-- Table structure for table `image_new`
--

CREATE TABLE `image_new` (
  `id` int(255) NOT NULL,
  `id_new` int(255) NOT NULL,
  `image` longblob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `title` text NOT NULL,
  `contentt` text NOT NULL,
  `image` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `contentt`, `image`, `created_at`, `updated_at`) VALUES
(5, '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">No wonder the Germans won half of the world\'s Nobel prize</strong><br></p>', '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">No wonder the Germans won half of the world\'s Nobel prize, look at 0-6 years old to learn what!</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Children age 6 most suitable for preschool education how? What kind of education can kill the child\'s natural precious things, what kind of education will make these precious things to bloom and benefit the whole life?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In twentieth Century, Germany has more Nobel prizes than any other country, swept the world half of the Nobel prize. The Germans are well known for their rigorous education, and they have come from the practice of thinking over and over again. \"Three years old look big, seven years old look old\", also is the case, the German children\'s pre-school education is also the world\'s attention, they in the end is how to cultivate so many excellent talents?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">1. Home education</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">The focus is on the mother to the child\'s education. German social welfare is very good, so most of the German mother in the first few years after the birth of a child with a child,Germans believe that the role of the mother of the child\'s growth has an important position, so the German full-time mother and even to their own as a mother proud. So when they make the effort to make the child, it also reveals the wisdom of everywhere:</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Self-reliance from the beginning of the meal</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">When the baby can hold tableware from their meals, can sit to children to eat their own meals in the stool, mothers are fully prepared to clean up the mess. By the age of 3, you can have dinner at the dinner table with the adults. The most important thing is that they do not feed, do not force children to eat, my mother decided to prepare what nutrition food, do not eat, how to eat decided by the child. And China\'s adults are always worried about the child is too small to do sth over and over again, not enough to eat, people than our Chinese children grow stronger?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Cultivate perseverance character</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In the concept of many families in Germany, there is no failure, only temporarily without success, so the German baby even a little age will know the truth. Have seen a Chinese follow their parents to the 5 year old German boy, a running race in a school, the children ran a sprained foot, the teacher used to comfort said \"although failure, but you have been brave\" and so on, the German children quickly corrected teacher: \"I have not failed, but there is no success, hear others feel really great German doll.</span><br></p>', 'tXpY_3094e0fd1114787639e8e334a840ca02.jpg', '2020-08-20 03:48:14', '2020-08-20 03:48:14'),
(6, '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">1. Home education</strong><br></p>', '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">No wonder the Germans won half of the world\'s Nobel prize, look at 0-6 years old to learn what!</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Children age 6 most suitable for preschool education how? What kind of education can kill the child\'s natural precious things, what kind of education will make these precious things to bloom and benefit the whole life?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In twentieth Century, Germany has more Nobel prizes than any other country, swept the world half of the Nobel prize. The Germans are well known for their rigorous education, and they have come from the practice of thinking over and over again. \"Three years old look big, seven years old look old\", also is the case, the German children\'s pre-school education is also the world\'s attention, they in the end is how to cultivate so many excellent talents?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">1. Home education</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">The focus is on the mother to the child\'s education. German social welfare is very good, so most of the German mother in the first few years after the birth of a child with a child,Germans believe that the role of the mother of the child\'s growth has an important position, so the German full-time mother and even to their own as a mother proud. So when they make the effort to make the child, it also reveals the wisdom of everywhere:</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Self-reliance from the beginning of the meal</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">When the baby can hold tableware from their meals, can sit to children to eat their own meals in the stool, mothers are fully prepared to clean up the mess. By the age of 3, you can have dinner at the dinner table with the adults. The most important thing is that they do not feed, do not force children to eat, my mother decided to prepare what nutrition food, do not eat, how to eat decided by the child. And China\'s adults are always worried about the child is too small to do sth over and over again, not enough to eat, people than our Chinese children grow stronger?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Cultivate perseverance character</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In the concept of many families in Germany, there is no failure, only temporarily without success, so the German baby even a little age will know the truth. Have seen a Chinese follow their parents to the 5 year old German boy, a running race in a school, the children ran a sprained foot, the teacher used to comfort said \"although failure, but you have been brave\" and so on, the German children quickly corrected teacher: \"I have not failed, but there is no success, hear others feel really great German doll.</span><br></p>', 'cgZo_86ffb87572d657f335cd7cd828c70de3.jpg', '2020-08-10 21:34:39', '2020-08-11 04:34:39'),
(7, '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Cultivate perseverance character</strong><br></p>', '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">No wonder the Germans won half of the world\'s Nobel prize, look at 0-6 years old to learn what!</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Children age 6 most suitable for preschool education how? What kind of education can kill the child\'s natural precious things, what kind of education will make these precious things to bloom and benefit the whole life?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In twentieth Century, Germany has more Nobel prizes than any other country, swept the world half of the Nobel prize. The Germans are well known for their rigorous education, and they have come from the practice of thinking over and over again. \"Three years old look big, seven years old look old\", also is the case, the German children\'s pre-school education is also the world\'s attention, they in the end is how to cultivate so many excellent talents?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">1. Home education</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">The focus is on the mother to the child\'s education. German social welfare is very good, so most of the German mother in the first few years after the birth of a child with a child,Germans believe that the role of the mother of the child\'s growth has an important position, so the German full-time mother and even to their own as a mother proud. So when they make the effort to make the child, it also reveals the wisdom of everywhere:</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Self-reliance from the beginning of the meal</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">When the baby can hold tableware from their meals, can sit to children to eat their own meals in the stool, mothers are fully prepared to clean up the mess. By the age of 3, you can have dinner at the dinner table with the adults. The most important thing is that they do not feed, do not force children to eat, my mother decided to prepare what nutrition food, do not eat, how to eat decided by the child. And China\'s adults are always worried about the child is too small to do sth over and over again, not enough to eat, people than our Chinese children grow stronger?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Cultivate perseverance character</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In the concept of many families in Germany, there is no failure, only temporarily without success, so the German baby even a little age will know the truth. Have seen a Chinese follow their parents to the 5 year old German boy, a running race in a school, the children ran a sprained foot, the teacher used to comfort said \"although failure, but you have been brave\" and so on, the German children quickly corrected teacher: \"I have not failed, but there is no success, hear others feel really great German doll.</span><br></p>', 'XFoF_71ce819f3e164b1cdcc92f40e12e6b18.jpg', '2020-08-10 21:34:59', '2020-08-11 04:34:59'),
(8, '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Look at 0-6 years old to learn what.</strong><br></p>', '<p><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">No wonder the Germans won half of the world\'s Nobel prize, look at 0-6 years old to learn what!</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Children age 6 most suitable for preschool education how? What kind of education can kill the child\'s natural precious things, what kind of education will make these precious things to bloom and benefit the whole life?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In twentieth Century, Germany has more Nobel prizes than any other country, swept the world half of the Nobel prize. The Germans are well known for their rigorous education, and they have come from the practice of thinking over and over again. \"Three years old look big, seven years old look old\", also is the case, the German children\'s pre-school education is also the world\'s attention, they in the end is how to cultivate so many excellent talents?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">1. Home education</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">The focus is on the mother to the child\'s education. German social welfare is very good, so most of the German mother in the first few years after the birth of a child with a child,Germans believe that the role of the mother of the child\'s growth has an important position, so the German full-time mother and even to their own as a mother proud. So when they make the effort to make the child, it also reveals the wisdom of everywhere:</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Self-reliance from the beginning of the meal</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">When the baby can hold tableware from their meals, can sit to children to eat their own meals in the stool, mothers are fully prepared to clean up the mess. By the age of 3, you can have dinner at the dinner table with the adults. The most important thing is that they do not feed, do not force children to eat, my mother decided to prepare what nutrition food, do not eat, how to eat decided by the child. And China\'s adults are always worried about the child is too small to do sth over and over again, not enough to eat, people than our Chinese children grow stronger?</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;</span><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><strong style=\"font-weight: bold; color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">Cultivate perseverance character</strong><br style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\"><span style=\"color: rgb(51, 51, 51); font-family: Tahoma, Geneva, sans-serif; font-size: 14px; text-align: justify;\">In the concept of many families in Germany, there is no failure, only temporarily without success, so the German baby even a little age will know the truth. Have seen a Chinese follow their parents to the 5 year old German boy, a running race in a school, the children ran a sprained foot, the teacher used to comfort said \"although failure, but you have been brave\" and so on, the German children quickly corrected teacher: \"I have not failed, but there is no success, hear others feel really great German doll.</span><br></p>', '8kok_everest_mountain_sky_tops_96976_1920x1080.jpg', '2020-08-10 21:35:16', '2020-08-11 04:35:16');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `id_type_product` int(10) UNSIGNED NOT NULL,
  `description` text NOT NULL,
  `unit_price` float NOT NULL,
  `promotion_price` float NOT NULL,
  `image` varchar(255) NOT NULL,
  `unit` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type_product`, `description`, `unit_price`, `promotion_price`, `image`, `unit`, `created_at`, `updated_at`) VALUES
(5, 'Giày Vans Authentic Pig Suede', 1, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Vans Authentic Pig Suede -&nbsp;</span>với sắc vàng hoa hướng dương nổi bật &amp; bề mặt giày được sử dụng&nbsp;công nghệ chống nước 3M&nbsp;đem lại sự tối ưu cho người dùng. Kiểu dáng gọn nhẹ năng động &amp; sắc màu nổi bật tạo điểm nhấn cho đôi giày</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Vans Authentic Pig Suede&nbsp;</span>vàng \"chói chang\"&nbsp;là lựa chọn tuyệt vời cho các&nbsp;tín đồ thời trang</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;</p>', 1900000, 1710000, 'WU3T_Vans _classic _pig _suede.png', 'Đồng', '2020-08-25 09:19:16', '2020-08-25 09:19:16'),
(7, 'Giày Converse Chuck 70 Signature Low', 2, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\"><em>Giày&nbsp;Converse&nbsp;Chuck 70 Signature Low Top</em></span>&nbsp;, Converse còn chơi lớn hơn khi biến nó chạy dọc trên toàn bộ thân giày. Không cần kích thước lớn, nhưng tần suất xuất hiện của nó đã khiến các bạn đã không thể rời mắt.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Phần logo gót vẫn mang đậm nét Vintage của dòng Chuck 70 với Logo first-string, phần đế được phủ bóng đặc trưng cùng công nghệ lót&nbsp;OrthoLite® kết hợp 2 lỗ thoát khí bên hông giúp vận động êm ái nhất có thể</p>', 1900000, 0, 'WzeF_Converse_chuck70.png', 'Đồng', '2020-07-27 20:32:12', '2020-07-28 03:32:12'),
(8, 'Giày Converse Run Star Hike Twisted Classic Foundational Canvas', 2, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Sản phẩm được \"remix\" từ Chuck và Runner khi 2 yếu tố thời trang được thể hiện xen kẽ: Upper canvas và đế Run Star zig-zag. Đế giày Giày Converse Run Star Hike được thiết kế với dạng răng cưa to bản, giúp tăng độ bám một cách hiệu quả vừa tạo được điểm nhấn về phong cách và ấn tượng về thời trang.&nbsp;</span><br></p>', 2500000, 0, 'U287_Converse_runstar.png', 'Đồng', '2020-07-27 20:32:43', '2020-07-28 03:32:43'),
(9, 'Giày Converse Chuck 70 Flame Low', 2, '<p><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Chuck 70 Flame&nbsp;</span></em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">được phát triển dựa trên đôi&nbsp;</span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Chuck 70</span></em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;truyền thống với chất vải dày 340g giúp giữ form giày tốt hơn so với&nbsp;</span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Converse Classic</span></em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">, phần đế ngoài cao 35mm tôn lên vẻ tự tin khi sử dụng.&nbsp;Ngoài ra, phần cao su đế giày&nbsp;</span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Chuck 70 Flame</span></em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;được phủ 1 lớp sơn bóng màu trắng mà mang đậm tính classic - làm nên thương hiệu của dòng&nbsp;</span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">Chuck 70</span></em><br></p>', 1900000, 0, 'nhoh_Converse_flame.png', 'Đồng', '2020-07-27 20:33:25', '2020-07-28 03:33:25'),
(10, 'Giày ultraboost 20', 3, '<p><span style=\"font-family: &quot;Noto Sans&quot;, AdihausDIN, Helvetica, Arial, sans-serif;\">Mỗi buổi chạy là một chuyến phiêu lưu, một cơ hội để bạn khám phá chính bản thân mình. Đôi giày adidas Ultraboost 20 này sẵn sàng đón nhận thử thách nhờ lớp đệm đàn hồi và thân giày ôm chân bằng vải dệt kim làm từ chất liệu tái chế. Vậy nên hãy chọn chặng đường, chọn cuộc chơi cho chính mình. Chọn nỗ lực hết sức cho buổi chạy ngày hôm nay.</span><br></p>', 5000000, 0, '4MAz_Ultraboost_4.0_white_pink.png', 'Đồng', '2020-07-27 20:34:27', '2020-07-28 03:34:27'),
(11, 'Giày ultraboost 19', 3, '<p><span style=\"font-family: &quot;Noto Sans&quot;, AdihausDIN, Helvetica, Arial, sans-serif;\">Mỗi ngày mới. Mỗi buổi chạy mới. Hãy tận dụng tối đa. Đôi giày hiệu năng cao này có thân giày bằng vải dệt kim ôm chân. Các đường may trong trợ lực được bố trí chuẩn xác để tạo độ nâng đỡ ở đúng những vị trí cần thiết. Gót giày làm từ chất liệu elastane mềm mại cho độ ôm thoải mái hơn. Lớp đệm đàn hồi hoàn trả năng lượng cho từng sải bước tạo cảm giác như có thể chạy mãi mãi.</span><br></p>', 5000000, 0, 'RoFI_Ultraboost_4.0_white_black.png', 'Đồng', '2020-07-28 03:38:32', '2020-07-28 03:38:32'),
(12, 'Giày Vans Authentic Black White', 1, '<p><span style=\"font-weight: 700; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><em>Vans Authentic&nbsp;</em></span><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">chính thức được cho ra mắt vào năm 1966 tại California và&nbsp;nằm trong bộ 5 huyền thoại của nhà Vans. Nếu bạn quá ngại thắt nhiều dây như oldskool, cũng không thích dáng slipon, mà chỉ thích thấp cổ thì hãy chọn authentic.&nbsp;</span><br></p>', 1450000, 1087000, 'zSA5_vans_classic_black.png', 'Đồng', '2020-07-28 20:39:52', '2020-07-29 03:39:52'),
(13, 'Giày Vans Authentic All Black', 1, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Nằm trong bộ 5 huyền thoại của nhà Vans. Nếu bạn quá ngại thắt nhiều dây như oldskool, cũng không thích dáng slipon, mà chỉ thích thấp cổ thì hãy chọn authentic.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Phối màu đen full sẽ che khuyết điểm cực tốt nếu chân bạn to ngang, dài quá. Với các bạn nam thì siêu man, còn các bạn nữ thì cực kì cá tính.&nbsp;</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">1 gợi ý nhỏ, các bạn có thể tháo dây giày, dính keo vào 2/3 lưỡi giày để tạo thành 1 đôi giày cho riêng mình.</p>', 1450000, 699000, 'Yfki_vans.png', 'Đồng', '2020-07-28 20:40:41', '2020-07-29 03:40:41'),
(14, 'Giày Vans Authentic Golden Coast Checkerbroad', 1, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Liên tục soldout ngay khi lên kệ,&nbsp;<span style=\"font-weight: 700;\"><em>Vans Golden Coast&nbsp;</em></span>là một cái tên luôn được săn đón trong những sản phẩm của Vans.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\"><em>Vans Golden Coast&nbsp;</em></span>- là nguyên bản và cũng là biểu tượng đặc trưng của phong cách Vans, đặc trưng với kiểu dáng thấp cổ, dây giày với móc khoen kim loại, mũi giày canvas và đế bánh cao su.</p>', 1450000, 1305000, 'WXE9_vans_checker_board_class.png', 'Đồng', '2020-07-28 20:41:34', '2020-07-29 03:41:34'),
(15, 'Giày Vans Authentic 44 Dx Checkerbroad ( Anaheim Factory )', 1, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Nằm trong BST&nbsp;Anaheim Factory đình đám,&nbsp;thiết kế nguyên bản của những đôi giày Vans hồi thập niên 60, 70 và kết hợp chúng cùng công nghệ UltraCush hiện đại bậc nhất của hãng.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Ý nghĩa của số 44, chính là chỉ dòng authentic, trước đây người ta gọi tắt dòng authentic là 44.</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Kết hợp thêm họa tiết checker đã tạo nên 1 đôi giày siêu hot, soldout ngay khi lên kệ.</p>', 1900000, 1710000, 'Xfb3_vans_authentic_checker_board_classic.png', 'Đồng', '2020-07-28 20:42:10', '2020-07-29 03:42:10'),
(16, 'Giày Vans Authentic Red White', 1, '<p><span style=\"font-weight: 700; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><em>Vans Authentic&nbsp;</em></span><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">chính thức được cho ra mắt vào năm 1966 tại California và&nbsp;nằm trong bộ 5 huyền thoại của nhà Vans. Nếu bạn quá ngại thắt nhiều dây như oldskool, cũng không thích dáng slipon, mà chỉ thích thấp cổ thì hãy chọn authentic.&nbsp;</span><br></p>', 1450000, 699000, '5hDF_vans_red_classic.png', 'Đồng', '2020-07-28 20:43:28', '2020-07-29 03:43:28'),
(17, 'Giày Vans Authentic 44 Dx Red ( Anaheim Factory )', 1, '<p><span style=\"font-weight: 700; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><em>Vans Authentic 44 Dx</em></span><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;nằm trong BST&nbsp;</span><span style=\"font-weight: 700; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><em>Anaheim Factory</em></span><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;đình đám,&nbsp;thiết kế nguyên bản của những đôi giày Vans hồi thập niên 60s, 70s và kết hợp chúng cùng công nghệ UltraCush hiện đại bậc nhất của dòng Vans.</span><br></p>', 1800000, 1620000, '6tCE_Vans-authentic-red.png', 'Đồng', '2020-07-30 22:04:47', '2020-07-31 05:04:47'),
(18, 'Giày Vans Old Skool 36 DX Anaheim Factory', 1, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Kiểu dáng Old Skool cổ điển với lót&nbsp;giày được nâng cấp công nghệ Đệm lót UltraCush mang đến một cảm nhận khác biệt với dòng giày cao cấp này của nhà Vans mang lại sự thoải mái &amp; êm ái cho đôi chân. Anaheim Factory 36DX Vintage với chất liệu kết hợp giữa Suede và Canvas. Đặc biệt tông màu trắng ngà đặc biệt trendy được nhiều người tìm kiếm với khả năng phối đồ cực đỉnh. Đệm lót UltraCush mang đến một cảm nhận khác biệt với dòng giày cao cấp này của nhà Vans</span><br></p>', 2200000, 1980000, 'vkff_Vans-authentic-creamwhite.png', 'Đồng', '2020-07-30 22:06:22', '2020-07-31 05:06:22'),
(19, 'Giày Vans Check Bess NI Shoes', 1, '<p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><em><span style=\"font-weight: 700;\">Vans Check Bess Ni&nbsp;</span></em>với&nbsp;thiết kế khỏe khoắn, sự&nbsp;thoải mái của lót Ultra Cush&nbsp;cùng màu sắc trẻ trung mang lại cho khách hàng sự lựa chọn tuyệt vời</p><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><em><span style=\"font-weight: 700;\">Vans Check Bess Ni</span></em>&nbsp;với chất liệu là sự kết hợp của vải &amp; da lộn nhưng với lót Ultra Cush mà mức giá như vậy thì thật sự rất hợp lý cho người mua hàng</p>', 1900000, 1710000, 'hcTu_Vans-specsial.png', 'Đồng', '2020-07-30 22:07:38', '2020-07-31 05:07:38'),
(20, 'Giày Vans Old Skool V Sport', 1, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Dòng sản phẩm này hướng tới sự đơn giản nhưng vẫn có điểm nhấn, dải logo Flying V được đặt bên hông giày vừa mang dấu ấn thương hiệu vừa giúp cho những chiếc giày thêm sức hút. Ngoài ra, phần thân Vans Sport hiện nay cũng được bao bọc bởi chất liệu da lộn – chất liệu chủ đạo hay được sử dụng của thời trang những năm 90.</span><br></p>', 2000000, 1800000, 'kWfL_Vans-special-yellow.png', 'Đồng', '2020-07-30 22:08:50', '2020-07-31 05:08:50'),
(21, 'Giày Vans Old Skool V Sportt', 1, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Dòng sản phẩm này hướng tới sự đơn giản nhưng vẫn có điểm nhấn, dải logo Flying V được đặt bên hông giày vừa mang dấu ấn thương hiệu vừa giúp cho những chiếc giày thêm sức hút. Ngoài ra, phần thân&nbsp;</span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">giày&nbsp;Vans&nbsp;</span></em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Sport hiện nay cũng được bao bọc bởi chất liệu da lộn – chất liệu chủ đạo hay được sử dụng của thời trang những năm 90.</span><br></p>', 2000000, 1800000, '3acO_Vans-black-yellow.png', 'Đồng', '2020-07-30 22:10:50', '2020-07-31 05:10:50'),
(22, 'Giày Vans Era Deboss Checkerboard', 1, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Một trong những sản phẩm mới ra mắt của Vans, nằm trong dòng&nbsp;</span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><span style=\"font-weight: 700;\">giày&nbsp;vans Era</span></em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">&nbsp;quen thuộc với mẫu mã từ những năm 1975, nhưng sản phẩm Vans Era Deboss Checkerboard ra mắt đầu 2020 này lại mang nhiều dấu ấn đặc biệt.</span><br></p>', 1700000, 1530000, 'yaqH_Vans-specsial.png', 'Đồng', '2020-07-30 22:12:24', '2020-07-31 05:12:24'),
(23, 'Giày Converse Chuck Taylor All Star VLTG Chevron', 2, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Mẫu&nbsp;</span><span style=\"font-weight: 700; color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\"><i>giày Converse&nbsp;</i></span><em style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">Chuck Taylor All Star 70 VLTG Chevron&nbsp;</em><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">lấy cảm hứng từ những hoa văn táo bạo được mặc trên sân vào những năm 90, chúng tôi đã trang bị cho biểu tượng những lớp phủ chevron được cắt thành những lớp trung tính cực nhỏ. Một lớp da và da lộn phía trên và một đồ họa Chevron VLTG tạo nên một item xuất sắc.</span><br></p>', 1500000, 1350000, 'iQV5_Converse-white.png', 'Đồng', '2020-07-30 22:13:59', '2020-07-31 05:13:59'),
(24, 'SASHIKO', 4, '<p><span style=\"color: rgb(109, 109, 109); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; white-space: pre-wrap;\">The Kybrid S2 \'Sashiko\' (a term that translates to \"little stabs\") explores the connection between Kyrie\'s ability to put defenders on skates on the court, and his love for skating off it. The design pays homage to the classic SB logo with a re-imagined Nike BB logo on the tongue and heel. It\'s dressed in a Cool Cream hue on the midsole with hits of blue stitching throughout.</span><br></p>', 3829000, 0, 'MJmL_Nike-1.png', 'Đồng', '2020-07-31 00:56:45', '2020-07-31 07:56:45'),
(25, 'Nike Air VaporMax 2020 FK MS', 4, '<p style=\"margin-right: 0px; margin-bottom: 0px; margin-left: 0px; padding: 0px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-stretch: inherit; line-height: 1.75; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; vertical-align: baseline; color: rgb(17, 17, 17);\">Designed with sustainability in mind, this Nike Air VaporMax 2020 Flyknit is made from at least 50% recycled content by weight. That\'s a lot of trash! As part of Nike\'s journey towards lowering our impact, we\'re discovering new ways to put our waste to good use. By utilising leftover materials, recycled polyester, recycled foam and a Nike Air-Sole made from at least 75% recycled TPU, the VaporMax 2020 Flyknit marks the next step towards our ultimate goal of zero carbon and zero waste.</p>', 7349000, 0, '2E0f_Nike-2.png', 'Đồng', '2020-07-31 07:59:18', '2020-07-31 07:59:18'),
(26, 'Nike Air Force 1 \'07', 4, '<p><span style=\"color: rgb(17, 17, 17); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">The Nike Air Force 1 \'07 LV8 is the b-ball OG look that you know best: crisp leather, bold colours and the perfect amount of flash to make you shine. Featuring Nike Worldwide graphics throughout, it lets you celebrate the unity of sport in legendary style.</span><br></p>', 2469000, 0, 'Ir8j_Nike-5.png', 'Đồng', '2020-08-19 06:29:40', '2020-08-19 06:29:40'),
(27, 'Nike SB Shane T', 4, '<p><span style=\"color: rgb(17, 17, 17); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif;\">The first signature shoe from technical phenomenon Shane O\'Neill, the Nike SB Shane T is a lightweight shoe that\'s built to perform. Unique lacing lets you choose between lacing your shoes the traditional way or by running them through durable ghillie loops.</span><br></p>', 2349000, 0, 'kjzj_Nike-4.png', 'Đồng', '2020-07-31 01:09:33', '2020-07-31 08:09:33'),
(28, 'AIR JORDAN 1 RETRO HIGH OG CO.JP', 4, '<p><span style=\"color: rgb(109, 109, 109); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; white-space: pre-wrap;\">This style marks the return of a storied retro colourway that originally dropped only in Japan on 1st January 2001, with a limited run of 2,001 pairs. While a limited-edition version with special packaging is now fittingly releasing in Japan only, a wider release sans the suitcase is scheduled to drop across the globe, featuring the same shades of Neutral Grey and Metallic Silver. Other additions include CO.JP branding on the insole, as well as a tag inside the tongue nodding to the style\'s early-noughties origins.</span><br style=\"color: rgb(109, 109, 109); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; white-space: pre-wrap;\"><span style=\"color: rgb(109, 109, 109); font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 14px; text-align: center; white-space: pre-wrap;\"> SKU: DC1788–029</span><br></p>', 4699000, 0, 'Dz77_Nike-3.png', 'Đồng', '2020-07-31 01:10:28', '2020-07-31 08:10:28'),
(30, 'Giày Vans Era Comfycush Pink Checker', 1, '<p><span style=\"color: rgb(136, 136, 136); font-family: Arial, sans-serif; font-size: 14px;\">THÔNG TIN SẢN PHẨM Thương hiệu Vans Xuất xứ thương hiệu Mỹ Sản xuất tại Việt Nam/ Ấn...</span><br></p>', 2350000, 1175000, '6Xe6_pink.png', 'Đồng', '2020-08-29 20:40:41', '2020-08-30 03:40:41');

-- --------------------------------------------------------

--
-- Table structure for table `slide`
--

CREATE TABLE `slide` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `type_product` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL,
  `action` varchar(255) NOT NULL,
  `discount` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide`
--

INSERT INTO `slide` (`id`, `image`, `type_product`, `title`, `content`, `action`, `discount`, `created_at`, `updated_at`) VALUES
(1, 'msiE_screen-2.jpg', 'Vans, Converse', 'BLACK FRIDAY', '<p>This is the biggest sale of year do don miss this oppotunity. There are many products which is sale on that event.</p>', 'SALE', '50%', '2020-08-17 06:55:15', '2020-08-17 06:55:15'),
(2, '2P00_hero-1.jpg', 'Adidas', 'Lunar new year', '<p>Happy new year!!!</p><p>Let me give you many vouchers and discounts for that special occasion!!</p>', 'SALE', '90%', '2020-08-17 06:55:47', '2020-08-17 06:55:47'),
(3, 'Fl69_everest_mountain_sky_tops_96976_1920x1080.jpg', 'Nike, Converse', 'Valentine', '<p>Opps!!</p><p>I give you many present for that sweet occasion</p>', 'SALE', '20%', '2020-08-07 02:29:13', '2020-08-07 09:29:13');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Vans', '<p>Giày Vans</p>', 'XWNN_vans-logo_2.jpg', '2020-08-17 06:32:05', '2020-08-17 06:32:05'),
(2, 'Converse', '<p>Giày converse</p>', 'k0cv_13197_Converse.jpg', '2020-07-27 20:10:09', '2020-07-28 03:10:09'),
(3, 'Adidas', '<p>Giày adidas</p>', 'FfNV_brasol.vn-y-nghia-dang-sau-logo-cua-adidas-logo-adidas.jpg', '2020-07-27 20:10:30', '2020-07-28 03:10:30'),
(4, 'Nike', '<p>Giày nike</p>', 'P9b6_brasol.vn-logo-nike-vector-logo-nike.jpg', '2020-07-27 20:10:41', '2020-07-28 03:10:41');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) NOT NULL DEFAULT '0',
  `role` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `remember_token`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Đỗ Quốc Phong', 'doquocphong321@gmail.com', '$2y$10$ZpfXeBq9Nekd45jx5CYPB.lzFUSF4gy0eUF6F55E9uQ.TnHi4CrLu', '0', 1, '2020-08-06 08:45:32', '2020-08-06 08:45:32'),
(2, 'Nguyễn Minh Châm', 'legendcuagio2@gmail.com', '$2y$10$Dz.IwC1hq0JMO8IplMA5BuNbYMY1DDs59Bu5Pn0gwC03D5jdciFIC', '0', 0, '2020-08-11 04:26:22', '2020-08-11 04:26:22'),
(3, 'tran van a', 'abc@gmail.com', '$2y$10$LT/m8yYAuD.FUSD8xxKYdOTgoYCzGtdWfAwpN2.NCMoPCqwVkH62q', '0', 0, '2020-08-17 00:42:26', '2020-08-17 07:42:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_customer` (`id_customer`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_product` (`id_product`);

--
-- Indexes for table `image_new`
--
ALTER TABLE `image_new`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_type_product` (`id_type_product`);

--
-- Indexes for table `slide`
--
ALTER TABLE `slide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `image_new`
--
ALTER TABLE `image_new`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `slide`
--
ALTER TABLE `slide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`id_type_product`) REFERENCES `type_products` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
