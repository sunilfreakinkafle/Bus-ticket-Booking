-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 14, 2017 at 07:38 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `book`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bus`
--

CREATE TABLE `bus` (
  `id` int(11) NOT NULL,
  `bus_no` int(11) NOT NULL,
  `type` varchar(112) NOT NULL,
  `seat_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bus`
--

INSERT INTO `bus` (`id`, `bus_no`, `type`, `seat_no`) VALUES
(1, 132, 'Super Deluxe', 30),
(2, 2132, 'Deluxe', 30);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `bus_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `name`, `post`, `address`, `phone`, `bus_id`) VALUES
(6, 'sdf', 'asdf', 'sdfg', 132, 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `name` varchar(50) NOT NULL COMMENT 'name',
  `email` varchar(50) NOT NULL COMMENT 'email',
  `password` varchar(50) NOT NULL COMMENT 'password',
  `address` varchar(500) NOT NULL COMMENT 'address',
  `contact` varchar(50) NOT NULL COMMENT 'contact',
  `message` varchar(500) NOT NULL COMMENT 'Message'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`userid`, `name`, `email`, `password`, `address`, `contact`, `message`) VALUES
('adhbs', 'askjdb', 'xcbhas@gmn.com', 'adgasd', 'hadvdsh', '2163712637', 'hasdv'),
('adss', 'sadasd', 'cfc@gmail.com', 'cha1234', 'asdasd', '1312312312', 'asdsad'),
('asasd', 'sadsad', 'cfc@gmail.com', 'cha1234', 'asdas', 'dasdasdasd', 'shfhdvd'),
('asd', 'sda', 'cfc@gmail.com', 'as', 'sdasd', '1231231212', 'asdvas'),
('asda', 'asds', 'cfc@gmail.com', 'cha1234', 'asdas', 'asdasdasda', 'dasd'),
('asdas', 'sasd', 'asdas@kgmail.com', 'asdbashd', 'asdasdsad', 'asdasdasda', 'asdhbasdhv'),
('asdasd', 'asdasd', 'asdasdas@gmail.com', 'asdasdas', 'dasdasd', 'asdassdasd', 'asdasdas'),
('asdasdas', 'asdsadasd', 'asdasdasdas@sdasd.com', 'asjdbashdb', 'sadasdas', 'asdasdasda', 'bhasbdhasbd'),
('asdasdasdasd', 'dasdas', 'asdasdasd@gmailc.omc', 'dasdsa', 'asdasdsad', 'asdasdasas', 'asdasd'),
('asdasdasdasdasdsda', 'sdasd', 'cfc@gmail.com', 'cha1234asdasd', 'asdas', '1232131231', 'adasd'),
('asdf', 'sdcasxa', 'cfc@fa.cm', '123456', 'asxaxas', '9813999353', 'asxac vasxas asdx aasd as adsdas '),
('asdsad', 'asdsdas', 'cfc@gmail.com', 'cha1234', 'asdasdasd', 'sadasdasda', 'asdsdb'),
('asdsdasdasd', 'asdsad', 'asdasdasdasd@gmail.com', 'asdasdasdasd', 'dasdasd', 'asdasdasda', 'asdasdasd'),
('charmin', 'charmin', 'charmin@gamil.com', '123', 'chabahil', '2312321312', 'hello'),
('chas', 'dasd', 'cfcsadsad@gmail.com', 'cha1234asd', 'asdasd', '1112321312', 'sadsdas'),
('dabsd', 'sadkbash', 'ashdvash@gmail.co', 'asdhabsdh', 'ahdb', '1232131231', 'asdjbhb'),
('dasd', 'asdsad', 'cfc@gmail.com', 'cha1234', 'asdsad', '1232131231', 'asd'),
('dshadhasvd', 'sadasd', 'adsasdas@asdjbsd.com', 'sadasd', 'sadasdas', 'asdsada123', 'daasdasd'),
('eqweqwe', 'asdsad', 'asdsa@gmial.com', 'asdasd', 'asdasd', '2312321312', 'asdsad'),
('fgdfgdf', 'asdasd', 'cfc@gmail.com', 'cha1234', 'asdasd', 'cxvcx12321', 'asd'),
('jabsdavs', 'n nn', 'cfc@gmail.com', 'vcvgc', 'vnbnb', '2312312312', 'hhvhvh'),
('jasbd', 'charmin', 'asd@gmasdjb.com', 'sagdc', 'ashsbd', '1231231231', 'adhav'),
('jbahdh', 'asdkjbjhb', 'djasdbhav@gmail.com', 'hsdbhasdsadvasdv@', 'basjdb', 'hbasdhvahv', 'jadavs'),
('ncvzxhbvcbzxv', 'kasjbdas', 'sjfhdsh@gmail.com', 'kahsfvhasv', 'bahdahsvd', '1371263762', 'dahfvsdf'),
('rfsd', 'dsfdsf', 'cfcfsdfds@gmail.com', 'asdasd', 'sdfsdf', 'sd32423423', 'sadasda'),
('sad', 'asdsa', 'asd@gmail.com', 'asd', 'sdas', 'asdasdasda', 'sbahdv'),
('sadasd', 'asdsad', 'asdasddsa@gmaiclc.ocm', 'asdasd', 'sadasd', 'asdsad@gmi', 'asdsad'),
('sadasdasdasdasdsadsadasdasdsad', 'asdas', 'cfc@gmail.com', 'cha1234', 'asdasd', 'asdasdasda', 'dasdasdasd'),
('sadasdsadasdasddasd', 'sadsad', 'cfcsadsad@gmail.com', 'cha1234sd', 'dasd', 'asdasdasda', 'sadsad'),
('sadhgas', 'charmin', 'charmin@hmail.com', 'HASVDHSV', 'asdj', '9123271123', 'basjdb'),
('sadsad', 'hvhv', 'asdasd@gmal.com', 'asdhasdv', 'asdasd', 'sdasd12321', 'bashdhasd\r\n'),
('sahdvas', 'sdkasjdn', 'cfc@gmail.com', 'asjdbh', 'basjdbas', '1272361253', 'sahdvg'),
('sdasdhas', 'asdas', 'sadhasvd2@asda.com', 'absdhsd', 'dasdasd', '1231231233', 'hadhsvdas\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `route`
--

CREATE TABLE `route` (
  `id` int(11) NOT NULL,
  `route` varchar(112) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `route`
--

INSERT INTO `route` (`id`, `route`) VALUES
(1, 'Pokhara-Kathmandu'),
(2, 'Kathmandu-Pokhara');

-- --------------------------------------------------------

--
-- Table structure for table `runs`
--

CREATE TABLE `runs` (
  `bus_id` int(11) NOT NULL,
  `route_id` int(11) NOT NULL,
  `price` bigint(20) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `runs`
--

INSERT INTO `runs` (`bus_id`, `route_id`, `price`, `time`) VALUES
(1, 1, 100, '10:30 am'),
(1, 2, 200, '12:00 pm');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `userid` varchar(50) NOT NULL COMMENT 'userid',
  `number` int(10) NOT NULL COMMENT 'seat number',
  `PNR` varchar(13) NOT NULL COMMENT 'PNR',
  `date` date NOT NULL COMMENT 'date of booking'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`userid`, `number`, `PNR`, `date`) VALUES
('AbhijeetMuneshwar', 2, '2013-05-21-2', '2013-05-21'),
('Mohit', 5, '2013-05-21-5', '2013-05-21'),
('sadhsad', 1, '2017-06-27-1', '2017-06-27'),
('sadhsad', 3, '2017-06-27-3', '2017-06-27'),
('qqsdasddasd', 8, '2017-06-30-8', '2017-06-30'),
('qqsdasddasd', 9, '2017-06-30-9', '2017-06-30'),
('qqsdasddasd', 11, '2017-06-30-11', '2017-06-30'),
('qqsdasddasd', 14, '2017-06-30-14', '2017-06-30'),
('qqsdasddasd', 17, '2017-06-30-17', '2017-06-30'),
('qqsdasddasd', 26, '2017-06-30-26', '2017-06-30'),
('qqsdasddasd', 27, '2017-06-30-27', '2017-06-30'),
('admin', 1, 'readonly-1', '0000-00-00'),
('admin', 2, 'readonly-2', '0000-00-00'),
('admin', 3, 'readonly-3', '0000-00-00'),
('bhasdvags', 1, 'readonly-1', '0000-00-00'),
('bhasdvags', 4, 'readonly-4', '0000-00-00'),
('jasdbhsb', 24, 'readonly-24', '0000-00-00'),
('eded', 1, '2017-06-13-1', '2017-06-13'),
('eded', 2, '2017-06-13-2', '2017-06-13'),
('eded', 3, '2017-06-13-3', '2017-06-13'),
('charmin', 2, '2017-06-21-2', '2017-06-21'),
('charmin', 3, '2017-06-21-3', '2017-06-21'),
('sdasdhas', 13, '2017-06-28-13', '2017-06-28'),
('sdasdhas', 14, '2017-06-28-14', '2017-06-28'),
('sdasdhas', 15, '2017-06-28-15', '2017-06-28'),
('sdasdhas', 16, '2017-06-28-16', '2017-06-28'),
('asdasdas', 14, '2017-06-21-14', '2017-06-21'),
('asdasdas', 15, '2017-06-21-15', '2017-06-21'),
('asdasdas', 16, '2017-06-21-16', '2017-06-21'),
('asdasd', 2, '2017-06-12-2', '2017-06-12'),
('asdasd', 3, '2017-06-12-3', '2017-06-12'),
('asdasdasdasd', 11, '2017-06-12-11', '2017-06-12'),
('asdasdasdasd', 13, '2017-06-12-13', '2017-06-12'),
('asdas', 14, '2017-06-12-14', '2017-06-12'),
('asdas', 15, '2017-06-12-15', '2017-06-12'),
('sadasd', 14, '2017-06-20-14', '2017-06-20'),
('sadasd', 15, '2017-06-20-15', '2017-06-20'),
('eqweqwe', 24, '2017-06-21-24', '2017-06-21'),
('eqweqwe', 25, '2017-06-21-25', '2017-06-21'),
('asdsdasdasd', 25, '2017-06-15-25', '2017-06-15'),
('asdsdasdasd', 26, '2017-06-15-26', '2017-06-15'),
('sadsad', 25, '2017-06-20-25', '2017-06-20'),
('sadsad', 26, '2017-06-20-26', '2017-06-20'),
('ncvzxhbvcbzxv', 4, '2017-06-21-4', '2017-06-21'),
('ncvzxhbvcbzxv', 5, '2017-06-21-5', '2017-06-21'),
('ncvzxhbvcbzxv', 6, '2017-06-21-6', '2017-06-21'),
('jbahdh', 7, '2017-06-21-7', '2017-06-21'),
('jbahdh', 17, '2017-06-21-17', '2017-06-21'),
('asdf', 1, '2017-06-20-1', '2017-06-20'),
('asdf', 3, '2017-06-20-3', '2017-06-20'),
('asdf', 13, '2017-06-20-13', '2017-06-20'),
('adasdas', 14, '2017-06-19-14', '2017-06-19'),
('adasdas', 15, '2017-06-19-15', '2017-06-19'),
('sahdvas', 1, '2017-06-11-1', '2017-06-11'),
('sahdvas', 3, '2017-06-11-3', '2017-06-11'),
('jabsdavs', 12, '2017-06-21-12', '2017-06-21'),
('jabsdavs', 13, '2017-06-21-13', '2017-06-21'),
('jabsdavs', 23, '2017-06-21-23', '2017-06-21'),
('rfsd', 1, '2017-06-12-1', '2017-06-12'),
('rfsd', 4, '2017-06-12-4', '2017-06-12'),
('adss', 2, '2017-06-19-2', '2017-06-19'),
('dasd', 23, '2017-06-12-23', '2017-06-12'),
('dasd', 24, '2017-06-12-24', '2017-06-12'),
('fgdfgdf', 12, '2017-06-12-12', '2017-06-12'),
('fgdfgdf', 16, '2017-06-12-16', '2017-06-12'),
('asd', 17, '2017-06-20-17', '2017-06-20'),
('asd', 18, '2017-06-20-18', '2017-06-20'),
('jasbd', 23, '2017-06-19-23', '2017-06-19'),
('jasbd', 24, '2017-06-19-24', '2017-06-19'),
('asasd', 16, '2017-06-19-16', '2017-06-19'),
('asasd', 17, '2017-06-19-17', '2017-06-19'),
('asdasdasdasdasdsda', 13, '2017-06-19-13', '2017-06-19'),
('asdasdasdasdasdsda', 18, '2017-06-19-18', '2017-06-19'),
('sadasdasdasdasdsadsadasdasdsad', 25, '2017-06-12-25', '2017-06-12'),
('sadasdasdasdasdsadsadasdasdsad', 26, '2017-06-12-26', '2017-06-12'),
('asdsad', 13, '2017-06-11-13', '2017-06-11'),
('asdsad', 14, '2017-06-11-14', '2017-06-11'),
('sad', 27, '2017-06-12-27', '2017-06-12'),
('sad', 28, '2017-06-12-28', '2017-06-12'),
('dabsd', 26, '2017-06-21-26', '2017-06-21'),
('dabsd', 27, '2017-06-21-27', '2017-06-21'),
('adhbs', 13, '2017-06-23-13', '2017-06-23'),
('adhbs', 14, '2017-06-23-14', '2017-06-23'),
('sadhgas', 5, '2016-06-13-5', '2016-06-13'),
('sadhgas', 6, '2016-06-13-6', '2016-06-13'),
('chas', 5, '2017-06-14-5', '2017-06-14'),
('chas', 15, '2017-06-14-15', '2017-06-14');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `transactionno` varchar(255) NOT NULL,
  `cus_id` varchar(255) NOT NULL,
  `amount` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`id`, `transactionno`, `cus_id`, `amount`) VALUES
(1, 'sjdrk72f', 'fgdfgdf', 0),
(2, '4btrggar', 'asda', 0),
(3, '22j6rt4x', 'asd', 0),
(4, 'vhaj7kkn', 'sadasdsadasdasddasd', 0),
(5, 'zs84xnio', 'jasbd', 0),
(6, 'wqayjj4r', 'asasd', 0),
(7, 'bmj3w5su', 'asdasdasdasdasdsda', 0),
(8, 'j7devizv', 'sadasdasdasdasdsadsadasdasdsad', 0),
(9, 'oedr3rrt', 'asdsad', 0),
(10, 's42sz3bq', 'sad', 0),
(11, 'jiiuzuos', 'dabsd', 0),
(12, '3cysysgn', 'adhbs', 0),
(13, '2ezytaey', 'sadhgas', 0),
(14, 'iiftxoze', 'chas', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `bus`
--
ALTER TABLE `bus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `bus_no` (`bus_no`),
  ADD KEY `id` (`id`),
  ADD KEY `bus_no_2` (`bus_no`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_id` (`bus_id`),
  ADD KEY `bus_id_2` (`bus_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`userid`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `route`
--
ALTER TABLE `route`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `runs`
--
ALTER TABLE `runs`
  ADD PRIMARY KEY (`bus_id`,`route_id`),
  ADD KEY `route_id` (`route_id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cus_id` (`cus_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bus`
--
ALTER TABLE `bus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `route`
--
ALTER TABLE `route`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`);

--
-- Constraints for table `runs`
--
ALTER TABLE `runs`
  ADD CONSTRAINT `runs_ibfk_1` FOREIGN KEY (`route_id`) REFERENCES `route` (`id`),
  ADD CONSTRAINT `runs_ibfk_2` FOREIGN KEY (`bus_id`) REFERENCES `bus` (`id`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `ticket_ibfk_1` FOREIGN KEY (`cus_id`) REFERENCES `register` (`userid`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
