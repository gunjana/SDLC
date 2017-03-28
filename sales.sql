-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2017 at 07:58 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sales`
--

-- --------------------------------------------------------

--
-- Table structure for table `logindata`
--

CREATE TABLE IF NOT EXISTS `logindata` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logindata`
--

INSERT INTO `logindata` (`username`, `email`, `password`, `gender`, `age`) VALUES
('ADMIN', 'ADMIN@ABC.COM', 'ADMIN', 'FEMALE', 10),
('MEMBER', 'MEMBER@ABC.COM', 'MEMBER', 'MALE', 25),
('LEADER', 'LEADER@ABC.COM', 'LEADER', 'FEMALE', 25),
(' rohit patidar ', ' rohit@gmail.com ', '12345678 ', ' male ', 19),
(' gunjan ', ' gunjan@abc.com ', 'gunjan ', ' female ', 18),
(' dikshi ', ' dikshi@gmail.com ', 'dikshi ', ' female ', 19),
(' yogini ', ' yogini@gmail.com ', '123456 ', ' female ', 20);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
