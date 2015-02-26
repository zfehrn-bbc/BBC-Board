-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 26. Feb 2015 um 22:32
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
-- Tabellenstruktur für Tabelle `answer`
--

CREATE TABLE IF NOT EXISTS `answer` (
`id` int(11) NOT NULL,
  `thread_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `voting` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `answer`
--

INSERT INTO `answer` (`id`, `thread_id`, `user`, `comment`, `time`, `voting`) VALUES
(1, 1, 'norukh', 'Man kann einen String mit der Funktion String erstellen und das sieht so aus:sdjfskdffskdfjksdjfsdkfskldfjlskdfjsdkjfklsjdlfkjsdksdddfjklsdfklsdfklsdfsdfjsdkfjksdjfkljsdjniconiconcsshaqwweddehr', '2015-02-26 19:55:35', 0),
(2, 3, 'Admin', 'Das geht so und so blabla', '2015-02-26 20:50:13', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kapitel`
--

CREATE TABLE IF NOT EXISTS `kapitel` (
`id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `pfad` varchar(3) NOT NULL,
  `fachrichtung` char(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `kapitel`
--

INSERT INTO `kapitel` (`id`, `name`, `pfad`, `fachrichtung`) VALUES
(1, 'Java', 'jav', 'a'),
(2, 'PHP', 'php', 'a'),
(3, 'Netze', 'net', 's'),
(4, 'Virtualisierung', 'vir', 's');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `thread`
--

CREATE TABLE IF NOT EXISTS `thread` (
`id` int(11) NOT NULL,
  `kapitel_id` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `titel` varchar(200) NOT NULL,
  `frage` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `thread`
--

INSERT INTO `thread` (`id`, `kapitel_id`, `user`, `titel`, `frage`, `time`) VALUES
(1, 1, 'Admin', 'Java String erstellen?', 'Hallo ich habe ein Problem wie erstelle ich einen neuen java String?', '2015-02-25 20:01:36'),
(2, 1, 'norukh', 'Probleme 1', 'testtestetstetst Lorem ipsum', '2015-02-26 20:20:38'),
(3, 1, 'admin23', 'yoyoyoy problem 2', 'sdkf lorem ipsum lorem ipsum', '2015-02-26 20:20:38');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `answer`
--
ALTER TABLE `answer`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kapitel`
--
ALTER TABLE `kapitel`
 ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `thread`
--
ALTER TABLE `thread`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `answer`
--
ALTER TABLE `answer`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT für Tabelle `kapitel`
--
ALTER TABLE `kapitel`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `thread`
--
ALTER TABLE `thread`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
