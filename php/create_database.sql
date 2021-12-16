-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Creato il: Dic 16, 2021 alle 14:52
-- Versione del server: 10.4.21-MariaDB
-- Versione PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dojo`
--
CREATE DATABASE IF NOT EXISTS `dojo` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `dojo`;

-- --------------------------------------------------------

--
-- Struttura della tabella `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `AdminID` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `CF_venditore` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ATTIVO` tinyint(1) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`AdminID`, `CF_venditore`, `nome`, `cognome`, `username`, `email`, `password`, `ATTIVO`) VALUES
(1, 'PGGLSN00D21H294W', 'Alessandro', 'Pioggia', 'alepipita', 'alexpioggia@gmail.com', '5678', 0),
(2, 'RNGLCU00D01H294G', 'Luca', 'Rengo', 'lukarengo', 'lr@gmail.com', '1234', 0);

-- --------------------------------------------------------

--
-- Struttura della tabella `ordini`
--

CREATE TABLE IF NOT EXISTS `ordini` (
  `codice_ordine` int(8) NOT NULL,
  `UserID` int(10) NOT NULL,
  `DataOra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`codice_ordine`),
  KEY `UserID` (`UserID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prod-ordine`
--

CREATE TABLE IF NOT EXISTS `prod-ordine` (
  `codice_prodotto` int(8) NOT NULL,
  `codice_ordine` int(8) NOT NULL,
  `quantita_ordinata` int(5) NOT NULL,
  KEY `codice_prodotto` (`codice_prodotto`),
  KEY `codice_ordine` (`codice_ordine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE IF NOT EXISTS `prodotti` (
  `codice_prodotto` int(8) NOT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezzo` int(4) NOT NULL,
  `quantita_disponibile` int(5) NOT NULL,
  `ingredienti` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codice_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`codice_prodotto`, `nome`, `prezzo`, `quantita_disponibile`, `ingredienti`) VALUES
(0, 'Cola', 2, 300, 'segreto'),
(1, 'samurai treccia', 8, 100, 'pane(treccia), hamburger, melanzane gratinate, salsa samurai'),
(2, 'patatine fritte', 4, 200, 'patate, olio di semi, sale, pepe'),
(3, 'Pizza', 5, 200, 'Impasto con farina 00, mozzarella, pomodoro, basilico, olio extravergine d\'oliva'),
(4, 'katanaburger', 8, 5, 'pane giapponese, hamburger, mozzarella di bufala, salsa alla mortadella, rucola, cetriolini'),
(5, 'PANINOZZO', 10, 200, 'Panino con semola, carne di chianina, bacon croccante, guanciale, pomodoro fresco, insalata, salsa d');

-- --------------------------------------------------------

--
-- Struttura della tabella `recensioni`
--

CREATE TABLE IF NOT EXISTS `recensioni` (
  `ID_recensione` int(8) NOT NULL,
  `UserID` int(10) UNSIGNED NOT NULL,
  `Testo` text COLLATE utf8_unicode_ci NOT NULL,
  `Punteggio` int(1) NOT NULL,
  `DataOra` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ID_recensione`),
  KEY `UserID` (`UserID`) USING BTREE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `UserID` int(10) NOT NULL AUTO_INCREMENT,
  `CF_cliente` varchar(16) COLLATE utf8_unicode_ci DEFAULT NULL,
  `nome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cognome` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `ATTIVO` tinyint(1) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`UserID`, `CF_cliente`, `nome`, `cognome`, `username`, `email`, `password`, `ATTIVO`) VALUES
(1, 'ABCDEFGHIJKLMNOP', '', '', '', '', '', 0),
(2, 'CRLRSN59C04H294E', 'Carletto', 'Rossinbaldi', '', 'carlettorossimbaldi@gmail.com', '1234', 0),
(3, 'CRMCLB92A52A944L', 'Carmelo', 'Casalbottoni', '', 'carmelospyder@gmail.com', 'password', 0),
(4, 'CRMSRN84A52H501D', 'Carmela', 'Speranza', '', 'carmelasperanza@gmail.com', 'caramellagommosa', 0),
(5, 'GRGRLL03H65H504S', 'George', 'Orwell', '', 'georgy@gmail.com', 'mipiacelamalinconia213', 0);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `ordini`
--
ALTER TABLE `ordini`
  ADD CONSTRAINT `ordini_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `users` (`UserID`);

--
-- Limiti per la tabella `prod-ordine`
--
ALTER TABLE `prod-ordine`
  ADD CONSTRAINT `prod-ordine_ibfk_1` FOREIGN KEY (`codice_prodotto`) REFERENCES `prodotti` (`codice_prodotto`),
  ADD CONSTRAINT `prod-ordine_ibfk_2` FOREIGN KEY (`codice_ordine`) REFERENCES `ordini` (`codice_ordine`);

--
-- Limiti per la tabella `recensioni`
--
ALTER TABLE `recensioni`
  ADD CONSTRAINT `recensioni_ibfk_1` FOREIGN KEY (`ID_recensione`) REFERENCES `users` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
