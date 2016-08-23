-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2015 at 01:37 PM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `newspaper`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_text` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=59 ;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `post_id`, `c_name`, `c_email`, `c_text`, `status`) VALUES
(11, 72, 'sawan', 'sawan.ruet@gmail.com', 'this is my first comment...', 'approve'),
(12, 8, 'roman', 'roman@yahoo.com', 'great job man!!!!', 'unapprove'),
(13, 55, 'rubel', 'rubel@gmail.com', 'carry on cr7...', 'approve'),
(17, 66, 'roman', 'roman@yahoo.com', 'that''s great!!!', 'unapprove'),
(18, 73, 'b', 'j@vv', 'kl', 'unapprove'),
(19, 52, 'sawan', 'sawan.ruet@gmail.com', 'i think so...', 'unapprove'),
(20, 73, 'sawan', 'sawan.ruet@gmail.com', 'great', 'approve'),
(21, 73, 'sawan', 'sawan.ruet@gmail.com', 'great', 'approve'),
(22, 73, 'ar', 'rubel@gmail.com', 'we all expect that..', 'unapprove'),
(23, 44, 'sumon', 'sumon@gmail.com', 'good job!!!', 'approve'),
(25, 44, 'jjsawan', 'sawan.ruet@gmail.com', 'that''s great !!', 'approve'),
(27, 47, 'jjsawan', 'sawan.ruet@gmail.com', 'congrts!!!', 'approve'),
(57, 47, 'sumon', 'sumon@gmail.com', 'nice', 'approve'),
(58, 42, 'sumon', 'sumon@gmail.com', 'great win!!!', 'approve');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
