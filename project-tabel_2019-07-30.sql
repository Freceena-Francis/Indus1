-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 30, 2019 at 05:56 AM
-- Server version: 5.6.35
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `indus`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(50) NOT NULL,
  `direct_type` varchar(25) NOT NULL,
  `direct_name` varchar(250) NOT NULL,
  `direct_usrcode` varchar(250) NOT NULL,
  `direct_intcode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `direct_type`, `direct_name`, `direct_usrcode`, `direct_intcode`) VALUES
(1, 'DIR0004', 'Sydney\r\n', 'SYD0987', 'PRJ0876\r\n'),
(2, 'DIR0004', 'E Loco\r\n\r\n', 'EL9260', 'PRJ9278'),
(4, 'DIR0004', 'Montreal\r\n\r\n', 'MON7548', 'PRJ8649'),
(6, 'DIR0004', 'Mumbai L3\r\n', 'MML9760', 'PRJ8758'),
(7, 'DIR0004', 'Lucknow\r\n', 'LUK7548', 'PRJ0765'),
(8, 'DIR0004', 'Kochi\r\n', 'KMRL7899', 'PRJ7864'),
(9, 'DIR0004', 'Chennai\r\n', 'CMRL8754', 'PRJ8650'),
(11, 'DIR0004', 'SMART\r\n', 'SMRT8646', 'PRJ8658'),
(12, 'DIR0004', 'Leave\r\n', 'LV6426', 'PRJ9865'),
(13, 'DIR0004', 'PLM\r\n', 'PLM7547', 'PRJ9754'),
(14, 'DIR0004', 'Mumbai L3 Traction\r\n', 'MML9876', 'PRJ8648'),
(15, 'DIR0004', 'Metro City\r\n', 'MC7654', 'PRJ1234'),
(16, 'DIR0004', 'CoE', 'COE3245', 'PRJ9467\n'),
(17, 'DIR0001', 'M7\r\n', 'M79865', 'SEC8764'),
(18, 'DIR0001', 'MP14\r\n', 'MP086', 'SEC7657'),
(19, 'DIR0001', 'MPL16\r\n', 'MP8658', 'SEC8467'),
(20, 'DIR0001', 'RERNG\r\n', 'RER5436', 'SEC7654'),
(21, 'DIR0001', 'Dubai\r\n', 'DUB7547', 'SEC7656'),
(22, 'DIR0001', 'Hanoi\r\n', 'HAN9876', 'SEC6456'),
(23, 'DIR0001', 'DELMIA\r\n', 'DEL9876', 'SEC7456'),
(24, 'DIR0001', 'CRL\r\n', 'CRL9876', 'SEC7345'),
(25, 'DIR0002', 'NEO-CoE\r\n', 'NC8765', 'COE8760'),
(26, 'DIR0002', 'TRB Training\r\n', 'TRB8766', 'COE9876'),
(27, 'DIR0003', 'Mumbai L3\r\n', 'MML7654', 'BID4367'),
(28, 'DIR0003', 'Mumbai L2/L7\r\n', 'MML8758', 'BID7657'),
(29, 'DIR0003', 'Pune\r\n', 'PUN8769', 'BID7655\n'),
(30, 'DIR0003', 'Marseille\r\n', 'MAR6547', 'BID9769\n'),
(31, 'DIR0003', 'Berlin\r\n', 'BER5467', 'BID8768'),
(32, 'DIR0003', 'H4\r\n', 'H76589', 'BID5458'),
(33, 'DIR0003', 'Perth\r\n', 'PER8769', 'BID9769'),
(34, 'DIR0003', 'BCN NEL CCL\r\n', 'BNC5479', 'BID8757');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
