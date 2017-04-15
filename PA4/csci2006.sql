-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 13, 2017 at 04:41 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csci2006`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `majors` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`majors`) VALUES
('Business'),
('Computer Science'),
('Economics'),
('Engineering'),
('English'),
('Mathematics'),
('Statistics'),
('Student Success');

-- --------------------------------------------------------

--
-- Table structure for table `credentials`
--

CREATE TABLE `credentials` (
  `UserID` int(11) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credentials`
--

INSERT INTO `credentials` (`UserID`, `password`, `email`) VALUES
(1, '1234', 'tj@yahoo.com'),
(2, '1234', 'max@aol.com');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `university` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`name`, `email`, `university`, `city`) VALUES
('Camille Bernard', 'camille.bernard@yahoo.fr', 'University of Paris', 'Paris'),
('Michelle Brooks', 'michelleb@aol.com', 'Columbia University', 'New York'),
('Robert Brown', 'robbrown@shaw.ca', 'York University', 'Toronto'),
('Richard Cunningham', 'ricunningham@hotmail.com', 'Texas Wesleyan University', 'Fort Worth'),
('Jose Fernandez', 'jfernandez@yahoo.pt', 'University of Lisbon', 'Lisbon'),
('Luis Gonzales', 'luisg@embraer.com.br', 'West Poinnt', 'New York'),
('Tim Goyer', 'tgoyer@apple.com', 'University of California', 'Cupertino'),
('Patrick Gray', 'patrick.gray@aol.com', 'University of Arizona', 'Tucson'),
('Astrid Gruber', 'astrid.gruber@apple.at', 'Vienna University of Technology', 'Vienna'),
('Zak Baani', 'zak@century.edu', 'Century College', 'White Bear');

-- --------------------------------------------------------

--
-- Table structure for table `imprints`
--

CREATE TABLE `imprints` (
  `publisher` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imprints`
--

INSERT INTO `imprints` (`publisher`) VALUES
('Addison-Wesley'),
('Longman'),
('Pearson'),
('Prentice Hall'),
('Undecided');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credentials`
--
ALTER TABLE `credentials`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `credentials`
--
ALTER TABLE `credentials`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
