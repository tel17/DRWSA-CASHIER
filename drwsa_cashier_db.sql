-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2025 at 04:40 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `drwsa_cashier_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_db`
--

CREATE TABLE `admin_db` (
  `id` int(11) NOT NULL,
  `account_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `account_created` date NOT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_db`
--

INSERT INTO `admin_db` (`id`, `account_id`, `email`, `password`, `firstname`, `lastname`, `account_type`, `contact`, `position`, `account_created`, `image_url`) VALUES
(1, '922831912', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'admin', 'admin', '09548381222', 'Admin', '2024-09-23', 'Screenshot_2017-01-17-16-56-56.jpg'),
(2, '123456789', 'hakdog@gmail.com', '6bb02b9216e00e07e59f66787653dd18', 'hakdog', 'hakdog', 'admin2', '09075656823', 'admin', '2025-01-02', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `conamount`
--

CREATE TABLE `conamount` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `feb` varchar(100) NOT NULL,
  `mar` varchar(100) NOT NULL,
  `apr` varchar(100) NOT NULL,
  `may` varchar(100) NOT NULL,
  `jun` varchar(100) NOT NULL,
  `jul` varchar(100) NOT NULL,
  `aug` varchar(100) NOT NULL,
  `sep` varchar(100) NOT NULL,
  `oct` varchar(100) NOT NULL,
  `nov` varchar(100) NOT NULL,
  `dec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `conamount`
--

INSERT INTO `conamount` (`id`, `accntNum`, `accntName`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, '2015-0928143730', 'Edgar Oquialda', '1257', '1049', '971', '1127', '1712', '854', '1010', '1088', '1127', '1127', '1302.50', '1394.50'),
(2, '2015-0928143731', 'Oliver Lizardo', '1252', '104', '1000', '1354', '999', '1000', '2089', '1081', '1123', '1112', '1288', '1176');

-- --------------------------------------------------------

--
-- Table structure for table `condate`
--

CREATE TABLE `condate` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `jan` date NOT NULL,
  `feb` date NOT NULL,
  `mar` date NOT NULL,
  `apr` date NOT NULL,
  `may` date NOT NULL,
  `jun` date NOT NULL,
  `jul` date NOT NULL,
  `aug` date NOT NULL,
  `sep` date NOT NULL,
  `oct` date NOT NULL,
  `nov` date NOT NULL,
  `dec` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `condate`
--

INSERT INTO `condate` (`id`, `accntNum`, `accntName`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, '2015-0928143730', 'Edgar Oquialdo', '2024-01-30', '2024-02-26', '2025-04-05', '2024-05-02', '2024-06-03', '2024-07-04', '2024-08-10', '2024-09-06', '2024-10-07', '2024-11-05', '2024-12-09', '2025-01-03'),
(2, '2015-0928143731', 'Oliver Lizardo', '2024-01-30', '2024-02-26', '2025-04-05', '2024-05-02', '2024-06-03', '2024-07-04', '2024-08-10', '2024-09-06', '2024-10-07', '2024-11-05', '2024-12-09', '2025-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `consumer_name`
--

CREATE TABLE `consumer_name` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `area` varchar(100) NOT NULL,
  `blk` varchar(100) NOT NULL,
  `sc` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL,
  `year` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `consumer_name`
--

INSERT INTO `consumer_name` (`id`, `accntNum`, `accntName`, `area`, `blk`, `sc`, `remarks`, `year`) VALUES
(1, '2015-0928143730', 'Edgar Oquialda', 'Kanluran', '', '', '', '2024'),
(2, '2015-0928143731', 'Oliver Lizardo', 'Ecoverde', '', '', '', '2024');

-- --------------------------------------------------------

--
-- Table structure for table `months`
--

CREATE TABLE `months` (
  `month` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `months`
--

INSERT INTO `months` (`month`) VALUES
('jan'),
('feb'),
('mar'),
('apr'),
('may'),
('jun'),
('jul'),
('aug'),
('sep'),
('oct'),
('nov'),
('dec');

-- --------------------------------------------------------

--
-- Table structure for table `ordata`
--

CREATE TABLE `ordata` (
  `id` int(11) NOT NULL,
  `accntNum` varchar(100) NOT NULL,
  `accntName` varchar(100) NOT NULL,
  `jan` varchar(100) NOT NULL,
  `feb` varchar(100) NOT NULL,
  `mar` varchar(100) NOT NULL,
  `apr` varchar(100) NOT NULL,
  `may` varchar(100) NOT NULL,
  `jun` varchar(100) NOT NULL,
  `jul` varchar(100) NOT NULL,
  `aug` varchar(100) NOT NULL,
  `sep` varchar(100) NOT NULL,
  `oct` varchar(100) NOT NULL,
  `nov` varchar(100) NOT NULL,
  `dec` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ordata`
--

INSERT INTO `ordata` (`id`, `accntNum`, `accntName`, `jan`, `feb`, `mar`, `apr`, `may`, `jun`, `jul`, `aug`, `sep`, `oct`, `nov`, `dec`) VALUES
(1, '2015-0928143730', 'Edgar Oquialda', '785138', '791473', '798112', '802487', '808891', '815102', '822160', '826702', '832259', '837156', '0003186', '0007822'),
(2, '2015-0928143731', 'Oliver Lizardo', '785138', '791473', '798112', '802487', '808891', '815102', '822160', '826702', '832259', '837156', '0003186', '0007822');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `image_url` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `likes` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `message`, `image_url`, `date_created`, `likes`) VALUES
(1, '490089220241009', 'sample', 'ads.PNG', '2024-10-09', 9),
(2, '285524520241009', 'my day with my doggie!', 'dog.PNG', '2024-09-26', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_db`
--

CREATE TABLE `user_db` (
  `id` int(11) NOT NULL,
  `user_id` varchar(90) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `middlename` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `account_type` varchar(100) NOT NULL,
  `date_created` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_db`
--

INSERT INTO `user_db` (`id`, `user_id`, `email`, `password`, `firstname`, `lastname`, `middlename`, `gender`, `contact`, `address`, `account_type`, `date_created`) VALUES
(4, '285524520241009', 'bucad.eddierackiel@gmail.com', 'd3c4e147a8b290f4a8a9d1d2e3ac6681', 'Ralph', 'Medrana', 'D', 'Male', '09506543210', 'sta maria sto tomas batangas', 'user', '2024-09-23'),
(9, '490089220241009', 'robertdave@gmail.com', 'd3c4e147a8b290f4a8a9d1d2e3ac6681', 'Robert', 'Nazareth', 'D', 'Male', '09506543210', 'pangasinan', 'User', '2024-10-09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_db`
--
ALTER TABLE `admin_db`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conamount`
--
ALTER TABLE `conamount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `condate`
--
ALTER TABLE `condate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `consumer_name`
--
ALTER TABLE `consumer_name`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordata`
--
ALTER TABLE `ordata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_db`
--
ALTER TABLE `user_db`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_db`
--
ALTER TABLE `admin_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_db`
--
ALTER TABLE `user_db`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
