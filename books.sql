-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 02, 2019 at 06:37 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ics`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `isbn` varchar(13) NOT NULL,
  `book_name` varchar(30) NOT NULL,
  `author_name` varchar(30) NOT NULL,
  `publication` varchar(20) NOT NULL,
  `price` int(11) NOT NULL,
  `available_copies` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`isbn`, `book_name`, `author_name`, `publication`, `price`, `available_copies`) VALUES
('9783161484100', 'Wings Of Fire', 'Dr. A.P.J Kalam', 'The Week', 350, 20),
('9783161484101', 'Ignited Minds', 'Dr. A.P.J Kalam', 'The Week', 450, 22),
('9783161484102', 'On the come up', 'Taylor Jenkins Reid', 'Goodreads', 556, 13),
('9783161484103', 'The priory of orange tree', 'Samantha Shanon', 'Glassglow', 378, 18),
('9783161484104', 'The dreamers', 'Karen Thompson Walker', 'Walker', 420, 8),
('9783161484105', 'True Place', 'Sonja Yoerg', 'Goodreads', 611, 24);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`isbn`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
