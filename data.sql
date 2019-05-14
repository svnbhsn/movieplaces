-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Jul 2016 um 14:02
-- Server-Version: 10.1.8-MariaDB
-- PHP-Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `dbtest`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `data`
--

CREATE TABLE `data` (
  `id` int(5) NOT NULL,
  `name` varchar(25) NOT NULL,
  `ort` varchar(25) NOT NULL,
  `seite` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `email` varchar(100) CHARACTER SET utf32 COLLATE utf32_bin NOT NULL,
  `datum` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `uhrzeit` varchar(20) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `data`
--

INSERT INTO `data` (`id`, `name`, `ort`, `seite`, `email`, `datum`, `uhrzeit`) VALUES
(1, 'Hobbiton', 'Matamata, Neuseeland', 'http://hobbitontours.com/', 'office@hobbitontours.com', 'TÃ¤glich', '09:00 - 16:30'),
(36, 'Filmpark Babelsberg', 'Potsdam, Deutschland', 'http://www.filmpark-babelsberg.de/de/', 'info@filmpark.de', 'TÃ¤glich', '10:00 - 18:10'),
(4, 'NYC TV Tour', 'New York; USA', 'http://onlocationtours.com/tour/new-york-tv-movie/', 'contact@onlocationtours.com', 'TÃ¤glich', '10:00 und 13:00'),
(3, 'Warner Bros. Studio Tour', 'Leavesden, England', 'http://www.wbstudiotour.co.uk/de', 'contact@wbstudiotour.co.uk', 'TÃ¤glich', '10:00 - 20:00');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `data`
--
ALTER TABLE `data`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
