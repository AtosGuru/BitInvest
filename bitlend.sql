-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 11:18 AM
-- Server version: 5.7.23-0ubuntu0.16.04.1
-- PHP Version: 7.0.32-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bitlend`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `username`, `password`, `remember_token`, `status`, `created_at`, `updated_at`) VALUES
(1, 'MR Admin', 'admin@gmail.com', 'admin', '$2y$10$7AyPH7hCzfC6S9yKArpVg.BRXykOo3Yai2oMCPxv9TNvDBc7rRCiK', 'vygUmNGkJlDCtXDwYetFqYRezuKtVlM8Ei1CTVWkwgt46DHVbkPPcDozCxlR', 1, '2017-12-11 00:33:50', '2017-12-11 04:51:27'),
(2, 'yokesh', 'v4syokesh351@gmail.com', 'yokesh', '$2y$10$ff0sMLLs63vDhFErMSwik.MD/zsieRnPdbMOd4RSKXlljbjJBc7tq', 'm3kck38uWroIlIncUdt5cUjXPKhkFa7jTWo8uKPnwpnDOtjnPf8QoprtFKzx', 1, '2018-06-16 15:42:19', '2018-06-16 15:42:19'),
(3, 'karthik', 'karthik.bca1417@gmail.com', 'karthikkumar', '$2y$10$qeXHoMFIOcuAnkvNtMZztOe05zfq20f5CvSjCPF78j90bNwKpisiW', NULL, 0, '2018-07-02 07:06:49', '2018-07-02 07:06:49');

-- --------------------------------------------------------

--
-- Table structure for table `admin_password_resets`
--

CREATE TABLE `admin_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `borrow`
--

CREATE TABLE `borrow` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount_in_btc` varchar(50) NOT NULL,
  `repay` varchar(30) NOT NULL,
  `repay_usd` varchar(30) NOT NULL,
  `monthly_payments` varchar(50) NOT NULL,
  `monthly_payments_usd` varchar(30) NOT NULL,
  `intrest` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `reason` varchar(255) NOT NULL,
  `installment` varchar(10) NOT NULL,
  `terms_accept` int(5) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow`
--

INSERT INTO `borrow` (`id`, `user_id`, `amount_in_btc`, `repay`, `repay_usd`, `monthly_payments`, `monthly_payments_usd`, `intrest`, `status`, `reason`, `installment`, `terms_accept`, `created_at`, `updated_at`) VALUES
(1, 24, '2', '2.10', '14049.76', '0.70', '4683.25', '5', 3, 'aa', '3', 1, '2018-07-04 17:12:32', '2018-07-04 17:12:32'),
(3, 24, '1', '1.05', '6976.64', '0.35', '2325.55', '5', 1, 'poor', '3', 1, '2018-07-05 10:52:49', '2018-07-05 10:52:49'),
(4, 37, '1', '1.05', '6919.95', '0.35', '2306.65', '5', 2, 'test', '3', 1, '2018-07-06 15:55:00', '2018-07-06 15:55:00'),
(5, 27, '1', '1.10', '8174.90', '0.18', '1362.48', '10', 1, 'very poor', '6', 1, '2018-07-18 07:35:39', '2018-07-18 07:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `deposits`
--

CREATE TABLE `deposits` (
  `id` int(10) UNSIGNED NOT NULL,
  `trxid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qr_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sent_to_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `time_created` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `time_expires` varchar(25) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `deposits`
--

INSERT INTO `deposits` (`id`, `trxid`, `user_id`, `amount`, `status_text`, `status_url`, `qr_url`, `sent_to_address`, `status`, `time_created`, `time_expires`, `created_at`, `updated_at`) VALUES
(1, 'CPCG6TQJ4ZMHK9EQ2MOJNGSUBG', 24, '1', 'Waiting for buyer funds...', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6TQJ4ZMHK9EQ2MOJNGSUBG&key=a1e44534003d2be28611c83f84646fbc', 'https://www.coinpayments.net/qrgen.php?id=CPCG6TQJ4ZMHK9EQ2MOJNGSUBG&key=a1e44534003d2be28611c83f84646fbc', '3Kq4KZLvgnznXd5mjTWr1P7BXhN6uBZWik', 2, '1530691645', '1530745645', '2018-07-04 08:07:25', '2018-07-05 04:47:40'),
(2, 'CPCG3TKVNN9NNREXKNFGVSRPUG', 24, '0.002', 'Waiting for buyer funds...', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG3TKVNN9NNREXKNFGVSRPUG&key=0da565eed716c0230f607ef023c2cae5', 'https://www.coinpayments.net/qrgen.php?id=CPCG3TKVNN9NNREXKNFGVSRPUG&key=0da565eed716c0230f607ef023c2cae5', '3B1y1nWKaw31EPYyHW1iBDwh9dNg26q239', 1, '1530692605', '1530746605', '2018-07-04 08:23:25', '2018-07-05 04:56:28'),
(3, 'CPCG1EKKWZP23EVUKYKYWXFJJM', 24, '1', 'Waiting for buyer funds...', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG1EKKWZP23EVUKYKYWXFJJM&key=408bd83fb32fcf7e797fb6dd238a1eb5', 'https://www.coinpayments.net/qrgen.php?id=CPCG1EKKWZP23EVUKYKYWXFJJM&key=408bd83fb32fcf7e797fb6dd238a1eb5', '3Q8awkNRhzSKhN97NWfnTULUoywBxsG7RH', 1, '1530710065', '1530764065', '2018-07-04 13:14:25', '2018-07-05 04:56:44'),
(4, 'CPCG4YDVNQTNIGUSY2VG0HERJM', 24, '1.0000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG4YDVNQTNIGUSY2VG0HERJM&key=8997627cf26e127c3c53d333383c76eb', 'https://www.coinpayments.net/qrgen.php?id=CPCG4YDVNQTNIGUSY2VG0HERJM&key=8997627cf26e127c3c53d333383c76eb', '3JB5z9sXPiGqoYXc9hak7xyMc7q7KyQXEc', 0, '1530723501', '1530777501', '2018-07-04 16:58:21', '2018-07-06 16:03:36'),
(5, 'CPCG6LSKOXSLINWC6O9YCOXMBW', 17, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6LSKOXSLINWC6O9YCOXMBW&key=307ab970bb8f498924c398f2e7fb6c50', 'https://www.coinpayments.net/qrgen.php?id=CPCG6LSKOXSLINWC6O9YCOXMBW&key=307ab970bb8f498924c398f2e7fb6c50', '3CBLszHo8kkrhVd2iiGkraBUnvhGLUmDzh', 0, '1530742830', '1530796830', '2018-07-04 22:20:30', '2018-07-06 16:03:36'),
(6, 'CPCG3CF11F4LGAK0IZTM8SMKIB', 17, '3', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG3CF11F4LGAK0IZTM8SMKIB&key=723ad5ac5e6a409e753d59a152627f31', 'https://www.coinpayments.net/qrgen.php?id=CPCG3CF11F4LGAK0IZTM8SMKIB&key=723ad5ac5e6a409e753d59a152627f31', '3Bgfcp31TZQwKq9d1F9B5YLCw3y7TkumMR', 0, '1530743344', '1530797344', '2018-07-04 22:29:04', '2018-07-06 16:03:36'),
(7, 'CPCG1MBLLNT2H6ELD2UEIUU3CR', 17, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG1MBLLNT2H6ELD2UEIUU3CR&key=1b3076f43d617b9c879527397c7f0f45', 'https://www.coinpayments.net/qrgen.php?id=CPCG1MBLLNT2H6ELD2UEIUU3CR&key=1b3076f43d617b9c879527397c7f0f45', '3EK9RGqZFqNHMJ5kizgX5i2iBTgz4VqW8h', 2, '1530892996', '1530946996', '2018-07-06 16:03:16', '2018-07-18 14:28:16'),
(8, 'CPCG34RYG9VAWW60O95Q3M53EZ', 40, '100', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG34RYG9VAWW60O95Q3M53EZ&key=2710fa2b069a9d5f94a867cabe9c6c21', 'https://www.coinpayments.net/qrgen.php?id=CPCG34RYG9VAWW60O95Q3M53EZ&key=2710fa2b069a9d5f94a867cabe9c6c21', '33QPRbZ4ZtQWF5U9SAsYeEwUn1ByKJrDxB', 0, '1531044110', '1531098110', '2018-07-08 10:01:50', '2018-07-10 08:12:28'),
(9, 'CPCG72PCMQMLMGB6ZV9U6ARBTD', 22, '5', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG72PCMQMLMGB6ZV9U6ARBTD&key=29c497933b0d0aca2f57f63d234a5892', 'https://www.coinpayments.net/qrgen.php?id=CPCG72PCMQMLMGB6ZV9U6ARBTD&key=29c497933b0d0aca2f57f63d234a5892', '3CaV31EKnSXfsGn7gTQwt68EadQpSd7vUf', 0, '1531298106', '1531352106', '2018-07-11 08:35:06', '2018-07-16 19:37:04'),
(10, 'CPCG6SUDXEHDH5XNSCRSQJWQB1', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6SUDXEHDH5XNSCRSQJWQB1&key=6a374da42615d7e1efa059c08baffa14', 'https://www.coinpayments.net/qrgen.php?id=CPCG6SUDXEHDH5XNSCRSQJWQB1&key=6a374da42615d7e1efa059c08baffa14', '36KT6jvXuoYcLpZC97jfCWFM79oBDkyrwL', 0, '1531770559', '1531824559', '2018-07-16 19:49:19', '2018-07-18 03:47:22'),
(11, 'CPCG24Q4PLFJ0LNDAHI1ULTLJO', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG24Q4PLFJ0LNDAHI1ULTLJO&key=d3af174d78981c784e890f2425e18769', 'https://www.coinpayments.net/qrgen.php?id=CPCG24Q4PLFJ0LNDAHI1ULTLJO&key=d3af174d78981c784e890f2425e18769', '35ajNWGT6vDXVmQ4sPsf3cUbnuLFHEf5Gx', 0, '1531840495', '1531894495', '2018-07-17 15:14:54', '2018-07-18 16:44:46'),
(12, 'CPCG5QUUA5IWE4S04QTBQAUP0U', 22, '100', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG5QUUA5IWE4S04QTBQAUP0U&key=6d268d5baf272a6a0d43510e3e944813', 'https://www.coinpayments.net/qrgen.php?id=CPCG5QUUA5IWE4S04QTBQAUP0U&key=6d268d5baf272a6a0d43510e3e944813', '3DtzX29EmySESBZAKHsZisyxpinbqXP6XA', 0, '1531877706', '1531931706', '2018-07-18 01:35:06', '2018-07-18 16:44:46'),
(13, 'CPCG31UM3ALCTE6GLTWVNAEYIP', 42, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG31UM3ALCTE6GLTWVNAEYIP&key=cffd9a3cbcc23a552f30151221b60432', 'https://www.coinpayments.net/qrgen.php?id=CPCG31UM3ALCTE6GLTWVNAEYIP&key=cffd9a3cbcc23a552f30151221b60432', '34wBNybBbcj7A96uEmpiwhzbfRkFJzHKwu', 0, '1531885581', '1531939581', '2018-07-18 03:46:21', '2018-07-20 18:56:26'),
(14, 'CPCG6FSPVCBA9O5FPZBR5NKPQ2', 22, '20', NULL, 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6FSPVCBA9O5FPZBR5NKPQ2&key=2f4864f30ef2c21ccb4bd86b18a419bb', 'https://www.coinpayments.net/qrgen.php?id=CPCG6FSPVCBA9O5FPZBR5NKPQ2&key=2f4864f30ef2c21ccb4bd86b18a419bb', '383kESRDfntkL4rTFJp9myfqZFkBGxpJ1G', 1, NULL, NULL, '2018-07-18 14:22:05', '2018-07-18 14:28:24'),
(15, 'CPCG0ZXCSODJXP1O0ONDBU5NJQ', 22, '1000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG0ZXCSODJXP1O0ONDBU5NJQ&key=192941437a3c1e94ab0370993c8eaa3b', 'https://www.coinpayments.net/qrgen.php?id=CPCG0ZXCSODJXP1O0ONDBU5NJQ&key=192941437a3c1e94ab0370993c8eaa3b', '39GKTgJif798PWnULMqZMyNxqUeUU7cZos', 0, '1531932209', '1531986209', '2018-07-18 16:43:29', '2018-07-20 18:56:26'),
(16, 'CPCG1ZNUH12TIK3P6JABZEGMRJ', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG1ZNUH12TIK3P6JABZEGMRJ&key=fed7484e27e8eb0fa16fa4968deeee71', 'https://www.coinpayments.net/qrgen.php?id=CPCG1ZNUH12TIK3P6JABZEGMRJ&key=fed7484e27e8eb0fa16fa4968deeee71', '3AD7SknyboTC1CJdhMJJVgrypPZMuavjYu', 0, '1531932317', '1531986317', '2018-07-18 16:45:17', '2018-07-20 18:56:26'),
(17, 'CPCG1FWRFNZHZKX5DTMTD3D5MD', 22, '100', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG1FWRFNZHZKX5DTMTD3D5MD&key=b4d9152bf92829d1200d9d488caa6ed9', 'https://www.coinpayments.net/qrgen.php?id=CPCG1FWRFNZHZKX5DTMTD3D5MD&key=b4d9152bf92829d1200d9d488caa6ed9', '37C5yWGdcB3DD8WLPaxnm4afVzudo2HREc', 0, '1532093889', '1532147889', '2018-07-20 13:38:09', '2018-07-22 09:14:54'),
(18, 'CPCG6KD6G7FFFYWKXBIUWKPTFF', 22, '10', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6KD6G7FFFYWKXBIUWKPTFF&key=24ae48c44c00d898662a00ab55f248e9', 'https://www.coinpayments.net/qrgen.php?id=CPCG6KD6G7FFFYWKXBIUWKPTFF&key=24ae48c44c00d898662a00ab55f248e9', '3PdSBrFAwsD4MZzmUDC3ULE7XJUnZcBykN', 0, '1532191414', '1532245414', '2018-07-21 16:43:34', '2018-07-22 09:14:54'),
(19, 'CPCG5PZVTE8PSIQLFWOLRMSUCL', 22, '1000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG5PZVTE8PSIQLFWOLRMSUCL&key=395550e1b5b6919c9d9959a9a2fe046c', 'https://www.coinpayments.net/qrgen.php?id=CPCG5PZVTE8PSIQLFWOLRMSUCL&key=395550e1b5b6919c9d9959a9a2fe046c', '3J5WsBUeXH59nWhYRQCjo2XhoHvQe4ukRF', 0, '1532204897', '1532258897', '2018-07-21 20:28:17', '2018-07-27 05:54:42'),
(20, 'CPCG6RIEDDETGXEHZGMOZ93YR6', 22, '1000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6RIEDDETGXEHZGMOZ93YR6&key=b2cda964852768a9a1826eeeee516dc9', 'https://www.coinpayments.net/qrgen.php?id=CPCG6RIEDDETGXEHZGMOZ93YR6&key=b2cda964852768a9a1826eeeee516dc9', '3CGobDXb1mCWY72CenSZHxJrASdod9p1J8', 0, '1532204917', '1532258917', '2018-07-21 20:28:37', '2018-07-27 05:54:42'),
(21, 'CPCG0GKFQVBRECXA32ZYES8XQG', 22, '1000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG0GKFQVBRECXA32ZYES8XQG&key=e6a68b75c8e8da1d5505693bf4a438fe', 'https://www.coinpayments.net/qrgen.php?id=CPCG0GKFQVBRECXA32ZYES8XQG&key=e6a68b75c8e8da1d5505693bf4a438fe', '34A6F5Tf8VjqYeNAGZf2aFexy8yeGN4XSv', 0, '1532204930', '1532258930', '2018-07-21 20:28:50', '2018-07-27 05:54:42'),
(22, 'CPCG7HV2FRJBE7SW1CKMNKGWFI', 22, '15', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG7HV2FRJBE7SW1CKMNKGWFI&key=46fbf58272ce8dcf79f5686f7c04d20c', 'https://www.coinpayments.net/qrgen.php?id=CPCG7HV2FRJBE7SW1CKMNKGWFI&key=46fbf58272ce8dcf79f5686f7c04d20c', '3BbdzmYZ1GzZJNwFpDGJAL4XHW5LBHyTkV', 0, '1532250722', '1532304722', '2018-07-22 09:12:02', '2018-07-27 05:54:42'),
(23, 'CPCG06TDQ88ZXCYSAUB4QCEJXJ', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG06TDQ88ZXCYSAUB4QCEJXJ&key=42f44024fddccc47976aaeca3b604225', 'https://www.coinpayments.net/qrgen.php?id=CPCG06TDQ88ZXCYSAUB4QCEJXJ&key=42f44024fddccc47976aaeca3b604225', '39Wfyc4JQroKRznmZgN9bc427YKndwSF7W', 0, '1532267538', '1532321538', '2018-07-22 13:52:18', '2018-07-27 05:54:42'),
(24, 'CPCG2BFXSSPCDL13ZHXNEJATFF', 22, '300', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG2BFXSSPCDL13ZHXNEJATFF&key=652bc6469eb2a0867b1bea2be7998ede', 'https://www.coinpayments.net/qrgen.php?id=CPCG2BFXSSPCDL13ZHXNEJATFF&key=652bc6469eb2a0867b1bea2be7998ede', '3NzfdsG2WqM4gqMkFgvxbfybe8YDHKsQyc', 0, '1532290216', '1532344216', '2018-07-22 20:10:16', '2018-07-27 05:54:42'),
(25, 'CPCG1IRICDPX5RVONRUJ03BZVA', 22, '5000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG1IRICDPX5RVONRUJ03BZVA&key=29cd92cff417f66895bd8c0be822937f', 'https://www.coinpayments.net/qrgen.php?id=CPCG1IRICDPX5RVONRUJ03BZVA&key=29cd92cff417f66895bd8c0be822937f', '35CeVPpGjYTecEMWVHiFvgNUx8M24SfxNV', 0, '1532391522', '1532445522', '2018-07-24 00:18:42', '2018-07-27 05:54:42'),
(26, 'CPCG4XZ5DKLAG3EMGKVEDUYJL5', 22, '0.5', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG4XZ5DKLAG3EMGKVEDUYJL5&key=748d78d01c057bdb0dfffa2695dc81f9', 'https://www.coinpayments.net/qrgen.php?id=CPCG4XZ5DKLAG3EMGKVEDUYJL5&key=748d78d01c057bdb0dfffa2695dc81f9', '353wQQfjM68iJ79gEDNETJwfNfHp8n683f', 0, '1532445897', '1532499897', '2018-07-24 15:24:57', '2018-07-27 05:54:42'),
(27, 'CPCG6YENTMQKGHAF7YVKXE62YJ', 22, '50', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG6YENTMQKGHAF7YVKXE62YJ&key=c67cfdfd3d50d7084965f713c9400582', 'https://www.coinpayments.net/qrgen.php?id=CPCG6YENTMQKGHAF7YVKXE62YJ&key=c67cfdfd3d50d7084965f713c9400582', '32A681wxbqhBNL9KMNFVcnLAgaqXE2o81H', 0, '1532553769', '1532607769', '2018-07-25 21:22:48', '2018-07-27 05:54:42'),
(28, 'CPCG2V72VV4OO8CJE4BNDSBSQT', 22, '0.01', NULL, 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG2V72VV4OO8CJE4BNDSBSQT&key=6a2512200389a30a095d3c86ea9e1ee9', 'https://www.coinpayments.net/qrgen.php?id=CPCG2V72VV4OO8CJE4BNDSBSQT&key=6a2512200389a30a095d3c86ea9e1ee9', '3Aud7vqJa7geqMSZNRjr6b7kUPm4v12imd', 1, NULL, NULL, '2018-07-26 05:29:28', '2018-07-26 05:35:08'),
(29, 'CPCG7HYWYFFFSIX4SESJ896NEA', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG7HYWYFFFSIX4SESJ896NEA&key=387559b8f9af24921ef2f14a5408fe80', 'https://www.coinpayments.net/qrgen.php?id=CPCG7HYWYFFFSIX4SESJ896NEA&key=387559b8f9af24921ef2f14a5408fe80', '3EBrGJmBzy6PaQY6LchFHKJeyVztqTP3FX', 0, '1532670830', '1532724830', '2018-07-27 05:53:50', '2018-08-02 15:19:58'),
(30, 'CPCG3SECZMJGDNTRDG4RLDK4M3', 22, '0.02', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG3SECZMJGDNTRDG4RLDK4M3&key=28f5b839587f855c65ea5200f7265001', 'https://www.coinpayments.net/qrgen.php?id=CPCG3SECZMJGDNTRDG4RLDK4M3&key=28f5b839587f855c65ea5200f7265001', '38qGBuqjnBGQeNeMdGVVTnYziApupyiLBJ', 0, '1532712703', '1532766703', '2018-07-27 17:31:43', '2018-08-02 15:19:58'),
(31, 'CPCG5IIQU5XXZX8B2OZMF6VK6H', 22, '0.05', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG5IIQU5XXZX8B2OZMF6VK6H&key=f5b5c766d21c64b56fd950b6675f6125', 'https://www.coinpayments.net/qrgen.php?id=CPCG5IIQU5XXZX8B2OZMF6VK6H&key=f5b5c766d21c64b56fd950b6675f6125', '3KPg83KkHveH7af9PGM2u8atD5RbQguLkd', 0, '1532775832', '1532829832', '2018-07-28 11:03:52', '2018-08-02 15:19:58'),
(32, 'CPCG3S6KPGQ98KZEWGYPEXXKWG', 22, '90', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG3S6KPGQ98KZEWGYPEXXKWG&key=da9ef1ad1486631195e2700b42577d9d', 'https://www.coinpayments.net/qrgen.php?id=CPCG3S6KPGQ98KZEWGYPEXXKWG&key=da9ef1ad1486631195e2700b42577d9d', '3KX1MxuH3aTDDE746VturV8UKTGj4X2rRc', 0, '1532936566', '1532990566', '2018-07-30 07:42:46', '2018-08-02 15:19:58'),
(33, 'CPCG4YFLHEBOCB0AQOPXLUEQV5', 22, '55', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG4YFLHEBOCB0AQOPXLUEQV5&key=22530f0132641f5f427124637105abbd', 'https://www.coinpayments.net/qrgen.php?id=CPCG4YFLHEBOCB0AQOPXLUEQV5&key=22530f0132641f5f427124637105abbd', '3BqtTnNDmgGmsM6xNz6kujMThRCTzSm7Up', 0, '1532974182', '1533028182', '2018-07-30 18:09:42', '2018-08-02 15:19:58'),
(34, 'CPCH6TSKZOB1SSB2TZVFMB1JHO', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH6TSKZOB1SSB2TZVFMB1JHO&key=0f74d418e29f99370d8ce9cddd71f396', 'https://www.coinpayments.net/qrgen.php?id=CPCH6TSKZOB1SSB2TZVFMB1JHO&key=0f74d418e29f99370d8ce9cddd71f396', '3AyLT4Nmf8ocr7XEZzw7QPBFPn5WFAQth9', 0, '1533209313', '1533263313', '2018-08-02 11:28:33', '2018-08-07 16:05:23'),
(35, 'CPCH7IACI8EFTBORQLO0RBTQCH', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH7IACI8EFTBORQLO0RBTQCH&key=6b2a4f47b2317871c7b86e2e34579015', 'https://www.coinpayments.net/qrgen.php?id=CPCH7IACI8EFTBORQLO0RBTQCH&key=6b2a4f47b2317871c7b86e2e34579015', '3EuRYDeWR2WxoMTiCc6i2ynAArXqJBEwoJ', 0, '1533212617', '1533266617', '2018-08-02 12:23:37', '2018-08-07 16:05:23'),
(36, 'CPCH2JCGPXT0T7WJLTSYWYO5DM', 22, '0.5', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2JCGPXT0T7WJLTSYWYO5DM&key=32b4dc091322f1f8e72c8afb9c1c28ec', 'https://www.coinpayments.net/qrgen.php?id=CPCH2JCGPXT0T7WJLTSYWYO5DM&key=32b4dc091322f1f8e72c8afb9c1c28ec', '38MJ4ENEcVpmL1JmmSUQVBz3wz554oma5y', 0, '1533686320', '1533740320', '2018-08-07 23:58:40', '2018-08-25 03:46:38'),
(37, 'CPCH2WRBDEKDHK9JWWGUKNRPNV', 22, '70', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2WRBDEKDHK9JWWGUKNRPNV&key=449341fd70e074d1a54b807687860980', 'https://www.coinpayments.net/qrgen.php?id=CPCH2WRBDEKDHK9JWWGUKNRPNV&key=449341fd70e074d1a54b807687860980', '34aiAkopRSgMv67NUj2HyLrx2JLXgcS9n9', 0, '1533874994', '1533928994', '2018-08-10 04:23:14', '2018-08-25 03:46:38'),
(38, 'CPCH5CVIQGBSUXFXJYTKZPY43S', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH5CVIQGBSUXFXJYTKZPY43S&key=5db3b5441565a919fc8ba319df89b679', 'https://www.coinpayments.net/qrgen.php?id=CPCH5CVIQGBSUXFXJYTKZPY43S&key=5db3b5441565a919fc8ba319df89b679', '37V7cJcF6jrEHstrrha4A6AdkBTgTR6LCb', 0, '1533909505', '1533963505', '2018-08-10 13:58:25', '2018-08-25 03:46:38'),
(39, 'CPCH2YMDATRC7RZJFICV99WYGT', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2YMDATRC7RZJFICV99WYGT&key=f9aee322fce826428736188b426bb26f', 'https://www.coinpayments.net/qrgen.php?id=CPCH2YMDATRC7RZJFICV99WYGT&key=f9aee322fce826428736188b426bb26f', '3CRsDpX9rnWpqS4LsC8qVFHRrp6autHEwy', 0, '1533909645', '1533963645', '2018-08-10 14:00:45', '2018-08-25 03:46:39'),
(40, 'CPCH1WM1U0AHOSQLLAQGEOJS34', 22, '0.5', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH1WM1U0AHOSQLLAQGEOJS34&key=f22ba85196b663c3cb4257570c49475e', 'https://www.coinpayments.net/qrgen.php?id=CPCH1WM1U0AHOSQLLAQGEOJS34&key=f22ba85196b663c3cb4257570c49475e', '38sdCKC4Ap2KniNZmkZ25Wpe3nLPhE9mwP', 0, '1533985495', '1534039495', '2018-08-11 11:04:55', '2018-08-25 03:46:39'),
(41, 'CPCH55WFJZZLKYJESFOFOIEF8M', 22, '0.5', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH55WFJZZLKYJESFOFOIEF8M&key=02d1f23221ed530c73681766c7cdd579', 'https://www.coinpayments.net/qrgen.php?id=CPCH55WFJZZLKYJESFOFOIEF8M&key=02d1f23221ed530c73681766c7cdd579', '3BqPdiHbdF1dJdjLsXRuTb3XCt98rs6WuC', 0, '1533985767', '1534039767', '2018-08-11 11:09:27', '2018-08-25 03:46:39'),
(42, 'CPCH1HPZKS4FDJHNYPHJJHAJQT', 44, '1000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH1HPZKS4FDJHNYPHJJHAJQT&key=a57ec23591acb4277d8fd241583915cc', 'https://www.coinpayments.net/qrgen.php?id=CPCH1HPZKS4FDJHNYPHJJHAJQT&key=a57ec23591acb4277d8fd241583915cc', '3ArM2fxhuSJtFCpXrYa1HiGbquzJoZTMeQ', 0, '1533986441', '1534040441', '2018-08-11 11:20:41', '2018-08-25 03:46:39'),
(43, 'CPCH0JJIJXMNZGFHVUIOFAKVIG', 22, '120', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH0JJIJXMNZGFHVUIOFAKVIG&key=9bd911e57c1ccbbe4aa48b255488dabf', 'https://www.coinpayments.net/qrgen.php?id=CPCH0JJIJXMNZGFHVUIOFAKVIG&key=9bd911e57c1ccbbe4aa48b255488dabf', '3ALnTERTUeeVwYamt6N9eV8FgfG1iu83G4', 0, '1534000419', '1534054419', '2018-08-11 15:13:39', '2018-08-25 03:46:39'),
(44, 'CPCH1Z67R8ZRU8NAAS5AHJFR6C', 22, '54456', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH1Z67R8ZRU8NAAS5AHJFR6C&key=50399a365a73d7214a6fcfc68caf9305', 'https://www.coinpayments.net/qrgen.php?id=CPCH1Z67R8ZRU8NAAS5AHJFR6C&key=50399a365a73d7214a6fcfc68caf9305', '37KFn3gobBkmA1hWp1KDiTdTNKYN8G28o5', 0, '1534150529', '1534204529', '2018-08-13 08:55:29', '2018-08-25 03:46:39'),
(45, 'CPCH4SEYQJRXY5DUKJOXOTCFAY', 22, '8000.00', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH4SEYQJRXY5DUKJOXOTCFAY&key=f16dab709ed5ef5f2fffde9fc70e6762', 'https://www.coinpayments.net/qrgen.php?id=CPCH4SEYQJRXY5DUKJOXOTCFAY&key=f16dab709ed5ef5f2fffde9fc70e6762', '3DBGQQ349a1Xqdpdgguqtb9ov2vmq8T2hb', 0, '1534205040', '1534215840', '2018-08-14 00:04:00', '2018-08-25 03:46:39'),
(46, 'CPCH19MNYADPFYQY85UH9FMG7T', 22, '2', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH19MNYADPFYQY85UH9FMG7T&key=676692584c266af86e69d8bbc7f3249b', 'https://www.coinpayments.net/qrgen.php?id=CPCH19MNYADPFYQY85UH9FMG7T&key=676692584c266af86e69d8bbc7f3249b', '338UoT5HhkH356LTnPKN3CtnDNsf7KRsHU', 0, '1534262707', '1534284307', '2018-08-14 16:05:07', '2018-08-25 03:46:39'),
(47, 'CPCH7RLWJIDQAFCQLI3V9OCAOJ', 22, '10.00', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH7RLWJIDQAFCQLI3V9OCAOJ&key=3a53f67c69fa4c008142f50a0507fe95', 'https://www.coinpayments.net/qrgen.php?id=CPCH7RLWJIDQAFCQLI3V9OCAOJ&key=3a53f67c69fa4c008142f50a0507fe95', '36kcSCr7rxhVxP2tcFUM3RZUzfoaTtUWrA', 0, '1534274431', '1534296031', '2018-08-14 19:20:31', '2018-08-25 03:46:39'),
(48, 'CPCH55C5MBEWJEBHSONHVUXI6J', 22, '6', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH55C5MBEWJEBHSONHVUXI6J&key=59a8103acd42ff10e2d91c72a320598b', 'https://www.coinpayments.net/qrgen.php?id=CPCH55C5MBEWJEBHSONHVUXI6J&key=59a8103acd42ff10e2d91c72a320598b', '3AafRSm3qwozgZKb9fqF69YH4XU1NJdFEq', 0, '1534331302', '1534342102', '2018-08-15 11:08:22', '2018-08-25 03:46:39'),
(49, 'CPCH6EDTNEV7XGHKLUBAE4MNDL', 22, '00043', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH6EDTNEV7XGHKLUBAE4MNDL&key=0ce08aeb53daf9d31bb8b833127af87a', 'https://www.coinpayments.net/qrgen.php?id=CPCH6EDTNEV7XGHKLUBAE4MNDL&key=0ce08aeb53daf9d31bb8b833127af87a', '3GfzKpvW3ZPZTCyX5xUywvz3xhcuVGVYko', 0, '1534346825', '1534357625', '2018-08-15 15:27:05', '2018-08-25 03:46:39'),
(50, 'CPCH2305PRLJPXDDFBAORV47TD', 22, '0.1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2305PRLJPXDDFBAORV47TD&key=9a7d6c15b50d7009233ad630fc1e6ceb', 'https://www.coinpayments.net/qrgen.php?id=CPCH2305PRLJPXDDFBAORV47TD&key=9a7d6c15b50d7009233ad630fc1e6ceb', '3R1ysMHce9omh19SLVed1TuaKoUWaUA6Jw', 0, '1534641180', '1534651980', '2018-08-19 01:13:00', '2018-08-25 03:46:39'),
(51, 'CPCH3QU1PJY7P0WXAGNGYDAALE', 22, '10', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH3QU1PJY7P0WXAGNGYDAALE&key=7f0efc4164985ae74c28ca406d53e6e7', 'https://www.coinpayments.net/qrgen.php?id=CPCH3QU1PJY7P0WXAGNGYDAALE&key=7f0efc4164985ae74c28ca406d53e6e7', '3Cs2BZYLdqRajdyEoVxiu2tNuhu3AP5Nge', 0, '1534764948', '1534775748', '2018-08-20 11:35:48', '2018-08-25 03:46:39'),
(52, 'CPCH1ZFRAIYITZOUNCDOSLDW2J', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH1ZFRAIYITZOUNCDOSLDW2J&key=c1621208e0282c9e057fb5c217f6aeca', 'https://www.coinpayments.net/qrgen.php?id=CPCH1ZFRAIYITZOUNCDOSLDW2J&key=c1621208e0282c9e057fb5c217f6aeca', '38T95to8xyeMtA4tJ9a1ztkjHtQxYeZgb7', 0, '1534804874', '1534826474', '2018-08-20 22:41:14', '2018-08-25 03:46:39'),
(53, 'CPCH2DI3SQMHR5GT12VJKHVR6Z', 22, '200', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2DI3SQMHR5GT12VJKHVR6Z&key=1b057384aecaa56b145377d85c6b8058', 'https://www.coinpayments.net/qrgen.php?id=CPCH2DI3SQMHR5GT12VJKHVR6Z&key=1b057384aecaa56b145377d85c6b8058', '3ANcNzaaDYYACSAYNy5hQHBvEaK3MUY8bY', 0, '1534806476', '1534817276', '2018-08-20 23:07:56', '2018-08-25 03:46:39'),
(54, 'CPCH043CLIY08TVQYE8A0TJSXZ', 22, '2', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH043CLIY08TVQYE8A0TJSXZ&key=3b05bf38b88c2300a0bf39c90fe69689', 'https://www.coinpayments.net/qrgen.php?id=CPCH043CLIY08TVQYE8A0TJSXZ&key=3b05bf38b88c2300a0bf39c90fe69689', '3EbLJ3A3HjjyNgWaVnaVoLV7ghYRoCTNUe', 0, '1534840990', '1534851790', '2018-08-21 08:43:11', '2018-08-25 03:46:39'),
(55, 'CPCH55LEJ120LZVCPSQMQAEEDA', 22, '6', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH55LEJ120LZVCPSQMQAEEDA&key=c364cfb594952c01350c410353ad4770', 'https://www.coinpayments.net/qrgen.php?id=CPCH55LEJ120LZVCPSQMQAEEDA&key=c364cfb594952c01350c410353ad4770', '3MdLy6WiZGb7zFihtVeNJYifqz7hvwjhVu', 0, '1534931744', '1534942544', '2018-08-22 09:55:44', '2018-08-25 03:46:40'),
(56, 'CPCH5T1OMO9YRXWIRP2RQRYZ54', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH5T1OMO9YRXWIRP2RQRYZ54&key=85d0267bc5cb1262573e3d6dc61bcb17', 'https://www.coinpayments.net/qrgen.php?id=CPCH5T1OMO9YRXWIRP2RQRYZ54&key=85d0267bc5cb1262573e3d6dc61bcb17', '3C8geJNWZdHNLa6jjPLhq7sMuZz5EMuNyB', 0, '1534948976', '1534970576', '2018-08-22 14:42:56', '2018-08-25 03:46:40'),
(57, 'CPCH25FY5DZ9QUZWEHE5XEHZNL', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH25FY5DZ9QUZWEHE5XEHZNL&key=152ad052ef5fe9bbc5d248c6b25289a9', 'https://www.coinpayments.net/qrgen.php?id=CPCH25FY5DZ9QUZWEHE5XEHZNL&key=152ad052ef5fe9bbc5d248c6b25289a9', '32B5ioBSWRJkM8bzw4qTT5qkWZNYcADXL5', 0, '1535168676', '1535179476', '2018-08-25 03:44:36', '2018-08-28 09:25:31'),
(58, 'CPCH2GBG0TFCXTZNUNNIHSSMCA', 22, '555', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2GBG0TFCXTZNUNNIHSSMCA&key=deb02c5e7df403d189ca6eda1706dd24', 'https://www.coinpayments.net/qrgen.php?id=CPCH2GBG0TFCXTZNUNNIHSSMCA&key=deb02c5e7df403d189ca6eda1706dd24', '3HYP34EMYto4jpC2Z3r4G9HD489hPq11g9', 0, '1535211765', '1535222565', '2018-08-25 15:42:44', '2018-08-28 09:25:31'),
(59, 'CPCH0FRA32GZ1HLR0MK7JAGQZK', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH0FRA32GZ1HLR0MK7JAGQZK&key=e3291561f8f50a12b8b4ae37ed808f07', 'https://www.coinpayments.net/qrgen.php?id=CPCH0FRA32GZ1HLR0MK7JAGQZK&key=e3291561f8f50a12b8b4ae37ed808f07', '3NdUdiJscBqyoqdccuwSqqd59SKbChTzoo', 0, '1535292221', '1535313821', '2018-08-26 14:03:41', '2018-08-28 09:25:31'),
(60, 'CPCH65O5R9HTGCBCB8W08UNPWT', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH65O5R9HTGCBCB8W08UNPWT&key=20f21f4b09ac4829934b9c8151e2016a', 'https://www.coinpayments.net/qrgen.php?id=CPCH65O5R9HTGCBCB8W08UNPWT&key=20f21f4b09ac4829934b9c8151e2016a', '3C1an6eqFm3tNskqXnSvPketNs2YGX4yan', 0, '1535553880', '1535575480', '2018-08-29 14:44:40', '2018-09-01 00:47:56'),
(61, 'CPCH2IYREYMFIBNTBYY3DDYTRI', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH2IYREYMFIBNTBYY3DDYTRI&key=96a66f11834c1b911e09b61ea1f43309', 'https://www.coinpayments.net/qrgen.php?id=CPCH2IYREYMFIBNTBYY3DDYTRI&key=96a66f11834c1b911e09b61ea1f43309', '3GjUcFAeDvkW9kKEvhdm3dST6a6yDmYNsK', 0, '1535565317', '1535586917', '2018-08-29 17:55:16', '2018-09-01 00:47:56'),
(62, 'CPCH6ILSAMQDRET9SGYC3J5DVI', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH6ILSAMQDRET9SGYC3J5DVI&key=7e857fd72a2c310ab5af2333ef9e11d4', 'https://www.coinpayments.net/qrgen.php?id=CPCH6ILSAMQDRET9SGYC3J5DVI&key=7e857fd72a2c310ab5af2333ef9e11d4', '3F771uHupedpXYeqCQtpo8KCBZ1VRMHFQU', 0, '1535625726', '1535636526', '2018-08-30 10:42:06', '2018-09-01 00:47:56'),
(63, 'CPCH47L9LVQKCHPSUJSMVXNZVA', 22, '501', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH47L9LVQKCHPSUJSMVXNZVA&key=44fb6f9f8fb1d0bfdc000934b4a05f78', 'https://www.coinpayments.net/qrgen.php?id=CPCH47L9LVQKCHPSUJSMVXNZVA&key=44fb6f9f8fb1d0bfdc000934b4a05f78', '3D9ifWHUMXbUr7GY4vyMBX65ZAKTZcZVqR', 0, '1535638677', '1535660277', '2018-08-30 14:17:57', '2018-09-01 00:47:56'),
(64, 'CPCH5GXKMWQAUNPTGYCS0E0FIK', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCH5GXKMWQAUNPTGYCS0E0FIK&key=e3fad5ef9880b8b19291e6fcad627cc9', 'https://www.coinpayments.net/qrgen.php?id=CPCH5GXKMWQAUNPTGYCS0E0FIK&key=e3fad5ef9880b8b19291e6fcad627cc9', '39rxCkbr8YgwgRUF4xcMiR33WYS5vuPMkU', 0, '1535762549', '1535773349', '2018-09-01 00:42:29', '2018-09-03 10:06:25'),
(65, 'CPCI6PVGLMSWSLWEPDMRS9BIXL', 22, '10', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI6PVGLMSWSLWEPDMRS9BIXL&key=c2f40d4c1ee20508b255c2b3e8d51a88', 'https://www.coinpayments.net/qrgen.php?id=CPCI6PVGLMSWSLWEPDMRS9BIXL&key=c2f40d4c1ee20508b255c2b3e8d51a88', '3NrEeeKJxwyL4rqvKtMLpttL85Vd1q6aTT', 0, '1536044085', '1536054885', '2018-09-04 06:54:45', '2018-09-04 09:55:01'),
(66, 'CPCI1S8AEMXNDN4K0P0QQAQXQB', 22, '10', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI1S8AEMXNDN4K0P0QQAQXQB&key=c331ea4e33721e5997e62084872756a6', 'https://www.coinpayments.net/qrgen.php?id=CPCI1S8AEMXNDN4K0P0QQAQXQB&key=c331ea4e33721e5997e62084872756a6', '38d2bce3j8My93b6f8FP9kK1XsdfoAnSxN', 0, '1536093827', '1536115427', '2018-09-04 20:43:47', '2018-09-07 11:15:11'),
(67, 'CPCI4RRWK7XY4UNHWRR2Q2WULP', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI4RRWK7XY4UNHWRR2Q2WULP&key=99f5827556e0891bc598a46a57d9e49b', 'https://www.coinpayments.net/qrgen.php?id=CPCI4RRWK7XY4UNHWRR2Q2WULP&key=99f5827556e0891bc598a46a57d9e49b', '3DctGLT2iu21ae7U4F8c8pQm5GGb3S5Krj', 0, '1536355683', '1536377283', '2018-09-07 21:28:03', '2018-09-10 03:53:34'),
(68, 'CPCI5OHVSYZR4A6AB1WGMAYMJG', 22, '0.1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI5OHVSYZR4A6AB1WGMAYMJG&key=a976ce63034e4c1e0e71583c83efc4c9', 'https://www.coinpayments.net/qrgen.php?id=CPCI5OHVSYZR4A6AB1WGMAYMJG&key=a976ce63034e4c1e0e71583c83efc4c9', '386LhhaPQ7koBCqZ2nqEG2LgVhw2iSbWWc', 0, '1536392451', '1536403251', '2018-09-08 07:40:50', '2018-09-10 03:53:35'),
(69, 'CPCI7HJQTKAIJBGMBXZABREXJS', 22, '10', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI7HJQTKAIJBGMBXZABREXJS&key=c26af895270dd1189733df93e1ac2efc', 'https://www.coinpayments.net/qrgen.php?id=CPCI7HJQTKAIJBGMBXZABREXJS&key=c26af895270dd1189733df93e1ac2efc', '33si1tNcnUR1qcyDjNWRLLodhEXQUtRety', 0, '1536402246', '1536413046', '2018-09-08 10:24:06', '2018-09-10 03:53:35'),
(70, 'CPCI5HJAZTDDQ6CGWK3GELELOZ', 22, '3', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI5HJAZTDDQ6CGWK3GELELOZ&key=cf5de37e85dead0a3e425ca45f58dbcd', 'https://www.coinpayments.net/qrgen.php?id=CPCI5HJAZTDDQ6CGWK3GELELOZ&key=cf5de37e85dead0a3e425ca45f58dbcd', '3C8kWGESGH6FmVApLi8bu4WBnZqZHi2owd', 0, '1536514008', '1536524808', '2018-09-09 17:26:48', '2018-09-10 03:53:35'),
(71, 'CPCI5VWH0WKEWFGAL1RONVGQI2', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI5VWH0WKEWFGAL1RONVGQI2&key=2d1c9680a3c88ca10058c3038bfdcbdd', 'https://www.coinpayments.net/qrgen.php?id=CPCI5VWH0WKEWFGAL1RONVGQI2&key=2d1c9680a3c88ca10058c3038bfdcbdd', '3N4qVccsE7Z1TzbmDY8ZKP4vZZcwo13ZPH', 0, '1536697999', '1536719599', '2018-09-11 20:33:19', '2018-09-18 11:23:37'),
(72, 'CPCI1YRVJVRZPOTPXWTBCFRSOU', 22, '2', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI1YRVJVRZPOTPXWTBCFRSOU&key=311e8f97b3d798cae29d58a7fe8c6e03', 'https://www.coinpayments.net/qrgen.php?id=CPCI1YRVJVRZPOTPXWTBCFRSOU&key=311e8f97b3d798cae29d58a7fe8c6e03', '3QF2jMpfTvm9faVquBU44HMddjGJZUiVYg', 0, '1536889195', '1536899995', '2018-09-14 01:39:55', '2018-09-18 11:23:37'),
(73, 'CPCI2T0WMCE7G7AHU2W1OG5HR4', 22, '100', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI2T0WMCE7G7AHU2W1OG5HR4&key=c7fe65735a53147e703422dbddaefa6c', 'https://www.coinpayments.net/qrgen.php?id=CPCI2T0WMCE7G7AHU2W1OG5HR4&key=c7fe65735a53147e703422dbddaefa6c', '35r7uqnysrYiFsjFT2G5DrHfgTVvuACLac', 0, '1537022998', '1537033798', '2018-09-15 14:49:57', '2018-09-18 11:23:37'),
(74, 'CPCI0WZKVH0VUMJBAK7UXGGTQV', 22, '2', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI0WZKVH0VUMJBAK7UXGGTQV&key=266bd803284ea801eae032634ac4ed36', 'https://www.coinpayments.net/qrgen.php?id=CPCI0WZKVH0VUMJBAK7UXGGTQV&key=266bd803284ea801eae032634ac4ed36', '3EaKVjWV3f6JWJMWhHWT9V4F32SwHev2uF', 0, '1537179504', '1537201104', '2018-09-17 10:18:24', '2018-09-18 11:23:37'),
(75, 'CPCI5XU0UWF85HF6PW46NJJCLG', 22, '4', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI5XU0UWF85HF6PW46NJJCLG&key=424ce7c4e89d0c2bb97ffb1a5419fc00', 'https://www.coinpayments.net/qrgen.php?id=CPCI5XU0UWF85HF6PW46NJJCLG&key=424ce7c4e89d0c2bb97ffb1a5419fc00', '3392ykDUpjQTtA2UhmYiDh4hMzT86aPfaf', 0, '1537209048', '1537230648', '2018-09-17 18:30:48', '2018-09-18 11:23:37'),
(76, 'CPCI15VIK5UGFRIXYWSHTLQHVX', 22, '2', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI15VIK5UGFRIXYWSHTLQHVX&key=28f85af05d5d04f679a51ad401453ee2', 'https://www.coinpayments.net/qrgen.php?id=CPCI15VIK5UGFRIXYWSHTLQHVX&key=28f85af05d5d04f679a51ad401453ee2', '332wcz3mqdUdmsRyGDpiCawqcsE36wutzW', 0, '1537260370', '1537281970', '2018-09-18 08:46:09', '2018-09-19 03:45:11'),
(77, 'CPCI19BXAKNPTBDCBXQHDLGDMD', 22, '12554', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI19BXAKNPTBDCBXQHDLGDMD&key=65b0dba4b994757d9e3f246ac636d288', 'https://www.coinpayments.net/qrgen.php?id=CPCI19BXAKNPTBDCBXQHDLGDMD&key=65b0dba4b994757d9e3f246ac636d288', '3DyjB4bMktRcZjDW5FBPa6NdP7hwS1EjvJ', 0, '1537308882', '1537319682', '2018-09-18 22:14:41', '2018-09-19 03:45:11'),
(78, 'CPCI2LFI3KJRIE3U1OIJN2KL2O', 22, '0.083', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI2LFI3KJRIE3U1OIJN2KL2O&key=ac956654789efdd53559996911f9dbb1', 'https://www.coinpayments.net/qrgen.php?id=CPCI2LFI3KJRIE3U1OIJN2KL2O&key=ac956654789efdd53559996911f9dbb1', '3MpGPzGQ91SsQMJDA8Mc1aLKB2vMKAarvf', 0, '1537328557', '1537339357', '2018-09-19 03:42:37', '2018-09-24 13:07:11'),
(79, 'CPCI082UYI28RPRZVK40UHZLWB', 22, '0.001', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI082UYI28RPRZVK40UHZLWB&key=40780676188dd1b4f719bb7e8755c8fe', 'https://www.coinpayments.net/qrgen.php?id=CPCI082UYI28RPRZVK40UHZLWB&key=40780676188dd1b4f719bb7e8755c8fe', '3DDaSUSp7mCuPqjFz1tvvn31xv3fAgwAR5', 0, '1537401443', '1537412243', '2018-09-19 23:57:23', '2018-09-24 13:07:12'),
(80, 'CPCI3MJ6VWIUSC2HDMDNWRDAPY', 22, '100', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI3MJ6VWIUSC2HDMDNWRDAPY&key=04385cabb7268eb0427c17a8ddacd153', 'https://www.coinpayments.net/qrgen.php?id=CPCI3MJ6VWIUSC2HDMDNWRDAPY&key=04385cabb7268eb0427c17a8ddacd153', '3QQhdxYn1DBQ76kpiKv2exM9gpuooPzuKe', 0, '1537426029', '1537436829', '2018-09-20 06:47:09', '2018-09-24 13:07:12'),
(81, 'CPCI2EO0FCLQCZBMMBRAYWKO85', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI2EO0FCLQCZBMMBRAYWKO85&key=a9ec88ec7c32dda6432d6cc4d314441b', 'https://www.coinpayments.net/qrgen.php?id=CPCI2EO0FCLQCZBMMBRAYWKO85&key=a9ec88ec7c32dda6432d6cc4d314441b', '3JHdfkoX3pWbYvYfudjm8cBzhMbaHpNezv', 0, '1537426207', '1537437007', '2018-09-20 06:50:06', '2018-09-24 13:07:12'),
(82, 'CPCI2HV5RO0FF7XUDOKJ2BJQVO', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI2HV5RO0FF7XUDOKJ2BJQVO&key=de8b7fd9c07c2107c37514ffbcd14e8f', 'https://www.coinpayments.net/qrgen.php?id=CPCI2HV5RO0FF7XUDOKJ2BJQVO&key=de8b7fd9c07c2107c37514ffbcd14e8f', '3LvfVmasZFKDhxkrSgCQe4Cg76ezhNHJkv', 0, '1537458670', '1537480270', '2018-09-20 15:51:10', '2018-09-24 13:07:12'),
(83, 'CPCI1R1UK27BFGU53MVZRPV49S', 22, '7', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI1R1UK27BFGU53MVZRPV49S&key=37b7446a643e42a4cd0e553cf8dfbfaf', 'https://www.coinpayments.net/qrgen.php?id=CPCI1R1UK27BFGU53MVZRPV49S&key=37b7446a643e42a4cd0e553cf8dfbfaf', '36vsK8AUjyXqhQiSbvsAWtjBLzF6ubJFAu', 0, '1537467667', '1537478467', '2018-09-20 18:21:07', '2018-09-24 13:07:12'),
(84, 'CPCI1P3OXHFIR82J2SWGUF8CVF', 46, '0.014', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI1P3OXHFIR82J2SWGUF8CVF&key=8fa85fef12bbdbd83546509a1d47414e', 'https://www.coinpayments.net/qrgen.php?id=CPCI1P3OXHFIR82J2SWGUF8CVF&key=8fa85fef12bbdbd83546509a1d47414e', '3QnBEzX4tkDsDhSthYV3LWE4AWpX4xw3To', 0, '1537650167', '1537660967', '2018-09-22 21:02:47', '2018-09-24 13:07:12'),
(85, 'CPCI1OU3ESJSAFBGS9XVZOHZWU', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI1OU3ESJSAFBGS9XVZOHZWU&key=6944db62a1db259e8aa05af55e0cde1b', 'https://www.coinpayments.net/qrgen.php?id=CPCI1OU3ESJSAFBGS9XVZOHZWU&key=6944db62a1db259e8aa05af55e0cde1b', '3PqoF8qXJFPJihJmzdnrwibadq44xFWYFy', 0, '1537794304', '1537805104', '2018-09-24 13:05:04', '2018-09-24 20:37:11'),
(86, 'CPCI3EPR4TITSI67FI665B5PZQ', 22, '100', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI3EPR4TITSI67FI665B5PZQ&key=51406c56642b2b307fcff02d3d7dd9eb', 'https://www.coinpayments.net/qrgen.php?id=CPCI3EPR4TITSI67FI665B5PZQ&key=51406c56642b2b307fcff02d3d7dd9eb', '3NNKSogXcu7VeAQU5uSndxMgnJVZFsntwW', 0, '1537821433', '1537832233', '2018-09-24 20:37:13', '2018-09-29 12:46:20'),
(87, 'CPCI3PVYKRDOLH1KYHQQPDLC2F', 22, '10', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI3PVYKRDOLH1KYHQQPDLC2F&key=10ca0ec9dd7d1028f71fe8f22e550375', 'https://www.coinpayments.net/qrgen.php?id=CPCI3PVYKRDOLH1KYHQQPDLC2F&key=10ca0ec9dd7d1028f71fe8f22e550375', '39smsbDrn8CtNmQc3uEZT6dcy1yGGdC9uu', 0, '1537902923', '1537924523', '2018-09-25 19:15:23', '2018-09-29 12:46:21'),
(88, 'CPCI3J8JUZKNTALLQEJVBDSAGB', 22, '200', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI3J8JUZKNTALLQEJVBDSAGB&key=52242a2200a6cec4d6dea1516e76f3fe', 'https://www.coinpayments.net/qrgen.php?id=CPCI3J8JUZKNTALLQEJVBDSAGB&key=52242a2200a6cec4d6dea1516e76f3fe', '3EmjTGZL3km7CnzZD6dzD982JT8Rq7nRkq', 0, '1537969627', '1537991227', '2018-09-26 13:47:07', '2018-09-29 12:46:21'),
(89, 'CPCI1PPWT8ZMJOPZ6FXGKJTRLV', 22, '1000.00', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI1PPWT8ZMJOPZ6FXGKJTRLV&key=0589a70d087adcf2c3508dab257dc23c', 'https://www.coinpayments.net/qrgen.php?id=CPCI1PPWT8ZMJOPZ6FXGKJTRLV&key=0589a70d087adcf2c3508dab257dc23c', '3KzGKZ5WayR4tFyBd3gupLn11BXbX3Nmkr', 0, '1538058522', '1538080122', '2018-09-27 14:28:42', '2018-09-29 12:46:21'),
(90, 'CPCI0INCAZM9PCCODICA4ZIGIM', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI0INCAZM9PCCODICA4ZIGIM&key=f0c6ea326c8e32428e710e8ec478eeb2', 'https://www.coinpayments.net/qrgen.php?id=CPCI0INCAZM9PCCODICA4ZIGIM&key=f0c6ea326c8e32428e710e8ec478eeb2', '3GDtQ1DK5quhyxqXbTWyHGomzNfDZDqET4', 0, '1538064623', '1538086223', '2018-09-27 16:10:23', '2018-09-29 12:46:21'),
(91, 'CPCI2ZOHDZMFGBITZLQZC5SHZV', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI2ZOHDZMFGBITZLQZC5SHZV&key=8c1db9cb151b35c7e1c51d9cc740ac16', 'https://www.coinpayments.net/qrgen.php?id=CPCI2ZOHDZMFGBITZLQZC5SHZV&key=8c1db9cb151b35c7e1c51d9cc740ac16', '3C9bZxvZqYP6jYjmDhKhgnr8rfD2iXKcRU', 0, '1538064749', '1538086349', '2018-09-27 16:12:29', '2018-09-29 12:46:21'),
(92, 'CPCI5DLSYAOE16WIVSP7CF5MDK', 22, '1', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI5DLSYAOE16WIVSP7CF5MDK&key=ad03dc750e2fe581429b2b6956e8458b', 'https://www.coinpayments.net/qrgen.php?id=CPCI5DLSYAOE16WIVSP7CF5MDK&key=ad03dc750e2fe581429b2b6956e8458b', '3BfimLBo5KdqfhDVG1ayo3qREd3JvmRLt4', 0, '1538064761', '1538086361', '2018-09-27 16:12:41', '2018-09-29 12:46:21'),
(93, 'CPCI0HRV8EKHGEZ1PBEX3LWDTN', 22, '6', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI0HRV8EKHGEZ1PBEX3LWDTN&key=139d7aa2435ebfb4c33d214a191d7f69', 'https://www.coinpayments.net/qrgen.php?id=CPCI0HRV8EKHGEZ1PBEX3LWDTN&key=139d7aa2435ebfb4c33d214a191d7f69', '3LdMyAzPCiYHKTWCN3cAB9JiDrGNgiLpjz', 0, '1538080027', '1538090827', '2018-09-27 20:27:08', '2018-09-29 12:46:21'),
(94, 'CPCI6A4DOPFBODJTTYVOUPR6LE', 22, '0.01', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI6A4DOPFBODJTTYVOUPR6LE&key=25496ac9aad6cda9a8ea0c492fc7640f', 'https://www.coinpayments.net/qrgen.php?id=CPCI6A4DOPFBODJTTYVOUPR6LE&key=25496ac9aad6cda9a8ea0c492fc7640f', '35wuozMyRTByVXwycxJPyaQgkLyiWLdnF9', 0, '1538098598', '1538109398', '2018-09-28 01:36:38', '2018-09-29 12:46:21'),
(95, 'CPCI4LS2WNGRZQ2DSL75XPDBN0', 47, '2', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI4LS2WNGRZQ2DSL75XPDBN0&key=4fbfa75d9d4605b73c3f1a485875770f', 'https://www.coinpayments.net/qrgen.php?id=CPCI4LS2WNGRZQ2DSL75XPDBN0&key=4fbfa75d9d4605b73c3f1a485875770f', '3HVw6cngmfmkgaUqEGpswttPwTrUhzyDFw', 0, '1538125902', '1538147502', '2018-09-28 09:11:42', '2018-09-29 12:46:21'),
(96, 'CPCI7NICOIJPYXZ0O7RX8SBKEJ', 22, '1000', 'Cancelled / Timed Out', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI7NICOIJPYXZ0O7RX8SBKEJ&key=18e130b04693d6064dd05132fc79a92c', 'https://www.coinpayments.net/qrgen.php?id=CPCI7NICOIJPYXZ0O7RX8SBKEJ&key=18e130b04693d6064dd05132fc79a92c', '32AsyA2A1UGUr66gvr2uMpuR9k3zQV92GL', 0, '1538210377', '1538221177', '2018-09-29 08:39:36', '2018-09-29 12:46:21'),
(97, 'CPCI0N56GAA2HEFIFVTWP47SPY', 22, '0.02', 'Waiting for buyer funds...', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCI0N56GAA2HEFIFVTWP47SPY&key=a34d0ff2485cab1ceaffd3a75b48b64f', 'https://www.coinpayments.net/qrgen.php?id=CPCI0N56GAA2HEFIFVTWP47SPY&key=a34d0ff2485cab1ceaffd3a75b48b64f', '34qnPR7Fc6fxkkY3x9ZBBKfaZBkCXRX7tp', 0, '1538225094', '1538235894', '2018-09-29 12:44:55', '2018-09-29 12:46:21');

-- --------------------------------------------------------

--
-- Table structure for table `etemplates`
--

CREATE TABLE `etemplates` (
  `id` int(10) UNSIGNED NOT NULL,
  `esender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emessage` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `smsapi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `etemplates`
--

INSERT INTO `etemplates` (`id`, `esender`, `emessage`, `smsapi`, `created_at`, `updated_at`) VALUES
(1, 'email@email.com', 'Email Message Api', 'SMS Message Api', '2017-12-11 07:17:51', '2017-12-11 07:19:31');

-- --------------------------------------------------------

--
-- Table structure for table `gateways`
--

CREATE TABLE `gateways` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gateimg` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `minamo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maxamo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `charged` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `chargep` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `val1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `val2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `currency` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gateways`
--

INSERT INTO `gateways` (`id`, `name`, `gateimg`, `minamo`, `maxamo`, `charged`, `chargep`, `rate`, `val1`, `val2`, `currency`, `status`, `created_at`, `updated_at`) VALUES
(5, 'Coin Payment', '5a3213ac1619e.png', '0', '0', '0', '0', '0', 'ee71abda06a600966e274e5ee8471c3b', 'Bitexchange@123', '0', 1, NULL, '2018-07-03 12:08:07');

-- --------------------------------------------------------

--
-- Table structure for table `generals`
--

CREATE TABLE `generals` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Website',
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Sub Title',
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '336699',
  `terms_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cur` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USD',
  `cursym` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '$',
  `reg` int(11) NOT NULL DEFAULT '1',
  `emailver` int(11) NOT NULL DEFAULT '1',
  `smsver` int(11) NOT NULL DEFAULT '1',
  `decimal` int(11) NOT NULL DEFAULT '2',
  `emailnotf` int(11) NOT NULL DEFAULT '1',
  `smsnotf` int(11) NOT NULL DEFAULT '1',
  `startdate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `generals`
--

INSERT INTO `generals` (`id`, `title`, `subtitle`, `color`, `terms_url`, `cur`, `cursym`, `reg`, `emailver`, `smsver`, `decimal`, `emailnotf`, `smsnotf`, `startdate`, `created_at`, `updated_at`) VALUES
(1, 'BIT INVEST', 'Crypto Currency Investing Platform', 'f7931a', 'https://www.google.com', 'BITCOIN', 'BTC', 1, 1, 1, 5, 0, 0, '2017-12-29', '2017-12-11 01:17:21', '2018-07-07 10:53:01');

-- --------------------------------------------------------

--
-- Table structure for table `interfaces`
--

CREATE TABLE `interfaces` (
  `id` int(10) UNSIGNED NOT NULL,
  `abdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stdesc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sthead` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ftcon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `interfaces`
--

INSERT INTO `interfaces` (`id`, `abdesc`, `stdesc`, `sthead`, `ftcon`, `created_at`, `updated_at`) VALUES
(1, '<span style="color: rgb(0, 0, 0); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" font-weight:="" 400;="" letter-spacing:="" orphans:="" 2;="" text-align:="" justify;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" display:="" inline="" !important;="" float:="" none;"="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style="color: rgb(0, 0, 0); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" font-weight:="" 400;="" letter-spacing:="" orphans:="" 2;="" text-align:="" justify;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" display:="" inline="" !important;="" float:="" none;"="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', '<span style="color: rgb(0, 0, 0); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" font-weight:="" 400;="" letter-spacing:="" orphans:="" 2;="" text-align:="" justify;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" display:="" inline="" !important;="" float:="" none;"="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span><span style="color: rgb(0, 0, 0); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" font-weight:="" 400;="" letter-spacing:="" orphans:="" 2;="" text-align:="" justify;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" display:="" inline="" !important;="" float:="" none;"="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span><span style="color: rgb(0, 0, 0); font-family: " open="" sans",="" arial,="" sans-serif;="" font-size:="" 14px;="" font-style:="" normal;="" font-variant-ligatures:="" font-variant-caps:="" font-weight:="" 400;="" letter-spacing:="" orphans:="" 2;="" text-align:="" justify;="" text-indent:="" 0px;="" text-transform:="" none;="" white-space:="" widows:="" word-spacing:="" -webkit-text-stroke-width:="" background-color:="" rgb(255,="" 255,="" 255);="" text-decoration-style:="" initial;="" text-decoration-color:="" display:="" inline="" !important;="" float:="" none;"="">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 'Our Story', '2018 - BitInvest . All Rights Reserved', '2017-12-17 07:53:37', '2018-01-04 16:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `intrest`
--

CREATE TABLE `intrest` (
  `id` int(11) NOT NULL,
  `month` varchar(50) DEFAULT NULL,
  `percentage` varchar(10) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intrest`
--

INSERT INTO `intrest` (`id`, `month`, `percentage`, `created_at`, `updated_at`) VALUES
(1, '3', '5', '2018-06-26 07:56:18', '2018-06-26 07:56:18'),
(2, '6', '10', '2018-06-26 07:56:18', '2018-06-26 07:56:18'),
(3, '12', '15', '2018-06-26 07:56:18', '2018-06-26 07:56:18'),
(4, '24', '20', '2018-06-26 07:56:18', '2018-06-26 07:56:18'),
(5, '36', '26', '2018-06-26 07:56:18', '2018-06-26 07:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `investments`
--

CREATE TABLE `investments` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rtime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `returned` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `next` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `investments`
--

INSERT INTO `investments` (`id`, `user_id`, `package_id`, `amount`, `rtime`, `returned`, `next`, `status`, `created_at`, `updated_at`) VALUES
(7, 1, 1, '150', '2017-12-14 10:40:25', '50', '2017-12-15 10:40:25', 2, '2017-12-13 04:58:18', '2017-12-14 04:40:25'),
(9, 1, 1, '159', '2017-12-14 10:40:25', '1', '2017-12-15 10:40:25', 2, '2017-12-13 04:58:18', '2017-12-14 04:40:25'),
(10, 5, 1, '5', '0', '0', '2017-12-26 19:35:47', 2, '2017-12-26 01:35:47', '2017-12-26 01:35:47'),
(11, 7, 1, '100', '2018-06-22 12:33:33', '5', '2018-07-22 12:33:33', 1, '2017-12-30 08:03:15', '2018-06-22 12:33:33'),
(12, 8, 1, '5', '0', '0', '2018-06-17 13:07:33', 1, '2018-06-16 13:07:33', '2018-06-16 13:07:33'),
(13, 22, 1, '0.2', '2018-06-22 11:52:43', '50', '2018-07-22 11:52:43', 2, '2018-06-22 11:52:43', '2018-06-22 11:52:43'),
(14, 22, 1, '2', '0', '0', '2018-07-22 12:19:10', 1, '2018-06-22 12:19:10', '2018-06-22 12:19:10'),
(15, 17, 1, '1', '0', '0', '2018-08-05 16:02:02', 1, '2018-07-06 16:02:02', '2018-07-06 16:02:02'),
(16, 22, 1, '10', '0', '0', '2018-08-20 20:29:49', 1, '2018-07-21 20:29:49', '2018-07-21 20:29:49'),
(17, 22, 1, '10', '0', '0', '2018-08-21 09:10:26', 1, '2018-07-22 09:10:26', '2018-07-22 09:10:26'),
(18, 22, 1, '4', '0', '0', '2018-08-21 13:35:32', 1, '2018-07-22 13:35:32', '2018-07-22 13:35:32'),
(19, 22, 1, '0.1', '0', '0', '2018-08-21 13:51:45', 1, '2018-07-22 13:51:45', '2018-07-22 13:51:45'),
(20, 22, 1, '0.001', '0', '0', '2018-08-21 17:01:21', 1, '2018-07-22 17:01:21', '2018-07-22 17:01:21'),
(21, 22, 1, '0.8', '0', '0', '2018-08-23 16:40:03', 1, '2018-07-24 16:40:03', '2018-07-24 16:40:03'),
(22, 22, 1, '0.01', '0', '0', '2018-08-26 05:57:24', 1, '2018-07-27 05:57:24', '2018-07-27 05:57:24'),
(23, 22, 1, '0.08', '0', '0', '2018-08-26 08:29:47', 1, '2018-07-27 08:29:47', '2018-07-27 08:29:47'),
(24, 22, 1, '0.018999999999999975', '0', '0', '2018-08-29 07:35:21', 1, '2018-07-30 07:35:21', '2018-07-30 07:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `kyc`
--

CREATE TABLE `kyc` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `id_proof_type` varchar(255) NOT NULL,
  `id_proof` varchar(255) NOT NULL,
  `address_proof_type` varchar(255) NOT NULL,
  `address_proof` varchar(255) NOT NULL,
  `face_proof_type` varchar(255) NOT NULL,
  `face_proof` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kyc`
--

INSERT INTO `kyc` (`id`, `user_id`, `id_proof_type`, `id_proof`, `address_proof_type`, `address_proof`, `face_proof_type`, `face_proof`, `created_at`, `updated_at`) VALUES
(2, 24, 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/247261.jpg', 'Drivers License', 'http://18.188.45.2/user/core/public/uploads/172568.jpg', 'Others', 'http://18.188.45.2/user/core/public/uploads/437867.jpg', '2018-06-25 15:38:43', '2018-06-25 15:38:43'),
(3, 25, 'Drivers License', 'http://18.188.45.2/user/core/public/uploads/614962.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/787209.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/926158.jpg', '2018-06-28 07:20:36', '2018-06-28 07:20:36'),
(4, 27, 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/644148.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/828712.jpg', 'Rental Agreeent', 'http://18.188.45.2/user/core/public/uploads/160630.jpg', '2018-06-28 07:31:10', '2018-06-28 07:31:10'),
(5, 30, 'Rental Agreeent', 'http://18.188.45.2/user/core/public/uploads/145177.jpg', 'Social Security Card', 'http://18.188.45.2/user/core/public/uploads/216322.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/211483.png', '2018-06-29 09:04:17', '2018-06-29 09:04:17'),
(6, 26, 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/285031.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/504203.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/125134.jpg', '2018-07-02 06:04:05', '2018-07-02 06:04:05'),
(7, 37, 'Social Security Card', 'http://18.188.45.2/user/core/public/uploads/623361.jpg', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/979700.png', 'PASSPORT', 'http://18.188.45.2/user/core/public/uploads/285363.jpg', '2018-07-05 20:32:16', '2018-07-05 20:32:16');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_11_061115_create_admins_table', 2),
(4, '2017_12_11_061116_create_admin_password_resets_table', 2),
(5, '2017_12_11_064550_create_generals_table', 3),
(6, '2017_12_11_124235_create_etemplates_table', 4),
(7, '2017_12_12_065651_create_gateways_table', 5),
(8, '2017_12_12_093147_create_packages_table', 6),
(9, '2017_12_12_094859_create_investments_table', 7),
(10, '2017_12_13_090851_create_returnlogs_table', 8),
(11, '2017_12_13_110540_create_deposits_table', 9),
(12, '2017_12_14_111540_create_withdraws_table', 10),
(13, '2017_12_17_070938_create_sliders_table', 11),
(14, '2017_12_17_105510_create_services_table', 12),
(15, '2017_12_17_113709_create_stats_table', 13),
(16, '2017_12_17_115511_create_testms_table', 14),
(17, '2017_12_17_122527_create_payms_table', 15),
(18, '2017_12_17_130754_create_interfaces_table', 16),
(19, '2017_12_30_112708_create_translogs_table', 17);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` varchar(25) DEFAULT NULL,
  `message` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `dashboard` varchar(20) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `message`, `status`, `dashboard`, `link`, `created_at`, `updated_at`) VALUES
(34, '24', 'Borrow ID : 1 July Month\'s Payment <br> has been Approved by admin!', 0, 'user', 'borrow', '2018-07-05 10:23:49', '2018-07-05 10:23:49'),
(38, '24', 'Admin has Approved your Borrow Request', 0, 'user', 'borrow', '2018-07-05 10:53:59', '2018-07-05 10:53:59'),
(39, '24', 'Borrow ID : 3 August Month\'s Payment <br> has been Declined by admin!', 0, 'user', 'borrow', '2018-07-05 10:57:12', '2018-07-05 10:57:12'),
(44, '24', 'Borrow ID : 3 July Month\'s Payment <br> has been Declined by admin!', 0, 'user', 'borrow', '2018-07-05 12:25:15', '2018-07-05 12:25:15'),
(52, '40', 'kunuku has deposited 100 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-08 10:01:50', '2018-07-08 10:01:50'),
(60, '27', 'aravind Borrow user has <br> updated his profile info', 0, 'admin', 'http://18.188.45.2/admin/admin/admin/borrow_users', '2018-07-18 07:34:51', '2018-07-18 07:34:51'),
(62, '27', 'aravind Borrow user has <br> requested for borrowing', 0, 'admin', 'http://18.188.45.2/admin/admin/admin/borrow_request', '2018-07-18 07:35:39', '2018-07-18 07:35:39'),
(63, '27', 'Admin has Approved your Borrow Request', 0, 'user', 'borrow', '2018-07-18 07:36:56', '2018-07-18 07:36:56'),
(65, '17', 'Your Deposit Request canceled<br> by Admin', 0, 'user', 'Deposit', '2018-07-18 14:28:16', '2018-07-18 14:28:16'),
(67, '37', 'Admin has Declined your Borrow Request', 0, 'user', 'borrow', '2018-07-18 14:34:12', '2018-07-18 14:34:12'),
(68, '22', 'demo has deposited 1000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-18 16:43:29', '2018-07-18 16:43:29'),
(69, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-18 16:45:17', '2018-07-18 16:45:17'),
(71, '22', 'demo has deposited 10 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-21 16:43:34', '2018-07-21 16:43:34'),
(72, '22', 'demo has deposited 1000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-21 20:28:17', '2018-07-21 20:28:17'),
(73, '22', 'demo has deposited 1000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-21 20:28:37', '2018-07-21 20:28:37'),
(74, '22', 'demo has deposited 1000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-21 20:28:50', '2018-07-21 20:28:50'),
(75, '22', 'demo has deposited 15 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-22 09:12:02', '2018-07-22 09:12:02'),
(76, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-22 13:52:18', '2018-07-22 13:52:18'),
(77, '22', 'demo has deposited 300 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-22 20:10:16', '2018-07-22 20:10:16'),
(78, '22', 'demo has deposited 5000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-24 00:18:42', '2018-07-24 00:18:42'),
(79, '22', 'demo has deposited 0.5 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-24 15:24:57', '2018-07-24 15:24:57'),
(80, '22', 'demo has deposited 50 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-25 21:22:48', '2018-07-25 21:22:48'),
(81, '22', 'demo has deposited 0.01 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-26 05:29:28', '2018-07-26 05:29:28'),
(83, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-27 05:53:50', '2018-07-27 05:53:50'),
(84, '22', 'demo has deposited 0.02 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-27 17:31:43', '2018-07-27 17:31:43'),
(85, '22', 'demo has deposited 0.05 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-28 11:03:52', '2018-07-28 11:03:52'),
(86, '22', 'demo has deposited 90 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-30 07:42:46', '2018-07-30 07:42:46'),
(87, '22', 'demo has deposited 55 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-07-30 18:09:42', '2018-07-30 18:09:42'),
(88, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-02 11:28:33', '2018-08-02 11:28:33'),
(89, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-02 12:23:37', '2018-08-02 12:23:37'),
(90, '22', 'demo has deposited 0.5 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-07 23:58:40', '2018-08-07 23:58:40'),
(91, '22', 'demo has deposited 70 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-10 04:23:14', '2018-08-10 04:23:14'),
(92, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-10 13:58:25', '2018-08-10 13:58:25'),
(93, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-10 14:00:45', '2018-08-10 14:00:45'),
(94, '22', 'demo has deposited 0.5 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-11 11:04:55', '2018-08-11 11:04:55'),
(95, '22', 'demo has deposited 0.5 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-11 11:09:27', '2018-08-11 11:09:27'),
(96, '44', 'bobinbkk1 has deposited 1000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-11 11:20:41', '2018-08-11 11:20:41'),
(97, '22', 'demo has deposited 120 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-11 15:13:39', '2018-08-11 15:13:39'),
(98, '22', 'demo has deposited 54456 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-13 08:55:29', '2018-08-13 08:55:29'),
(99, '22', 'demo has deposited 8000.00 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-14 00:04:00', '2018-08-14 00:04:00'),
(100, '22', 'demo has deposited 2 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-14 16:05:07', '2018-08-14 16:05:07'),
(101, '22', 'demo has deposited 10.00 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-14 19:20:31', '2018-08-14 19:20:31'),
(102, '22', 'demo has deposited 6 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-15 11:08:22', '2018-08-15 11:08:22'),
(103, '22', 'demo has deposited 00043 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-15 15:27:05', '2018-08-15 15:27:05'),
(104, '22', 'demo has deposited 0.1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-19 01:13:00', '2018-08-19 01:13:00'),
(105, '22', 'demo has deposited 10 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-20 11:35:48', '2018-08-20 11:35:48'),
(106, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-20 22:41:14', '2018-08-20 22:41:14'),
(107, '22', 'demo has deposited 200 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-20 23:07:56', '2018-08-20 23:07:56'),
(108, '22', 'demo has deposited 2 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-21 08:43:11', '2018-08-21 08:43:11'),
(109, '22', 'demo has deposited 6 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-22 09:55:44', '2018-08-22 09:55:44'),
(110, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-22 14:42:56', '2018-08-22 14:42:56'),
(111, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-25 03:44:36', '2018-08-25 03:44:36'),
(112, '22', 'demo has deposited 555 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-25 15:42:44', '2018-08-25 15:42:44'),
(113, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-26 14:03:41', '2018-08-26 14:03:41'),
(114, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-29 14:44:40', '2018-08-29 14:44:40'),
(115, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-29 17:55:16', '2018-08-29 17:55:16'),
(116, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-30 10:42:06', '2018-08-30 10:42:06'),
(117, '22', 'demo has deposited 501 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-08-30 14:17:57', '2018-08-30 14:17:57'),
(118, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-01 00:42:29', '2018-09-01 00:42:29'),
(119, '22', 'demo has deposited 10 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-04 06:54:45', '2018-09-04 06:54:45'),
(120, '22', 'demo has deposited 10 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-04 20:43:47', '2018-09-04 20:43:47'),
(121, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-07 21:28:03', '2018-09-07 21:28:03'),
(122, '22', 'demo has deposited 0.1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-08 07:40:50', '2018-09-08 07:40:50'),
(123, '22', 'demo has deposited 10 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-08 10:24:06', '2018-09-08 10:24:06'),
(124, '22', 'demo has deposited 3 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-09 17:26:48', '2018-09-09 17:26:48'),
(125, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-11 20:33:19', '2018-09-11 20:33:19'),
(126, '22', 'demo has deposited 2 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-14 01:39:55', '2018-09-14 01:39:55'),
(127, '22', 'demo has deposited 100 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-15 14:49:57', '2018-09-15 14:49:57'),
(128, '22', 'demo has deposited 2 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-17 10:18:24', '2018-09-17 10:18:24'),
(129, '22', 'demo has deposited 4 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-17 18:30:48', '2018-09-17 18:30:48'),
(130, '22', 'demo has deposited 2 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-18 08:46:09', '2018-09-18 08:46:09'),
(131, '22', 'demo has deposited 12554 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-18 22:14:41', '2018-09-18 22:14:41'),
(132, '22', 'demo has deposited 0.083 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-19 03:42:37', '2018-09-19 03:42:37'),
(133, '22', 'demo has deposited 0.001 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-19 23:57:23', '2018-09-19 23:57:23'),
(134, '22', 'demo has deposited 100 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-20 06:47:09', '2018-09-20 06:47:09'),
(135, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-20 06:50:06', '2018-09-20 06:50:06'),
(136, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-20 15:51:10', '2018-09-20 15:51:10'),
(137, '22', 'demo has deposited 7 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-20 18:21:07', '2018-09-20 18:21:07'),
(138, '46', 'ayambaashu51 has deposited 0.014 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-22 21:02:47', '2018-09-22 21:02:47'),
(139, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-24 13:05:04', '2018-09-24 13:05:04'),
(140, '22', 'demo has deposited 100 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-24 20:37:13', '2018-09-24 20:37:13'),
(141, '22', 'demo has deposited 10 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-25 19:15:23', '2018-09-25 19:15:23'),
(142, '22', 'demo has deposited 200 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-26 13:47:07', '2018-09-26 13:47:07'),
(143, '22', 'demo has deposited 1000.00 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-27 14:28:42', '2018-09-27 14:28:42'),
(144, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-27 16:10:23', '2018-09-27 16:10:23'),
(145, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-27 16:12:29', '2018-09-27 16:12:29'),
(146, '22', 'demo has deposited 1 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-27 16:12:41', '2018-09-27 16:12:41'),
(147, '22', 'demo has deposited 6 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-27 20:27:08', '2018-09-27 20:27:08'),
(148, '22', 'demo has deposited 0.01 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-28 01:36:38', '2018-09-28 01:36:38'),
(149, '47', 'praveenkumartup has deposited 2 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-28 09:11:42', '2018-09-28 09:11:42'),
(150, '22', 'demo has deposited 1000 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-29 08:39:36', '2018-09-29 08:39:36'),
(151, '22', 'demo has deposited 0.02 BTC <br> Please check and approve.', 0, 'admin', 'http://18.188.45.2/admin/admin/deposits/requests', '2018-09-29 12:44:55', '2018-09-29 12:44:55');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `min` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `max` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `times` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ret` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `period` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fixcom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `pcncom` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `min`, `max`, `times`, `ret`, `period`, `total`, `fixcom`, `pcncom`, `created_at`, `updated_at`) VALUES
(1, 'Lending Package', '0.001', '100', '20', '4', '8640', '80', '2', '50', NULL, '2018-09-30 23:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `status`, `created_at`) VALUES
('pialneel@gmail.com', '$2y$10$8vFU6ieKRyvWf1rcCL7cUOGu/uCjTrv7KJIWZKB4qYjs46MrQFCIu', 1, '2017-12-14 00:30:57'),
('rd@sk.co', '$2y$10$AzyLs3ISNJfuGOgRtBNcp.GCV/L/zuj6x8e0ghO.0Yrdu836bFJwi', 0, '2017-12-14 00:33:27'),
('pialneel@gmail.com', 'VCvplvVYgIFpWY8JsnUoesdpMcUnfv', 1, NULL),
('pialneel@gmail.com', 'fjV0Im95I92JdnFabId5qWJ173niTG', 1, NULL),
('pialneel@gmail.com', 'SBRfqUARX0kKoPtKmfhVL4W1xdkUpY', 1, NULL),
('pialneel@gmail.com', 'E9qDIffO7tFPxUVe7HA6hDhwwbjGYP', 1, NULL),
('pialneel@gmail.com', 'vbbATdJtf6HX6y8D3XmLQaXYuQDyX5', 1, '2017-12-14 01:04:59'),
('pialneel@gmail.com', 'kItiP7SRXyMJwJIpZ1086qJ1qYehTK', 1, '2017-12-14 01:48:02'),
('pialneel@gmail.com', 'jeAcTBGFlFYUsxPPNq9vvBHQGKhSf0', 1, '2017-12-14 01:54:57'),
('praveenkumartup@gmail.com', 'jOVNVLLesyhLVqtKUlSKFzT9jU4Rw7', 0, '2018-06-10 05:52:06'),
('praveenkumartup@gmail.com', 'prmNWiqosYaMErhCUeajb0gmCK43FH', 0, '2018-06-10 06:31:24'),
('praveenkumartup@gmail.com', 'SsbfWGV1PCER8znZD1FCH3M47HSEIW', 0, '2018-06-10 06:35:35'),
('praveenkumartup@gmail.com', 'pLh6iu6w0gv0UWiubGyZ6V5Fyn3kol', 0, '2018-06-10 06:35:54'),
('praveenkumartup@gmail.com', 'BblpqnYVpJ3MKbPariFssAZU3kwXG6', 0, '2018-06-10 06:37:04'),
('praveenkumartup@gmail.com', 'VYVKOLF3u2iOXWcZdWdfJRjd3MLX1z', 0, '2018-06-10 06:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `borrow_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(10) NOT NULL,
  `trans_id` varchar(255) DEFAULT NULL,
  `due_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `sent_to_address` varchar(255) DEFAULT NULL,
  `qr_url` varchar(255) DEFAULT NULL,
  `status_url` varchar(255) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '0- unpaid, 1-paid',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `borrow_id`, `user_id`, `amount`, `trans_id`, `due_date`, `sent_to_address`, `qr_url`, `status_url`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 24, '0.70', NULL, '2018-06-05 10:23:15', NULL, NULL, NULL, 2, '2018-07-04 17:12:32', '2018-07-04 17:12:32'),
(2, 1, 24, '0.70', 'CPCG22QFHOBKDCBD3C9TU2OJFY', '2018-09-05 10:57:12', '3FrDPvYNENmsW26C9i4qmPAim4KegTXYH2', 'https://www.coinpayments.net/qrgen.php?id=CPCG22QFHOBKDCBD3C9TU2OJFY&key=84d8256590f2c01526bb700643173b01', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG22QFHOBKDCBD3C9TU2OJFY&key=84d8256590f2c01526bb700643173b01', 3, '2018-07-04 17:12:32', '2018-07-04 17:12:32'),
(3, 1, 24, '0.70', NULL, '2018-09-05 10:33:11', NULL, NULL, NULL, 1, '2018-07-04 17:12:32', '2018-07-04 17:12:32'),
(7, 3, 24, '0.35', 'CPCG4KDLEDHMZ5FNZRSHDEXD39', '2018-07-06 04:58:01', '3PNLUFRrZc2DvEZVrPpuAi3RBPPjfzSXq4', 'https://www.coinpayments.net/qrgen.php?id=CPCG4KDLEDHMZ5FNZRSHDEXD39&key=d35ebf6662453e84520ba87587a0a22e', 'https://www.coinpayments.net/index.php?cmd=status&id=CPCG4KDLEDHMZ5FNZRSHDEXD39&key=d35ebf6662453e84520ba87587a0a22e', 1, '2018-07-05 10:52:49', '2018-07-05 10:52:49'),
(8, 3, 24, '0.35', NULL, '2018-08-05 12:21:45', NULL, NULL, NULL, 0, '2018-07-05 10:52:49', '2018-07-05 10:52:49'),
(9, 3, 24, '0.35', NULL, '2018-10-05 00:00:00', NULL, NULL, NULL, 0, '2018-07-05 10:52:49', '2018-07-05 10:52:49'),
(10, 4, 37, '0.35', NULL, '2018-08-06 00:00:00', NULL, NULL, NULL, 0, '2018-07-06 15:55:00', '2018-07-06 15:55:00'),
(11, 4, 37, '0.35', NULL, '2018-09-06 00:00:00', NULL, NULL, NULL, 0, '2018-07-06 15:55:00', '2018-07-06 15:55:00'),
(12, 4, 37, '0.35', NULL, '2018-10-06 00:00:00', NULL, NULL, NULL, 0, '2018-07-06 15:55:00', '2018-07-06 15:55:00'),
(13, 5, 27, '0.18', NULL, '2018-08-18 00:00:00', NULL, NULL, NULL, 0, '2018-07-18 07:35:39', '2018-07-18 07:35:39'),
(14, 5, 27, '0.18', NULL, '2018-09-18 00:00:00', NULL, NULL, NULL, 0, '2018-07-18 07:35:39', '2018-07-18 07:35:39'),
(15, 5, 27, '0.18', NULL, '2018-10-18 00:00:00', NULL, NULL, NULL, 0, '2018-07-18 07:35:39', '2018-07-18 07:35:39'),
(16, 5, 27, '0.18', NULL, '2018-11-18 00:00:00', NULL, NULL, NULL, 0, '2018-07-18 07:35:39', '2018-07-18 07:35:39'),
(17, 5, 27, '0.18', NULL, '2018-12-18 00:00:00', NULL, NULL, NULL, 0, '2018-07-18 07:35:39', '2018-07-18 07:35:39'),
(18, 5, 27, '0.18', NULL, '2019-01-18 00:00:00', NULL, NULL, NULL, 0, '2018-07-18 07:35:39', '2018-07-18 07:35:39');

-- --------------------------------------------------------

--
-- Table structure for table `payms`
--

CREATE TABLE `payms` (
  `id` int(10) UNSIGNED NOT NULL,
  `payment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payms`
--

INSERT INTO `payms` (`id`, `payment`, `created_at`, `updated_at`) VALUES
(3, '5a366b1429fc8.png', '2017-12-17 07:03:16', '2017-12-17 07:03:16'),
(4, '5a366b1b5eedf.png', '2017-12-17 07:03:23', '2017-12-17 07:03:23'),
(5, '5a366b237a1cf.png', '2017-12-17 07:03:31', '2017-12-17 07:03:31');

-- --------------------------------------------------------

--
-- Table structure for table `returnlogs`
--

CREATE TABLE `returnlogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `trxid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `investment_id` int(11) NOT NULL,
  `trxtime` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `returnlogs`
--

INSERT INTO `returnlogs` (`id`, `trxid`, `user_id`, `investment_id`, `trxtime`, `amount`, `created_at`, `updated_at`) VALUES
(2, 'PzJuPiNG3Af68PHYlyqF', 1, 7, '2017-12-14 10:40:25', '6.36', '2017-12-14 04:40:25', '2017-12-14 04:40:25'),
(3, 'd3sXkljvFuM3MW0dsRVH', 7, 11, '2017-12-30 14:05:12', '4', '2017-12-30 08:05:12', '2017-12-30 08:05:12'),
(4, 'jhuCVfCbupTUWS3BDUwx', 7, 11, '2017-12-30 14:06:40', '4', '2017-12-30 08:06:40', '2017-12-30 08:06:40'),
(5, 's43F999w4JlrVysW3ceW', 7, 11, '2017-12-30 14:08:11', '4', '2017-12-30 08:08:11', '2017-12-30 08:08:11'),
(6, 'MF4gaHNncShT7zS66XdH', 7, 11, '2017-12-30 14:10:00', '4', '2017-12-30 08:10:00', '2017-12-30 08:10:00'),
(7, 'Nkhjfhgdhtd65fgh', 22, 13, '2018-06-22 11:52:43', '0.4', '2018-06-22 08:18:13', '2018-06-22 20:44:45'),
(8, 'XO2byjyf9OwJY2fr4tEI', 7, 11, '2018-06-22 12:33:33', '4', '2018-06-22 12:33:33', '2018-06-22 12:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `image`, `small`, `large`, `created_at`, `updated_at`) VALUES
(2, 'sign-in', 'Sign up with your Personal and bitcoin wallet details.', 'Sign Up', '2017-12-17 05:19:22', '2017-12-19 03:34:05'),
(3, 'bitcoin', 'Deposit bitcoin as much as you want via Bitcoin.', 'Deposit', '2018-01-06 12:11:51', '2018-01-06 12:11:51'),
(4, 'clock-o', 'Just seat back and relax while system generating you money.', 'wait', '2017-12-19 03:37:48', '2017-12-26 01:21:13'),
(5, 'repeat', 'Get double of your deposited amount on your wallet.', 'Get Double', '2017-12-19 03:38:28', '2017-12-26 01:21:45');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `keyname` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `keyname`, `value`, `created_at`, `updated_at`) VALUES
(1, 'site_url', 'http://18.188.45.2', '2018-06-20 08:57:59', '2018-06-20 08:57:59'),
(2, 'private_key', '87D6e2fCE1aca89c38465fa574d0974344f112209d86cBA6D8E076123AdBE6f5', '2018-07-03 12:55:22', '2018-07-03 12:55:22'),
(3, 'public_key', '2233c683fc89c648ae109f45fb2c60f8925f1547971e1806f729f7ee189ffbb6', '2018-07-03 12:55:22', '2018-07-03 12:55:22');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `image`, `small`, `large`, `created_at`, `updated_at`) VALUES
(4, '5a414e68e7d1d.jpg', 'Just By investing on our Platform', 'Earn Double Bitcoin', '2017-12-26 01:15:52', '2017-12-26 01:15:52'),
(5, '5a414f3df0e46.jpg', 'Get Double After 60 Days!', 'Lend Us Your Coin', '2017-12-26 01:18:23', '2017-12-26 01:19:25');

-- --------------------------------------------------------

--
-- Table structure for table `stats`
--

CREATE TABLE `stats` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `small` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `large` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `stats`
--

INSERT INTO `stats` (`id`, `image`, `small`, `large`, `created_at`, `updated_at`) VALUES
(1, 'user', 'HAPPY CLIENTS', '135', '2017-12-17 05:48:06', '2017-12-17 05:48:06'),
(2, 'trophy', 'AWARDS WON', '125', '2017-12-17 05:48:42', '2017-12-17 05:48:42'),
(3, 'fa fa-bitcoin', 'DREAM WEBSITE', '133', '2017-12-19 03:42:15', '2017-12-19 03:52:49'),
(4, 'fa fa-trophy', 'BUILD YOUR', '122', '2017-12-19 03:42:30', '2017-12-19 03:53:51');

-- --------------------------------------------------------

--
-- Table structure for table `testms`
--

CREATE TABLE `testms` (
  `id` int(10) UNSIGNED NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `star` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testms`
--

INSERT INTO `testms` (`id`, `photo`, `name`, `company`, `star`, `comment`, `created_at`, `updated_at`) VALUES
(2, '5a365f57293e1.png', 'John Doe', 'XYZ', '4', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2017-12-17 06:13:11', '2017-12-17 06:13:11'),
(3, '5a365f71bd1da.png', 'John Temp', 'XYZV', '5', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua', '2017-12-17 06:13:37', '2017-12-17 06:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `translogs`
--

CREATE TABLE `translogs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `trxid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `translogs`
--

INSERT INTO `translogs` (`id`, `user_id`, `trxid`, `amount`, `balance`, `type`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 'YdmpMFaUKBFLcoTL', '300', '371.01', '1', 'Deposit Successfull', '2017-12-30 06:06:39', '2017-12-30 06:06:39'),
(2, 1, 'SyD6le1mad0ZuOq0', '56', '315.01', '0', 'Withdraw Request Sent', '2017-12-30 06:27:14', '2017-12-30 06:27:14'),
(3, 1, 'tpG1T0rwgH7gQGY7', '100', '415.01', '1', 'Deposit Successfull', '2017-12-30 07:55:53', '2017-12-30 07:55:53'),
(4, 7, 'cDRSUwmMa6TnHLhv', '56', '212', '1', 'Deposit Successfull', '2017-12-30 07:59:11', '2017-12-30 07:59:11'),
(5, 7, 'oCduTGvN42fhAtMi', '56', '268', '1', 'Deposit Successfull', '2017-12-30 07:59:37', '2017-12-30 07:59:37'),
(6, 1, 'y3Ou7UuaW7yznbsp', '1.12', '416.13', '1', 'Referal Deposit Commision', '2017-12-30 08:01:03', '2017-12-30 08:01:03'),
(7, 7, 'NR9GyoiGp5plglUW', '56', '324', '1', 'Deposit Successfull', '2017-12-30 08:01:03', '2017-12-30 08:01:03'),
(8, 7, 'AR637MHV7BQiZ1mr', '100', '224', '0', 'Lending', '2017-12-30 08:03:15', '2017-12-30 08:03:15'),
(9, 7, 'lkXcRO0dQXoeEy8t', '4', '236', '1', 'Return of Lending', '2017-12-30 08:08:11', '2017-12-30 08:08:11'),
(10, 7, 'riisCA0ZaxxYpo37', '4', '240', '1', 'Return of Lending', '2017-12-30 08:10:00', '2017-12-30 08:10:00'),
(11, 1, 'IQoIbiCjJ5t87GhN', '2', '418.13', '1', 'Referal Return Commision', '2017-12-30 08:10:00', '2017-12-30 08:10:00'),
(12, 12, 'g6ndOOxk7T7hNUFV', '500', '500', '1', 'Balance Added By Admin', '2018-06-11 14:23:31', '2018-06-11 14:23:31'),
(13, 8, 'szOaRBwG2YK2JtEe', '10', '10', '1', 'Deposit Successfull', '2018-06-12 06:25:42', '2018-06-12 06:25:42'),
(14, 7, 'dox8yUky1qWaixC1', '5', '5', '0', 'Withdraw Request Sent', '2018-06-15 11:35:31', '2018-06-15 11:35:31'),
(15, 7, 'TDaSu0xjBof7aMlD', '5', '0', '0', 'Lending', '2018-06-16 13:07:33', '2018-06-16 13:07:33'),
(16, 8, 'gZpt7V1jxbilwAhv', '1', '5', '1', 'Withdraw Request Canceled', '2018-06-16 15:46:33', '2018-06-16 15:46:33'),
(17, 22, 'BMQ0y3ZrvAjXbMlF', '2', '2', '1', 'Balance Added By Admin', '2018-06-22 11:46:20', '2018-06-22 11:46:20'),
(18, 22, 'zlzDcAZKVrytoDoQ', '0.2', '1.8', '0', 'Lending', '2018-06-22 11:52:43', '2018-06-22 11:52:43'),
(19, 22, 'Yy85IV2OT3Vn99FV', '5', '6.8', '1', 'Deposit Successfull', '2018-06-22 12:03:59', '2018-06-22 12:03:59'),
(20, 17, 'u08mRjNi60p41LOb', '1', '1', '1', 'Deposit Successfull', '2018-06-22 12:04:09', '2018-06-22 12:04:09'),
(21, 22, 'rm7JCx6Oe89x1cQ7', '0.2', '7', '0', 'Withdraw Request Sent', '2018-06-22 12:16:47', '2018-06-22 12:16:47'),
(22, 22, '3T0ejnHZY05QkDUd', '2', '5', '0', 'Lending', '2018-06-22 12:19:10', '2018-06-22 12:19:10'),
(23, 17, '1bOsnQvxR25yfuaJ', '1', '2', '1', 'Deposit Successfull', '2018-06-23 12:33:47', '2018-06-23 12:33:47'),
(24, 24, '0YTWe8TadDtP6RvN', '1', '-1', '0', 'Withdraw Request Sent', '2018-07-03 17:17:19', '2018-07-03 17:17:19'),
(25, 24, 'MDDtnIjlomQFGLkx', '1', '-2', '0', 'Withdraw Request Sent', '2018-07-03 17:17:34', '2018-07-03 17:17:34'),
(26, 17, 'drQVdj54jas4FXHO', '0.01', '1.99', '0', 'Withdraw Request Sent', '2018-07-04 07:17:41', '2018-07-04 07:17:41'),
(27, 17, 'qpF4yUH4Tn7mtxlM', '0.1', '1.89', '0', 'Withdraw Request Sent', '2018-07-04 07:18:02', '2018-07-04 07:18:02'),
(28, 24, 'DwpnmojsWtGg0cnR', '0.002', '1.002', '1', 'Deposit Successfull', '2018-07-05 04:56:28', '2018-07-05 04:56:28'),
(29, 24, 'KUVal52USzEymCuK', '1', '2.002', '1', 'Deposit Successfull', '2018-07-05 04:56:44', '2018-07-05 04:56:44'),
(30, 17, 'yPrLJciJBHIzHmyf', '1', '0.8899999999999999', '0', 'Lending', '2018-07-06 16:02:02', '2018-07-06 16:02:02'),
(31, 22, 'SJRXdvX2PjJY8q5d', '20', '25', '1', 'Deposit Successfull', '2018-07-18 14:28:24', '2018-07-18 14:28:24'),
(32, 22, 'UxIhUQT7YoyX1OUh', '10', '15', '0', 'Lending', '2018-07-21 20:29:49', '2018-07-21 20:29:49'),
(33, 22, 'ucIBcBmOC4BY5w9M', '10', '5', '0', 'Lending', '2018-07-22 09:10:26', '2018-07-22 09:10:26'),
(34, 22, 'ppgadCj97g4dwGbI', '4', '1', '0', 'Lending', '2018-07-22 13:35:32', '2018-07-22 13:35:32'),
(35, 22, 'jRgap0ZFrwRBrA5B', '0.1', '0.9', '0', 'Lending', '2018-07-22 13:51:45', '2018-07-22 13:51:45'),
(36, 22, 'kUpa9fz9pOKA3NRm', '0.001', '0.899', '0', 'Lending', '2018-07-22 17:01:21', '2018-07-22 17:01:21'),
(37, 22, 'QMinYJFAxS1exhzx', '0.8', '0.09899999999999998', '0', 'Lending', '2018-07-24 16:40:03', '2018-07-24 16:40:03'),
(38, 22, 'rA8rQPsAoKCTkeqX', '0.01', '0.10899999999999997', '1', 'Deposit Successfull', '2018-07-26 05:35:08', '2018-07-26 05:35:08'),
(39, 22, '0E9VIcpc4ANg3pox', '0.01', '0.09899999999999998', '0', 'Lending', '2018-07-27 05:57:24', '2018-07-27 05:57:24'),
(40, 22, 'RSLCJdqRgYYJNonQ', '0.08', '0.018999999999999975', '0', 'Lending', '2018-07-27 08:29:47', '2018-07-27 08:29:47'),
(41, 22, '6ebQvR3rjTU4438h', '0.018999999999999975', '0', '0', 'Lending', '2018-07-30 07:35:21', '2018-07-30 07:35:21');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `postal_code` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `balance` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `user_type` int(10) NOT NULL DEFAULT '1' COMMENT '1- lender, 2-borrower',
  `tauth` int(11) NOT NULL DEFAULT '0',
  `tfver` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '0',
  `emailv` int(11) NOT NULL DEFAULT '0',
  `smsv` int(11) NOT NULL DEFAULT '0',
  `vsent` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `vercode` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `secretcode` varchar(190) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wallet` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refid` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `username`, `password`, `mobile`, `country`, `city`, `address`, `postal_code`, `avatar`, `twitter_url`, `linkedin_url`, `balance`, `user_type`, `tauth`, `tfver`, `status`, `emailv`, `smsv`, `vsent`, `vercode`, `secretcode`, `wallet`, `refid`, `remember_token`, `created_at`, `updated_at`) VALUES
(12, 'vishnu', 'vishnuvardhan4006@gmail.com', 'vishnu4006', '$2y$10$VTGVp7di9ekausnjYET.xOJiiAMQt7EEk9Q/oR/oOCir3xpolhIya', '9597434949', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '500', 1, 1, 1, 1, 1, 1, '0', NULL, NULL, '123456', 0, 'mh5W6BBKZycq1wj3C3F0nXMqfpJ5nlynGkRqkDZ5wuA2lVGXiiIpYyl65a3g', '2018-06-10 08:45:37', '2018-06-11 14:23:31'),
(13, 'Gowtham', 'gowthamparamasivam66@gmail.com', 'Gowtham4006', '$2y$10$HOV6Cs2p9eVvuPnMgy2Gw.GSesn6QKorTaBLTkfpy5zALMEEVppja', '9750361327', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '12345678', 0, NULL, '2018-06-11 18:46:46', '2018-06-22 11:48:19'),
(14, 'vishnu', 'vishnuvardhanamz@gmail.com', 'vishnuvardhan4006', '$2y$10$dWjw.ob4VTr0KmukVc/wfezpFtdNUAtfH5Gx7R/5.XfHQ4XmZf1l6', '8667726177', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '654321', 0, NULL, '2018-06-15 06:09:31', '2018-06-15 13:39:59'),
(15, 'Raj', 'rajsekar458@gmail.com', 'Sekar', '$2y$10$l5XgAmbAqyu66ElQ7BkwYOytOvQwDGAym5ewiHSboSsCfiEajZ1YW', '8940752473', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '1ECGUKEosEhaZnywCVxw6e1VUcPRqGkhvd(BTC)', 0, NULL, '2018-06-15 17:55:38', '2018-09-28 09:08:10'),
(17, 'yokesh', 'v4syokesh@icloud.com', 'yokesh', '$2y$10$GALz3IiP0h/48VzaQkTEEOtZaR4s.Gi4P5Fz6mK0fPX9GDUIQsNri', '7708889555', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0.8899999999999999', 1, 0, 1, 1, 1, 1, '0', NULL, '0', 'EWIORN233', 0, 'PfcNi4QJZmB623lB4RtVrMejpNawYW8NR9cRANT2Cf1hhlCCPV8dCula8Yfy', '2018-06-16 15:36:12', '2018-07-06 16:02:02'),
(18, 'vishnu', 'vishnuvardhanamz1@gmail.com', 'vishnu6004', '$2y$10$xlBqboOulN6f03ILt7RAr.ZFfpSzudKhOFDitrrZGqNdzVFTbjNrG', '9003631538', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '12321456', 0, NULL, '2018-06-16 17:32:04', '2018-06-16 17:32:04'),
(20, 'sekar', 'rajsekarpace@gmail.com', 'sekar123', '$2y$10$OdwX4ug0OM.wD21k./g00.3wCFx778ZFvMdm.x7J8IzANyPC9CEcS', '932940284', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'inrf9834928', 17, NULL, '2018-06-18 09:01:00', '2018-06-22 11:48:25'),
(22, 'demo', 'demo@bitinvest.com', 'demo', '$2y$10$GALz3IiP0h/48VzaQkTEEOtZaR4s.Gi4P5Fz6mK0fPX9GDUIQsNri', '12345678', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '2MuPCaP2cfkmUgaNAEyHToj3V4Zutvib5JT', 0, NULL, '2018-06-22 10:48:29', '2018-09-27 16:15:28'),
(23, 'Bob Willard', 'bob26job@yahoo.com', 'bobinbkk', '$2y$10$NQ4mIJ0QB9aYL8Fmjv9aF.bfOJVQlQDZmoHSXOqevg/K5fhPu0e1a', '852310290', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, '14QwMKdsYtNFnBn7YrhTPKSbVEisUUmGTC', 0, NULL, '2018-06-23 16:23:42', '2018-06-23 16:23:42'),
(24, 'karthik', 'karthik.bca1417@gmail.com', 'karthik', '$2y$10$JMoMd1Y7a/Oko6z/dtrLKObAXuplr4o1bUwwsZZTtS87rfgo0wX9O', '9994810451', 'India', 'tiruppur', 'my address', '641616', 'http://localhost/bitinvest/borrow/core/public/uploads/358063.jpg', 'www.twitter.com/karrthik', 'www.linkedin.com/kumar_karthik', '2.002', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, '123456675', 0, NULL, '2018-06-25 03:06:59', '2018-07-05 11:19:45'),
(25, 'karthik', 'karthik@gmail.com', 'karthikkumar', '$2y$10$vd5NgjEUhFUdzaliucecIeUenxzvbfJGZ6CR1urxbGxZSBqujJB86', '9994810451', 'India', '123', '123', '123456', 'http://18.188.45.2/user/core/public/uploads/484779.jpg', '123', '123', '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'test', 0, NULL, '2018-06-28 06:42:13', '2018-06-28 07:30:10'),
(26, 'Sankar', 'v4syokesh@gmail.com', 'Vishnu', '$2y$10$nM5wJQphHBZjawtcZVNLa.SPNd0M26CR8lj8sHubAkk0GpjwCKJia', '7708889555', 'India', 'Tuticorin', '123/4, Devarpuram Road', '628003', 'http://18.188.45.2/user/core/public/uploads/605335.jpeg', NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, '1DuLoJ35p27z95gwdEmpBkwufixg9h7ir', 0, NULL, '2018-06-28 06:44:57', '2018-07-02 06:05:41'),
(27, 'aravind', 'aravind@gmail.com', 'aravind', '$2y$10$c.IPyKdndJ3bfopSZYIMveIj3zpdLSEDuBTJU2L8rWK6cEgzumxY.', '283784284', 'India', 'New York', '123/4, Devarpuram Road', '628003', 'http://18.188.45.2/user/core/public/uploads/519656.jpeg', NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'fdifiisfmoiso', 0, NULL, '2018-06-28 07:26:44', '2018-06-28 07:27:33'),
(28, 'test', 'test@gmail.com', 'test', '$2y$10$DEtxeowly5pt2SFfVy0xGeeu9KvtZajLQIA0Bqln2laBhtZJvT2ZS', '9994810451', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'test address', 0, NULL, '2018-06-28 10:31:16', '2018-06-28 10:31:16'),
(29, 'pubxBorrow', 'pubx1b@mailinator.com', 'pubx1b', '$2y$10$nrky06j9xusSlSuIgnzjGemMyk1UR/AaH7Lyyn0Jh/1CnttLAzcx2', '8484848484', 'India', 'Bangalore', 'R@$R$@R@$R24', '560001', 'http://18.188.45.2/user/core/public/uploads/980081.png', NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'aEDDaeedaAEETPLq4q544tq4', 0, NULL, '2018-06-29 06:44:04', '2018-06-29 13:46:59'),
(30, 'sid', 'sid@provenlogic.net', 'sid', '$2y$10$B30SuDNnVBKEswaXoo0FYuR3t6oc1q9Dub.8mmLA2eq99xdygM3ki', '247487704', 'India', 'bangalore', '123/4, Devarpuram Road', '628003', 'http://18.188.45.2/user/core/public/uploads/434164.jpg', NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'uhuhjshjhfldualadud', 0, NULL, '2018-06-29 09:01:49', '2018-06-29 09:03:27'),
(31, 'Eze', 'echikasi@gmail.com', 'echikasi', '$2y$10$bOJjbr0cs8oPJci6VII5PesSc0LWpjwwIcBOdLzYpWINgPwDzU7te', '8107922326', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'Fffxcxddx', 0, NULL, '2018-06-30 00:00:57', '2018-06-30 00:00:57'),
(32, 'zaqzaq', 'trtxx30@yahoo.com', 'MARYOO111', '$2y$10$0a8leeXzNelZWS/d6x9O6emad/wY9UZrGo7pmeXVDJ2oImHj39m/G', '0100920934', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '13yXeLmzr2Kf96UvTzNtTg3B2RhAt5gDPb', 0, NULL, '2018-06-30 00:26:21', '2018-06-30 00:26:21'),
(33, 'zaqzaq', 'asdgon_gon@yahoo.com', 'MARYOO1111', '$2y$10$amFvPrq/kZHXOFeIvspMfeuDx8qon4i3QASDzIuAtgCxV/Mi6qWzi', '0100920934', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, '16tpHDao9kW2hDGG1he5gVHQAizL1acc18', 0, NULL, '2018-06-30 00:39:21', '2018-06-30 00:39:21'),
(34, 'PATRICK MENSAH', 'businessfinance55@gmail.com', 'businessfinance', '$2y$10$HYVsSW.u7XI/k.q9VlUEceCRwy22O1MwuwtKezjGeh12puOAxOSZq', '0242962799', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '000000000000000', 0, NULL, '2018-06-30 10:01:30', '2018-06-30 10:01:30'),
(35, 'raja', 'raja@gmail.com', 'raja', '$2y$10$olKU2hv8iN.t2HoRFu7nguXuUWVHizwQmNG62jMLYOHx69N.C5/Sm', '123456789', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'RajaCOin', 0, NULL, '2018-07-02 05:51:13', '2018-07-02 13:50:46'),
(36, 'karthik', 'karthik.bca1414@gmail.com', 'temp', '$2y$10$n64oA4NezLK/j4fGYdYB7.nb7GPNnOJdEgwRbIIXVsqmAqUj.p1uy', '9994810451', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'TEMP', 0, NULL, '2018-07-02 13:02:48', '2018-07-02 13:50:04'),
(37, 'macbook', 'mac@icloud.com', 'mac', '$2y$10$Vbv3Eqn4Ai3INftey5EVku8.TLDuu6Q9wd5BThRmisi3pkBG1zx6i', '38278477720', 'New Zealand', 'buouoeo', 'saudboudo', '43878787', 'http://18.188.45.2/user/core/public/uploads/956511.jpg', NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'nsuirubiuwusoeuwoqnwox', 0, NULL, '2018-07-03 06:17:28', '2018-07-06 07:38:27'),
(38, 'Michael', 'michael.chimachi@gmail.com', 'michael', '$2y$10$jrQ.iXSV9m18fsmnjJAb9OCnUEfKhIXFBIwTfT6FBxlUGl6fKS2Gm', '19991566659', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'asadadsdadadadada', 0, NULL, '2018-07-05 17:07:06', '2018-07-05 17:07:06'),
(39, 'Pubx test 2', 'pubx2@mailinator.com', 'pubx2', '$2y$10$YcKNOgk15tYlIExdzVZW/.b0iEsGh10fvf/Y3/rirP0Ko4MSR2IgG', '1212121212', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, 'FAfadfi4fi24faAFAFEREvised', 0, NULL, '2018-07-07 10:43:01', '2018-07-07 10:51:42'),
(40, 'kunuku', 'kunukulimited@gmail.com', 'kunuku', '$2y$10$hUYHLKpI.mSMAo0TytAztu5/l80H41YQwVmECKq80wxPetaCfQI5m', '34567890', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '3GxoBijv4vTF6Q9PfdAXi96pHuwnDjvhdf', 0, NULL, '2018-07-08 10:00:28', '2018-07-08 10:00:28'),
(41, 'ma', 'aaguoke33@163.com', 'rin', '$2y$10$7a6kzo9NqpvCXgEWuHHVKuwrNBJsw7bkTAPEkW6vRnhcivREZt8o6', '15677889987', 'China', 'henan', 'henannamm', '190099', 'http://18.188.45.2/user/core/public/uploads/279415.jpg', NULL, NULL, '0', 2, 0, 1, 1, 1, 1, '0', NULL, NULL, '0x5CDA0E90994AD7fB047C41cECfAA35E614b14BA5', 0, NULL, '2018-07-16 09:58:29', '2018-07-16 10:01:03'),
(42, 'aaa', 'allinfobisnis@gmail.com', 'kevin', '$2y$10$swJjCsenHEBCxCibdhZWS.CTG/OPgIJRCkyq3/1DSnwufOy/tUWaG', '34324324', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'erfew5443t4gtt5gegg55gg5g5', 0, NULL, '2018-07-18 03:45:36', '2018-07-18 03:45:36'),
(43, 'aa', 'arlitrik@gmail.com', 'aaaaaa', '$2y$10$bprkgyAlh7xGM/NM6DYXNecrdhsWTHo6unT.WNKiUoMv9gvH26Ww.', 'assa', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'ass', 0, NULL, '2018-07-19 01:20:58', '2018-07-19 01:20:58'),
(44, 'Bob Willard', 'shahrokhbarani@gmail.com', 'bobinbkk1', '$2y$10$zWQyL40Cx4a5SbdUpTqlaOdhk6I6MOYMuCKnFGzTXyXN5ImPw5kR2', '852310290', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'wittau complex', 0, NULL, '2018-08-11 11:11:35', '2018-08-11 11:11:35'),
(45, 'ThankGod Okoro', 'ebuzzadvert@gmail.com', 'ebuzzadvert', '$2y$10$H6HWTuLlIWV0M1S2l5p5heL2kbWeyVzfYhQik2yomLqtyZ.6vDL62', '08162680095', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, '7y498288y28238', 0, NULL, '2018-09-06 00:14:07', '2018-09-06 00:14:07'),
(46, 'Ayamba Ashu', 'ayambaashu51@yahoo.com', 'ayambaashu51', '$2y$10$HwYcfZo1tUqRDPL/t0wpfuEPZSkY32x/8YxouuCfav/Q00nVkbxHW', '+237651379842', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'Efoulan', 0, NULL, '2018-09-22 20:58:29', '2018-09-22 20:58:29'),
(47, 'Praveen', 'praveen@sparkouttech.com', 'praveenkumartup', '$2y$10$jT1H5y6Gh4moIFPVYczI9eUnLjwOS4ND9E12rpSMYVhoJNifIcR4O', '9600771099', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'Coimbatore', 0, NULL, '2018-09-28 07:50:50', '2018-09-28 07:50:50'),
(48, 'Praveen', 'praveenkumartup@gmail.com', 'praveentpk', '$2y$10$tufa1pWBKfkMV1pHm5WcG.oeyc92upAQ/iW3nUwikpEpr6.8pIhB2', '9600771099', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0', 1, 0, 1, 1, 1, 1, '0', NULL, NULL, 'praveentup', 47, NULL, '2018-09-28 09:02:43', '2018-09-28 09:07:24');

-- --------------------------------------------------------

--
-- Table structure for table `withdraws`
--

CREATE TABLE `withdraws` (
  `id` int(10) UNSIGNED NOT NULL,
  `wdid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `withdraws`
--

INSERT INTO `withdraws` (`id`, `wdid`, `user_id`, `amount`, `status`, `created_at`, `updated_at`) VALUES
(1, 'aIxDDU9lDcOiMP2X', 13, '25', 0, '2017-12-14 06:04:31', '2017-12-14 06:26:07'),
(3, 'FbDauDoMxcSh71Gm', 13, '56', 1, '2017-12-30 06:27:14', '2018-06-16 15:46:25'),
(4, 'WdHTyV8rJQTLM2rj', 17, '5', 1, '2018-06-15 11:35:31', '2018-06-16 22:36:09'),
(5, 'HjHjjksuAuiw64S', 14, '50', 0, '2018-06-15 10:12:00', '2018-06-16 11:17:00'),
(6, 'Qjw34jnEJKn98JBjbsjdb', 17, '50', 0, '2018-06-15 07:00:00', '2018-06-16 09:27:34'),
(7, 'pkPjojs8762738eibjd', 20, '50', 1, '2018-06-17 10:22:17', '2018-07-18 14:29:42'),
(8, 'Kjlksd78678gjks89yJHSG', 18, '100', 1, '2018-06-18 09:20:17', '2018-07-18 14:29:30'),
(9, 'sjdkUIHIuew78378gc', 17, '50', 1, '2018-06-18 21:27:32', '2018-06-19 03:46:08'),
(10, 'KJhdwo89y32ehdjkhiou2oi', 14, '50', 1, '2018-06-18 22:34:40', '2018-06-19 17:26:00'),
(11, 'KLQJhd8732egbshw87ewtu', 18, '50', 1, '2018-06-19 09:16:24', '2018-06-20 14:17:39'),
(12, 'xv5eUSh1yA6hPvZi', 22, '0.2', 1, '2018-06-22 12:16:47', '2018-06-22 12:20:58'),
(13, 'JV4Da9gR5oU5sgVe', 24, '1', 0, '2018-07-03 17:17:19', '2018-07-03 17:17:19'),
(14, 'XBzVrqt3s5HbXyW0', 24, '1', 0, '2018-07-03 17:17:34', '2018-07-03 17:17:34'),
(15, 'wtGLyESAxRmTCjha', 17, '0.01', 1, '2018-07-04 07:17:41', '2018-09-15 14:53:25'),
(16, '6SPGQSXBfoGNgVxt', 17, '0.1', 1, '2018-07-04 07:18:02', '2018-07-18 14:28:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_username_unique` (`username`);

--
-- Indexes for table `admin_password_resets`
--
ALTER TABLE `admin_password_resets`
  ADD KEY `admin_password_resets_email_index` (`email`),
  ADD KEY `admin_password_resets_token_index` (`token`);

--
-- Indexes for table `borrow`
--
ALTER TABLE `borrow`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `deposits`
--
ALTER TABLE `deposits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `etemplates`
--
ALTER TABLE `etemplates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gateways`
--
ALTER TABLE `gateways`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `generals`
--
ALTER TABLE `generals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `interfaces`
--
ALTER TABLE `interfaces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intrest`
--
ALTER TABLE `intrest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `investments`
--
ALTER TABLE `investments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kyc`
--
ALTER TABLE `kyc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payms`
--
ALTER TABLE `payms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `returnlogs`
--
ALTER TABLE `returnlogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stats`
--
ALTER TABLE `stats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testms`
--
ALTER TABLE `testms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `translogs`
--
ALTER TABLE `translogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `withdraws`
--
ALTER TABLE `withdraws`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `borrow`
--
ALTER TABLE `borrow`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `deposits`
--
ALTER TABLE `deposits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;
--
-- AUTO_INCREMENT for table `etemplates`
--
ALTER TABLE `etemplates`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `gateways`
--
ALTER TABLE `gateways`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `generals`
--
ALTER TABLE `generals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `interfaces`
--
ALTER TABLE `interfaces`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `intrest`
--
ALTER TABLE `intrest`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `investments`
--
ALTER TABLE `investments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `kyc`
--
ALTER TABLE `kyc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `payms`
--
ALTER TABLE `payms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `returnlogs`
--
ALTER TABLE `returnlogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `stats`
--
ALTER TABLE `stats`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testms`
--
ALTER TABLE `testms`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `translogs`
--
ALTER TABLE `translogs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
--
-- AUTO_INCREMENT for table `withdraws`
--
ALTER TABLE `withdraws`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
