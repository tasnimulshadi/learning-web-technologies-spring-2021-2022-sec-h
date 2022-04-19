-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 02:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(100) NOT NULL,
  `date` date NOT NULL,
  `title` mediumtext NOT NULL,
  `detail` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `date`, `title`, `detail`) VALUES
(10, '2022-04-26', 'many of the secrets of how they were constructed have been lost', 'many of the secrets of how they were constructed have been lost many of the secrets of how they were constructed have been lost many of the secrets of how they were constructed have been lost many of the secrets of how they were constructed have been lost many of the secrets of how they were constructed have been lost'),
(11, '2022-04-14', 'W3Schools is optimized for learning and training', 'W3Schools is optimized for learning and training. Examples might be simplified to improve reading and learning. Tutorials, references, and examples are constantly reviewed to avoid errors, but we cannot warrant full correctness of all content. While using W3Schools, you agree to have read and accepted our terms of use, cookie and privacy policy.'),
(14, '2022-04-13', 'new notice test 1', 'something something'),
(15, '2022-04-06', 'Test notice 2', 'Test notice details');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(100) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `usertype`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin', 'admin@admin.com'),
(2, 'admin', 'shadi', '1234', 'shadi@admin.com'),
(10, 'admin', 'admin', '1234', 'tasnimulislamshadi@gmail.com'),
(12, 'teacher', 'alamin', '1234', 'mdalamin@aiub.edu'),
(13, 'student', 'shadi', '1234', 'shadi@gmail.com'),
(14, 'parent', 'parent1', '1234', 'parent@gmail.com'),
(15, 'teacher', 'teacher1', '1234', 'teacher@gmail.com'),
(16, 'student', 'student1', '1234', 's@gmail.com'),
(17, 'parent', 'parent2', '1234', 'p2@gmail.com'),
(19, 'admin', 'admin', '789', 'tasnimulislamshadi@gmail.com'),
(20, 'student', 'sharan', '1234', 'sharan@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
