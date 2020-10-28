-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 28, 2020 at 09:35 AM
-- Server version: 10.3.24-MariaDB-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `soshthzk_techhelpinfo`
--

-- --------------------------------------------------------

--
-- Table structure for table `products_brands`
--

CREATE TABLE `products_brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `BrandName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandUrl` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandBrowserTitle` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `SeoHeading` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BrandDetails` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `BrandSeoKeyword` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `BrandSeoDescription` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `FeaturedImage` int(11) NOT NULL,
  `ImageAltText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ImageTitleText` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products_brands`
--

INSERT INTO `products_brands` (`id`, `BrandName`, `BrandUrl`, `BrandBrowserTitle`, `SeoHeading`, `BrandDetails`, `BrandSeoKeyword`, `BrandSeoDescription`, `FeaturedImage`, `ImageAltText`, `ImageTitleText`, `created_at`, `updated_at`) VALUES
(2, 'Dahua', 'dahua-cctv-camera-price-bangladesh', 'Dahua CCTV Camera Price In Bangladesh | TECH HELP INFO', 'Dahua CCTV Camera Price In Bangladesh', '<p>Dahua cctv camera price in bangladesh, we provide best price in dahua cctv camera in bangladesh. we are the authorised distributor is in bangladesh dahua cctv camera. we provide all kinds of dahua of hold bangladesh.</p>\r\n<p>For Dahua cctv camera price contact: 01836375309</p>', 'Dahua cctv camera price in bangladesh, dahua cctv camera dahua importer in bangladesh, dahua distributor in bangladesh. dahua cctv camera best price, dahua bangladesh, dahua ip camera price in bd, dahua price list in bangladesh,  dahua ip camera price in bangladesh', 'Dahua cctv camera price in bangladesh, dahua cctv camera dahua importer in bangladesh, dahua distributor in bangladesh. dahua cctv camera best price, dahua bangladesh, dahua ip camera price in bd, dahua price list in bangladesh,  dahua ip camera price in bangladesh', 165, 'dahua cctv camera', 'Dahua CCTV Camera', '2020-03-12 02:42:10', '2020-08-10 18:08:29'),
(3, 'Hikvision', 'hikvision-cctv-camera-price-bangladesh', 'Hikvision CCTV Camera Price In Bangladesh', 'Hikvision CCTV Camera Price In Bangladesh', '<p>hikvision cctv camera price in bangladesh. hikvision is the innovative cctv surveillance system in the world.&nbsp; and we distirbute all kinds of hivision products in bangladesh. with best price. only we provde best price of hikvision cctv camera in bangladesh.we distribute hikvision HD CCTV surveillance, IP&nbsp;CCTV surveillance, like as hikvision hd camera, ip camera, ptz camera, nvr, dvr and others products. for product price fell free to contact with US.&nbsp;<a href=\"https://www.techhelpinfo.com/\" target=\"_blank\" rel=\"noopener\">TECH HELP INFO</a> this is our main IT Company. Tech help info is the best software company in bangladesh.</p>', 'hikvision cctv camera price in bangladesh, hikvision cctv solution, hikvision distributor in bangladesh, hikvision importer in bangladesh, hikvision hd camera, hikvision ip camera, hikvision camera', 'hikvision cctv camera price in bangladesh, hikvision cctv solution, hikvision distributor in bangladesh, hikvision importer in bangladesh, hikvision hd camera, hikvision ip camera, hikvision camera', 166, 'hikvision cctv camera', 'Hikvision CCTV Camera', '2020-03-12 02:42:43', '2020-05-26 06:34:45'),
(4, 'Avtech', 'avtech-cctv-camera-price-bangladesh', 'Avtech CCCTV Camera Price In Bangladesh', 'Avtech CCTV Camera Price In Bangladesh | Avtech Distributor Bangladesh', '<p>avtech cctv camera price in bangladesh. we are the avtech authorised distributor in bangladesh. we think avtech is the best cctv camera. we provide all kinds of avtech cctv camera solution products. we provide avtech total solution, Avtech HD Cctv solutions with best avtech price&nbsp; provide in bangladesh only we. We provide avtech hd camera, IP Camera avtech NVR avtech DVR. avtech ptz camera. with best solution best price avtech product.</p>', 'avtech cctv camera price in bangladesh. avtech cctv camera distributor in bangladesh, avtech ip camera, avtech hd camera, avtech importer in bangladesh,  avtech distributor in bangladesh,  cctv camera company in bangladesh,  cctv camera importer in bangladesh,  cctv dealer in bangladesh', 'avtech cctv camera price in bangladesh. avtech cctv camera distributor in bangladesh, avtech ip camera, avtech hd camera, avtech importer in bangladesh,  avtech distributor in bangladesh,  cctv camera company in bangladesh,  cctv camera importer in bangladesh,  cctv dealer in bangladesh', 162, 'avtech cctv camera', 'Avtech CCTV Camera', '2020-03-12 02:43:11', '2020-05-26 06:34:06'),
(6, 'Campro', 'campro-cctv-camera-price-bangladesh', 'CAMPRO CCTV CAMERA PRICE IN BANGLADESH', 'CAMPRO CCTV CAMERA PRICE IN BANGLADESH', '<p>campro cctv camera price in bangladesh.&nbsp; we distribute all kinds&nbsp; of campro product in bangladesh. with best price our provided campro products list&nbsp;IP camera / NVR / IP PTZ / Hybrid camera / DVR / Hybrid PTZ / CCTV Tester / Video Balun / Color Quad / Accessory / Connectors.&nbsp; campro is the taiwan brand but menufecturig in china.&nbsp; if you want to know that&nbsp;</p>\r\n<p><span class=\"gridKeywordClass\" data-bind=\"text: $data.keywordText, css: $data.keywordCss\">cc camera price in bd,&nbsp;camera price in bd fell free to contact with us. <a href=\"https://www.techhelpinfo.com\" target=\"_blank\" rel=\"noopener\">tech help info</a></span></p>\r\n<p><a href=\"http://www.campro-cctv.com/about.php\" target=\"_blank\" rel=\"noopener\"><strong><span class=\"gridKeywordClass\" data-bind=\"text: $data.keywordText, css: $data.keywordCss\">About Campro CCTV</span></strong></a></p>\r\n<p><span class=\"gridKeywordClass\" data-bind=\"text: $data.keywordText, css: $data.keywordCss\">CAMPRO-CCTV(CAMPRO&nbsp;TECHNOLOGY CO., LTD.) is a professional manufacturer that specializes in the research, development of CCTV security camera. For the sake of providing more complete product range and competitive price,&nbsp;CAMPRO CCTV&nbsp;with ISO 9001 Quality Certificate, years of solid experience on global market which provide state of the art surveillance CCTV System to satisfy your requirements completely and to meet the realities of budget constraint. Our sales team has now carried a comprehensive range of products under&nbsp;CAMPRO&nbsp;Brand from Analog to Digital Solutions of any specialist manufacturers to fulfill all customers&rsquo; requirements on CCTV surveillance.<br />Our Security product lines include : IP camera / NVR / IP PTZ / Hybrid camera / DVR / Hybrid PTZ / CCTV Tester / Video Balun / Color Quad / Accessory / Connectors / Surge Protector &hellip; etc.<br />In order to avoide you buy counterfeit goods,&nbsp;CAMPRO&nbsp;provide Anti-Counterfeit Code. You can find the Anti-Counterfeit Label on all&nbsp;CAMPRO\'s Camera &amp; DVR.<br />CAMPRO&nbsp;has several sales process, authorized distributors, resellers, agents and OEM/ODM partners system. All of&nbsp;CAMPRO\' branded products can be sold through the sales channels.<br />CAMPRO&nbsp;invite and welcome the partners to join with us and look forward to a mutually beneficial long-standing business relationship.</span></p>', 'campro cctv camera price in banglades, campro bangladesh, campro importer in bangladesh', 'campro cctv camera price in banglades, campro bangladesh, campro importer in bangladesh', 163, 'campro ccctv camera', 'Campro CCTV Camera', '2020-03-17 02:43:27', '2020-05-26 06:33:36'),
(7, 'ZKTECO', 'zkteco-price-bangladesh-time-attendance-access-control', 'Zkteco Price In Bangladesh |  Time Attendance And Access Control', 'Zkteco Price In Bangladesh  Time Attendance And Access Control', '<p>Zkteco Price In Bangladesh&nbsp;Zkteco&nbsp;Time Attendance And Access Control.&nbsp;zkteco attendance machine price in bangladesh. we provide all zkteco products in bangladesh. we authorised distributor in bangladesh of zkteco. only we provide zkteco products with best price.</p>\r\n<p>OUR ZKTECO HIGHLIGHTS PRODUCTS :&nbsp;</p>\r\n<p>zkteco k40 price in bangladesh,&nbsp;zkteco f18 price in bangladesh,&nbsp;zkteco uface 800 price in bangladesh,&nbsp;zkteco f22 price in bangladesh,&nbsp;zkteco k50 price in bangladesh.</p>\r\n<h3><strong><a href=\"https://www.zkteco.com/en/company_profile.html\" target=\"_blank\" rel=\"noopener\">ZKTECO&nbsp;Main Business</a>:&nbsp;</strong></h3>\r\n<p><strong>Light-weight Face Surveillance Solutions, Smart Driver Assistance ADAS Solutions, Face data Analysis Solutions, ZKTeco Video Surveillance Solutions, ZKTeco Smart Lock Solutions, ZKTeco City Security Inspection and Anti-Terrorism Solutions, ZKTeco Biometric Verification Solutions, ZKTeco Smart Biometric Verification Card Solutions, ZKTeco Smart Security Solutions</strong></p>\r\n<p>&nbsp;</p>', 'Zkteco Price In Bangladesh |  Time Attendance And Access Control, zkteco k40 price in bangladesh, zkteco f18 price in bangladesh, zkteco uface 800 price in bangladesh, zkteco f22 price in bangladesh, zkteco k50 price in bangladesh.', 'Zkteco Price In Bangladesh |  Time Attendance And Access Control, zkteco k40 price in bangladesh, zkteco f18 price in bangladesh, zkteco uface 800 price in bangladesh, zkteco f22 price in bangladesh, zkteco k50 price in bangladesh.', 9, NULL, NULL, '2020-03-17 04:07:18', '2020-03-17 04:07:18'),
(9, 'Jovision', 'jovision-cctv-camera-price-bangladesh', 'Jovision CCTV Camera Price In Bangladesh | Tech Help Info', 'Jovision CCTV Camera Price In Bangladesh', '<p>jovision cctv camera price in bangladesh. Tech Help Info Provide Jovision cctv camera in bangla with best price and best service. Tech Help Info Provide, Jovision smart IP cameras, Wi-Fi cameras, NVRs, DVRs, HD Analog cameras, video management softwares, alarm systems, encoders, decoders, and CCTV modules, etc.</p>\r\n<p>Jovision Technology Co. Ltd.&nbsp;founded in 2000. it\'s a world-wide best supplier of video surveillance products and solutions. Jovision one of the top-level video surveillance products&nbsp;supplier.&nbsp;The company has expanded over 160 countries and region all over the world.&nbsp;</p>\r\n<p>Jovision provide sales marketing and service world wide &amp; we are the partner of jovision in bangladesh. we import jovision cctv camera in bangladesh. we import jovision&nbsp;Network Camera,&nbsp;Network Recorder,&nbsp;PTZ Camera,&nbsp;Accessories, cctv kit and supply full bangladesh.</p>\r\n<p>For more details about jovision visit <a href=\"https://www.jovisionsecurity.com/\" target=\"_blank\" rel=\"follow noopener\">jovisionsecurity</a></p>', 'Jovision CCTV Camera Price In Bangladesh, Jovision CCTV Camera, CCTV Camera, Price in Bangladesh, Best Price Jovision, jovision camera price in bangladesh, jovision ip camera bd price, jovision ip camera price in bangladesh', 'Jovision CCTV Camera Price In Bangladesh, Best Price Jovision CCTV Camera Supplier in bangladesh, Tech Help Info Provide Best CCTV Camera In Best Price', 167, 'jovision cctv camera', 'Jovision CCTV Camera', '2020-05-26 10:30:44', '2020-05-26 11:23:23'),
(10, 'CP Plus', 'cp-plus-camera-price-bangladesh', 'CP PLUS Camera Price In Bangladesh | Tech Help Info', 'CP PLUS Camera Price In Bangladesh', '<p>cp plus camera price in bangladesh. Tech Help Info Provide cp plus cctv camera in bangla with best price and best service. Tech Help Info Provide, cp plus smart IP cameras, Wi-Fi cameras, NVRs, DVRs, HD Analog cameras, video management softwares, alarm systems, encoders, decoders, and CCTV modules, etc.</p>\r\n<p>cp plus Technology Co. Ltd. it\'s a world-wide best supplier of video surveillance products and solutions. cp plus one of the top-level video surveillance products&nbsp;supplier.&nbsp;The company has expanded all over the world.&nbsp;</p>\r\n<p>cp plus provide sales marketing and service world wide &amp; we are the partner of cp plus in bangladesh. we import cp plus cctv camera in bangladesh. we import cp plus Network Camera,&nbsp;Network Recorder,&nbsp;PTZ Camera,&nbsp;Accessories, cctv kit and supply full bangladesh. also cp plus provide some creative solutions&nbsp;</p>\r\n<ul class=\"fa-ul mb-lg-4 mb-0\">\r\n<li>Banking</li>\r\n<li>Campus</li>\r\n<li>Hospitality / Health Care</li>\r\n<li>Industrail</li>\r\n<li>Law Enforcement</li>\r\n<li>Oil &amp; Gas Solution</li>\r\n<li>Real Estate</li>\r\n<li>Retail</li>\r\n<li>Safe City</li>\r\n<li>Smart Traffic</li>\r\n<li>Transport</li>\r\n<li>Case Studies</li>\r\n</ul>\r\n<p>For more details about jovision visit <a href=\"https://www.cpplusworld.com/\" target=\"_blank\" rel=\"follow noopener\">cp plus</a></p>', 'CP PLUS Camera Price In Bangladesh, hd camera, ip camera, nvr, dvr, network video recorder, digital video recorder, mini cc camera price in bangladesh, wifi cctv camera price in bangladesh', 'CP PLUS Camera Price In Bangladesh, CP Plus importer in bangladesh, Buy CP Plus CCTV Camera With Best Price From Tech Help Info. contact: 01836375309', 164, 'cp plus cctv camera', 'CP Plus CCTV Camera', '2020-05-26 12:09:50', '2020-05-26 12:20:48'),
(11, 'Uniview', 'uniview-cctv-camera-price-bangladesh', 'Uniview CCTV Camera Price In Bangladesh | Tech Help Info', 'Uniview CCTV Camera Price In Bangladesh', '<p>Uniview CCTV camera price in Bangladesh. Uniview is world popular CCTV camera &amp; World leading video surveillance&nbsp;CCTV brand. Uniview expert in IP solution.&nbsp;Uniview now is the third-largest player in video surveillance in China. In 2020.&nbsp;Uniview have full complete IP video surveillance solution.&nbsp;product lines including IP cameras, NVR, Encoder, Decoder, Storage, Client Software and app. also Univew provide creative &amp; it solution-: Building, Retail, Airport, city, industrial park, shopping mall, healthcare, seaport, highway, campus, casino, Bank, enterprise.&nbsp;&nbsp;</p>', 'Uniview CCTV Camera Price In Bangladesh, cctv, camera, price, bangladesh, uniview', 'Uniview CCTV Camera Price In Bangladesh, Uniview Importer In Bangladesh', 258, 'Uniview CCTV Camera', 'Uniview CCTV Camera', '2020-06-13 08:33:08', '2020-06-13 08:38:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products_brands`
--
ALTER TABLE `products_brands`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products_brands`
--
ALTER TABLE `products_brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
