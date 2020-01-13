-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 19, 2017 at 06:04 AM
-- Server version: 5.7.15-log
-- PHP Version: 5.6.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ya`
--

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_buy`
--

CREATE TABLE `ro_1_buy` (
  `id` int(11) NOT NULL,
  `userid` int(11) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `customer` int(11) NOT NULL,
  `fileno` varchar(100) NOT NULL,
  `gst` float NOT NULL,
  `discount_percent_check` tinyint(1) NOT NULL DEFAULT '0',
  `discount_amount` float NOT NULL,
  `extra_charges_desc` varchar(100) NOT NULL,
  `extra_charges_amount` float NOT NULL,
  `buy_date` datetime DEFAULT NULL,
  `type` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_buy_products`
--

CREATE TABLE `ro_1_buy_products` (
  `id` int(11) NOT NULL,
  `buy_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `buy_price` float DEFAULT NULL,
  `quantity` float DEFAULT NULL,
  `sub_total` float DEFAULT NULL,
  `buy_date` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_category`
--

CREATE TABLE `ro_1_category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cat_tc_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_city`
--

CREATE TABLE `ro_1_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  `city_ct_id` int(11) NOT NULL,
  `city_userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_customers`
--

CREATE TABLE `ro_1_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_address` varchar(100) NOT NULL,
  `customer_phone` varchar(30) NOT NULL,
  `contact_person` varchar(100) NOT NULL,
  `fileno` varchar(25) NOT NULL,
  `opening_balance` double NOT NULL,
  `current_balance` double NOT NULL,
  `customer_city_id` int(11) NOT NULL,
  `ct_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_customer_balance`
--

CREATE TABLE `ro_1_customer_balance` (
  `cb_id` int(11) NOT NULL,
  `cb_userid` int(11) NOT NULL,
  `cb_customerid` int(11) NOT NULL,
  `cb_balance` bigint(20) NOT NULL,
  `cb_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_customer_type`
--

CREATE TABLE `ro_1_customer_type` (
  `ct_id` int(11) NOT NULL,
  `ct_name` varchar(100) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_edits`
--

CREATE TABLE `ro_1_edits` (
  `id` bigint(20) NOT NULL,
  `edit_id` bigint(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `data` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_expenditure`
--

CREATE TABLE `ro_1_expenditure` (
  `id` int(11) NOT NULL,
  `description` varchar(250) CHARACTER SET latin1 NOT NULL,
  `total` float NOT NULL,
  `expenditure_date` datetime NOT NULL,
  `user_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_expenditures`
--

CREATE TABLE `ro_1_expenditures` (
  `id` int(11) NOT NULL,
  `amount` float NOT NULL,
  `description` varchar(500) NOT NULL,
  `userid` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_product`
--

CREATE TABLE `ro_1_product` (
  `productid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `productname` varchar(250) NOT NULL,
  `productcode` varchar(200) NOT NULL,
  `grit_number` varchar(250) NOT NULL,
  `stock` double NOT NULL,
  `opening_stock` float NOT NULL,
  `unit` varchar(20) NOT NULL,
  `purchase_price` float NOT NULL,
  `comments` varchar(500) NOT NULL,
  `sale_price` float NOT NULL,
  `sequence` int(11) NOT NULL,
  `show_on_web` tinyint(4) NOT NULL,
  `admin_auth_show_on_web` tinyint(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_production`
--

CREATE TABLE `ro_1_production` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `rtno` int(11) NOT NULL,
  `fileno` varchar(10) NOT NULL,
  `total` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_production_products`
--

CREATE TABLE `ro_1_production_products` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `qty` float NOT NULL,
  `production_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_product_raw_formulae`
--

CREATE TABLE `ro_1_product_raw_formulae` (
  `id` int(11) NOT NULL,
  `raw_product_id` int(11) DEFAULT NULL,
  `fg_product_id` int(11) DEFAULT NULL,
  `raw_product_qty` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_product_stock`
--

CREATE TABLE `ro_1_product_stock` (
  `ps_id` int(11) NOT NULL,
  `ps_productid` int(11) NOT NULL,
  `ps_productname` varchar(100) NOT NULL,
  `ps_userid` int(11) NOT NULL,
  `ps_stock` float NOT NULL,
  `ps_date` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_purchase111`
--

CREATE TABLE `ro_1_purchase111` (
  `purchaseid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(250) NOT NULL,
  `catid` int(11) NOT NULL,
  `catname` varchar(100) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `purchase_price` float NOT NULL,
  `quantity` float NOT NULL,
  `dateofpurchase` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_sale`
--

CREATE TABLE `ro_1_sale` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `rtno` int(11) NOT NULL,
  `fileno` varchar(10) NOT NULL,
  `total` float NOT NULL,
  `gst` tinyint(4) NOT NULL DEFAULT '0',
  `extrachargesdesc` varchar(100) NOT NULL,
  `extracharges` float NOT NULL,
  `discount_desc` varchar(255) NOT NULL,
  `discountinpercent` tinyint(4) NOT NULL,
  `discount` float NOT NULL,
  `gTotal` float NOT NULL,
  `status` int(11) NOT NULL,
  `is_gatepass` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_sale_products`
--

CREATE TABLE `ro_1_sale_products` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  `qty` float NOT NULL,
  `sale_id` int(11) NOT NULL,
  `userid` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_sale_return`
--

CREATE TABLE `ro_1_sale_return` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `dt` datetime NOT NULL,
  `returnno` int(11) NOT NULL,
  `rtno` int(11) NOT NULL,
  `fileno` varchar(10) NOT NULL,
  `total` float NOT NULL,
  `gst` tinyint(4) NOT NULL DEFAULT '0',
  `extrachargesdesc` varchar(100) NOT NULL,
  `extracharges` float NOT NULL,
  `discountinpercent` tinyint(4) NOT NULL,
  `discount` float NOT NULL,
  `gTotal` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_sale_return_products`
--

CREATE TABLE `ro_1_sale_return_products` (
  `id` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productname` varchar(100) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `sale_price` float NOT NULL,
  `qty` float NOT NULL,
  `sale_return_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_top_category`
--

CREATE TABLE `ro_1_top_category` (
  `tc_id` int(11) NOT NULL,
  `tc_name` varchar(100) NOT NULL,
  `tc_user_id` int(11) NOT NULL,
  `dt` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ro_1_transactions`
--

CREATE TABLE `ro_1_transactions` (
  `transaction_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `worker_id` int(11) NOT NULL,
  `payment` float NOT NULL,
  `desc` varchar(100) NOT NULL,
  `dt` datetime NOT NULL,
  `sale_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `uid` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `saletax` float NOT NULL,
  `reg_date` datetime NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `_login_token` varchar(200) NOT NULL,
  `membership` tinyint(1) NOT NULL DEFAULT '0',
  `activation_key` varchar(50) NOT NULL,
  `production` tinyint(4) NOT NULL DEFAULT '0',
  `p_and_l` tinyint(4) NOT NULL DEFAULT '0',
  `exp_date` datetime NOT NULL,
  `print_header` text NOT NULL,
  `footer` text NOT NULL,
  `lang` tinyint(4) NOT NULL,
  `product_label1` varchar(50) NOT NULL,
  `product_label2` varchar(50) NOT NULL,
  `product_label3` varchar(50) NOT NULL,
  `customer_label1` varchar(50) NOT NULL,
  `customer_label2` varchar(50) NOT NULL,
  `customer_label3` varchar(50) NOT NULL,
  `licence` varchar(250) NOT NULL,
  `user_of` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ro_1_buy`
--
ALTER TABLE `ro_1_buy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_buy_products`
--
ALTER TABLE `ro_1_buy_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_category`
--
ALTER TABLE `ro_1_category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `ro_1_city`
--
ALTER TABLE `ro_1_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `ro_1_customers`
--
ALTER TABLE `ro_1_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `ro_1_customer_balance`
--
ALTER TABLE `ro_1_customer_balance`
  ADD PRIMARY KEY (`cb_id`);

--
-- Indexes for table `ro_1_customer_type`
--
ALTER TABLE `ro_1_customer_type`
  ADD PRIMARY KEY (`ct_id`);

--
-- Indexes for table `ro_1_edits`
--
ALTER TABLE `ro_1_edits`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_expenditure`
--
ALTER TABLE `ro_1_expenditure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_expenditures`
--
ALTER TABLE `ro_1_expenditures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_product`
--
ALTER TABLE `ro_1_product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `ro_1_production`
--
ALTER TABLE `ro_1_production`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_production_products`
--
ALTER TABLE `ro_1_production_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_product_raw_formulae`
--
ALTER TABLE `ro_1_product_raw_formulae`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_product_stock`
--
ALTER TABLE `ro_1_product_stock`
  ADD PRIMARY KEY (`ps_id`);

--
-- Indexes for table `ro_1_purchase111`
--
ALTER TABLE `ro_1_purchase111`
  ADD PRIMARY KEY (`purchaseid`);

--
-- Indexes for table `ro_1_sale`
--
ALTER TABLE `ro_1_sale`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_sale_products`
--
ALTER TABLE `ro_1_sale_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_sale_return`
--
ALTER TABLE `ro_1_sale_return`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_sale_return_products`
--
ALTER TABLE `ro_1_sale_return_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ro_1_top_category`
--
ALTER TABLE `ro_1_top_category`
  ADD PRIMARY KEY (`tc_id`);

--
-- Indexes for table `ro_1_transactions`
--
ALTER TABLE `ro_1_transactions`
  ADD PRIMARY KEY (`transaction_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ro_1_buy`
--
ALTER TABLE `ro_1_buy`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `ro_1_buy_products`
--
ALTER TABLE `ro_1_buy_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `ro_1_category`
--
ALTER TABLE `ro_1_category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=162;
--
-- AUTO_INCREMENT for table `ro_1_city`
--
ALTER TABLE `ro_1_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `ro_1_customers`
--
ALTER TABLE `ro_1_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
--
-- AUTO_INCREMENT for table `ro_1_customer_balance`
--
ALTER TABLE `ro_1_customer_balance`
  MODIFY `cb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1825;
--
-- AUTO_INCREMENT for table `ro_1_customer_type`
--
ALTER TABLE `ro_1_customer_type`
  MODIFY `ct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ro_1_edits`
--
ALTER TABLE `ro_1_edits`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_expenditure`
--
ALTER TABLE `ro_1_expenditure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_expenditures`
--
ALTER TABLE `ro_1_expenditures`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=656;
--
-- AUTO_INCREMENT for table `ro_1_product`
--
ALTER TABLE `ro_1_product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=280;
--
-- AUTO_INCREMENT for table `ro_1_production`
--
ALTER TABLE `ro_1_production`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_production_products`
--
ALTER TABLE `ro_1_production_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_product_raw_formulae`
--
ALTER TABLE `ro_1_product_raw_formulae`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_product_stock`
--
ALTER TABLE `ro_1_product_stock`
  MODIFY `ps_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10887;
--
-- AUTO_INCREMENT for table `ro_1_purchase111`
--
ALTER TABLE `ro_1_purchase111`
  MODIFY `purchaseid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=735;
--
-- AUTO_INCREMENT for table `ro_1_sale`
--
ALTER TABLE `ro_1_sale`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=885;
--
-- AUTO_INCREMENT for table `ro_1_sale_products`
--
ALTER TABLE `ro_1_sale_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10185;
--
-- AUTO_INCREMENT for table `ro_1_sale_return`
--
ALTER TABLE `ro_1_sale_return`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_sale_return_products`
--
ALTER TABLE `ro_1_sale_return_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ro_1_top_category`
--
ALTER TABLE `ro_1_top_category`
  MODIFY `tc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ro_1_transactions`
--
ALTER TABLE `ro_1_transactions`
  MODIFY `transaction_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=856;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
