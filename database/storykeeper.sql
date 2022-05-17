-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 17, 2022 at 05:45 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `storykeeper`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `cart_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL,
  PRIMARY KEY (`cart_id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `book_id`) VALUES
(55, 1, 11),
(56, 1, 7),
(57, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `book_id` int(11) NOT NULL AUTO_INCREMENT,
  `book_author` varchar(200) NOT NULL,
  `book_title` varchar(255) NOT NULL,
  `price_audio` double(10,2) NOT NULL,
  `price_paper` double(10,2) NOT NULL,
  `price_hard` double(10,2) NOT NULL,
  `book_cover` varchar(255) NOT NULL,
  `date_added` datetime DEFAULT NULL,
  PRIMARY KEY (`book_id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`book_id`, `book_author`, `book_title`, `price_audio`, `price_paper`, `price_hard`, `book_cover`, `date_added`) VALUES
(1, 'Emily St. John Mandel', 'Sea of Tranquility', 5.00, 41.00, 52.00, './assets/products/sea-of-tranquility.jpg', '2022-05-14 23:26:39'),
(2, 'Bonnie Garmus', 'Lessons in Chemistry', 5.00, 32.00, 64.00, './assets/products/lessons-in-chemistry.jpg', '2022-05-14 23:26:39'),
(3, 'J. K. Rowling', 'harry potter and the philosopher stone', 5.00, 19.00, 38.00, './assets/products/harry potter and the philosopher stone.jpg', '2022-05-14 23:26:39'),
(4, 'Cao Xueqin', 'Dream of the Red Chamber', 5.00, 34.00, 55.00, './assets/products/hung-lou-meng-or-the-dream-of-the-red-chamber-2.jpg', '2022-05-14 23:26:39'),
(5, 'Charles Dickens', 'A Tale of Two Cities', 5.00, 29.00, 58.00, './assets/products/a-tale-of-two-cities-330.jpg', '2022-05-14 23:26:39'),
(6, 'C. S. Lewis', 'The Lion, The Witch and The Wardrobe', 5.00, 38.00, 53.00, './assets/products/lionwardrobe13.jpg', '2022-05-14 23:26:39'),
(7, 'Antoine de Saint-Exupéry', 'The Little Prince', 5.00, 37.00, 61.00, './assets/products/the-little-prince.jpg', '2022-05-14 23:26:39'),
(8, 'Jack Carr', 'In the Blood: A Thriller', 5.00, 38.00, 67.00, './assets/products/in-the-blood.jpg', '2022-05-14 23:26:39'),
(9, 'Jennifer Weiner', 'The Summer Place: A Novel', 5.00, 36.00, 63.00, './assets/products/the-summer-place.jpg', '2022-05-14 23:26:39'),
(10, 'J. D. Kirk', 'City of Scars', 5.00, 26.00, 54.00, './assets/products/city-of-scars.jpg', '2022-05-14 23:26:39'),
(11, 'Mary Kay Andrews', 'The Homewreckers: A Novel', 5.00, 29.00, 49.00, './assets/products/the-homewreckers.jpg', '2022-05-14 23:26:39'),
(12, 'Michelle Zauner', 'Crying in H Mart', 5.00, 30.00, 47.00, './assets/products/crying-in-h-mart.jpg', '2022-05-14 23:26:39'),
(13, 'Patrick Radden Keefe', 'Empire of Pain', 5.00, 19.00, 36.00, './assets/products/empire-of-pain.jpg', '2022-05-14 23:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `register_date` datetime DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `first_name`, `last_name`, `register_date`) VALUES
(1, 'monem', 'assili', '2022-05-14 23:26:39'),
(2, 'ahmed', 'assili', '2022-05-14 23:26:39');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

DROP TABLE IF EXISTS `wishlist`;
CREATE TABLE IF NOT EXISTS `wishlist` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `book_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
