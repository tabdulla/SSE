-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2017 at 03:32 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sse`
--

-- --------------------------------------------------------

--
-- Table structure for table `sites`
--

CREATE TABLE `sites` (
  `s_id` int(10) NOT NULL,
  `s_title` varchar(100) NOT NULL,
  `s_link` varchar(250) NOT NULL,
  `s_keyword` varchar(100) NOT NULL,
  `s_desc` text NOT NULL,
  `s_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sites`
--

INSERT INTO `sites` (`s_id`, `s_title`, `s_link`, `s_keyword`, `s_desc`, `s_img`) VALUES
(2, 'Acadmic .edu', 'https://www.academia.edu/', 'acadmic-articles', 'Academia is the easiest way to share papers with millions of people across the world for free. A study recently published in PLOS ONE found that papers uploaded to Academia receive a 69% boost in citations over 5 years.', 'images.jpg'),
(3, 'software engineering ', 'https://scholar.google.com.eg/scholar?hl=en&q=software+engineering&btnG=&as_sdt=1%2C5&as_sdtp=&oq=software', 'SW , software , engineering,', 'software engineering articles', 'default.PNG'),
(4, 'Coursera - Python', 'https://www.coursera.org/specializations/python', 'python , online courses , coursera , python , learn python ', 'Learn to Program and Analyze Data with Python', 'images.jpg'),
(5, 'How to change for the better life', 'https://curiousmindmagazine.com/change-life-one-month/', 'better life , life tips, ', 'this site helps you to How to change for the better in just one month (complete Guide)', 'images.jpg'),
(6, 'facebook', 'www.facebook.com', 'facebook social media ', 'this is social media app', 'images.jpg'),
(7, 'secure password by hashing ', 'https://github.com/defuse/password-hashing', 'password-hashing -php-secure-project-cmsencrypt', 'this is project to encrypt and decrypt passwords in php to be saved in database hashed', ''),
(8, 'search engine', 'http://search.subinsb.com/search.php?q=php', 'search engine customized', 'this is customized search engine', ''),
(9, 'group chat', 'http://subinsb.com/group-chat-in-php-with-ajax-jquery-mysql', 'php ajax group chat ', 'this is group chat using php and ajax', ''),
(10, 'bootstrap free themes', 'https://startbootstrap.com/template-categories/all/', 'free themes bootstrap websites template', 'this is free themes from bootstrap', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sites`
--
ALTER TABLE `sites`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sites`
--
ALTER TABLE `sites`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
