-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 10:27 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `voting`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE `candidate` (
  `candi_id` bigint(12) NOT NULL,
  `candi_name` varchar(50) NOT NULL,
  `contest_villa` varchar(30) NOT NULL,
  `candi_photo` varchar(50) NOT NULL,
  `candi_symbol` varchar(50) NOT NULL,
  `phonenum` bigint(10) NOT NULL,
  `aadhar_id` bigint(12) NOT NULL,
  `voter_id` bigint(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(300) NOT NULL,
  `date_of_birth` date NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `apporval_status` varchar(10) NOT NULL,
  `no_of_votes` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`candi_id`, `candi_name`, `contest_villa`, `candi_photo`, `candi_symbol`, `phonenum`, `aadhar_id`, `voter_id`, `email`, `address`, `date_of_birth`, `username`, `password`, `apporval_status`, `no_of_votes`) VALUES
(1, 'm.pullarao', 'rayachoti', '', '', 9379837434, 123656897854, 5362, 'mpullarao@gmail.com', 'pullam complex,rayachoti', '1996-10-02', 'pullarao', '12345', 'approve', 1),
(2, 'p.gangaram', 'sirivella', '', '', 7398873, 568978541236, 8985, 'gangaram@gmail.com', 'ganga nilayam,sirivella,', '1980-09-05', 'gangaram', '12345', 'approve', 0),
(3, 'r.ramarao', 'jamalamadugu', '', '', 9480837838, 123678545689, 3212, 'ramarao@gmail.com', 'rama residences,jamalamadugu', '1960-01-01', 'ramarao', '12345', 'approve', 0),
(4, 'w.revathi', 'ellore', '', '', 8392382892, 456123678589, 2466, 'revathi@gmail.com', 'revathi complex, ellore', '1975-08-20', 'revathi', '12345', 'approve', 0),
(5, 't.yellama', 'kakinada', '', '', 9323892883, 456785896123, 6865, 'yellama@gmail.com', 'yellama residences,kakinada', '1960-02-14', 'yellama', '12345', 'approve', 0),
(6, 'k.ramaraju', 'tadepalligudam', '', '', 8973673288, 123489237291, 7381, 'ramaraju@gmail.com', 'raju complex,tadepalligudam', '1990-12-02', 'ramaraju', '12345', 'approve', 0),
(7, 's.abdul', 'vijayawada', '', '', 8382892923, 364561278589, 2321, 'abdul@gmail.com', 'ram residencies, vijayawada', '1993-07-20', 'abdul', '12345', 'approve', 0),
(8, 'a.janson', 'kottalapalle', '', '', 9422807838, 456128589367, 3435, 'janson@gmail.com', 'janson@gmail.com', '1996-01-08', 'janson', '12345', 'approve', 0),
(9, 'k.rajesh', 'sambepalle', '', '', 9183673288, 237123489291, 4352, 'rajesh@gmail.com', 'gaja residences,sambepalle', '1994-10-04', 'rajesh', '12345', 'approve', 2),
(10, 'b.gaja gowd', 'bhemavaram', '', '', 9941124999, 124994999912, 8798, 'gowd@gmail.com', 'gaja complex,bhimavaram', '1960-06-04', 'gaja', '12345', 'approve', 0),
(11, 'rayudu', 'jamalamadugu', '', '', 9374349837, 123785465689, 474, 'rayudu@gmail.com', 'rayudu peaks', '1974-03-06', 'rayudu', '12345', 'approve', 0),
(12, 'palani selvam', 'rayachoti', '', '', 8968873732, 239291712348, 1487, 'palani@gmail.com', 'selvam sanitoriam', '1984-03-06', 'selvam', '12345', 'approve', 0),
(13, 'bhupati rao', 'sirivella', '', '', 9941997124, 129124994999, 184, 'rao@gmail.com', 'rao colony', '2000-03-06', 'bhupati', '12345', 'approve', 0),
(14, 'simhachellam', 'ellore', '', '', 9942419971, 129999124994, 8464, 'simha@gmail.com', 'symphoni heights', '1994-02-06', 'simhachellam', '12345', 'approve', 0),
(15, 'sarala', 'kakinada', '', '', 9971424199, 129949999124, 8482, 'sarala@gmail.com', 'kalam colony', '1990-03-06', 'sarala', '12345', 'approve', 0),
(16, 'apparna', 'tadepalligudam', '', '', 9199971424, 129199499924, 4792, 'appu@gmail.com', 'appu nilayam', '1974-03-06', 'apparna', '12345', 'approve', 0),
(17, 'rajiv', 'vijayawada', '', '', 9424199971, 499924129199, 7432, 'rajiv@gmail.com', 'rajiv heights', '1994-12-06', 'rajiv', '12345', 'approve', 0),
(19, 'sarojini', 'sambepalle', '', '', 9124497199, 412999249991, 5253, 'saru@gmail.com', 'nayudu nagar', '1984-04-02', 'sarojini', '12345', 'approve', 0),
(20, 'prema latha', 'bhemavaram', '', '', 9497124194, 194929124999, 7934, 'prema@gmail.com', 'latha residencies', '1994-07-06', 'latha', '12345', 'approve', 0),
(21, 'rajaram', 'kottalapalle', '', '', 9497124199, 499999241291, 4533, 'rajaram@gmail.com', 'raja villa', '1974-04-02', 'rajaram', '12345', 'approve', 0);

-- --------------------------------------------------------

--
-- Table structure for table `candidate_approval_log`
--

CREATE TABLE `candidate_approval_log` (
  `log_id` int(7) NOT NULL,
  `candi_id` int(7) NOT NULL,
  `ec_id` int(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `ec_details`
--

CREATE TABLE `ec_details` (
  `ec_id` int(6) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phonenum` bigint(10) NOT NULL,
  `gmail` varchar(30) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ec_details`
--

INSERT INTO `ec_details` (`ec_id`, `name`, `phonenum`, `gmail`, `username`, `password`) VALUES
(1, 'savitri', 9863537754, 'savitri@gmail.com', 'savitri', '12345'),
(2, 'kamalakar', 9864353775, 'kamalakar@gmail.com', 'kamalakar', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `vill_details`
--

CREATE TABLE `vill_details` (
  `villa_id` int(11) NOT NULL,
  `villa_name` varchar(30) NOT NULL,
  `disrt` varchar(30) NOT NULL,
  `state` varchar(30) NOT NULL,
  `results_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vill_details`
--

INSERT INTO `vill_details` (`villa_id`, `villa_name`, `disrt`, `state`, `results_status`) VALUES
(1, 'rayachoti', 'kadapa', 'ap', 'pending'),
(2, 'jamalamadugu', 'kadapa', 'ap', 'pending'),
(3, 'sirivella', 'vellore', 'ap', 'pending'),
(4, 'kottalapalle', 'nellore', 'ap', 'pending'),
(5, 'tadepalligudam', 'west godavari', 'ap', 'pending'),
(6, 'ellore', 'west godavari', 'ap', 'pending'),
(7, 'bhemavaram', 'west godavari', 'ap', 'pending'),
(8, 'kakinada', 'east godavari', 'ap', 'pending'),
(9, 'sambepalle', 'kadapa', 'ap', 'approve'),
(10, 'vijayawada', 'krishna', 'ap', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE `voter` (
  `aadhar_card` bigint(12) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phonenum` bigint(10) NOT NULL,
  `voter_id` bigint(12) NOT NULL,
  `email` varchar(40) NOT NULL,
  `address` varchar(300) NOT NULL,
  `date_of_birth` date NOT NULL,
  `villa_name` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(15) NOT NULL,
  `apporval_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`aadhar_card`, `name`, `phonenum`, `voter_id`, `email`, `address`, `date_of_birth`, `villa_name`, `username`, `password`, `apporval_status`) VALUES
(123456789101, 'mokshi', 9949941712, 1232, 'senkumokshith2002@gmail.com', '45/84,bosenagar', '2002-02-06', 'rayachoti', 'mokshith', '12345', 'approve'),
(129463781501, 'p.fredinand', 9427813934, 2455, 'ferdinad@gmail.com', 'arch residencies,s', '1995-04-03', 'tadepalligudam\r\n              ', 'fredinand', '12345', 'approve'),
(696036038689, 'i.mohamad islam', 7283319378, 3439, 'islam@gmail.com', 'abdula villa, sambepalle', '1974-08-25', 'sambepalle', 'islam', '12345', 'approve'),
(567894123101, 'b.rajendra prasad', 9747876585, 3471, 'rajendraprasad@gmail.com', 'smart heights,jamalamadugu,', '1978-01-01', 'jamalamadugu', 'prasad', '12345', 'approve'),
(121013456789, 'u.unnath', 9342782773, 3488, 'unnath@gmail.com', 'white wolf residencies, bhemavaram', '1980-09-05', 'bhemavaram', 'unnath', '12345', 'approve'),
(660386899603, 'l.jakir hussam', 99712499941, 3908, 'jakki@gmail.com', 'aslam villa ,sambepalle', '1960-06-04', 'sambepalle', 'hussan', '12345', 'approve'),
(696038689603, 'r.gangamma', 8967373288, 4353, 'ganga@gmail.com', 'blue heights,bhemavaram', '1990-12-02', 'bhemavaram', 'gangamma', '12345', 'approve'),
(868696039603, 'p.pavan', 8932887673, 4633, 'pavan@gmail.com', 'prudivi complex, kakinada', '1974-08-25', 'kakinada', 'pavan', '12345', 'approve'),
(637811294501, 'y.ramoji', 9139727834, 5245, 'ramoji@gmail.com', 'ramoji residencies,sirivella', '1994-07-05', 'sirivella\r\n                   ', 'ramoji', '12345', 'approve'),
(963781124501, 'y.iyer', 9727827334, 5453, 'iyer@gmail.com', 'iyer residencies,rayachoti', '1966-12-02', 'rayachoti\r\n                   ', 'iyer', '12345', 'approve'),
(912456378101, 't.satwik', 9773327824, 6543, 'satwik@gmail.com', 'satwik residencies,vijayawada', '1996-10-02', 'vijayawada', 'satwik', '12345', 'approve'),
(127834569101, 'k.kanakalakshmi', 8398982223, 6586, 'lakshmi@gmail.com', 'kanaka heights,jamalamadugu,kadapa,ap', '1999-09-05', 'jamalamadugu', 'lakshmi', '12345', 'approve'),
(68236988, 'ravi raju', 9994738760, 7326, 'raviraju@gmail.com', 'ravi heights', '1997-01-15', 'sambepalle', 'raju', '12345', 'approve'),
(337923337923, 'c.nekshita', 8973673288, 7381, 'nekshita@gmail.com', 'nekshi heights,kakinada', '1994-10-04', 'kakinada', 'neksitha', '12345', 'approve'),
(123451016789, 'p.abhi', 9980837838, 7391, 'nagendhra@gmail.com', 'lilitha nagar,sirivella', '1960-02-14', 'sirivella', 'abhi', '12345', 'approve'),
(456789123101, 'k.koushik', 9327827734, 7823, 'koushik@gmail.com', 'simponi heights,vijayawada', '2000-08-20', 'vijayawada', 'koushik', '12345', 'approve'),
(789124563101, 'o namitha', 8892392382, 8100, 'ansari@gmail.com', 'gandhi nagar,kottalapalle', '1930-06-02', 'kottalapalle', 'namitha', '12345', 'approve'),
(456782139101, 'b.tejasri', 9182793734, 8362, 'teja@gmail.com', 'sri residencies,ellore', '2002-02-06', 'ellore', 'teja', '12345', 'approve'),
(345671289101, 'k.ravibabu', 9767875854, 8603, 'ravibabu@gmail.com', 'violet residenceies tadepalligudam', '1996-10-05', 'tadepalligudam', 'ravi', '12345', 'approve'),
(145678239101, 'j.harini', 8392382892, 8899, 'harini@gmail.com', 'hari heights,ellore', '1960-02-14', 'ellore', 'harini', '12345', 'approve'),
(789124553101, 'p.veena', 9379837434, 9232, 'veena@gmail.com', 'veenaheights,kottalapalle', '1980-09-05', 'kottalapalle', 'veena', '12345', 'approve');

-- --------------------------------------------------------

--
-- Table structure for table `voter_approval_log`
--

CREATE TABLE `voter_approval_log` (
  `log_no` int(7) NOT NULL,
  `voter_id` int(7) NOT NULL,
  `ec_id` int(7) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voter_approval_log`
--

INSERT INTO `voter_approval_log` (`log_no`, `voter_id`, `ec_id`, `date`) VALUES
(203, 7326, 1, '2021-05-17');

-- --------------------------------------------------------

--
-- Table structure for table `voting_details`
--

CREATE TABLE `voting_details` (
  `vote_id` int(12) NOT NULL,
  `voter_id` int(12) NOT NULL,
  `candidate_id` int(12) NOT NULL,
  `date_of_vote` date NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `voting_details`
--

INSERT INTO `voting_details` (`vote_id`, `voter_id`, `candidate_id`, `date_of_vote`, `status`) VALUES
(23, 1232, 1, '2021-05-17', 'updated');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate`
--
ALTER TABLE `candidate`
  ADD PRIMARY KEY (`candi_id`),
  ADD UNIQUE KEY `aadhar_id` (`aadhar_id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`),
  ADD UNIQUE KEY `phonenum` (`phonenum`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `candidate_approval_log`
--
ALTER TABLE `candidate_approval_log`
  ADD PRIMARY KEY (`log_id`);

--
-- Indexes for table `ec_details`
--
ALTER TABLE `ec_details`
  ADD PRIMARY KEY (`ec_id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phonenum` (`phonenum`);

--
-- Indexes for table `vill_details`
--
ALTER TABLE `vill_details`
  ADD PRIMARY KEY (`villa_id`);

--
-- Indexes for table `voter`
--
ALTER TABLE `voter`
  ADD PRIMARY KEY (`voter_id`),
  ADD UNIQUE KEY `aadhar_card` (`aadhar_card`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `phonenum` (`phonenum`);

--
-- Indexes for table `voter_approval_log`
--
ALTER TABLE `voter_approval_log`
  ADD PRIMARY KEY (`log_no`);

--
-- Indexes for table `voting_details`
--
ALTER TABLE `voting_details`
  ADD PRIMARY KEY (`vote_id`),
  ADD UNIQUE KEY `voter_id` (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate`
--
ALTER TABLE `candidate`
  MODIFY `candi_id` bigint(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `candidate_approval_log`
--
ALTER TABLE `candidate_approval_log`
  MODIFY `log_id` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ec_details`
--
ALTER TABLE `ec_details`
  MODIFY `ec_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `vill_details`
--
ALTER TABLE `vill_details`
  MODIFY `villa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `voter_approval_log`
--
ALTER TABLE `voter_approval_log`
  MODIFY `log_no` int(7) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `voting_details`
--
ALTER TABLE `voting_details`
  MODIFY `vote_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
