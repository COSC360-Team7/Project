-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 09, 2017 at 08:05 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `web_sample`
--
DROP table `blogs`;
DROP TABLE `users`;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(255) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `admin` boolean NOT NULL,
  `pfp` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

CREATE TABLE `blogs` (
    `username` varchar(255) NOT NULL,
    `title` varchar(255) NOT NULL,
    `category` varchar(255) NOT NULL,
    `picture` longblob,
    `content` text NOT NULL,
    `comments` varchar(255)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`,`pfp` ) VALUES
('markhayes', 'mark', 'hayes', 'mark.hayes@email.com', 'ea82410c7a9991816b5eeeebe195e20a', true, '../pfp/grinch.jpg');
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('paulz', 'paul', 'z', 'paul.z@email.com', '6c63212ab48e8401eaf6b59b95d816a9', true);
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('magicjonsen', 'joseph', 'magic', 'joseph@email.com', 'cb07901c53218323c4ceacdea4b23c98', true);
INSERT INTO `users` (`username`, `firstName`, `lastName`, `email`, `password`,`admin`) VALUES
('bobsmith', 'bob', 'smith', 'bob@email.com', '9f9d51bc70ef21ca5c14f307980a29d8', false);


--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

ALTER TABLE `blogs`
    ADD FOREIGN KEY (username)
    REFERENCES `users` (username);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
