-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 17, 2015 at 01:00 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `it`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(100) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `firstname`, `lastname`, `username`, `password`, `contact`, `date_added`, `profile_pic`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', '0934209139', '2015-02-11 23:21:30', 'upload/10511146_722140757852716_8123199210662056035_n.jpg'),
(2, 'Rolyn', 'Demerin', 'rolyn', 'rolyn', '09989781348', '2015-02-11 23:21:47', 'upload/382349_2169541884793_522336655_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedback_id` int(100) NOT NULL AUTO_INCREMENT,
  `feedback_firstname` longtext NOT NULL,
  `feedback_lastname` longtext NOT NULL,
  `feedback_email` mediumtext NOT NULL,
  `feedback_number` mediumtext NOT NULL,
  `feedback_message` mediumtext NOT NULL,
  `date_published` mediumtext NOT NULL,
  PRIMARY KEY (`feedback_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_firstname`, `feedback_lastname`, `feedback_email`, `feedback_number`, `feedback_message`, `date_published`) VALUES
(1, 'Rolyn Jasper', 'Demerin', 'rolyn02@gmail.com', '09989781348', 'nice job guys. work well done! :D', '2015-02-17 00:07:46');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `product_quantity_sold` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brand`, `product_description`, `product_price`, `supplier`, `product_quantity`, `product_quantity_sold`, `date_added`, `location`) VALUES
(1, 'Duos', 'Samsung', 'See your movies and games pop with vivid colors, dark shadows and stunning contrast on the 10.5 inch screen.', '9876', 'Samsung', '', '', '2015-02-08 23:23:00', 'upload/haha.jpg'),
(2, 'One Touch', 'Alcatel', 'See your movies and games pop with vivid colors, dark shadows and stunning contrast on the 10.5 inch screen.', '3343', 'Alcatel', '', '', '2015-02-08 23:51:33', 'upload/10550830_867550916607195_7235409782643563062_n.jpg'),
(3, 'Lumia', 'Nokia', 'See your movies and games pop with vivid colors, dark shadows and stunning contrast on the 10.5 inch screen.', '9887', 'Nokia', '', '', '2015-02-13 21:02:43', 'upload/10487383_791848440860150_3025885503569114180_n.jpg'),
(4, 'X1', 'Cherry Mobile', 'See your movies and games pop with vivid colors, dark shadows and stunning contrast on the 10.5 inch screen.', '3429', 'Cherry Mobile', '', '', '2015-02-13 21:17:15', 'upload/10409409_812993662052447_8357350814467004075_n.jpg'),
(5, 'Iceberg', 'Myphone', 'See your movies and games pop with vivid colors, dark shadows and stunning contrast on the 10.5 inch screen.', '25462', 'Myphone', '', '', '2015-02-13 21:18:11', 'upload/Jellyfish.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `suppliers`
--

CREATE TABLE IF NOT EXISTS `suppliers` (
  `supplier_id` int(100) NOT NULL AUTO_INCREMENT,
  `supplier_company_name` varchar(100) NOT NULL,
  `supplier_address` varchar(100) NOT NULL,
  `supplier_contact` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_company_name`, `supplier_address`, `supplier_contact`, `firstname`, `lastname`, `date_added`, `location`) VALUES
(1, 'Samsung', 'Manila', '454-4653', 'Ariel', 'Can', '2015-02-08 23:15:54', 'upload/10540807_1477825709143349_5522679318279722510_n.jpg'),
(2, 'Nokia', 'Saudi', '343-5656', 'Rena', 'Aner', '2015-02-08 23:20:08', 'upload/10468052_1477825835810003_4270539925038604495_n.jpg'),
(3, 'Alcatel', 'Makati', '235-5224', 'Antonio', 'dfd', '2015-02-08 23:20:54', 'upload/988842_777445008951996_1989282849_n.jpg'),
(4, 'Cherry Mobile', 'London', '767-4533', 'Dony', 'Don', '2015-02-13 21:12:08', 'upload/2.jpg'),
(5, 'Myphone', 'Alaska', '233-5743', 'Dan', 'Danny', '2015-02-13 21:13:57', 'upload/10369127_909290255754224_5255228475712477544_n.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
