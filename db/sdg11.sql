-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 06, 2023 at 05:46 PM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sdg11`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_1_1`
--

DROP TABLE IF EXISTS `tbl11_1_1`;
CREATE TABLE IF NOT EXISTS `tbl11_1_1` (
  `total_research` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `year` int NOT NULL,
  `total_citation` int NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`total_research`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_1`
--

DROP TABLE IF EXISTS `tbl11_3_1`;
CREATE TABLE IF NOT EXISTS `tbl11_3_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `building` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `male` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `female` int NOT NULL,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_3_1`
--

INSERT INTO `tbl11_3_1` (`id`, `building`, `male`, `female`, `total`) VALUES
(16, '20', '10', 0, '10');

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_2`
--

DROP TABLE IF EXISTS `tbl11_3_2`;
CREATE TABLE IF NOT EXISTS `tbl11_3_2` (
  `id` int NOT NULL DEFAULT '0',
  `mis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mv` int NOT NULL,
  `fv` int NOT NULL,
  `tis` int NOT NULL,
  `tig` int NOT NULL,
  `totalIS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_3_2`
--

INSERT INTO `tbl11_3_2` (`id`, `mis`, `fis`, `mv`, `fv`, `tis`, `tig`, `totalIS`, `total`, `points`, `total_sum`) VALUES
(0, '10', '10', 10, 10, 10, 10, '20', 20, '4.0', 0),
(0, '5', '5', 5, 5, 5, 5, '10', 10, '2.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_3`
--

DROP TABLE IF EXISTS `tbl11_3_3`;
CREATE TABLE IF NOT EXISTS `tbl11_3_3` (
  `id` int NOT NULL DEFAULT '0',
  `mis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mv` int NOT NULL,
  `fv` int NOT NULL,
  `totalIS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_3_3`
--

INSERT INTO `tbl11_3_3` (`id`, `mis`, `fis`, `mv`, `fv`, `totalIS`, `total`, `points`, `total_sum`) VALUES
(0, '200', '202', 20, 20, '402', 40, '6.4', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_4`
--

DROP TABLE IF EXISTS `tbl11_3_4`;
CREATE TABLE IF NOT EXISTS `tbl11_3_4` (
  `id` int NOT NULL DEFAULT '0',
  `tsa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `tgp` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_3_4`
--

INSERT INTO `tbl11_3_4` (`id`, `tsa`, `tgp`, `points`, `total_sum`) VALUES
(0, '10', '10', '20.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_5`
--

DROP TABLE IF EXISTS `tbl11_3_5`;
CREATE TABLE IF NOT EXISTS `tbl11_3_5` (
  `id` int NOT NULL AUTO_INCREMENT,
  `performances` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pm` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `pf` int NOT NULL,
  `choirIN` int NOT NULL,
  `choirEX` int NOT NULL,
  `theaterIN` int NOT NULL,
  `theaterEX` int NOT NULL,
  `danceIN` int NOT NULL,
  `danceEX` int NOT NULL,
  `bandIN` int NOT NULL,
  `bandEX` int NOT NULL,
  `total` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_3_5`
--

INSERT INTO `tbl11_3_5` (`id`, `performances`, `pm`, `pf`, `choirIN`, `choirEX`, `theaterIN`, `theaterEX`, `danceIN`, `danceEX`, `bandIN`, `bandEX`, `total`, `points`, `total_sum`) VALUES
(3, '2', '2', 2, 2, 2, 2, 2, 2, 2, 2, 3, 4, '2.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_6`
--

DROP TABLE IF EXISTS `tbl11_3_6`;
CREATE TABLE IF NOT EXISTS `tbl11_3_6` (
  `id` int NOT NULL AUTO_INCREMENT,
  `project` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `desc` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `cost` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `source` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_3_7`
--

DROP TABLE IF EXISTS `tbl11_3_7`;
CREATE TABLE IF NOT EXISTS `tbl11_3_7` (
  `id` int NOT NULL AUTO_INCREMENT,
  `support` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `desc` int NOT NULL,
  `cost` int NOT NULL,
  `source` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_4_1`
--

DROP TABLE IF EXISTS `tbl11_4_1`;
CREATE TABLE IF NOT EXISTS `tbl11_4_1` (
  `id` int NOT NULL AUTO_INCREMENT,
  `total` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `utilized` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alloted` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_4_1`
--

INSERT INTO `tbl11_4_1` (`id`, `total`, `utilized`, `alloted`, `points`, `total_sum`) VALUES
(2, '100', '110', 110, '5.5', 0),
(3, '5', '5', 5, '0.3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_2`
--

DROP TABLE IF EXISTS `tbl11_5_2`;
CREATE TABLE IF NOT EXISTS `tbl11_5_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `des` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_2`
--

INSERT INTO `tbl11_5_2` (`id`, `ppa`, `title`, `des`, `cost`, `fund`, `points`, `total_sum`) VALUES
(6, '2', 's', 'a', 1, '1', '1.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_3`
--

DROP TABLE IF EXISTS `tbl11_5_3`;
CREATE TABLE IF NOT EXISTS `tbl11_5_3` (
  `id` int NOT NULL DEFAULT '0',
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `des` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_3`
--

INSERT INTO `tbl11_5_3` (`id`, `ppa`, `title`, `des`, `cost`, `fund`, `points`, `total_sum`) VALUES
(0, '1', 'awdasd', 'awdas', 12312, '1231231', '8794.3', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_4`
--

DROP TABLE IF EXISTS `tbl11_5_4`;
CREATE TABLE IF NOT EXISTS `tbl11_5_4` (
  `id` int NOT NULL DEFAULT '0',
  `mis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `fis` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mv` int NOT NULL,
  `fv` int NOT NULL,
  `mww` int NOT NULL,
  `fww` int NOT NULL,
  `tww` int NOT NULL,
  `totalIS` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `total` int NOT NULL,
  `epp` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_4`
--

INSERT INTO `tbl11_5_4` (`id`, `mis`, `fis`, `mv`, `fv`, `mww`, `fww`, `tww`, `totalIS`, `total`, `epp`, `points`, `total_sum`) VALUES
(0, '1', '123123', 123123, 1231231, 1231231, 1231231, 2462462, '123124', 1354354, 123123123, '24624624.6', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_5`
--

DROP TABLE IF EXISTS `tbl11_5_5`;
CREATE TABLE IF NOT EXISTS `tbl11_5_5` (
  `id` int NOT NULL DEFAULT '0',
  `appa` int NOT NULL,
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mppa` int NOT NULL,
  `fppa` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `des` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_5`
--

INSERT INTO `tbl11_5_5` (`id`, `appa`, `ppa`, `mppa`, `fppa`, `title`, `des`, `cost`, `fund`, `points`, `total_sum`) VALUES
(0, 4, '4', 2, 2, 'awdas', 'awd', 2232, '231231', '10.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_6`
--

DROP TABLE IF EXISTS `tbl11_5_6`;
CREATE TABLE IF NOT EXISTS `tbl11_5_6` (
  `id` int NOT NULL DEFAULT '0',
  `appa` int NOT NULL,
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `mppa` int NOT NULL,
  `fppa` int NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `des` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_6`
--

INSERT INTO `tbl11_5_6` (`id`, `appa`, `ppa`, `mppa`, `fppa`, `title`, `des`, `cost`, `fund`, `points`, `total_sum`) VALUES
(0, 6, '2', 1, 1, '1', 'awdas', 2121, '21212121', '15.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_7`
--

DROP TABLE IF EXISTS `tbl11_5_7`;
CREATE TABLE IF NOT EXISTS `tbl11_5_7` (
  `id` int NOT NULL DEFAULT '0',
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `des` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_7`
--

INSERT INTO `tbl11_5_7` (`id`, `ppa`, `title`, `des`, `cost`, `fund`, `points`, `total_sum`) VALUES
(0, '2', 'awd', 'awd', 1, '1', '5.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_8`
--

DROP TABLE IF EXISTS `tbl11_5_8`;
CREATE TABLE IF NOT EXISTS `tbl11_5_8` (
  `id` int NOT NULL DEFAULT '0',
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_8`
--

INSERT INTO `tbl11_5_8` (`id`, `ppa`, `points`, `total_sum`) VALUES
(0, '2', '2.5', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_9`
--

DROP TABLE IF EXISTS `tbl11_5_9`;
CREATE TABLE IF NOT EXISTS `tbl11_5_9` (
  `id` int NOT NULL DEFAULT '0',
  `ppa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `ppb` int NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_9`
--

INSERT INTO `tbl11_5_9` (`id`, `ppa`, `ppb`, `points`, `total_sum`) VALUES
(0, '1', 1, '43.0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl11_5_10`
--

DROP TABLE IF EXISTS `tbl11_5_10`;
CREATE TABLE IF NOT EXISTS `tbl11_5_10` (
  `id` int NOT NULL DEFAULT '0',
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `des` varchar(255) NOT NULL,
  `cost` int NOT NULL,
  `fund` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `points` decimal(10,1) NOT NULL,
  `total_sum` int NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `tbl11_5_10`
--

INSERT INTO `tbl11_5_10` (`id`, `title`, `des`, `cost`, `fund`, `points`, `total_sum`) VALUES
(0, '2', '1', 1, '2', '0.0', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
