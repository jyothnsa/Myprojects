-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2017 at 02:29 PM
-- Server version: 5.5.52-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bqdatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback_data`
--

CREATE TABLE IF NOT EXISTS `feedback_data` (
  `email_id` varchar(100) NOT NULL,
  `name` text NOT NULL,
  `rating` varchar(100) NOT NULL,
  `feedback` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_data`
--

INSERT INTO `feedback_data` (`email_id`, `name`, `rating`, `feedback`) VALUES
('jyothsnagampa@gmail.com', 'jyothsna', 'excellent', 'super duper siteeee');

-- --------------------------------------------------------

--
-- Table structure for table `signupdata`
--

CREATE TABLE IF NOT EXISTS `signupdata` (
  `email` varchar(100) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `passwd` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signupdata`
--

INSERT INTO `signupdata` (`email`, `firstname`, `lastname`, `passwd`) VALUES
('jyothsnagampa@gmail.com', 'jyothsna', 'gampa', 'gampa');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
