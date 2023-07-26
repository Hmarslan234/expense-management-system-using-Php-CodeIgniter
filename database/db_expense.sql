-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 12:53 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_expense`
--

-- --------------------------------------------------------

--
-- Table structure for table `credit`
--

CREATE TABLE `credit` (
  `cre_id` int(11) NOT NULL,
  `cus_id` int(250) NOT NULL,
  `date` varchar(250) NOT NULL,
  `amount` double NOT NULL,
  `discription` varchar(250) NOT NULL,
  `dis_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit`
--

INSERT INTO `credit` (`cre_id`, `cus_id`, `date`, `amount`, `discription`, `dis_cat`) VALUES
(1, 1, '2022-12-08', 10000, 'xyz', 'badge-gradient-success');

-- --------------------------------------------------------

--
-- Table structure for table `debit`
--

CREATE TABLE `debit` (
  `deb_id` int(11) NOT NULL,
  `cus_id` int(250) NOT NULL,
  `amount` double NOT NULL,
  `discription` varchar(250) NOT NULL,
  `category_id` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` varchar(250) NOT NULL,
  `dis_cat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `debit`
--

INSERT INTO `debit` (`deb_id`, `cus_id`, `amount`, `discription`, `category_id`, `image`, `date`, `dis_cat`) VALUES
(1, 1, 200, 'syss', '1', 'tools.png', '2022-12-08', 'badge-gradient-warning');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `item_id` int(11) NOT NULL,
  `items` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`item_id`, `items`) VALUES
(1, 'Food');

-- --------------------------------------------------------

--
-- Table structure for table `recep`
--

CREATE TABLE `recep` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `city` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `date` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `recep`
--

INSERT INTO `recep` (`id`, `name`, `mobile`, `gender`, `city`, `address`, `date`) VALUES
(1, 'Ali', '0383435345', 'Male', 'RYK', 'Gulshan Iqbal', '2022-12-08 10:20:07.996476');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `hash_key` varchar(200) NOT NULL,
  `account_status` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`, `email`, `created`, `modified`, `status`, `hash_key`, `account_status`) VALUES
(1, 'Administrator', '0192023a7bbd73250516f069df18b500', 'admin@mail.com', '2022-07-05 00:00:00', '2022-07-05 00:00:00', 1, '', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `credit`
--
ALTER TABLE `credit`
  ADD PRIMARY KEY (`cre_id`);

--
-- Indexes for table `debit`
--
ALTER TABLE `debit`
  ADD PRIMARY KEY (`deb_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `recep`
--
ALTER TABLE `recep`
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
-- AUTO_INCREMENT for table `credit`
--
ALTER TABLE `credit`
  MODIFY `cre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `debit`
--
ALTER TABLE `debit`
  MODIFY `deb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `recep`
--
ALTER TABLE `recep`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
