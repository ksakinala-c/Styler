-- phpMyAdmin SQL Dump
-- version 4.1.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 05, 2015 at 02:59 PM
-- Server version: 5.5.39-36.0-log
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ainarms8_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `addarticle`
--

CREATE TABLE IF NOT EXISTS `addarticle` (
  `artid` int(20) NOT NULL AUTO_INCREMENT,
  `arthead` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `sdiscp` text NOT NULL,
  `filename` text NOT NULL,
  PRIMARY KEY (`artid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `addstory`
--

CREATE TABLE IF NOT EXISTS `addstory` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `location` varchar(30) NOT NULL,
  `date` varchar(25) NOT NULL,
  `sdiscp` text NOT NULL,
  `filename1` text NOT NULL,
  `filename2` text NOT NULL,
  `filename3` text NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`sid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `addvid`
--

CREATE TABLE IF NOT EXISTS `addvid` (
  `vidid` int(20) NOT NULL AUTO_INCREMENT,
  `vidhead` text NOT NULL,
  `date` varchar(20) NOT NULL,
  `iframe` text NOT NULL,
  PRIMARY KEY (`vidid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminid` int(20) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `adminstrator`
--

CREATE TABLE IF NOT EXISTS `adminstrator` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `backup_county`
--

CREATE TABLE IF NOT EXISTS `backup_county` (
  `state` varchar(1024) NOT NULL,
  `county` varchar(1024) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `banner_master`
--

CREATE TABLE IF NOT EXISTS `banner_master` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_pos` varchar(100) NOT NULL,
  `banner_type` varchar(100) NOT NULL,
  `banner_page` varchar(300) NOT NULL,
  `banner_size` varchar(100) NOT NULL,
  `banner_path` varchar(500) NOT NULL,
  `banner_link` varchar(1024) NOT NULL,
  `active_flag` tinyint(1) NOT NULL,
  `banner_date` date NOT NULL,
  `validity_date` date NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `banner_master_old`
--

CREATE TABLE IF NOT EXISTS `banner_master_old` (
  `banner_id` int(11) NOT NULL AUTO_INCREMENT,
  `banner_pos` varchar(100) NOT NULL,
  `banner_type` varchar(100) NOT NULL,
  `banner_page` varchar(300) NOT NULL,
  `banner_size` varchar(100) NOT NULL,
  `banner_path` varchar(1024) NOT NULL,
  `active_flag` tinyint(1) NOT NULL,
  `banner_date` date NOT NULL,
  PRIMARY KEY (`banner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `billing_master`
--

CREATE TABLE IF NOT EXISTS `billing_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `middle` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `payment_mode` varchar(25) NOT NULL,
  `billaddress` varchar(500) NOT NULL,
  `location` int(100) NOT NULL,
  `county` int(100) NOT NULL,
  `country` int(250) NOT NULL,
  `state` int(250) NOT NULL,
  `city` int(250) NOT NULL,
  `other_city` varchar(200) NOT NULL,
  `region` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `type` varchar(25) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `bill_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `pack_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_billing_master`
--

CREATE TABLE IF NOT EXISTS `business_billing_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `middle` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `payment_mode` varchar(25) NOT NULL,
  `billaddress` varchar(500) NOT NULL,
  `location` int(100) NOT NULL,
  `county` int(100) NOT NULL,
  `country` int(250) NOT NULL,
  `state` int(250) NOT NULL,
  `city` int(250) NOT NULL,
  `other_city` varchar(200) NOT NULL,
  `region` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `type` varchar(25) NOT NULL,
  `property_type` varchar(100) NOT NULL,
  `package` varchar(100) NOT NULL,
  `bill_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `pack_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_billing_master_old`
--

CREATE TABLE IF NOT EXISTS `business_billing_master_old` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `user_id` int(100) NOT NULL,
  `middle` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `payment_mode` varchar(25) NOT NULL,
  `billaddress` varchar(500) NOT NULL,
  `location` int(100) NOT NULL,
  `county` int(100) NOT NULL,
  `country` int(250) NOT NULL,
  `state` int(250) NOT NULL,
  `city` int(250) NOT NULL,
  `other_city` varchar(200) NOT NULL,
  `region` varchar(100) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `type` varchar(25) NOT NULL,
  `bill_date` date NOT NULL,
  `exp_date` date NOT NULL,
  `pack_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `business_master`
--

CREATE TABLE IF NOT EXISTS `business_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `business_name` varchar(200) NOT NULL,
  `contact_name` varchar(100) NOT NULL,
  `street_address` varchar(1000) NOT NULL,
  `postal_address` varchar(1000) NOT NULL,
  `phone_number` varchar(15) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `payment` tinyint(1) NOT NULL,
  `location` int(200) NOT NULL,
  `county` int(200) NOT NULL,
  `country` int(200) NOT NULL,
  `state` int(250) NOT NULL,
  `city` int(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `lat` varchar(200) NOT NULL,
  `longi` varchar(200) NOT NULL,
  `other_city` varchar(2040) NOT NULL,
  `fax_number` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(200) NOT NULL,
  `ecom` varchar(20) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `subcategory` varchar(100) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `user` int(200) NOT NULL,
  `package` varchar(30) NOT NULL,
  `bill_id` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `category_master`
--

CREATE TABLE IF NOT EXISTS `category_master` (
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(200) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city_master`
--

CREATE TABLE IF NOT EXISTS `city_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `city` varchar(300) NOT NULL,
  `county` int(200) NOT NULL,
  `country` int(200) NOT NULL,
  `state` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city_master_new(26-12-14)`
--

CREATE TABLE IF NOT EXISTS `city_master_new(26-12-14)` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `city` varchar(300) NOT NULL,
  `county` int(200) NOT NULL,
  `country` int(200) NOT NULL,
  `state` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city_master_old(26-12-14)`
--

CREATE TABLE IF NOT EXISTS `city_master_old(26-12-14)` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `city` varchar(300) NOT NULL,
  `county` int(200) NOT NULL,
  `country` int(200) NOT NULL,
  `state` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city_master_old(27-12-14)`
--

CREATE TABLE IF NOT EXISTS `city_master_old(27-12-14)` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `city` varchar(300) NOT NULL,
  `county` int(200) NOT NULL,
  `country` int(200) NOT NULL,
  `state` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `country_master`
--

CREATE TABLE IF NOT EXISTS `country_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `country` varchar(500) NOT NULL,
  `region` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `county_master`
--

CREATE TABLE IF NOT EXISTS `county_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `county` varchar(300) NOT NULL,
  `state` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(50) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `default_id` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `fav_business`
--

CREATE TABLE IF NOT EXISTS `fav_business` (
  `user_id` varchar(100) NOT NULL,
  `business_id` varchar(100) NOT NULL,
  `fav_bus_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `month_master`
--

CREATE TABLE IF NOT EXISTS `month_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `month` varchar(10) NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_template`
--

CREATE TABLE IF NOT EXISTS `newsletter_template` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `path` varchar(300) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_user`
--

CREATE TABLE IF NOT EXISTS `newsletter_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `status` tinyint(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `price_rule_master`
--

CREATE TABLE IF NOT EXISTS `price_rule_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_type` varchar(10) NOT NULL,
  `property_type` varchar(10) NOT NULL,
  `listing` varchar(10) NOT NULL,
  `price` float(10,2) NOT NULL,
  `create_date` datetime NOT NULL,
  `update_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_image_master`
--

CREATE TABLE IF NOT EXISTS `property_image_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `property_id` int(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_listing_counter`
--

CREATE TABLE IF NOT EXISTS `property_listing_counter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `property_name` varchar(100) NOT NULL,
  `counter` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `property_master`
--

CREATE TABLE IF NOT EXISTS `property_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `pro_reg_id` varchar(200) NOT NULL,
  `listing_date` date NOT NULL,
  `bill_id` varchar(200) NOT NULL,
  `property_type` varchar(300) NOT NULL,
  `location` int(200) NOT NULL,
  `county` int(200) NOT NULL,
  `country` int(200) NOT NULL,
  `state` int(250) NOT NULL,
  `city` int(200) NOT NULL,
  `zipcode` varchar(200) NOT NULL,
  `other_city` varchar(2040) NOT NULL,
  `address` varchar(2000) NOT NULL,
  `property_title` varchar(2000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` varchar(200) NOT NULL,
  `area_dim` varchar(100) NOT NULL,
  `lot_dim` varchar(200) NOT NULL,
  `garage_dim` varchar(200) NOT NULL,
  `land_area` varchar(100) NOT NULL,
  `lot_size` varchar(200) NOT NULL,
  `year_built` varchar(100) NOT NULL,
  `bedroom` varchar(100) NOT NULL,
  `bathroom` varchar(100) NOT NULL,
  `construction` varchar(1000) NOT NULL,
  `garage_size` varchar(100) NOT NULL,
  `energy` varchar(1000) NOT NULL,
  `sustain` varchar(1000) NOT NULL,
  `prop_website` varchar(200) NOT NULL,
  `user` int(200) NOT NULL,
  `video` varchar(2040) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `type` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `modify_date` date NOT NULL,
  `web_view` tinyint(1) NOT NULL,
  `created_date` date NOT NULL,
  `counter` int(100) NOT NULL,
  `search_counter` bigint(100) NOT NULL,
  `feedback_counter` bigint(100) NOT NULL,
  `website_counter` bigint(200) NOT NULL,
  `lat` varchar(2000) NOT NULL,
  `longi` varchar(2000) NOT NULL,
  `order_level` int(11) NOT NULL,
  `payment` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `region_master`
--

CREATE TABLE IF NOT EXISTS `region_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `region_master_old`
--

CREATE TABLE IF NOT EXISTS `region_master_old` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `type` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `registration_master`
--

CREATE TABLE IF NOT EXISTS `registration_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `comp_name` varchar(200) NOT NULL,
  `user_type` varchar(200) NOT NULL,
  `no_listing` varchar(11) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `email` varchar(100) NOT NULL,
  `another_email` varchar(500) NOT NULL,
  `pincode` varchar(200) NOT NULL,
  `password` varchar(50) NOT NULL,
  `type` varchar(10) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `address` varchar(500) NOT NULL,
  `location` int(250) NOT NULL,
  `county` int(250) NOT NULL,
  `country` int(250) NOT NULL,
  `state` int(250) NOT NULL,
  `city` int(250) NOT NULL,
  `other_city` varchar(200) NOT NULL,
  `bio_pic` varchar(500) NOT NULL,
  `bio_info` varchar(500) NOT NULL,
  `bio_logo` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `saved_property`
--

CREATE TABLE IF NOT EXISTS `saved_property` (
  `user_id` varchar(100) NOT NULL,
  `property_id` varchar(100) NOT NULL,
  `save_prop_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `state_back`
--

CREATE TABLE IF NOT EXISTS `state_back` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country` varchar(500) NOT NULL,
  `state` varchar(500) NOT NULL,
  `city` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state_master`
--

CREATE TABLE IF NOT EXISTS `state_master` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(500) NOT NULL,
  `country` int(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_master`
--

CREATE TABLE IF NOT EXISTS `sub_category_master` (
  `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_id` int(100) NOT NULL,
  `sub_cat_name` varchar(200) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `sub_category_master_old`
--

CREATE TABLE IF NOT EXISTS `sub_category_master_old` (
  `sub_cat_id` int(100) NOT NULL AUTO_INCREMENT,
  `cat_id` int(100) NOT NULL,
  `sub_cat_name` varchar(200) NOT NULL,
  PRIMARY KEY (`sub_cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE IF NOT EXISTS `super_admin` (
  `super_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`super_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `uid` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `op_photo` varchar(100) NOT NULL,
  `d_id` int(11) NOT NULL,
  `admin_op` int(11) NOT NULL DEFAULT '0',
  `last_response` varchar(100) NOT NULL,
  `show_status` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_master`
--

CREATE TABLE IF NOT EXISTS `user_master` (
  `id` int(200) NOT NULL AUTO_INCREMENT,
  `name` varchar(500) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone_no` varchar(13) NOT NULL,
  `comments` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_package_master`
--

CREATE TABLE IF NOT EXISTS `user_package_master` (
  `pack_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(100) NOT NULL,
  `package_type` varchar(10) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `bill_id` varchar(100) NOT NULL,
  `package_start_date` date NOT NULL,
  `package_end_date` date NOT NULL,
  `status` tinyint(2) NOT NULL,
  `suscription_id` varchar(200) NOT NULL,
  `property_assigned` varchar(200) NOT NULL,
  `counter` varchar(100) NOT NULL,
  PRIMARY KEY (`pack_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `vid_entry`
--

CREATE TABLE IF NOT EXISTS `vid_entry` (
  `entid` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `link` text NOT NULL,
  PRIMARY KEY (`entid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_unit` varchar(100) NOT NULL,
  `location` varchar(300) NOT NULL,
  `ip` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `did` int(11) NOT NULL,
  `admin_id` int(11) NOT NULL,
  `visitor_name` varchar(50) NOT NULL DEFAULT 'Visitor',
  `last_response` varchar(100) NOT NULL,
  `browser` varchar(100) NOT NULL,
  `vist_block` int(2) NOT NULL DEFAULT '0',
  `vistr_pages` varchar(2000) NOT NULL,
  `newvisitor` int(2) NOT NULL DEFAULT '1',
  `spenttime` int(11) NOT NULL,
  PRIMARY KEY (`v_id`),
  UNIQUE KEY `visitor_unique` (`visitor_unit`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `visitor_msg`
--

CREATE TABLE IF NOT EXISTS `visitor_msg` (
  `v_id` int(11) NOT NULL AUTO_INCREMENT,
  `visitor_unit` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `msg_from` varchar(50) NOT NULL,
  `from_type` varchar(50) NOT NULL,
  `msg_time` int(11) NOT NULL,
  `msg_seen` int(11) NOT NULL DEFAULT '1',
  `op_sound` int(15) NOT NULL DEFAULT '1',
  KEY `v_id` (`v_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `workshop_master`
--

CREATE TABLE IF NOT EXISTS `workshop_master` (
  `wid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `location` varchar(30) NOT NULL,
  `heading` varchar(100) NOT NULL,
  `event_month` varchar(20) NOT NULL,
  `from_date` varchar(25) NOT NULL,
  `to_date` varchar(25) NOT NULL,
  `description` text NOT NULL,
  `filename1` text NOT NULL,
  `filename2` text NOT NULL,
  `filename3` text NOT NULL,
  `link` text NOT NULL,
  `user` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY (`wid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
