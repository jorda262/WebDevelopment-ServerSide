-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2017 at 03:21 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

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
('Joao Fernandes', 'jfernandes@yahoo.pt', 'university of Lisbon', 'Lisbon'),
('Edward Francis', 'edfrancis@yahoo.ca', 'Carleton University', 'Ottawa'),
('Luis Goncalves', 'luisg@embraer.com.br', '', 'Sao Jose dos Campos'),
('Tim Goyer', 'tgoyer@apple.com', 'University of California, Santa Cruz', 'Cupertino'),
('Patrick Gray', 'patrick.gray@aol.com', 'University of Arizona', 'Tucson'),
('Astrid Gruber', 'astrid.gruber@apple.at', 'Vienna University of Technology', 'Vienna');

-- --------------------------------------------------------

--
-- Table structure for table `imprints`
--

CREATE TABLE `imprints` (
  `editors` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imprints`
--

INSERT INTO `imprints` (`editors`) VALUES
('Addison Wesley'),
('Longman'),
('Pearson'),
('Prentice Hall'),
('Undecided');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
