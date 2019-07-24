-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 09:54 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sportsblog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(4000) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `Name`) VALUES
(1, 'Cricket'),
(2, 'Tennis');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Post_id` int(11) NOT NULL,
  `comment_body` varchar(1000) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` datetime NOT NULL,
  `name` varchar(1000) NOT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `message` varchar(300) NOT NULL,
  PRIMARY KEY (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE IF NOT EXISTS `events` (
  `event_id` int(11) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(1000) NOT NULL,
  `event_date` date NOT NULL,
  `event_details` varchar(2000) NOT NULL,
  `event_author` varchar(100) NOT NULL,
  `event_image` varchar(1000) NOT NULL,
  `event_status` int(11) NOT NULL,
  PRIMARY KEY (`event_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`event_id`, `event_name`, `event_date`, `event_details`, `event_author`, `event_image`, `event_status`) VALUES
(1, 'Mclaren', '2018-07-13', 'dddddddddddddddd', 'dddddddddddddddddd', '1533018593_10.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `Post_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `Post_title` varchar(400) NOT NULL,
  `Post_author` varchar(400) NOT NULL,
  `Post_date` date NOT NULL,
  `Post_image` varchar(300) NOT NULL,
  `Post_content` varchar(8000) NOT NULL,
  `Post_tags` varchar(400) NOT NULL,
  `Post_comment_count` int(11) NOT NULL,
  `post_status` varchar(300) NOT NULL,
  PRIMARY KEY (`Post_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`Post_id`, `category_id`, `Post_title`, `Post_author`, `Post_date`, `Post_image`, `Post_content`, `Post_tags`, `Post_comment_count`, `post_status`) VALUES
(1, 3, 'Mclaren', 'Ron Dennis', '2018-07-25', '1533018358_6.jpg', 'sskdshudh idhdihud usduhuhuhu', 't', 0, 'ON');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(1000) NOT NULL,
  `lastname` varchar(1000) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `Gender` varchar(60) NOT NULL,
  `role` int(11) NOT NULL,
  `conpassword` varchar(1000) NOT NULL,
  `Account_status` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `firstname`, `lastname`, `email`, `password`, `Gender`, `role`, `conpassword`, `Account_status`) VALUES
(1, 'Shrishay', 'Naik', 'shri@gmail.com', 'e11170b8cbd2d74102651cb967fa28e5', 'Male', 1, 'e11170b8cbd2d74102651cb967fa28e5', ''),
(2, 'JOOIE', 'nice', 'shrishaynaik@gmail.com', 'e11170b8cbd2d74102651cb967fa28e5', 'Male', 0, 'e11170b8cbd2d74102651cb967fa28e5', ''),
(3, 'WAAA WAA', 'SAHEB', 'WAAA@GMAIL.COM', '593c9b4a9390551d53e5cacf28ebd638', 'Male', 0, 'e11170b8cbd2d74102651cb967fa28e5', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
