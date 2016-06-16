-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2016 at 10:23 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `paydaeco_userwealth`
--

-- --------------------------------------------------------

--
-- Table structure for table `6btb_admin`
--

CREATE TABLE `6btb_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_fname` varchar(20) NOT NULL,
  `admin_lname` varchar(20) NOT NULL,
  `admin_password` text NOT NULL,
  `admin_photo` varchar(250) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_phone` varchar(15) NOT NULL,
  `admin_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6btb_admin`
--

INSERT INTO `6btb_admin` (`admin_id`, `admin_fname`, `admin_lname`, `admin_password`, `admin_photo`, `admin_email`, `admin_phone`, `admin_address`) VALUES
(1, 'paydaeco', 'panel', '25d55ad283aa400af464c76d713c07ad', 'img-1462448311.jpg', 'admin@gmail.com', '123456789', '<br>');

-- --------------------------------------------------------

--
-- Table structure for table `6btb_register_package_setting`
--

CREATE TABLE `6btb_register_package_setting` (
  `register_package_setting_id` int(11) NOT NULL,
  `register_package_setting_percentage` text NOT NULL,
  `packages_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6btb_register_package_setting`
--

INSERT INTO `6btb_register_package_setting` (`register_package_setting_id`, `register_package_setting_percentage`, `packages_id`) VALUES
(1, '', 1),
(2, '', 2),
(3, '', 4),
(4, '', 0),
(5, '', 0),
(6, '', 0),
(7, '', 0),
(8, '', 0),
(9, '', 0),
(10, '', 0),
(11, '', 0),
(12, '', 0),
(13, '', 0),
(14, '', 0),
(15, '', 0),
(16, '', 0),
(17, '', 0),
(18, '', 0),
(19, '', 0),
(20, '', 0),
(21, '', 0),
(22, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `6btb_setting`
--

CREATE TABLE `6btb_setting` (
  `setting_id` int(11) NOT NULL,
  `setting_title` varchar(100) NOT NULL,
  `setting_key` text NOT NULL,
  `setting_web` varchar(100) NOT NULL,
  `setting_email2` varchar(100) NOT NULL,
  `setting_michel` varchar(20) NOT NULL,
  `setting_fax` varchar(50) NOT NULL,
  `setting_phone` varchar(50) NOT NULL,
  `setting_address` text NOT NULL,
  `setting_email` varchar(50) NOT NULL,
  `setting_logo` longblob NOT NULL,
  `setting_about` text NOT NULL,
  `setting_lat` float(10,6) NOT NULL,
  `setting_lon` float(10,6) NOT NULL,
  `setting_app_key` varchar(250) NOT NULL,
  `maintain` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `6btb_setting`
--

INSERT INTO `6btb_setting` (`setting_id`, `setting_title`, `setting_key`, `setting_web`, `setting_email2`, `setting_michel`, `setting_fax`, `setting_phone`, `setting_address`, `setting_email`, `setting_logo`, `setting_about`, `setting_lat`, `setting_lon`, `setting_app_key`, `maintain`) VALUES
(1, 'PAYDAECO', '6btb<br>', 'http://localhost/member-console/', '6btb', '6btb', '6btb', '1234567890', '6btb', '6btb', 0x4c4946455354594c455745414c54485745424c4f474f2e706e67, '6btb<br>', 0.000000, 0.000000, '975281549225675', 3);

-- --------------------------------------------------------

--
-- Table structure for table `bitcoins`
--

CREATE TABLE `bitcoins` (
  `bitcoins_id` int(11) NOT NULL,
  `bitcoins_coins` varchar(250) NOT NULL,
  `bitcoins_status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bitcoins`
--

INSERT INTO `bitcoins` (`bitcoins_id`, `bitcoins_coins`, `bitcoins_status`) VALUES
(1, '100', '1'),
(2, '250', '1'),
(3, '500', '1'),
(4, '1000', '1'),
(5, '2500', '1'),
(6, '5000', '1'),
(7, '10000', '1'),
(8, '25000', '1'),
(9, '50000', '1'),
(10, '100000', '1'),
(11, '250000', '1'),
(12, '500000', '1'),
(13, '1000000', '1');

-- --------------------------------------------------------

--
-- Table structure for table `contest`
--

CREATE TABLE `contest` (
  `contest_id` int(11) NOT NULL,
  `contest_1st` varchar(250) NOT NULL,
  `contest_2nd` varchar(250) NOT NULL,
  `contest_3rd` varchar(250) NOT NULL,
  `contest_description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contest`
--

INSERT INTO `contest` (`contest_id`, `contest_1st`, `contest_2nd`, `contest_3rd`, `contest_description`) VALUES
(1, '10k-challenge-promo.jpg', '', '', '<img src="http://i.imgur.com/3ChBbmG.jpg" width="177">');

-- --------------------------------------------------------

--
-- Table structure for table `crypto_payments`
--

CREATE TABLE `crypto_payments` (
  `paymentID` int(11) UNSIGNED NOT NULL,
  `boxID` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `boxType` enum('paymentbox','captchabox') NOT NULL,
  `orderID` varchar(50) NOT NULL DEFAULT '',
  `userID` varchar(50) NOT NULL DEFAULT '',
  `countryID` varchar(3) NOT NULL DEFAULT '',
  `coinLabel` varchar(6) NOT NULL DEFAULT '',
  `amount` double(20,8) NOT NULL DEFAULT '0.00000000',
  `amountUSD` double(20,8) NOT NULL DEFAULT '0.00000000',
  `unrecognised` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `addr` varchar(34) NOT NULL DEFAULT '',
  `txID` char(64) NOT NULL DEFAULT '',
  `txDate` datetime DEFAULT NULL,
  `txConfirmed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `txCheckDate` datetime DEFAULT NULL,
  `processed` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `processedDate` datetime DEFAULT NULL,
  `recordCreated` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=DYNAMIC;

-- --------------------------------------------------------

--
-- Table structure for table `emailtext`
--

CREATE TABLE `emailtext` (
  `id` int(6) NOT NULL,
  `code` varchar(50) NOT NULL,
  `etext` text NOT NULL,
  `emailactive` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `emailtext`
--

INSERT INTO `emailtext` (`id`, `code`, `etext`, `emailactive`) VALUES
(1, 'SIGNUP', 'This email is the confirmation for your order you have just signed up. Thank you for your interest. Our team welcomes you to our website. \r\n\r\nRegards\r\nTeam mylifestylewealth', 1),
(2, 'FORGOTPASSWORD', 'Hi, \r\nYou have requested a password on our website and therefore we have sent the password on this email. If you haven''t do it please ignore the email.\r\n\r\nRegards\r\nTeam mylifestylewealth', 1),
(5, 'NEWMEMBER', 'You have got new order, bingo!', 1),
(6, 'NEWMEMBER', 'You have got new order, bingo!', 1),
(7, 'SIGNUP', 'This email is the confirmation for your order you have just signed up. Thank you for your interest. Our team welcomes you to our website. \r\n\r\nRegards\r\nTeam mylifestylewealth', 1),
(8, 'NEWMEMBER', 'You have got new order, bingo!', 1),
(9, 'SIGNUP', 'This email is the confirmation for your order you have just signed up. Thank you for your interest. Our team welcomes you to our website. \r\n\r\nRegards\r\nTeam mylifestylewealth', 1),
(10, 'NEWMEMBER', 'You have got new order, bingo!', 1),
(11, 'SIGNUP', 'This email is the confirmation for your order you have just signed up. Thank you for your interest. Our team welcomes you to our website. \r\n\r\nRegards\r\nTeam mylifestylewealth', 1);

-- --------------------------------------------------------

--
-- Table structure for table `graphic_location`
--

CREATE TABLE `graphic_location` (
  `location_id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `location_type` tinyint(1) NOT NULL COMMENT '0:country,1:state,2:city',
  `parent_id` int(11) NOT NULL COMMENT 'parent location_id',
  `is_visible` tinyint(1) NOT NULL COMMENT '0:visible,1:invisible'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `graphic_location`
--

INSERT INTO `graphic_location` (`location_id`, `name`, `location_type`, `parent_id`, `is_visible`) VALUES
(1, 'Aruba', 0, 0, 0),
(2, 'Afghanistan', 0, 0, 0),
(3, 'Angola', 0, 0, 0),
(4, 'Anguilla', 0, 0, 0),
(5, 'Albania', 0, 0, 0),
(6, 'Andorra', 0, 0, 0),
(7, 'Netherlands Antilles', 0, 0, 0),
(8, 'United Arab Emirates', 0, 0, 0),
(9, 'Argentina', 0, 0, 0),
(10, 'Armenia', 0, 0, 0),
(11, 'American Samoa', 0, 0, 0),
(12, 'Antarctica', 0, 0, 0),
(13, 'French Southern territories', 0, 0, 0),
(14, 'Antigua and Barbuda', 0, 0, 0),
(15, 'Australia', 0, 0, 0),
(16, 'Austria', 0, 0, 0),
(17, 'Azerbaijan', 0, 0, 0),
(18, 'Burundi', 0, 0, 0),
(19, 'Belgium', 0, 0, 0),
(20, 'Benin', 0, 0, 0),
(21, 'Burkina Faso', 0, 0, 0),
(22, 'Bangladesh', 0, 0, 0),
(23, 'Bulgaria', 0, 0, 0),
(24, 'Bahrain', 0, 0, 0),
(25, 'Bahamas', 0, 0, 0),
(26, 'Bosnia and Herzegovina', 0, 0, 0),
(27, 'Belarus', 0, 0, 0),
(28, 'Belize', 0, 0, 0),
(29, 'Bermuda', 0, 0, 0),
(30, 'Bolivia', 0, 0, 0),
(31, 'Brazil', 0, 0, 0),
(32, 'Barbados', 0, 0, 0),
(33, 'Brunei', 0, 0, 0),
(34, 'Bhutan', 0, 0, 0),
(35, 'Bouvet Island', 0, 0, 0),
(36, 'Botswana', 0, 0, 0),
(37, 'Central African Republic', 0, 0, 0),
(38, 'Canada', 0, 0, 0),
(39, 'Cocos (Keeling) Islands', 0, 0, 0),
(40, 'Switzerland', 0, 0, 0),
(41, 'Chile', 0, 0, 0),
(42, 'China', 0, 0, 0),
(43, 'CÃƒÂ´te dÃ¢â‚¬â„¢Ivoire', 0, 0, 0),
(44, 'Cameroon', 0, 0, 0),
(45, 'Congo, The Democratic Republic', 0, 0, 0),
(46, 'Congo', 0, 0, 0),
(47, 'Cook Islands', 0, 0, 0),
(48, 'Colombia', 0, 0, 0),
(49, 'Comoros', 0, 0, 0),
(50, 'Cape Verde', 0, 0, 0),
(51, 'Costa Rica', 0, 0, 0),
(52, 'Cuba', 0, 0, 0),
(53, 'Christmas Island', 0, 0, 0),
(54, 'Cayman Islands', 0, 0, 0),
(55, 'Cyprus', 0, 0, 0),
(56, 'Czech Republic', 0, 0, 0),
(57, 'Germany', 0, 0, 0),
(58, 'Djibouti', 0, 0, 0),
(59, 'Dominica', 0, 0, 0),
(60, 'Denmark', 0, 0, 0),
(61, 'Dominican Republic', 0, 0, 0),
(62, 'Algeria', 0, 0, 0),
(63, 'Ecuador', 0, 0, 0),
(64, 'Egypt', 0, 0, 0),
(65, 'Eritrea', 0, 0, 0),
(66, 'Western Sahara', 0, 0, 0),
(67, 'Spain', 0, 0, 0),
(68, 'Estonia', 0, 0, 0),
(69, 'Ethiopia', 0, 0, 0),
(70, 'Finland', 0, 0, 0),
(71, 'Fiji Islands', 0, 0, 0),
(72, 'Falkland Islands', 0, 0, 0),
(73, 'France', 0, 0, 0),
(74, 'Faroe Islands', 0, 0, 0),
(75, 'Micronesia, Federated States o', 0, 0, 0),
(76, 'Gabon', 0, 0, 0),
(77, 'United Kingdom', 0, 0, 0),
(78, 'Georgia', 0, 0, 0),
(79, 'Ghana', 0, 0, 0),
(80, 'Gibraltar', 0, 0, 0),
(81, 'Guinea', 0, 0, 0),
(82, 'Guadeloupe', 0, 0, 0),
(83, 'Gambia', 0, 0, 0),
(84, 'Guinea-Bissau', 0, 0, 0),
(85, 'Equatorial Guinea', 0, 0, 0),
(86, 'Greece', 0, 0, 0),
(87, 'Grenada', 0, 0, 0),
(88, 'Greenland', 0, 0, 0),
(89, 'Guatemala', 0, 0, 0),
(90, 'French Guiana', 0, 0, 0),
(91, 'Guam', 0, 0, 0),
(92, 'Guyana', 0, 0, 0),
(93, 'Hong Kong', 0, 0, 0),
(94, 'Heard Island and McDonald Isla', 0, 0, 0),
(95, 'Honduras', 0, 0, 0),
(96, 'Croatia', 0, 0, 0),
(97, 'Haiti', 0, 0, 0),
(98, 'Hungary', 0, 0, 0),
(99, 'Indonesia', 0, 0, 0),
(100, 'India', 0, 0, 0),
(101, 'British Indian Ocean Territory', 0, 0, 0),
(102, 'Ireland', 0, 0, 0),
(103, 'Iran', 0, 0, 0),
(104, 'Iraq', 0, 0, 0),
(105, 'Iceland', 0, 0, 0),
(106, 'Israel', 0, 0, 0),
(107, 'Italy', 0, 0, 0),
(108, 'Jamaica', 0, 0, 0),
(109, 'Jordan', 0, 0, 0),
(110, 'Japan', 0, 0, 0),
(111, 'Kazakstan', 0, 0, 0),
(112, 'Kenya', 0, 0, 0),
(113, 'Kyrgyzstan', 0, 0, 0),
(114, 'Cambodia', 0, 0, 0),
(115, 'Kiribati', 0, 0, 0),
(116, 'Saint Kitts and Nevis', 0, 0, 0),
(117, 'South Korea', 0, 0, 0),
(118, 'Kuwait', 0, 0, 0),
(119, 'Laos', 0, 0, 0),
(120, 'Lebanon', 0, 0, 0),
(121, 'Liberia', 0, 0, 0),
(122, 'Libyan Arab Jamahiriya', 0, 0, 0),
(123, 'Saint Lucia', 0, 0, 0),
(124, 'Liechtenstein', 0, 0, 0),
(125, 'Sri Lanka', 0, 0, 0),
(126, 'Lesotho', 0, 0, 0),
(127, 'Lithuania', 0, 0, 0),
(128, 'Luxembourg', 0, 0, 0),
(129, 'Latvia', 0, 0, 0),
(130, 'Macao', 0, 0, 0),
(131, 'Morocco', 0, 0, 0),
(132, 'Monaco', 0, 0, 0),
(133, 'Moldova', 0, 0, 0),
(134, 'Madagascar', 0, 0, 0),
(135, 'Maldives', 0, 0, 0),
(136, 'Mexico', 0, 0, 0),
(137, 'Marshall Islands', 0, 0, 0),
(138, 'Macedonia', 0, 0, 0),
(139, 'Mali', 0, 0, 0),
(140, 'Malta', 0, 0, 0),
(141, 'Myanmar', 0, 0, 0),
(142, 'Mongolia', 0, 0, 0),
(143, 'Northern Mariana Islands', 0, 0, 0),
(144, 'Mozambique', 0, 0, 0),
(145, 'Mauritania', 0, 0, 0),
(146, 'Montserrat', 0, 0, 0),
(147, 'Martinique', 0, 0, 0),
(148, 'Mauritius', 0, 0, 0),
(149, 'Malawi', 0, 0, 0),
(150, 'Malaysia', 0, 0, 0),
(151, 'Mayotte', 0, 0, 0),
(152, 'Namibia', 0, 0, 0),
(153, 'New Caledonia', 0, 0, 0),
(154, 'Niger', 0, 0, 0),
(155, 'Norfolk Island', 0, 0, 0),
(156, 'Nigeria', 0, 0, 0),
(157, 'Nicaragua', 0, 0, 0),
(158, 'Niue', 0, 0, 0),
(159, 'Netherlands', 0, 0, 0),
(160, 'Norway', 0, 0, 0),
(161, 'Nepal', 0, 0, 0),
(162, 'Nauru', 0, 0, 0),
(163, 'New Zealand', 0, 0, 0),
(164, 'Oman', 0, 0, 0),
(165, 'Pakistan', 0, 0, 0),
(166, 'Panama', 0, 0, 0),
(167, 'Pitcairn', 0, 0, 0),
(168, 'Peru', 0, 0, 0),
(169, 'Philippines', 0, 0, 0),
(170, 'Palau', 0, 0, 0),
(171, 'Papua New Guinea', 0, 0, 0),
(172, 'Poland', 0, 0, 0),
(173, 'Puerto Rico', 0, 0, 0),
(174, 'North Korea', 0, 0, 0),
(175, 'Portugal', 0, 0, 0),
(176, 'Paraguay', 0, 0, 0),
(177, 'Palestine', 0, 0, 0),
(178, 'French Polynesia', 0, 0, 0),
(179, 'Qatar', 0, 0, 0),
(180, 'RÃƒÂ©union', 0, 0, 0),
(181, 'Romania', 0, 0, 0),
(182, 'Russian Federation', 0, 0, 0),
(183, 'Rwanda', 0, 0, 0),
(184, 'Saudi Arabia', 0, 0, 0),
(185, 'Sudan', 0, 0, 0),
(186, 'Senegal', 0, 0, 0),
(187, 'Singapore', 0, 0, 0),
(188, 'South Georgia and the South Sa', 0, 0, 0),
(189, 'Saint Helena', 0, 0, 0),
(190, 'Svalbard and Jan Mayen', 0, 0, 0),
(191, 'Solomon Islands', 0, 0, 0),
(192, 'Sierra Leone', 0, 0, 0),
(193, 'El Salvador', 0, 0, 0),
(194, 'San Marino', 0, 0, 0),
(195, 'Somalia', 0, 0, 0),
(196, 'Saint Pierre and Miquelon', 0, 0, 0),
(197, 'Sao Tome and Principe', 0, 0, 0),
(198, 'Suriname', 0, 0, 0),
(199, 'Slovakia', 0, 0, 0),
(200, 'Slovenia', 0, 0, 0),
(201, 'Sweden', 0, 0, 0),
(202, 'Swaziland', 0, 0, 0),
(203, 'Seychelles', 0, 0, 0),
(204, 'Syria', 0, 0, 0),
(205, 'Turks and Caicos Islands', 0, 0, 0),
(206, 'Chad', 0, 0, 0),
(207, 'Togo', 0, 0, 0),
(208, 'Thailand', 0, 0, 0),
(209, 'Tajikistan', 0, 0, 0),
(210, 'Tokelau', 0, 0, 0),
(211, 'Turkmenistan', 0, 0, 0),
(212, 'East Timor', 0, 0, 0),
(213, 'Tonga', 0, 0, 0),
(214, 'Trinidad and Tobago', 0, 0, 0),
(215, 'Tunisia', 0, 0, 0),
(216, 'Turkey', 0, 0, 0),
(217, 'Tuvalu', 0, 0, 0),
(218, 'Taiwan', 0, 0, 0),
(219, 'Tanzania', 0, 0, 0),
(220, 'Uganda', 0, 0, 0),
(221, 'Ukraine', 0, 0, 0),
(222, 'United States Minor Outlying I', 0, 0, 0),
(223, 'Uruguay', 0, 0, 0),
(224, 'United States', 0, 0, 0),
(225, 'Uzbekistan', 0, 0, 0),
(226, 'Holy See (Vatican City State)', 0, 0, 0),
(227, 'Saint Vincent and the Grenadin', 0, 0, 0),
(228, 'Venezuela', 0, 0, 0),
(229, 'Virgin Islands, British', 0, 0, 0),
(230, 'Virgin Islands, U.S.', 0, 0, 0),
(231, 'Vietnam', 0, 0, 0),
(232, 'Vanuatu', 0, 0, 0),
(233, 'Wallis and Futuna', 0, 0, 0),
(234, 'Samoa', 0, 0, 0),
(235, 'Yemen', 0, 0, 0),
(236, 'Yugoslavia', 0, 0, 0),
(237, 'South Africa', 0, 0, 0),
(238, 'Zambia', 0, 0, 0),
(239, 'Zimbabwe', 0, 0, 0),
(240, 'Ã¢â‚¬â€œ', 1, 1, 0),
(241, 'Balkh', 1, 2, 0),
(242, 'Herat', 1, 2, 0),
(243, 'Kabol', 1, 2, 0),
(244, 'Qandahar', 1, 2, 0),
(245, 'Benguela', 1, 3, 0),
(246, 'Huambo', 1, 3, 0),
(247, 'Luanda', 1, 3, 0),
(248, 'Namibe', 1, 3, 0),
(249, 'Ã¢â‚¬â€œ', 1, 4, 0),
(250, 'Tirana', 1, 5, 0),
(251, 'Andorra la Vella', 1, 6, 0),
(252, 'CuraÃƒÂ§ao', 1, 7, 0),
(253, 'Abu Dhabi', 1, 8, 0),
(254, 'Ajman', 1, 8, 0),
(255, 'Dubai', 1, 8, 0),
(256, 'Sharja', 1, 8, 0),
(257, 'Buenos Aires', 1, 9, 0),
(258, 'Catamarca', 1, 9, 0),
(259, 'CÃƒÂ³rdoba', 1, 9, 0),
(260, 'Chaco', 1, 9, 0),
(261, 'Chubut', 1, 9, 0),
(262, 'Corrientes', 1, 9, 0),
(263, 'Distrito Federal', 1, 9, 0),
(264, 'Entre Rios', 1, 9, 0),
(265, 'Formosa', 1, 9, 0),
(266, 'Jujuy', 1, 9, 0),
(267, 'La Rioja', 1, 9, 0),
(268, 'Mendoza', 1, 9, 0),
(269, 'Misiones', 1, 9, 0),
(270, 'NeuquÃƒÂ©n', 1, 9, 0),
(271, 'Salta', 1, 9, 0),
(272, 'San Juan', 1, 9, 0),
(273, 'San Luis', 1, 9, 0),
(274, 'Santa FÃƒÂ©', 1, 9, 0),
(275, 'Santiago del Estero', 1, 9, 0),
(276, 'TucumÃƒÂ¡n', 1, 9, 0),
(277, 'Lori', 1, 10, 0),
(278, 'Yerevan', 1, 10, 0),
(279, 'Ã…Â irak', 1, 10, 0),
(280, 'Tutuila', 1, 11, 0),
(281, 'St John', 1, 14, 0),
(282, 'Capital Region', 1, 15, 0),
(283, 'New South Wales', 1, 15, 0),
(284, 'Queensland', 1, 15, 0),
(285, 'South Australia', 1, 15, 0),
(286, 'Tasmania', 1, 15, 0),
(287, 'Victoria', 1, 15, 0),
(288, 'West Australia', 1, 15, 0),
(289, 'KÃƒÂ¤rnten', 1, 16, 0),
(290, 'North Austria', 1, 16, 0),
(291, 'Salzburg', 1, 16, 0),
(292, 'Steiermark', 1, 16, 0),
(293, 'Tiroli', 1, 16, 0),
(294, 'Wien', 1, 16, 0),
(295, 'Baki', 1, 17, 0),
(296, 'GÃƒÂ¤ncÃƒÂ¤', 1, 17, 0),
(297, 'MingÃƒÂ¤ÃƒÂ§evir', 1, 17, 0),
(298, 'Sumqayit', 1, 17, 0),
(299, 'Bujumbura', 1, 18, 0),
(300, 'Antwerpen', 1, 19, 0),
(301, 'Bryssel', 1, 19, 0),
(302, 'East Flanderi', 1, 19, 0),
(303, 'Hainaut', 1, 19, 0),
(304, 'LiÃƒÂ¨ge', 1, 19, 0),
(305, 'Namur', 1, 19, 0),
(306, 'West Flanderi', 1, 19, 0),
(307, 'Atacora', 1, 20, 0),
(308, 'Atlantique', 1, 20, 0),
(309, 'Borgou', 1, 20, 0),
(310, 'OuÃƒÂ©mÃƒÂ©', 1, 20, 0),
(311, 'BoulkiemdÃƒÂ©', 1, 21, 0),
(312, 'Houet', 1, 21, 0),
(313, 'Kadiogo', 1, 21, 0),
(314, 'Barisal', 1, 22, 0),
(315, 'Chittagong', 1, 22, 0),
(316, 'Dhaka', 1, 22, 0),
(317, 'Khulna', 1, 22, 0),
(318, 'Rajshahi', 1, 22, 0),
(319, 'Sylhet', 1, 22, 0),
(320, 'Burgas', 1, 23, 0),
(321, 'Grad Sofija', 1, 23, 0),
(322, 'Haskovo', 1, 23, 0),
(323, 'Lovec', 1, 23, 0),
(324, 'Plovdiv', 1, 23, 0),
(325, 'Ruse', 1, 23, 0),
(326, 'Varna', 1, 23, 0),
(327, 'al-Manama', 1, 24, 0),
(328, 'New Providence', 1, 25, 0),
(329, 'Federaatio', 1, 26, 0),
(330, 'Republika Srpska', 1, 26, 0),
(331, 'Brest', 1, 27, 0),
(332, 'Gomel', 1, 27, 0),
(333, 'Grodno', 1, 27, 0),
(334, 'Horad Minsk', 1, 27, 0),
(335, 'Minsk', 1, 27, 0),
(336, 'Mogiljov', 1, 27, 0),
(337, 'Vitebsk', 1, 27, 0),
(338, 'Belize City', 1, 28, 0),
(339, 'Cayo', 1, 28, 0),
(340, 'Hamilton', 1, 29, 0),
(341, 'Saint GeorgeÃ‚Â´s', 1, 29, 0),
(342, 'Chuquisaca', 1, 30, 0),
(343, 'Cochabamba', 1, 30, 0),
(344, 'La Paz', 1, 30, 0),
(345, 'Oruro', 1, 30, 0),
(346, 'PotosÃƒÂ­', 1, 30, 0),
(347, 'Santa Cruz', 1, 30, 0),
(348, 'Tarija', 1, 30, 0),
(349, 'Acre', 1, 31, 0),
(350, 'Alagoas', 1, 31, 0),
(351, 'AmapÃƒÂ¡', 1, 31, 0),
(352, 'Amazonas', 1, 31, 0),
(353, 'Bahia', 1, 31, 0),
(354, 'CearÃƒÂ¡', 1, 31, 0),
(355, 'Distrito Federal', 1, 31, 0),
(356, 'EspÃƒÂ­rito Santo', 1, 31, 0),
(357, 'GoiÃƒÂ¡s', 1, 31, 0),
(358, 'MaranhÃƒÂ£o', 1, 31, 0),
(359, 'Mato Grosso', 1, 31, 0),
(360, 'Mato Grosso do Sul', 1, 31, 0),
(361, 'Minas Gerais', 1, 31, 0),
(362, 'ParaÃƒÂ­ba', 1, 31, 0),
(363, 'ParanÃƒÂ¡', 1, 31, 0),
(364, 'ParÃƒÂ¡', 1, 31, 0),
(365, 'Pernambuco', 1, 31, 0),
(366, 'PiauÃƒÂ­', 1, 31, 0),
(367, 'Rio de Janeiro', 1, 31, 0),
(368, 'Rio Grande do Norte', 1, 31, 0),
(369, 'Rio Grande do Sul', 1, 31, 0),
(370, 'RondÃƒÂ´nia', 1, 31, 0),
(371, 'Roraima', 1, 31, 0),
(372, 'Santa Catarina', 1, 31, 0),
(373, 'SÃƒÂ£o Paulo', 1, 31, 0),
(374, 'Sergipe', 1, 31, 0),
(375, 'Tocantins', 1, 31, 0),
(376, 'St Michael', 1, 32, 0),
(377, 'Brunei and Muara', 1, 33, 0),
(378, 'Thimphu', 1, 34, 0),
(379, 'Francistown', 1, 36, 0),
(380, 'Gaborone', 1, 36, 0),
(381, 'Bangui', 1, 37, 0),
(382, 'Alberta', 1, 38, 0),
(383, 'British Colombia', 1, 38, 0),
(384, 'Manitoba', 1, 38, 0),
(385, 'Newfoundland', 1, 38, 0),
(386, 'Nova Scotia', 1, 38, 0),
(387, 'Ontario', 1, 38, 0),
(388, 'QuÃƒÂ©bec', 1, 38, 0),
(389, 'Saskatchewan', 1, 38, 0),
(390, 'Home Island', 1, 39, 0),
(391, 'West Island', 1, 39, 0),
(392, 'Basel-Stadt', 1, 40, 0),
(393, 'Bern', 1, 40, 0),
(394, 'Geneve', 1, 40, 0),
(395, 'Vaud', 1, 40, 0),
(396, 'ZÃƒÂ¼rich', 1, 40, 0),
(397, 'Antofagasta', 1, 41, 0),
(398, 'Atacama', 1, 41, 0),
(399, 'BÃƒÂ­obÃƒÂ­o', 1, 41, 0),
(400, 'Coquimbo', 1, 41, 0),
(401, 'La AraucanÃƒÂ­a', 1, 41, 0),
(402, 'Los Lagos', 1, 41, 0),
(403, 'Magallanes', 1, 41, 0),
(404, 'Maule', 1, 41, 0),
(405, 'OÃ‚Â´Higgins', 1, 41, 0),
(406, 'Santiago', 1, 41, 0),
(407, 'TarapacÃƒÂ¡', 1, 41, 0),
(408, 'ValparaÃƒÂ­so', 1, 41, 0),
(409, 'Anhui', 1, 42, 0),
(410, 'Chongqing', 1, 42, 0),
(411, 'Fujian', 1, 42, 0),
(412, 'Gansu', 1, 42, 0),
(413, 'Guangdong', 1, 42, 0),
(414, 'Guangxi', 1, 42, 0),
(415, 'Guizhou', 1, 42, 0),
(416, 'Hainan', 1, 42, 0),
(417, 'Hebei', 1, 42, 0),
(418, 'Heilongjiang', 1, 42, 0),
(419, 'Henan', 1, 42, 0),
(420, 'Hubei', 1, 42, 0),
(421, 'Hunan', 1, 42, 0),
(422, 'Inner Mongolia', 1, 42, 0),
(423, 'Jiangsu', 1, 42, 0),
(424, 'Jiangxi', 1, 42, 0),
(425, 'Jilin', 1, 42, 0),
(426, 'Liaoning', 1, 42, 0),
(427, 'Ningxia', 1, 42, 0),
(428, 'Peking', 1, 42, 0),
(429, 'Qinghai', 1, 42, 0),
(430, 'Shaanxi', 1, 42, 0),
(431, 'Shandong', 1, 42, 0),
(432, 'Shanghai', 1, 42, 0),
(433, 'Shanxi', 1, 42, 0),
(434, 'Sichuan', 1, 42, 0),
(435, 'Tianjin', 1, 42, 0),
(436, 'Tibet', 1, 42, 0),
(437, 'Xinxiang', 1, 42, 0),
(438, 'Yunnan', 1, 42, 0),
(439, 'Zhejiang', 1, 42, 0),
(440, 'Abidjan', 1, 43, 0),
(441, 'BouakÃƒÂ©', 1, 43, 0),
(442, 'Daloa', 1, 43, 0),
(443, 'Korhogo', 1, 43, 0),
(444, 'Yamoussoukro', 1, 43, 0),
(445, 'Centre', 1, 44, 0),
(446, 'ExtrÃƒÂªme-Nord', 1, 44, 0),
(447, 'Littoral', 1, 44, 0),
(448, 'Nord', 1, 44, 0),
(449, 'Nord-Ouest', 1, 44, 0),
(450, 'Ouest', 1, 44, 0),
(451, 'Bandundu', 1, 0, 0),
(452, 'Bas-ZaÃƒÂ¯re', 1, 0, 0),
(453, 'East Kasai', 1, 0, 0),
(454, 'Equateur', 1, 0, 0),
(455, 'Haute-ZaÃƒÂ¯re', 1, 0, 0),
(456, 'Kinshasa', 1, 0, 0),
(457, 'North Kivu', 1, 0, 0),
(458, 'Shaba', 1, 0, 0),
(459, 'South Kivu', 1, 0, 0),
(460, 'West Kasai', 1, 0, 0),
(461, 'Brazzaville', 1, 46, 0),
(462, 'Kouilou', 1, 46, 0),
(463, 'Rarotonga', 1, 47, 0),
(464, 'Antioquia', 1, 48, 0),
(465, 'AtlÃƒÂ¡ntico', 1, 48, 0),
(466, 'BolÃƒÂ­var', 1, 48, 0),
(467, 'BoyacÃƒÂ¡', 1, 48, 0),
(468, 'Caldas', 1, 48, 0),
(469, 'CaquetÃƒÂ¡', 1, 48, 0),
(470, 'Cauca', 1, 48, 0),
(471, 'CÃƒÂ³rdoba', 1, 48, 0),
(472, 'Cesar', 1, 48, 0),
(473, 'Cundinamarca', 1, 48, 0),
(474, 'Huila', 1, 48, 0),
(475, 'La Guajira', 1, 48, 0),
(476, 'Magdalena', 1, 48, 0),
(477, 'Meta', 1, 48, 0),
(478, 'NariÃƒÂ±o', 1, 48, 0),
(479, 'Norte de Santander', 1, 48, 0),
(480, 'QuindÃƒÂ­o', 1, 48, 0),
(481, 'Risaralda', 1, 48, 0),
(482, 'SantafÃƒÂ© de BogotÃƒÂ¡', 1, 48, 0),
(483, 'Santander', 1, 48, 0),
(484, 'Sucre', 1, 48, 0),
(485, 'Tolima', 1, 48, 0),
(486, 'Valle', 1, 48, 0),
(487, 'Njazidja', 1, 49, 0),
(488, 'SÃƒÂ£o Tiago', 1, 50, 0),
(489, 'San JosÃƒÂ©', 1, 51, 0),
(490, 'CamagÃƒÂ¼ey', 1, 52, 0),
(491, 'Ciego de ÃƒÂvila', 1, 52, 0),
(492, 'Cienfuegos', 1, 52, 0),
(493, 'Granma', 1, 52, 0),
(494, 'GuantÃƒÂ¡namo', 1, 52, 0),
(495, 'HolguÃƒÂ­n', 1, 52, 0),
(496, 'La Habana', 1, 52, 0),
(497, 'Las Tunas', 1, 52, 0),
(498, 'Matanzas', 1, 52, 0),
(499, 'Pinar del RÃƒÂ­o', 1, 52, 0),
(500, 'Sancti-SpÃƒÂ­ritus', 1, 52, 0),
(501, 'Santiago de Cuba', 1, 52, 0),
(502, 'Villa Clara', 1, 52, 0),
(503, 'Ã¢â‚¬â€œ', 1, 53, 0),
(504, 'Grand Cayman', 1, 54, 0),
(505, 'Limassol', 1, 55, 0),
(506, 'Nicosia', 1, 55, 0),
(507, 'HlavnÃƒÂ­ mesto Praha', 1, 56, 0),
(508, 'JiznÃƒÂ­ Cechy', 1, 56, 0),
(509, 'JiznÃƒÂ­ Morava', 1, 56, 0),
(510, 'SevernÃƒÂ­ Cechy', 1, 56, 0),
(511, 'SevernÃƒÂ­ Morava', 1, 56, 0),
(512, 'VÃƒÂ½chodnÃƒÂ­ Cechy', 1, 56, 0),
(513, 'ZapadnÃƒÂ­ Cechy', 1, 56, 0),
(514, 'Anhalt Sachsen', 1, 57, 0),
(515, 'Baden-WÃƒÂ¼rttemberg', 1, 57, 0),
(516, 'Baijeri', 1, 57, 0),
(517, 'Berliini', 1, 57, 0),
(518, 'Brandenburg', 1, 57, 0),
(519, 'Bremen', 1, 57, 0),
(520, 'Hamburg', 1, 57, 0),
(521, 'Hessen', 1, 57, 0),
(522, 'Mecklenburg-Vorpomme', 1, 57, 0),
(523, 'Niedersachsen', 1, 57, 0),
(524, 'Nordrhein-Westfalen', 1, 57, 0),
(525, 'Rheinland-Pfalz', 1, 57, 0),
(526, 'Saarland', 1, 57, 0),
(527, 'Saksi', 1, 57, 0),
(528, 'Schleswig-Holstein', 1, 57, 0),
(529, 'ThÃƒÂ¼ringen', 1, 57, 0),
(530, 'Djibouti', 1, 58, 0),
(531, 'St George', 1, 59, 0),
(532, 'Ãƒâ€¦rhus', 1, 60, 0),
(533, 'Frederiksberg', 1, 60, 0),
(534, 'Fyn', 1, 60, 0),
(535, 'KÃƒÂ¸benhavn', 1, 60, 0),
(536, 'Nordjylland', 1, 60, 0),
(537, 'Distrito Nacional', 1, 61, 0),
(538, 'Duarte', 1, 61, 0),
(539, 'La Romana', 1, 61, 0),
(540, 'Puerto Plata', 1, 61, 0),
(541, 'San Pedro de MacorÃƒÂ­', 1, 61, 0),
(542, 'Santiago', 1, 61, 0),
(543, 'Alger', 1, 62, 0),
(544, 'Annaba', 1, 62, 0),
(545, 'Batna', 1, 62, 0),
(546, 'BÃƒÂ©char', 1, 62, 0),
(547, 'BÃƒÂ©jaÃƒÂ¯a', 1, 62, 0),
(548, 'Biskra', 1, 62, 0),
(549, 'Blida', 1, 62, 0),
(550, 'Chlef', 1, 62, 0),
(551, 'Constantine', 1, 62, 0),
(552, 'GhardaÃƒÂ¯a', 1, 62, 0),
(553, 'Mostaganem', 1, 62, 0),
(554, 'Oran', 1, 62, 0),
(555, 'SÃƒÂ©tif', 1, 62, 0),
(556, 'Sidi Bel AbbÃƒÂ¨s', 1, 62, 0),
(557, 'Skikda', 1, 62, 0),
(558, 'TÃƒÂ©bessa', 1, 62, 0),
(559, 'Tiaret', 1, 62, 0),
(560, 'Tlemcen', 1, 62, 0),
(561, 'Azuay', 1, 63, 0),
(562, 'Chimborazo', 1, 63, 0),
(563, 'El Oro', 1, 63, 0),
(564, 'Esmeraldas', 1, 63, 0),
(565, 'Guayas', 1, 63, 0),
(566, 'Imbabura', 1, 63, 0),
(567, 'Loja', 1, 63, 0),
(568, 'Los RÃƒÂ­os', 1, 63, 0),
(569, 'ManabÃƒÂ­', 1, 63, 0),
(570, 'Pichincha', 1, 63, 0),
(571, 'Tungurahua', 1, 63, 0),
(572, 'al-Buhayra', 1, 64, 0),
(573, 'al-Daqahliya', 1, 64, 0),
(574, 'al-Faiyum', 1, 64, 0),
(575, 'al-Gharbiya', 1, 64, 0),
(576, 'al-Minufiya', 1, 64, 0),
(577, 'al-Minya', 1, 64, 0),
(578, 'al-Qalyubiya', 1, 64, 0),
(579, 'al-Sharqiya', 1, 64, 0),
(580, 'Aleksandria', 1, 64, 0),
(581, 'Assuan', 1, 64, 0),
(582, 'Asyut', 1, 64, 0),
(583, 'Bani Suwayf', 1, 64, 0),
(584, 'Giza', 1, 64, 0),
(585, 'Ismailia', 1, 64, 0),
(586, 'Kafr al-Shaykh', 1, 64, 0),
(587, 'Kairo', 1, 64, 0),
(588, 'Luxor', 1, 64, 0),
(589, 'Port Said', 1, 64, 0),
(590, 'Qina', 1, 64, 0),
(591, 'Sawhaj', 1, 64, 0),
(592, 'Shamal Sina', 1, 64, 0),
(593, 'Suez', 1, 64, 0),
(594, 'Maekel', 1, 65, 0),
(595, 'El-AaiÃƒÂºn', 1, 66, 0),
(596, 'Andalusia', 1, 67, 0),
(597, 'Aragonia', 1, 67, 0),
(598, 'Asturia', 1, 67, 0),
(599, 'Balears', 1, 67, 0),
(600, 'Baskimaa', 1, 67, 0),
(601, 'Canary Islands', 1, 67, 0),
(602, 'Cantabria', 1, 67, 0),
(603, 'Castilla and LeÃƒÂ³n', 1, 67, 0),
(604, 'Extremadura', 1, 67, 0),
(605, 'Galicia', 1, 67, 0),
(606, 'Kastilia-La Mancha', 1, 67, 0),
(607, 'Katalonia', 1, 67, 0),
(608, 'La Rioja', 1, 67, 0),
(609, 'Madrid', 1, 67, 0),
(610, 'Murcia', 1, 67, 0),
(611, 'Navarra', 1, 67, 0),
(612, 'Valencia', 1, 67, 0),
(613, 'Harjumaa', 1, 68, 0),
(614, 'Tartumaa', 1, 68, 0),
(615, 'Addis Abeba', 1, 69, 0),
(616, 'Amhara', 1, 69, 0),
(617, 'Dire Dawa', 1, 69, 0),
(618, 'Oromia', 1, 69, 0),
(619, 'Tigray', 1, 69, 0),
(620, 'Newmaa', 1, 70, 0),
(621, 'PÃƒÂ¤ijÃƒÂ¤t-HÃƒÂ¤me', 1, 70, 0),
(622, 'Pirkanmaa', 1, 70, 0),
(623, 'Pohjois-Pohjanmaa', 1, 70, 0),
(624, 'Varsinais-Suomi', 1, 70, 0),
(625, 'Central', 1, 71, 0),
(626, 'East Falkland', 1, 72, 0),
(627, 'Alsace', 1, 73, 0),
(628, 'Aquitaine', 1, 73, 0),
(629, 'Auvergne', 1, 73, 0),
(630, 'ÃƒÅ½le-de-France', 1, 73, 0),
(631, 'Basse-Normandie', 1, 73, 0),
(632, 'Bourgogne', 1, 73, 0),
(633, 'Bretagne', 1, 73, 0),
(634, 'Centre', 1, 73, 0),
(635, 'Champagne-Ardenne', 1, 73, 0),
(636, 'Franche-ComtÃƒÂ©', 1, 73, 0),
(637, 'Haute-Normandie', 1, 73, 0),
(638, 'Languedoc-Roussillon', 1, 73, 0),
(639, 'Limousin', 1, 73, 0),
(640, 'Lorraine', 1, 73, 0),
(641, 'Midi-PyrÃƒÂ©nÃƒÂ©es', 1, 73, 0),
(642, 'Nord-Pas-de-Calais', 1, 73, 0),
(643, 'Pays de la Loire', 1, 73, 0),
(644, 'Picardie', 1, 73, 0),
(645, 'Provence-Alpes-CÃƒÂ´te', 1, 73, 0),
(646, 'RhÃƒÂ´ne-Alpes', 1, 73, 0),
(647, 'Streymoyar', 1, 74, 0),
(648, 'Chuuk', 1, 0, 0),
(649, 'Pohnpei', 1, 0, 0),
(650, 'Estuaire', 1, 76, 0),
(651, 'Ã¢â‚¬â€œ', 1, 77, 0),
(652, 'England', 1, 77, 0),
(653, 'Jersey', 1, 77, 0),
(654, 'North Ireland', 1, 77, 0),
(655, 'Scotland', 1, 77, 0),
(656, 'Wales', 1, 77, 0),
(657, 'Abhasia [Aphazeti]', 1, 78, 0),
(658, 'Adzaria [AtÃ…Â¡ara]', 1, 78, 0),
(659, 'Imereti', 1, 78, 0),
(660, 'Kvemo Kartli', 1, 78, 0),
(661, 'Tbilisi', 1, 78, 0),
(662, 'Ashanti', 1, 79, 0),
(663, 'Greater Accra', 1, 79, 0),
(664, 'Northern', 1, 79, 0),
(665, 'Western', 1, 79, 0),
(666, 'Ã¢â‚¬â€œ', 1, 80, 0),
(667, 'Conakry', 1, 81, 0),
(668, 'Basse-Terre', 1, 82, 0),
(669, 'Grande-Terre', 1, 82, 0),
(670, 'Banjul', 1, 83, 0),
(671, 'Kombo St Mary', 1, 83, 0),
(672, 'Bissau', 1, 84, 0),
(673, 'Bioko', 1, 85, 0),
(674, 'Attika', 1, 86, 0),
(675, 'Central Macedonia', 1, 86, 0),
(676, 'Crete', 1, 86, 0),
(677, 'Thessalia', 1, 86, 0),
(678, 'West Greece', 1, 86, 0),
(679, 'St George', 1, 87, 0),
(680, 'Kitaa', 1, 88, 0),
(681, 'Guatemala', 1, 89, 0),
(682, 'Quetzaltenango', 1, 89, 0),
(683, 'Cayenne', 1, 90, 0),
(684, 'Ã¢â‚¬â€œ', 1, 91, 0),
(685, 'Georgetown', 1, 92, 0),
(686, 'Hongkong', 1, 93, 0),
(687, 'Kowloon and New Kowl', 1, 93, 0),
(688, 'AtlÃƒÂ¡ntida', 1, 95, 0),
(689, 'CortÃƒÂ©s', 1, 95, 0),
(690, 'Distrito Central', 1, 95, 0),
(691, 'Grad Zagreb', 1, 96, 0),
(692, 'Osijek-Baranja', 1, 96, 0),
(693, 'Primorje-Gorski Kota', 1, 96, 0),
(694, 'Split-Dalmatia', 1, 96, 0),
(695, 'Nord', 1, 97, 0),
(696, 'Ouest', 1, 97, 0),
(697, 'Baranya', 1, 98, 0),
(698, 'BÃƒÂ¡cs-Kiskun', 1, 98, 0),
(699, 'Borsod-AbaÃƒÂºj-ZemplÃƒ', 1, 98, 0),
(700, 'Budapest', 1, 98, 0),
(701, 'CsongrÃƒÂ¡d', 1, 98, 0),
(702, 'FejÃƒÂ©r', 1, 98, 0),
(703, 'GyÃƒÂ¶r-Moson-Sopron', 1, 98, 0),
(704, 'HajdÃƒÂº-Bihar', 1, 98, 0),
(705, 'Szabolcs-SzatmÃƒÂ¡r-Be', 1, 98, 0),
(706, 'Aceh', 1, 99, 0),
(707, 'Bali', 1, 99, 0),
(708, 'Bengkulu', 1, 99, 0),
(709, 'Central Java', 1, 99, 0),
(710, 'East Java', 1, 99, 0),
(711, 'Jakarta Raya', 1, 99, 0),
(712, 'Jambi', 1, 99, 0),
(713, 'Kalimantan Barat', 1, 99, 0),
(714, 'Kalimantan Selatan', 1, 99, 0),
(715, 'Kalimantan Tengah', 1, 99, 0),
(716, 'Kalimantan Timur', 1, 99, 0),
(717, 'Lampung', 1, 99, 0),
(718, 'Molukit', 1, 99, 0),
(719, 'Nusa Tenggara Barat', 1, 99, 0),
(720, 'Nusa Tenggara Timur', 1, 99, 0),
(721, 'Riau', 1, 99, 0),
(722, 'Sulawesi Selatan', 1, 99, 0),
(723, 'Sulawesi Tengah', 1, 99, 0),
(724, 'Sulawesi Tenggara', 1, 99, 0),
(725, 'Sulawesi Utara', 1, 99, 0),
(726, 'Sumatera Barat', 1, 99, 0),
(727, 'Sumatera Selatan', 1, 99, 0),
(728, 'Sumatera Utara', 1, 99, 0),
(729, 'West Irian', 1, 99, 0),
(730, 'West Java', 1, 99, 0),
(731, 'Yogyakarta', 1, 99, 0),
(732, 'Andhra Pradesh', 1, 100, 0),
(733, 'Assam', 1, 100, 0),
(734, 'Bihar', 1, 100, 0),
(735, 'Chandigarh', 1, 100, 0),
(736, 'Chhatisgarh', 1, 100, 0),
(737, 'Delhi', 1, 100, 0),
(738, 'Gujarat', 1, 100, 0),
(739, 'Haryana', 1, 100, 0),
(740, 'Jammu and Kashmir', 1, 100, 0),
(741, 'Jharkhand', 1, 100, 0),
(742, 'Karnataka', 1, 100, 0),
(743, 'Kerala', 1, 100, 0),
(744, 'Madhya Pradesh', 1, 100, 0),
(745, 'Maharashtra', 1, 100, 0),
(746, 'Manipur', 1, 100, 0),
(747, 'Meghalaya', 1, 100, 0),
(748, 'Mizoram', 1, 100, 0),
(749, 'Orissa', 1, 100, 0),
(750, 'Pondicherry', 1, 100, 0),
(751, 'Punjab', 1, 100, 0),
(752, 'Rajasthan', 1, 100, 0),
(753, 'Tamil Nadu', 1, 100, 0),
(754, 'Tripura', 1, 100, 0),
(755, 'Uttar Pradesh', 1, 100, 0),
(756, 'Uttaranchal', 1, 100, 0),
(757, 'West Bengali', 1, 100, 0),
(758, 'Leinster', 1, 102, 0),
(759, 'Munster', 1, 102, 0),
(760, 'Ardebil', 1, 103, 0),
(761, 'Bushehr', 1, 103, 0),
(762, 'Chaharmahal va Bakht', 1, 103, 0),
(763, 'East Azerbaidzan', 1, 103, 0),
(764, 'Esfahan', 1, 103, 0),
(765, 'Fars', 1, 103, 0),
(766, 'Gilan', 1, 103, 0),
(767, 'Golestan', 1, 103, 0),
(768, 'Hamadan', 1, 103, 0),
(769, 'Hormozgan', 1, 103, 0),
(770, 'Ilam', 1, 103, 0),
(771, 'Kerman', 1, 103, 0),
(772, 'Kermanshah', 1, 103, 0),
(773, 'Khorasan', 1, 103, 0),
(774, 'Khuzestan', 1, 103, 0),
(775, 'Kordestan', 1, 103, 0),
(776, 'Lorestan', 1, 103, 0),
(777, 'Markazi', 1, 103, 0),
(778, 'Mazandaran', 1, 103, 0),
(779, 'Qazvin', 1, 103, 0),
(780, 'Qom', 1, 103, 0),
(781, 'Semnan', 1, 103, 0),
(782, 'Sistan va Baluchesta', 1, 103, 0),
(783, 'Teheran', 1, 103, 0),
(784, 'West Azerbaidzan', 1, 103, 0),
(785, 'Yazd', 1, 103, 0),
(786, 'Zanjan', 1, 103, 0),
(787, 'al-Anbar', 1, 104, 0),
(788, 'al-Najaf', 1, 104, 0),
(789, 'al-Qadisiya', 1, 104, 0),
(790, 'al-Sulaymaniya', 1, 104, 0),
(791, 'al-Tamim', 1, 104, 0),
(792, 'Babil', 1, 104, 0),
(793, 'Baghdad', 1, 104, 0),
(794, 'Basra', 1, 104, 0),
(795, 'DhiQar', 1, 104, 0),
(796, 'Diyala', 1, 104, 0),
(797, 'Irbil', 1, 104, 0),
(798, 'Karbala', 1, 104, 0),
(799, 'Maysan', 1, 104, 0),
(800, 'Ninawa', 1, 104, 0),
(801, 'Wasit', 1, 104, 0),
(802, 'HÃƒÂ¶fuÃƒÂ°borgarsvÃƒÂ¦ÃƒÂ°i', 1, 105, 0),
(803, 'Ha Darom', 1, 106, 0),
(804, 'Ha Merkaz', 1, 106, 0),
(805, 'Haifa', 1, 106, 0),
(806, 'Jerusalem', 1, 106, 0),
(807, 'Tel Aviv', 1, 106, 0),
(808, 'Abruzzit', 1, 107, 0),
(809, 'Apulia', 1, 107, 0),
(810, 'Calabria', 1, 107, 0),
(811, 'Campania', 1, 107, 0),
(812, 'Emilia-Romagna', 1, 107, 0),
(813, 'Friuli-Venezia Giuli', 1, 107, 0),
(814, 'Latium', 1, 107, 0),
(815, 'Liguria', 1, 107, 0),
(816, 'Lombardia', 1, 107, 0),
(817, 'Marche', 1, 107, 0),
(818, 'Piemonte', 1, 107, 0),
(819, 'Sardinia', 1, 107, 0),
(820, 'Sisilia', 1, 107, 0),
(821, 'Toscana', 1, 107, 0),
(822, 'Trentino-Alto Adige', 1, 107, 0),
(823, 'Umbria', 1, 107, 0),
(824, 'Veneto', 1, 107, 0),
(825, 'St. Andrew', 1, 108, 0),
(826, 'St. Catherine', 1, 108, 0),
(827, 'al-Zarqa', 1, 109, 0),
(828, 'Amman', 1, 109, 0),
(829, 'Irbid', 1, 109, 0),
(830, 'Aichi', 1, 110, 0),
(831, 'Akita', 1, 110, 0),
(832, 'Aomori', 1, 110, 0),
(833, 'Chiba', 1, 110, 0),
(834, 'Ehime', 1, 110, 0),
(835, 'Fukui', 1, 110, 0),
(836, 'Fukuoka', 1, 110, 0),
(837, 'Fukushima', 1, 110, 0),
(838, 'Gifu', 1, 110, 0),
(839, 'Gumma', 1, 110, 0),
(840, 'Hiroshima', 1, 110, 0),
(841, 'Hokkaido', 1, 110, 0),
(842, 'Hyogo', 1, 110, 0),
(843, 'Ibaragi', 1, 110, 0),
(844, 'Ishikawa', 1, 110, 0),
(845, 'Iwate', 1, 110, 0),
(846, 'Kagawa', 1, 110, 0),
(847, 'Kagoshima', 1, 110, 0),
(848, 'Kanagawa', 1, 110, 0),
(849, 'Kochi', 1, 110, 0),
(850, 'Kumamoto', 1, 110, 0),
(851, 'Kyoto', 1, 110, 0),
(852, 'Mie', 1, 110, 0),
(853, 'Miyagi', 1, 110, 0),
(854, 'Miyazaki', 1, 110, 0),
(855, 'Nagano', 1, 110, 0),
(856, 'Nagasaki', 1, 110, 0),
(857, 'Nara', 1, 110, 0),
(858, 'Niigata', 1, 110, 0),
(859, 'Oita', 1, 110, 0),
(860, 'Okayama', 1, 110, 0),
(861, 'Okinawa', 1, 110, 0),
(862, 'Osaka', 1, 110, 0),
(863, 'Saga', 1, 110, 0),
(864, 'Saitama', 1, 110, 0),
(865, 'Shiga', 1, 110, 0),
(866, 'Shimane', 1, 110, 0),
(867, 'Shizuoka', 1, 110, 0),
(868, 'Tochigi', 1, 110, 0),
(869, 'Tokushima', 1, 110, 0),
(870, 'Tokyo-to', 1, 110, 0),
(871, 'Tottori', 1, 110, 0),
(872, 'Toyama', 1, 110, 0),
(873, 'Wakayama', 1, 110, 0),
(874, 'Yamagata', 1, 110, 0),
(875, 'Yamaguchi', 1, 110, 0),
(876, 'Yamanashi', 1, 110, 0),
(877, 'Almaty', 1, 111, 0),
(878, 'Almaty Qalasy', 1, 111, 0),
(879, 'AqtÃƒÂ¶be', 1, 111, 0),
(880, 'Astana', 1, 111, 0),
(881, 'Atyrau', 1, 111, 0),
(882, 'East Kazakstan', 1, 111, 0),
(883, 'Mangghystau', 1, 111, 0),
(884, 'North Kazakstan', 1, 111, 0),
(885, 'Pavlodar', 1, 111, 0),
(886, 'Qaraghandy', 1, 111, 0),
(887, 'Qostanay', 1, 111, 0),
(888, 'Qyzylorda', 1, 111, 0),
(889, 'South Kazakstan', 1, 111, 0),
(890, 'Taraz', 1, 111, 0),
(891, 'West Kazakstan', 1, 111, 0),
(892, 'Central', 1, 112, 0),
(893, 'Coast', 1, 112, 0),
(894, 'Eastern', 1, 112, 0),
(895, 'Nairobi', 1, 112, 0),
(896, 'Nyanza', 1, 112, 0),
(897, 'Rift Valley', 1, 112, 0),
(898, 'Bishkek shaary', 1, 113, 0),
(899, 'Osh', 1, 113, 0),
(900, 'Battambang', 1, 114, 0),
(901, 'Phnom Penh', 1, 114, 0),
(902, 'Siem Reap', 1, 114, 0),
(903, 'South Tarawa', 1, 115, 0),
(904, 'St George Basseterre', 1, 116, 0),
(905, 'Cheju', 1, 117, 0),
(906, 'Chollabuk', 1, 117, 0),
(907, 'Chollanam', 1, 117, 0),
(908, 'Chungchongbuk', 1, 117, 0),
(909, 'Chungchongnam', 1, 117, 0),
(910, 'Inchon', 1, 117, 0),
(911, 'Kang-won', 1, 117, 0),
(912, 'Kwangju', 1, 117, 0),
(913, 'Kyonggi', 1, 117, 0),
(914, 'Kyongsangbuk', 1, 117, 0),
(915, 'Kyongsangnam', 1, 117, 0),
(916, 'Pusan', 1, 117, 0),
(917, 'Seoul', 1, 117, 0),
(918, 'Taegu', 1, 117, 0),
(919, 'Taejon', 1, 117, 0),
(920, 'al-Asima', 1, 118, 0),
(921, 'Hawalli', 1, 118, 0),
(922, 'Savannakhet', 1, 119, 0),
(923, 'Viangchan', 1, 119, 0),
(924, 'al-Shamal', 1, 120, 0),
(925, 'Beirut', 1, 120, 0),
(926, 'Montserrado', 1, 121, 0),
(927, 'al-Zawiya', 1, 122, 0),
(928, 'Bengasi', 1, 122, 0),
(929, 'Misrata', 1, 122, 0),
(930, 'Tripoli', 1, 122, 0),
(931, 'Castries', 1, 123, 0),
(932, 'Schaan', 1, 124, 0),
(933, 'Vaduz', 1, 124, 0),
(934, 'Central', 1, 125, 0),
(935, 'Northern', 1, 125, 0),
(936, 'Western', 1, 125, 0),
(937, 'Maseru', 1, 126, 0),
(938, 'Kaunas', 1, 127, 0),
(939, 'Klaipeda', 1, 127, 0),
(940, 'Panevezys', 1, 127, 0),
(941, 'Vilna', 1, 127, 0),
(942, 'Ã…Â iauliai', 1, 127, 0),
(943, 'Luxembourg', 1, 128, 0),
(944, 'Daugavpils', 1, 129, 0),
(945, 'Liepaja', 1, 129, 0),
(946, 'Riika', 1, 129, 0),
(947, 'Macau', 1, 130, 0),
(948, 'Casablanca', 1, 131, 0),
(949, 'Chaouia-Ouardigha', 1, 131, 0),
(950, 'Doukkala-Abda', 1, 131, 0),
(951, 'FÃƒÂ¨s-Boulemane', 1, 131, 0),
(952, 'Gharb-Chrarda-BÃƒÂ©ni', 1, 131, 0),
(953, 'Marrakech-Tensift-Al', 1, 131, 0),
(954, 'MeknÃƒÂ¨s-Tafilalet', 1, 131, 0),
(955, 'Oriental', 1, 131, 0),
(956, 'Rabat-SalÃƒÂ©-Zammour-', 1, 131, 0),
(957, 'Souss Massa-DraÃƒÂ¢', 1, 131, 0),
(958, 'Tadla-Azilal', 1, 131, 0),
(959, 'Tanger-TÃƒÂ©touan', 1, 131, 0),
(960, 'Taza-Al Hoceima-Taou', 1, 131, 0),
(961, 'Ã¢â‚¬â€œ', 1, 132, 0),
(962, 'Balti', 1, 133, 0),
(963, 'Bender (TÃƒÂ®ghina)', 1, 133, 0),
(964, 'Chisinau', 1, 133, 0),
(965, 'Dnjestria', 1, 133, 0),
(966, 'Antananarivo', 1, 134, 0),
(967, 'Fianarantsoa', 1, 134, 0),
(968, 'Mahajanga', 1, 134, 0),
(969, 'Toamasina', 1, 134, 0),
(970, 'Maale', 1, 135, 0),
(971, 'Aguascalientes', 1, 136, 0),
(972, 'Baja California', 1, 136, 0),
(973, 'Baja California Sur', 1, 136, 0),
(974, 'Campeche', 1, 136, 0),
(975, 'Chiapas', 1, 136, 0),
(976, 'Chihuahua', 1, 136, 0),
(977, 'Coahuila de Zaragoza', 1, 136, 0),
(978, 'Colima', 1, 136, 0),
(979, 'Distrito Federal', 1, 136, 0),
(980, 'Durango', 1, 136, 0),
(981, 'Guanajuato', 1, 136, 0),
(982, 'Guerrero', 1, 136, 0),
(983, 'Hidalgo', 1, 136, 0),
(984, 'Jalisco', 1, 136, 0),
(985, 'MÃƒÂ©xico', 1, 136, 0),
(986, 'MichoacÃƒÂ¡n de Ocampo', 1, 136, 0),
(987, 'Morelos', 1, 136, 0),
(988, 'Nayarit', 1, 136, 0),
(989, 'Nuevo LeÃƒÂ³n', 1, 136, 0),
(990, 'Oaxaca', 1, 136, 0),
(991, 'Puebla', 1, 136, 0),
(992, 'QuerÃƒÂ©taro', 1, 136, 0),
(993, 'QuerÃƒÂ©taro de Arteag', 1, 136, 0),
(994, 'Quintana Roo', 1, 136, 0),
(995, 'San Luis PotosÃƒÂ­', 1, 136, 0),
(996, 'Sinaloa', 1, 136, 0),
(997, 'Sonora', 1, 136, 0),
(998, 'Tabasco', 1, 136, 0),
(999, 'Tamaulipas', 1, 136, 0),
(1000, 'Veracruz', 1, 136, 0),
(1001, 'Veracruz-Llave', 1, 136, 0),
(1002, 'YucatÃƒÂ¡n', 1, 136, 0),
(1003, 'Zacatecas', 1, 136, 0),
(1004, 'Majuro', 1, 137, 0),
(1005, 'Skopje', 1, 138, 0),
(1006, 'Bamako', 1, 139, 0),
(1007, 'Inner Harbour', 1, 140, 0),
(1008, 'Outer Harbour', 1, 140, 0),
(1009, 'Irrawaddy [Ayeyarwad', 1, 141, 0),
(1010, 'Magwe [Magway]', 1, 141, 0),
(1011, 'Mandalay', 1, 141, 0),
(1012, 'Mon', 1, 141, 0),
(1013, 'Pegu [Bago]', 1, 141, 0),
(1014, 'Rakhine', 1, 141, 0),
(1015, 'Rangoon [Yangon]', 1, 141, 0),
(1016, 'Sagaing', 1, 141, 0),
(1017, 'Shan', 1, 141, 0),
(1018, 'Tenasserim [Tanintha', 1, 141, 0),
(1019, 'Ulaanbaatar', 1, 142, 0),
(1020, 'Saipan', 1, 143, 0),
(1021, 'Gaza', 1, 144, 0),
(1022, 'Inhambane', 1, 144, 0),
(1023, 'Manica', 1, 144, 0),
(1024, 'Maputo', 1, 144, 0),
(1025, 'Nampula', 1, 144, 0),
(1026, 'Sofala', 1, 144, 0),
(1027, 'Tete', 1, 144, 0),
(1028, 'ZambÃƒÂ©zia', 1, 144, 0),
(1029, 'Dakhlet NouÃƒÂ¢dhibou', 1, 145, 0),
(1030, 'Nouakchott', 1, 145, 0),
(1031, 'Plymouth', 1, 146, 0),
(1032, 'Fort-de-France', 1, 147, 0),
(1033, 'Plaines Wilhelms', 1, 148, 0),
(1034, 'Port-Louis', 1, 148, 0),
(1035, 'Blantyre', 1, 149, 0),
(1036, 'Lilongwe', 1, 149, 0),
(1037, 'Johor', 1, 150, 0),
(1038, 'Kedah', 1, 150, 0),
(1039, 'Kelantan', 1, 150, 0),
(1040, 'Negeri Sembilan', 1, 150, 0),
(1041, 'Pahang', 1, 150, 0),
(1042, 'Perak', 1, 150, 0),
(1043, 'Pulau Pinang', 1, 150, 0),
(1044, 'Sabah', 1, 150, 0),
(1045, 'Sarawak', 1, 150, 0),
(1046, 'Selangor', 1, 150, 0),
(1047, 'Terengganu', 1, 150, 0),
(1048, 'Wilayah Persekutuan', 1, 150, 0),
(1049, 'Mamoutzou', 1, 151, 0),
(1050, 'Khomas', 1, 152, 0),
(1051, 'Ã¢â‚¬â€œ', 1, 153, 0),
(1052, 'Maradi', 1, 154, 0),
(1053, 'Niamey', 1, 154, 0),
(1054, 'Zinder', 1, 154, 0),
(1055, 'Ã¢â‚¬â€œ', 1, 155, 0),
(1056, 'Anambra & Enugu & Eb', 1, 156, 0),
(1057, 'Bauchi & Gombe', 1, 156, 0),
(1058, 'Benue', 1, 156, 0),
(1059, 'Borno & Yobe', 1, 156, 0),
(1060, 'Cross River', 1, 156, 0),
(1061, 'Edo & Delta', 1, 156, 0),
(1062, 'Federal Capital Dist', 1, 156, 0),
(1063, 'Imo & Abia', 1, 156, 0),
(1064, 'Kaduna', 1, 156, 0),
(1065, 'Kano & Jigawa', 1, 156, 0),
(1066, 'Katsina', 1, 156, 0),
(1067, 'Kwara & Kogi', 1, 156, 0),
(1068, 'Lagos', 1, 156, 0),
(1069, 'Niger', 1, 156, 0),
(1070, 'Ogun', 1, 156, 0),
(1071, 'Ondo & Ekiti', 1, 156, 0),
(1072, 'Oyo & Osun', 1, 156, 0),
(1073, 'Plateau & Nassarawa', 1, 156, 0),
(1074, 'Rivers & Bayelsa', 1, 156, 0),
(1075, 'Sokoto & Kebbi & Zam', 1, 156, 0),
(1076, 'Chinandega', 1, 157, 0),
(1077, 'LeÃƒÂ³n', 1, 157, 0),
(1078, 'Managua', 1, 157, 0),
(1079, 'Masaya', 1, 157, 0),
(1080, 'Ã¢â‚¬â€œ', 1, 158, 0),
(1081, 'Drenthe', 1, 159, 0),
(1082, 'Flevoland', 1, 159, 0),
(1083, 'Gelderland', 1, 159, 0),
(1084, 'Groningen', 1, 159, 0),
(1085, 'Limburg', 1, 159, 0),
(1086, 'Noord-Brabant', 1, 159, 0),
(1087, 'Noord-Holland', 1, 159, 0),
(1088, 'Overijssel', 1, 159, 0),
(1089, 'Utrecht', 1, 159, 0),
(1090, 'Zuid-Holland', 1, 159, 0),
(1091, 'Akershus', 1, 160, 0),
(1092, 'Hordaland', 1, 160, 0),
(1093, 'Oslo', 1, 160, 0),
(1094, 'Rogaland', 1, 160, 0),
(1095, 'SÃƒÂ¸r-TrÃƒÂ¸ndelag', 1, 160, 0),
(1096, 'Central', 1, 161, 0),
(1097, 'Eastern', 1, 161, 0),
(1098, 'Western', 1, 161, 0),
(1099, 'Ã¢â‚¬â€œ', 1, 162, 0),
(1100, 'Auckland', 1, 163, 0),
(1101, 'Canterbury', 1, 163, 0),
(1102, 'Dunedin', 1, 163, 0),
(1103, 'Hamilton', 1, 163, 0),
(1104, 'Wellington', 1, 163, 0),
(1105, 'al-Batina', 1, 164, 0),
(1106, 'Masqat', 1, 164, 0),
(1107, 'Zufar', 1, 164, 0),
(1108, 'Baluchistan', 1, 165, 0),
(1109, 'Islamabad', 1, 165, 0),
(1110, 'Nothwest Border Prov', 1, 165, 0),
(1111, 'Punjab', 1, 165, 0),
(1112, 'Sind', 1, 165, 0),
(1113, 'Sindh', 1, 165, 0),
(1114, 'PanamÃƒÂ¡', 1, 166, 0),
(1115, 'San Miguelito', 1, 166, 0),
(1116, 'Ã¢â‚¬â€œ', 1, 167, 0),
(1117, 'Ancash', 1, 168, 0),
(1118, 'Arequipa', 1, 168, 0),
(1119, 'Ayacucho', 1, 168, 0),
(1120, 'Cajamarca', 1, 168, 0),
(1121, 'Callao', 1, 168, 0),
(1122, 'Cusco', 1, 168, 0),
(1123, 'Huanuco', 1, 168, 0),
(1124, 'Ica', 1, 168, 0),
(1125, 'JunÃƒÂ­n', 1, 168, 0),
(1126, 'La Libertad', 1, 168, 0),
(1127, 'Lambayeque', 1, 168, 0),
(1128, 'Lima', 1, 168, 0),
(1129, 'Loreto', 1, 168, 0),
(1130, 'Piura', 1, 168, 0),
(1131, 'Puno', 1, 168, 0),
(1132, 'Tacna', 1, 168, 0),
(1133, 'Ucayali', 1, 168, 0),
(1134, 'ARMM', 1, 169, 0),
(1135, 'Bicol', 1, 169, 0),
(1136, 'Cagayan Valley', 1, 169, 0),
(1137, 'CAR', 1, 169, 0),
(1138, 'Caraga', 1, 169, 0),
(1139, 'Central Luzon', 1, 169, 0),
(1140, 'Central Mindanao', 1, 169, 0),
(1141, 'Central Visayas', 1, 169, 0),
(1142, 'Eastern Visayas', 1, 169, 0),
(1143, 'Ilocos', 1, 169, 0),
(1144, 'National Capital Reg', 1, 169, 0),
(1145, 'Northern Mindanao', 1, 169, 0),
(1146, 'Southern Mindanao', 1, 169, 0),
(1147, 'Southern Tagalog', 1, 169, 0),
(1148, 'Western Mindanao', 1, 169, 0),
(1149, 'Western Visayas', 1, 169, 0),
(1150, 'Koror', 1, 170, 0),
(1151, 'National Capital Dis', 1, 171, 0),
(1152, 'Dolnoslaskie', 1, 172, 0),
(1153, 'Kujawsko-Pomorskie', 1, 172, 0),
(1154, 'Lodzkie', 1, 172, 0),
(1155, 'Lubelskie', 1, 172, 0),
(1156, 'Lubuskie', 1, 172, 0),
(1157, 'Malopolskie', 1, 172, 0),
(1158, 'Mazowieckie', 1, 172, 0),
(1159, 'Opolskie', 1, 172, 0),
(1160, 'Podkarpackie', 1, 172, 0),
(1161, 'Podlaskie', 1, 172, 0),
(1162, 'Pomorskie', 1, 172, 0),
(1163, 'Slaskie', 1, 172, 0),
(1164, 'Swietokrzyskie', 1, 172, 0),
(1165, 'Warminsko-Mazurskie', 1, 172, 0),
(1166, 'Wielkopolskie', 1, 172, 0),
(1167, 'Zachodnio-Pomorskie', 1, 172, 0),
(1168, 'Arecibo', 1, 173, 0),
(1169, 'BayamÃƒÂ³n', 1, 173, 0),
(1170, 'Caguas', 1, 173, 0),
(1171, 'Carolina', 1, 173, 0),
(1172, 'Guaynabo', 1, 173, 0),
(1173, 'MayagÃƒÂ¼ez', 1, 173, 0),
(1174, 'Ponce', 1, 173, 0),
(1175, 'San Juan', 1, 173, 0),
(1176, 'Toa Baja', 1, 173, 0),
(1177, 'Chagang', 1, 174, 0),
(1178, 'Hamgyong N', 1, 174, 0),
(1179, 'Hamgyong P', 1, 174, 0),
(1180, 'Hwanghae N', 1, 174, 0),
(1181, 'Hwanghae P', 1, 174, 0),
(1182, 'Kaesong-si', 1, 174, 0),
(1183, 'Kangwon', 1, 174, 0),
(1184, 'Nampo-si', 1, 174, 0),
(1185, 'Pyongan N', 1, 174, 0),
(1186, 'Pyongan P', 1, 174, 0),
(1187, 'Pyongyang-si', 1, 174, 0),
(1188, 'Yanggang', 1, 174, 0),
(1189, 'Braga', 1, 175, 0),
(1190, 'CoÃƒÂ­mbra', 1, 175, 0),
(1191, 'Lisboa', 1, 175, 0),
(1192, 'Porto', 1, 175, 0),
(1193, 'Alto ParanÃƒÂ¡', 1, 176, 0),
(1194, 'AsunciÃƒÂ³n', 1, 176, 0),
(1195, 'Central', 1, 176, 0),
(1196, 'Gaza', 1, 177, 0),
(1197, 'Hebron', 1, 177, 0),
(1198, 'Khan Yunis', 1, 177, 0),
(1199, 'Nablus', 1, 177, 0),
(1200, 'North Gaza', 1, 177, 0),
(1201, 'Rafah', 1, 177, 0),
(1202, 'Tahiti', 1, 178, 0),
(1203, 'Doha', 1, 179, 0),
(1204, 'Saint-Denis', 1, 180, 0),
(1205, 'Arad', 1, 181, 0),
(1206, 'Arges', 1, 181, 0),
(1207, 'Bacau', 1, 181, 0),
(1208, 'Bihor', 1, 181, 0),
(1209, 'Botosani', 1, 181, 0),
(1210, 'Braila', 1, 181, 0),
(1211, 'Brasov', 1, 181, 0),
(1212, 'Bukarest', 1, 181, 0),
(1213, 'Buzau', 1, 181, 0),
(1214, 'Caras-Severin', 1, 181, 0),
(1215, 'Cluj', 1, 181, 0),
(1216, 'Constanta', 1, 181, 0),
(1217, 'DÃƒÂ¢mbovita', 1, 181, 0),
(1218, 'Dolj', 1, 181, 0),
(1219, 'Galati', 1, 181, 0),
(1220, 'Gorj', 1, 181, 0),
(1221, 'Iasi', 1, 181, 0),
(1222, 'Maramures', 1, 181, 0),
(1223, 'Mehedinti', 1, 181, 0),
(1224, 'Mures', 1, 181, 0),
(1225, 'Neamt', 1, 181, 0),
(1226, 'Prahova', 1, 181, 0),
(1227, 'Satu Mare', 1, 181, 0),
(1228, 'Sibiu', 1, 181, 0),
(1229, 'Suceava', 1, 181, 0),
(1230, 'Timis', 1, 181, 0),
(1231, 'Tulcea', 1, 181, 0),
(1232, 'VÃƒÂ¢lcea', 1, 181, 0),
(1233, 'Vrancea', 1, 181, 0),
(1234, 'Adygea', 1, 182, 0),
(1235, 'Altai', 1, 182, 0),
(1236, 'Amur', 1, 182, 0),
(1237, 'Arkangeli', 1, 182, 0),
(1238, 'Astrahan', 1, 182, 0),
(1239, 'BaÃ…Â¡kortostan', 1, 182, 0),
(1240, 'Belgorod', 1, 182, 0),
(1241, 'Brjansk', 1, 182, 0),
(1242, 'Burjatia', 1, 182, 0),
(1243, 'Dagestan', 1, 182, 0),
(1244, 'Habarovsk', 1, 182, 0),
(1245, 'Hakassia', 1, 182, 0),
(1246, 'Hanti-Mansia', 1, 182, 0),
(1247, 'Irkutsk', 1, 182, 0),
(1248, 'Ivanovo', 1, 182, 0),
(1249, 'Jaroslavl', 1, 182, 0),
(1250, 'Kabardi-Balkaria', 1, 182, 0),
(1251, 'Kaliningrad', 1, 182, 0),
(1252, 'Kalmykia', 1, 182, 0),
(1253, 'Kaluga', 1, 182, 0),
(1254, 'KamtÃ…Â¡atka', 1, 182, 0),
(1255, 'KaratÃ…Â¡ai-TÃ…Â¡erkessi', 1, 182, 0),
(1256, 'Karjala', 1, 182, 0),
(1257, 'Kemerovo', 1, 182, 0),
(1258, 'Kirov', 1, 182, 0),
(1259, 'Komi', 1, 182, 0),
(1260, 'Kostroma', 1, 182, 0),
(1261, 'Krasnodar', 1, 182, 0),
(1262, 'Krasnojarsk', 1, 182, 0),
(1263, 'Kurgan', 1, 182, 0),
(1264, 'Kursk', 1, 182, 0),
(1265, 'Lipetsk', 1, 182, 0),
(1266, 'Magadan', 1, 182, 0),
(1267, 'Marinmaa', 1, 182, 0),
(1268, 'Mordva', 1, 182, 0),
(1269, 'Moscow (City)', 1, 182, 0),
(1270, 'Moskova', 1, 182, 0),
(1271, 'Murmansk', 1, 182, 0),
(1272, 'Nizni Novgorod', 1, 182, 0),
(1273, 'North Ossetia-Alania', 1, 182, 0),
(1274, 'Novgorod', 1, 182, 0),
(1275, 'Novosibirsk', 1, 182, 0),
(1276, 'Omsk', 1, 182, 0),
(1277, 'Orenburg', 1, 182, 0),
(1278, 'Orjol', 1, 182, 0),
(1279, 'Penza', 1, 182, 0),
(1280, 'Perm', 1, 182, 0),
(1281, 'Pietari', 1, 182, 0),
(1282, 'Pihkova', 1, 182, 0),
(1283, 'Primorje', 1, 182, 0),
(1284, 'Rjazan', 1, 182, 0),
(1285, 'Rostov-na-Donu', 1, 182, 0),
(1286, 'Saha (Jakutia)', 1, 182, 0),
(1287, 'Sahalin', 1, 182, 0),
(1288, 'Samara', 1, 182, 0),
(1289, 'Saratov', 1, 182, 0),
(1290, 'Smolensk', 1, 182, 0),
(1291, 'Stavropol', 1, 182, 0),
(1292, 'Sverdlovsk', 1, 182, 0),
(1293, 'Tambov', 1, 182, 0),
(1294, 'Tatarstan', 1, 182, 0),
(1295, 'Tjumen', 1, 182, 0),
(1296, 'Tomsk', 1, 182, 0),
(1297, 'Tula', 1, 182, 0),
(1298, 'Tver', 1, 182, 0),
(1299, 'Tyva', 1, 182, 0),
(1300, 'TÃ…Â¡eljabinsk', 1, 182, 0),
(1301, 'TÃ…Â¡etÃ…Â¡enia', 1, 182, 0),
(1302, 'TÃ…Â¡ita', 1, 182, 0),
(1303, 'TÃ…Â¡uvassia', 1, 182, 0),
(1304, 'Udmurtia', 1, 182, 0),
(1305, 'Uljanovsk', 1, 182, 0),
(1306, 'Vladimir', 1, 182, 0),
(1307, 'Volgograd', 1, 182, 0),
(1308, 'Vologda', 1, 182, 0),
(1309, 'Voronez', 1, 182, 0),
(1310, 'Yamalin Nenetsia', 1, 182, 0),
(1311, 'Kigali', 1, 183, 0),
(1312, 'al-Khudud al-Samaliy', 1, 184, 0),
(1313, 'al-Qasim', 1, 184, 0),
(1314, 'al-Sharqiya', 1, 184, 0),
(1315, 'Asir', 1, 184, 0),
(1316, 'Hail', 1, 184, 0),
(1317, 'Medina', 1, 184, 0),
(1318, 'Mekka', 1, 184, 0),
(1319, 'Najran', 1, 184, 0),
(1320, 'Qasim', 1, 184, 0),
(1321, 'Riad', 1, 184, 0),
(1322, 'Riyadh', 1, 184, 0),
(1323, 'Tabuk', 1, 184, 0),
(1324, 'al-Bahr al-Abyad', 1, 185, 0),
(1325, 'al-Bahr al-Ahmar', 1, 185, 0),
(1326, 'al-Jazira', 1, 185, 0),
(1327, 'al-Qadarif', 1, 185, 0),
(1328, 'Bahr al-Jabal', 1, 185, 0),
(1329, 'Darfur al-Janubiya', 1, 185, 0),
(1330, 'Darfur al-Shamaliya', 1, 185, 0),
(1331, 'Kassala', 1, 185, 0),
(1332, 'Khartum', 1, 185, 0),
(1333, 'Kurdufan al-Shamaliy', 1, 185, 0),
(1334, 'Cap-Vert', 1, 186, 0),
(1335, 'Diourbel', 1, 186, 0),
(1336, 'Kaolack', 1, 186, 0),
(1337, 'Saint-Louis', 1, 186, 0),
(1338, 'ThiÃƒÂ¨s', 1, 186, 0),
(1339, 'Ziguinchor', 1, 186, 0),
(1340, 'Ã¢â‚¬â€œ', 1, 187, 0),
(1341, 'Saint Helena', 1, 189, 0),
(1342, 'LÃƒÂ¤nsimaa', 1, 190, 0),
(1343, 'Honiara', 1, 191, 0),
(1344, 'Western', 1, 192, 0),
(1345, 'La Libertad', 1, 193, 0),
(1346, 'San Miguel', 1, 193, 0),
(1347, 'San Salvador', 1, 193, 0),
(1348, 'Santa Ana', 1, 193, 0),
(1349, 'San Marino', 1, 194, 0),
(1350, 'Serravalle/Dogano', 1, 194, 0),
(1351, 'Banaadir', 1, 195, 0),
(1352, 'Jubbada Hoose', 1, 195, 0),
(1353, 'Woqooyi Galbeed', 1, 195, 0),
(1354, 'Saint-Pierre', 1, 196, 0),
(1355, 'Aqua Grande', 1, 197, 0),
(1356, 'Paramaribo', 1, 198, 0),
(1357, 'Bratislava', 1, 199, 0),
(1358, 'VÃƒÂ½chodnÃƒÂ© Slovensko', 1, 199, 0),
(1359, 'Osrednjeslovenska', 1, 200, 0),
(1360, 'Podravska', 1, 200, 0),
(1361, 'Ãƒâ€“rebros lÃƒÂ¤n', 1, 201, 0),
(1362, 'East GÃƒÂ¶tanmaan lÃƒÂ¤n', 1, 201, 0),
(1363, 'GÃƒÂ¤vleborgs lÃƒÂ¤n', 1, 201, 0),
(1364, 'JÃƒÂ¶nkÃƒÂ¶pings lÃƒÂ¤n', 1, 201, 0),
(1365, 'Lisboa', 1, 201, 0),
(1366, 'SkÃƒÂ¥ne lÃƒÂ¤n', 1, 201, 0),
(1367, 'Uppsala lÃƒÂ¤n', 1, 201, 0),
(1368, 'VÃƒÂ¤sterbottens lÃƒÂ¤n', 1, 201, 0),
(1369, 'VÃƒÂ¤sternorrlands lÃƒÂ¤', 1, 201, 0),
(1370, 'VÃƒÂ¤stmanlands lÃƒÂ¤n', 1, 201, 0),
(1371, 'West GÃƒÂ¶tanmaan lÃƒÂ¤n', 1, 201, 0),
(1372, 'Hhohho', 1, 202, 0),
(1373, 'MahÃƒÂ©', 1, 203, 0),
(1374, 'al-Hasaka', 1, 204, 0),
(1375, 'al-Raqqa', 1, 204, 0),
(1376, 'Aleppo', 1, 204, 0),
(1377, 'Damascus', 1, 204, 0),
(1378, 'Damaskos', 1, 204, 0),
(1379, 'Dayr al-Zawr', 1, 204, 0),
(1380, 'Hama', 1, 204, 0),
(1381, 'Hims', 1, 204, 0),
(1382, 'Idlib', 1, 204, 0),
(1383, 'Latakia', 1, 204, 0),
(1384, 'Grand Turk', 1, 205, 0),
(1385, 'Chari-Baguirmi', 1, 206, 0),
(1386, 'Logone Occidental', 1, 206, 0),
(1387, 'Maritime', 1, 207, 0),
(1388, 'Bangkok', 1, 208, 0),
(1389, 'Chiang Mai', 1, 208, 0),
(1390, 'Khon Kaen', 1, 208, 0),
(1391, 'Nakhon Pathom', 1, 208, 0),
(1392, 'Nakhon Ratchasima', 1, 208, 0),
(1393, 'Nakhon Sawan', 1, 208, 0),
(1394, 'Nonthaburi', 1, 208, 0),
(1395, 'Songkhla', 1, 208, 0),
(1396, 'Ubon Ratchathani', 1, 208, 0),
(1397, 'Udon Thani', 1, 208, 0),
(1398, 'Karotegin', 1, 209, 0),
(1399, 'Khujand', 1, 209, 0),
(1400, 'Fakaofo', 1, 210, 0),
(1401, 'Ahal', 1, 211, 0),
(1402, 'Dashhowuz', 1, 211, 0),
(1403, 'Lebap', 1, 211, 0),
(1404, 'Mary', 1, 211, 0),
(1405, 'Dili', 1, 212, 0),
(1406, 'Tongatapu', 1, 213, 0),
(1407, 'Caroni', 1, 214, 0),
(1408, 'Port-of-Spain', 1, 214, 0),
(1409, 'Ariana', 1, 215, 0),
(1410, 'Biserta', 1, 215, 0),
(1411, 'GabÃƒÂ¨s', 1, 215, 0),
(1412, 'Kairouan', 1, 215, 0),
(1413, 'Sfax', 1, 215, 0),
(1414, 'Sousse', 1, 215, 0),
(1415, 'Tunis', 1, 215, 0),
(1416, 'Adana', 1, 216, 0),
(1417, 'Adiyaman', 1, 216, 0),
(1418, 'Afyon', 1, 216, 0),
(1419, 'Aksaray', 1, 216, 0),
(1420, 'Ankara', 1, 216, 0),
(1421, 'Antalya', 1, 216, 0),
(1422, 'Aydin', 1, 216, 0),
(1423, 'Ãƒâ€¡orum', 1, 216, 0),
(1424, 'Balikesir', 1, 216, 0),
(1425, 'Batman', 1, 216, 0),
(1426, 'Bursa', 1, 216, 0),
(1427, 'Denizli', 1, 216, 0),
(1428, 'Diyarbakir', 1, 216, 0),
(1429, 'Edirne', 1, 216, 0),
(1430, 'ElÃƒÂ¢zig', 1, 216, 0),
(1431, 'Erzincan', 1, 216, 0),
(1432, 'Erzurum', 1, 216, 0),
(1433, 'Eskisehir', 1, 216, 0),
(1434, 'Gaziantep', 1, 216, 0),
(1435, 'Hatay', 1, 216, 0),
(1436, 'IÃƒÂ§el', 1, 216, 0),
(1437, 'Isparta', 1, 216, 0),
(1438, 'Istanbul', 1, 216, 0),
(1439, 'Izmir', 1, 216, 0),
(1440, 'Kahramanmaras', 1, 216, 0),
(1441, 'KarabÃƒÂ¼k', 1, 216, 0),
(1442, 'Karaman', 1, 216, 0),
(1443, 'Kars', 1, 216, 0),
(1444, 'Kayseri', 1, 216, 0),
(1445, 'KÃƒÂ¼tahya', 1, 216, 0),
(1446, 'Kilis', 1, 216, 0),
(1447, 'Kirikkale', 1, 216, 0),
(1448, 'Kocaeli', 1, 216, 0),
(1449, 'Konya', 1, 216, 0),
(1450, 'Malatya', 1, 216, 0),
(1451, 'Manisa', 1, 216, 0),
(1452, 'Mardin', 1, 216, 0),
(1453, 'Ordu', 1, 216, 0),
(1454, 'Osmaniye', 1, 216, 0),
(1455, 'Sakarya', 1, 216, 0),
(1456, 'Samsun', 1, 216, 0),
(1457, 'Sanliurfa', 1, 216, 0),
(1458, 'Siirt', 1, 216, 0),
(1459, 'Sivas', 1, 216, 0),
(1460, 'Tekirdag', 1, 216, 0),
(1461, 'Tokat', 1, 216, 0),
(1462, 'Trabzon', 1, 216, 0),
(1463, 'Usak', 1, 216, 0),
(1464, 'Van', 1, 216, 0),
(1465, 'Zonguldak', 1, 216, 0),
(1466, 'Funafuti', 1, 217, 0),
(1467, '', 1, 218, 0),
(1468, 'Changhwa', 1, 218, 0),
(1469, 'Chiayi', 1, 218, 0),
(1470, 'Hsinchu', 1, 218, 0),
(1471, 'Hualien', 1, 218, 0),
(1472, 'Ilan', 1, 218, 0),
(1473, 'Kaohsiung', 1, 218, 0),
(1474, 'Keelung', 1, 218, 0),
(1475, 'Miaoli', 1, 218, 0),
(1476, 'Nantou', 1, 218, 0),
(1477, 'Pingtung', 1, 218, 0),
(1478, 'Taichung', 1, 218, 0),
(1479, 'Tainan', 1, 218, 0),
(1480, 'Taipei', 1, 218, 0),
(1481, 'Taitung', 1, 218, 0),
(1482, 'Taoyuan', 1, 218, 0),
(1483, 'YÃƒÂ¼nlin', 1, 218, 0),
(1484, 'Arusha', 1, 219, 0),
(1485, 'Dar es Salaam', 1, 219, 0),
(1486, 'Dodoma', 1, 219, 0),
(1487, 'Kilimanjaro', 1, 219, 0),
(1488, 'Mbeya', 1, 219, 0),
(1489, 'Morogoro', 1, 219, 0),
(1490, 'Mwanza', 1, 219, 0),
(1491, 'Tabora', 1, 219, 0),
(1492, 'Tanga', 1, 219, 0),
(1493, 'Zanzibar West', 1, 219, 0),
(1494, 'Central', 1, 220, 0),
(1495, 'Dnipropetrovsk', 1, 221, 0),
(1496, 'Donetsk', 1, 221, 0),
(1497, 'Harkova', 1, 221, 0),
(1498, 'Herson', 1, 221, 0),
(1499, 'Hmelnytskyi', 1, 221, 0),
(1500, 'Ivano-Frankivsk', 1, 221, 0),
(1501, 'Kiova', 1, 221, 0),
(1502, 'Kirovograd', 1, 221, 0),
(1503, 'Krim', 1, 221, 0),
(1504, 'Lugansk', 1, 221, 0),
(1505, 'Lviv', 1, 221, 0),
(1506, 'Mykolajiv', 1, 221, 0),
(1507, 'Odesa', 1, 221, 0),
(1508, 'Pultava', 1, 221, 0),
(1509, 'Rivne', 1, 221, 0),
(1510, 'Sumy', 1, 221, 0),
(1511, 'Taka-Karpatia', 1, 221, 0),
(1512, 'Ternopil', 1, 221, 0),
(1513, 'TÃ…Â¡erkasy', 1, 221, 0),
(1514, 'TÃ…Â¡ernigiv', 1, 221, 0),
(1515, 'TÃ…Â¡ernivtsi', 1, 221, 0),
(1516, 'Vinnytsja', 1, 221, 0),
(1517, 'Volynia', 1, 221, 0),
(1518, 'Zaporizzja', 1, 221, 0),
(1519, 'Zytomyr', 1, 221, 0),
(1520, 'Montevideo', 1, 223, 0),
(1521, 'Alabama', 1, 224, 0),
(1522, 'Alaska', 1, 224, 0),
(1523, 'Arizona', 1, 224, 0),
(1524, 'Arkansas', 1, 224, 0),
(1525, 'California', 1, 224, 0),
(1526, 'Colorado', 1, 224, 0),
(1527, 'Connecticut', 1, 224, 0),
(1528, 'District of Columbia', 1, 224, 0),
(1529, 'Florida', 1, 224, 0),
(1530, 'Georgia', 1, 224, 0),
(1531, 'Hawaii', 1, 224, 0),
(1532, 'Idaho', 1, 224, 0),
(1533, 'Illinois', 1, 224, 0),
(1534, 'Indiana', 1, 224, 0),
(1535, 'Iowa', 1, 224, 0),
(1536, 'Kansas', 1, 224, 0),
(1537, 'Kentucky', 1, 224, 0),
(1538, 'Louisiana', 1, 224, 0),
(1539, 'Maryland', 1, 224, 0),
(1540, 'Massachusetts', 1, 224, 0),
(1541, 'Michigan', 1, 224, 0),
(1542, 'Minnesota', 1, 224, 0),
(1543, 'Mississippi', 1, 224, 0),
(1544, 'Missouri', 1, 224, 0),
(1545, 'Montana', 1, 224, 0),
(1546, 'Nebraska', 1, 224, 0),
(1547, 'Nevada', 1, 224, 0),
(1548, 'New Hampshire', 1, 224, 0),
(1549, 'New Jersey', 1, 224, 0),
(1550, 'New Mexico', 1, 224, 0),
(1551, 'New York', 1, 224, 0),
(1552, 'North Carolina', 1, 224, 0),
(1553, 'Ohio', 1, 224, 0),
(1554, 'Oklahoma', 1, 224, 0),
(1555, 'Oregon', 1, 224, 0),
(1556, 'Pennsylvania', 1, 224, 0),
(1557, 'Rhode Island', 1, 224, 0),
(1558, 'South Carolina', 1, 224, 0),
(1559, 'South Dakota', 1, 224, 0),
(1560, 'Tennessee', 1, 224, 0),
(1561, 'Texas', 1, 224, 0),
(1562, 'Utah', 1, 224, 0),
(1563, 'Virginia', 1, 224, 0),
(1564, 'Washington', 1, 224, 0),
(1565, 'Wisconsin', 1, 224, 0),
(1566, 'Andijon', 1, 225, 0),
(1567, 'Buhoro', 1, 225, 0),
(1568, 'Cizah', 1, 225, 0),
(1569, 'Fargona', 1, 225, 0),
(1570, 'Karakalpakistan', 1, 225, 0),
(1571, 'Khorazm', 1, 225, 0),
(1572, 'Namangan', 1, 225, 0),
(1573, 'Navoi', 1, 225, 0),
(1574, 'Qashqadaryo', 1, 225, 0),
(1575, 'Samarkand', 1, 225, 0),
(1576, 'Surkhondaryo', 1, 225, 0),
(1577, 'Toskent', 1, 225, 0),
(1578, 'Toskent Shahri', 1, 225, 0),
(1579, 'Ã¢â‚¬â€œ', 1, 226, 0),
(1580, 'St George', 1, 0, 0),
(1581, '', 1, 228, 0),
(1582, 'AnzoÃƒÂ¡tegui', 1, 228, 0),
(1583, 'Apure', 1, 228, 0),
(1584, 'Aragua', 1, 228, 0),
(1585, 'Barinas', 1, 228, 0),
(1586, 'BolÃƒÂ­var', 1, 228, 0),
(1587, 'Carabobo', 1, 228, 0),
(1588, 'Distrito Federal', 1, 228, 0),
(1589, 'FalcÃƒÂ³n', 1, 228, 0),
(1590, 'GuÃƒÂ¡rico', 1, 228, 0),
(1591, 'Lara', 1, 228, 0),
(1592, 'MÃƒÂ©rida', 1, 228, 0),
(1593, 'Miranda', 1, 228, 0),
(1594, 'Monagas', 1, 228, 0),
(1595, 'Portuguesa', 1, 228, 0),
(1596, 'Sucre', 1, 228, 0),
(1597, 'TÃƒÂ¡chira', 1, 228, 0),
(1598, 'Trujillo', 1, 228, 0),
(1599, 'Yaracuy', 1, 228, 0),
(1600, 'Zulia', 1, 228, 0),
(1601, 'Tortola', 1, 229, 0),
(1602, 'St Thomas', 1, 230, 0),
(1603, 'An Giang', 1, 231, 0),
(1604, 'Ba Ria-Vung Tau', 1, 231, 0),
(1605, 'Bac Thai', 1, 231, 0),
(1606, 'Binh Dinh', 1, 231, 0),
(1607, 'Binh Thuan', 1, 231, 0),
(1608, 'Can Tho', 1, 231, 0),
(1609, 'Dac Lac', 1, 231, 0),
(1610, 'Dong Nai', 1, 231, 0),
(1611, 'Haiphong', 1, 231, 0),
(1612, 'Hanoi', 1, 231, 0),
(1613, 'Ho Chi Minh City', 1, 231, 0),
(1614, 'Khanh Hoa', 1, 231, 0),
(1615, 'Kien Giang', 1, 231, 0),
(1616, 'Lam Dong', 1, 231, 0),
(1617, 'Nam Ha', 1, 231, 0),
(1618, 'Nghe An', 1, 231, 0),
(1619, 'Quang Binh', 1, 231, 0),
(1620, 'Quang Nam-Da Nang', 1, 231, 0),
(1621, 'Quang Ninh', 1, 231, 0),
(1622, 'Thua Thien-Hue', 1, 231, 0),
(1623, 'Tien Giang', 1, 231, 0),
(1624, 'Shefa', 1, 232, 0),
(1625, 'Wallis', 1, 233, 0),
(1626, 'Upolu', 1, 234, 0),
(1627, 'Aden', 1, 235, 0),
(1628, 'Hadramawt', 1, 235, 0),
(1629, 'Hodeida', 1, 235, 0),
(1630, 'Ibb', 1, 235, 0),
(1631, 'Sanaa', 1, 235, 0),
(1632, 'Taizz', 1, 235, 0),
(1633, 'Central Serbia', 1, 236, 0),
(1634, 'Kosovo and Metohija', 1, 236, 0),
(1635, 'Montenegro', 1, 236, 0),
(1636, 'Vojvodina', 1, 236, 0),
(1637, 'Eastern Cape', 1, 237, 0),
(1638, 'Free State', 1, 237, 0),
(1639, 'Gauteng', 1, 237, 0),
(1640, 'KwaZulu-Natal', 1, 237, 0),
(1641, 'Mpumalanga', 1, 237, 0),
(1642, 'North West', 1, 237, 0),
(1643, 'Northern Cape', 1, 237, 0),
(1644, 'Western Cape', 1, 237, 0),
(1645, 'Central', 1, 238, 0),
(1646, 'Copperbelt', 1, 238, 0),
(1647, 'Lusaka', 1, 238, 0),
(1648, 'Bulawayo', 1, 239, 0),
(1649, 'Harare', 1, 239, 0),
(1650, 'Manicaland', 1, 239, 0),
(1651, 'Midlands', 1, 239, 0),
(1652, 'South Hill', 2, 240, 0),
(1653, 'The Valley', 2, 240, 0),
(1654, 'Oranjestad', 2, 240, 0),
(1655, 'Douglas', 2, 240, 0),
(1656, 'Gibraltar', 2, 240, 0),
(1657, 'Tamuning', 2, 240, 0),
(1658, 'AgaÃƒÂ±a', 2, 240, 0),
(1659, 'Flying Fish Cove', 2, 240, 0),
(1660, 'Monte-Carlo', 2, 240, 0),
(1661, 'Monaco-Ville', 2, 240, 0),
(1662, 'Yangor', 2, 240, 0),
(1663, 'Yaren', 2, 240, 0),
(1664, 'Alofi', 2, 240, 0),
(1665, 'Kingston', 2, 240, 0),
(1666, 'Adamstown', 2, 240, 0),
(1667, 'Singapore', 2, 240, 0),
(1668, 'NoumÃƒÂ©a', 2, 240, 0),
(1669, 'CittÃƒÂ  del Vaticano', 2, 240, 0),
(1670, 'Mazar-e-Sharif', 2, 241, 0),
(1671, 'Herat', 2, 242, 0),
(1672, 'Kabul', 2, 243, 0),
(1673, 'Qandahar', 2, 244, 0),
(1674, 'Lobito', 2, 245, 0),
(1675, 'Benguela', 2, 245, 0),
(1676, 'Huambo', 2, 246, 0),
(1677, 'Luanda', 2, 247, 0),
(1678, 'Namibe', 2, 248, 0),
(1679, 'South Hill', 2, 249, 0),
(1680, 'The Valley', 2, 249, 0),
(1681, 'Oranjestad', 2, 249, 0),
(1682, 'Douglas', 2, 249, 0),
(1683, 'Gibraltar', 2, 249, 0),
(1684, 'Tamuning', 2, 249, 0),
(1685, 'AgaÃƒÂ±a', 2, 249, 0),
(1686, 'Flying Fish Cove', 2, 249, 0),
(1687, 'Monte-Carlo', 2, 249, 0),
(1688, 'Monaco-Ville', 2, 249, 0),
(1689, 'Yangor', 2, 249, 0),
(1690, 'Yaren', 2, 249, 0),
(1691, 'Alofi', 2, 249, 0),
(1692, 'Kingston', 2, 249, 0),
(1693, 'Adamstown', 2, 249, 0),
(1694, 'Singapore', 2, 249, 0),
(1695, 'NoumÃƒÂ©a', 2, 249, 0),
(1696, 'CittÃƒÂ  del Vaticano', 2, 249, 0),
(1697, 'Tirana', 2, 250, 0),
(1698, 'Andorra la Vella', 2, 251, 0),
(1699, 'Willemstad', 2, 252, 0),
(1700, 'Abu Dhabi', 2, 253, 0),
(1701, 'al-Ayn', 2, 253, 0),
(1702, 'Ajman', 2, 254, 0),
(1703, 'Dubai', 2, 255, 0),
(1704, 'Sharja', 2, 256, 0),
(1705, 'La Matanza', 2, 257, 0),
(1706, 'Lomas de Zamora', 2, 257, 0),
(1707, 'Quilmes', 2, 257, 0),
(1708, 'Almirante Brown', 2, 257, 0),
(1709, 'La Plata', 2, 257, 0),
(1710, 'Mar del Plata', 2, 257, 0),
(1711, 'LanÃƒÂºs', 2, 257, 0),
(1712, 'Merlo', 2, 257, 0),
(1713, 'General San MartÃƒÂ­n', 2, 257, 0),
(1714, 'Moreno', 2, 257, 0),
(1715, 'Avellaneda', 2, 257, 0),
(1716, 'Tres de Febrero', 2, 257, 0),
(1717, 'MorÃƒÂ³n', 2, 257, 0);
INSERT INTO `graphic_location` (`location_id`, `name`, `location_type`, `parent_id`, `is_visible`) VALUES
(1718, 'Florencio Varela', 2, 257, 0);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `order_id` int(11) NOT NULL,
  `order_bayer_id` varchar(250) NOT NULL,
  `order_quantity` varchar(250) NOT NULL,
  `order_product_id` varchar(250) NOT NULL,
  `order_confirmation` varchar(250) NOT NULL,
  `order_status` enum('1','2') NOT NULL,
  `order_point` varchar(250) NOT NULL,
  `order_reff_id` varchar(250) NOT NULL,
  `order_users_name` varchar(250) NOT NULL,
  `order_users_id` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`order_id`, `order_bayer_id`, `order_quantity`, `order_product_id`, `order_confirmation`, `order_status`, `order_point`, `order_reff_id`, `order_users_name`, `order_users_id`) VALUES
(1, '1', '250', '1', 'Pending', '1', '25', '3', 'prashoon12', ''),
(2, '1', '1000', '1', 'Pending', '1', '100', '2', 'simple', ''),
(3, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(4, '1', '100', '1', 'Pending', '1', '10', '4', 'prashoon21', ''),
(5, '1', '100', '1', 'Pending', '1', '10', '5', 'gajonois2', ''),
(6, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(7, '1', '250', '1', 'Pending', '1', '25', '2', 'simple', ''),
(8, '1', '250', '1', 'Pending', '1', '25', '2', 'simple', ''),
(9, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(10, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(11, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(12, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(13, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(14, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(15, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(16, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(17, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(18, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(19, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(20, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(21, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(22, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(23, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(24, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(25, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(26, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(27, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(28, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(29, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(30, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(31, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(32, '1', '250', '1', 'Pending', '1', '25', '2', 'simple', ''),
(33, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(34, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(35, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(36, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(37, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(38, '1', '500', '1', 'Pending', '1', '50', '2', 'simple', ''),
(39, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(40, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(41, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(42, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(43, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(44, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', ''),
(45, '1', '100', '1', 'Pending', '1', '10', '2', 'simple', '');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `packages_id` int(11) NOT NULL,
  `packages_packages` varchar(100) NOT NULL,
  `packages_status` enum('1','2') NOT NULL,
  `packages_price` text NOT NULL,
  `packages_price1` text NOT NULL,
  `packages_percent` text NOT NULL,
  `packages_currency` text NOT NULL,
  `packages_days` int(11) NOT NULL,
  `packages_rotation_per` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`packages_id`, `packages_packages`, `packages_status`, `packages_price`, `packages_price1`, `packages_percent`, `packages_currency`, `packages_days`, `packages_rotation_per`) VALUES
(1, 'First', '1', '700', '6999', '20', 'zar', 7, '40'),
(2, 'Second', '1', '7000', '49999', '50', 'zar', 7, '40'),
(4, 'third', '1', '50 000', '100000', '100', 'zar', 7, '40'),
(5, 'fourth', '1', '100', '699', '10', 'zar', 7, '40');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(250) NOT NULL,
  `product_image` varchar(250) NOT NULL,
  `product_price` float NOT NULL,
  `product_point` varchar(250) NOT NULL,
  `product_status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_image`, `product_price`, `product_point`, `product_status`) VALUES
(1, 'product 3', 'head.png', 124, '5', '1');

-- --------------------------------------------------------

--
-- Table structure for table `referal_package_setting`
--

CREATE TABLE `referal_package_setting` (
  `referal_package_setting_id` int(11) NOT NULL,
  `referal_package_setting_percentage` text NOT NULL,
  `packages_id` int(11) NOT NULL,
  `referal_package_setting_day` int(11) NOT NULL,
  `referal_package_setting_bonus1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `referal_package_setting`
--

INSERT INTO `referal_package_setting` (`referal_package_setting_id`, `referal_package_setting_percentage`, `packages_id`, `referal_package_setting_day`, `referal_package_setting_bonus1`) VALUES
(1, '10', 0, 4, '40');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `report_region` text NOT NULL,
  `report_ref_bonus` text NOT NULL,
  `report_reg_bonus` text NOT NULL,
  `report_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `users_id` text NOT NULL,
  `doner_user_id` text NOT NULL,
  `donation` text NOT NULL,
  `report_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`report_region`, `report_ref_bonus`, `report_reg_bonus`, `report_date`, `users_id`, `doner_user_id`, `donation`, `report_id`) VALUES
('Register Bonus', '', '10', '2016-05-09 06:05:19', '4', '', '', 1),
('donation', '', '', '2016-05-09 06:05:19', 'admin', '4', '600', 2),
('Register Bonus', '', '100', '2016-05-09 06:07:19', '5', '', '', 3),
('donation', '', '', '2016-05-09 06:07:19', 'admin', '5', '50000', 4),
('Register Bonus', '', '50', '2016-05-09 06:09:10', '6', '', '', 5),
('add referal bonus ', '700', '', '2016-05-09 06:09:10', '4', '6', '', 6),
('donation', '', '', '2016-05-09 06:09:10', 'admin', '6', '6300', 7),
('Register Bonus', '', '20', '2016-05-09 06:33:58', '7', '', '', 8),
('add referal bonus ', '120', '', '2016-05-09 06:33:58', '7', '7', '', 9),
('donation', '', '', '2016-05-09 06:33:58', 'admin', '7', '1080', 10),
('Register Bonus', '', '20', '2016-05-09 08:45:23', '8', '', '', 11),
('donation', '', '', '2016-05-09 08:45:23', 'admin', '8', '700', 12);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `testimonial_id` int(11) NOT NULL,
  `testimonial_bonus_type` text NOT NULL,
  `testimonial_status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`testimonial_id`, `testimonial_bonus_type`, `testimonial_status`) VALUES
(1, 'Text bonus', 1),
(2, 'Audio Video', 1),
(3, 'Audio & Face Video', 1);

-- --------------------------------------------------------

--
-- Table structure for table `trequest`
--

CREATE TABLE `trequest` (
  `trequest_id` int(11) NOT NULL,
  `trequest_name` text NOT NULL,
  `trequest_surname` int(11) NOT NULL,
  `trequest_city` text NOT NULL,
  `trequest_country` text NOT NULL,
  `trequest_state` text NOT NULL,
  `trequest_username` text NOT NULL,
  `trequest_subject` text NOT NULL,
  `trequest_message` text NOT NULL,
  `trequest_type` text NOT NULL,
  `testimonial_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_name` varchar(250) NOT NULL,
  `users_fullname` varchar(100) NOT NULL,
  `users_email` varchar(250) NOT NULL,
  `users_phone` varchar(100) NOT NULL,
  `users_address` varchar(100) NOT NULL,
  `users_country` varchar(100) NOT NULL,
  `users_package` varchar(100) NOT NULL,
  `users_refname` varchar(100) NOT NULL,
  `users_bonus` int(11) NOT NULL,
  `users_pass` varchar(250) NOT NULL,
  `users_status` enum('1','2') NOT NULL,
  `users_reff_id` int(11) NOT NULL,
  `users_profit` float NOT NULL,
  `users_product_bay` varchar(250) NOT NULL,
  `users_reff_name` varchar(250) NOT NULL,
  `users_donation` text NOT NULL,
  `users_ref_bonus` text NOT NULL,
  `users_ref_date` text NOT NULL,
  `users_date` text NOT NULL,
  `users_profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_name`, `users_fullname`, `users_email`, `users_phone`, `users_address`, `users_country`, `users_package`, `users_refname`, `users_bonus`, `users_pass`, `users_status`, `users_reff_id`, `users_profit`, `users_product_bay`, `users_reff_name`, `users_donation`, `users_ref_bonus`, `users_ref_date`, `users_date`, `users_profile`) VALUES
(4, 'demo0001', 'demo000146', 'demo@gmail.com', '32345435435', 'fdgfdgfdg', 'Austria', '5', '', 10, '12345678', '1', 0, 0, '', '', '600', '700', '09-05-2016', '09-05-2016', ''),
(5, 'demo0002', 'demo0001dfgdf', 'admin@gmail.com', '436546546', 'fdgfdgfh', 'Afghanistan', '4', '', 100, '12345678', '1', 0, 0, '', '', '50000', '', '09-05-2016', '09-05-2016', ''),
(6, 'demo0003', 'demo0001gfdg', 'update@oxedes.com', '343543534', 'dfgfdgfd', 'Angola', '2', '', 50, '12345678', '1', 0, 0, '', 'demo0001', '7000', '', '09-05-2016', '09-05-2016', ''),
(7, 'testuser', 'test', 'sobha@oxedes.in', '345345435', 'dfgdgd', 'Andorra', '1', '', 20, 'abcd1234', '1', 0, 0, '', 'testuser', '1200', '120', '09-05-2016', '09-05-2016', ''),
(8, 'nwaiza', 'nwabisa', 'nwaiza.mpolweni@gmail.com', '0733228462', '7A Orsmond Terrace Grahamstown', 'South Africa', '1', '', 20, 'ozahlumza', '1', 0, 0, '', 'test@g.com', '700', '', '09-05-2016', '09-05-2016', '');

-- --------------------------------------------------------

--
-- Table structure for table `users2`
--

CREATE TABLE `users2` (
  `users_id` int(11) NOT NULL,
  `users_uname` varchar(100) NOT NULL,
  `users_fullname` varchar(100) NOT NULL,
  `users_pwd` varchar(100) NOT NULL,
  `users_email` varchar(100) NOT NULL,
  `users_phone` varchar(100) NOT NULL,
  `users_address` varchar(100) NOT NULL,
  `users_country` varchar(100) NOT NULL,
  `users_bonus` int(11) NOT NULL,
  `users_package` varchar(100) NOT NULL,
  `users_refuname` varchar(100) NOT NULL,
  `users_status` enum('1','2') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users2`
--

INSERT INTO `users2` (`users_id`, `users_uname`, `users_fullname`, `users_pwd`, `users_email`, `users_phone`, `users_address`, `users_country`, `users_bonus`, `users_package`, `users_refuname`, `users_status`) VALUES
(2, 'push4udsfsdf', 'sdfsdf', 'mmmmmmmm', 'manish@oxedes.in', '32423432423', 'sdfsdfsdafasd', 'Australia', 1, '1', 'admin', '1');

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `withdrawal_id` int(11) NOT NULL,
  `withdrawal_amount` text NOT NULL,
  `withdrawal_date` text NOT NULL,
  `withdrawal_status` text NOT NULL,
  `users_name` text NOT NULL,
  `users_id` int(11) NOT NULL,
  `withdrawal_edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `with_setting`
--

CREATE TABLE `with_setting` (
  `with_setting_id` int(11) NOT NULL,
  `with_setting_percentage` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `with_setting`
--

INSERT INTO `with_setting` (`with_setting_id`, `with_setting_percentage`) VALUES
(1, '30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `6btb_admin`
--
ALTER TABLE `6btb_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `6btb_register_package_setting`
--
ALTER TABLE `6btb_register_package_setting`
  ADD PRIMARY KEY (`register_package_setting_id`);

--
-- Indexes for table `6btb_setting`
--
ALTER TABLE `6btb_setting`
  ADD PRIMARY KEY (`setting_id`);

--
-- Indexes for table `bitcoins`
--
ALTER TABLE `bitcoins`
  ADD PRIMARY KEY (`bitcoins_id`);

--
-- Indexes for table `contest`
--
ALTER TABLE `contest`
  ADD PRIMARY KEY (`contest_id`);

--
-- Indexes for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  ADD PRIMARY KEY (`paymentID`),
  ADD KEY `boxID` (`boxID`),
  ADD KEY `boxType` (`boxType`),
  ADD KEY `userID` (`userID`),
  ADD KEY `countryID` (`countryID`),
  ADD KEY `orderID` (`orderID`),
  ADD KEY `amount` (`amount`),
  ADD KEY `amountUSD` (`amountUSD`),
  ADD KEY `coinLabel` (`coinLabel`),
  ADD KEY `unrecognised` (`unrecognised`),
  ADD KEY `addr` (`addr`),
  ADD KEY `txID` (`txID`),
  ADD KEY `txDate` (`txDate`),
  ADD KEY `txConfirmed` (`txConfirmed`),
  ADD KEY `txCheckDate` (`txCheckDate`),
  ADD KEY `processed` (`processed`),
  ADD KEY `processedDate` (`processedDate`),
  ADD KEY `recordCreated` (`recordCreated`),
  ADD KEY `key1` (`boxID`,`orderID`),
  ADD KEY `key2` (`boxID`,`orderID`,`userID`),
  ADD KEY `key3` (`boxID`,`orderID`,`userID`,`txID`);

--
-- Indexes for table `emailtext`
--
ALTER TABLE `emailtext`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graphic_location`
--
ALTER TABLE `graphic_location`
  ADD PRIMARY KEY (`location_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`packages_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `referal_package_setting`
--
ALTER TABLE `referal_package_setting`
  ADD PRIMARY KEY (`referal_package_setting_id`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`report_id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`testimonial_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `users2`
--
ALTER TABLE `users2`
  ADD PRIMARY KEY (`users_id`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`withdrawal_id`);

--
-- Indexes for table `with_setting`
--
ALTER TABLE `with_setting`
  ADD PRIMARY KEY (`with_setting_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `6btb_register_package_setting`
--
ALTER TABLE `6btb_register_package_setting`
  MODIFY `register_package_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `bitcoins`
--
ALTER TABLE `bitcoins`
  MODIFY `bitcoins_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `contest`
--
ALTER TABLE `contest`
  MODIFY `contest_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `crypto_payments`
--
ALTER TABLE `crypto_payments`
  MODIFY `paymentID` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `emailtext`
--
ALTER TABLE `emailtext`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `graphic_location`
--
ALTER TABLE `graphic_location`
  MODIFY `location_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6178;
--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `packages_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `referal_package_setting`
--
ALTER TABLE `referal_package_setting`
  MODIFY `referal_package_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `report_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users2`
--
ALTER TABLE `users2`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `withdrawal_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `with_setting`
--
ALTER TABLE `with_setting`
  MODIFY `with_setting_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
