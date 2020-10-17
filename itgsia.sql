-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 15, 2019 at 10:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `itgsia`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `country` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `country`) VALUES
(1, 'Afghanistan'),
(2, 'Åland Islands'),
(3, 'Albania'),
(4, 'Algeria'),
(5, 'American Samoa'),
(6, 'Andorra'),
(7, 'Angola'),
(8, 'Anguilla'),
(9, 'Antarctica'),
(10, 'Antigua and Barbuda'),
(11, 'Argentina'),
(12, 'Armenia'),
(13, 'Aruba'),
(14, 'Australia'),
(15, 'Austria'),
(16, 'Azerbaijan'),
(17, 'Bahamas'),
(18, 'Bahrain'),
(19, 'Bangladesh'),
(20, 'Barbados'),
(21, 'Belarus'),
(22, 'Belgium'),
(23, 'Belize'),
(24, 'Benin'),
(25, 'Bermuda'),
(26, 'Bhutan'),
(27, 'Bolivia'),
(28, 'Bonaire'),
(29, 'Bosnia and Herzegovina'),
(30, 'Botswana'),
(31, 'Bouvet Island'),
(32, 'Brazil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Cambodia'),
(39, 'Cameroon'),
(40, 'Canada'),
(41, 'Cape Verde'),
(42, 'Cayman Islands'),
(43, 'Central African Republic'),
(44, 'Chad'),
(45, 'Chile'),
(46, 'China'),
(47, 'Christmas Island'),
(48, 'Cocos (Keeling) Islands'),
(49, 'Colombia'),
(50, 'Comoros'),
(51, 'Congo'),
(52, 'Congo'),
(53, 'Cook Islands'),
(54, 'Costa Rica'),
(55, 'Côte d\'Ivoire'),
(56, 'Croatia'),
(57, 'Cuba'),
(58, 'Curaçao'),
(59, 'Cyprus'),
(60, 'Czech Republic'),
(61, 'Denmark'),
(62, 'Djibouti'),
(63, 'Dominica'),
(64, 'Dominican Republic'),
(65, 'Ecuador'),
(66, 'Egypt'),
(67, 'El Salvador'),
(68, 'Equatorial Guinea'),
(69, 'Eritrea'),
(70, 'Estonia'),
(71, 'Ethiopia'),
(72, 'Falkland Islands (Malvinas)'),
(73, 'Faroe Islands'),
(74, 'Fiji'),
(75, 'Finland'),
(76, 'France'),
(77, 'French Guiana'),
(78, 'French Polynesia'),
(79, 'French Southern Territories'),
(80, 'Gabon'),
(81, 'Gambia'),
(82, 'Georgia'),
(83, 'Germany'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Greece'),
(87, 'Greenland'),
(88, 'Grenada'),
(89, 'Guadeloupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guernsey'),
(93, 'Guinea'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haiti'),
(97, 'Heard Island and McDonald Islands'),
(98, 'Holy See (Vatican City State)'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungary'),
(102, 'Iceland'),
(103, 'India'),
(104, 'Indonesia'),
(105, 'Iran'),
(106, 'Iraq'),
(107, 'Ireland'),
(108, 'Isle of Man'),
(109, 'Israel'),
(110, 'Italy'),
(111, 'Jamaica'),
(112, 'Japan'),
(113, 'Jersey'),
(114, 'Jordan'),
(115, 'Kazakhstan'),
(116, 'Kenya'),
(117, 'Kiribati'),
(118, 'Korea'),
(119, 'Korea'),
(120, 'Kuwait'),
(121, 'Kyrgyzstan'),
(122, 'Lao People\'s Democratic Republic'),
(123, 'Latvia'),
(124, 'Lebanon'),
(125, 'Lesotho'),
(126, 'Liberia'),
(127, 'Libya'),
(128, 'Liechtenstein'),
(129, 'Lithuania'),
(130, 'Luxembourg'),
(131, 'Macao'),
(132, 'Macedonia'),
(133, 'Madagascar'),
(134, 'Malawi'),
(135, 'Malaysia'),
(136, 'Maldives'),
(137, 'Mali'),
(138, 'Malta'),
(139, 'Marshall Islands'),
(140, 'Martinique'),
(141, 'Mauritania'),
(142, 'Mauritius'),
(143, 'Mayotte'),
(144, 'Mexico'),
(145, 'Micronesia'),
(146, 'Moldova'),
(147, 'Monaco'),
(148, 'Mongolia'),
(149, 'Montenegro'),
(150, 'Montserrat'),
(151, 'Morocco'),
(152, 'Mozambique'),
(153, 'Myanmar'),
(154, 'Namibia'),
(155, 'Nauru'),
(156, 'Nepal'),
(157, 'Netherlands'),
(158, 'New Caledonia'),
(159, 'New Zealand'),
(160, 'Nicaragua'),
(161, 'Niger'),
(162, 'Nigeria'),
(163, 'Niue'),
(164, 'Norfolk Island'),
(165, 'Northern Mariana Islands'),
(166, 'Norway'),
(167, 'Oman'),
(168, 'Pakistan'),
(169, 'Palau'),
(170, 'Palestinian Territory'),
(171, 'Panama'),
(172, 'Papua New Guinea'),
(173, 'Paraguay'),
(174, 'Peru'),
(175, 'Philippines'),
(176, 'Pitcairn'),
(177, 'Poland'),
(178, 'Portugal'),
(179, 'Puerto Rico'),
(180, 'Qatar'),
(181, 'Réunion'),
(182, 'Romania'),
(183, 'Russian Federation'),
(184, 'Rwanda'),
(185, 'Saint Barthélemy'),
(186, 'Saint Helena'),
(187, 'Saint Kitts and Nevis'),
(188, 'Saint Lucia'),
(189, 'Saint Martin (French part)'),
(190, 'Saint Pierre and Miquelon'),
(191, 'Saint Vincent and the Grenadines'),
(192, 'Samoa'),
(193, 'San Marino'),
(194, 'Sao Tome and Principe'),
(195, 'Saudi Arabia'),
(196, 'Senegal'),
(197, 'Serbia'),
(198, 'Seychelles'),
(199, 'Sierra Leone'),
(200, 'Singapore'),
(201, 'Sint Maarten (Dutch part)'),
(202, 'Slovakia'),
(203, 'Slovenia'),
(204, 'Solomon Islands'),
(205, 'Somalia'),
(206, 'South Africa'),
(207, 'South Georgia and the South Sandwich Islands'),
(208, 'South Sudan'),
(209, 'Spain'),
(210, 'Sri Lanka'),
(211, 'Sudan'),
(212, 'Suriname'),
(213, 'Svalbard and Jan Mayen'),
(214, 'Swaziland'),
(215, 'Sweden'),
(216, 'Switzerland'),
(217, 'Syrian Arab Republic'),
(218, 'Taiwan'),
(219, 'Tajikistan'),
(220, 'Tanzania'),
(221, 'Thailand'),
(222, 'Timor-Leste'),
(223, 'Togo'),
(224, 'Tokelau'),
(225, 'Tonga'),
(226, 'Trinidad and Tobago'),
(227, 'Tunisia'),
(228, 'Turkey'),
(229, 'Turkmenistan'),
(230, 'Turks and Caicos Islands'),
(231, 'Tuvalu'),
(232, 'Uganda'),
(233, 'Ukraine'),
(234, 'United Arab Emirates'),
(235, 'United Kingdom'),
(236, 'United States'),
(237, 'United States Minor Outlying Islands'),
(238, 'Uruguay'),
(239, 'Uzbekistan'),
(240, 'Vanuatu'),
(241, 'Venezuela'),
(242, 'Viet Nam'),
(243, 'Virgin Islands'),
(244, 'Virgin Islands'),
(245, 'Wallis and Futuna'),
(246, 'Western Sahara'),
(247, 'Yemen'),
(248, 'Zambia'),
(249, 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `fields`
--

CREATE TABLE `fields` (
  `id` int(11) NOT NULL,
  `field` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fields`
--

INSERT INTO `fields` (`id`, `field`) VALUES
(1, 'technology'),
(2, 'science'),
(3, 'engineering');

-- --------------------------------------------------------

--
-- Table structure for table `fostuds`
--

CREATE TABLE `fostuds` (
  `id` int(11) NOT NULL,
  `fostud` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fostuds`
--

INSERT INTO `fostuds` (`id`, `fostud`) VALUES
(1, 'Aerospace Engineering'),
(2, 'Architectural Engineering'),
(3, 'Architecture'),
(4, 'Astronomy and Astrophysics'),
(5, 'Atmospheric Sciences and Meteorology'),
(6, 'Biochemical Sciences'),
(7, 'Biological Engineering'),
(8, 'Biology'),
(9, 'Biomedical Engineering'),
(10, 'Botany'),
(11, 'Chemical Engineering'),
(12, 'Chemistry'),
(13, 'Civil Engineering'),
(14, 'Cognitive Science and Biopsychology'),
(15, 'Communication Technologies'),
(16, 'Computer Administration Management and Security'),
(17, 'Computer and Information Systems'),
(18, 'Computer Engineering'),
(19, 'Computer Networking and Telecommunications'),
(20, 'Computer Programming and Data Processing'),
(21, 'Computer Science'),
(22, 'Ecology'),
(23, 'Electrical Engineering'),
(24, 'Electrical Engineering Technology'),
(25, 'Engineering and Industrial Management'),
(26, 'Engineering Mechanics Physics and Science'),
(27, 'Engineering Technologies'),
(28, 'Environmental Engineering'),
(29, 'Environmental Science'),
(30, 'General Engineering'),
(31, 'Genetics'),
(32, 'Geological and Geophysical Engineering'),
(33, 'Geology and Earth Science'),
(34, 'Geosciences'),
(35, 'Industrial and Manufacturing Engineering'),
(36, 'Industrial Production Technologies'),
(37, 'Information Sciences'),
(38, 'Materials Engineering and Materials Science'),
(39, 'Materials Science'),
(40, 'Mathematics and Computer Science'),
(41, 'Mechanical Engineering'),
(42, 'Mechanical Engineering Related Technologies'),
(43, 'Metallurgical Engineering'),
(44, 'Microbiology'),
(45, 'Mining and Mineral Engineering'),
(46, 'Miscellaneous Biology'),
(47, 'Miscellaneous Engineering'),
(48, 'Miscellaneous Engineering Technologies'),
(49, 'Molecular Biology'),
(50, 'Multi-disciplinary or General Science'),
(51, 'Nano-technology'),
(52, 'Naval Architecture and Marine Engineering'),
(53, 'Neuroscience'),
(54, 'Nuclear Engineering'),
(55, 'Nuclear'),
(56, 'Oceanography'),
(57, 'Petroleum Engineering'),
(58, 'Pharmacology'),
(59, 'Physics'),
(60, 'Physiology'),
(61, 'Zoology');

-- --------------------------------------------------------

--
-- Table structure for table `gcontactinfo`
--

CREATE TABLE `gcontactinfo` (
  `g_id` int(11) NOT NULL,
  `contactinfo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gcontactinfo`
--

INSERT INTO `gcontactinfo` (`g_id`, `contactinfo`) VALUES
(1, 'burcuture@gmail.com'),
(2, 'ssen@gmail.com'),
(4, 'murat_pekin@gmail.com'),
(5, 'mhanim@gmail.com'),
(6, 'abunel@gmail.com'),
(7, 'hasan_mentese@gmail.com'),
(8, 'email@gmail.com'),
(9, 'email@gmail.com'),
(10, 'email@gmail.com'),
(11, 'dcandan@aci.k12.tr');

-- --------------------------------------------------------

--
-- Table structure for table `gfields`
--

CREATE TABLE `gfields` (
  `g_id` int(11) NOT NULL,
  `field_id` int(11) NOT NULL,
  `fostud_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gfields`
--

INSERT INTO `gfields` (`g_id`, `field_id`, `fostud_id`) VALUES
(1, 3, 28),
(2, 2, 8),
(4, 1, 21),
(5, 1, 14),
(6, 3, 18),
(7, 3, 18),
(8, 3, 3),
(9, 3, 11),
(10, 1, 14),
(11, 1, 17);

-- --------------------------------------------------------

--
-- Table structure for table `gjobinformation`
--

CREATE TABLE `gjobinformation` (
  `g_id` int(11) NOT NULL,
  `profession` text NOT NULL,
  `jobtitle` text NOT NULL,
  `jobdescription` longtext NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gjobinformation`
--

INSERT INTO `gjobinformation` (`g_id`, `profession`, `jobtitle`, `jobdescription`, `company`) VALUES
(1, 'Environment Engineer', 'Environment Engineer', 'I present workshops and similar things to educate companies and their employees on how to better protect the environment. In my current job, I am responsible for making sure the products being used are not harmful to the environment.', 'Six Senses'),
(4, 'Computer Scientist', 'Computer Scientist', '', 'Amazon'),
(5, 'Cognitive Scientist', 'Developer', 'I specialize in developing software in the field of cognitive science.', ''),
(6, 'Computer Engineer', 'Computer Engineer', 'I work at a company that develops software for RFID.', 'Takipsan'),
(7, 'Computer Engineer', 'Computer Engineer', 'I work at a firm, helping them out with their software.', '-'),
(8, 'profession', '', '', ''),
(9, 'chemical engineer', '', '', ''),
(10, 'profession', 'jobtitle', '', ''),
(11, 'Teacher', 'Computer Teacher', 'I work for a school and teach computer science.', 'ACI');

-- --------------------------------------------------------

--
-- Table structure for table `glocation`
--

CREATE TABLE `glocation` (
  `g_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `city` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `glocation`
--

INSERT INTO `glocation` (`g_id`, `country_id`, `city`) VALUES
(1, 228, 'Mugla'),
(2, 236, 'Boston'),
(4, 236, 'San Francisco'),
(5, 157, ''),
(6, 228, 'Izmir'),
(7, 228, 'Istanbul'),
(8, 4, ''),
(9, 3, ''),
(10, 4, ''),
(11, 228, 'Izmir');

-- --------------------------------------------------------

--
-- Table structure for table `gprojects`
--

CREATE TABLE `gprojects` (
  `g_id` int(11) NOT NULL,
  `project` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gprojects`
--

INSERT INTO `gprojects` (`g_id`, `project`) VALUES
(2, 'I have devoted my time to research for the past couple of years.'),
(4, ''),
(5, 'I have been involved in research projects.'),
(6, 'I have developed software for many different companies.'),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, '');

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(11) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `yograd` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `fname`, `lname`, `yograd`) VALUES
(1, 'Burcu', 'Ture', 2005),
(2, 'Sehrazat', 'Sen', 1997),
(4, 'Murat', 'Pekin', 1998),
(5, 'Melek', 'Hanimeli', 2001),
(6, 'Arzu', 'Bunel', 2000),
(7, 'Hasan', 'Mentese', 1990),
(8, 'Irmak', 'Bukey', 2019),
(9, 'Zeynep', 'Dogan', 2019),
(10, 'First name', 'Lastname', 2019),
(11, 'Dogukan', 'Candan', 2006);

-- --------------------------------------------------------

--
-- Stand-in structure for view `graduateview`
-- (See below for the actual view)
--
CREATE TABLE `graduateview` (
`fname` text
,`lname` text
,`yograd` int(4)
,`field` text
,`fostud` text
,`profession` text
,`jobtitle` text
,`jobdescription` longtext
,`company` text
,`project` longtext
,`country` text
,`city` text
,`contactinfo` text
);

-- --------------------------------------------------------

--
-- Structure for view `graduateview`
--
DROP TABLE IF EXISTS `graduateview`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `graduateview`  AS  select `graduates`.`fname` AS `fname`,`graduates`.`lname` AS `lname`,`graduates`.`yograd` AS `yograd`,`fields`.`field` AS `field`,`fostuds`.`fostud` AS `fostud`,`gjobinformation`.`profession` AS `profession`,`gjobinformation`.`jobtitle` AS `jobtitle`,`gjobinformation`.`jobdescription` AS `jobdescription`,`gjobinformation`.`company` AS `company`,`gprojects`.`project` AS `project`,`countries`.`country` AS `country`,`glocation`.`city` AS `city`,`gcontactinfo`.`contactinfo` AS `contactinfo` from ((((((((`countries` join `fields`) join `fostuds`) join `gcontactinfo`) join `gfields`) join `gjobinformation`) join `glocation`) join `gprojects`) join `graduates`) where ((`gfields`.`g_id` = `graduates`.`id`) and (`gcontactinfo`.`g_id` = `graduates`.`id`) and (`gjobinformation`.`g_id` = `graduates`.`id`) and (`glocation`.`g_id` = `graduates`.`id`) and (`gprojects`.`g_id` = `graduates`.`id`) and (`gfields`.`field_id` = `fields`.`id`) and (`gfields`.`fostud_id` = `fostuds`.`id`) and (`glocation`.`country_id` = `countries`.`id`)) ;

--
-- Indices for dumped tables
--

--
-- Indices for table `countries`
--
ALTER TABLE `countries`
  ADD KEY `id` (`id`);

--
-- Indices for table `fields`
--
ALTER TABLE `fields`
  ADD KEY `id` (`id`);

--
-- Indices for table `fostuds`
--
ALTER TABLE `fostuds`
  ADD KEY `id` (`id`);

--
-- Indices for table `gcontactinfo`
--
ALTER TABLE `gcontactinfo`
  ADD KEY `g_id` (`g_id`);

--
-- Indices for table `gfields`
--
ALTER TABLE `gfields`
  ADD KEY `field_id` (`field_id`),
  ADD KEY `g_id` (`g_id`),
  ADD KEY `fostud_id` (`fostud_id`);

--
-- Indices for table `gjobinformation`
--
ALTER TABLE `gjobinformation`
  ADD KEY `g_id` (`g_id`);

--
-- Indices for table `glocation`
--
ALTER TABLE `glocation`
  ADD KEY `country_id` (`country_id`),
  ADD KEY `g_id` (`g_id`);

--
-- Indices for table `gprojects`
--
ALTER TABLE `gprojects`
  ADD KEY `g_id` (`g_id`);

--
-- Indices for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `fields`
--
ALTER TABLE `fields`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `fostuds`
--
ALTER TABLE `fostuds`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gcontactinfo`
--
ALTER TABLE `gcontactinfo`
  ADD CONSTRAINT `gcontactinfo_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `graduates` (`id`);

--
-- Constraints for table `gfields`
--
ALTER TABLE `gfields`
  ADD CONSTRAINT `gfields_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `graduates` (`id`),
  ADD CONSTRAINT `gfields_ibfk_2` FOREIGN KEY (`field_id`) REFERENCES `fields` (`id`),
  ADD CONSTRAINT `gfields_ibfk_3` FOREIGN KEY (`fostud_id`) REFERENCES `fostuds` (`id`);

--
-- Constraints for table `gjobinformation`
--
ALTER TABLE `gjobinformation`
  ADD CONSTRAINT `gjobinformation_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `graduates` (`id`);

--
-- Constraints for table `glocation`
--
ALTER TABLE `glocation`
  ADD CONSTRAINT `glocation_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `graduates` (`id`),
  ADD CONSTRAINT `glocation_ibfk_2` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `gprojects`
--
ALTER TABLE `gprojects`
  ADD CONSTRAINT `gprojects_ibfk_1` FOREIGN KEY (`g_id`) REFERENCES `graduates` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
