-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 30, 2023 at 02:55 AM
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
-- Database: `frutan`
--

-- --------------------------------------------------------

--
-- Table structure for table `author`
--

DROP TABLE IF EXISTS `author`;
CREATE TABLE IF NOT EXISTS `author` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(500) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'pendding',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `author`
--

INSERT INTO `author` (`id`, `email`, `password`, `avatar`, `status`) VALUES
(1, 'alibaba@gmail.com', '123', 'services4.jpg', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `name`) VALUES
(1, 'Daily'),
(2, 'News');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `seen_website` varchar(255) NOT NULL,
  `service` varchar(255) NOT NULL,
  `message` varchar(1500) NOT NULL,
  `date_issue` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(15) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=89 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `seen_website`, `service`, `message`, `date_issue`, `status`) VALUES
(77, 'ahmad', 'ahmad@gmail.com', 'Youtube', 'Digital Content', 'I want Create My Facebook Annoncement.', '2023-01-14 14:21:46', 'done'),
(86, 'wali', 'khan@gmail.com', 'Google', 'Anoncement', 'I want something great.', '2023-01-15 13:00:21', 'pendding'),
(87, 'asd', 'sdfasdf@gamil.com', 'Instagram', 'Digital Content', 'sdfsdf', '2023-01-18 18:01:26', 'pendding'),
(88, 'asd', 'sdfasdf@gamil.com', 'Instagram', 'Digital Content', 'sdfsdf', '2023-01-18 18:02:02', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `content` varchar(1500) NOT NULL,
  `category` varchar(255) NOT NULL,
  `img` varchar(800) NOT NULL,
  `tag` varchar(255) NOT NULL,
  `date_issue` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `status` varchar(8) NOT NULL DEFAULT 'pendding',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category`, `img`, `tag`, `date_issue`, `author`, `status`) VALUES
(22, 'Hello-wordl', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 'News', '07.jpg', 'TVC, TV, Trailers', '2023-01-21 07:57:44', 'Alibaba', 'publish'),
(21, 'Hello-Dude', 'Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum', 'Daily', '11.jpg', 'TVC', '2023-01-21 07:48:45', 'Alibaba', 'publish'),
(17, 'First-Day-In-Shifa-Company', 'Lorem Ipsum Test Lorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum TestLorem Ipsum Test', 'News', '01.jpg', 'TVC, TV, Annoncement', '2023-01-19 16:57:39', 'Alibaba', 'pendding');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
