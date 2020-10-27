-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Värd: 127.0.0.1:3306
-- Tid vid skapande: 27 okt 2020 kl 20:31
-- Serverversion: 5.7.31
-- PHP-version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Databas: `tshirtshop`
--

DELIMITER $$
--
-- Procedurer
--
DROP PROCEDURE IF EXISTS `catalog_get_departments_list`$$
CREATE DEFINER=`root`@`localhost` PROCEDURE `catalog_get_departments_list` ()  BEGIN
	SELECT department_id, name FROM department ORDER BY department_id;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Tabellstruktur `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `department_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`department_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumpning av Data i tabell `department`
--

INSERT INTO `department` (`department_id`, `name`, `description`) VALUES
(1, 'Regional', 'Proud of your country? Wear a T-shirt with a national\r\nsymbol stamp!'),
(2, 'Nature', 'Find beautiful T-shirts with animals and flowers in our\r\nNature department!'),
(3, 'Seasonal', 'Each time of the year has a special flavor. Our seasonal\r\nT-shirts express traditional symbols using unique postal stamp pictures.');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
