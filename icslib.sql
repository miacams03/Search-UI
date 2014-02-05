-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2014 at 02:07 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `icslib`
--
CREATE DATABASE IF NOT EXISTS `icslib` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `icslib`;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE IF NOT EXISTS `book` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `call_no` varchar(30) NOT NULL,
  `title` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `isbn/issn` varchar(30) NOT NULL,
  `book_type` varchar(20) NOT NULL,
  `description` varchar(150) NOT NULL,
  `book_status` varchar(8) NOT NULL COMMENT 'ON SHELF or ON LOAN',
  `editor` varchar(50) DEFAULT NULL,
  `publisher` varchar(50) NOT NULL,
  PRIMARY KEY (`book_id`),
  UNIQUE KEY `call_no` (`call_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `librarian`
--

CREATE TABLE IF NOT EXISTS `librarian` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE IF NOT EXISTS `notification` (
  `notif_id` int(11) NOT NULL AUTO_INCREMENT,
  `notifs` text,
  PRIMARY KEY (`notif_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`notif_id`, `notifs`) VALUES
(1, 'You can now pick up your reserved book at the ICS Library.'),
(2, 'You are now waitlisted in borrowing the book.'),
(3, 'The book you borrowed is already overdue. Please return it to the ICS Library immediately.'),
(4, 'You currently have no notifications.');

-- --------------------------------------------------------

--
-- Table structure for table `pagedata`
--

CREATE TABLE IF NOT EXISTS `pagedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `page` text NOT NULL,
  `text1` text NOT NULL,
  `text2` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `pagedata`
--

INSERT INTO `pagedata` (`id`, `title`, `page`, `text1`, `text2`) VALUES
(1, 'News', 'news', 'These are news.', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'),
(2, 'Register', 'register', 'Register here.', 'Register here. Register here. Register here. Register here. Register here. Register here. Register here. Register here. Register here. Register here.');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `request_id` int(11) NOT NULL AUTO_INCREMENT,
  `request_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `request_status` varchar(10) NOT NULL COMMENT 'PENDING, APPROVED or REJECTED',
  `book_id` int(11) NOT NULL,
  `library_id` int(11) NOT NULL,
  PRIMARY KEY (`request_id`),
  KEY `book_id` (`book_id`),
  KEY `library_id` (`library_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE IF NOT EXISTS `transaction` (
  `trans_id` int(11) NOT NULL AUTO_INCREMENT,
  `trans_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `trans_status` varchar(10) NOT NULL COMMENT 'PENDING or COMPLETED',
  `fine` int(11) DEFAULT NULL,
  `due_date` date NOT NULL,
  `request_id` int(11) NOT NULL,
  `return_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`trans_id`),
  KEY `request_id` (`request_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `name` varchar(60) NOT NULL,
  `email` varchar(42) NOT NULL,
  `mobile_no` varchar(11) NOT NULL,
  `college` varchar(10) NOT NULL,
  `user_type` varchar(10) NOT NULL COMMENT 'STUDENT or EMPLOYEE',
  `userid_no` varchar(10) NOT NULL COMMENT 'refers to employee or student number',
  `library_id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` enum('You currently have no notifications.','You can now pick up your reserved book at the ICS Library!','You are now waitlisted to your desired book!') NOT NULL DEFAULT 'You currently have no notifications.',
  PRIMARY KEY (`library_id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=200919803 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `name`, `email`, `mobile_no`, `college`, `user_type`, `userid_no`, `library_id`, `notification`) VALUES
('jjesuitas', 'splakadoodel', 'Joseph Jesuitas', 'jjesuitas@gmail.com', '09359651200', 'CAS', 'Student', '200867242', 200867242, 'You currently have no notifications.'),
('otepjesuitas', 'splakadoodel', 'Otep Jesuitas', 'josephgerman.jesuitas@yahoo.com', '09161730381', 'CAS', 'Student', '200919802', 200919802, 'You currently have no notifications.');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `request`
--
ALTER TABLE `request`
  ADD CONSTRAINT `request_ibfk_1` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`),
  ADD CONSTRAINT `request_ibfk_2` FOREIGN KEY (`library_id`) REFERENCES `user` (`library_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`request_id`) REFERENCES `request` (`request_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
