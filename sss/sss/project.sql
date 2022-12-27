-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2022 at 04:06 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `email`, `mobile`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'prajapatiakshay1803@gmail.com', '9328533748', 'akshay', '3fab5890d8113d0b5a4178201dc842ad', '2022-11-26 10:17:22', '2022-12-02 15:05:18');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brand`
--

CREATE TABLE `tbl_brand` (
  `brand_id` int(11) NOT NULL,
  `b_name` varchar(100) NOT NULL,
  `b_icon` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brand`
--

INSERT INTO `tbl_brand` (`brand_id`, `b_name`, `b_icon`, `updated_at`, `created_at`) VALUES
(6, 'MuscleBlaze', '16699903276975.png', '2022-12-02 14:12:07', '2022-12-02 14:12:07'),
(8, 'Nutrabay', '16699903713135.png', '2022-12-02 14:12:51', '2022-12-02 14:12:51'),
(9, 'MyProtein', '16699903889242.png', '2022-12-02 14:13:08', '2022-12-02 14:13:08'),
(10, 'Optimum Nutrition', '16699906731935.png', '2022-12-02 14:17:53', '2022-12-02 14:17:53');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cart`
--

CREATE TABLE `tbl_cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `var_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `state_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `state_id`, `c_name`, `updated_at`, `created_at`) VALUES
(7, 4, 'Surat', '2022-12-02 14:50:57', '2022-12-02 14:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `con_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobile` int(10) NOT NULL,
  `message` varchar(255) NOT NULL,
  `con_dt` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `feed_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `messege` varchar(100) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT current_timestamp(),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maincat`
--

CREATE TABLE `tbl_maincat` (
  `maincat_id` int(11) NOT NULL,
  `cat_name` varchar(50) NOT NULL,
  `cat_img` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_maincat`
--

INSERT INTO `tbl_maincat` (`maincat_id`, `cat_name`, `cat_img`, `updated_at`, `created_at`) VALUES
(19, 'Proteins', '16699856806741.jpg', '2022-12-02 12:54:40', '2022-12-02 12:52:04'),
(20, 'Gainers', '16699857668487.png', '2022-12-02 12:56:06', '2022-12-02 12:56:06'),
(21, 'Proteins Foods', '16699858064631.png', '2022-12-02 12:56:46', '2022-12-02 12:56:46');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order`
--

CREATE TABLE `tbl_order` (
  `ord_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `tot_pay` int(11) NOT NULL,
  `ord_statues` varchar(50) NOT NULL,
  `ispay` varchar(50) NOT NULL,
  `paymode` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `pincode` int(11) NOT NULL,
  `ord_dt` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order`
--

INSERT INTO `tbl_order` (`ord_id`, `user_id`, `tot_pay`, `ord_statues`, `ispay`, `paymode`, `address`, `landmark`, `pincode`, `ord_dt`, `updated_at`, `created_at`) VALUES
(2, 2, 2000, 'pending', 'yes', 'COD', 'A15,Amroli char-rasta', 'Amroli', 395004, '2022-12-02 15:51:20', '2022-12-02 15:03:28', '2022-12-02 15:51:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_order_item`
--

CREATE TABLE `tbl_order_item` (
  `item_id` int(11) NOT NULL,
  `ord_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `var_id` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_order_item`
--

INSERT INTO `tbl_order_item` (`item_id`, `ord_id`, `pro_id`, `var_id`, `qty`) VALUES
(1, 2, 9, 19, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `pro_id` int(11) NOT NULL,
  `subcat_id` int(11) NOT NULL,
  `p_name` varchar(150) NOT NULL,
  `p_desc` varchar(255) NOT NULL,
  `p_image` varchar(200) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `p_speci` varchar(255) NOT NULL,
  `isactive` varchar(20) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_product`
--

INSERT INTO `tbl_product` (`pro_id`, `subcat_id`, `p_name`, `p_desc`, `p_image`, `brand_id`, `p_speci`, `isactive`, `updated_at`, `created_at`) VALUES
(9, 14, 'ON (Optimum Nutrition) Gold', 'Test', '16699907416268.png', 6, '', 'Active', '2022-12-02 14:19:01', '2022-12-02 14:19:01'),
(10, 14, 'MuscleBlaze Biozyme Whey', 'Test', '16699907836949.png', 6, '', 'Active', '2022-12-02 14:19:43', '2022-12-02 14:19:43'),
(11, 14, 'Dymatize Elite 100% Whey', 'Test', '16699908354951.png', 6, '', 'Active', '2022-12-02 14:20:35', '2022-12-02 14:20:35'),
(12, 15, 'Myprotein Micellar Casein', 'Test', '16699908934041.png', 8, '', 'Active', '2022-12-02 14:21:33', '2022-12-02 14:21:33'),
(13, 15, 'Nutrabay Pure Micellar Casein Protein', 'Test', '16699909224313.png', 8, '', 'Active', '2022-12-02 14:22:02', '2022-12-02 14:22:02'),
(14, 15, 'MuscleBlaze 100% Micellar Casein', 'Test', '16699909556577.png', 10, '', 'Active', '2022-12-02 14:22:35', '2022-12-02 14:22:35'),
(15, 16, 'MB Fuel One Weight Gainer', 'Test', '16699910282623.png', 10, '', 'Active', '2022-12-02 14:23:48', '2022-12-02 14:23:48'),
(16, 16, 'MuscleBlaze Weight Gainer', 'Test', '16699910801984.png', 8, '', 'Active', '2022-12-02 14:24:40', '2022-12-02 14:24:40'),
(17, 16, 'GNC Pro Performance Weight Gainer', 'Test', '16699911017065.png', 9, '', 'Active', '2022-12-02 14:25:01', '2022-12-02 14:25:01'),
(18, 17, 'MuscleBlaze High Protein Peanut Butter', 'Test', '16699911376163.png', 10, '', 'Active', '2022-12-02 14:25:38', '2022-12-02 14:25:38'),
(19, 17, 'Myfitness Chocolate Peanut Butter', 'Test', '16699911626238.png', 9, '', 'Active', '2022-12-02 14:26:02', '2022-12-02 14:26:02'),
(20, 17, 'Alpino Peanut Butter', 'Test', '16699912421399.jpg', 8, '', 'Active', '2022-12-02 14:27:22', '2022-12-02 14:27:22');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_promo`
--

CREATE TABLE `tbl_promo` (
  `promo_id` int(11) NOT NULL,
  `p_code` varchar(50) NOT NULL,
  `p_desc` varchar(100) NOT NULL,
  `p_discount` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

CREATE TABLE `tbl_state` (
  `state_id` int(11) NOT NULL,
  `s_name` varchar(200) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`state_id`, `s_name`, `updated_at`, `created_at`) VALUES
(4, 'Gujarat', '2022-12-02 14:50:39', '2022-12-02 14:50:39'),
(5, 'Rajasthan', '2022-12-02 14:50:45', '2022-12-02 14:50:45');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_subcat`
--

CREATE TABLE `tbl_subcat` (
  `subcat_id` int(11) NOT NULL,
  `maincat_id` int(11) NOT NULL COMMENT 'maincat id',
  `subcat_name` varchar(50) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_subcat`
--

INSERT INTO `tbl_subcat` (`subcat_id`, `maincat_id`, `subcat_name`, `updated_at`, `created_at`) VALUES
(14, 19, 'Whey Protein', '2022-12-02 13:07:01', '2022-12-02 13:07:01'),
(15, 19, 'Casein Protein', '2022-12-02 13:07:14', '2022-12-02 13:07:14'),
(16, 20, 'Weight Gainer', '2022-12-02 13:12:06', '2022-12-02 13:12:06'),
(17, 21, 'Peanut Butter', '2022-12-02 13:12:27', '2022-12-02 13:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL COMMENT 'username',
  `mobile` varchar(12) NOT NULL COMMENT 'one time mobile no',
  `email` varchar(100) NOT NULL COMMENT 'one time email id',
  `photo` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(200) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `pincode` int(6) NOT NULL,
  `reg_dt` datetime NOT NULL COMMENT 'registration date and time',
  `updated_at` int(11) NOT NULL,
  `created_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `name`, `mobile`, `email`, `photo`, `password`, `gender`, `address`, `landmark`, `pincode`, `reg_dt`, `updated_at`, `created_at`) VALUES
(2, 'Prajapati Akshay', '932853374', 'prajapatiakshay1803@gmail.com', '', '1803', 'Male', 'katargam', 'gajera circle', 395004, '2022-12-02 15:37:36', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_variation`
--

CREATE TABLE `tbl_variation` (
  `var_id` int(11) NOT NULL,
  `pro_id` int(11) NOT NULL,
  `flavor` varchar(50) NOT NULL,
  `gram` int(10) NOT NULL,
  `mrp` int(11) NOT NULL,
  `s_price` int(11) NOT NULL COMMENT 'selling price',
  `pro_img` varchar(255) NOT NULL,
  `tot_qty` int(11) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_variation`
--

INSERT INTO `tbl_variation` (`var_id`, `pro_id`, `flavor`, `gram`, `mrp`, `s_price`, `pro_img`, `tot_qty`, `updated_at`, `created_at`) VALUES
(19, 9, 'Dark chocolate', 1, 2600, 2500, '', 10, '2022-12-02 14:42:58', '2022-12-02 14:42:58'),
(20, 10, 'Unflavored', 2, 3200, 3000, '', 15, '2022-12-02 14:46:06', '2022-12-02 14:46:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`feed_id`);

--
-- Indexes for table `tbl_maincat`
--
ALTER TABLE `tbl_maincat`
  ADD PRIMARY KEY (`maincat_id`);

--
-- Indexes for table `tbl_order`
--
ALTER TABLE `tbl_order`
  ADD PRIMARY KEY (`ord_id`);

--
-- Indexes for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `tbl_state`
--
ALTER TABLE `tbl_state`
  ADD PRIMARY KEY (`state_id`);

--
-- Indexes for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  ADD PRIMARY KEY (`subcat_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `tbl_variation`
--
ALTER TABLE `tbl_variation`
  ADD PRIMARY KEY (`var_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_brand`
--
ALTER TABLE `tbl_brand`
  MODIFY `brand_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_cart`
--
ALTER TABLE `tbl_cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `feed_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_maincat`
--
ALTER TABLE `tbl_maincat`
  MODIFY `maincat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_order`
--
ALTER TABLE `tbl_order`
  MODIFY `ord_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_order_item`
--
ALTER TABLE `tbl_order_item`
  MODIFY `item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_promo`
--
ALTER TABLE `tbl_promo`
  MODIFY `promo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_state`
--
ALTER TABLE `tbl_state`
  MODIFY `state_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_subcat`
--
ALTER TABLE `tbl_subcat`
  MODIFY `subcat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_variation`
--
ALTER TABLE `tbl_variation`
  MODIFY `var_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
