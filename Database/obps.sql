-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 04:59 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obps`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `city`, `state_id`) VALUES
(1, 'Ahmedabad', 1),
(2, 'Surat', 1),
(3, 'Gandhinagar', 1),
(4, 'Udaipur', 2),
(5, 'Jaipur', 2),
(6, 'Kota', 2);

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `contact`, `subject`, `message`, `date`) VALUES
(1, 'Alkesh', 'kabaalkesh293@gmail.com', 9016647480, 'Testing', 'This is for Testing', '2019-03-15'),
(2, 'HItesh', ' hitesh@gmail.com', 9016395600, 'Testing Purpose', 'This is Description', '2019-03-18'),
(3, 'Rajesh', 'rajesh@gmail.com', 23423534534, 'BE 6th Sem Exam Updates', 'This is for Testing', '2021-03-31'),
(4, 'Akash', 'akash@gmail.com', 1234567890, 'This is for Testing', 'Hello Develoeprs', '2021-04-16'),
(5, 'Rohan', 'rohan@gmail.com', 9016647480, 'This is Rohan', 'Hello Everyone This is Rohan', '2021-04-16'),
(6, 'Testing Image', 'kabaalkesh293@gmail.com', 9016647480, 'aaaa', 'Message', '2021-04-16');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` bigint(10) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `fname`, `lname`, `email`, `contact`, `password`) VALUES
(1, 'Alkesh', 'Kaba', 'admin@gmail.com', 9016647480, '123'),
(2, 'Nidhi', 'Shah', 'n@gmail.com', 123, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `pass`
--

CREATE TABLE `pass` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `duration` int(10) NOT NULL,
  `amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass`
--

INSERT INTO `pass` (`id`, `title`, `duration`, `amount`) VALUES
(3, 'Monthly', 1, '600.00'),
(4, 'Quartely', 3, '1550.00'),
(5, 'Six Month', 6, '3000.00'),
(7, 'Service Pass', 1, '1000.00');

-- --------------------------------------------------------

--
-- Table structure for table `pass_registration`
--

CREATE TABLE `pass_registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `pass_type` int(10) NOT NULL,
  `fees` decimal(10,2) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date NOT NULL,
  `idproof` varchar(255) NOT NULL,
  `addressproof` varchar(255) NOT NULL,
  `userid` int(11) NOT NULL,
  `status` enum('approved','rejected','pending','running') NOT NULL DEFAULT 'pending',
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pass_registration`
--

INSERT INTO `pass_registration` (`id`, `fname`, `lname`, `pass_type`, `fees`, `from_date`, `to_date`, `idproof`, `addressproof`, `userid`, `status`, `remarks`) VALUES
(7, 'Umesh', 'Agrawal', 3, '1550.00', '2020-02-28', '2020-05-28', 'Python.pdf', 'Python.pdf', 4, 'approved', 'Testing'),
(8, 'rinku', 'parmar', 1, '600.00', '2020-03-20', '2020-04-20', 'RE_Python.pdf', 'RE_Python.pdf', 5, 'running', 'completed'),
(15, 'Alkesh', 'Kaba', 1, '600.00', '2022-02-01', '2022-02-28', 'StudentEnrollment (1).pdf', 'StudentEnrollment.pdf', 11, 'running', 'OK'),
(16, 'mayuri', 'mayuri', 1, '600.00', '2022-03-01', '2022-03-31', 'Resume Prince jain (1) (1).pdf', 'Resume Prince jain (1).pdf', 12, 'approved', 'nice');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address1` varchar(255) NOT NULL,
  `address2` varchar(255) NOT NULL,
  `state` varchar(30) NOT NULL,
  `city` varchar(30) NOT NULL,
  `pincode` int(11) NOT NULL,
  `nationality` varchar(100) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `fname`, `lname`, `email`, `contact`, `password`, `address1`, `address2`, `state`, `city`, `pincode`, `nationality`, `gender`, `dob`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Hitesh', 'Kachhela', 'hiteshkachhela@gmail.com', '9016395600', '12345', '', '', '', '', 0, '', '', '0000-00-00', '', '2019-03-15 13:18:33', '2019-03-15 13:18:33'),
(3, 'Praxware', 'Technologies', 'a@yahooo.in', '09016647', '123', '602,Kaivanna Complex Nr. Central Mall,', 'Panchvati, Ahmedabad-380006.', 'Gujarat', 'Ahmedabad', 380006, 'India', 'female', '2019-03-18', '1552881237_7.png', '2019-03-15 13:18:33', '2021-03-31 06:43:28'),
(4, 'Umesh', 'Agrawal', 'umesh@gmail.com', '9725883312', '123', '', '', '', '', 0, '', '', '0000-00-00', '', '2020-02-28 13:37:02', '2020-02-28 13:37:02'),
(5, 'rinku', 'parmar', 'rinkuparmar2097@gmail.com', '9408424199', '123', '', '', '', '', 0, '', 'male', '1970-01-01', '1584347620_IMG-20191005-WA0033.jpg', '2020-03-16 07:04:39', '2020-03-16 08:33:40'),
(11, 'Alkesh', 'Kaba', 'kabaalkesh293@gmail.com', '9016647480', '123', '', '', '', '', 0, '', '', '0000-00-00', '1643193313_d2.jpg', '2022-01-25 07:40:24', '2022-01-26 10:35:13'),
(12, 'mayuri', 'vaghela', 'naineshmayuri2455@gmail.com', '8140551111', '1230', 'T5 maninagar', 'maninagar', 'Gujarat', 'Ahmedabad', 380008, 'indian', 'female', '1970-01-01', '1645096436_img10.jpg', '2022-02-17 11:12:57', '2022-02-17 11:15:13');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `sname`) VALUES
(1, 'Gujarat'),
(2, 'Rajasthan'),
(3, 'Maharastra'),
(4, 'UP');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass`
--
ALTER TABLE `pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pass_registration`
--
ALTER TABLE `pass_registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pass`
--
ALTER TABLE `pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pass_registration`
--
ALTER TABLE `pass_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
