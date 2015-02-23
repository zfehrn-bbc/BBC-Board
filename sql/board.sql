-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 23. Feb 2015 um 21:52
-- Server Version: 5.6.21
-- PHP-Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `board`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kapitel`
--

CREATE TABLE IF NOT EXISTS `kapitel` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pfad` varchar(3) NOT NULL,
  `fachrichtung` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `kapitel`
--

INSERT INTO `kapitel` (`id`, `name`, `pfad`, `fachrichtung`) VALUES
(1, 'Java', 'jav', 'a'),
(2, 'PHP', 'php', 'a');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `kapitel`
--
ALTER TABLE `kapitel`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `kapitel`
--
ALTER TABLE `kapitel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
