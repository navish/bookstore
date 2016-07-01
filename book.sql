-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 01, 2016 at 01:53 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `edition` int(11) NOT NULL,
  `authors` varchar(100) NOT NULL,
  `year_of_pub` int(11) NOT NULL,
  `ISBN` varchar(32) NOT NULL,
  `publisher` varchar(32) NOT NULL,
  `cover` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `edition`, `authors`, `year_of_pub`, `ISBN`, `publisher`, `cover`) VALUES
(1, 'Java The Complete Reference', 7, 'Herbert Schildt', 2007, '978-0-07-163177-8', 'McGrawHill', ''),
(2, 'A+ Guide to Managing and Maintai', 8, 'Jean Andrews', 2010, '978-1-133-13508-1', 'Course technology cengage', ''),
(5, 'Ngoswe penzi kitovu cha uzembe', 0, 'Edwin Semzaba', 2005, '--', 'Dar es salaam University Press', ''),
(6, 'Undergraduate prospectus academi', 0, '--', 2015, '--', 'Jamana Printers', ''),
(7, 'Quantum mechanics', 1, 'C. A Kiwanga and J.W.A Kondoro', 2011, '978-9976-60-515-0', 'Dar es salaam University Press', ''),
(8, 'Quantum mechanics', 1, 'C. A Kiwanga and J.W.A Kondoro', 2011, '978-9976-60-515-0', 'Dar es salaam University Press', ''),
(9, 'Betrayal in the city', 0, 'F. F Imbuga', 1976, '--', 'East African publishing house', ''),
(10, 'Betrayal in the city', 0, 'F. F Imbuga', 1976, '--', 'East African publishing house', ''),
(11, 'Walter Rodney speaks: the making', 0, 'Walter Rodney', 1990, '--', 'Africa world press', ''),
(12, 'Advanced engineering mathematics', 0, 'Erwin Kreyszig', 1988, '0-471-50728-8', 'Wiley & Sons', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
