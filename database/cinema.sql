-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 06:08 PM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cinema`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `bid` int(11) NOT NULL,
  `movieid` varchar(50) NOT NULL,
  `name` varchar(123) NOT NULL,
  `username` varchar(50) NOT NULL,
  `seats` varchar(50) NOT NULL,
  `seatsinfo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`bid`, `movieid`, `name`, `username`, `seats`, `seatsinfo`) VALUES
(11, '13', '', 'hk', '1', '11'),
(12, '13', '', 'hk', '1', '11'),
(13, '13', '', 'hk', '4', '2,17,22,37'),
(14, '13', 'Sultan', 'hk', '5', '29,48,49,68,69');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `id` int(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `genre` varchar(40) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `start` varchar(40) NOT NULL,
  `end` varchar(40) NOT NULL,
  `price` varchar(40) NOT NULL,
  `image` varchar(500) NOT NULL,
  `availability` int(10) NOT NULL DEFAULT '100',
  `seats` varchar(300) NOT NULL DEFAULT '0000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`id`, `name`, `genre`, `description`, `start`, `end`, `price`, `image`, `availability`, `seats`) VALUES
(13, 'Sultan', 'action', 'Salman Khan', '1500', '1800', '300', 'https://resizing.flixster.com/rGuheqilPseOpwMx0QbD33LHZf0=/206x305/v1.bTsxMTk4OTYzMDtqOzE3ODY4OzEyMDA7Njg2Ozk2MA', 100, '1011111111011000010000110011111111100100000011011100001000000000000011001000000010000000000000000000'),
(15, 'Interstellar', 'SciFi', 'Movie about space', '12:20', '16:20', '120', 'https://vignette.wikia.nocookie.net/interstellarfilm/images/9/98/Caa4e26154bbdce435ad99b63f6065eb.png/revision/latest?cb=20141119233429', 100, '0000001110000101000000000001000000000000000000000000010000000000000000000000000000000000000000000000');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `name` varchar(45) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `password` varchar(45) DEFAULT NULL,
  `phone` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`name`, `username`, `password`, `phone`) VALUES
(NULL, 'hello', NULL, NULL),
(NULL, 'hello', NULL, NULL),
(NULL, 'fafa', NULL, NULL),
('fasasfbdbb', 'ritu@gmail.com', '123456', 'fsdffsdfsdf'),
('aa', 'ritu@', '123456', 'fas'),
('jj', 'ritl', '123456', 'jj'),
('nmm', 'jnj', '123456m m', 'nmnm'),
('fsafas', 'rfasfasfas', '123456', 'fasasfasfa'),
('gdgdgdfgd', 'ritfsfsdsd', '123456', 'sfssaa'),
('', '', '', ''),
('Devendra Kushwah', 'idkk', '123', '121'),
('hiralal', 'hk', '123', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
