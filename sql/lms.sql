-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2021 at 08:01 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `about` text COLLATE utf8_unicode_ci NOT NULL,
  `contact1` text COLLATE utf8_unicode_ci NOT NULL,
  `contact2` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `about`, `contact1`, `contact2`) VALUES
(1, 'About Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.', 'contact us Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.', 'contact us 2 Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.Lorem ipsum is simply a dummy text.');

-- --------------------------------------------------------

--
-- Table structure for table `app_routes`
--

CREATE TABLE `app_routes` (
  `id` bigint(20) NOT NULL,
  `slug` varchar(192) COLLATE utf8_unicode_ci NOT NULL,
  `controller` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'blogpost',
  `resource_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `app_routes`
--

INSERT INTO `app_routes` (`id`, `slug`, `controller`, `type`, `resource_id`) VALUES
(1, 'work', 'portfolio', 'blogpost', 0),
(2, 'privacy-policy', 'page/cms/1', 'blogpost', 0),
(5, 'Top-5-Raid-Dulla-Bagga-at-Kabaddi-Tournament', 'blog/detail/1', 'blogpost', 0),
(6, 'waranty-desclaimer', 'page/cms/1', 'blogpost', 0),
(7, 'certifications', 'page/cms/9', 'cms', 9),
(8, 'why', 'page/cms/10', 'cms', 10),
(9, 'mission', 'page/cms/11', 'cms', 11),
(10, 'global_presence', 'page/cms/12', 'cms', 12),
(11, 'business-development', 'page/cms/13', 'cms', 13),
(12, 'product-development', 'page/cms/14', 'cms', 14),
(13, 'business-innovation', 'page/cms/15', 'cms', 15),
(14, 'process-optimization', 'page/cms/16', 'cms', 16),
(15, 'markete-analysis', 'page/cms/17', 'cms', 17),
(16, 'why-membership', 'page/cms/18', 'cms', 18),
(17, 'membership-categories', 'page/cms/19', 'cms', 19),
(18, 'membership-benefits', 'page/cms/20', 'cms', 20),
(19, 'cylinder-quality-management', 'page/cms/21', 'cms', 21),
(20, 'doctor-blade-print-management', 'page/cms/22', 'cms', 22),
(21, 'eco-printing-by-pollution-prevention', 'page/cms/23', 'cms', 23),
(22, 'effective-colors-management', 'page/cms/24', 'cms', 24),
(23, 'excellence-in-lean-print-manufacturing', 'page/cms/25', 'cms', 25),
(24, 'excellence-in-flexographic-printing', 'page/cms/26', 'cms', 26),
(25, 'excellence-in-gravure-printing', 'page/cms/27', 'cms', 27),
(26, 'excellence-in-offset-printing', 'page/cms/28', 'cms', 28),
(27, 'flexoplate-quality-management', 'page/cms/29', 'cms', 29),
(28, 'food-safety-packaging-materials', 'page/cms/30', 'cms', 30),
(29, 'graphic-design-for-non-designer', 'page/cms/31', 'cms', 31),
(30, 'hazardous-chemicals-management', 'page/cms/32', 'cms', 32),
(31, 'paper-quality-management', 'page/cms/33', 'cms', 33),
(32, 'prepress-and-packaging-design', 'page/cms/34', 'cms', 34),
(33, 'print-automation-and-digitalization', 'page/cms/35', 'cms', 35),
(34, 'print-quality-management', 'page/cms/36', 'cms', 36),
(35, 'printing-process-equipment-validation', 'page/cms/37', 'cms', 37),
(36, 'uht-processing-and-aseptic-packaging', 'page/cms/38', 'cms', 38),
(37, 'certifications-overview', 'page/cms/39', 'cms', 39),
(38, 'certification-process', 'page/cms/40', 'cms', 40),
(39, 'certifications-benefits', 'page/cms/41', 'cms', 41),
(40, 'eligibility-requirments', 'page/cms/42', 'cms', 42),
(41, 'application-payment', 'page/cms/43', 'cms', 43),
(42, 'complaint-process', 'page/cms/44', 'cms', 44),
(43, 'best-machine-operator-award', 'page/cms/45', 'cms', 45),
(44, 'award-eligibility', 'page/cms/46', 'cms', 46),
(45, 'selection-criteria', 'page/cms/47', 'cms', 47),
(46, 'benefits-of-awards', 'page/cms/48', 'cms', 48),
(47, 'application-process', 'page/cms/49', 'cms', 49),
(48, 'Bisphenol-A-and-Consumer-Safety', 'blog/detail/2', 'blogpost', 0),
(49, 'Bisphenol-A-and-European-Legislation', 'blog/detail/3', 'blogpost', 0),
(50, 'DOCTOR-BLADE-AND-UNIFORM-INK-METERING', 'blog/detail/4', 'blogpost', 0),
(51, 'Food-Contact-Materials-Guidelines', 'blog/detail/5', 'blogpost', 0),
(52, 'INTRODUCTION-TO-CYNLINDER-ENGRAVING', 'blog/detail/6', 'blogpost', 0),
(53, 'historyb', 'page/cms/52', 'cms', 52),
(54, 'BISPHENOL-A-AND-CONSUMER-SAFETY', 'eblog/detail/7', 'blogpost', 0),
(55, 'Sun-Chemical-owner-to-buy-BASF-pigments-business', 'blog/detail/1', 'blogpost', 0),
(56, 'SILCO---COATING-ADDITIVES', 'blog/detail/2', 'blogpost', 0),
(57, 'Industrial-Wax-Market-Worth-$12,556.8-Million-by-2026:-PMR', 'blog/detail/3', 'blogpost', 0),
(58, 'EuPIA-Updates-Suitability-List-of-Photoinitiators,-Photosynergists-for-Food-Contact-Materials', 'blog/detail/4', 'blogpost', 0),
(59, 'Digital-vs.-Offset-Printing', 'eblog/detail/8', 'blogpost', 0),
(60, '-Digital-vs.-Offset-Printing', 'eblog/detail/9', 'blogpost', 0),
(61, 'Digital-vs.-Offset-Printing', 'eblog/detail/10', 'blogpost', 0),
(62, 'k', 'eblog/detail/11', 'blogpost', 0),
(63, 'Learn-English-in-50-mins', 'eblog/detail/12', 'blogpost', 0),
(64, 'Digital-vs.-Offset-Printing10', 'eblog/detail/13', 'blogpost', 0),
(65, 'DIGITALIZATION', 'eblog/detail/14', 'blogpost', 0),
(66, 'Printing-Techniques', 'eblog/detail/15', 'blogpost', 0),
(67, 'Intake-of-Dairy-Milk-Is-Associated-With-a-Greater-Risk-of-Breast-Cancer-in-Women', 'blog/detail/5', 'blogpost', 0),
(68, 'Coronavirus:-New-York-reaches-highest-death-toll-in-single-day-|-Nine-News-Australia', 'blog/detail/6', 'blogpost', 0),
(69, 'New-York-City-Has-Nearly-1-In-4-Of-All-COVID-19-Cases-in-US-|-NBC-Nightly-News', 'blog/detail/7', 'blogpost', 0),
(70, 'New-York-City-Has-Nearly-1-In-4-Of-All-COVID-19-Cases-in-US-|-NBC-Nightly-News', 'blog/detail/8', 'blogpost', 0),
(71, 'The-future-of-packaging', 'blog/detail/9', 'blogpost', 0),
(72, 'Bosch-Packaging-Technology,-Inc.', 'blog/detail/10', 'blogpost', 0),
(73, 'Nestle-CEO:-We\'re-committed-to-recyclable-packaging-by-2025', 'blog/detail/11', 'blogpost', 0),
(74, 'The-market-has-not-reached-a-bottom-yet-but-we\'re-going-down-at-a-slower-rate:-Economist-El-Erian', 'blog/detail/12', 'blogpost', 0);

-- --------------------------------------------------------

--
-- Table structure for table `app_user_session`
--

CREATE TABLE `app_user_session` (
  `id` int(11) NOT NULL,
  `access_token` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `app_user_session`
--

INSERT INTO `app_user_session` (`id`, `access_token`, `user_id`, `created_date`) VALUES
(6, '761831601539552', 24, '2020-10-01 08:05:52'),
(7, '715751602065154', 22, '2020-10-07 10:05:54'),
(8, '524171602079640', 22, '2020-10-07 14:07:20'),
(12, '626041602273250', 22, '2020-10-09 19:54:10'),
(19, '203601602790954', 20, '2020-10-15 19:42:34'),
(25, '392701602858072', 41, '2020-10-16 14:21:12'),
(29, '846521603473690', 43, '2020-10-23 17:21:30'),
(30, '561281603474170', 22, '2020-10-23 17:29:30'),
(31, '590621603728093', 22, '2020-10-26 16:01:33'),
(32, '289961603728473', 44, '2020-10-26 16:07:53'),
(34, '584801603888040', 45, '2020-10-28 12:27:20'),
(41, '292321604163975', 28, '2020-10-31 17:06:15'),
(43, '922991604219441', 22, '2020-11-01 08:30:41'),
(44, '617961604219686', 37, '2020-11-01 08:34:46'),
(101, '635631604486110', 60, '2020-11-04 10:35:10'),
(111, '072341604500509', 74, '2020-11-04 14:35:09'),
(116, '766961604513394', 23, '2020-11-04 18:09:54'),
(118, '821651604516173', 78, '2020-11-04 18:56:13'),
(119, '651251604553710', 79, '2020-11-05 05:21:50'),
(120, '693631604592859', 80, '2020-11-05 16:14:19'),
(123, '000671604603133', 80, '2020-11-05 19:05:33'),
(124, '190331604604955', 23, '2020-11-05 19:35:55'),
(126, '655841604871406', 84, '2020-11-08 21:36:46'),
(129, '377001606152256', 80, '2020-11-23 17:24:16'),
(133, '145921606207634', 80, '2020-11-24 08:47:14'),
(158, '118841606317506', 80, '2020-11-25 15:18:26'),
(181, '946351606378309', 85, '2020-11-26 08:11:49'),
(183, '408841606382656', 85, '2020-11-26 09:24:16'),
(185, '747001606395815', 85, '2020-11-26 13:03:35'),
(188, '744341606456878', 83, '2020-11-27 06:01:18'),
(189, '344631606474909', 83, '2020-11-27 11:01:49'),
(190, '135101606475213', 85, '2020-11-27 11:06:53'),
(191, '752571606494896', 85, '2020-11-27 16:34:56'),
(192, '065281606508306', 83, '2020-11-27 20:18:26'),
(193, '614251625591531', 84, '2021-07-06 17:12:11'),
(194, '196731626245517', 87, '2021-07-14 06:51:57'),
(195, '096941626245622', 83, '2021-07-14 06:53:42'),
(196, '685101633438037', 87, '2021-10-05 12:47:17'),
(198, '177561633458154', 87, '2021-10-05 18:22:34'),
(199, '254381633510700', 87, '2021-10-06 08:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `archive_users`
--

CREATE TABLE `archive_users` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_type` int(1) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(20) DEFAULT NULL COMMENT 'direct office no',
  `lang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `archive_users`
--

INSERT INTO `archive_users` (`id`, `user_id`, `user_type`, `name`, `email`, `address`, `phone`, `lang`) VALUES
(8, 15, 2, 'Gracia C', 'graciachannel@gmail.com', '2411 molton way, windsor mill. MD 21244', '4107629676', 'AF'),
(9, 17, 2, 'Olayiwola Iyanuoluwa', 'ayomideolayiwola00@gmail.com', '', '08146928165', 'EN'),
(10, 16, 2, 'Aloednut Williams', 'olatundeokikiola010@gmail.com', '', '08155001427', 'EN'),
(11, 7, 2, 'waseem afzal', 'ceo.cyphersol@gmail.com', '2 house 62b model colony', '3417090031', 'AR'),
(12, 24, 2, 'Kenneth smoss', 'kennethsmoss2@gmail.com', '', '08057810036', 'EN'),
(13, 6, 2, 'Ebenezer Olarewaju', 'olebint001__@gmail.com', '3602 Yennar lane, 3A', '4438548762', 'AF'),
(14, 8, 2, 'Ashfaq', 'm.sajid@cppexglobal.org', '', '923008464155', ''),
(15, 7, 2, 'waseem afzal', 'ceo.cyphersol@gmail.com', '', '03417090031', ''),
(16, 23, 2, 'DevWajid', 'devwajid@gmail.com', '', '15', ''),
(17, 71, 2, 'majid', 'majid@gmail.com', '', '0', ''),
(18, 80, 2, 'waseem afzal', 'ahmd@gmail.com', '', '03417090031', ''),
(19, 81, 2, 'ben ola', 'olebint001@gmail.com', '', '4109858822', ''),
(20, 85, 2, 'wajid sab', 'wajid@gmail.com', '', '15', ''),
(21, 84, 2, 'festus', 'festust2020@gmail.com', '', '08150717825', ''),
(22, 79, 2, 'sohaib ch', 'sohaibch200@gmail.com', '', '03047252995', ''),
(23, 77, 2, 'qadir', 'qadir@student.com', '', '0314861318', ''),
(24, 74, 2, 'Mr Wajid', 'mrwajid@gmail.com', '', '17', ''),
(25, 73, 2, 's', 's@gmail.com', '', '1', ''),
(26, 72, 2, 'a', 'c@gmail.com', '', '2', ''),
(27, 60, 2, 'majid', 'dev@gmail.com', '', '01', ''),
(28, 89, 2, 'vee chidex', 'veechidex@gmail.com', '', '2084132916', '');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `student_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'noimg.png',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `resource_type` varchar(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `description`, `url`, `start_date`, `end_date`, `image`, `created_on`, `status`, `resource_type`, `resource_id`, `cat_id`) VALUES
(2, 'Test title', '<p>this test descrtion for our bnaner</p>', '', '', '', 'aeef650573b95adda3e90c62d0a38c84.jpg', '2019-02-12 19:00:18', 1, '', 0, 0),
(3, 'Gro user business', '<p>Life is like a race</p>', '', '', '', '665277304b120ae90fd8c416171c9a48.jpg', '2019-03-02 12:57:32', 1, '', 0, 0),
(4, 'Adds extra time', '<p>nice people nice work</p>', '', '', '', 'b388c284b7632df155e98dff77cc2986.png', '2019-03-02 12:59:47', 1, '', 0, 0),
(5, 'WelcomeTo skill squared', '<p>We always welcome you</p>', '', '', '', 'f707b3d3e8a6f0452fd8d66d85fa8a4f.jpg', '2019-03-02 13:11:52', 1, '', 0, 0),
(6, 'Welcome To Social Meida Experts', '<p>We have social media experts</p>', '', '', '', 'eaffe3c27d56b80d23e3b8dcbd9b7215.jpg', '2019-03-04 11:24:47', 1, '', 0, 0),
(7, 'social media', '<p>More than 1000 social media experts are available on skill squared</p>', '', '', '', 'fcf7fc7a07e4f135cbf018e0723a0cca.jpg', '2019-03-04 11:37:03', 1, '', 0, 0),
(10, 'social media', '<p>social media marketing</p>', '', '', '', '9aeddcc73e59aa2b6e44a96e1944d175.png', '2019-12-12 13:34:53', 1, '', 0, 15);

-- --------------------------------------------------------

--
-- Table structure for table `batch_session`
--

CREATE TABLE `batch_session` (
  `id` int(11) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `batch_id` double NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch_session`
--

INSERT INTO `batch_session` (`id`, `from_date`, `to_date`, `batch_id`, `status`) VALUES
(2, '2021-11-27', '2021-11-30', 202111, 0),
(3, '2021-12-27', '2022-10-11', 202112, 1);

-- --------------------------------------------------------

--
-- Table structure for table `blogpost`
--

CREATE TABLE `blogpost` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'image',
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.mp4',
  `thumbnail` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogpost`
--

INSERT INTO `blogpost` (`id`, `post_title`, `post_description`, `post_date`, `post_type`, `video_url`, `thumbnail`, `user_id`, `slug_id`, `created_on`, `category`, `author`) VALUES
(11, 'Learning you need', '<p style=\"text-align:justify\"><span style=\"font-size:10.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">Do you know, some people are still confused to make the final decision to see which printing technology is more commonly using globally or which printing method is better? In short, offset printing is a more traditional printing method, also commonly known as printing press method as compare to the digital printing method.</span></span></span></p>\n\n<p><span style=\"font-size:14.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">Offset Printing</span></span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"font-size:10.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">This is a kind of printing that is commonly using for high volume commercial jobs; think likes of newspaper, magazines and book printing. This is printing process whereby ink is rolled onto paper to allow it to rest on the surface as well as being absorbed into the paper. The design is transferred from the plates onto rubber rolls and colors of ink are spread on the rubber and paper will run between them and layered on the paper in order to get the final image.</span></span></span></p>\n\n<p><span style=\"font-size:12.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">Benefits of offset printing</span></span></span></p>\n\n<ul>\n	<li><span style=\"font-size:10.0pt\"><span style=\"background:white\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Better colour fidelity, which refers to accuracy and balance of the colours in the design.&nbsp;</span></span></span></span></span></li>\n	<li><span style=\"font-size:10.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Works equally well on almost any kind of material</span></span></span></span></li>\n	<li><span style=\"font-size:10.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Large amount of copies can be reproduced with extreme speediness</span></span></span></span></li>\n	<li><span style=\"font-size:10.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Superior image quality which is clean, distinct type and spotless without any streaks or spots.</span></span></span></span></li>\n	<li><span style=\"font-size:10.0pt\"><span style=\"background:white\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Suitable for large volume jobs</span></span></span></span></span></li>\n	<li><span style=\"font-size:10.0pt\"><span style=\"background:white\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Allows the widest range of colour re-production. Pantones, metallic, foils, bright florescence and varnishes can be produced with this printing.</span></span></span></span></span></li>\n</ul>\n\n<p><span style=\"font-size:10.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">While offset printing is not suitable for low volume jobs, required more attention to ensure acceptable quality of results, color drying time, creation of plates etc.</span></span></span></p>\n\n<p><span style=\"font-size:14.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">Digital Printing</span></span></span></p>\n\n<p style=\"text-align:justify\"><span style=\"line-height:115%\"><span style=\"font-size:10.0pt\"><span style=\"line-height:115%\"><span arial=\"\" style=\"font-family:\">This is method of printing as compared to offset printing, where proofs, plates and rubber bed are not required and design directly print on the paper with liquid ink or powdered toner. This printing method provide faster and more precise printing quality as compare to the offset printing process. <span style=\"background:white\"><span style=\"color:#252525\">This is an alternate printing solution designed to emulate the final printing press results to give customers an idea of what their final printing press project would look like. Due to the familiarity with the process, many will favour digital printing.</span></span></span></span></span></span></p>\n\n<p><span style=\"font-size:12.0pt\"><span style=\"line-height:107%\"><span arial=\"\" style=\"font-family:\">Benefits of offset printing</span></span></span></p>\n\n<ul>\n	<li style=\"margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt\"><span style=\"background:white\"><span style=\"line-height:115%\"><span style=\"tab-stops:list 25.8pt\"><span style=\"vertical-align:baseline\"><span style=\"font-size:10.0pt\"><span style=\"line-height:115%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Faster turnaround time as there is no dying time for inks</span></span></span></span></span></span></span></span></li>\n	<li style=\"margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt\"><span style=\"background:white\"><span style=\"line-height:115%\"><span style=\"tab-stops:list 25.8pt\"><span style=\"vertical-align:baseline\"><span style=\"font-size:10.0pt\"><span style=\"line-height:115%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Lower cost for low volume jobs (less than 500 copies).</span></span></span></span></span></span></span></span></li>\n	<li style=\"margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt\"><span style=\"background:white\"><span style=\"line-height:115%\"><span style=\"tab-stops:list 25.8pt\"><span style=\"vertical-align:baseline\"><span style=\"font-size:10.0pt\"><span style=\"line-height:115%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Large format printing can be done (exceeding 10 feet in diameter)</span></span></span></span></span></span></span></span></li>\n	<li style=\"margin-top:0cm; margin-right:0cm; margin-bottom:.0001pt\"><span style=\"background:white\"><span style=\"line-height:115%\"><span style=\"tab-stops:list 25.8pt\"><span style=\"vertical-align:baseline\"><span style=\"font-size:10.0pt\"><span style=\"line-height:115%\"><span arial=\"\" style=\"font-family:\"><span style=\"color:#252525\">Can be printed on a variety of mediums which include paper, glass, metal and marble.</span></span></span></span></span></span></span></span></li>\n</ul>\n\n<p style=\"text-align:justify\"><span style=\"line-height:115%\"><span style=\"font-size:10.0pt\"><span style=\"line-height:115%\"><span arial=\"\" style=\"font-family:\">So in comparison, this printing process possesses less color fidelity due to use of standard inks, higher cost for high volume jobs, lower print quality, sharpness, crispness. On the basis of the above discussion, you can make a right decision on the best printing method for your project.</span></span></span></span></p>\n', '', 'embed url', 'https://www.youtube.com/watch?v=5LMU-zB8Sro', 'http://i3.ytimg.com/vi/5LMU-zB8Sro/default.jpg', 0, 62, '2020-04-04 08:50:49', 'Technology', 'Ricardo Edward'),
(14, 'Digitalization', '<p>GNDASLJ;LJDL</p>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=0UKA1H2xpWY', 'http://i3.ytimg.com/vi/0UKA1H2xpWY/default.jpg', 0, 65, '2020-04-04 09:58:34', 'Technology', 'Mufti');

-- --------------------------------------------------------

--
-- Table structure for table `blogpost_comments`
--

CREATE TABLE `blogpost_comments` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `body` varchar(255) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `bookcategories`
--

CREATE TABLE `bookcategories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'noimg.png',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookcategories`
--

INSERT INTO `bookcategories` (`id`, `title`, `image`, `created_on`) VALUES
(1, 'Programming', '91e1670379fa1552486ab410c45da4d7.jpg', '2020-09-28 17:36:00'),
(3, 'English', '3c8e57e6937e18795731a35d6c2351bc.jpg', '2020-09-29 07:41:26'),
(4, 'CHEMISTRY', '5745bac95992929dd5a5429f36e324fd.jpg', '2020-09-29 07:41:42'),
(5, 'bio chemistry', '67947e14f0cea0d1d3cc1a61f0148ae2.jpg', '2020-10-10 15:27:22'),
(6, 'Administration', 'da17802607106e516a8534691e2e7910.jpg', '2020-10-10 15:31:11');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE `ci_sessions` (
  `id` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('06857ufn9sae6jfhc9pajc6ujghtq2tg', '127.0.0.1', 1636718867, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633363731383836373b),
('u1cdliqi4ki5i3v9mr9n9j0n6lpa1mlg', '127.0.0.1', 1636719202, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633363731393230323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138313430223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('3fao9bd3sov5v6v72hsbpsrnfihp39gb', '127.0.0.1', 1636719212, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633363731393230323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138313430223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('8t96rdmq1lpaltrp7evtct08s8512ri0', '127.0.0.1', 1636733694, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633363733333639333b),
('kacfi3ve2kor510rni1u96msm8k0ae6n', '127.0.0.1', 1637239822, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373233393832323b),
('bfl2jjaklen5lue5e9tub3jq3dkih355', '127.0.0.1', 1637240804, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373234303830343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138393730223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('c9tduvcolc16c08pdcn346jiqcoe7bnh', '127.0.0.1', 1637241889, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373234313838393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138393730223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('91ktqmk03cgq5vbrit3m1nmgjhrqlfbu', '127.0.0.1', 1637242306, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373234323330363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138393730223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('9dcaj2vrca0g6l53u8d6f6hoh4hrra70', '127.0.0.1', 1637242612, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373234323631323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138393730223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('ia9l6q6bicto7ssmdjtroosnu9isi3ld', '127.0.0.1', 1637243332, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373234333333323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138393730223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('k5vtltdpbuoh9iv23vdsgmt0e9481gk9', '127.0.0.1', 1637243332, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373234333333323b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363336373138393730223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('716uhqjndpo86o87flnag115e0m71ehu', '127.0.0.1', 1637298811, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373239383831303b),
('lo49b91p67jjefjk4cn704a7mj0ccf2g', '127.0.0.1', 1637322107, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332323130373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('1t95ob9n14lv9cjvq359o9k8ct9mmfjc', '127.0.0.1', 1637322426, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332323432363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('ltvni7p4lgpm1jpjg1fkt4vsk5cdrrvd', '127.0.0.1', 1637322748, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332323734383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('iiqn5d2k57q943snfn8o04e9ruhinikl', '127.0.0.1', 1637323063, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332333036333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('ri307oe49q47ku4krll0ncvtsel17ca1', '127.0.0.1', 1637325898, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332353839383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('g9aolik1iesqj56ls1lrblmgq1h6ksq5', '127.0.0.1', 1637326249, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332363234393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('gsc3r5d2rrth2dmr18aig2ajac77tgjd', '127.0.0.1', 1637326574, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332363537343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('s71bt65t5g811084dg0udlipp87hv0hi', '127.0.0.1', 1637326577, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373332363537343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337323339383232223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('0skh7jk50e9te3oikmnrapeajm2n8jt0', '127.0.0.1', 1637996244, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939363234343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('kn35ts70n80lajros0m1ub5ic0o4l88u', '127.0.0.1', 1637996925, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939363932353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('pk8sn5rsr8529tfcmlh8gmcf0amsem8b', '127.0.0.1', 1637997286, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939373238363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('tmc1q460b0qdug4epvh3balrs83jveto', '127.0.0.1', 1637997600, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939373630303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('dlej17o3n7smauj95124rkmgc6t04gav', '127.0.0.1', 1637997980, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939373938303b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('3ensvpch93kjurlpoj0i0t9esn1bbp0l', '127.0.0.1', 1637998447, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939383434373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('o8qrt0e0kmj9vpge2otd38k1jh3qcth2', '127.0.0.1', 1637998817, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939383831373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('7v0ukgk0omjpepmuseqg4q59f3dleqo7', '127.0.0.1', 1637998858, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633373939383831373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337333231363537223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('ovsufvaeo143ahf02l72fm2dpmmcf0bu', '127.0.0.1', 1638010148, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031303134383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('97ks8lklr9jemao5te0tbovkugg0paha', '127.0.0.1', 1638011093, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031313039333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('qgdsl7pf7jujcr5q2o01pq1kvmvk70r6', '127.0.0.1', 1638011458, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031313435383b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('10s0pr5v8jlhr9thbpadads1tboo5qos', '127.0.0.1', 1638011779, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031313737393b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('87sh8vee6pggefh2g4t00et4rsvl6arv', '127.0.0.1', 1638012117, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031323131373b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('d777g9i3gpvni9gngijo1tlf4bl7iajj', '127.0.0.1', 1638012576, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031323537363b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('jmrdn8e13gav599pbi4339mmt4s0kue0', '127.0.0.1', 1638012961, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031323936313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('msr2rchu6qhc9g4bnj3m2h7a6kg2ln88', '127.0.0.1', 1638013324, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031333332343b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('f3e9hfm22f28ua8b4qkgtp6e7jqj21sr', '127.0.0.1', 1638013695, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031333639353b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('3t73lt0jr27sanlu0t3o501kdqebos7h', '127.0.0.1', 1638014903, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031343930333b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('vrv82p6pn1fphdkpunm8d4lquefvenad', '127.0.0.1', 1638016081, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031363038313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('soebekec6drqa9gs5ucoopv01k7ghkbi', '127.0.0.1', 1638016311, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383031363038313b6964656e746974797c733a31353a2261646d696e4061646d696e2e636f6d223b656d61696c7c733a31353a2261646d696e4061646d696e2e636f6d223b757365725f747970657c733a313a2231223b70686f6e657c733a393a22343332343233343234223b616464726573737c733a383a226764666766646764223b636974797c733a303a22223b706f7374616c5f636f64657c733a303a22223b6d6f62696c657c4e3b6e616d657c733a353a2261646d696e223b6164645f62797c733a313a2231223b757365725f69647c733a313a2231223b6f6c645f6c6173745f6c6f67696e7c733a31303a2231363337393935353530223b6c616e675f636f64657c733a323a22656e223b6c6f67696e7c623a313b),
('a7r2buho3p8ucd0n3fmdsj9dpjt327mj', '127.0.0.1', 1638116120, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383131363131393b),
('ugqhrp1fg3q5mh2n973vcubnburcfuj4', '127.0.0.1', 1638162152, 0x5f5f63695f6c6173745f726567656e65726174657c693a313633383136323135323b);

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `class_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL,
  `batch_id` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`class_name`, `id`, `batch_id`) VALUES
('Monday Evening A', 6, 0),
('Monday Morning A', 7, 2),
('Monday Night', 8, 2);

-- --------------------------------------------------------

--
-- Table structure for table `cms`
--

CREATE TABLE `cms` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'defaultbanner.png',
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `displaysidebar` int(1) NOT NULL,
  `sidebar` int(1) NOT NULL,
  `meta_keyword` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `meta_title` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `meta_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cms`
--

INSERT INTO `cms` (`id`, `post_title`, `short_heading`, `post_banner`, `post_description`, `displaysidebar`, `sidebar`, `meta_keyword`, `meta_title`, `meta_description`, `created_on`) VALUES
(2, 'Privacy Policy', 'Privacy Policy', '4497768073239.jpg', '<h2><strong>&nbsp;Privacy Policy</strong></h2>\r\n\r\n<h2 style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Please read this privacy policy (the&nbsp;<span style=\"border:none windowtext 1.0pt; padding:0in\">&ldquo;Policy&rdquo;</span>) carefully to understand how we use your personal information. If you do not agree with this Policy, your choice is not to use skillsquared.com (the&nbsp;<span style=\"border:none windowtext 1.0pt; padding:0in\">&ldquo;Site&rdquo;</span>). By accessing or using this Site, you agree to this Policy. This Policy may change from time to time. If there are any material changes to how your personal information is used, we will notify you. Your continued use of the Site after we make changes is deemed to be acceptance of those changes, so please check the Policy periodically for update.</span></span></span></span></span></span></span></strong></h2>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">At Skillsquared we care about users&rsquo; privacy. We do not sell or rent your personal information to third parties for their direct marketing purposes without your explicit consent. We do not disclose it to others except as disclosed in this Policy or required to provide you with the services of the Site and mobile applications, meaning - to allow you to buy, sell, share the information you want to share on the Site; to contribute on the forum; pay for products; post reviews and so on; or where we have a legal obligation to do so.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">We collect information that you provide us or voluntarily share with other users, and also some general technical information that is automatically gathered by our systems, such as IP address, browser information and cookies to enable you to have a better user experience and a more personalized browsing experience.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">We will not share information that you provide us in the process of the registration - including your contact information - except as described in this Policy.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Information that you choose to publish on the Site (photos, videos, text, music, reviews, deliveries) - is no longer private, just like any information you publish online.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Technical information that is gathered by our systems, or third party systems, automatically may be used for Site operation, optimization, analytics, content promotion and enhancement of user experience. We may use your information to contact you - to provide notices related to your activities, or offer you promotions and general updates, but we will not let any other person, including sellers and buyers, contact you, other than through your user profile on the Site.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Your personal information may be stored in systems based around the world, and may be processed by third party service providers acting on our behalf. These providers may be based in countries that do not provide an equivalent level of protection for privacy as that enjoyed in the country in which you live. In that case, we will provide for adequate safeguards to protect your personal information.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">You can exercise your rights over your personal information by contacting us at <a href=\"mailto:support@skillsquared.com\" style=\"color:blue; text-decoration:underline\">support@skillsquared.com</a>. .</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">Cookies</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">When you visit the Site, we may use industry-wide technologies such as &quot;cookies&quot; (or similar technologies), which store certain information on your computer and which will allow us, among other things, to enable automatic sign-in to the Site, make your browsing much more convenient and effortless and allow us to test user experience and offer you personalized browsing or promotions. By continuing to use this Site, you are agreeing to our placing cookies on your computer or device in accordance with the terms of this Policy.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">The Site uses cookies to collect statistical data about its use, to tailor the Site&#39;s functionality to suit personal preferences and to assist with various aspects of Site operation. These files contain a variety of information such as information about Skillsquared webpages visited by you, the length of time you visited the Site, data about how you came to visit the Site, areas viewed by you within the Site, and additional information. Cookies remain on your device for the period described below.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">The following is a more detailed explanation of the types of cookies we use:</span></span></span></span></span></span></span></strong></p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"border:none windowtext 1.0pt; font-size:10.5pt; padding:0in\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Necessary cookies</span></span></span><br />\r\n	<span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Necessary cookies are essential and help you navigate the Site. This helps to support security and basic functionality and is necessary for the proper operation of the Site, so if you block these cookies we can&#39;t guarantee your use or the security during your visit.</span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"border:none windowtext 1.0pt; font-size:10.5pt; padding:0in\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Functionality cookies</span></span></span><br />\r\n	<span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Functionality cookies are used to provide you the best user experience. These cookies are, for instance, used to personalize content for you in line with your location. It also allows the Site to remember choices made (like turning off use of cookies or which location you have previously selected) to provide more personal features.</span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"border:none windowtext 1.0pt; font-size:10.5pt; padding:0in\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Performance cookies</span></span></span><br />\r\n	<span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Performance cookies help us to understand the behavior of users of the Site. This allows us to continuously improve the Site to provide the best information in support of our project aims. These cookies are also used to help us understand how effective our Site is; for instance these cookies tell us which pages visitors go to most often and if they get error messages from web pages. All of the information that these cookies collect is aggregated, to assist us to improve how the Site works. Some of these cookies are managed by third parties, and you may refer to the third parties&#39; own website privacy notifications for further information. In particular, we use Google Analytics cookies to obtain an overall view of user habits and volumes, and to help improve the overall experience on the Site. Google Analytics is a third-party web analysis service provided by Google Inc., which uses performance cookies and targeting cookies. The information generated by these cookies about your use of the Site (including your IP address) will be transmitted to and stored by Google Inc. on servers in the United States.</span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Google will use the information collected for the purpose of evaluating your use of our Site on our behalf, compiling reports on website activity and providing other services relating to activity and internet usage to us. Google will not associate your IP address with any other data held by Google. You may refuse the use of cookies by selecting the appropriate settings on your browser as described below. Furthermore you can prevent Google&rsquo;s collection and use of data (cookies and IP address) by downloading and installing the&nbsp;<a href=\"https://tools.google.com/dlpage/gaoptout?hl=en-GB\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#1dbf73\">browser plug-in</span></a>. This creates an opt-out cookie which prevents the further processing of your data. For more information about Google Analytics cookies, please see Google&#39;s help pages and privacy policy.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">If you prevent these cookies, we cannot guarantee how the Site will perform for you.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">Blocking or Deleting Cookies</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Once you have given us your agreement to the use of cookies, we shall store a cookie on your computer or device to remember this for next time, so that we can store your preferences and save you time on subsequent visits by eliminating the need to repeatedly enter the same data. You may set your browser to block all cookies, including cookies associated with our services, or to indicate when a cookie is being set by us. You should do this through the browser settings for each browser you use. Please be aware that some of our services will not function if your browser does not accept cookies. However, you can allow cookies from specific websites by making them &quot;trusted websites&quot; in your internet browser.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">The following links may assist you in managing your cookies settings, or you can use the &#39;help&#39; option in your internet browser for more details:</span></span></span></span></span></span></span></strong></p>\r\n\r\n<ul style=\"list-style-type:square\">\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\"><a href=\"https://support.microsoft.com/en-us/help/17442/windows-internet-explorer-delete-manage-cookies\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#1dbf73\">Internet Explorer</span></a></span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\"><a href=\"http://www.google.com/support/chrome/bin/answer.py?hl=en&amp;answer=95647\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#1dbf73\">Google Chrome</span></a></span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\"><a href=\"http://support.apple.com/kb/PH5042\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#1dbf73\">Safari</span></a></span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n	<li style=\"margin-top:0in; margin-right:0in; margin-bottom:.0001pt; margin:0in 0in 10pt\">\r\n	<p><strong><span style=\"font-size:11pt\"><span style=\"line-height:13.5pt\"><span style=\"tab-stops:list .5in\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\"><a href=\"https://helpx.adobe.com/flash-player/kb/disable-local-shared-objects-flash.html\" style=\"color:blue; text-decoration:underline\"><span style=\"color:#1dbf73\">Adobe (flash cookies)</span></a></span></span></span></span></span></span></span></span></strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">If you share the use of a computer or device, accepting or rejecting the use of cookies may affect all users of that computer or device.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">External Links</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Please note that the Site may contain links to third party sites and if you link to a third party site from the Site, any data you provide to that site and any use of that data by the third party are not under the control of Skillsquared and are not subject to this Policy. You should consult the privacy policies of each site you visit. This Policy applies solely to personal information collected by our Site. If you upload content, including your personal information, to a social network and then tag the Site, your submission will be subject to that social network&#39;s terms of use and privacy policy, even where you post on an official Skillsquared page on the social network. We do not have control over these terms of use and privacy policies, and have not reviewed their adequacy. You should therefore review these before submitting any personal information.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">Security</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">We take great care in maintaining the security of the Site and your information and in preventing unauthorized access, loss, misuse, alteration, destruction or damage to it through industry standard technologies and internal procedures. Among other things, we regularly maintain a PCI DSS (Payment Card Industry Data Security Standards) certification (with respect to payment by credit cards). In addition, we contractually ensure that any third party processing your personal information equally provide for confidentiality and integrity of your data in a secure way. However, the transmission of data via the internet is not completely secure, and although we will do our best to protect your personal information, we cannot guarantee the security of your data transmitted to the Site; any transmission is at your own risk. Once we have received your data, we will use strict procedures and security features to try to prevent unauthorized access.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Users who have registered to the Site agree to keep their password in strict confidence and not disclose such password to any third party.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Further information about our data security practices can be provided on request.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">Your California Privacy Rights</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">California Civil Code Section &sect; 1798.83 permits California residents that are users of our Site to request certain information regarding our disclosure of personal information to third parties for their direct marketing purposes. To make such a request, please send an email to </span></span></span><u><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#1dbf73\">support@skillsquared.com</span></span></span></u></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">Updating Your Information</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">We take steps to ensure that the personal information we collect is accurate and up to date, and we provide you with the opportunity to update your information through your account profile settings. In the event that you believe your information is in any way incorrect or inaccurate, please let us know immediately. We will make sure we investigate the matter and correct any inaccuracies as quickly as possible where necessary or give you ways to update it quickly or to delete it - unless we have to keep that information for legitimate business or legal purposes. When updating your personal information, we may ask you to verify your identity before we can act on your request. If for any reason you have a problem with deleting your personal information please contact Skillsquared&rsquo;s Customer Support and we will make reasonable efforts to delete any such information pursuant to any applicable privacy laws.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">You can review and change your personal information by logging into the Site and visiting your account profile page.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\">&nbsp;</p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:18.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:15.0pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#0e0e0f\">Changes to the Privacy Policy</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">We reserve the right to change this Policy at any time, so please re-visit this page frequently.</span></span></span></span></span></span></span></strong></p>\r\n\r\n<p style=\"margin: 0in 0in 10pt;\"><strong><span style=\"font-size:11pt\"><span style=\"line-height:15.0pt\"><span style=\"vertical-align:baseline\"><span style=\"font-family:Calibri,sans-serif\"><span style=\"font-size:10.5pt\"><span helvetica=\"\" style=\"font-family:\"><span style=\"color:#555555\">Changes to this Policy are effective as of the stated &quot;Last Update&quot; and your continued use of the Site on or after the Last Update date will constitute acceptance of, and agreement to be bound by, those changes.</span></span></span></span></span></span></span></strong></p>\r\n', 0, 0, 'Meta Keyword Meta Keyword', 'Meta Title Meta Title', 'Meta Description Meta Description Meta Description Meta Description', '2018-06-08 03:18:07'),
(3, 'Terms & Conditions', 'Please read carefully the following terms & Conditions', '3920068770720.jpg', '<p>&nbsp;</p>\n\n<p>Zukulee terms</p>\n', 0, 0, '', '', '', '2018-06-08 03:18:43'),
(4, 'About Us', 'Getting To Know More About zukulee', '1116443303844.jpeg', '<h1>Under Revision.</h1>\n', 0, 0, '', '', '', '2018-06-08 03:19:07');

-- --------------------------------------------------------

--
-- Table structure for table `conversations`
--

CREATE TABLE `conversations` (
  `conversation_id` int(11) UNSIGNED NOT NULL,
  `owner_id` int(11) UNSIGNED NOT NULL,
  `modified` datetime NOT NULL,
  `receiver_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `conversations`
--

INSERT INTO `conversations` (`conversation_id`, `owner_id`, `modified`, `receiver_id`) VALUES
(1, 18, '2020-11-01 08:50:07', 23),
(2, 23, '2020-10-31 11:57:16', 19),
(3, 23, '2020-10-31 12:09:54', 44),
(4, 23, '2020-11-01 08:41:11', 16),
(5, 23, '2020-11-01 08:22:53', 41),
(6, 23, '2020-11-01 13:19:32', 39),
(7, 18, '2020-11-02 02:17:33', 32),
(8, 18, '2020-11-02 01:56:16', 24),
(9, 46, '2020-11-02 01:55:30', 21),
(10, 46, '2020-11-02 01:56:25', 16),
(11, 46, '2020-11-02 01:56:29', 18),
(12, 46, '2020-11-02 01:56:36', 22),
(13, 46, '2020-11-02 01:56:39', 45),
(14, 32, '2020-11-02 02:22:28', 10),
(15, 32, '2020-11-02 02:31:35', 48),
(16, 23, '2020-11-02 07:17:34', 47),
(17, 23, '2020-11-02 07:17:41', 56),
(18, 23, '2020-11-02 07:17:46', 1),
(19, 74, '2020-11-05 10:13:24', 68),
(20, 81, '2020-11-05 10:18:45', 54),
(21, 81, '2020-11-05 10:34:49', 73),
(22, 74, '2020-11-05 14:24:05', 50),
(23, 74, '2020-11-05 14:32:29', 58),
(24, 74, '2020-11-05 14:32:33', 64),
(25, 74, '2020-11-06 05:16:41', 23),
(26, 74, '2020-11-06 05:16:46', 55),
(27, 74, '2020-11-06 05:16:48', 66),
(28, 74, '2020-11-06 05:17:32', 56),
(29, 74, '2020-11-06 05:17:38', 67),
(30, 74, '2020-11-06 05:22:31', 61),
(31, 74, '2020-11-06 05:22:38', 78),
(32, 80, '2020-11-07 09:44:57', 62),
(33, 80, '2020-11-07 09:45:07', 69),
(34, 80, '2020-11-07 09:52:51', 70),
(35, 81, '2020-11-07 11:48:31', 63),
(36, 81, '2020-11-10 10:25:44', 57),
(37, 85, '2020-11-23 17:29:32', 60),
(38, 83, '2020-11-25 11:43:54', 76),
(39, 83, '2020-11-25 11:44:24', 23),
(40, 83, '2020-11-26 14:26:27', 82),
(41, 85, '2020-11-26 16:04:57', 65),
(42, 85, '2021-02-03 21:57:57', 79),
(43, 85, '2021-04-28 21:11:01', 71),
(44, 87, '2021-10-06 21:26:14', 88);

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `amount` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`id`, `code`, `amount`, `status`, `created_on`) VALUES
(1, '5963', 50, 0, '2018-11-27 23:21:33'),
(2, 'BOOKNOW', 40, 1, '2018-11-27 23:22:02');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `course_category_id` bigint(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `short_description` tinytext COLLATE utf8_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `post_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'image',
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.mp4',
  `thumbnail` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `class_id` int(11) NOT NULL,
  `terms` enum('First Term','Second Term','Third Term') COLLATE utf8_unicode_ci NOT NULL,
  `youtube_into` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course_category_id`, `post_title`, `post_description`, `short_description`, `price`, `post_date`, `post_type`, `video_url`, `thumbnail`, `user_id`, `slug_id`, `created_on`, `class_id`, `terms`, `youtube_into`) VALUES
(1, 6, 'PHP learning', '<p>Website Development: In this tutorial i will teach you PHP and how to develop websites. Today we will look into syntax, variables comments and what is xampp. <a dir=\"auto\" href=\"https://www.youtube.com/hashtag/php\" spellcheck=\"false\">#Php</a></p>\n', 'PHP development', 0, '', 'video', '08e788dde7c733f7e6dda414178441cf.mp4', '3cc7054288ad53482a476f69aa29154d.png', 0, 0, '2021-07-14 07:11:31', 2, 'First Term', 'https://www.youtube.com/watch?v=VCDy3WgmW40'),
(2, 8, 'Fundamental of chemistry', '<p><b>Chemistry</b>&nbsp;is the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Science\" title=\"Science\">scientific</a>&nbsp;study of the properties and behavior of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Matter\" title=\"Matter\">matter</a>.<sup id=\"cite_ref-brown2018_1-0\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-brown2018-1\">[1]</a></sup>&nbsp;It is a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Natural_science\" title=\"Natural science\">natural science</a>&nbsp;that covers the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chemical_element\" title=\"Chemical element\">elements</a>&nbsp;that make up matter to the&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chemical_compound\" title=\"Chemical compound\">compounds</a>&nbsp;composed of&nbsp;<a href=\"https://en.wikipedia.org/wiki/Atom\" title=\"Atom\">atoms</a>,&nbsp;<a href=\"https://en.wikipedia.org/wiki/Molecule\" title=\"Molecule\">molecules</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Ion\" title=\"Ion\">ions</a>: their composition, structure, properties, behavior and the changes they undergo during a&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chemical_reaction\" title=\"Chemical reaction\">reaction</a>&nbsp;with other&nbsp;<a href=\"https://en.wikipedia.org/wiki/Chemical_substance\" title=\"Chemical substance\">substances</a>.<sup id=\"cite_ref-definition_2-0\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-definition-2\">[2]</a></sup><sup id=\"cite_ref-3\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-3\">[3]</a></sup><sup id=\"cite_ref-4\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-4\">[4]</a></sup><sup id=\"cite_ref-5\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-5\">[5]</a></sup></p>\n\n<p>In the scope of its subject, chemistry occupies an intermediate position between&nbsp;<a href=\"https://en.wikipedia.org/wiki/Physics\" title=\"Physics\">physics</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Biology\" title=\"Biology\">biology</a>.<sup id=\"cite_ref-6\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-6\">[6]</a></sup>&nbsp;It is sometimes called&nbsp;<a href=\"https://en.wikipedia.org/wiki/The_central_science\" title=\"The central science\">the central science</a>&nbsp;because it provides a foundation for understanding both&nbsp;<a href=\"https://en.wikipedia.org/wiki/Basic_research\" title=\"Basic research\">basic</a>&nbsp;and&nbsp;<a href=\"https://en.wikipedia.org/wiki/Applied_science\" title=\"Applied science\">applied</a>&nbsp;scientific disciplines at a fundamental level.<sup id=\"cite_ref-7\"><a href=\"https://en.wikipedia.org/wiki/Chemistry#cite_note-7\">[7]</a></sup>&nbsp;For example, chemistry explains aspects of plant chemistry (<a href=\"https://en.wikipedia.org/wiki/Botany\" title=\"Botany\">botany</a>), the formation of igneous rocks (<a href=\"https://en.wikipedia.org/wiki/Geology\" title=\"Geology\">geology</a>), how atmospheric ozone is formed and how environmental pollutants are degraded (<a href=\"https://en.wikipedia.org/wiki/Ecology\" title=\"Ecology\">ecology</a>), the properties of the soil on the moon (<a href=\"https://en.wikipedia.org/wiki/Cosmochemistry\" title=\"Cosmochemistry\">cosmochemistry</a>), how medications work (<a href=\"https://en.wikipedia.org/wiki/Pharmacology\" title=\"Pharmacology\">pharmacology</a>), and how to collect&nbsp;<a href=\"https://en.wikipedia.org/wiki/DNA\" title=\"DNA\">DNA</a>&nbsp;evidence at a crime scene (<a href=\"https://en.wikipedia.org/wiki/Forensic\" title=\"Forensic\">forensics</a>).</p>\n', 'Fundamental chemistry in nutshell', 0, '', 'video', '1793a80f041ed02b693784932e77396e.mp4', '0bc5c34219c157f37ed107496c1e9afa.jpg', 0, 0, '2021-10-05 12:51:40', 2, 'First Term', 'https://www.youtube.com/watch?v=t8x3wdXZGEY'),
(3, 22, 'Introduction to Government ', '<p>Knowing how people elect their leaders and how those leaders govern nations is crucial to understanding how the world works. How countries elect their government and what type of government rules can have serious consequences in a nation&rsquo;s future. Leaders can be democratic or authoritarian, or in between. Governments can also be democratically elected or manipulate elections, authoritarian systems can be toppled by reforms and revolutions, while democracies can gradually become less free by what we call democratic backsliding. To learn more about governments and how they function--or not, visit our Forms of Government module</p>\n', 'Knowing how people elect their leaders and how those leaders govern nations is crucial to understanding how the world works.', 0, '', 'video', 'default.mp4', '72ebb3407631bf0424fecdde47a2b8e9.jpeg', 0, 0, '2021-10-06 19:57:57', 2, 'First Term', 'https://www.youtube.com/watch?v=LBFXD06fudM'),
(4, 18, 'Introduction to Biology', '<p>This video choreographed to powerful music that introduces the viewer/student to the Biochemistry of Life. It is designed as a motivational &quot;trailer&quot; to be shown by teachers in Biology, Biochemistry and Chemistry classrooms in middle school, high school and college as a visual Introduction to the wonders of the Biochemistry of living things.</p>\n', 'This is an (HD) dramatic video choreographed to powerful music that introduces the viewer/student to the Biochemistry of Life.', 0, '', 'video', 'default.mp4', 'e48a2e08f856117988204431ae498f1c.jpeg', 0, 0, '2021-10-06 20:19:31', 2, 'First Term', 'https://www.youtube.com/watch?v=tpBAmzQ_pUE');

-- --------------------------------------------------------

--
-- Table structure for table `course_categories`
--

CREATE TABLE `course_categories` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `icon_class` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `file` varchar(255) NOT NULL DEFAULT 'noimg.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_categories`
--

INSERT INTO `course_categories` (`id`, `title`, `icon_class`, `class_id`, `file`) VALUES
(3, 'chemistry', 'bxs-drink', 4, 'fe19177a743765b67853c0b6b8134c1b.png'),
(4, 'English', 'bx-first-aid', 3, '6bf529aaf0de61618cc2bf8f994e11dd.png'),
(6, 'Physics', 'bx-book-reader', 2, '63eaffe50eef65b1b4c4474f370464f1.png'),
(7, 'chemistry', 'bx-target-lock', 3, 'b42daf75c729707d6a8a7b2ea24a1d42.png'),
(8, 'chemistry', 'bx-desktop', 2, '98d9bb85d6dd75b4fa9db88c79d469ff.png'),
(9, 'English', 'bx-shape-triangle', 2, '4aa444abc8f443e2f7cbbfb8a9d7f279.png'),
(10, 'Math', 'bx-shape-triangle', 3, '744757c018ca96ecd6ac4566f86e8811.png'),
(11, 'Biology', 'bx-shape-triangle', 4, 'a2f61dee0cdde6d3aa49812b743bf420.png'),
(12, 'physics', '', 4, '4bd15c128f0bf443d32217419292de0d.png'),
(13, 'English', '', 4, 'b883f6c42cbc9ec78733e5ac1dd4ec55.png'),
(14, 'Math', '', 4, '801ae598f10c5e823446f16bfb725ded.png'),
(15, 'physics', '', 3, '0d7549f16044abd07442b98d81b7b435.png'),
(16, 'Biology', '', 3, '3944fec8d362c1447cec851766cdceb8.png'),
(17, 'Math', '', 2, '8b31e49ad4217ae874ec7d39bd5ccf65.png'),
(18, 'Biology', '', 2, 'ae53aaa14fc9867709cb115a61cde2b2.png'),
(19, 'Economics', '', 4, '0536dfbda7e36700a82894d2b8ae06e6.png'),
(20, 'literature', '', 4, '428d09dbf8e45fac7cdbfe703e03833f.png'),
(21, 'Agriculture Science', '', 4, '75e3e3d684a2bc1de234a3e659b60b61.png'),
(22, 'Government', '', 2, '5ebdc32d9c8a45c7508063df70a83ec0.png'),
(23, 'Crypto Analysis', '', 6, 'noimg.png'),
(25, 'Physics', '', 8, 'noimg.png'),
(26, 'physics', '', 7, 'noimg.png');

-- --------------------------------------------------------

--
-- Table structure for table `course_lectures`
--

CREATE TABLE `course_lectures` (
  `id` bigint(11) NOT NULL,
  `course_id` bigint(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `added_on` datetime NOT NULL,
  `updated_on` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_lectures`
--

INSERT INTO `course_lectures` (`id`, `course_id`, `title`, `added_on`, `updated_on`, `status`) VALUES
(1, 3, 'Introduction to music', '2020-06-18 12:46:35', '0000-00-00 00:00:00', 1),
(2, 3, 'Introduction', '2020-06-18 12:52:20', '0000-00-00 00:00:00', 1),
(3, 3, 'Introduction', '2020-06-18 12:54:20', '2020-06-18 13:08:32', 1),
(4, 3, 'How to sing a song', '2020-06-18 13:52:09', '0000-00-00 00:00:00', 1),
(5, 4, 'Introduction', '2020-06-22 10:54:09', '0000-00-00 00:00:00', 1),
(6, 4, 'Introduction to songs', '2020-06-25 09:15:20', '0000-00-00 00:00:00', 1),
(7, 3, 'Introduction', '2020-07-25 13:33:36', '0000-00-00 00:00:00', 1),
(8, 8, 'Introduction to atom', '2020-10-10 11:33:06', '0000-00-00 00:00:00', 1),
(9, 8, 'Introduction', '2020-10-10 11:34:52', '0000-00-00 00:00:00', 1),
(10, 14, 'Introduction to deviation', '2020-10-10 11:45:56', '0000-00-00 00:00:00', 1),
(11, 22, 'Introduction to business', '2020-10-10 11:53:05', '0000-00-00 00:00:00', 1),
(12, 21, 'Introduction to RM', '2020-10-10 11:53:47', '0000-00-00 00:00:00', 1),
(13, 20, 'Introduction', '2020-10-10 11:54:14', '0000-00-00 00:00:00', 1),
(14, 19, 'Introduction to physics Basics', '2020-10-10 11:54:58', '0000-00-00 00:00:00', 1),
(15, 18, 'What is administration', '2020-10-10 11:56:28', '0000-00-00 00:00:00', 1),
(16, 17, 'studying humanies', '2020-10-10 11:57:04', '0000-00-00 00:00:00', 1),
(17, 13, 'what is deviation', '2020-10-10 12:29:50', '0000-00-00 00:00:00', 1),
(18, 13, '2nd Lecture', '2020-10-10 12:52:49', '0000-00-00 00:00:00', 1),
(20, 13, 'Introduction to sample', '2020-10-15 02:43:32', '0000-00-00 00:00:00', 1),
(21, 13, 'How to hiphop', '2020-10-15 02:44:21', '0000-00-00 00:00:00', 1),
(22, 13, 'what to do in bias', '2020-10-15 02:44:53', '0000-00-00 00:00:00', 1),
(23, 18, 'what about mng', '2020-10-28 06:53:11', '0000-00-00 00:00:00', 1),
(24, 25, 'Physics Waves: Frequency & Wavelength FREE Science Lesson', '2020-11-02 05:39:31', '0000-00-00 00:00:00', 1),
(25, 25, 'Physics Waves: Frequency & Wavelength FREE Science Lesson', '2020-11-02 05:41:43', '0000-00-00 00:00:00', 1),
(26, 24, 'Importance of maths in daily life', '2020-11-02 05:45:25', '0000-00-00 00:00:00', 1),
(27, 24, 'Importance of maths in daily life', '2020-11-02 05:46:47', '0000-00-00 00:00:00', 1),
(28, 24, 'Importance of maths in daily life', '2020-11-02 05:47:35', '0000-00-00 00:00:00', 1),
(29, 24, 'Why Should You Study Math?', '2020-11-02 05:50:45', '0000-00-00 00:00:00', 1),
(30, 24, 'Why Should You Study Math?', '2020-11-02 05:55:07', '0000-00-00 00:00:00', 1),
(31, 24, 'Why Should You Study Math?', '2020-11-02 05:59:08', '0000-00-00 00:00:00', 1),
(32, 25, 'Physics', '2020-11-02 06:07:25', '0000-00-00 00:00:00', 1),
(33, 23, 'English Course', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(34, 26, 'English Course', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(35, 33, 'Introduction', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(36, 35, 'Introduction', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(37, 36, 'Introduction', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(38, 21, 'more basic about chemistry', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(39, 34, 'tt', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(40, 38, 'Istopes Definition', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(41, 37, 'Istopes Definition', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(42, 30, 'Introduction', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(43, 1, 'Introduction', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(44, 2, 'Introduction', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(45, 4, 'Water', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1),
(46, 2, '3rd lecture', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `course_lectures_detail`
--

CREATE TABLE `course_lectures_detail` (
  `id` bigint(11) NOT NULL,
  `course_lectures_id` bigint(11) NOT NULL,
  `unique_id` bigint(11) NOT NULL,
  `title` varchar(500) NOT NULL,
  `duration` varchar(50) NOT NULL,
  `video` varchar(500) NOT NULL,
  `added_on` datetime NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `thumbnail` varchar(255) NOT NULL DEFAULT 'lecturethumb.png'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course_lectures_detail`
--

INSERT INTO `course_lectures_detail` (`id`, `course_lectures_id`, `unique_id`, `title`, `duration`, `video`, `added_on`, `status`, `thumbnail`) VALUES
(1, 3, 11592477641, 'Marshmello', '5:00', '11592477641_MarshmelloAnneMarieFRIENDSLyrics.mp4', '2020-06-18 12:54:01', 1, 'lecturethumb.png'),
(2, 3, 11592478493, 'will carry on', '5:00', '11592478493_Will carry on.mp4', '2020-06-18 13:08:14', 1, 'lecturethumb.png'),
(3, 4, 11592481112, 'I am mess', '7', '11592481112_Bebe Rexha - I\'m A Mess (Lyrics) - YouTube.mkv', '2020-06-18 13:51:52', 1, 'lecturethumb.png'),
(6, 7, 11595676756, 'How to work with algos', '5', '11595676756_25fce3b4cfa77dd4127086f23bae0981.mp4', '2020-07-25 13:32:36', 1, 'lecturethumb.png'),
(7, 0, 11602347553, 'title', 'duration', '11602347553_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 11:33:08', 1, 'lecturethumb.png'),
(8, 9, 11602347636, 'Introduction to atom', '5', '11602347636_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 11:34:22', 1, 'lecturethumb.png'),
(9, 10, 11602348288, 'lorem ipsum dummy', '5:00', '11602348288_Chemistry Tutorial- Chemical Elements (1-2).mp4', '2020-10-10 11:45:18', 1, 'lecturethumb.png'),
(13, 13, 11602348827, 'vectoer scaler', '6:00', '11602348827_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 11:54:10', 1, 'lecturethumb.png'),
(14, 14, 11602348855, 'What is physics', '4:00', '11602348855_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 11:54:50', 1, 'lecturethumb.png'),
(15, 15, 11602348952, 'Define administration', '5:00', '11602348952_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 11:56:16', 1, 'lecturethumb.png'),
(16, 16, 11602348995, 'what is humanity', '5:00', '11602348995_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 11:56:54', 1, 'lecturethumb.png'),
(17, 17, 11602350914, 'intro to deviation 360', '6:00', '11602350914_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:29:09', 1, 'lecturethumb.png'),
(18, 17, 11602350950, 'Tum hi ho ', '8:00', '11602350950_Chemistry Tutorial- Chemical Elements (1-2).mp4', '2020-10-10 12:29:37', 1, 'lecturethumb.png'),
(19, 18, 11602352331, 'This is really nice', '5:00', '11602352331_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:52:47', 1, 'lecturethumb.png'),
(21, 20, 11602747764, 'Waseem uploaded this', '12:00', '11602747764_SampleVideo_1280x720_2mb.mp4', '2020-10-15 02:42:55', 1, 'lecturethumb.png'),
(22, 21, 11602747839, 'Nice collection', '12:00', '11602747839_SampleVideo_1280x720_2mb.mp4', '2020-10-15 02:44:14', 1, 'lecturethumb.png'),
(23, 22, 11602747865, 'What could be done ?', '5:00', '11602747865_SampleVideo_1280x720_2mb.mp4', '2020-10-15 02:44:47', 1, 'lecturethumb.png'),
(24, 23, 11603885934, 'What is mng', '1:00', '11603885934_SampleVideo_1280x720_2mb.mp4', '2020-10-28 06:52:25', 1, 'lecturethumb.png'),
(25, 23, 11603885966, 'is it enought', '1:00', '11603885966_SampleVideo_1280x720_2mb.mp4', '2020-10-28 06:53:06', 1, 'lecturethumb.png'),
(26, 17, 11602350914, 'what we can do', '6:00', '11602350914_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:29:09', 1, 'lecturethumb.png'),
(27, 17, 11602350914, 'how to do with it', '6:00', '11602350914_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:29:09', 1, 'lecturethumb.png'),
(28, 17, 11602350914, 'this is a new video for', '6:00', '11602350914_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:29:09', 1, 'lecturethumb.png'),
(29, 18, 11602352331, 'Probability distribution', '5:00', '11602352331_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:52:47', 1, 'lecturethumb.png'),
(30, 18, 11602352331, 'Sample preparation', '5:00', '11602352331_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:52:47', 1, 'lecturethumb.png'),
(31, 18, 11602352331, 'Numerical measures', '5:00', '11602352331_Diljit Dosanjh- Faraar  (Audio) G.O.A.T. - Latest Punjabi Song 2020.mp4', '2020-10-10 12:52:47', 1, 'lecturethumb.png'),
(33, 0, 11604317582, 'title', 'duration', '11604317582_Importance of maths in daily life 144 x 256.mp4', '2020-11-02 05:46:47', 1, 'lecturethumb.png'),
(35, 0, 11604318139, 'title', 'duration', '11604318139_Why Should You Study Math 144 x 256.mp4', '2020-11-02 05:56:15', 1, 'lecturethumb.png'),
(41, 12, 5, 'Types of Matter: Elements, Compounds, and Mixtures', '4.2480907000000006', '6f066385cc10e547dcca19b9f3e71a74.mp4', '0000-00-00 00:00:00', 1, 'a406c689864e5f4efed8199df50957f3.jpg'),
(42, 12, 5, 'Measurement and Significant Figures', '3.6378', '2bf801369e36e0863e04514594b59925.mp4', '0000-00-00 00:00:00', 1, 'c6963d3b520d42370a18823e1b19f0ca.jpg'),
(43, 12, 5, 'Scientific Notation and Dimensional Analysis', '5.213266816666667', '78fa83f4117f63672f1b23f47c6e4fa7.mp4', '0000-00-00 00:00:00', 1, 'ce8c9bd9120115a88135cb6662b1d5d8.jpg'),
(44, 12, 5, 'History of Atomic Theory!', '4.42495', '4bfe9bbdff64f4f34334de69c68f8f9c.mp4', '0000-00-00 00:00:00', 1, '2da30df1c63423400a6d4eaf21393ed5.jpg'),
(45, 12, 5, 'Nuclide Symbols: Atomic Number, Mass Number, Ions, and Isotopes', '5.066983333333334', '3e15bcc0d3a751728489a22e7ce784b7.mp4', '0000-00-00 00:00:00', 1, '73c6f4c9995db35b682437a6d13ff57a.jpg'),
(46, 12, 5, 'Balancing Chemical Equations!', '4.293369616666666', 'fef683b4f4049e57946688cab11da58c.mp4', '0000-00-00 00:00:00', 1, '342405be8022d17173cf157b9a9f0ee0.jpg'),
(47, 11, 5, 'Carbon... SO SIMPLE: Crash Course Biology #1', '12.548066666666667', 'c7c02d56e60afa880365d23c4699d05a.mp4', '0000-00-00 00:00:00', 1, 'bb3ec21c188694f43814edc3293a8a57.jpg'),
(48, 11, 5, 'Water - Liquid Awesome: Crash Course Biology #2', '11.280253966666667', '58372b538de5585f7185af7483529235.mp4', '0000-00-00 00:00:00', 1, 'c0b09264efaf94c1ef8d90d9a2fc7321.jpg'),
(49, 11, 5, 'Biological Molecules - You Are What You Eat: Crash Course Biology #3', '14.137856383333334', '82ba433094a5aa943187d348fb6eb474.mp4', '0000-00-00 00:00:00', 1, '439a934f77ac2262dabd31d0448d1a5f.jpg'),
(50, 11, 5, 'Eukaryopolis - The City of Animal Cells: Crash Course Biology #4', '11.582116666666668', 'fd1d70a221b28a361c775dee8efa4cb6.mp4', '0000-00-00 00:00:00', 1, '501434e9508646186b3e284d2b0351fe.jpg'),
(51, 11, 5, 'In Da Club - Membranes & Transport: Crash Course Biology #5', '11.74813605', '29e3ed1c04a4ba1713909b510eae4f21.mp4', '0000-00-00 00:00:00', 1, 'c04a80a12185b414a0dbbe6ce484f01f.jpg'),
(52, 11, 5, 'Plant Cells: Crash Course Biology #6', '10.461366666666667', '354fc4e056e8104741a262978fd321e8.mp4', '0000-00-00 00:00:00', 1, '91723dbcfdd61e32abfdc1906a367ca8.jpg'),
(53, 33, 5, 'Beginner English Introduction!', '0.9853000833333333', '8a47d8757c6f5aaba7b594936f071d74.mp4', '0000-00-00 00:00:00', 1, 'a7027cfb656e813c94b00ec7a9bfa774.jpg'),
(54, 33, 5, 'English Consonants + Vowels', '5.053823133333333', 'd3b54268d2792aef637a06c128f26835.mp4', '0000-00-00 00:00:00', 1, '97459b6505d150af3e25d26c72d43c39.jpg'),
(55, 33, 5, 'English Grammar: a / an + Noun', '5.5298322', 'f025d6425d170bef7aa299195ef8d935.mp4', '0000-00-00 00:00:00', 1, 'f2610e013e51a09a6a4940d5591ab239.jpg'),
(56, 33, 5, 'English Grammar: Singular + Plural Nouns', '9.3677037', '36510a89b675ece43b3dace00d68ffe1.mp4', '0000-00-00 00:00:00', 1, '5e1b5a4458a06a2ae6485e5bf53cba41.jpg'),
(57, 33, 5, 'English Grammar: Subjective Pronouns', '6.180377933333333', '5bdca2afea595eedf8d606ea8e1b7d1a.mp4', '0000-00-00 00:00:00', 1, 'e8b7b04d43f66c9205d253c41b4c1bfe.jpg'),
(58, 33, 5, 'English Grammar Subjective Pronouns + \'Be\' Verb', '6.892843533333333', 'd370c9633938a60c8cb7951d81368dfe.mp4', '0000-00-00 00:00:00', 1, '3f453ab4bb746042fec6ac6498419050.jpg'),
(59, 26, 5, 'Addition and Subtraction of Small Numbers', '8.642080116666667', '7ba09da78e89bfb1c3e93166bdc692ed.mp4', '0000-00-00 00:00:00', 1, 'f207c16e4f5f93a7d3c896145807bd58.jpg'),
(60, 26, 5, 'Multiplication and Division of Small Numbers', '6.32472865', '146b240db97732ba6f9fc655206fdab2.mp4', '0000-00-00 00:00:00', 1, '9bd2ad036c9821630d2f37355956ab69.jpg'),
(61, 26, 5, 'Understanding Fractions, Improper Fractions, and Mixed Numbers', '6.2163688666666665', '8cc737015757f5aac7cb9b8b1dbc6905.mp4', '0000-00-00 00:00:00', 1, 'a88cc18fbaf94213bdd2f1e01eba2706.jpg'),
(62, 26, 5, 'Large Whole Numbers: Place Values and Estimating', '4.48416025', '5ce136255e04cf7c565d65a3c608b60b.mp4', '0000-00-00 00:00:00', 1, '72d2cf48d1654539de3b0df6864f89ac.jpg'),
(63, 26, 5, 'Decimals: Notation and Operations', '4.337874533333333', '47c60d87eda04fe9ba906d23229b9e6f.mp4', '0000-00-00 00:00:00', 1, '8a3c357d503058fe95f56ba053650b5f.jpg'),
(64, 26, 5, 'Working With Percentages', '3.5983189666666666', 'af3ee8b4b19783b28e2e0c46e9379a6a.mp4', '0000-00-00 00:00:00', 1, '6d9094e58813360015dab723b199d657.jpg'),
(65, 24, 5, 'Motion in a Straight Line: Crash Course Physics #1', '10.666473166666666', 'b959f859067338eb315550fa37fc69e7.mp4', '0000-00-00 00:00:00', 1, '07ff397ba594a742d37889e31efef2dc.jpg'),
(66, 24, 5, 'Derivatives: Crash Course Physics #2', '10.03335', 'bc0f4f8947083c328b1b805d300913cd.mp4', '0000-00-00 00:00:00', 1, '67555e501a33d2f32d3ac5cf7177bc3b.jpg'),
(67, 24, 5, 'Integrals: Crash Course Physics #3', '10.1355102', 'c92b7eb4b193511677c73ebe00160034.mp4', '0000-00-00 00:00:00', 1, '15744b4e76851e4baa74a5fb1ae54c2a.jpg'),
(68, 24, 5, 'Vectors and 2D Motion: Crash Course Physics #4', '10.097199999999999', 'ea8f3af53d911280aae09a54610f0cd4.mp4', '0000-00-00 00:00:00', 1, 'bc0a22ccc1fc5d054266bef4b2e59d4f.jpg'),
(69, 24, 5, 'Newton\'s Laws: Crash Course Physics #5', '11.0619864', '50c2a63d50add89f658585b45e50f88e.mp4', '0000-00-00 00:00:00', 1, '98e4b57d9c81d2ba148edb42161fefc3.jpg'),
(70, 24, 5, 'Newton\'s Laws: Crash Course Physics #5', '10.973750566666666', 'cee2edb21b0a2233fdd58f952e194f9e.mp4', '0000-00-00 00:00:00', 1, 'ce7c25d7f6adea47f33573b4622a12ee.jpg'),
(71, 34, 5, 'Beginner English Introduction!', '0.9853000833333333', 'db0ddb5e4ce14f6cf6c6b02ac908f178.mp4', '0000-00-00 00:00:00', 1, 'd4d636d7ee9989a5bee20b5b1331c481.jpg'),
(72, 34, 5, 'English Consonants + Vowels', '5.053823133333333', '8e031c4044eefc74f0238131a6fb2365.mp4', '0000-00-00 00:00:00', 1, '429a020790caa67620bbda50b2b454e5.jpg'),
(73, 34, 5, 'English Grammar: a / an + Noun', '5.5298322', '88a15a50e891673fd106e353893a9912.mp4', '0000-00-00 00:00:00', 1, 'b57e4e9718395262ce0c3eb34e091a91.jpg'),
(74, 35, 5, 'Intro to basic math', '0.22506666666666666', '7ea96c22f7950b1aa506fbb191c5d5c8.mp4', '0000-00-00 00:00:00', 1, 'de16d3c807e5498ee9a1764e5d39e75f.png'),
(75, 37, 5, 'what is literature', '0.22506666666666666', '8a1990160b8629eeac4ab455ab884d0e.mp4', '0000-00-00 00:00:00', 1, 'd434fdf9fd7cbfc83d6cc50a6ca8c26b.jpg'),
(76, 40, 6060, 'Definition of Isotopes ', '1.0526379666666668', 'fd19183db26ab6a1d6e2551b10c20ecd.mp4', '0000-00-00 00:00:00', 1, '4c600ab1ac44e2acf7fb7261c74c86e0.jpeg'),
(77, 40, 6060, 'Definition 2', '0.8479153666666667', '1f0469a4a04ca49a9423e38f9a1a5d2c.mp4', '0000-00-00 00:00:00', 1, 'e1af73b37e80ebbced6ba6f7bf4ff30a.jpeg'),
(79, 1, 615, 'Forms of Government ', '5.337493583333333', 'dcde68e422af16eb72f714134416bd6f.mp4', '0000-00-00 00:00:00', 1, '9583f6584fac8f206fde156ec7c30e7c.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `course_objectives`
--

CREATE TABLE `course_objectives` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `selection_type` enum('one','multiple') NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_objectives`
--

INSERT INTO `course_objectives` (`id`, `title`, `selection_type`, `quiz_id`) VALUES
(1, 'Pakistan capital is', 'one', 4),
(2, 'This year is', 'one', 4),
(3, 'This year is', 'one', 4),
(4, 'pakistan is a', 'one', 4),
(5, 'Pakistan has 4 provice', 'one', 4),
(6, 'America is a city', 'one', 4),
(7, 'Pakistan has province', 'one', 4),
(8, 'Pakistan is ', 'one', 6),
(9, 'There are 365 days in year', 'one', 6),
(10, 'What is the attack called “evil twin”?', 'one', 6),
(11, 'What are the forms of password cracking techniques?', 'one', 6),
(12, 'Which type of hacker represents the highest risk to your network?', 'one', 6),
(13, 'Hacking for a cause is called ..................', 'one', 6),
(14, 'Telecommunication waves are …', 'one', 8),
(15, 'Which among the following correctly defines the phenomenon in which three dimensional image is formed through penetration of two light beams from laser?', 'one', 8),
(16, ' Which among the following is used during pregnancy to check on the development of the fetus?', 'one', 8),
(17, 'The waves which do not require any medium to propagate is known as', 'one', 8),
(18, 'Overall and strategic planning is done by the', 'one', 9),
(19, 'Consider the following statements : - Planning involves', 'one', 9),
(25, 'What is mean LAN', 'one', 10),
(26, 'The word humanity comes from ', 'one', 10),
(27, 'Osama bin ladin belongs to ', 'one', 10),
(28, 'Abdul sattar edhi was from ', 'one', 10),
(29, 'PHP is a language', 'one', 10),
(30, 'Allama iqbal was poet from', 'one', 10);

-- --------------------------------------------------------

--
-- Table structure for table `course_objectives_options`
--

CREATE TABLE `course_objectives_options` (
  `id` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `question_id` int(11) NOT NULL COMMENT 'primary key of course_objectives',
  `is_true` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_objectives_options`
--

INSERT INTO `course_objectives_options` (`id`, `answer`, `question_id`, `is_true`) VALUES
(16, '4', 7, 'yes'),
(17, '5', 7, 'no'),
(18, 'country', 8, 'yes'),
(19, 'iceland', 8, 'no'),
(20, 'none', 8, 'no'),
(21, 'yes', 9, 'yes'),
(22, 'no', 9, 'no'),
(23, 'maybe', 9, 'no'),
(24, 'Rogue access point', 10, 'yes'),
(25, ' ARP poisoning', 10, 'no'),
(26, 'Session hijacking', 10, 'no'),
(27, 'MAC spoofing', 10, 'no'),
(28, 'AttackSyllable', 11, 'no'),
(29, 'AttackBrute Forcing', 11, 'no'),
(30, 'AttacksHybrid', 11, 'no'),
(31, ' All of the above', 11, 'yes'),
(32, 'Black-hat hackers', 12, 'no'),
(33, ' Grey-hat hackers', 12, 'no'),
(34, ' Script kiddies', 12, 'no'),
(35, 'Disgruntled employees', 12, 'yes'),
(36, ' Hacktivism', 13, 'yes'),
(37, 'Black-hat hacking', 13, 'no'),
(38, 'Active hacking', 13, 'no'),
(39, '  Activism', 13, 'no'),
(40, 'Microwave', 14, 'yes'),
(41, 'Visible wave', 14, 'no'),
(42, 'Infrared', 14, 'no'),
(43, 'Ultraviolet', 14, 'no'),
(44, '3-D photography', 15, 'no'),
(45, 'X-ray photography', 15, 'no'),
(46, 'Holography', 15, 'yes'),
(47, ' Cinematography', 15, 'no'),
(48, 'infra-red', 16, 'no'),
(49, ' Ultrasonic', 16, 'no'),
(50, 'Sound waves', 16, 'yes'),
(51, 'Micro waves', 16, 'no'),
(52, 'Electromagnetic wave', 17, 'yes'),
(53, 'Mechanical wave', 17, 'no'),
(54, 'Elastic wave', 17, 'no'),
(55, ' a & c', 17, 'no'),
(56, 'Top management', 18, 'no'),
(57, 'Middle level management', 18, 'yes'),
(58, 'Supervisory level management', 18, 'no'),
(59, 'None of these', 18, 'no'),
(60, 'Choice among alternative courses of action', 19, 'no'),
(61, 'Forecasting', 19, 'yes'),
(62, 'Both (a) and (b)', 19, 'no'),
(63, 'Decision only by production manager ', 19, 'no'),
(64, 'Division of authority', 20, 'no'),
(65, 'Delegation of authority', 20, 'no'),
(66, 'Decentralisation of authority', 20, 'no'),
(67, 'Delegation of responsibility', 20, 'no'),
(68, 'Delegation of responsibility', 21, 'no'),
(69, 'Rogue access point', 21, 'yes'),
(70, 'Black-hat hackers', 21, 'no'),
(71, 'Microwave', 21, 'no'),
(72, 'Human', 22, 'yes'),
(73, 'illusion', 22, 'no'),
(74, 'its server side', 23, 'yes'),
(75, 'clinet side', 23, 'no'),
(76, 'human', 24, 'no'),
(77, 'humain beung', 24, 'no'),
(78, 'from me other side', 24, 'no'),
(79, 'Local area network', 25, 'yes'),
(80, 'Lai v na  gai ', 25, 'no'),
(81, 'Tey nibhai v na gai', 25, 'no'),
(82, 'Human', 26, 'yes'),
(83, 'humanism', 26, 'no'),
(84, 'communism', 26, 'no'),
(85, 'saudi arabia', 27, 'yes'),
(86, 'afghanistan', 27, 'no'),
(87, 'pakistan', 27, 'no'),
(88, 'Pakistan', 28, 'yes'),
(89, 'afghanistan', 28, 'no'),
(90, 'Iran', 28, 'no'),
(91, 'server side', 29, 'yes'),
(92, 'cliend side', 29, 'no'),
(93, 'backend', 29, 'no'),
(94, 'Kashmir', 30, 'no'),
(95, 'pakistan', 30, 'yes'),
(96, 'iran', 30, 'no'),
(97, 'iraq', 30, 'no'),
(98, 'client side', 31, 'yes'),
(99, 'interpreted', 31, 'yes'),
(100, 'backend language', 31, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `course_quiz`
--

CREATE TABLE `course_quiz` (
  `id` int(11) NOT NULL,
  `course_id` int(11) NOT NULL,
  `quiz_title` varchar(255) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `type` enum('objective','subjective') NOT NULL COMMENT 'objective is multiple choice, subjective is long answers and user will submit a pdf file',
  `question` varchar(512) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_quiz`
--

INSERT INTO `course_quiz` (`id`, `course_id`, `quiz_title`, `status`, `type`, `question`) VALUES
(4, 3, 'Math quiz', 1, 'objective', ''),
(5, 3, 'Algebra', 1, 'objective', ''),
(6, 4, 'First quiz', 1, 'objective', ''),
(10, 16, 'Bio Chemistry', 1, 'objective', ''),
(11, 0, 'PHP Test', 1, '', ''),
(12, 1, 'Newton laws', 1, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `course_subjectives`
--

CREATE TABLE `course_subjectives` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `quiz_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_subjectives`
--

INSERT INTO `course_subjectives` (`id`, `title`, `quiz_id`) VALUES
(1, 'Write a note on your favourite teacher', 6),
(2, 'What is algebra explain in details ?', 6),
(3, 'This year is', 4),
(4, 'pakistan is a ', 4),
(5, 'helo', 6),
(6, 'hello', 6),
(7, 'Telecommunication waves are …', 8),
(8, 'What is humanity ?', 0),
(9, 'what is android?', 10);

-- --------------------------------------------------------

--
-- Table structure for table `customerdata`
--

CREATE TABLE `customerdata` (
  `id` int(11) NOT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `business` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `participants_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `recomended` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `customerdata`
--

INSERT INTO `customerdata` (`id`, `company_name`, `business`, `participants_name`, `designation`, `phone`, `mobile`, `email`, `city`, `country`, `recomended`, `description`, `created_on`) VALUES
(1, 'cyphersol', 'Software development', 'Waseem', 'ceo', '03417090031', '03417090031', 'farrukh.firstwebsol@gmail.com', 'lahore', 'pakistan', 'imran ', '<p>Lorem ipsum dummy text</p>', '2020-03-11 15:35:42'),
(9, 'ABC', 'Training', 'Ashfaq', 'PR', '966551619623', '966551619623', 'ashfaqstar2008@hotmail.com', 'Riyadh', 'KSA', 'Linkedin', '<p>This is contact number from old list</p>', '2020-04-05 17:44:50'),
(10, 'CPPEx Global', 'trainign', 'Sajid', 'leader', '03008464155', '03008464155', 'mashfaqstar2008@hotmail.com', 'Lahore', 'Pakistan', 'Linkedin', '<p>This is contact number from old list</p>', '2020-04-05 17:46:07'),
(11, 'abcd', 'printing', 'Zeinab', 'Office Manager', '03008464155', '03008464155', 'z.hayek@cppexglobal.org', 'Riyadh', 'KSA', 'Linkedin', '<p>This is contact number from old list</p>', '2020-04-05 17:53:43'),
(12, 'XYZ', 'BOOK', 'SAJID', 'Sales Manager', '551619623', '551619623', 'm.sajid@cppexglobal.org', 'Riyadh', 'Pakistan', 'Linkedin', '<p>This is contact number from old list</p>', '2020-04-05 17:54:15'),
(13, 'xyz', 'CPPEx GLOBAL', 'Sajjad Anwar', 'sales', '923008464155', '923008464155', 'm.sajid@cppexglobal.org', 'Lahore', 'Pakistan', 'Linkedin', '<p>This is contact number from old list</p>', '2020-04-05 17:54:54'),
(14, 'yyyyqz', 'packaging', 'Arshad', 'aa', 'aa', 'aa', 'info@cppexglobal.org', 'Riyadh', 'Pakistan', 'Linkedin', '<p>This is contact number from old list</p>', '2020-04-05 17:56:48'),
(15, 'test email', 'test businuss', 'arslan khan', 'Dev', '3242342342', '432424324', 'arslan.dev231@gmail.com', 'dasdasda', 'dasdsad', 'asdsadas', '<p>hello g jsag jhg jtest data data</p>', '2020-04-10 11:29:43');

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `question` varchar(255) NOT NULL,
  `answer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faq_cat`
--

CREATE TABLE `faq_cat` (
  `id` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `friend_id`, `user_id`) VALUES
(1, 23, 80),
(2, 55, 47),
(3, 56, 74),
(4, 23, 74),
(5, 78, 74),
(6, 62, 80),
(7, 69, 80),
(8, 70, 80),
(9, 76, 83),
(10, 23, 83),
(11, 82, 83);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getcourse`
-- (See below for the actual view)
--
CREATE TABLE `getcourse` (
`course_id` int(11)
,`youtube_video` varchar(255)
,`terms` enum('First Term','Second Term','Third Term')
,`class_name` varchar(255)
,`classid` int(11)
,`subjects` varchar(255)
,`subject_thumb` varchar(255)
,`trainerName` varchar(50)
,`trainerImage` varchar(255)
,`courseTitle` varchar(255)
,`price` double
,`thumbnail` varchar(244)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `getsinglecourse`
-- (See below for the actual view)
--
CREATE TABLE `getsinglecourse` (
`course_id` int(11)
,`class_name` varchar(255)
,`classid` int(11)
,`subjects` varchar(255)
,`courseTitle` varchar(255)
,`price` double
,`short_description` tinytext
,`terms` enum('First Term','Second Term','Third Term')
,`post_description` text
,`created_on` timestamp
,`video_url` varchar(255)
,`thumbnail` varchar(244)
,`trainerName` varchar(50)
,`trainerImage` varchar(255)
,`trainerDesignation` varchar(255)
,`trainerDescription` text
,`lesseonsCount` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'members', 'General User');

-- --------------------------------------------------------

--
-- Table structure for table `icon_classes`
--

CREATE TABLE `icon_classes` (
  `id` int(11) NOT NULL,
  `icon_class` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icon_classes`
--

INSERT INTO `icon_classes` (`id`, `icon_class`) VALUES
(1, 'bx-shape-triangle'),
(2, 'bx-font-family'),
(3, 'bxs-drink'),
(4, 'bx-first-aid'),
(5, 'bx-bar-chart-alt-2'),
(6, 'bx-briefcase-alt-2'),
(7, 'bx-book-reader'),
(8, 'bx-target-lock'),
(9, 'bx-desktop'),
(10, 'bx-stopwatch');

-- --------------------------------------------------------

--
-- Table structure for table `library_management`
--

CREATE TABLE `library_management` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'noimg.png',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `bookfile` varchar(255) NOT NULL DEFAULT 'nofile',
  `course_category_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `library_management`
--

INSERT INTO `library_management` (`id`, `title`, `image`, `created_on`, `status`, `bookfile`, `course_category_id`, `cat_id`) VALUES
(12, 'Marketing', 'uploads/books/cover/41WqNryqTlL2.jpg', '2020-09-29 07:46:16', 1, 'uploads/books/missing-address3.pdf', 1, 1),
(13, 'Graphic design', 'uploads/books/cover/php.jpg', '2020-09-29 07:53:38', 1, 'uploads/books/Untitled_Document.pdf', 1, 1),
(15, 'Business Administration', 'uploads/books/cover/pdf21.jpg', '2020-10-10 15:49:14', 1, 'uploads/books/English-English_-_Hindi_Dictionary__English_word_-_its_meaning_in_English_Hindi_along_with_sentence_(_PDFDrive_)1.pdf', 4, 6),
(16, 'Bio chemistry', 'uploads/books/cover/00b2e212d43627308d7e42a858714c17.png', '2020-10-10 15:52:50', 1, 'uploads/books/English-English_-_Hindi_Dictionary__English_word_-_its_meaning_in_English_Hindi_along_with_sentence_(_PDFDrive_)2.pdf', 3, 4),
(17, 'my chemistry', 'uploads/books/cover/mobile-bg.png', '2020-10-16 14:29:07', 1, 'uploads/books/Untitled_Document1.pdf', 3, 4),
(18, 'javascript', 'uploads/books/cover/logo.png', '2020-11-06 11:58:51', 1, 'uploads/books/Thesis_.pdf', 0, 1),
(20, 'PHP developer', 'uploads/books/cover/Untitled-1.png', '2020-11-06 18:46:47', 1, 'uploads/books/arooj_10th_juna1.pdf', 0, 1),
(21, 'Organic chemistry', 'uploads/books/cover/basic-chemistry4.jpg', '2020-11-06 18:47:25', 1, 'uploads/books/arooj_10th_juna2.pdf', 3, 4),
(22, 'Qunatam chemistry', 'uploads/books/cover/q1.jpg', '2020-11-06 18:49:40', 1, 'uploads/books/arooj_10th_juna3.pdf', 3, 4),
(23, 'Basic chemistry', 'uploads/books/cover/basic-chemistry3.jpg', '2020-11-07 08:37:30', 1, 'uploads/books/neworder.pdf', 3, 4),
(24, 'Advance Chemistry', 'uploads/books/cover/success-summary-img1.png', '2021-03-28 20:03:13', 1, 'uploads/books/AMERICAN_AUCTION_GEEKS_COMPANY.pdf', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` int(11) NOT NULL,
  `location_type` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `street` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suite_apt` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zipcode` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `latitude` double DEFAULT NULL,
  `longitude` double DEFAULT NULL,
  `formatted_address` text COLLATE utf8_unicode_ci DEFAULT NULL,
  `zoom` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(15) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `membership_plans`
--

CREATE TABLE `membership_plans` (
  `id` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` double NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `membership_plans`
--

INSERT INTO `membership_plans` (`id`, `description`, `price`, `title`) VALUES
(1, 'You can buy monthly subscription to get access to 3 courses', 100, 'Monthly'),
(2, 'You can buy Quarterly subscription to get access to 10 coursesLorem ipsum answer', 300, 'Quarterly'),
(3, 'You can buy Yearly subscription to get access to unlimited courses and watch time.', 500, 'Yearly');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `message_id` int(11) UNSIGNED NOT NULL,
  `conversation_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `body` text COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `read` tinyint(3) UNSIGNED NOT NULL DEFAULT 0,
  `type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0 COMMENT '1=deleted for one,2 deleted for everyone',
  `deleted_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`message_id`, `conversation_id`, `user_id`, `body`, `date`, `read`, `type`, `status`, `deleted_by`) VALUES
(1, 1, 18, 'krdi', '2020-10-31 12:50:11', 1, 'text', 0, 0),
(2, 1, 18, 'chat delete', '2020-10-31 12:50:21', 1, 'text', 0, 0),
(3, 1, 23, 'hi kesy hu', '2020-10-31 12:50:30', 1, 'text', 0, 0),
(4, 1, 18, 'thek hn', '2020-10-31 12:50:39', 1, 'text', 0, 0),
(5, 1, 18, 'Msj kr', '2020-10-31 12:50:47', 1, 'text', 0, 0),
(6, 1, 18, 'dubara', '2020-10-31 12:50:50', 1, 'text', 0, 0),
(7, 1, 23, 'yar msg live arh a', '2020-10-31 12:50:51', 1, 'text', 0, 0),
(8, 1, 23, 'but image q nai ari apki or time', '2020-10-31 12:51:03', 1, 'text', 0, 0),
(9, 1, 23, 'kya kr di', '2020-10-31 12:52:21', 1, 'text', 0, 0),
(10, 1, 18, 'year pata ne', '2020-10-31 12:54:14', 1, 'text', 0, 0),
(11, 1, 23, 'yar check kr tu time nai bhej rha', '2020-10-31 12:54:28', 1, 'text', 0, 0),
(12, 1, 23, 'image tu aa ei nai ri', '2020-10-31 12:54:36', 1, 'text', 0, 0),
(13, 1, 23, 'onlineusers mey b', '2020-10-31 12:54:41', 1, 'text', 0, 0),
(14, 1, 18, 'online users m image aa to re h', '2020-10-31 12:56:47', 1, 'text', 0, 0),
(15, 1, 23, 'teri nai ari', '2020-10-31 12:57:38', 1, 'text', 0, 0),
(16, 1, 18, 'hello', '2020-10-31 13:27:19', 1, 'text', 0, 0),
(17, 1, 18, 'hello ', '2020-10-31 13:27:47', 1, 'text', 0, 0),
(18, 1, 18, 'BC Kia hal hy', '2020-10-31 13:27:53', 1, 'text', 0, 0),
(19, 1, 23, 'thk aa yaka', '2020-10-31 13:28:02', 1, 'text', 0, 0),
(20, 1, 18, 'bra BC aen', '2020-10-31 13:28:18', 1, 'text', 0, 0),
(21, 1, 23, 'ki huya', '2020-10-31 13:28:27', 1, 'text', 0, 0),
(22, 1, 23, 'sai hay ab', '2020-10-31 13:28:30', 1, 'text', 0, 0),
(23, 1, 23, 'hi', '2020-10-31 13:37:17', 1, 'text', 0, 0),
(24, 5, 23, 'hi', '2020-11-01 09:22:53', 0, 'text', 0, 0),
(25, 4, 23, 'hi', '2020-11-01 09:41:08', 0, 'text', 0, 0),
(26, 4, 23, 'hi', '2020-11-01 09:41:11', 0, 'text', 0, 0),
(27, 1, 23, 'hi', '2020-11-01 09:41:27', 1, 'text', 0, 0),
(28, 1, 23, 'hi', '2020-11-01 09:41:32', 1, 'text', 0, 0),
(29, 1, 23, 'hy', '2020-11-01 09:41:35', 1, 'text', 0, 0),
(30, 1, 18, 'hello', '2020-11-01 09:49:59', 0, 'text', 0, 0),
(31, 1, 18, 'baby', '2020-11-01 09:50:07', 0, 'text', 0, 0),
(32, 8, 18, 'Hello baby', '2020-11-02 02:54:43', 0, 'text', 0, 0),
(33, 8, 18, 'Hello', '2020-11-02 02:55:23', 0, 'text', 0, 0),
(34, 8, 18, 'Hi', '2020-11-02 02:56:16', 0, 'text', 0, 0),
(35, 7, 18, 'Hello', '2020-11-02 03:16:52', 1, 'text', 0, 0),
(36, 7, 32, 'hi.', '2020-11-02 03:16:59', 1, 'text', 0, 0),
(37, 7, 18, 'Kia Hal hey', '2020-11-02 03:17:02', 0, 'text', 0, 0),
(38, 7, 32, 'alhamdulilah', '2020-11-02 03:17:06', 1, 'text', 0, 0),
(39, 7, 32, 'ap ksy hain sir.', '2020-11-02 03:17:11', 1, 'text', 0, 0),
(40, 7, 18, 'Kia ho raha h', '2020-11-02 03:17:13', 0, 'text', 0, 0),
(41, 7, 32, 'php ', '2020-11-02 03:17:33', 1, 'text', 0, 0),
(42, 14, 32, 'hi', '2020-11-02 03:22:28', 0, 'text', 0, 0),
(43, 17, 23, 'hi', '2020-11-02 08:17:41', 0, 'text', 0, 0),
(44, 19, 74, 'hi', '2020-11-05 11:13:24', 0, 'text', 0, 0),
(45, 20, 81, 'hello', '2020-11-05 11:18:45', 0, 'text', 0, 0),
(46, 25, 74, 'hi', '2020-11-06 06:16:41', 0, 'text', 0, 0),
(47, 34, 80, 'Hi', '2020-11-07 10:52:51', 0, 'text', 0, 0),
(48, 35, 81, 'hello', '2020-11-07 12:48:31', 0, 'text', 0, 0),
(49, 36, 81, 'hello', '2020-11-10 11:25:44', 0, 'text', 0, 0),
(50, 39, 83, 'helo', '2020-11-25 06:44:24', 0, 'text', 0, 0),
(51, 41, 85, 'hi', '2020-11-26 11:04:57', 0, 'text', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'image',
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.mp4',
  `thumbnail` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `slug_id` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `post_title`, `post_description`, `post_date`, `post_type`, `video_url`, `thumbnail`, `user_id`, `slug_id`, `created_on`, `category`) VALUES
(1, 'Sun Chemical owner to buy BASF pigments business', '<p><strong>DIC Corporation is to acquire BASF&rsquo;s global pigments business and integrate it into subsidiary<br />\r\nSun Chemical in a deal worth &euro;1.15bn (&pound;1.04bn).</strong></p>\r\n\r\n<p>The deal follows conversations that began when German chemical giant BASF declared its intent to sell BASF Colors &amp; Effects (BCE) and has now been officially&nbsp; agreed with the Japanese conglomerate. It is<br />\r\nexpected to be completed in Q4.<br />\r\nIn taking on BCE, DIC will grow its portfolio of pigments, which at the moment are largely produced by<br />\r\nSun Chemical, with a range of products for electronic displays, cosmetics, coatings, plastics, inks and<br />\r\nspeciality applications. The deal will put DIC in charge of more than 30 pigment production facilities<br />\r\naround the world.<br />\r\nA spokesperson for Sun Chemical told PrintWeek: &ldquo;The acquisition of BCE brings together the<br />\r\ncomplementary resources and expertise of two recognised leaders in innovation, product stewardship,<br />\r\nregulatory leadership, application support and manufacturing.<br />\r\n&ldquo;The move improves DIC&rsquo;s pigment footprint in Europe and underscores our commitment to delivering<br />\r\nsolutions tailored to meet the needs of our customers. It also allows us to compete in the global<br />\r\nmarketplace more effectively going forward.<br />\r\n&ldquo;Sun Chemical is committed to ensuring a smooth transition, with limited to no impact on customers. In<br />\r\nthe immediate future, business for customers will remain the same as usual. A transition team will be put<br />\r\nin place to ensure a smooth transition for customers and employees by the expected closing date.&rdquo;<br />\r\nAcquiring BCE is part of an ongoing drive at DIC to increase its sales to the &euro;8bn (&pound;7.25bn) mark by 2025.<br />\r\nWith its Sun Chemical business, based out of New Jersey, US, the group currently turns over around<br />\r\n$7.5bn (&pound;6.16bn) and employs more than 20,000 people worldwide.<br />\r\nThe acquisition remains subject to regulatory approval, with White &amp; Case serving as legal counsel and<br />\r\nMorgan Stanley as financial advisor to</p>\r\n', '', 'image', '', '', 0, 55, '2020-04-02 13:15:05', 'World'),
(2, 'SILCO- Coating Additives', '<p>Dispersants, flow-leveling and wetting additives, slip and antifoam additives</p>\r\n\r\n<p><strong>ILCO additives for optimised coating systems</strong></p>\r\n\r\n<p>Silcona GmbH &amp; Co. KG is focused on the development, production and marketing of innovative high<br />\r\nperformance additives for environmentally friendly coating systems. Silcona is serving the coatings<br />\r\nand graphic arts industries with a cornucopia of tailor made and highly efficient additives by the<br />\r\nfollowing brands:</p>\r\n\r\n<p><strong>SILCO SPERSE</strong></p>\r\n\r\n<p>APEO-free high performance dispersants for water based and solvent based coating systems</p>\r\n\r\n<p><strong>SILCO FLW</strong></p>\r\n\r\n<p>flow and levelling additives for various coating systems</p>\r\n\r\n<p><strong>SILCO GLIDE</strong></p>\r\n\r\n<p>high molecular silicone based slip additives</p>\r\n\r\n<p><strong>SILCO WET</strong></p>\r\n\r\n<p>wetting additives for pigment and substrate wetting</p>\r\n\r\n<p><strong>SILCO PHOBE</strong></p>\r\n\r\n<p>hydrophobing additives for construction materials</p>\r\n\r\n<p><strong>SILCO AF</strong></p>\r\n\r\n<p>antifoam additives for pigment grinding, inks and coating systems</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'image', '', '', 0, 56, '2020-04-02 13:20:26', 'Technology'),
(3, 'Industrial Wax Market Worth $12,556.8 Million by 2026: PMR', '<p>The estimated value of the industrial wax market in 2018 was $8,860.8 million.</p>\r\n\r\n<p>According to a study analysis by Persistence Market Research, ever-expanding end-use industries will give a push to the industrial<br />\r\nwax market. Further, strategic developments across regions will influence the global market between 2018 and 2026.<br />\r\nThe estimated value of the industrial wax market in 2018 is $8,860.8 million, which is expected to expand at a CAGR of 4.5% and reach<br />\r\n$12,556.8 million by the end of 2026. Also, the industrial wax market is projected to create incremental monetary opportunity worth<br />\r\n$3,696 million during the forecast period.<br />\r\nHuge demand from end-use sectors will create favorable macroeconomic environment for the global industrial wax market. In the last<br />\r\ncouple of years, there is a significant growth in the end use industries such as, in petrochemical industry, including pharmaceuticals,<br />\r\ncosmetics and plastics industries across the world, this growth is expected to create key driver for the industrial wax market in the<br />\r\ncoming future.</p>\r\n\r\n<p>Significant growth in the global economy, acquisitions and joint ventures are likely to become a more frequent industry phenomenon in</p>\r\n\r\n<p>the region. Key players from end use industries are looking forward to gain increasing incremental monetary opportunity from the</p>\r\n\r\n<p>business portfolios and also to gain market share in terms of volume and value by entering into strategic partnerships. As a result, the<br />\r\nglobal industrial wax market is estimated to witness healthy growth over the forecast period.<br />\r\nThe global industrial wax market is estimated to grow and become 1.4X during the forecast period due to the expected growth in<br />\r\npackaging, adhesive &amp; sealant sectors.<br />\r\nBy region, Western Europe, followed by North America, is projected to dominate the global industrial wax market over the forecast<br />\r\nperiod. Moreover, China is estimated to remain the most opportunistic region in South East Asia industrial wax market. In terms of<br />\r\nvalue, China is projected to create incremental monetary opportunity worth $800 million in the global industrial wax market during the<br />\r\nforecast period.</p>\r\n\r\n<p>By application, the packaging segment is expected to dominate the industrial wax market, with a value of $1,500 million in 2018.<br />\r\nThe adhesive &amp; sealant segment is projected to account for 15.4% of the market value share in the global industrial wax market during<br />\r\nthe forecast period. In terms of growth, the pharmaceutical segment is projected to grow at a sluggish growth rate as compared to the<br />\r\npackaging segment in the global industrial wax market during the latter half of the forecast period.<br />\r\nBy type, the fossil based segment is projected to dominate the global industrial wax market over the forecast period. In terms of volume,<br />\r\nthe fossil based segment is expected to hold approximately two-third of the market share in 2018 and is expected to dominate the<br />\r\nindustrial wax market throughout the forecast period. In terms of incremental monetary opportunity, the segment is expected to create<br />\r\nopportunity worth $2,200 million between 2018 and 2026. Also, synthetic based segment, is estimated to hold more than one tenth of<br />\r\nmarket share in terms of value and volume in the global industrial wax market.</p>\r\n', '', 'image', '', '', 0, 57, '2020-04-02 14:11:13', 'Technology'),
(4, 'EuPIA Updates Suitability List of Photoinitiators, Photosynergists for Food Contact Materials', '<p>The European Printing Ink Association ( <strong style=\"color:#2eb2ff;\">EuPIA</strong> ) updated its <strong style=\"color:#2eb2ff;\">Suitability List of Photoinitiators and<br />\r\nPhotosynergists for Food Contact Materials</strong> which identifies the suitability of photoinitiators and<br />\r\nphotosynergists for use in printed food contact materials, such as coatings, inks and varnishes for the<br />\r\nnon-contact side of food packaging.</p>\r\n\r\n<p>The list acts as part of EuPIA&rsquo;s industry product stewardship program for brand owners and printers<br />\r\nand provides a guideline of recommended raw materials that are deemed suitable for printing on<br />\r\nsensitive product packaging, including food-safe products.<br />\r\nThe Suitability List has been revised and adjusted to reflect changes in permitted migration limits and<br />\r\nto remove previously listed materials which have become subject to EuPIA&rsquo;s Exclusion Policy<br />\r\nfollowing their hazard reclassification as part of the REACH registration process. The list, which<br />\r\npreviously featured three tables, now has a simplified format and has been reduced to just one table,<br />\r\nwith more succinct definitions and descriptions.<br />\r\nEuPIA advises that in all cases the recommended materials should only be considered as suitable for<br />\r\nuse if their performance in inks and varnishes meets the migration limits defined in Annex 10 of the<br />\r\nSwiss Packaging Inks Ordinance (SR 817.023.21) 01.05.2017 and that any Non-Intentionally Added<br />\r\nSubstances (NIAS) present can be proven to migrate below the level deemed to be acceptable for<br />\r\nthat material, based on EuPIA Guidance for Risk Assessment of Non-Intentionally Added Substances<br />\r\n(NIAS) and Non-Listed Substances (NLS) in printing inks for food contact materials. Furthermore, the<br />\r\nfinal measurement of migration compliance is the responsibility of the printer, in line with recognized<br />\r\nconverters&rsquo; good manufacturing practices, and the end-user.<br />\r\n&ldquo;&#39;Suitability List of Photoinitiators and Photosynergists for Food Contact Materials&#39;&rdquo; forms part of<br />\r\nEuPIA&rsquo;s product stewardship approach as an industry,&quot; said Dr. Martin Kanert, EuPIA&rsquo;s executive<br />\r\nmanager. &quot;By providing this updated, standardized set of guidelines, our intention is to support brand<br />\r\nowners and printers by giving them peace of mind that they are complying with industry standards<br />\r\nand ensuring that their packaging is ultimately safe for end-users.&rdquo;</p>\r\n\r\n<p>&nbsp;</p>\r\n', '', 'image', '', '', 0, 58, '2020-04-02 14:17:27', 'World'),
(5, 'Intake of Dairy Milk Is Associated With a Greater Risk of Breast Cancer in Women', '<p align=\"center\" style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;\r\nmargin-left:0cm;text-align:center;line-height:115%;background:white\"><b><span arial=\"\" style=\"font-family:\">Intake of Dairy Milk Is Associated With a Greater Risk of Breast Cancer in Women</span></b></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">Dairy, soy and risk of breast cancer: Those confounded milks, published in the&nbsp;<em><span helvetica=\"\" style=\"font-family:\r\n\">International Journal of Epidemiology</span></em>, found that even relatively moderate amounts of dairy milk consumption can increase women&#39;s risk of breast cancer -- up to 80% depending on the amount consumed.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">First author of the paper, Gary E. Fraser, MBChB, PhD, said the observational study gives &quot;fairly strong evidence that either dairy milk or some other factor closely related to drinking dairy milk is a cause of breast cancer in women.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">&quot;Consuming as little as 1/4 to 1/3 cup of dairy milk per day was associated with an increased risk of breast cancer of 30%,&quot; Fraser said. &quot;By drinking up to one cup per day, the associated risk went up to 50%, and for those drinking two to three cups per day, the risk increased further to 70% to 80%.&quot;</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">Current U.S. Dietary guidelines recommend three cups of milk per day. &quot;Evidence from this study suggests that people should view that recommendation with caution,&quot; Fraser said.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">Dietary intakes of nearly 53,000 North American women were evaluated for the study, all of whom were initially free of cancer and were followed for nearly eight years. Dietary intakes were estimated from food frequency questionnaires (FFQ), also repeated 24 hour recalls, and a baseline questionnaire had questions about demographics, family history of breast cancer, physical activity, alcohol consumption, hormonal and other medication use, breast cancer screening, and reproductive and gynecological history.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">By the end of the study period, there were 1,057 new breast cancer cases during follow-up. No clear associations were found between soy products and breast cancer, independent of dairy. But, when compared to low or no milk consumption, higher intakes of dairy calories and dairy milk were associated with greater risk of breast cancer, independent of soy intake. Fraser noted that the results had minimal variation when comparing intake of full fat versus reduced or nonfat milks; there were no important associations noted with cheese and yogurt.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">&quot;However,&quot; he said, &quot;dairy foods, especially milk, were associated with increased risk, and the data predicted a marked reduction in risk associated with substituting soymilk for dairy milk. This raises the possibility that dairy-alternate milks may be an optimal choice.&quot;</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">A hazardous effect of dairy is consistent with the recent AHS-2 report suggesting that vegans but not lacto-ovo-vegetarians experienced less breast cancer than non-vegetarians.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">Fraser said the possible reasons for these associations between breast cancer and dairy milk may be the sex hormone content of dairy milk, as the cows are of course lactating, and often about 75% of the dairy herd is pregnant. Breast cancer in women is a hormone-responsive cancer. Further, intake of dairy and other animal proteins in some reports is also associated with higher blood levels of a hormone, insulin-like growth factor-1 (IGF-1), which is thought to promote certain cancers.</span></p>\r\n\r\n<p style=\"margin-top:0cm;margin-right:0cm;margin-bottom:7.5pt;margin-left:0cm;\r\ntext-align:justify;background:white\"><span helvetica=\"\" style=\"font-size:10.5pt;font-family:\r\n\">&quot;Dairy milk does have some positive nutritional qualities,&quot; Fraser said, &quot;but these need to be balanced against other possible, less helpful effects.&nbsp;</span></p>\r\n', '', 'image', '', '', 0, 67, '2020-04-04 13:38:26', 'Technology'),
(6, 'Coronavirus: New York reaches highest death toll in single day | Nine News Australia', '', '', 'embed url', 'https://www.youtube.com/watch?v=Gdg24_HHXrA', 'http://i3.ytimg.com/vi/Gdg24_HHXrA/default.jpg', 0, 68, '2020-04-04 13:43:35', 'World'),
(7, 'New York City Has Nearly 1 In 4 Of All COVID-19 Cases in US | NBC Nightly News', '<h1 class=\"title style-scope ytd-video-primary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: rgb(249, 249, 249); display: block; max-height: 4.8rem; overflow: hidden; font-weight: 400; line-height: 2.4rem; color: var(--ytd-video-primary-info-renderer-title-color, var(--yt-spec-text-primary)); font-family: Roboto, Arial, sans-serif; font-size: var(--ytd-video-primary-info-renderer-title-font-size, var(--yt-navbar-title-font-size, inherit)); font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: ; font-variant-east-asian: ; transform: var(--ytd-video-primary-info-renderer-title-transform, none); text-shadow: var(--ytd-video-primary-info-renderer-title-text-shadow, none); font-style: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><yt-formatted-string class=\"style-scope ytd-video-primary-info-renderer\" force-default-style=\"\" style=\"word-break: break-word;\">New York City Has Nearly 1 In 4 Of All COVID-19 Cases in US | NBC Nightly News</yt-formatted-string></h1>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=Xxqq8nLYqdY', 'http://i3.ytimg.com/vi/Xxqq8nLYqdY/default.jpg', 0, 69, '2020-04-04 13:45:00', 'Science'),
(8, 'New York City Has Nearly 1 In 4 Of All COVID-19 Cases in US | NBC Nightly News', '<h1 class=\"title style-scope ytd-video-primary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: rgb(249, 249, 249); display: block; max-height: 4.8rem; overflow: hidden; font-weight: 400; line-height: 2.4rem; color: var(--ytd-video-primary-info-renderer-title-color, var(--yt-spec-text-primary)); font-family: Roboto, Arial, sans-serif; font-size: var(--ytd-video-primary-info-renderer-title-font-size, var(--yt-navbar-title-font-size, inherit)); font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: ; font-variant-east-asian: ; transform: var(--ytd-video-primary-info-renderer-title-transform, none); text-shadow: var(--ytd-video-primary-info-renderer-title-text-shadow, none); font-style: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><yt-formatted-string class=\"style-scope ytd-video-primary-info-renderer\" force-default-style=\"\" style=\"word-break: break-word;\">New York City Has Nearly 1 In 4 Of All COVID-19 Cases in US | NBC Nightly News</yt-formatted-string></h1>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=Xxqq8nLYqdY', 'http://i3.ytimg.com/vi/Xxqq8nLYqdY/default.jpg', 0, 70, '2020-04-04 13:45:04', 'Science'),
(9, 'The future of packaging', '<h1 class=\"title style-scope ytd-video-primary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: rgb(249, 249, 249); display: block; max-height: 4.8rem; overflow: hidden; font-weight: 400; line-height: 2.4rem; color: var(--ytd-video-primary-info-renderer-title-color, var(--yt-spec-text-primary)); font-family: Roboto, Arial, sans-serif; font-size: var(--ytd-video-primary-info-renderer-title-font-size, var(--yt-navbar-title-font-size, inherit)); font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: ; font-variant-east-asian: ; transform: var(--ytd-video-primary-info-renderer-title-transform, none); text-shadow: var(--ytd-video-primary-info-renderer-title-text-shadow, none); font-style: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><yt-formatted-string class=\"style-scope ytd-video-primary-info-renderer\" force-default-style=\"\" style=\"word-break: break-word;\">The future of packaging</yt-formatted-string></h1>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=KVVnKozGWuo', 'http://i3.ytimg.com/vi/KVVnKozGWuo/default.jpg', 0, 71, '2020-04-04 13:49:55', 'Science'),
(10, 'Bosch Packaging Technology, Inc.', '<h1 class=\"title style-scope ytd-video-primary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: rgb(249, 249, 249); display: block; max-height: 4.8rem; overflow: hidden; font-weight: 400; line-height: 2.4rem; color: var(--ytd-video-primary-info-renderer-title-color, var(--yt-spec-text-primary)); font-family: Roboto, Arial, sans-serif; font-size: var(--ytd-video-primary-info-renderer-title-font-size, var(--yt-navbar-title-font-size, inherit)); font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: ; font-variant-east-asian: ; transform: var(--ytd-video-primary-info-renderer-title-transform, none); text-shadow: var(--ytd-video-primary-info-renderer-title-text-shadow, none); font-style: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><yt-formatted-string class=\"style-scope ytd-video-primary-info-renderer\" force-default-style=\"\" style=\"word-break: break-word;\"></yt-formatted-string><font face=\"Roboto,Arial,sans-serif\"><font size=\"6\"><font style=\"background-color: rgb(249, 249, 249);\">Bosch Packaging Technology, Inc.</font></font></font></h1>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=LbxXpP9ysjo', 'http://i3.ytimg.com/vi/LbxXpP9ysjo/default.jpg', 0, 72, '2020-04-04 13:51:52', 'World'),
(11, 'Nestle CEO: We\'re committed to recyclable packaging by 2025', '<p><font style=\"background-color:#ffffff\">Nestle CEO: We&#39;re committed to recyclable packaging by 2025</font></p>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=PUZhL-9xWwE', 'http://i3.ytimg.com/vi/PUZhL-9xWwE/default.jpg', 0, 73, '2020-04-04 14:14:28', 'Science'),
(12, 'The market has not reached a bottom yet but we\'re going down at a slower rate: Economist El-Erian', '<h1 class=\"title style-scope ytd-video-primary-info-renderer\" style=\"margin: 0px; padding: 0px; border: 0px; background: rgb(249, 249, 249); display: block; max-height: 4.8rem; overflow: hidden; font-weight: 400; line-height: 2.4rem; color: var(--ytd-video-primary-info-renderer-title-color, var(--yt-spec-text-primary)); font-family: Roboto, Arial, sans-serif; font-size: var(--ytd-video-primary-info-renderer-title-font-size, var(--yt-navbar-title-font-size, inherit)); font-variant-ligatures: normal; font-variant-caps: normal; font-variant-numeric: ; font-variant-east-asian: ; transform: var(--ytd-video-primary-info-renderer-title-transform, none); text-shadow: var(--ytd-video-primary-info-renderer-title-text-shadow, none); font-style: normal; letter-spacing: normal; orphans: 2; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-style: initial; text-decoration-color: initial;\"><yt-formatted-string class=\"style-scope ytd-video-primary-info-renderer\" force-default-style=\"\" style=\"word-break: break-word;\">The market has not reached a bottom yet but we&#39;re going down at a slower rate: Economist El-Erian</yt-formatted-string></h1>\r\n', '', 'embed url', 'https://www.youtube.com/watch?v=4SpWWACypxM', 'http://i3.ytimg.com/vi/4SpWWACypxM/default.jpg', 0, 74, '2020-04-04 14:15:45', 'World');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `body` varchar(255) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `resource_type` varchar(50) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `readed` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `body`, `sender_id`, `receiver_id`, `resource_id`, `resource_type`, `created_date`, `readed`) VALUES
(3, 'm syam reported a nest', 140, 138, 269, 'nest', '2020-09-09 06:39:53', 1),
(4, 'Waseem afzal reported a nest', 138, 139, 270, 'nest', '2020-09-16 10:12:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `notification_types`
--

CREATE TABLE `notification_types` (
  `notification_id` int(11) NOT NULL,
  `type` varchar(64) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification_types`
--

INSERT INTO `notification_types` (`notification_id`, `type`, `message`) VALUES
(1, 'new_video', 'A new video %s has been added'),
(2, 'new_class', 'A new class %s has been scheduled on %s'),
(3, 'new_event', 'A new event %s has been scheduled on %s'),
(4, 'song_request', '%s has requested a song %s'),
(5, 'update_event', '%s event has been updated.'),
(6, 'update_video', '%s video has been updated.'),
(7, 'update_class', '%s class has been updated.'),
(8, 'message', '%s has sent you a message.');

-- --------------------------------------------------------

--
-- Table structure for table `order_card_detail`
--

CREATE TABLE `order_card_detail` (
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id` int(11) NOT NULL,
  `txn_id` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address_zip_check` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `brand` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exp_month` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `exp_year` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fingerprint` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `funding` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `amount` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `object` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `paid` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `package_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_card_detail`
--

INSERT INTO `order_card_detail` (`email`, `id`, `txn_id`, `address_zip`, `address_zip_check`, `brand`, `country`, `exp_month`, `exp_year`, `fingerprint`, `funding`, `last4`, `description`, `currency`, `amount`, `object`, `paid`, `created_on`, `package_id`, `user_id`) VALUES
(NULL, 1, 'ch_1HaS8dLH3AgJspnidcAMirq0', '0', '0', 'Visa', 'US', '12', '2021', NULL, 'credit', '4242', 'orderNo:5f80c6fcb23b0', 'usd', '30', 'charge', 1, '2020-10-09 20:24:31', 1, 0),
(NULL, 2, 'ch_1HaS9RLH3AgJspniLuB5lSi6', '0', '0', 'Visa', 'US', '12', '2021', NULL, 'credit', '4242', 'orderNo:5f80c72f28473', 'usd', '30', 'charge', 1, '2020-10-09 20:25:19', 1, 0),
(NULL, 3, 'ch_1HabNULH3AgJspniA7HM4KHI', '0', '0', 'Visa', 'US', '4', '2021', NULL, 'credit', '4242', 'orderNo:5f8151ba4d1f9', 'usd', '1111', 'charge', 1, '2020-10-10 06:16:27', 1, 0),
(NULL, 4, 'ch_1HabOFLH3AgJspniP6rJqocD', '0', '0', 'Visa', 'US', '12', '2021', NULL, 'credit', '4242', 'orderNo:5f8151e88d79f', 'usd', '1200', 'charge', 1, '2020-10-10 06:17:13', 1, 0),
('waseemafzal.paystack@gmail.com', 5, '12121', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NGN', '30', NULL, 1, '2020-11-01 08:37:18', 1, 37),
('devwajid@gmail.com', 6, 'ChargedFromAndroid_1604227562798', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NGN', '350000', NULL, 1, '2020-11-01 10:46:08', 2, 23),
('devwajid@gmail.com', 7, 'ChargedFromAndroid_1604258445740', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NGN', '30000', NULL, 1, '2020-11-01 19:20:51', 2, 23),
('dev@gmail.com', 8, 'ChargedFromAndroid_1604486079420', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NGN', '10000', NULL, 1, '2020-11-04 10:34:46', 1, 60),
('mrwajid@gmail.com', 9, 'ChargedFromAndroid_1604592870899', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NGN', '30000', NULL, 1, '2020-11-05 16:14:44', 2, 74),
(NULL, 10, '878152120', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'NGN', '100', NULL, 1, '2020-11-09 06:32:38', 1, 84);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `post_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_description` text COLLATE utf8_unicode_ci NOT NULL,
  `post_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `post_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'image',
  `video_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.mp4',
  `thumbnail` varchar(244) COLLATE utf8_unicode_ci NOT NULL,
  `posted_by` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int(11) NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `file`, `post_id`) VALUES
(14, '61eece3cdbc336ec810c6b9126bf12be.jpg', 6),
(15, 'd1bb76a1f9768cabecec6c07ec6d2d38.jpg', 7),
(16, '7f665a1f2a8028d6b2707495877278f5.png', 37),
(17, '342fdcbd2af85920656f2646399ebdbc.png', 1),
(18, '98ec83385a8d173e500acb6c0a6820f8.png', 2),
(19, '6962bb65d8d143ee2355ad29747b3eba.png', 3),
(20, 'ffa091847c90b6db9d710b7cb3b38113.png', 4),
(21, '99dc371e9b4746a94720432abacfe3bd.png', 8),
(22, '76c47dc9bfcd2e9bfbf083e9b3ca48fe.png', 9),
(23, '037afbe10f36669e35083a7d934a1ddb.png', 10),
(24, 'aafe66c4d74aa2abfbd991ca18897455.jpg', 15),
(25, 'b90ac608af15de45cfc0ee905879e61a.png', 5);

-- --------------------------------------------------------

--
-- Table structure for table `quize_attempted`
--

CREATE TABLE `quize_attempted` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `quiz_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `objective_marks` int(11) NOT NULL,
  `long_questions_marks` int(11) DEFAULT NULL,
  `pdffile` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quize_attempted`
--

INSERT INTO `quize_attempted` (`id`, `user_id`, `quiz_id`, `created_date`, `objective_marks`, `long_questions_marks`, `pdffile`) VALUES
(10, 23, 1, '2020-10-17 10:36:22', 6, NULL, 'uploads/2540645606470.pdf'),
(11, 23, 10, '2020-10-17 15:04:18', 5, NULL, 'uploads/2422053004638.pdf'),
(12, 22, 10, '2020-10-28 08:21:54', 5, NULL, 'uploads/4301588228148.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `status` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `timings` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `asocial_links` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `videohhome` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `terms` text COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_fee` float NOT NULL,
  `processing_fee_type` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=fixed, 0=percentage',
  `paypal_mode_admin` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=sandbox,1=live',
  `paypal_mode_front` tinyint(1) NOT NULL DEFAULT 0 COMMENT '0=sandbox,1=live'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `description`, `image`, `banner`, `phone`, `status`, `timings`, `asocial_links`, `videohhome`, `address`, `terms`, `email`, `service_fee`, `processing_fee_type`, `paypal_mode_admin`, `paypal_mode_front`) VALUES
(1, '<p>10451 Mill Run Circle,</p>\r\n\r\n<p>Owings Mills MD 21117</p>\r\n\r\n<p><strong>Email:</strong>&nbsp;Support@skillsquared.com</p>\r\n\r\n<p><strong>Call:</strong> +1 (443) 854 8762</p>', '808837468140.gif', '4183193901330.jpg', '+2121 212121212', '1', '', '{\"fb\":\"\",\"tw\":\"\",\"go\":\"\",\"li\":\"\",\"yo\":\"\"}', '195173348862.mp4', 'canada', '<p>Hello this is test messageHello this is test messageHello this is tes</p>\n\n<p>t messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is tes</p>\n\n<p>t messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHello this is test messageHell</p>\n\n<p>o this is test message</p>\n', 'Info@zukulee.com', 3, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  `start_date` varchar(50) NOT NULL,
  `end_date` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'noimg.png',
  `created_on` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1,
  `resource_type` varchar(11) NOT NULL,
  `resource_id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `btn_text` varchar(255) NOT NULL DEFAULT 'Read More'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `description`, `url`, `start_date`, `end_date`, `image`, `created_on`, `status`, `resource_type`, `resource_id`, `link`, `btn_text`) VALUES
(1, 'Here to help our clients to achieve PROFITABLE SUSTAINABLE GROWTH!', '<p>&nbsp;To Achieve Profitable&nbsp;Sustainable Growth!</p>', '', '', '', 'e8faf0797e5ecc0c07430262925818ff.jpeg', '2020-02-22 16:50:50', 1, '', 0, '', ''),
(2, 'Let’s do something great, TOGETHER for positive impact TODAY ... for TOMORROW!', '<p>Together for positive impact TODAY ... for TOMORROW!</p>', '', '', '', '6338b69c7862a1e0f52a0258cc79041e.jpeg', '2020-02-22 16:55:01', 1, '', 0, '', ''),
(3, 'Here to help our clients to achieve their goal', '', '', '', '', '5c0c689518f04077850afb76557d225e.jpeg', '2020-04-13 14:55:10', 1, '', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `status`) VALUES
(1, 'Customer', 1),
(11, 'Partner', 0);

-- --------------------------------------------------------

--
-- Table structure for table `slider_images`
--

CREATE TABLE `slider_images` (
  `id` int(11) NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider_images`
--

INSERT INTO `slider_images` (`id`, `image`, `post_id`) VALUES
(37, 'dc53f63fd855e5bebc94944853d20ef3.jpg', 1),
(38, '530e08ac4f9f51043f999fadbd3dd80b.jpg', 1),
(39, '9e5e92ade5da85607021896aa610b747.jpg', 1),
(40, '8cfe8e2ceb039acef96b0f152f87f816.jpg', 1),
(41, 'b664d759f4cf6bd2f0a98500e28e430b.jpg', 1),
(42, '112b64d69538779958ef376490de3835.jpg', 1),
(43, '417652675c70a8af67b2c9e9aac83d47.jpg', 1),
(44, '6d2eb146e870bf2b166deaf1ec2b5c21.jpg', 1),
(45, '3e1d3d9af91385b719fb491199163991.jpg', 1),
(46, 'a69fbf1bc822d8a4400dd85b2294294c.jpg', 1),
(47, '5a29525a338f197f5104460a61c71e41.jpg', 1),
(48, 'a5b156768b440b5d723b004efa938fa6.jpg', 1),
(49, '1c62f2b221352501e3dc6ca731d49afb.jpg', 1),
(50, 'f0e1bbcece5416fc78a6e94a5a8a1763.jpg', 1),
(51, 'bd47379588870963e89c0386196465c6.jpg', 1),
(52, 'bd0efc60b703f8f9fbb8607c5643e1a1.jpg', 1),
(53, '40477f58da794ceaa369577ea0be28b8.jpg', 1),
(54, '51defecacc3fa103e9e7b4427776aa2e.jpg', 1),
(55, '3cb56046d6b788266857de657b6013ea.jpg', 1),
(56, '998f5433a048748071373762327605fc.jpg', 1),
(57, 'e026fb9949f835d81e6d1decfc6180c6.jpg', 1),
(58, '1a1334c51121a4743f5c7279471c24ec.jpg', 1),
(59, '550beb151a7b4938c4a7625d14da887c.jpg', 1),
(60, '19b55796fdea312a54c61ef8ebe2ca83.jpg', 1),
(63, '58c89b81c684c059d9a2c7e557a79b4b.jpg', 1),
(65, 'fd26810ccd84678c8251c05f91782bd1.jpg', 11),
(67, '837240e86fe21b55f3d2263028cc26e4.jpg', 11),
(74, '849e09512381f6820226a0da4fe1eb23.png', 1),
(76, '2bfde1586e69ab43ced6764cea90df9f.jpg', 11);

-- --------------------------------------------------------

--
-- Stand-in structure for view `subjects`
-- (See below for the actual view)
--
CREATE TABLE `subjects` (
`id` int(11)
,`title` varchar(255)
,`icon_class` varchar(255)
,`class_id` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `success_stories`
--

CREATE TABLE `success_stories` (
  `text` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `success_stories`
--

INSERT INTO `success_stories` (`text`, `description`, `image`, `id`) VALUES
('waseem afzal', 'Recommended company in my area for giving services ', 'dbf565a57371c84b2676b83017fb529b.png', 1),
('William', 'Nice platform to  recruit and to show best experience', '6547c1f272b30f43504408221a6fbd08.png', 2),
('Shanley', 'A certified website for all services. You will find every type of freelancer here', '205d3b782134d56118c56f035d61b007.png', 3),
('Mr Ben', 'An incredibly creative entrepreneurial company', '3651b13cae076308d2aec6c3f64e414f.png', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course_include`
--

CREATE TABLE `tbl_course_include` (
  `id` bigint(11) NOT NULL,
  `course_id` bigint(11) NOT NULL,
  `included_list` varchar(300) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course_include`
--

INSERT INTO `tbl_course_include` (`id`, `course_id`, `included_list`, `status`) VALUES
(4, 2, '', 1),
(7, 2, 'sdsd', 1),
(8, 2, 'sds', 1),
(23, 4, 'source code', 1),
(24, 4, 'All videos', 1),
(25, 4, 'Best practise', 1),
(26, 4, 'certificates', 1),
(95, 4, 'certificate', 1),
(96, 4, 'Quize', 1),
(170, 3, 'yearly suppourt', 1),
(171, 3, 'Monthly support', 1),
(172, 3, 'Live help', 1),
(173, 3, 'User enagagement', 1),
(174, 3, 'Seo Friendly', 1),
(175, 3, 'Seo and Marketing', 1),
(176, 3, 'Quize', 1),
(177, 3, 'videos', 1),
(178, 3, 'certificate', 1),
(179, 5, 'Live help', 1),
(180, 5, 'Live problem solving', 1),
(181, 5, 'yearly upadates', 1),
(182, 5, 'monthly upadates', 1),
(183, 5, 'Weekly subscription', 1),
(184, 5, 'certificate', 1),
(185, 5, 'Quize', 1),
(191, 7, 'certificate', 1),
(192, 7, 'Quize', 1),
(199, 6, 'Live help', 1),
(200, 6, 'Dummy test includes', 1),
(201, 6, 'Weekly plan', 1),
(204, 9, 'quize ', 1),
(205, 9, 'All videos', 1),
(206, 8, 'quize ', 1),
(207, 8, 'All videos', 1),
(210, 11, 'quize ', 1),
(211, 11, 'All videos', 1),
(214, 10, 'All videos', 1),
(215, 10, 'quize ', 1),
(216, 12, 'quize ', 1),
(217, 12, 'All videos', 1),
(220, 14, 'quize ', 1),
(221, 14, 'All videos', 1),
(222, 15, 'quize ', 1),
(223, 15, 'All videos', 1),
(226, 17, 'quize ', 1),
(227, 17, 'All videos', 1),
(230, 19, 'All videos', 1),
(231, 19, 'quize ', 1),
(232, 20, 'quize ', 1),
(233, 20, 'All videos', 1),
(236, 22, 'All videos', 1),
(237, 22, 'quize ', 1),
(238, 18, 'quize ', 1),
(239, 18, 'All videos', 1),
(240, 13, 'quize ', 1),
(241, 13, 'All videos', 1),
(242, 16, 'quize ', 1),
(243, 16, 'All videos', 1),
(246, 22, 'All videos', 1),
(247, 22, 'quize ', 1),
(258, 24, 'quize ', 1),
(259, 24, 'All videos', 1),
(260, 23, 'quize ', 1),
(261, 23, 'All videos', 1),
(262, 25, 'quize ', 1),
(263, 25, 'All videos', 1),
(264, 36, 'certificate', 1),
(265, 21, 'All videos', 1),
(266, 21, 'quize ', 1),
(267, 21, 'quize ', 1),
(268, 21, 'All videos', 1),
(269, 37, 'certificate', 1),
(270, 37, 'iron badge', 1),
(271, 38, 'certificate', 1),
(281, 1, 'sourcecode', 1),
(282, 1, 'pdf', 1),
(283, 1, 'certificate', 1),
(284, 1, 'Popular playlists', 1),
(285, 1, 'SoundCloud community', 1),
(286, 1, 'Videos', 1),
(287, 1, 'source code', 1),
(288, 3, 'Quiz', 1),
(289, 3, 'Exams', 1),
(290, 4, 'Exams', 1),
(291, 4, 'Quiz', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `id` int(11) NOT NULL,
  `event_id` varchar(10) COLLATE utf8_unicode_ci NOT NULL COMMENT 'random id',
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `short_heading` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `post_banner` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'defaultbanner.png',
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `start_at` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `end_at` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `all_day` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `on_date` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`id`, `event_id`, `title`, `short_heading`, `post_banner`, `description`, `start_at`, `end_at`, `all_day`, `location`, `on_date`, `created_on`) VALUES
(1, 'GC0091', 'Print automation and Digitization', 'dsadasdasdasdsad', '2312444885376.jpg', '<p>dsadsadadadsa locatin gd sagdash gdashgdhas ghd agsjdas dsadsadadadsa locatin gd sagdash gdashgdhas ghd agsjdas dsadsadadadsa locatin gd sagdash gdashgdhas ghd agsjdas dsadsadadadsa locatin gd sagdash gdashgdhas ghd agsjdas dsadsadadadsa locatin gd sagdash gdashgdhas ghd agsjdas</p>', '33:33 PM', '10:33 PM', 'All day', 'dsadsadadadsa locatin gd sagdash gdashgdhas ghd agsjdas', '12-2-2019', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subscriber`
--

CREATE TABLE `tbl_subscriber` (
  `email` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL,
  `hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tbl_subscriber`
--

INSERT INTO `tbl_subscriber` (`email`, `status`, `hash`, `created_at`, `id`) VALUES
('muhammad.ashfaq@rpi.rdu.sa', 0, '', '2020-03-07 14:51:54', 1),
('ceo.cyphersol@gmail.com', 0, '', '2020-04-09 08:29:43', 2),
('imran.firstwebsol@gmail.com', 0, '', '2020-04-13 14:42:13', 3),
('waseemafzal31@gmail.com', 0, '', '2020-07-25 15:02:48', 4),
('waseemafzal31@GMAIL.COMC', 0, '', '2020-07-25 15:05:23', 5);

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id` int(11) NOT NULL,
  `text` varchar(1024) CHARACTER SET latin1 NOT NULL,
  `description` varchar(255) CHARACTER SET latin1 NOT NULL,
  `image` varchar(255) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `text`, `description`, `image`) VALUES
(6, 'Benola', 'Good website good services good quality', 'b2349b820434cc4024d8ef997d3561e6.jpg'),
(7, 'waseem afzal', 'The LMS is really great in so cheap price', '69398db3d641d26d1de22865d03d0d1c.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT 'noimg.png',
  `address` varchar(255) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `city` varchar(255) NOT NULL,
  `postal_code` varchar(255) NOT NULL,
  `user_type` int(11) NOT NULL,
  `device_id` varchar(255) NOT NULL,
  `devicetype` varchar(255) NOT NULL,
  `social_id` varchar(255) NOT NULL,
  `social_type` varchar(255) NOT NULL,
  `added_by` int(11) NOT NULL,
  `phone` varchar(20) DEFAULT NULL COMMENT 'direct office no',
  `lang` varchar(100) NOT NULL,
  `cnic` varchar(200) NOT NULL,
  `mobile` varchar(20) DEFAULT NULL COMMENT 'mobile or cell number',
  `freelancer_address` text NOT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT 0,
  `ip_address` varchar(45) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `viewpw` varchar(200) NOT NULL,
  `country` varchar(50) NOT NULL,
  `upw_hash` varchar(255) DEFAULT NULL,
  `currency_id` int(6) NOT NULL,
  `salt` varchar(255) DEFAULT NULL,
  `activation_code` varchar(40) DEFAULT NULL,
  `forgotten_password_code` varchar(40) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_code` varchar(40) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `online` int(11) NOT NULL,
  `referal_code` varchar(300) NOT NULL,
  `last_active_timestamp` timestamp NOT NULL DEFAULT current_timestamp(),
  `timezone` varchar(255) NOT NULL,
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `designation` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `bio` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `image`, `address`, `latitude`, `longitude`, `city`, `postal_code`, `user_type`, `device_id`, `devicetype`, `social_id`, `social_type`, `added_by`, `phone`, `lang`, `cnic`, `mobile`, `freelancer_address`, `active`, `ip_address`, `password`, `viewpw`, `country`, `upw_hash`, `currency_id`, `salt`, `activation_code`, `forgotten_password_code`, `forgotten_password_time`, `remember_code`, `created_on`, `last_login`, `online`, `referal_code`, `last_active_timestamp`, `timezone`, `class_id`, `subject_id`, `designation`, `description`, `bio`) VALUES
(1, 'admin', 'admin', 'admin@admin.com', '3b5646d16284ec9564238c8faa823ffa.png', 'gdfgfdgd', 0, 0, '', '', 1, 'f0xOsn6hQZqPvXs5zVz1Im:APA91bGF19ZSO68ZB7P-NrW_KKoGNGCVzphF_eFjbdq2h5ljy_DgvpYIGsUcTgwRQkoDQkZXjATzFDlSFXXg09DpoT3xXilHZ8z0u9dazPM8DpDFBuy0zX1UA5Cbcs1iuNM3ZAtRaSm8', 'android', '', '', 1, '432423424', '', '', NULL, '', 1, '127.0.0.1', '$2y$08$o9XFDISHmj6WplNgr8mJMO9qNWR6PeNSqkKkEQrALsENjSD/WhxZy', '', '', NULL, 0, NULL, '5cad950f70d26', NULL, NULL, NULL, 1554879759, 1638009795, 0, '1561378476MTU2MTM3ODQ3Ng108861088009d10beac73c57', '2019-12-02 09:12:12', '', 0, 0, '', '', ''),
(18, 'Waseem afzal', 'waseemafzal31-1728017012', 'waseemafzal311@gmail.com', 'noimg.png', '', 0, 0, '', '', 2, 'coVAzAnyQUiJWkMZ3VM-ua:APA91bEDILIft37uyvz-d8C98b0wqtDUFX3SCCTveh9fRS6euja1vpkwhC7i-DEJUTmfw3eX0HR2tukbtxSsvH9edQcIQdiWeDL0PvxXdUztv23xlo0gVFf4tpC_EVTe8NewYU8VyFNM', 'android', '', '', 0, '03417090031', '', '', NULL, '', 1, '::1', '$2y$08$lo.AEx7jaIPk5ZdZz09NVeNyGe2ola/dvw43wWrn.dika8Qkm27Z2', '', '', NULL, 0, NULL, '5f1c33b4ebf24', NULL, NULL, NULL, 1595683765, 1604855223, 1, '5f1c33b4ec30c', '2020-07-25 13:29:25', '', 4, 0, '', '', ''),
(57, 'M seyaam', 'hrcyphersol-1733739205', 'hr.cyphersol@gmail.com', 'noimg.png', '', 0, 0, '', '', 0, '', '', '', '', 0, '0341700900', '', '', NULL, '', 1, '182.186.52.197', '$2y$08$IHWr6eFSa/Twc8LTxnN3ZOWEFhCSniyYXOlGVgXuRfzGAdy7c5YUa', '', '', NULL, 0, NULL, '5fa14a580967f', NULL, NULL, NULL, 1604405848, 1604405858, 0, '5fa14a5809690', '2020-11-03 12:17:28', '', 3, 0, '', '', ''),
(58, 'numan', 'numan31-571719846', 'numan31@gmail.com', 'noimg.png', '', 0, 0, '', '', 0, '', '', '', '', 0, '12345678', '', '', NULL, '', 1, '182.186.52.197', '$2y$08$DE.TwTOS3yfguG2mZXiN5Oe3LZu/HMD7iw54BzwhAes4DRcdbyWI.', '', '', NULL, 0, NULL, '5fa14b8498dd0', NULL, NULL, NULL, 1604406148, 1604406156, 1, '5fa14b8498de4', '2020-11-03 12:22:28', '', 4, 0, '', '', ''),
(78, 'afzal', 'afzal-520633675', 'afzal@gmail.com', 'noimg.png', '', 0, 0, '', '', 2, 'coVAzAnyQUiJWkMZ3VM-ua:APA91bEDILIft37uyvz-d8C98b0wqtDUFX3SCCTveh9fRS6euja1vpkwhC7i-DEJUTmfw3eX0HR2tukbtxSsvH9edQcIQdiWeDL0PvxXdUztv23xlo0gVFf4tpC_EVTe8NewYU8VyFNM', 'android', '', '', 0, '147852369', '', '', NULL, '', 1, '182.186.52.197', '$2y$08$kMi8lM9kLCUUlrJQJF0rQ.5km/pnMTN4Cm0sXLoUYhXwzyR/XVtlu', '', '', NULL, 0, NULL, '5fa2d3eba80c6', NULL, NULL, NULL, 1604506603, 1604516172, 0, '5fa2d3eba80c8', '2020-11-04 16:16:43', '', 4, 0, '', '', ''),
(82, 'Ebenezer Olarewaju', 'olebenterprise-1816121692', 'olebenterprise@gmail.com', 'noimg.png', '', 0, 0, '', '', 0, '', '', '', '', 0, '4439858822', '', '', NULL, '', 1, '69.140.190.195', '$2y$08$12Yzu7Qgcrt11TJbpnbFMePcUO2sWFwfLU.5co1aPb.ROSoxMAuAK', '', '', NULL, 0, NULL, '5fa82bf43471c', NULL, NULL, NULL, 1604856820, 1605022901, 1, '5fa82bf43472b', '2020-11-08 17:33:40', '', 4, 0, '', '', ''),
(83, 'Waseem Afzal', 'student-511696883', 'student@gmail.com', '315ca0feb7494be1a7e9d6fcfa5037ac.jpg', '', 0, 0, '', '', 0, '12qwaszx', 'android', '', '', 0, '03417090031', '', '', NULL, '', 1, '182.186.94.158', '$2y$08$HqLBfz4hvGI8j4RHfTlTIeQ9jdJKWrisA9IdSxzHH6HzbSwb3RKiK', '', '', NULL, 0, NULL, '5fa8352eb500e', NULL, NULL, NULL, 1604859182, 1626245622, 1, '5fa8352eb501d', '2020-11-08 18:13:02', '', 4, 0, '', '', 'I am dev'),
(86, 'Olanrewaju festus ', 'gatewaymodelschools-2122523992', 'gatewaymodelschools@gmail.com', 'noimg.png', '', 0, 0, '', '', 0, '', '', '', '', 0, '08150717825 ', '', '', NULL, '', 1, '162.158.165.197', '$2y$08$Km9yCGCL90VyhXGD/VGCx.VethS/pqsSlWllKxY5cD/SJzQRWGuMi', '', '', NULL, 0, NULL, '5fc0bfaba1243', NULL, NULL, NULL, 1606467499, 1606467515, 1, '5fc0bfaba135d', '2020-11-27 08:58:19', '', 3, 0, '', '', ''),
(87, 'Ben Ola', 'waseemafzal31-1256992981', 'waseemafzal31@gmail.com', 'd3783601a83b72500665001186a40f4d.jpg', '', 0, 0, '', '', 0, 'fhawhKk3T0ivL-ysCpW7Ir:APA91bFko2-9wC4O-_Ftk1kIvmbZeUKAtRWnFucg95p8ZwD9Pd5TXsFGbIHZV9wdKpZgsoeSd8X0ZIv22vJDk0PHN0dWcesOcxkjmaM7CgtH1qAcmwkv2P_Id5LX3ymsF1U3s-RCLd98', 'android', '', '', 0, '3417090031', '', '', NULL, '', 1, '162.158.167.209', '$2y$08$T1aZGAxFc1oWyBzyfBD/RO1cpdpm1aKNPVytBjR8/vFJut.8Ubdde', '', '', NULL, 0, NULL, '60ee8971aa306', NULL, NULL, NULL, 1626245489, 1637995545, 1, '60ee8971aa3dd', '2021-07-14 06:51:29', '', 2, 0, '', '', ''),
(90, 'Momo', 'momo-254908426', 'momo@zukulee.com', 'e96d9cd7d001cde99144ad94dc2edc6d.png', '', 0, 0, '', '', 3, '', '', '', '', 1, NULL, '', '', NULL, '', 1, '127.0.0.1', '$2y$08$Rjwn5eTDVRx56ViPusd66OBGsA68d20lR1z3E7WC22F6cicOCAKWm', '', '', NULL, 0, NULL, NULL, NULL, NULL, NULL, 1636719179, NULL, 0, '', '2021-11-12 12:12:59', '', 6, 23, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users_rights`
--

CREATE TABLE `users_rights` (
  `id` int(11) NOT NULL,
  `group_title` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `add_users` int(11) NOT NULL,
  `edit_users` int(11) NOT NULL,
  `delete_users` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_rights`
--

INSERT INTO `users_rights` (`id`, `group_title`, `add_users`, `edit_users`, `delete_users`) VALUES
(1, 'SUPER ADMIN', 1, 1, 1),
(2, 'STUDENT', 1, 1, 0),
(3, 'TEACHER', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_devices`
--

CREATE TABLE `user_devices` (
  `device_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `push_id` varchar(512) NOT NULL,
  `type` varchar(16) NOT NULL DEFAULT 'android',
  `active` tinyint(3) UNSIGNED NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure for view `getcourse`
--
DROP TABLE IF EXISTS `getcourse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getcourse`  AS SELECT `c`.`id` AS `course_id`, `c`.`youtube_into` AS `youtube_video`, `c`.`terms` AS `terms`, `cl`.`class_name` AS `class_name`, `cl`.`id` AS `classid`, `cc`.`title` AS `subjects`, `cc`.`file` AS `subject_thumb`, `u`.`name` AS `trainerName`, `u`.`image` AS `trainerImage`, `c`.`post_title` AS `courseTitle`, `c`.`price` AS `price`, `c`.`thumbnail` AS `thumbnail` FROM (((`course` `c` join `course_categories` `cc` on(`cc`.`id` = `c`.`course_category_id`)) join `users` `u` on(`u`.`subject_id` = `c`.`course_category_id`)) join `classes` `cl` on(`cl`.`id` = `c`.`class_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `getsinglecourse`
--
DROP TABLE IF EXISTS `getsinglecourse`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `getsinglecourse`  AS SELECT `c`.`id` AS `course_id`, `cl`.`class_name` AS `class_name`, `cl`.`id` AS `classid`, `cc`.`title` AS `subjects`, `c`.`post_title` AS `courseTitle`, `c`.`price` AS `price`, `c`.`short_description` AS `short_description`, `c`.`terms` AS `terms`, `c`.`post_description` AS `post_description`, `c`.`created_on` AS `created_on`, `c`.`video_url` AS `video_url`, `c`.`thumbnail` AS `thumbnail`, `u`.`name` AS `trainerName`, `u`.`image` AS `trainerImage`, `u`.`designation` AS `trainerDesignation`, `u`.`description` AS `trainerDescription`, (select count(`course_lectures`.`id`) from `course_lectures` where `course_lectures`.`course_id` = `c`.`id`) AS `lesseonsCount` FROM (((`course` `c` join `course_categories` `cc` on(`cc`.`id` = `c`.`course_category_id`)) join `users` `u` on(`u`.`subject_id` = `c`.`course_category_id`)) join `classes` `cl` on(`cl`.`id` = `c`.`class_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `subjects`
--
DROP TABLE IF EXISTS `subjects`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `subjects`  AS SELECT `course_categories`.`id` AS `id`, `course_categories`.`title` AS `title`, `course_categories`.`icon_class` AS `icon_class`, `course_categories`.`class_id` AS `class_id` FROM `course_categories` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_routes`
--
ALTER TABLE `app_routes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `app_user_session`
--
ALTER TABLE `app_user_session`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `archive_users`
--
ALTER TABLE `archive_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `batch_session`
--
ALTER TABLE `batch_session`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `batch_id` (`batch_id`);

--
-- Indexes for table `blogpost`
--
ALTER TABLE `blogpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogpost_comments`
--
ALTER TABLE `blogpost_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookcategories`
--
ALTER TABLE `bookcategories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cms`
--
ALTER TABLE `cms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conversations`
--
ALTER TABLE `conversations`
  ADD PRIMARY KEY (`conversation_id`);

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_categories`
--
ALTER TABLE `course_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lectures`
--
ALTER TABLE `course_lectures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_lectures_detail`
--
ALTER TABLE `course_lectures_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_objectives`
--
ALTER TABLE `course_objectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_objectives_options`
--
ALTER TABLE `course_objectives_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_quiz`
--
ALTER TABLE `course_quiz`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course_subjectives`
--
ALTER TABLE `course_subjectives`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customerdata`
--
ALTER TABLE `customerdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `faq_cat`
--
ALTER TABLE `faq_cat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `icon_classes`
--
ALTER TABLE `icon_classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library_management`
--
ALTER TABLE `library_management`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `membership_plans`
--
ALTER TABLE `membership_plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`message_id`),
  ADD UNIQUE KEY `CONVERSATIONS` (`conversation_id`,`message_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_types`
--
ALTER TABLE `notification_types`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `order_card_detail`
--
ALTER TABLE `order_card_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `quize_attempted`
--
ALTER TABLE `quize_attempted`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider_images`
--
ALTER TABLE `slider_images`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `success_stories`
--
ALTER TABLE `success_stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_course_include`
--
ALTER TABLE `tbl_course_include`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_rights`
--
ALTER TABLE `users_rights`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_devices`
--
ALTER TABLE `user_devices`
  ADD PRIMARY KEY (`device_id`),
  ADD UNIQUE KEY `device_id` (`device_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `app_routes`
--
ALTER TABLE `app_routes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `app_user_session`
--
ALTER TABLE `app_user_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=200;

--
-- AUTO_INCREMENT for table `archive_users`
--
ALTER TABLE `archive_users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `batch_session`
--
ALTER TABLE `batch_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blogpost`
--
ALTER TABLE `blogpost`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blogpost_comments`
--
ALTER TABLE `blogpost_comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `bookcategories`
--
ALTER TABLE `bookcategories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cms`
--
ALTER TABLE `cms`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `conversations`
--
ALTER TABLE `conversations`
  MODIFY `conversation_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `coupon`
--
ALTER TABLE `coupon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `course_categories`
--
ALTER TABLE `course_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `course_lectures`
--
ALTER TABLE `course_lectures`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `course_lectures_detail`
--
ALTER TABLE `course_lectures_detail`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `course_objectives`
--
ALTER TABLE `course_objectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `course_objectives_options`
--
ALTER TABLE `course_objectives_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `course_quiz`
--
ALTER TABLE `course_quiz`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `course_subjectives`
--
ALTER TABLE `course_subjectives`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customerdata`
--
ALTER TABLE `customerdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_cat`
--
ALTER TABLE `faq_cat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `icon_classes`
--
ALTER TABLE `icon_classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `library_management`
--
ALTER TABLE `library_management`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `membership_plans`
--
ALTER TABLE `membership_plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `message_id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notification_types`
--
ALTER TABLE `notification_types`
  MODIFY `notification_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_card_detail`
--
ALTER TABLE `order_card_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `quize_attempted`
--
ALTER TABLE `quize_attempted`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `slider_images`
--
ALTER TABLE `slider_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `tbl_course_include`
--
ALTER TABLE `tbl_course_include`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=292;

--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_subscriber`
--
ALTER TABLE `tbl_subscriber`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `users_rights`
--
ALTER TABLE `users_rights`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_devices`
--
ALTER TABLE `user_devices`
  MODIFY `device_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `faqs`
--
ALTER TABLE `faqs`
  ADD CONSTRAINT `faqs_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `faq_cat` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
