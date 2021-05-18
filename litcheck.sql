-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 02:53 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `litcheck`
--

-- --------------------------------------------------------

--
-- Table structure for table `literature`
--

CREATE TABLE `literature` (
  `id` int(100) NOT NULL,
  `title` text DEFAULT NULL,
  `category` varchar(100) DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL,
  `link` text DEFAULT NULL,
  `author_1` varchar(100) NOT NULL,
  `author_2` varchar(100) NOT NULL,
  `author_3` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `literature`
--

INSERT INTO `literature` (`id`, `title`, `category`, `type`, `link`, `author_1`, `author_2`, `author_3`) VALUES
(1, 'c++ programming for starters', 'Computer Engineering', 'Article', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'Alpha', 'Beta', 'Charlie'),
(2, 'one plus one equals two', 'Algebra', 'Studies', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'Bravo', 'Delta', 'Foxtrot'),
(3, 'solar system multiverse', 'Astronomy', 'Blog', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'Echo', 'Dog', 'Cat'),
(4, 'Why Laplace Transform Exist', 'Calculus', 'Journal', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'Beta', 'Foxtrot', 'Ace'),
(5, 'Concrete Mixing', 'Civil Engineering', 'Study', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'Alpha', 'Charlie', 'Elephant'),
(6, 'Legit Flat Earth Theory', 'Earth Science', 'Study', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ', 'Cat', 'Fox', 'Bravo');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `literature`
--
ALTER TABLE `literature`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `literature`
--
ALTER TABLE `literature`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
