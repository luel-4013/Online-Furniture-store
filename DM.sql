-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 01, 2001 at 09:10 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `DM`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact1`
--

CREATE TABLE `contact1` (
  `name` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `message` varchar(40) NOT NULL,
  `telephone` int(15) NOT NULL,
  `subject` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact1`
--

INSERT INTO `contact1` (`name`, `email`, `message`, `telephone`, `subject`) VALUES
('leul', '23234234', 'hsfjvsfv', 0, '12345');

-- --------------------------------------------------------

--
-- Table structure for table `Verify`
--

CREATE TABLE `Verify` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Verify`
--

INSERT INTO `Verify` (`username`, `password`, `email`, `phone`) VALUES
('leul', 'password', 'leul@g.com', 366464664),
('leul', 'password', 'fnbjkzdfb@g.c', 2147483647),
('', 'password', '', 0),
('', 'password', '', 0),
('', 'password', '', 0),
('', 'password', '', 0),
('', 'password', '', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
