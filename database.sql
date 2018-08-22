-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 19, 2018 at 04:09 PM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `pizza_hut`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id` int(11) NOT NULL,
  `title` varchar(10) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `mobile` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `province` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `title`, `first_name`, `last_name`, `address`, `mobile`, `city`, `province`, `email`, `password`) VALUES
(1, 'Mr', 'Bathiya', 'Kariya', 'sfdf', '324324', 'Pana', 'West', 'did@gmaf.com', '343'),
(2, 'Mr.', 'Irosha', 'de Silva', '13/1, Holy Cross Avenue', 'df', 'Moratuwa', 'West', 'iroshads@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(4, 'Mr.', 'Bathiya', 'Kariyawasam', '48, Malwatta Road', '3454354', 'Panadura', 'West', 'bathiya@gmail.com', '0b4e7a0e5fe84ad35fb5f95b9ceeac79'),
(5, 'Mr.', 'Sanjeewa', 'Bandara', 'Ragama', '32432432', 'Panadura', 'West', 'sanjeewa@gmail.com', '74b87337454200d4d33f80c4663dc5e5'),
(6, 'Mr.', 'Bagta', 'hnb', 'hbhj', '32432', 'jh', 'West', 'sdcds', '594f803b380a41396ed63dca39503542'),
(7, 'Mr.', 'Nuwan', 'Dhanushka', '148, Malwatta Para', '07743534543', 'Kosagahena', 'South', 'nuwan@gmail.com', 'b59c67bf196a4758191e42f76670ceba'),
(8, 'Mr.', 'Iro', 'dsf', 'sds', '32432', 'm', 'South', 'g@g.com', '6512bd43d9caa6e02c990b0a82652dca');

-- --------------------------------------------------------

--
-- Table structure for table `pizzas`
--

CREATE TABLE `pizzas` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `category` int(11) NOT NULL,
  `s_price` int(11) NOT NULL,
  `m_price` int(11) NOT NULL,
  `l_price` int(11) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pizzas`
--

INSERT INTO `pizzas` (`id`, `name`, `category`, `s_price`, `m_price`, `l_price`, `image`) VALUES
(1, 'Cheese & Tomato', 1, 500, 975, 1450, 'cheese_n_tom.png'),
(2, 'Cheesy Onion', 1, 555, 900, 1500, 'cheesy_onion.png'),
(3, 'Spicy Veggie', 1, 450, 980, 1480, 'spicy_veg.png'),
(4, 'Devilled Chicken', 1, 475, 689, 1680, 'devilled_chicken.png'),
(5, 'Mega Dipper', 3, 2500, 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `pizza_categories`
--

CREATE TABLE `pizza_categories` (
  `id` int(3) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pizza_categories`
--

INSERT INTO `pizza_categories` (`id`, `name`, `status`) VALUES
(1, 'Pan & Other Crusts', 1),
(2, 'Thin Crust', 1),
(3, 'Grand Dipper', 1),
(4, 'Italiano', 1),
(5, 'Pakisthani', 0);

-- --------------------------------------------------------

--
-- Table structure for table `shopping_cart`
--

CREATE TABLE `shopping_cart` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `pizza_id` int(11) NOT NULL,
  `pizza_size` varchar(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `shopping_cart`
--

INSERT INTO `shopping_cart` (`id`, `user_id`, `pizza_id`, `pizza_size`, `quantity`) VALUES
(8, 8, 4, 'm', 5),
(10, 8, 1, 's', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizzas`
--
ALTER TABLE `pizzas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pizza_categories`
--
ALTER TABLE `pizza_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `pizzas`
--
ALTER TABLE `pizzas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pizza_categories`
--
ALTER TABLE `pizza_categories`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `shopping_cart`
--
ALTER TABLE `shopping_cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;