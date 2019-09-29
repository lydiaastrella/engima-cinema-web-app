-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2019 at 04:32 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `engima`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(10) NOT NULL,
  `title` varchar(50) NOT NULL,
  `duration` int(255) NOT NULL,
  `release_date` date NOT NULL,
  `description` varchar(250) NOT NULL,
  `film_photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `title`, `duration`, `release_date`, `description`, `film_photo`) VALUES
(1001, 'Avengers: Endgame', 152, '2019-04-24', 'Melanjutkan Avengers Infinity War, dimana kejadian setelah Thanos berhasil mendapatkan semua infinity stones dan memusnahkan 50% semua mahluk hidup di alam semesta. Akankah para Avengers berhasil mengalahkan Thanos?', 'avengers.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `film_genre`
--

CREATE TABLE `film_genre` (
  `id_film` int(4) NOT NULL,
  `genre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film_genre`
--

INSERT INTO `film_genre` (`id_film`, `genre`) VALUES
(1001, 'fantasy'),
(1001, 'fiction');

-- --------------------------------------------------------

--
-- Table structure for table `film_schedule`
--

CREATE TABLE `film_schedule` (
  `id_schedule` int(4) NOT NULL,
  `id_film` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `film_schedule`
--

INSERT INTO `film_schedule` (`id_schedule`, `id_film`) VALUES
(2001, 1001);

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `username` varchar(20) NOT NULL,
  `id_film` int(4) NOT NULL,
  `rating` float NOT NULL,
  `descripion` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`username`, `id_film`, `rating`, `descripion`) VALUES
('ekong', 1001, 9, 'seru bat filmnya');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_seat`
--

CREATE TABLE `schedule_seat` (
  `id_schedule` int(4) NOT NULL,
  `no_seat` int(4) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_seat`
--

INSERT INTO `schedule_seat` (`id_schedule`, `no_seat`, `status`) VALUES
(2001, 1, 'empty'),
(2001, 2, 'booked');

-- --------------------------------------------------------

--
-- Table structure for table `schedule_time`
--

CREATE TABLE `schedule_time` (
  `id_schedule` int(4) NOT NULL,
  `date` date NOT NULL,
  `time` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `schedule_time`
--

INSERT INTO `schedule_time` (`id_schedule`, `date`, `time`) VALUES
(2001, '2019-09-24', '19.00');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `username` varchar(20) NOT NULL,
  `id_schedule` int(4) NOT NULL,
  `no_seat` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`username`, `id_schedule`, `no_seat`) VALUES
('ekong', 2001, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `photo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `email`, `phone`, `password`, `photo`) VALUES
('ekong', 'ekasunandika@gmail.com', '085778751281', 'kong123', 'image.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `schedule_seat`
--
ALTER TABLE `schedule_seat`
  ADD PRIMARY KEY (`no_seat`);

--
-- Indexes for table `schedule_time`
--
ALTER TABLE `schedule_time`
  ADD PRIMARY KEY (`id_schedule`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
