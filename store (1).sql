-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 08, 2020 at 06:19 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `path` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `path`) VALUES
(1, 'Cannon EOS', '36000', 'img/1.jpg'),
(2, 'Nikon EOS', '40000', 'img/2.jpg'),
(3, 'Sony DSLR', '50000', 'img/3.jpg'),
(4, 'Olympus DSLR', '50000', 'img/4.jpg'),
(5, 'Titan Model #301', '13000', 'img/18.jpg'),
(6, 'Titan Model #201\r\n', '3000', 'img/19.jpg'),
(7, 'HMT Milan', '8000', 'img/20.jpg'),
(8, 'Faber Luba #111', '18000', 'img/10.jpg'),
(9, 'H&W', '800', 'img/22.jpg'),
(10, 'Luis Phil', '1000', 'img/23.jpg'),
(11, 'John Zok', '1500', 'img/24.jpg'),
(12, 'Jhalsani', '1300', 'img/25.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `email`, `password`, `gender`) VALUES
(1, 'Chandan', 'Kumar', 'cus@gmail.com', 'asdfsdf', 'Male'),
(2, 'Supriye', 'Anand', 'Supriye@gmail.com', '', 'male'),
(3, 'upendra', 'kumar', 'uk06704@gmail.com', '6510d1f90cb2a89bdb1a06ce75cba277 ', 'male'),
(4, 'Himanshu', 'Prakash', 'himanshuprakash47720@gmail.com', '62a930c1f279d6e40bd1c229f1fb310f', 'male'),
(5, 'Anie', 'Marie', 'anu@gmail.com', '32940a7b35e57cc3bbed8b7c5faf2a12', 'female'),
(6, 'Supriye', 'Anand', 'supriyeanand50@gmail.com', '67db9e001124202e90deeb1c6671b104', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_product`
--

DROP TABLE IF EXISTS `user_product`;
CREATE TABLE IF NOT EXISTS `user_product` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `user_id` int(20) NOT NULL,
  `product_id` int(20) NOT NULL,
  `status` enum('in cart','confirmed') DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`,`product_id`),
  KEY `product_id` (`product_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_product`
--

INSERT INTO `user_product` (`id`, `user_id`, `product_id`, `status`) VALUES
(1, 2, 3, 'in cart'),
(12, 4, 9, 'in cart'),
(16, 5, 11, 'in cart'),
(18, 6, 7, 'in cart'),
(19, 6, 9, 'in cart'),
(24, 3, 1, 'confirmed'),
(25, 3, 2, 'confirmed'),
(26, 3, 7, 'confirmed'),
(27, 3, 4, 'in cart'),
(28, 3, 3, 'in cart');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_product`
--
ALTER TABLE `user_product`
  ADD CONSTRAINT `user_product_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `user_product_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
