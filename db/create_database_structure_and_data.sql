-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Dic 28, 2021 alle 17:33
-- Versione del server: 10.4.22-MariaDB
-- Versione PHP: 8.0.13

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
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `attivo` tinyint(1) NOT NULL,
  PRIMARY KEY (`AdminID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `admin`
--

INSERT INTO `admin` (`AdminID`, `username`, `email`, `password`, `attivo`) VALUES
(1, 'admin Ale', 'alexpioggia@gmail.com', '5678', 1),
(2, 'admin Luca', 'lr@gmail.com', '1234', 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `carrello`
--

CREATE TABLE IF NOT EXISTS `carrello` (
  `cod_prodotto` int(8) UNSIGNED NOT NULL,
  `cod_utente` int(10) NOT NULL,
  `quantita` int(5) NOT NULL,
  KEY `cod_utente` (`cod_utente`),
  KEY `cod_prodotto` (`cod_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `carrello`
--

INSERT INTO `carrello` (`cod_prodotto`, `cod_utente`, `quantita`) VALUES
(1, 1, 10),
(5, 1, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `messaggi`
--

CREATE TABLE IF NOT EXISTS `messaggi` (
  `codice_messaggio` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `oggetto` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `testo` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codice_messaggio`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Struttura della tabella `notifiche`
--

CREATE TABLE IF NOT EXISTS `notifiche` (
  `codice_notifica` int(8) NOT NULL,
  `oggetto` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `testo` text COLLATE utf8_unicode_ci NOT NULL,
  `codice_ordine` int(8) NOT NULL,
  PRIMARY KEY (`codice_notifica`),
  KEY `codice_ordine` (`codice_ordine`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `notifiche`
--

INSERT INTO `notifiche` (`codice_notifica`, `oggetto`, `testo`, `codice_ordine`) VALUES
(1, 'prova', 'ciao come stai tutto bene', 1),
(2, 'Conferma avvenuto ordine', 'Signorgeorge1984, la confermiamo che in data 2021-12-24 11:27:50lei ha effettuato l\'ordine11 in cui ha acquistato i prodotti:  Cola, katanaburger, Pizza, buona giornata', 11),
(3, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 11:29:41 lei ha effettuato l\'ordine12 in cui ha acquistato i prodotti:  patatine fritte, katanaburger, Cola, buona giornata', 12),
(4, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 11:33:04 lei ha effettuato l\'ordine13 in cui ha acquistato i prodotti:  Cola, katanaburger, samurai treccia, PANINOZZO, il quale costo totale è:28 buona giornata', 13),
(5, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 11:33:56 lei ha effettuato l\'ordine 14 in cui ha acquistato i prodotti:  Cola, samurai treccia, PANINOZZO, il quale costo totale è: 20€ buona giornata', 14),
(6, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 12:03:29 lei ha effettuato l\'ordine 15 in cui ha acquistato i prodotti:  Cola, katanaburger, il quale costo totale è: 10€ buona giornata.', 15),
(7, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-24 12:03:40 lei ha effettuato l\'ordine 16 in cui ha acquistato i prodotti:  Cola, patatine fritte, katanaburger, il quale costo totale è: 14€ buona giornata.', 16),
(8, 'Conferma avvenuto ordine', 'Signor george1984, la confermiamo che in data 2021-12-27 17:16:05 lei ha effettuato l\'ordine 17 in cui ha acquistato i prodotti:  Cola, patatine fritte, Pizza, katanaburger, PANINOZZO, il quale costo totale è: 34€, il delivery partirà fra 15 minuti, buona giornata.', 17),
(9, 'Conferma avvenuto ordine', 'Signor spera_carmela, la confermiamo che in data 2021-12-28 15:30:13 lei ha effettuato l\'ordine 18 in cui ha acquistato i prodotti:  Cola, patatine fritte, il quale costo totale è: 6€, il delivery partirà fra 15 minuti, buona giornata.', 18);

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

--
-- Dump dei dati per la tabella `ordini`
--

INSERT INTO `ordini` (`codice_ordine`, `UserID`, `DataOra`) VALUES
(1, 5, '2021-12-23 14:25:51'),
(2, 5, '2021-12-23 14:28:09'),
(3, 5, '2021-12-23 14:42:27'),
(4, 5, '2021-12-23 14:52:30'),
(5, 5, '2021-12-23 14:52:40'),
(6, 5, '2021-12-24 10:23:51'),
(7, 5, '2021-12-24 10:25:17'),
(8, 5, '2021-12-24 10:25:29'),
(9, 5, '2021-12-24 10:25:56'),
(10, 5, '2021-12-24 10:25:57'),
(11, 5, '2021-12-24 10:27:50'),
(12, 5, '2021-12-24 10:29:41'),
(13, 5, '2021-12-24 10:33:04'),
(14, 5, '2021-12-24 10:33:56'),
(15, 5, '2021-12-24 11:03:29'),
(16, 5, '2021-12-24 11:03:40'),
(17, 5, '2021-12-27 16:16:05'),
(18, 4, '2021-12-28 14:30:13');

-- --------------------------------------------------------

--
-- Struttura della tabella `prod-ordine`
--

CREATE TABLE IF NOT EXISTS `prod-ordine` (
  `codice_prodotto` int(8) UNSIGNED NOT NULL,
  `codice_ordine` int(8) NOT NULL,
  `quantita_ordinata` int(5) NOT NULL,
  KEY `codice_ordine` (`codice_ordine`),
  KEY `codice_prodotto` (`codice_prodotto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `prod-ordine`
--

INSERT INTO `prod-ordine` (`codice_prodotto`, `codice_ordine`, `quantita_ordinata`) VALUES
(1, 1, 1),
(3, 1, 1),
(4, 1, 1),
(5, 1, 1),
(6, 1, 1),
(2, 1, 1),
(1, 2, 2),
(4, 2, 1),
(6, 2, 1),
(5, 2, 1),
(3, 3, 2),
(4, 3, 1),
(5, 3, 1),
(6, 3, 1),
(1, 4, 1),
(5, 4, 1),
(3, 6, 6),
(4, 6, 4),
(6, 6, 4),
(1, 11, 1),
(5, 11, 1),
(4, 11, 2),
(3, 12, 1),
(5, 12, 1),
(1, 12, 1),
(1, 13, 1),
(5, 13, 1),
(2, 13, 1),
(6, 13, 1),
(1, 14, 1),
(2, 14, 1),
(6, 14, 1),
(1, 15, 1),
(5, 15, 1),
(1, 16, 1),
(3, 16, 1),
(5, 16, 1),
(1, 17, 1),
(3, 17, 1),
(4, 17, 2),
(5, 17, 1),
(6, 17, 1),
(1, 18, 1),
(3, 18, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `prodotti`
--

CREATE TABLE IF NOT EXISTS `prodotti` (
  `codice_prodotto` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `prezzo` int(4) NOT NULL,
  `quantita_disponibile` int(5) NOT NULL,
  `ingredienti` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`codice_prodotto`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `prodotti`
--

INSERT INTO `prodotti` (`codice_prodotto`, `nome`, `prezzo`, `quantita_disponibile`, `ingredienti`, `img`) VALUES
(1, 'Cola', 2, 1, 'segreto', 'cocacola.jpg'),
(2, 'samurai treccia', 8, 100, 'pane(treccia), hamburger, melanzane gratinate, salsa samurai', 'panino_con_spalla.jpg'),
(3, 'patatine fritte', 4, 20, 'patate, olio di semi, sale, pepe', 'patatinefritte.jpg'),
(4, 'Pizza', 5, 124, 'Impasto con farina 00, mozzarella, pomodoro, basilico, olio extravergine d\'oliva', 'pizze_classiche_gourmet.jpg\r\n'),
(5, 'katanaburger', 8, 10, 'pane giapponese, hamburger, mozzarella di bufala, salsa alla mortadella, rucola, cetriolini', 'panino_gourmet.png\r\n'),
(6, 'PANINOZZO', 10, 194, 'Panino con semola, carne di chianina, bacon croccante, guanciale, pomodoro fresco, insalata, salsa d', 'toasts.jpg');

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
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(120) COLLATE utf8_unicode_ci NOT NULL,
  `attivo` tinyint(1) NOT NULL,
  PRIMARY KEY (`UserID`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dump dei dati per la tabella `users`
--

INSERT INTO `users` (`UserID`, `username`, `email`, `password`, `attivo`) VALUES
(1, 'tom', 'tom22@gmail.com', 'tom_e_jerry11', 1),
(2, 'camaleonte', 'carlettorossimbaldi@gmail.com', '1234', 1),
(3, 'carmiSpii33', 'carmelospyder@gmail.com', 'password', 1),
(4, 'spera_carmela', 'carmelasperanza@gmail.com', 'caramellagommosa', 1),
(5, 'george1984', 'georgy@gmail.com', 'mipiacelamalinconia213', 1);

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `carrello`
--
ALTER TABLE `carrello`
  ADD CONSTRAINT `cod_prodotto` FOREIGN KEY (`cod_prodotto`) REFERENCES `prodotti` (`codice_prodotto`),
  ADD CONSTRAINT `cod_utente` FOREIGN KEY (`cod_utente`) REFERENCES `users` (`UserID`);

--
-- Limiti per la tabella `notifiche`
--
ALTER TABLE `notifiche`
  ADD CONSTRAINT `codice_ordine` FOREIGN KEY (`codice_ordine`) REFERENCES `ordini` (`codice_ordine`);

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
