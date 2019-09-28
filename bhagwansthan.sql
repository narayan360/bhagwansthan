-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 28, 2019 at 05:59 PM
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
-- Database: `bhagwansthan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `country`, `status`, `created_at`, `updated_at`) VALUES
(1, 'nnUIgERQjO', '0hkea@llr7.com', NULL, '5z3Aiyr45a', NULL, 1, '2019-09-28 09:24:32', '2019-09-28 09:24:32'),
(2, 'mcHQW6mQIf', 'k4s8r@b2ui.com', NULL, 'wdRkIRsLkT', NULL, 1, '2019-09-28 09:27:30', '2019-09-28 09:27:30'),
(3, '4pl9xkogh0', 'bxo4i@mt4z.com', '2154709174', 'TBywlCiYEj', NULL, 1, '2019-09-28 09:31:23', '2019-09-28 09:31:23');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `code` varchar(2) NOT NULL DEFAULT '',
  `name` varchar(100) NOT NULL DEFAULT '',
  `sprite` varchar(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `code`, `name`, `sprite`) VALUES
(1, 'AF', 'Afghanistan', NULL),
(2, 'AL', 'Albania', NULL),
(3, 'DZ', 'Algeria', NULL),
(4, 'DS', 'American Samoa', NULL),
(5, 'AD', 'Andorra', NULL),
(6, 'AO', 'Angola', NULL),
(7, 'AI', 'Anguilla', NULL),
(8, 'AQ', 'Antarctica', NULL),
(9, 'AG', 'Antigua and Barbuda', NULL),
(10, 'AR', 'Argentina', NULL),
(11, 'AM', 'Armenia', NULL),
(12, 'AW', 'Aruba', NULL),
(13, 'AU', 'Australia', NULL),
(14, 'AT', 'Austria', NULL),
(15, 'AZ', 'Azerbaijan', NULL),
(16, 'BS', 'Bahamas', NULL),
(17, 'BH', 'Bahrain', NULL),
(18, 'BD', 'Bangladesh', NULL),
(19, 'BB', 'Barbados', NULL),
(20, 'BY', 'Belarus', NULL),
(21, 'BE', 'Belgium', NULL),
(22, 'BZ', 'Belize', NULL),
(23, 'BJ', 'Benin', NULL),
(24, 'BM', 'Bermuda', NULL),
(25, 'BT', 'Bhutan', NULL),
(26, 'BO', 'Bolivia', NULL),
(27, 'BA', 'Bosnia and Herzegovina', NULL),
(28, 'BW', 'Botswana', NULL),
(29, 'BV', 'Bouvet Island', NULL),
(30, 'BR', 'Brazil', NULL),
(31, 'IO', 'British Indian Ocean Territory', NULL),
(32, 'BN', 'Brunei Darussalam', NULL),
(33, 'BG', 'Bulgaria', NULL),
(34, 'BF', 'Burkina Faso', NULL),
(35, 'BI', 'Burundi', NULL),
(36, 'KH', 'Cambodia', NULL),
(37, 'CM', 'Cameroon', NULL),
(38, 'CA', 'Canada', NULL),
(39, 'CV', 'Cape Verde', NULL),
(40, 'KY', 'Cayman Islands', NULL),
(41, 'CF', 'Central African Republic', NULL),
(42, 'TD', 'Chad', NULL),
(43, 'CL', 'Chile', NULL),
(44, 'CN', 'China', NULL),
(45, 'CX', 'Christmas Island', NULL),
(46, 'CC', 'Cocos (Keeling) Islands', NULL),
(47, 'CO', 'Colombia', NULL),
(48, 'KM', 'Comoros', NULL),
(49, 'CG', 'Congo', NULL),
(50, 'CK', 'Cook Islands', NULL),
(51, 'CR', 'Costa Rica', NULL),
(52, 'HR', 'Croatia (Hrvatska)', NULL),
(53, 'CU', 'Cuba', NULL),
(54, 'CY', 'Cyprus', NULL),
(55, 'CZ', 'Czech Republic', NULL),
(56, 'DK', 'Denmark', NULL),
(57, 'DJ', 'Djibouti', NULL),
(58, 'DM', 'Dominica', NULL),
(59, 'DO', 'Dominican Republic', NULL),
(60, 'TP', 'East Timor', NULL),
(61, 'EC', 'Ecuador', NULL),
(62, 'EG', 'Egypt', NULL),
(63, 'SV', 'El Salvador', NULL),
(64, 'GQ', 'Equatorial Guinea', NULL),
(65, 'ER', 'Eritrea', NULL),
(66, 'EE', 'Estonia', NULL),
(67, 'ET', 'Ethiopia', NULL),
(68, 'FK', 'Falkland Islands (Malvinas)', NULL),
(69, 'FO', 'Faroe Islands', NULL),
(70, 'FJ', 'Fiji', NULL),
(71, 'FI', 'Finland', NULL),
(72, 'FR', 'France', NULL),
(73, 'FX', 'France, Metropolitan', NULL),
(74, 'GF', 'French Guiana', NULL),
(75, 'PF', 'French Polynesia', NULL),
(76, 'TF', 'French Southern Territories', NULL),
(77, 'GA', 'Gabon', NULL),
(78, 'GM', 'Gambia', NULL),
(79, 'GE', 'Georgia', NULL),
(80, 'DE', 'Germany', NULL),
(81, 'GH', 'Ghana', NULL),
(82, 'GI', 'Gibraltar', NULL),
(83, 'GK', 'Guernsey', NULL),
(84, 'GR', 'Greece', NULL),
(85, 'GL', 'Greenland', NULL),
(86, 'GD', 'Grenada', NULL),
(87, 'GP', 'Guadeloupe', NULL),
(88, 'GU', 'Guam', NULL),
(89, 'GT', 'Guatemala', NULL),
(90, 'GN', 'Guinea', NULL),
(91, 'GW', 'Guinea-Bissau', NULL),
(92, 'GY', 'Guyana', NULL),
(93, 'HT', 'Haiti', NULL),
(94, 'HM', 'Heard and Mc Donald Islands', NULL),
(95, 'HN', 'Honduras', NULL),
(96, 'HK', 'Hong Kong', NULL),
(97, 'HU', 'Hungary', NULL),
(98, 'IS', 'Iceland', NULL),
(99, 'IN', 'India', NULL),
(100, 'IM', 'Isle of Man', NULL),
(101, 'ID', 'Indonesia', NULL),
(102, 'IR', 'Iran (Islamic Republic of)', NULL),
(103, 'IQ', 'Iraq', NULL),
(104, 'IE', 'Ireland', NULL),
(105, 'IL', 'Israel', NULL),
(106, 'IT', 'Italy', NULL),
(107, 'CI', 'Ivory Coast', NULL),
(108, 'JE', 'Jersey', NULL),
(109, 'JM', 'Jamaica', NULL),
(110, 'JP', 'Japan', NULL),
(111, 'JO', 'Jordan', NULL),
(112, 'KZ', 'Kazakhstan', NULL),
(113, 'KE', 'Kenya', NULL),
(114, 'KI', 'Kiribati', NULL),
(115, 'KP', 'Korea, Democratic People\'s Republic of', NULL),
(116, 'KR', 'Korea, Republic of', NULL),
(117, 'XK', 'Kosovo', NULL),
(118, 'KW', 'Kuwait', NULL),
(119, 'KG', 'Kyrgyzstan', NULL),
(120, 'LA', 'Lao People\'s Democratic Republic', NULL),
(121, 'LV', 'Latvia', NULL),
(122, 'LB', 'Lebanon', NULL),
(123, 'LS', 'Lesotho', NULL),
(124, 'LR', 'Liberia', NULL),
(125, 'LY', 'Libyan Arab Jamahiriya', NULL),
(126, 'LI', 'Liechtenstein', NULL),
(127, 'LT', 'Lithuania', NULL),
(128, 'LU', 'Luxembourg', NULL),
(129, 'MO', 'Macau', NULL),
(130, 'MK', 'Macedonia', NULL),
(131, 'MG', 'Madagascar', NULL),
(132, 'MW', 'Malawi', NULL),
(133, 'MY', 'Malaysia', NULL),
(134, 'MV', 'Maldives', NULL),
(135, 'ML', 'Mali', NULL),
(136, 'MT', 'Malta', NULL),
(137, 'MH', 'Marshall Islands', NULL),
(138, 'MQ', 'Martinique', NULL),
(139, 'MR', 'Mauritania', NULL),
(140, 'MU', 'Mauritius', NULL),
(141, 'TY', 'Mayotte', NULL),
(142, 'MX', 'Mexico', NULL),
(143, 'FM', 'Micronesia, Federated States of', NULL),
(144, 'MD', 'Moldova, Republic of', NULL),
(145, 'MC', 'Monaco', NULL),
(146, 'MN', 'Mongolia', NULL),
(147, 'ME', 'Montenegro', NULL),
(148, 'MS', 'Montserrat', NULL),
(149, 'MA', 'Morocco', NULL),
(150, 'MZ', 'Mozambique', NULL),
(151, 'MM', 'Myanmar', NULL),
(152, 'NA', 'Namibia', NULL),
(153, 'NR', 'Nauru', NULL),
(154, 'NP', 'Nepal', NULL),
(155, 'NL', 'Netherlands', NULL),
(156, 'AN', 'Netherlands Antilles', NULL),
(157, 'NC', 'New Caledonia', NULL),
(158, 'NZ', 'New Zealand', NULL),
(159, 'NI', 'Nicaragua', NULL),
(160, 'NE', 'Niger', NULL),
(161, 'NG', 'Nigeria', NULL),
(162, 'NU', 'Niue', NULL),
(163, 'NF', 'Norfolk Island', NULL),
(164, 'MP', 'Northern Mariana Islands', NULL),
(165, 'NO', 'Norway', NULL),
(166, 'OM', 'Oman', NULL),
(167, 'PK', 'Pakistan', NULL),
(168, 'PW', 'Palau', NULL),
(169, 'PS', 'Palestine', NULL),
(170, 'PA', 'Panama', NULL),
(171, 'PG', 'Papua New Guinea', NULL),
(172, 'PY', 'Paraguay', NULL),
(173, 'PE', 'Peru', NULL),
(174, 'PH', 'Philippines', NULL),
(175, 'PN', 'Pitcairn', NULL),
(176, 'PL', 'Poland', NULL),
(177, 'PT', 'Portugal', NULL),
(178, 'PR', 'Puerto Rico', NULL),
(179, 'QA', 'Qatar', NULL),
(180, 'RE', 'Reunion', NULL),
(181, 'RO', 'Romania', NULL),
(182, 'RU', 'Russian Federation', NULL),
(183, 'RW', 'Rwanda', NULL),
(184, 'KN', 'Saint Kitts and Nevis', NULL),
(185, 'LC', 'Saint Lucia', NULL),
(186, 'VC', 'Saint Vincent and the Grenadines', NULL),
(187, 'WS', 'Samoa', NULL),
(188, 'SM', 'San Marino', NULL),
(189, 'ST', 'Sao Tome and Principe', NULL),
(190, 'SA', 'Saudi Arabia', NULL),
(191, 'SN', 'Senegal', NULL),
(192, 'RS', 'Serbia', NULL),
(193, 'SC', 'Seychelles', NULL),
(194, 'SL', 'Sierra Leone', NULL),
(195, 'SG', 'Singapore', NULL),
(196, 'SK', 'Slovakia', NULL),
(197, 'SI', 'Slovenia', NULL),
(198, 'SB', 'Solomon Islands', NULL),
(199, 'SO', 'Somalia', NULL),
(200, 'ZA', 'South Africa', NULL),
(201, 'GS', 'South Georgia South Sandwich Islands', NULL),
(202, 'ES', 'Spain', NULL),
(203, 'LK', 'Sri Lanka', NULL),
(204, 'SH', 'St. Helena', NULL),
(205, 'PM', 'St. Pierre and Miquelon', NULL),
(206, 'SD', 'Sudan', NULL),
(207, 'SR', 'Suriname', NULL),
(208, 'SJ', 'Svalbard and Jan Mayen Islands', NULL),
(209, 'SZ', 'Swaziland', NULL),
(210, 'SE', 'Sweden', NULL),
(211, 'CH', 'Switzerland', NULL),
(212, 'SY', 'Syrian Arab Republic', NULL),
(213, 'TW', 'Taiwan', NULL),
(214, 'TJ', 'Tajikistan', NULL),
(215, 'TZ', 'Tanzania, United Republic of', NULL),
(216, 'TH', 'Thailand', NULL),
(217, 'TG', 'Togo', NULL),
(218, 'TK', 'Tokelau', NULL),
(219, 'TO', 'Tonga', NULL),
(220, 'TT', 'Trinidad and Tobago', NULL),
(221, 'TN', 'Tunisia', NULL),
(222, 'TR', 'Turkey', NULL),
(223, 'TM', 'Turkmenistan', NULL),
(224, 'TC', 'Turks and Caicos Islands', NULL),
(225, 'TV', 'Tuvalu', NULL),
(226, 'UG', 'Uganda', NULL),
(227, 'UA', 'Ukraine', NULL),
(228, 'AE', 'United Arab Emirates', NULL),
(229, 'GB', 'United Kingdom', NULL),
(230, 'US', 'United States', NULL),
(231, 'UM', 'United States minor outlying islands', NULL),
(232, 'UY', 'Uruguay', NULL),
(233, 'UZ', 'Uzbekistan', NULL),
(234, 'VU', 'Vanuatu', NULL),
(235, 'VA', 'Vatican City State', NULL),
(236, 'VE', 'Venezuela', NULL),
(237, 'VN', 'Vietnam', NULL),
(238, 'VG', 'Virgin Islands (British)', NULL),
(239, 'VI', 'Virgin Islands (U.S.)', NULL),
(240, 'WF', 'Wallis and Futuna Islands', NULL),
(241, 'EH', 'Western Sahara', NULL),
(242, 'YE', 'Yemen', NULL),
(243, 'ZR', 'Zaire', NULL),
(244, 'ZM', 'Zambia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image_caption` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `order_by` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `image_caption`, `image`, `status`, `order_by`, `created_at`, `updated_at`) VALUES
(1, 'The Gallery First Image', 'gallery-cows-26.jpeg', 1, 1, '2019-09-26 01:09:03', '2019-09-26 01:09:03'),
(2, 'The Gallery Second Image', 'gallery-cow2-26.jpeg', 1, 2, '2019-09-26 01:09:22', '2019-09-26 01:09:22'),
(3, 'The Gallery Third Image', 'gallery-bg3-26.jpeg', 1, 3, '2019-09-26 01:10:03', '2019-09-26 01:10:03'),
(4, 'The Gallery Fouth Image', 'gallery-cows-26.jpeg', 1, 4, '2019-09-26 01:10:33', '2019-09-26 01:10:33');

-- --------------------------------------------------------

--
-- Table structure for table `labels`
--

CREATE TABLE `labels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `labelid` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `labels`
--

INSERT INTO `labels` (`id`, `page`, `labelid`, `value`, `created_at`, `updated_at`) VALUES
(1, 'global', 'global:email', 'info@bhagwansthan.com', '2019-09-21 00:28:31', '2019-09-21 00:35:49'),
(2, 'global', 'global:mobile', '+977-0123456789', '2019-09-21 00:36:53', '2019-09-21 00:36:53'),
(3, 'global', 'global:location', 'Kathmandu, Nepal', '2019-09-21 00:38:07', '2019-09-21 00:38:07');

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
(3, '2019_09_17_072248_create_admins_table', 2),
(4, '2019_09_18_062859_create_pages_table', 3),
(5, '2019_09_20_013715_create_pages_table', 4),
(6, '2019_09_21_060500_create_labels_table', 5),
(7, '2019_09_21_113514_create_slides_table', 6),
(8, '2019_09_26_052345_create_galleries_table', 7),
(9, '2019_09_22_133726_create_videos_table', 8),
(10, '2019_09_26_093158_create_reviews_table', 9),
(11, '2019_09_27_060433_create_milks_table', 10),
(12, '2019_09_23_022544_create_settings_table', 11),
(13, '2019_09_27_060435_create_milks_table', 12),
(14, '2019_09_28_075643_create_contacts_table', 13),
(15, '2019_09_28_084054_create_socials_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `milks`
--

CREATE TABLE `milks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `district` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subscription_type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `quantity` int(11) NOT NULL,
  `options` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `milks`
--

INSERT INTO `milks` (`id`, `name`, `email`, `phone`, `image`, `district`, `address`, `subscription_type`, `quantity`, `options`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Rams', 'rams@gmail.com', '985652515', 'rams-2.jpeg', 'Kathmandu', 'The Kathmandu Nepal', 'Daily', 1, '250ml', 1, '2019-09-27 09:19:09', '2019-09-27 09:21:11');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `overview` longtext COLLATE utf8mb4_unicode_ci,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `position` int(11) NOT NULL,
  `meta_title` longtext COLLATE utf8mb4_unicode_ci,
  `meta_keyword` longtext COLLATE utf8mb4_unicode_ci,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `parent_id`, `title`, `slug`, `overview`, `details`, `image`, `status`, `position`, `meta_title`, `meta_keyword`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 0, 'Home', '/', NULL, 'The Home Page', 'Home-.jpeg', 1, 3, NULL, NULL, NULL, '2019-09-19 20:11:12', '2019-09-19 20:11:12'),
(2, 0, 'About Us', 'aboutus', NULL, 'The About US Page', 'About Us-.jpeg', 1, 3, NULL, NULL, NULL, '2019-09-19 20:59:46', '2019-09-19 21:03:45'),
(5, 0, 'Register', 'register', NULL, 'The Register Page Details', NULL, 1, 0, NULL, NULL, NULL, '2019-09-24 23:41:34', '2019-09-24 23:41:34'),
(6, 0, 'Gallery', 'gallery', NULL, 'The Gallery Page', NULL, 1, 1, NULL, NULL, NULL, '2019-09-26 00:10:55', '2019-09-26 00:10:55'),
(7, 0, 'Review', 'review', NULL, 'The Review Page', NULL, 1, 2, NULL, NULL, NULL, '2019-09-26 04:09:51', '2019-09-26 04:11:18'),
(8, 0, 'Milk Subscription', 'milk-subscription', NULL, 'The Milk Subscription Page', NULL, 1, 1, NULL, NULL, NULL, '2019-09-27 00:34:17', '2019-09-27 00:34:17'),
(9, 0, 'Product', 'product', NULL, 'The Product Page', NULL, 1, 1, NULL, NULL, NULL, '2019-09-28 08:57:20', '2019-09-28 08:57:20'),
(10, 0, 'Service', 'service', NULL, 'The Service Page', NULL, 1, 1, NULL, NULL, NULL, '2019-09-28 08:57:42', '2019-09-28 08:57:42'),
(11, 0, 'Contact Us', 'contact', NULL, 'The Contact Us Page', NULL, 1, 3, NULL, NULL, NULL, '2019-09-28 08:58:28', '2019-09-28 08:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country_id` int(11) DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `title`, `name`, `email`, `country_id`, `image`, `details`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Test', 'Test', 'test@gmail.com', NULL, 'review-2.jpeg', 'test test test\r\ntest test', 1, '2019-09-27 00:04:26', '2019-09-27 00:13:55');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `title`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'logo', 'bhagwansthan-logo.png', 0, '2019-09-27 01:46:14', '2019-09-27 01:46:28'),
(2, 'emails', 'roshanlive147@gmail.com;roshan.kunwar110@gmail.com', 0, '2019-09-27 01:51:17', '2019-09-27 01:51:17');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_id` int(11) NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `details` longtext COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `link` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) NOT NULL,
  `in_home` enum('0','1') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `package_id`, `title`, `details`, `image`, `link`, `status`, `in_home`, `created_at`, `updated_at`) VALUES
(3, 0, 'Slide 1', 'The Slide 1', 'slide-1-3.jpeg', NULL, 1, '1', '2019-09-25 07:12:12', '2019-09-25 07:12:12'),
(4, 0, 'Slide 2', 'The Slide 2', 'slide-2-4.jpeg', NULL, 1, '1', '2019-09-25 07:12:35', '2019-09-25 07:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `groups` int(11) NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `groups`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 100, 'admin', 'admin@bhagwansthan.com', NULL, '$2y$12$d2fAcxQxJAvt7iyQOcZmo.uBgYy/2gzdOuB9nUV9/W/u0/zjKlki2', NULL, NULL, NULL),
(2, 10, 'Ram', 'ram@gmail.com', NULL, '$2y$10$TEBkcIBkGu.aKSazlAx95emu4UpBlwvo.gM.imduANgaXXYfPWSme', NULL, '2019-09-25 00:13:37', '2019-09-25 00:13:37');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kissan Programme', 'https://www.youtube.com/watch?v=Ow8WCYJX6gs', 1, '2019-09-26 02:24:57', '2019-09-26 02:24:57'),
(2, 'Adhunik cow farming', 'https://www.youtube.com/watch?v=_u9AKBsRczU', 1, '2019-09-26 02:25:43', '2019-09-26 02:25:43'),
(3, 'Dhakal Dairy Farming', 'https://www.youtube.com/watch?v=yAr_yThncG0', 1, '2019-09-26 02:26:04', '2019-09-26 02:26:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `labels`
--
ALTER TABLE `labels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `milks`
--
ALTER TABLE `milks`
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
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=245;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `labels`
--
ALTER TABLE `labels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `milks`
--
ALTER TABLE `milks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
