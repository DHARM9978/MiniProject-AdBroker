-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 04:55 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_project_2023`
--

-- --------------------------------------------------------

--
-- Table structure for table `acknowledgement`
--

CREATE TABLE `acknowledgement` (
  `ack_id` int(10) NOT NULL,
  `pub_id` int(10) NOT NULL,
  `cl_id` int(10) NOT NULL,
  `order_id` int(10) NOT NULL,
  `pub_email` varchar(25) NOT NULL,
  `cl_email` varchar(25) NOT NULL,
  `pub_name` varchar(25) NOT NULL,
  `cl_name` varchar(25) NOT NULL,
  `pub_contact` int(10) NOT NULL,
  `cl_contact` int(10) NOT NULL,
  `ack_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `AdminName` varchar(20) NOT NULL,
  `AdminPassword` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`AdminName`, `AdminPassword`) VALUES
('Admin', 'Admin@123?');

-- --------------------------------------------------------

--
-- Table structure for table `ads_order`
--

CREATE TABLE `ads_order` (
  `order_id` varchar(15) NOT NULL,
  `pub_id` varchar(15) NOT NULL,
  `enterprise_name` varchar(25) NOT NULL,
  `cl_id` varchar(15) NOT NULL,
  `pub_email` varchar(25) NOT NULL,
  `cl_name` varchar(25) NOT NULL,
  `cl_email` varchar(25) NOT NULL,
  `order_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `advertize_tbl`
--

CREATE TABLE `advertize_tbl` (
  `ads_id` varchar(15) NOT NULL,
  `ads_category` varchar(25) NOT NULL,
  `pub_id` varchar(15) NOT NULL,
  `enterprise_name` varchar(25) NOT NULL,
  `Ad_for` varchar(20) NOT NULL,
  `price` varchar(10) NOT NULL,
  `ad_section` varchar(5) NOT NULL DEFAULT '12+',
  `ad_image_path` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advertize_tbl`
--

INSERT INTO `advertize_tbl` (`ads_id`, `ads_category`, `pub_id`, `enterprise_name`, `Ad_for`, `price`, `ad_section`, `ad_image_path`) VALUES
('AD202301042', 'Movie', 'PB202302606', 'YK Association', 'Mobile and Web', '2500', '12+', NULL),
('AD202302644', 'Gamig', 'PB202308839', 'sapna', 'Mobile', '3000', '12+', NULL),
('AD202304382', 'Movie', 'PB202308839', 'sapna', 'Mobile and Web', '2500', '12+', NULL),
('AD202305073', 'Movie', 'PB202309052', 'AD Cinema', 'Mobile and Web', '4500', '12+', NULL),
('AD202307752', 'Nusery', 'PB202302606', 'yk Association', 'Web', '2500', '12+', NULL),
('AD202309225', 'Movie', 'PB202305596', 'Lakhani Enterprise', 'Mobile and Web', '4000', '12+', NULL),
('AD202309993', 'Online Learning', 'PB202302606', 'yk Association', 'Mobile and Web', '1500', '12+', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `client_ragister`
--

CREATE TABLE `client_ragister` (
  `cl_id` varchar(13) NOT NULL,
  `cl_name` varchar(25) NOT NULL,
  `cl_lastname` varchar(25) NOT NULL,
  `cl_email` varchar(25) NOT NULL,
  `cl_contact` varchar(10) NOT NULL,
  `cl_password` varchar(50) NOT NULL,
  `last_Sign_In` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_ragister`
--

INSERT INTO `client_ragister` (`cl_id`, `cl_name`, `cl_lastname`, `cl_email`, `cl_contact`, `cl_password`, `last_Sign_In`) VALUES
('CL202301362', 'harshit', 'Kakadiya', 'hasuKakadiya@gmail.com', '8789854615', '61bcb7b91fee99ab2e3031d24fb63781', '2023-09-15 07:43:18'),
('CL202301519', 'yash', 'kakadiya', 'ykakadiya@gmail.com', '9632587410', '25d55ad283aa400af464c76d713c07ad', '2023-10-11 04:44:50'),
('CL202303415', 'Dharm', 'Bhadani', 'dharm@gmail.com', '9632581047', 'ec5e3f62bb5fe3667f856ef3e97438b6', '2023-09-22 02:56:39'),
('CL202303516', '', '', '', '', 'd41d8cd98f00b204e9800998ecf8427e', '2023-10-10 12:38:00'),
('CL202304493', 'jay', 'kakadiya', 'jkakadiya109@gmail.com', '9313442742', '86e9a4e1f7cd28b5aaa18d7bfcf712d5', '2023-09-09 22:14:47'),
('CL202307387', 'vishal', 'kakadiya', 'vishal@gmail.com', '9658740123', 'ff284c34109144e513bd856de69c86a4', '2023-09-22 18:52:28'),
('CL202308720', 'krishna', 'gopani', 'kg12@gmail.com', '7412583690', '41183861632f9aac33a298ba74dec604', '2023-09-09 06:35:06'),
('CL202309073', 'princy', 'kakadiya', 'princy@gmail.com', '9874563220', '22365eb6667b5864bef8e5f619a7555a', '2023-09-12 23:34:11');

-- --------------------------------------------------------

--
-- Table structure for table `id_collection`
--

CREATE TABLE `id_collection` (
  `ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `id_collection`
--

INSERT INTO `id_collection` (`ID`) VALUES
('AD202301042'),
('AD202302903'),
('AD202304382'),
('AD202305073'),
('AD202307752'),
('AD202309993'),
('CL202301362'),
('CL202301519'),
('CL202303415'),
('CL202303516'),
('CL202304493'),
('CL202307387'),
('CL202308720'),
('CL202309073'),
('PB202301204'),
('PB202301232'),
('PB202301845'),
('PB202302193'),
('PB202302604'),
('PB202302606'),
('PB202303179'),
('PB202304938'),
('PB202305596'),
('PB202305641'),
('PB202305672'),
('PB202307559'),
('PB202308839'),
('PB202309052');

-- --------------------------------------------------------

--
-- Table structure for table `publisher_register`
--

CREATE TABLE `publisher_register` (
  `pub_id` varchar(13) NOT NULL,
  `pub_name` varchar(25) NOT NULL,
  `enterprise_name` varchar(25) NOT NULL,
  `pub_email` varchar(25) NOT NULL,
  `pub_contact` varchar(10) NOT NULL,
  `pub_password` varchar(60) NOT NULL,
  `last_Sign_In` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `publisher_register`
--

INSERT INTO `publisher_register` (`pub_id`, `pub_name`, `enterprise_name`, `pub_email`, `pub_contact`, `pub_password`, `last_Sign_In`) VALUES
('PB202301204', 'vidhi', 'vidhi nursery', 'vidhi@gmail.com', '9988550011', '417434084cc1ebc55311e61c6ceeb36c', '2023-10-04 12:10:18'),
('PB20230123', 'krishna', 'kg College', 'kgopani@gmail.com', '9789879887', '$2y$10$DESEhmxYwCMC96jFmywBW.ADWnRKMrXKpyiqjVGDhK0', '2023-08-24 22:47:25'),
('PB202301845', 'Princy', 'Princy Nail Art', 'Pripatel@gmail.com', '9687005538', '5e34ab17a105cc54043820a9a3220b7a', '2023-10-04 12:13:08'),
('PB202302193', 'Ayushi', 'AD Cinema', 'ayushi@gmail.com', '7897894127', 'aaf15ecebeda2ca2de1853d761b02623', '2023-09-22 02:23:54'),
('PB202302606', 'yash', 'YK Association', 'yashkakadiya12@gmail.com', '7894561230', '25d55ad283aa400af464c76d713c07ad', '2023-10-11 04:49:16'),
('PB202303179', 'chirag', 'chirag Entertainment', 'chirag12@gmail.com', '9658743210', 'bf5d509399b6c1c725d2fe47d74a15b7', '2023-09-14 06:07:46'),
('PB202305596', 'Tirth', 'Lakhani Enterprise', 'tirthpatel9737@gmail.com', '9484555802', '4a4b42b62009612a85485afca203e5d6', '2023-10-02 18:51:16'),
('PB202305641', 'jay', 'JK Diamonds', 'jkak@gmail.com', '7979787979', '86e9a4e1f7cd28b5aaa18d7bfcf712d5', '2023-08-29 11:26:44'),
('PB20230567', 'dharm', 'DB Enterprise ', 'dharm@gmail.com', '9978600068', '$2y$10$FuAeI3RfENB9q0LGog8LleDeuk.FwiCkfnnBbEUHBvp', '2023-08-24 22:41:36'),
('PB202307559', 'jay', 'Red chillis Entertainment', 'jkakadiya109@gmail.com', '9313442742', 'a79044da46c681e04732a30c8e939684', '2023-10-04 12:12:02'),
('PB202308839', 'sapna', 'sapna 11', 'sapna@gmail.com', '7895555201', '0a98817d290bf7286681ed6276b49003', '2023-10-02 17:05:07'),
('PB202309052', 'abcd1', 'AD Cinema', 'jkakada109@gmail.com', '9978678068', 'd41d8cd98f00b204e9800998ecf8427e', '2023-10-10 12:42:25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acknowledgement`
--
ALTER TABLE `acknowledgement`
  ADD PRIMARY KEY (`ack_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`AdminName`);

--
-- Indexes for table `ads_order`
--
ALTER TABLE `ads_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `advertize_tbl`
--
ALTER TABLE `advertize_tbl`
  ADD PRIMARY KEY (`ads_id`);

--
-- Indexes for table `client_ragister`
--
ALTER TABLE `client_ragister`
  ADD PRIMARY KEY (`cl_id`),
  ADD UNIQUE KEY `cl_email` (`cl_email`),
  ADD UNIQUE KEY `cl_contact` (`cl_contact`);

--
-- Indexes for table `id_collection`
--
ALTER TABLE `id_collection`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `publisher_register`
--
ALTER TABLE `publisher_register`
  ADD PRIMARY KEY (`pub_id`),
  ADD UNIQUE KEY `pub_email` (`pub_email`),
  ADD UNIQUE KEY `pub_contact` (`pub_contact`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
