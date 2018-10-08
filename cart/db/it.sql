-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 02, 2015 at 12:25 AM
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
(1, 'admin', 'admin', 'admin', 'admin', '0934209139', '2015-02-11 23:21:30', 'upload/photo.jpg'),
(2, 'Rolyn', 'Demerin', 'rolyn', 'rolyn', '09989781348', '2015-02-11 23:21:47', 'upload/10978669_882212105164324_9094627003651789232_n.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `sales_id` int(200) NOT NULL AUTO_INCREMENT,
  `member_id` varchar(255) NOT NULL,
  `product_id` varchar(200) NOT NULL,
  `shippers` varchar(255) NOT NULL,
  `quantity` varchar(200) NOT NULL,
  `date` varchar(200) NOT NULL,
  `total` varchar(200) NOT NULL,
  PRIMARY KEY (`sales_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`sales_id`, `member_id`, `product_id`, `shippers`, `quantity`, `date`, `total`) VALUES
(1, '1', '2', 'LBC', '1', 'Mar 01, 15', '29990');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_firstname`, `feedback_lastname`, `feedback_email`, `feedback_number`, `feedback_message`, `date_published`) VALUES
(1, 'Rolyn Jasper', 'Demerin', 'rolyn02@gmail.com', '09989781348', 'NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!! NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!! NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!! NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!NICE ONE GUYS!!!', '2015-02-18 14:16:11'),
(2, 'Nia', 'Eva', 'nia_eva@gmail.com', '09248586382', 'hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs hahahaha, NICE jobs.......', '2015-02-18 14:17:13'),
(3, 'Eric', 'Javelona', 'eric@gmail.com', '09248586382', 'wahaha /. nice jobs', '2015-02-27 21:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `member_id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `contact_no` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  PRIMARY KEY (`member_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`member_id`, `firstname`, `lastname`, `email`, `password`, `contact_no`, `address`, `date`) VALUES
(1, 'Rolyn Jasper', 'Demerin', 'rolyn02@gmail.com', '1128199515', '09989781348', 'Saudi', 'Feb 26, 15'),
(2, 'Arian', 'Ambrona', 'arian@gmail.com', 'bhamcu', '09989781348', 'Valladolid', 'Feb 26, 15'),
(3, 'Mark Anthony', 'Monaya', 'markmonaya@gmail.com', 'markmonaya', '09989781348', 'Silay City', 'Feb 26, 15'),
(4, 'werty', 'wer', 'wer@yahoo.com', '111131', '31131123456', 'wertyui', 'Feb 26, 15');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(100) NOT NULL,
  `product_brand` varchar(100) NOT NULL,
  `product_type` longtext NOT NULL,
  `product_description` longtext NOT NULL,
  `product_price` varchar(100) NOT NULL,
  `supplier` varchar(100) NOT NULL,
  `product_quantity` varchar(100) NOT NULL,
  `product_quantity_sold` varchar(100) NOT NULL,
  `date_added` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `product_brand`, `product_type`, `product_description`, `product_price`, `supplier`, `product_quantity`, `product_quantity_sold`, `date_added`, `location`) VALUES
(1, 'Nokia Lumia 730 ', 'Nokia', 'Smartphones', 'The first smartphone designed specifically for selfies and Skype video calls. And you will not compromise quality with the 5 MP front-facing camera and wide-angle lens.', '11990', 'Nokia', '20', '', '2015-02-17 10:24:49', 'upload/nokialumia730.jpg'),
(2, 'Samsung SM-G850F Galaxy Alpha ', 'Samsung', 'Smartphones', 'The first Samsung GALAXY smartphone with a genuine metal frame, the GALAXY ALPHA exudes luxury and sophistication.', '29990', 'Samsung', '20', '', '2015-02-17 10:28:56', 'upload/Samsung Alpha_zpsrym5uyud.jpg'),
(3, 'Samsung SM-A300F Galaxy A3 ', 'Samsung', 'Smartphones', 'Ultra Slim Full Metal Unibody Designs Ultimate Selfie 5MP Front-facing Camera Quad Core 1.2 GHz Processor The Galaxy A3 is a slim smartphone featuring refined full metal unibody designs (6.9 mm thin). ', '16990', 'Samsung', '20', '', '2015-02-17 10:32:30', 'upload/samsung A3_zps8wc3eakb.jpg'),
(4, 'Nokia Lumia 636 ', 'Nokia', 'Smartphones', 'Introducing the best Windows Phone experience ever. Enjoy typing by swiping with Word Flow, the very fast keyboard. See all of your chats, social updates and settings with just one swipe in the all-new Action Center.', '9490', 'Nokia', '20', '', '2015-02-17 10:33:22', 'upload/Nokia636_zps97c4c960.jpg'),
(5, 'Samsung Metro SM-B312E ', 'Samsung', 'Phones', 'Samsung Metro 312 comes with a large 5.08cm screen and a vibrant display, which enhances your viewing experience. Also, a sleek design makes it extremely attractive and easy to use.', '1590', 'Samsung', '20', '', '2015-02-17 23:22:19', 'upload/Samsung B312_zps97k3fuqa.jpg'),
(6, 'Nokia 206 ', 'Nokia', 'Phones', 'With the Nokia 206 Dual SIM, fun is never far away. Some of the hottest games around are included for free, including Bejeweled, Need for Speed Shift and Medal of Honor. It also comes with Tunewiki Social Player and the Pictelligent camera app.', '2990', 'Nokia', '20', '', '2015-02-17 23:23:11', 'upload/Nokia 206_zpsgebxewjt.jpg'),
(7, 'Nokia 225 ', 'Nokia', 'Phones', 'The 2.8 screen blends seamlessly into a trim 10.4mm body, so it looks sharp and feels slim. With five eye-popping colours to pick from, it is quite the looker.', '5000', 'Nokia', '20', '', '2015-02-17 23:24:01', 'upload/Nokia225_zpsf9351c34.jpg'),
(8, 'Samsung E1272 ', 'Samsung', 'Phones', 'Designed to fit perfectly in your hand, and was contoured with style and mobility in mind. This simple design allows you to put the phone into any pouch without worrying about space.', '1490', 'Samsung', '20', '', '2015-02-17 23:25:01', 'upload/SamsungE1272_zps0320e1ac.jpg'),
(9, 'Nokia 208 ', 'Nokia', 'Phones', 'Enjoy fast browsing with 3.5G connectivity and Nokia Xpress Browser. The Nokia 208 packs fun camera features, great social apps and classic good looks.', '3350', 'Nokia', '20', '', '2015-02-17 23:25:52', 'upload/Nokia208_zpsfaa3db6e.jpg'),
(10, 'Samsung E2202 ', 'Samsung', 'Phones', 'Connector. Socializer. Entertainer.', '1490', 'Samsung', '20', '', '2015-02-17 23:26:44', 'upload/SamsungE2202_zps292a0e2a.jpg'),
(11, 'Nokia Asha 210 ', 'Nokia', 'Phones', 'Meet Asha 210, the super-social QWERTY phone. Comes with great camera features and apps like WhatsApp, Facebook and Twitter that make sharing easy.', '3350', 'Nokia', '20', '', '2015-02-17 23:27:57', 'upload/Nokia210_zpsa4b92417.jpg'),
(12, 'Nokia 105 ', 'Nokia', 'Phones', 'The Nokia 105 packs a super-efficient battery to give you up to up to 12.5 hours of talk time and up to a whopping 35 days of standby.', '930', 'Nokia', '20', '', '2015-02-17 23:28:41', 'upload/Nokia105_zps14b2840b.jpg'),
(13, 'Samsung Galaxy Tab S T805 8.4 LTE ', 'Samsung', 'Tablets', 'An ultra-thin build with a comfortable design makes this tablet difficult to put down. Lightweight and perfect for travel, it connects seamlessly with other Galaxy products for you to effortlessly share photos and videos from wherever you are.', '21990', 'Samsung', '20', '', '2015-02-18 13:59:44', 'upload/SamsungT805_zps1a4e46eb.jpg'),
(14, 'Samsung T531 Galaxy Tab 4 10.1 3G ', 'Samsung', 'Tablets', 'Stylish Design. A sophisticated design and practicality. The Samsung Galaxy Tab 4 (10.1 inch.) has it all. Its sleek design is accented by a luxurious back cover with a leather-like texture that adds a premium feel and classic look.', '16990', 'Samsung', '20', '', '2015-02-18 14:00:29', 'upload/SamsungT531Tab4101_zpsc2a523dd.jpg'),
(15, 'Samsung T311 Galaxy Tab 3. 8.0 ', 'Samsung', 'Tablets', 'Samsung new GALAXY Tab 3 introduces Tab portability with even powerful performance! At an unprecedented thin 7,4 mm and light 316 g even with a wide screen, you will love having your Tab while enjoying entertainment in hand wherever you go.', '12490', 'Samsung', '20', '', '2015-02-18 14:01:17', 'upload/SamsungSM-T311GalaxyTab3_zps236e5310.jpg'),
(16, 'Samsung T210 Galaxy Tab 3 7.0 Wifi ', 'Samsung', 'Tablets', 'You will feel secure when grasping the GALAXY Tab 3 in your palm. Slimmer and narrower, the new GALAXY TAB 3 is a better fit, while the thinner bezel ensures you have more screen to touch and operate to your advantage. Lighter to boot, the new GALAXY Tab 3.', '7490', 'Samsung', '20', '', '2015-02-18 14:02:05', 'upload/SamsungT210GalaxyTab370Wifi_zps5c1967b0.jpg'),
(17, 'Samsung Galaxy Note 2 Flip Cover ', 'Samsung', 'Accessories', 'Many colors to choose.', '990', 'Samsung', '20', '', '2015-02-18 14:20:40', 'upload/note2flipcover_zpsdf8edda1.jpg'),
(18, 'Samsung HM1300 Wireless Headset ', 'Samsung', 'Accessories', 'Feel the beat of your music.', '1099', 'Samsung', '20', '', '2015-02-18 14:21:44', 'upload/samsungHM1300_zps4fe26cce.jpg'),
(19, 'Samsung Galaxy S4 Flip Cover ', 'Samsung', 'Accessories', 'Many colors to choose.', '999', 'Samsung', '20', '', '2015-02-18 14:22:42', 'upload/Mega58FlipCover_zps9551206f.jpg'),
(20, 'Samsung Galaxy Note 3 OTG Connector ', 'Samsung', 'Accessories', 'It is very Convenience and easy to carry with. PC-free back up of videos and photos from Samsung Galaxy Note 3 N9000 to an external memory stick in a convenient way. Connect to a keyboard for easier control of your Samsung Galaxy Note 3 N9000.', '380', 'Samsung', '20', '', '2015-02-18 14:23:19', 'upload/SamsungNote3OTGConnector_zps4e2c7d59.jpg'),
(21, 'Smart Bro Kit MF667 ', 'Smart', 'Smart Products', 'If you do not still own internet connection, here the mobile broadband so far! Great for email, chat, Facebook and other essential internet activities.', '1245', 'Smart', '20', '', '2015-02-18 14:28:28', 'upload/SmartBROPlug-ITKitMF-667_zps51f2e0b8.jpg'),
(22, 'Smart Bro Power Duo ', 'Smart', 'Smart Products', 'Smart Bro Power Plug It + WiFi Router + Powerbank in one!', '1895', 'Smart', '20', '', '2015-02-18 14:29:26', 'upload/SmartBROPower Duo_zpsmsnohlwq.jpg'),
(23, 'SmartBRO Pocket Wi-Fi ZTE MF63 ', 'Smart', 'Smart Products', 'Connects up to 10 gadgets. Speed Up to 7.2 mbps. With nationwidest coverage.', '1995', 'Smart', '20', '', '2015-02-18 14:31:41', 'upload/SmartBROPocketWi-FiZTEMF63_zpse6732658.jpg'),
(24, 'Smart Buddy 100 ', 'Smart', 'Smart Products', 'Smart Prepaid Call & Text Card. Validity: 30 days. No free text. ', '98', 'Smart', '20', '', '2015-02-18 14:35:02', 'upload/SmartBuddyCard100_zps4359a8fa.jpg'),
(25, 'Smart Buddy 300 ', 'Smart', 'Smart Products', 'Smart Prepaid Call & Text Card. Validity: 30 days. ', '285', 'Smart', '20', '', '2015-02-18 14:35:45', 'upload/SmartBuddyCard300_zps5ab4265c.jpg'),
(26, 'Smart Buddy 500 ', 'Smart', 'Smart Products', 'Smart Prepaid Call & Text Card. Validity: 30 days.', '480', 'Smart', '20', '', '2015-02-18 14:36:28', 'upload/SmartBuddyCard500_zps97099443.jpg'),
(27, 'Smart Micro Prepaid SIM LTE', 'Smart', 'Smart Products', 'The Micro sims fit both regular cut and micro-cut LTE phones.', '40', 'Smart', '20', '', '2015-02-18 14:37:45', 'upload/SmartMicroPrepaidSimLTE_zps07a737d9.jpg'),
(28, 'Smart Nano Prepaid SIM LTE', 'Smart', 'Smart Products', 'Experience the speed of LTE with a Smart Prepaid LTE Nano Sim.', '100', 'Smart', '20', '', '2015-02-18 14:38:30', 'upload/SmartNanoPrepaidSimLTE_zps27a44456.jpg'),
(29, 'SmartBRO Dual-Cut SIM', 'Smart', 'Smart Products', 'Insert this Sim to surf at speeds of up to 7.2 Mbps** so surfing is fast and easy.', '39', 'Smart', '20', '', '2015-02-18 14:39:07', 'upload/SmartBRODual-CutSim_zps9725bd18.jpg'),
(30, 'Smart Buddy Jump In Student SIM', 'Smart', 'Smart Products', 'Smart offers you bigger and better LTE SIM for as low as P15.00 only! The Smart Jump In SIM. Enjoy the very affordable and exclusive offer to all SMART subscribers, especially to all students.', '15', 'Smart', '20', '', '2015-02-18 14:40:23', 'upload/SmartBuddyJumpIn_zpsc3b5fc13.jpg'),
(31, 'Postpaid Plan 490 ', 'Cignals', 'Cignal HD TV', '52 CHANNELS with 8 HD', '1640', 'Cignal', '20', '', '2015-02-18 14:45:38', 'upload/postpaid_490_zpssci8acqh.jpg'),
(32, 'Postpaid Plan 630 ', 'Cignals', 'Cignal HD TV', '64 CHANNELS with 11 HD', '1780', 'Cignal', '20', '', '2015-02-18 14:46:31', 'upload/postpaid_630_zpsh9vkacfv.jpg'),
(33, 'Postpaid Plan 830 ', 'Cignals', 'Cignal HD TV', '75 CHANNELS with 15 HD', '1930', 'Cignal', '20', '', '2015-02-18 14:47:07', 'upload/postpaid_830_zpsqkmkih2o.jpg'),
(34, 'Postpaid Plan 990 ', 'Cignals', 'Cignal HD TV', '79 CHANNELS with 17 HD', '2090', 'Cignal', '20', '', '2015-02-18 14:47:43', 'upload/postpaid_990_zpspppky4fc.jpg'),
(35, 'Postpaid Plan 1290 HD ', 'Cignals', 'Cignal HD TV', '85 CHANNELS with 20 HD', '1390', 'Cignal', '20', '', '2015-02-18 14:48:20', 'upload/postpaid_1290_zpsquyt7siv.jpg'),
(36, 'Postpaid Plans 1590 HD ', 'Cignals', 'Cignal HD TV', '90 CHANNELS with 24 HD', '1690', 'Cignal', '20', '', '2015-02-18 14:48:52', 'upload/postpaid_1590_zpskv4dk78k.jpg');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `suppliers`
--

INSERT INTO `suppliers` (`supplier_id`, `supplier_company_name`, `supplier_address`, `supplier_contact`, `firstname`, `lastname`, `date_added`, `location`) VALUES
(1, 'Samsung', 'Manila', '454-4653', 'Ariel', 'Can', '2015-02-08 23:15:54', 'upload/download (3).jpg'),
(2, 'Nokia', 'Saudi', '343-5656', 'Renald', 'Aner', '2015-02-08 23:20:08', 'upload/download (4).jpg'),
(3, 'Alcatel', 'Makati', '235-5224', 'Antonio', 'dfd', '2015-02-08 23:20:54', 'upload/images (3).jpg'),
(4, 'Cherry Mobile', 'London', '767-4533', 'Dony', 'Don', '2015-02-13 21:12:08', 'upload/images (2).jpg'),
(5, 'Myphone', 'Alaska', '233-5743', 'Dan', 'Danny', '2015-02-13 21:13:57', 'upload/images (1).jpg'),
(6, 'Smart', 'Manila', '657-2468', 'Feb', 'Medina', '2015-02-18 14:27:16', 'upload/download (2).jpg'),
(7, 'Cignal', 'Makati City', '967-2473', 'Red', 'De leon', '2015-02-18 14:44:46', 'upload/images.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
