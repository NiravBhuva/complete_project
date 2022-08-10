-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2021 at 09:23 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `Card_id` int(5) NOT NULL,
  `Category` text NOT NULL,
  `Industry` text NOT NULL,
  `Name` text NOT NULL,
  `Image` text NOT NULL,
  `Price` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`Card_id`, `Category`, `Industry`, `Name`, `Image`, `Price`) VALUES
(2, '5', '4', 'Beauty Care', 'weather.jpg', 1302),
(3, '1', '5', 'I.T.', 'it9.jpg', 300),
(4, '2', '3', 'Trip', 'tr3.jpg', 320),
(5, '4', '1', 'Folded', 'fo7.jfif', 300),
(6, '2', '3', 'office', 'slider2.jpg', 200),
(7, '3', '2', 'beauty', 'slider5.jpg', 300),
(8, '1', '2', 'ceaser', 'slider3.jpg', 100),
(9, '2', '2', 'dasdsd', 'slider4.jpg', 100),
(10, '2', '2', 'reader', 'slider1.jpg', 200),
(13, '1', '1', 'office', 'slider6.jpg', 299);

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE `cart_info` (
  `Cart_id` int(5) NOT NULL,
  `Card_id` int(5) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Company` varchar(100) NOT NULL,
  `Logo` text NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Address` text NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price` int(5) NOT NULL,
  `Total` int(5) NOT NULL,
  `NetAmount` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart_info`
--

INSERT INTO `cart_info` (`Cart_id`, `Card_id`, `Name`, `Company`, `Logo`, `Email`, `Contact`, `Address`, `Quantity`, `Price`, `Total`, `NetAmount`) VALUES
(27, 3, 'Yash B', 'Rangoli Pan', '2.jpg', 'sydevelopment1724@gmail.com', 7874465397, 'At- Jetpur', 200, 300, 300, 300),
(28, 6, 'Sanjana Meghani', 'SI Creation', 'a.png', 'sanjanameghani4665@gmail.com', 7874465397, 'rajkot', 233, 200, 200, 200),
(59, 5, 'hbhbhbhb', 'daynamisity', 'tomcat.gif', 'prakash@gmail.com', 55555555, 'kalva chowk', 20, 300, 300, 300);

-- --------------------------------------------------------

--
-- Table structure for table `cat_info`
--

CREATE TABLE `cat_info` (
  `Cat_id` int(5) NOT NULL,
  `Cat_name` varchar(100) NOT NULL,
  `Cat_img` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cat_info`
--

INSERT INTO `cat_info` (`Cat_id`, `Cat_name`, `Cat_img`) VALUES
(1, 'Classic', 'slider1.jpg'),
(2, 'Standard', 'ro6.png'),
(3, 'Glossy', 'gl4.png'),
(4, 'Folded', 'fo5.jfif'),
(5, 'Rounded', 'slider4.jpg'),
(8, 'Glossy', 'tomcat.gif');

-- --------------------------------------------------------

--
-- Table structure for table `feedback_info`
--

CREATE TABLE `feedback_info` (
  `Feedback_id` int(5) NOT NULL,
  `Username` text NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(150) NOT NULL,
  `Subject` text NOT NULL,
  `Feedback_Date` text NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback_info`
--

INSERT INTO `feedback_info` (`Feedback_id`, `Username`, `Contact`, `Email`, `Subject`, `Feedback_Date`, `Message`) VALUES
(10, 'Yash Babariya', 9898802790, 'yashbabariya5068@gmail.com', 'cxvdc', '08-04-2021', 'helllo'),
(12, 'Yash Babariya', 9898, 'yashbabariya5068@gmail.com', 'lll', '08-04-2021', 'ssxxcc'),
(13, 'Yash Babariya', 9898802790, 'yashbabariya5068@gmail.com', 'good', '08-04-2021', 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `industry_info`
--

CREATE TABLE `industry_info` (
  `Industry_id` int(5) NOT NULL,
  `Industry_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `industry_info`
--

INSERT INTO `industry_info` (`Industry_id`, `Industry_name`) VALUES
(1, 'Office/Company'),
(2, 'Beauty Salon'),
(3, 'Travel & Tourism'),
(4, 'Restaurant'),
(5, 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `login_info`
--

CREATE TABLE `login_info` (
  `id` int(5) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_info`
--

INSERT INTO `login_info` (`id`, `Username`, `Password`) VALUES
(1, 'Admin', 'Admin@123');

-- --------------------------------------------------------

--
-- Table structure for table `order_item_detail`
--

CREATE TABLE `order_item_detail` (
  `Oid_id` int(5) NOT NULL,
  `Card_id` int(5) NOT NULL,
  `Order_id` int(5) NOT NULL,
  `Name` text NOT NULL,
  `Company` text NOT NULL,
  `Logo` text NOT NULL,
  `Email` text NOT NULL,
  `Contact` bigint(10) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Price` int(10) NOT NULL,
  `Total` int(10) NOT NULL,
  `Address` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_item_detail`
--

INSERT INTO `order_item_detail` (`Oid_id`, `Card_id`, `Order_id`, `Name`, `Company`, `Logo`, `Email`, `Contact`, `Quantity`, `Price`, `Total`, `Address`) VALUES
(1, 6, 1, 'Yash Butani', 'SI Creation', 'a.png', 'sanjanameghani4665@gmail.com', 2147483647, 100, 200, 20000, ''),
(2, 3, 1, 'Yash Butani', 'Samdhiyala', '2.jpg', 'yashbutani281@gmail.com', 2147483647, 30, 300, 9000, ''),
(3, 6, 2, 'Yash Butani', 'SI Creation', 'a.png', 'sanjanameghani4665@gmail.com', 2147483647, 100, 200, 20000, ''),
(4, 3, 2, 'Yash Butani', 'Samdhiyala', '2.jpg', 'yashbutani281@gmail.com', 2147483647, 30, 300, 9000, ''),
(5, 6, 4, 'Yash Butani', 'SI Creation', 'a.png', 'sanjanameghani4665@gmail.com', 7874465397, 0, 233, 200, '46600'),
(14, 8, 12, 'Yash Butani', 'param software', 'asf-logo.svg', 'y@123', 111111, 0, 120, 100, '12000'),
(33, 6, 24, 'Yash Butani', 'rrrrr', 'Destinyweddingstudio01.jpg', 'aa@gmail.com', 12301230123, 10, 200, 2000, 'tttt'),
(34, 7, 25, 'Yash Butani', 'daynamisity', 'add.gif', 'w@12', 32165497700, 110, 300, 33000, 'u'),
(35, 6, 25, 'Yash Butani', 'daynamisity', 'tomcat.gif', 'aa@123', 32165497700, 20, 200, 4000, 'kalva chowk'),
(36, 3, 26, 'Yash Butani', 'daynamisity', 'tomcat.gif', 'aa@123', 32165497700, 2, 300, 600, 'a'),
(37, 8, 26, 'Yash Butani', 'daynamisity', 'update.gif', 'abc@gmail.com', 32165497700, 2, 100, 200, 'kalva chowk');

-- --------------------------------------------------------

--
-- Table structure for table `order_master`
--

CREATE TABLE `order_master` (
  `Order_id` int(5) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Quantity` int(5) NOT NULL,
  `Oamount` bigint(10) NOT NULL,
  `Order_date` text NOT NULL,
  `Daddress` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `order_master`
--

INSERT INTO `order_master` (`Order_id`, `Username`, `Name`, `Quantity`, `Oamount`, `Order_date`, `Daddress`) VALUES
(1, 'Yash', '', 100, 10000, '11-04-2021', 'hhhh'),
(2, 'Yash', '', 100, 10000, '11-04-2021', 'sss'),
(3, 'Yash', '', 100, 10000, '13-04-2021', 'hhhhsss'),
(9, 'Yash', 'indian', 0, 0, '16-04-2021', ''),
(22, 'Yash', 'iiiii', 10, 0, '18-04-2021', '1111'),
(23, 'Yash', 'iiiii', 10, 0, '18-04-2021', 'qqqq1111'),
(24, 'Yash', 'eeeee', 10, 2000, '18-04-2021', 'ttttt'),
(25, 'Yash', 'pratik shah', 20, 37000, '18-04-2021', 'gujarat'),
(26, 'Yash', 'yash butani', 4, 800, '18-04-2021', 'rahkot');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `User_id` int(5) NOT NULL,
  `Name` varchar(150) NOT NULL,
  `Username` varchar(150) NOT NULL,
  `Password` varchar(150) CHARACTER SET latin1 NOT NULL DEFAULT '',
  `Contact` bigint(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Gender` varchar(150) NOT NULL,
  `DOB` varchar(150) NOT NULL,
  `Address` text NOT NULL,
  `City` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`User_id`, `Name`, `Username`, `Password`, `Contact`, `Email`, `Gender`, `DOB`, `Address`, `City`) VALUES
(1, 'Yash Babaria', 'yash_babaria', 'Yash@123', 9898802790, 'yashbabariya5068@gmail.com', '', '17-5-2003', 'At- Raneshwar plot', 'ranpur'),
(2, 'Sanjana Meghani', 'sanjana_123', 'Sanjna@123', 7874465397, 'sanjanameghani4665@gmail.com', 'female', '24-5-2003', 'At-Rajkot', 'Rajkot'),
(3, 'yash butani', 'yash', 'yash@12345', 32165497700, 'yassh@gmail.com', 'male', '13-9-1965', 'hygyygyg', 'jhugu'),
(4, 'india', 'indian123', 'india', 12301230123, 'india@12345', 'male', '10-12-1965', 'gujarat', 'rajkot');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `card_info`
--
ALTER TABLE `card_info`
  ADD PRIMARY KEY (`Card_id`);

--
-- Indexes for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD PRIMARY KEY (`Cart_id`);

--
-- Indexes for table `cat_info`
--
ALTER TABLE `cat_info`
  ADD PRIMARY KEY (`Cat_id`);

--
-- Indexes for table `feedback_info`
--
ALTER TABLE `feedback_info`
  ADD PRIMARY KEY (`Feedback_id`);

--
-- Indexes for table `industry_info`
--
ALTER TABLE `industry_info`
  ADD PRIMARY KEY (`Industry_id`);

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item_detail`
--
ALTER TABLE `order_item_detail`
  ADD PRIMARY KEY (`Oid_id`);

--
-- Indexes for table `order_master`
--
ALTER TABLE `order_master`
  ADD PRIMARY KEY (`Order_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `card_info`
--
ALTER TABLE `card_info`
  MODIFY `Card_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `cart_info`
--
ALTER TABLE `cart_info`
  MODIFY `Cart_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `cat_info`
--
ALTER TABLE `cat_info`
  MODIFY `Cat_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `feedback_info`
--
ALTER TABLE `feedback_info`
  MODIFY `Feedback_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `industry_info`
--
ALTER TABLE `industry_info`
  MODIFY `Industry_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login_info`
--
ALTER TABLE `login_info`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order_item_detail`
--
ALTER TABLE `order_item_detail`
  MODIFY `Oid_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `order_master`
--
ALTER TABLE `order_master`
  MODIFY `Order_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `User_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
