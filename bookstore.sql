-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 28, 2016 at 11:12 alasiri
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
-- Table structure for table `author`
--

CREATE TABLE `author` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `available_books`
--

CREATE TABLE `available_books` (
  `book_id` varchar(32) NOT NULL,
  `no_of_books` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `book_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `year_of_pub` int(11) NOT NULL,
  `edition` int(11) NOT NULL,
  `ISBN` varchar(32) NOT NULL,
  `cover` longblob NOT NULL,
  `publisher` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`book_id`, `name`, `year_of_pub`, `edition`, `ISBN`, `cover`, `publisher`) VALUES
(1, 'Java The Complete Reference', 2007, 7, '978-0-07-163177-8', '', ''),
(2, 'A+ Guide to Managing and Maintai', 2010, 8, '978-1-133-13508-1', '', ''),
(3, 'Table Layout in CSS', 2016, 1, '978-1-49193-053-3', '', ''),
(4, 'Java, how to program', 2013, 9, '978-0-12-257566-9', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `book_author`
--

CREATE TABLE `book_author` (
  `author_id` int(11) NOT NULL,
  `ISBN` varchar(32) NOT NULL,
  `author_name` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book_author`
--

INSERT INTO `book_author` (`author_id`, `ISBN`, `author_name`) VALUES
(1, '978-0-07-163177-8', 'Herbert Schildt'),
(2, '978-1-133-13508-1', 'Jean Andrews, Ph.D.'),
(3, '978-1-49193-053-3', 'Eric A. Meyer'),
(4, '978-0-12-257566-9', 'Paul Deitel, Harvey Deitel');

-- --------------------------------------------------------

--
-- Table structure for table `borrowing`
--

CREATE TABLE `borrowing` (
  `borrow_id` int(11) NOT NULL,
  `borrower_id` varchar(32) NOT NULL,
  `book_copy_id` varchar(32) NOT NULL,
  `b_date` datetime NOT NULL,
  `b_librarian` varchar(32) NOT NULL,
  `r_date` datetime NOT NULL,
  `r_librarian` varchar(32) NOT NULL,
  `returned` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` varchar(32) NOT NULL,
  `name` varchar(45) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` char(1) NOT NULL,
  `phone` int(10) NOT NULL,
  `userpwd` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `book_author`
--
ALTER TABLE `book_author`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `book_author`
--
ALTER TABLE `book_author`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
