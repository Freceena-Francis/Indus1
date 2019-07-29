-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 29, 2019 at 05:09 PM
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
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `alpsid` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `domain_f` varchar(50) NOT NULL,
  `type_f` varchar(50) NOT NULL,
  `value` varchar(50) NOT NULL,
  `code` varchar(50) NOT NULL,
  `task_f` varchar(50) NOT NULL,
  `subtask_f` varchar(50) NOT NULL,
  `hrs_consumed` float NOT NULL,
  `industrialization` varchar(50) NOT NULL,
  `deliverable_done` int(10) NOT NULL,
  `comments` varchar(500) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `alpsid`, `date`, `domain_f`, `type_f`, `value`, `code`, `task_f`, `subtask_f`, `hrs_consumed`, `industrialization`, `deliverable_done`, `comments`, `timestamp`) VALUES
(51, '415663', '2019-07-02', 'DOM6589', 'DIR0001', 'SEC7657', 'MP086', 'tsk0001', 'CM9457', 6, '', 1, '', '2019-07-29 14:16:08'),
(52, '415663', '2019-07-11', 'DOM5081', 'DIR0004', 'PRJ0765', 'LUK7548', 'tsk8754', 'MR4589', 5, 'ind', 1, 'nil', '2019-07-29 14:34:00');

-- --------------------------------------------------------

--
-- Table structure for table `domain`
--

CREATE TABLE `domain` (
  `domain_id` int(50) NOT NULL,
  `domain_name` varchar(250) NOT NULL,
  `domain_intcode` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `domain`
--

INSERT INTO `domain` (`domain_id`, `domain_name`, `domain_intcode`) VALUES
(15, 'Interiors', 'DOM6589'),
(16, 'CBS', 'DOM6322'),
(17, 'Electrical', 'DOM5081'),
(18, 'MFI', 'DOM7452'),
(19, 'Tooling', 'DOM7908'),
(20, 'Bids', 'DOM5017'),
(21, 'Special Process', 'DOM3769'),
(22, 'PIM/PRIM', 'DOM7994');

-- --------------------------------------------------------

--
-- Table structure for table `planning`
--

CREATE TABLE `planning` (
  `plan_id` int(10) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `plan_deliverables` int(10) NOT NULL,
  `plan_hrs` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(15, 'DIR0004', 'Metro City\r\n', 'MC7654', 'PRJ9865\r\n'),
(16, 'DIR0004', 'CoE', 'COE3245', 'PRJ0289\r\n'),
(17, 'DIR0001', 'M7\r\n', 'M79865', 'SEC8764\r\n'),
(18, 'DIR0001', 'MP14\r\n', 'MP086', 'SEC7657'),
(19, 'DIR0001', 'MPL16\r\n', 'MP8658', 'SEC8467\r\n'),
(20, 'DIR0001', 'RERNG\r\n', 'RER5436', 'SEC7654\r\n'),
(21, 'DIR0001', 'Dubai\r\n', 'DUB7547', 'SEC7256\r\n'),
(22, 'DIR0001', 'Hanoi\r\n', 'HAN9876', 'SEC6456\r\n'),
(23, 'DIR0001', 'DELMIA\r\n', 'DEL9876', 'SEC7456'),
(24, 'DIR0001', 'CRL\r\n', 'CRL9876', 'SEC73456'),
(25, 'DIR0002', 'NEO-CoE\r\n', 'NC8765', 'COE8760'),
(26, 'DIR0002', 'TRB Training\r\n', 'TRB8766', 'COE9876'),
(27, 'DIR0003', 'Mumbai L3\r\n', 'MML7654', 'BID4367'),
(28, 'DIR0003', 'Mumbai L2/L7\r\n', 'MML8758', 'BID7657'),
(29, 'DIR0003', 'Pune\r\n', 'PUN8769', 'BID7657\r\n'),
(30, 'DIR0003', 'Marseille\r\n', 'MAR6547', 'BID8880\r\n'),
(31, 'DIR0003', 'Berlin\r\n', 'BER5467', 'BID8768'),
(32, 'DIR0003', 'H4\r\n', 'H76589', 'BID5458'),
(33, 'DIR0003', 'Perth\r\n', 'PER8769', 'BID9769'),
(34, 'DIR0003', 'BCN NEL CCL\r\n', 'BNC5479', 'BID8757');

-- --------------------------------------------------------

--
-- Table structure for table `subtask`
--

CREATE TABLE `subtask` (
  `subtask_id` int(10) NOT NULL,
  `task_codeint` varchar(50) NOT NULL,
  `subtask_name` varchar(50) NOT NULL,
  `subtask_intcode` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subtask`
--

INSERT INTO `subtask` (`subtask_id`, `task_codeint`, `subtask_name`, `subtask_intcode`) VALUES
(1, 'tsk9757', 'IMFU', 'IM5789'),
(2, 'tsk9757', 'Industrial Gap analysis', 'IM7574'),
(3, 'tsk9757', 'Criticality Matrix analysis', 'IM7484'),
(4, 'tsk9757', 'Macro process\r\n', 'IM7578'),
(5, 'tsk9757', 'REX Management', 'IM4679'),
(6, 'tsk9757', 'IMP', 'IM6468'),
(7, 'tsk9757', 'DAMOB', 'IM9479'),
(8, 'tsk9757', 'CAPEX', 'IM2467'),
(9, 'tsk0001', 'FMI-CI-Retro BOM-Management', 'CM9457'),
(10, 'tsk01900', 'RFC', 'SS8969'),
(11, 'tsk01900', 'Manufacturing', 'SS2975'),
(12, 'tsk01900', 'Depot', 'SS4678'),
(13, 'tsk01900', 'LLI', 'SS2467'),
(14, 'tsk01900', 'Testing', 'SS4638'),
(15, 'tsk8754', 'FAR', 'MR8579'),
(16, 'tsk8754', 'FMR', 'MR4589'),
(17, 'tsk8754', 'SMR', 'MR2567'),
(18, 'tsk9277', 'Crimping', 'SP0378'),
(19, 'tsk9277', 'Shield Cable', 'SP4789'),
(20, 'tsk9277', 'Riveting', 'SP8467'),
(21, 'tsk9277', 'Gluing', 'SP2578'),
(22, 'tsk9277', 'Welding', 'SP7357'),
(23, 'tsk9277', 'Torque', 'SP7257'),
(24, 'tsk9086', 'IDS-S-Phase', 'CE2490'),
(25, 'tsk9086', 'IDS-P-Phase', 'CE9478'),
(26, 'tsk9086', 'ICONE', 'CE4678'),
(27, 'tsk2735', 'WI', 'ID3567'),
(28, 'tsk2735', 'QCS', 'ID4690'),
(29, 'tsk2735', 'NEO', 'ID5278'),
(30, 'tsk2735', 'ELSA', 'ID3678'),
(32, 'tsk2735', 'SMT', 'ID3569'),
(34, 'tsk2735', 'MBOM', 'ID3579'),
(35, 'tsk2735', 'Tools/Jigs-Fixtures', 'ID2346'),
(36, 'tsk2735', 'Change note', 'ID3457'),
(37, 'tsk2735', 'Routing', 'ID3568'),
(38, 'tsk9765', 'Ad-Hoc', 'OD2467'),
(39, 'tsk9765', 'others', 'OD1567'),
(40, 'tsk2735', 'PFMEA', 'ID9679');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `task_id` int(10) NOT NULL,
  `task_intcode` varchar(50) NOT NULL,
  `task_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `task_intcode`, `task_name`) VALUES
(1, 'tsk9757', 'Indus Management'),
(2, 'tsk0001', 'Change Management\r\n'),
(3, 'tsk01900', 'Site Support\r\n'),
(4, 'tsk8754', 'Mounting Reviews\r\n '),
(5, 'tsk9277', 'Special Process\r\n'),
(6, 'tsk9086', 'Co-Engg'),
(8, 'tsk2735', 'Indus Deliverables'),
(9, 'tsk9765', 'others');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `type_id` int(10) NOT NULL,
  `type_intcode` varchar(10) NOT NULL,
  `type_name` varchar(50) NOT NULL,
  `type_cat` set('Direct','Indirect') NOT NULL,
  `indr_usrcode` varchar(25) NOT NULL,
  `ori_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`type_id`, `type_intcode`, `type_name`, `type_cat`, `indr_usrcode`, `ori_type`) VALUES
(1, 'DIR0001', 'SEC', 'Direct', 'usrcode1', ''),
(2, 'DIR0002', 'COE', 'Direct', 'usrcode2', ''),
(3, 'IND001', 'meeting', 'Indirect', 'usrcode3', ''),
(4, 'DIR0003', 'Bids', 'Direct', 'usrcode4', ''),
(5, 'DIR0004', 'Projects', 'Direct', 'usrcode5', ''),
(7, 'IND002', 'Training', 'Indirect', 'usrcode6', ''),
(8, 'IND003', 'Unapplied', 'Indirect', 'usrcode7', ''),
(9, 'IND004', 'Indirect', 'Indirect', 'usrcode8', ''),
(10, 'IND005', 'Tool Down', 'Indirect', 'usrcode9', ''),
(11, 'IND006', 'Contractual Break', 'Indirect', 'usrcode10', ''),
(12, 'IND007', 'Holiday', 'Indirect', 'usrcode11', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(50) NOT NULL,
  `alpsid` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `role` int(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mail` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `alpsid`, `name`, `role`, `password`, `mail`) VALUES
(1, 412345, 'Anna', 1, 'anna@123', 'anna@alstomgroup.com'),
(2, 12345, 'Adhil', 0, 'adh#1234', 'adhil@alstomgroup.com'),
(3, 67890, 'Trudy', 2, 'tr#$%', 'trudy@alstomgroup.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `domain`
--
ALTER TABLE `domain`
  ADD PRIMARY KEY (`domain_id`),
  ADD UNIQUE KEY `domain_intcode` (`domain_intcode`);

--
-- Indexes for table `planning`
--
ALTER TABLE `planning`
  ADD PRIMARY KEY (`plan_id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `project_intcode` (`direct_intcode`);

--
-- Indexes for table `subtask`
--
ALTER TABLE `subtask`
  ADD PRIMARY KEY (`subtask_id`),
  ADD UNIQUE KEY `subtask_intcode` (`subtask_intcode`),
  ADD KEY `fk_taskcodeint` (`task_codeint`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`task_id`),
  ADD UNIQUE KEY `task_intcode` (`task_intcode`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`type_id`),
  ADD UNIQUE KEY `type_intcode` (`type_intcode`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- AUTO_INCREMENT for table `domain`
--
ALTER TABLE `domain`
  MODIFY `domain_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `planning`
--
ALTER TABLE `planning`
  MODIFY `plan_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `subtask`
--
ALTER TABLE `subtask`
  MODIFY `subtask_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `task_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `type_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
