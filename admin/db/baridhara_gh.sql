-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 07, 2018 at 06:07 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baridhara_gh`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_details`
--

CREATE TABLE `about_details` (
  `about_details_id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `details1` text NOT NULL,
  `title2` varchar(100) NOT NULL,
  `details2` text NOT NULL,
  `details3` text NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `about_details`
--

INSERT INTO `about_details` (`about_details_id`, `title1`, `details1`, `title2`, `details2`, `details3`, `image_url`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Temporibus autem quibusdam et aut officiis saepe eveniet ut et voluptates', 'Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.', 'Necessitatibus saepe eveniet ut et', 'Aenean ac leo eget nunc fringilla fringilla a non nulla! Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.', 'Aenean ac leo eget nunc fringilla fringilla a non nulla! Aenean ac leo eget nunc fringilla fringilla a non nulla! Nunc orci mi, venenatis quis ultrices vitae, congue non nibh. Nulla bibendum justo eget.', '1522986665g1.jpg', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `address_id` int(11) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `information` text NOT NULL,
  `location` varchar(100) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`address_id`, `contact`, `email`, `information`, `location`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '01768-612835', 'info@example.com', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti at que corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt.', 'Baridhara, Dhaka, Bangladesh', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `contact_id` int(11) NOT NULL,
  `message` text NOT NULL,
  `name` varchar(55) NOT NULL,
  `email` varchar(55) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`contact_id`, `message`, `name`, `email`, `is_deleted`, `deleted_by`, `deleted_on`) VALUES
(13, ' abcabcabcabcabcabcabcabc', 'solaiman', ' solaiman0168@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(14, ' drgyhu', 'ertfgyhu', ' rdtfgyhu', 1, 1, '2018-04-05 00:00:00'),
(15, ' dryguh', 'rsedygui', ' esrdt', 1, 1, '2018-04-05 00:00:00'),
(16, ' dryguh', 'rsedygui', ' esrdt', 1, 1, '2018-04-05 00:00:00'),
(17, ' sfWHJWK474JFDQDFWGERJ', 'salman', ' salman0168@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(18, ' adetryiuyiqeeyt', 'Solaiman Hossain', ' solaiman0168@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(19, ' esdfghjkoSFR', 'Riad Hossain', ' riad@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(20, ' sadwesfrdthyjkszfdhgj', 'Sahadat Hossain', ' sahadat@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(21, ' sadwesfrdthyjkszfdhgj', 'Sahadat Hossain', ' sahadat@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(22, ' ', 'Sahadat Hossain', ' sahadat@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(23, '', 'Sahadat Hossain', ' sahadat@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(24, ' ', 'Sahadat Hossain', ' sahadat@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(25, ' ', 'shakib ahmed', ' shakib@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(26, ' ', 'mahfuz ahmed', ' mahfuz@gmail.com', 1, 1, '2018-04-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `counter_id` int(11) NOT NULL,
  `counter_1` text NOT NULL,
  `counter_2` text NOT NULL,
  `counter_3` text NOT NULL,
  `counter_4` text NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `counter`
--

INSERT INTO `counter` (`counter_id`, `counter_1`, `counter_2`, `counter_3`, `counter_4`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '5100', '350', '17', '4200', 1, 1, '2018-04-05 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `footer_social_icon_link`
--

CREATE TABLE `footer_social_icon_link` (
  `footer_social_icon_link_id` int(11) NOT NULL,
  `fb_icon_link` text NOT NULL,
  `twitter_icon_link` text NOT NULL,
  `google_icon_link` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `footer_social_icon_link`
--

INSERT INTO `footer_social_icon_link` (`footer_social_icon_link_id`, `fb_icon_link`, `twitter_icon_link`, `google_icon_link`, `created_by`, `created_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'https://www.facebook.com/', 'https://www.twitter.com/', 'https://plus.google.com/', 0, 0, 1, 1, '2017-11-14 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `galary_details`
--

CREATE TABLE `galary_details` (
  `galary_details_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(200) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galary_details`
--

INSERT INTO `galary_details` (`galary_details_id`, `title`, `details`, `image_url`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Baridhara General Hospital', 'Lorem, ipsum amet numeous lorem, ipsum amet nemous', '1523020565g1.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, 'Baridhara General Hospital', 'Lorem ipsum amet nemous ipsam', '1523020609g2.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, 'Baridhara General Hospital', 'Lorem, ipsum amet numeous lorem, ipsum amet us', '1523020658g8.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'Baridhara General Hospital', 'Lorem ipsum amet  ipsam amit', '1523020690g7.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(5, 'Baridhara General Hospital', 'Lorem ipsum amet nemous ipsam dolar', '1523020724maternity.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(6, 'Baridhara General Hospital', 'Lorem, ipsum amet numeous lorem, ipsum amet dolar', '1523020755pharmacy.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `map`
--

CREATE TABLE `map` (
  `map_id` int(11) NOT NULL,
  `map_url` text NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `map`
--

INSERT INTO `map` (`map_id`, `map_url`, `is_updated`, `updated_by`, `updated_on`, `is_deleted`, `deleted_by`, `deleted_on`, `created_by`, `created_on`) VALUES
(1, 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.2538728860945!2d90.41861901374126!3d23.809569792433003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7ad47e29f3f%3A0x222976ffa8ac3e2e!2sBaridhara+General+Hospital!5e0!3m2!1sen!2sbd!4v1522920434840', 1, 1, '2018-04-05 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_signup`
--

CREATE TABLE `newsletter_signup` (
  `newsletter_signup_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `newsletter_signup`
--

INSERT INTO `newsletter_signup` (`newsletter_signup_id`, `name`, `email`, `is_deleted`, `deleted_by`, `deleted_on`) VALUES
(1, 'Sahadat Hossain', ' sahadat@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(2, 'salman khan', ' salman@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(3, 'shakib ahmed', ' shakib@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(4, 'Riad Hossain', ' riad@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(5, 'fahad ahmed', ' fahad@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(6, 'mahfuz ahmed', ' mahfuz@gmail.com', 0, 0, '0000-00-00 00:00:00'),
(7, 'RK rabbi', ' rabbi@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(8, 'RK rabbi', ' rabbi@gmail.com', 1, 1, '2018-04-05 00:00:00'),
(9, 'Solaiman Hossain', ' solaiman0168@yahoo.com', 0, 0, '0000-00-00 00:00:00'),
(10, 'Solaiman Hossain', ' solaiman0168@yahoo.com', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_best_services`
--

CREATE TABLE `our_best_services` (
  `our_best_services_id` int(11) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_best_services`
--

INSERT INTO `our_best_services` (`our_best_services_id`, `title1`, `title2`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Voluptatem', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, 'Lorem', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, 'Ipsum', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'Amet', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_services`
--

CREATE TABLE `our_services` (
  `our_services_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` varchar(350) NOT NULL,
  `read_more` text NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_services`
--

INSERT INTO `our_services` (`our_services_id`, `title`, `details`, `read_more`, `image_url`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Emergency', '\r\nMost hospitals provide emergency care for traumas and other serious conditions. Emergency room staffs are prepared to provide triage and stabilize patients until they can be moved to a room or treated and released \r\n\r\n', '\r\nMost hospitals provide emergency care for traumas and other serious conditions. Emergency room staffs are prepared to provide triage and stabilize patients until they can be moved to a room or treated and released \r\n\r\n', '1523022760emergency.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(2, 'Title', 'Details', 'Read More', '15230233683.png', 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(3, 'Maternity', 'Many hospitals provide maternity care. Rooms are available that are all-inclusive where mothers can give birth, nurse their babies and spend a day two recovering from the delivery', 'Many hospitals provide maternity care. Rooms are available that are all-inclusive where mothers can give birth, nurse their babies and spend a day two recovering from the delivery', '1523023565maternity.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'Surgery', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', '1523025112emergency.jpg', 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(5, 'Nursing', 'Hospitals are the largest employers of nurses, who staff all sections in hospitals. Nurses assist physicians in surgery and staff various services in hospitals 24 hours a day', 'Hospitals are the largest employers of nurses, who staff all sections in hospitals. Nurses assist physicians in surgery and staff various services in hospitals 24 hours a day', '1523024000nursing.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(6, 'Pharmacy', 'Hospitals provide pharmacy services that supply patients with medications as prescribed. In addition to providing inpatients with medicine, many hospital pharmacies can fill prescriptions fo', 'Hospitals provide pharmacy services that supply patients with medications as prescribed. In addition to providing inpatients with medicine, many hospital pharmacies can fill prescriptions fo', '1523024045pharmacy.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(7, 'Specialist', 'Various hospitals provide specialty services such as cardiology wards, cancer centers, pediatric services and rehabilitation units. Nurses and technicians who work in specialty units receive', 'Various hospitals provide specialty services such as cardiology wards, cancer centers, pediatric services and rehabilitation units. Nurses and technicians who work in specialty units receive', '1523024116specialist.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(8, 'Surgery', 'Many hospitals provide maternity care. Rooms are available that are all-inclusive where mothers can give birth, nurse their babies and spend a day two recovering from the delivery', 'Many hospitals provide maternity care. Rooms are available that are all-inclusive where mothers can give birth, nurse their babies and spend a day two recovering from the delivery', '1523025351surgery.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `our_specialist`
--

CREATE TABLE `our_specialist` (
  `our_specialist_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `title1` varchar(100) NOT NULL,
  `title2` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `mobile_no` varchar(50) NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL,
  `deleted_by` int(11) NOT NULL,
  `deleted_on` int(11) NOT NULL,
  `is_updated` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `updated_on` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `our_specialist`
--

INSERT INTO `our_specialist` (`our_specialist_id`, `name`, `title1`, `title2`, `time`, `mobile_no`, `image_url`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'Dr.Tusher', 'Heart Specialist', 'Ph.D', ' Mon-Tue : 8am-3pm', ' Mobile : 0200-123-4567', '1522997434pic5.jpg', 1, 2018, 0, 0, 0, 0, 0, 0),
(2, 'Dr. Aliya', 'Heart Specialist', 'Ph.D', ' Mon-Fri : 11am-8pm', ' Mobile : 0200-123-4567', '1522997530pic6.jpg', 1, 2018, 0, 0, 0, 0, 0, 0),
(3, 'Dr. Saleh ', 'Heart Specialist', 'Ph.D', ' Mon-Tue : 8am-3pm', ' Mobile : 0200-123-4567', '1522997663pic5.jpg', 1, 2018, 0, 0, 0, 0, 0, 0),
(4, 'Dr. Rosonara', 'Cardiologist', 'Ph.D', ' Mon-Fri : 11am-8pm', 'Mobile : 0200-123-4567', '1522997717pic4.jpg', 1, 2018, 1, 1, 2018, 1, 1, 2018),
(5, 'Dr. Rosonara', 'Cardiologist', 'Ph.D', ' Mon-Fri : 11am-8pm', ' Mobile : 0200-123-4567', '1522997812pic4.jpg', 1, 2018, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `services_id` int(11) NOT NULL,
  `services_name` varchar(55) NOT NULL,
  `services_details` longtext NOT NULL,
  `short_details` varchar(250) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '1',
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`services_id`, `services_name`, `services_details`, `short_details`, `image_url`, `is_active`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'gf', '<p>vctyfguihjo</p>', '<p>vctyfguihjo</p>', '1510245364farah.png', 1, 1, '2017-11-03 00:00:00', 1, 1, '2017-11-12 00:00:00', 1, 1, '2017-11-09 00:00:00'),
(2, 'yguhij', 'bknlmbk', '', '', 1, 1, '2017-11-04 00:00:00', 1, 1, '2017-11-08 00:00:00', 1, 1, '2017-11-04 00:00:00'),
(3, 'biunimpo', '', '', '1510127662banner.jpg', 1, 1, '2017-11-08 00:00:00', 1, 1, '2017-11-12 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'Surgery', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services', '1523049586surgery.jpg', 1, 1, '2017-11-08 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(5, 'Nursing', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones Hospitals stock and staff surgical suites that can be used for outpatient service', '1523049603nursing.jpg', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(6, 'Emergency', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services', '1523049630emergency.jpg', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(7, 'Maternity', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services', '1523049696maternity.jpg', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(8, 'Pharmacy', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services', '1523049735pharmacy.jpg', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(9, 'Specialist', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bones', 'Hospitals stock and staff surgical suites that can be used for outpatient services or in-depth procedures, such as transplants, heart surgery and repairing broken bonesHospitals stock and staff surgical suites that can be used for outpatient services', '1523049818specialist.jpg', 1, 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `slider_id` int(11) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `title_h1` varchar(100) NOT NULL,
  `title_h2` varchar(100) NOT NULL,
  `title_h3` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`slider_id`, `image_url`, `title_h1`, `title_h2`, `title_h3`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, '151298669323905767_1535919876498339_3459255771796665290_n.jpg', '', '', '', 1, '2017-12-11 00:00:00', 1, 1, '2017-12-11 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(14, '15230363893.jpg', 'Providing Eye Care', 'Treatments & Surgeries For All Problems', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(15, '1523036464g1.jpg', 'Providing Eye Care', 'Treatments & Surgeries For All Problems', 'Lorem enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam ipsum voluptatem.', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(16, '1523036532emergency.jpg', 'Providing Eye Care', 'Treatments & Surgeries For All Problems', 'Lorem enim amet voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur ipsum dolores nemous qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam ipsum voluptatem.', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(17, '1523036599g8.jpg', 'Providing Eye Care', 'Treatments & Surgeries For All Problems', 'Amet enim amet voluptatem quia nemoussit aspernatur aut odit aut fugit, sed quia consequuntur ipsum dolores ipsum qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam ipsum lorem.', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `testimonials_id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `details` text NOT NULL,
  `image_url` varchar(250) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`testimonials_id`, `title`, `details`, `image_url`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(6, 'Chris Won', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur quis nostrum exercitationem ullam corporis suscipit laboriosam.', '15229942733.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(7, 'James Alley', 'Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur quis nostrum exercitationem ullam corporis suscipit laboriosam.', '15229942954.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(8, 'Federic', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui', '1522994435pic1.jpg', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(9, 'Thompson', 'Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui', '15229951393.png', 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_to_bari`
--

CREATE TABLE `welcome_to_bari` (
  `welcome_to_bari_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` datetime NOT NULL,
  `is_deleted` int(1) NOT NULL DEFAULT '0',
  `deleted_by` int(11) NOT NULL,
  `deleted_on` datetime NOT NULL,
  `is_updated` int(1) NOT NULL DEFAULT '0',
  `updated_by` int(11) NOT NULL,
  `updated_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `welcome_to_bari`
--

INSERT INTO `welcome_to_bari` (`welcome_to_bari_id`, `title`, `link`, `created_by`, `created_on`, `is_deleted`, `deleted_by`, `deleted_on`, `is_updated`, `updated_by`, `updated_on`) VALUES
(1, 'amet nemous lorem ipsum', '', 1, '2018-04-05 00:00:00', 1, 1, '2018-04-07 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(2, 'Lorem ipsum amet  ipsam df', '', 1, '2018-04-06 00:00:00', 1, 1, '2018-04-07 00:00:00', 1, 1, '2018-04-06 00:00:00'),
(3, 'amet nemous lorem ipsum', 'https://www.youtube.com/', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(4, 'Lorem ipsum amet ipsam', 'https://www.youtube.com/', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(5, 'amet nemous lorem ipsum', 'https://www.facebook.com/', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00'),
(6, 'Lorem ipsum amet ipsam nemous', 'https://www.youtube.com/', 1, '2018-04-06 00:00:00', 0, 0, '0000-00-00 00:00:00', 0, 0, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `xxx_user`
--

CREATE TABLE `xxx_user` (
  `USER_NO` int(11) NOT NULL,
  `USER_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `PASS` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `USER_FULL_NAME` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_EMAIL` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `USER_CONTACT` text COLLATE utf8_unicode_ci NOT NULL,
  `IS_ACTIVE` int(11) NOT NULL,
  `ACTIVE_FROM` date NOT NULL,
  `ACTIVE_TO` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `xxx_user`
--

INSERT INTO `xxx_user` (`USER_NO`, `USER_NAME`, `PASS`, `USER_FULL_NAME`, `USER_EMAIL`, `USER_CONTACT`, `IS_ACTIVE`, `ACTIVE_FROM`, `ACTIVE_TO`) VALUES
(1, 'ssislambd', 'fe707ddd5858aec84832a6c39aca75aa', 'Saikat Sarwar', 'ssislambd@gmail.com', '01685505076', 1, '2015-01-01', '2099-01-01'),
(13, 'admin', '26e991fc701cf40cfcf4f9294d44f9ba', 'Admin', 'admin', '98765432', 1, '2015-01-01', '2099-01-01'),
(14, 'robin', '202cb962ac59075b964b07152d234b70', 'Robin Chaklader', 'robin.chaklader@gmail.com', '01778924683', 1, '2015-01-01', '2099-01-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_details`
--
ALTER TABLE `about_details`
  ADD PRIMARY KEY (`about_details_id`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `footer_social_icon_link`
--
ALTER TABLE `footer_social_icon_link`
  ADD PRIMARY KEY (`footer_social_icon_link_id`);

--
-- Indexes for table `galary_details`
--
ALTER TABLE `galary_details`
  ADD PRIMARY KEY (`galary_details_id`);

--
-- Indexes for table `map`
--
ALTER TABLE `map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `newsletter_signup`
--
ALTER TABLE `newsletter_signup`
  ADD PRIMARY KEY (`newsletter_signup_id`);

--
-- Indexes for table `our_best_services`
--
ALTER TABLE `our_best_services`
  ADD PRIMARY KEY (`our_best_services_id`);

--
-- Indexes for table `our_services`
--
ALTER TABLE `our_services`
  ADD PRIMARY KEY (`our_services_id`);

--
-- Indexes for table `our_specialist`
--
ALTER TABLE `our_specialist`
  ADD PRIMARY KEY (`our_specialist_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`services_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`testimonials_id`);

--
-- Indexes for table `welcome_to_bari`
--
ALTER TABLE `welcome_to_bari`
  ADD PRIMARY KEY (`welcome_to_bari_id`);

--
-- Indexes for table `xxx_user`
--
ALTER TABLE `xxx_user`
  ADD PRIMARY KEY (`USER_NO`),
  ADD UNIQUE KEY `USER_NAME` (`USER_NAME`),
  ADD UNIQUE KEY `USER_FULL_NAME` (`USER_FULL_NAME`),
  ADD UNIQUE KEY `USER_EMAIL` (`USER_EMAIL`),
  ADD UNIQUE KEY `USER_NO` (`USER_NO`),
  ADD UNIQUE KEY `USER_NO_2` (`USER_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_details`
--
ALTER TABLE `about_details`
  MODIFY `about_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `address_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `contact_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `footer_social_icon_link`
--
ALTER TABLE `footer_social_icon_link`
  MODIFY `footer_social_icon_link_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `galary_details`
--
ALTER TABLE `galary_details`
  MODIFY `galary_details_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `map`
--
ALTER TABLE `map`
  MODIFY `map_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `newsletter_signup`
--
ALTER TABLE `newsletter_signup`
  MODIFY `newsletter_signup_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `our_best_services`
--
ALTER TABLE `our_best_services`
  MODIFY `our_best_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `our_services`
--
ALTER TABLE `our_services`
  MODIFY `our_services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `our_specialist`
--
ALTER TABLE `our_specialist`
  MODIFY `our_specialist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `services_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `slider_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `testimonials_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `welcome_to_bari`
--
ALTER TABLE `welcome_to_bari`
  MODIFY `welcome_to_bari_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `xxx_user`
--
ALTER TABLE `xxx_user`
  MODIFY `USER_NO` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
