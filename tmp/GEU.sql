-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 15, 2019 at 09:08 AM
-- Server version: 10.3.16-MariaDB
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
-- Database: `GEU`
--

-- --------------------------------------------------------

--
-- Table structure for table `Notice`
--

CREATE TABLE `Notice` (
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `post_date` date NOT NULL DEFAULT current_timestamp(),
  `notice_data` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf32;

--
-- Dumping data for table `Notice`
--

INSERT INTO `Notice` (`title`, `author`, `post_date`, `notice_data`, `department`) VALUES
('codevita', 'srtkrwt', '2019-07-12', 'codevita is starting soon. 1st round will be on 3:00 PM 12-07-19.', 'CS-IT'),
('hackwithinfy', 'kllwsh', '2019-07-12', 'hack with infy is starting soon. 2nd round will be on 14-07-19.', 'CS-IT'),
('registerations', 'hod', '2019-07-12', 'please complete your registrations asap', 'CS-IT');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
